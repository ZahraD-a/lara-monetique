<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Boutique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BoutiqueController extends Controller
{
    public function index()
    {

       return view('form.profile');
    }
    public function show(Boutique $boutique)
    {
        return view('Admin.transaction.boutiqueTrans', ['boutique' => $boutique]);

    }

    public function AdminBoutique()
    {
        $boutiques = DB::select('select * from boutiques');
       return view('Admin.boutique.listboutique', ['boutiques' => $boutiques]);
    }
    public function DetailBoutique(Boutique $boutique)
    {

       return view('Admin.boutique.deatilboutique', ['boutique' => $boutique]);

    }
    public function createBoutique()
    {

       return view('Admin.boutique.Addboutique');
    }
    public function create()
    {
      return view('form.profile',['layout'=>'create']);
    }
    public function AddBoutique(Request $request)
    {

        $user = new User() ;
        $user->email = $request->input('email') ;
        $user->password =Hash::make('password');
        $user->type = value('admin boutique');
        $user->save();

        $btq = new Boutique() ;
        $btq->name = $request->input('name') ;
        $btq->user_id = $user->id ;

        //$btq->boutiques()->attach($btq->id);
        if($request->file('image')){

        $btq->image=$request->file('image')->store('image/s');//port problem

        }

        $btq->save() ;

        $btq->users()->attach($user->id);//add id user to pivot table


        return redirect('/admin/boutique') ;
    }

    public function store(Request $request)
    {
        $btq = new Boutique() ;
        $btq->name = $request->input('name') ;
        $btq->if =  $request->input('if') ;
        $btq->cfe = $request->input('cfe') ;
        $btq->description = $request->input('description') ;
        $btq->timDebut =  $request->input('timDebut') ;
        $btq->timeFin = $request->input('timeFin') ;
        $btq->user_id = $request->input('user_id') ;
        if ($request->hasfile('image')){
            $file = $request->file('image')->store('image/s');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image/s/', $filename);
            $btq->image = $filename;
        }


        $btq->save() ;
        return redirect('/form/profile') ;
    }
    public function destroy($id)
    {
        $btq = Boutique::find($id);

        $btq->delete();
        return redirect()->back()->with('status','  Deleted Successfully');
    }
    public function edit($id)
    {
        $btq = Boutique::findOrFail($id);
        return view('form.profile',compact('btq'));
    }

    public function update(Request $request)
    {
         if($request->hasFile('image')){

            $path = $request->file('image')->store('image/s');
            $post->image = $path;
        }
        // dd($request->all());

        auth()->user()->boutique->fill($request->all())->save();
        return redirect('/user/profile') ;


    }

    public function updateUser(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        auth()->user()->user->save();
        return redirect(' users');
    }
}
