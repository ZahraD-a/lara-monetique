<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Boutique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserbController extends Controller
{
    public function index()
    {


        $users = DB::select('select * from users
                             where type="user_boutique "');// errors not  found if you don't dclare this users
        return view('form.users', ['users' => $users]);

    }
    public function show()
    {
        $users = DB::select('select * from users
                             where type="user_boutique "');// errors not  found if you don't dclare this users
        return view('form.AllUsers', ['users' => $users]);


    }
    public function UsersBoutique(Boutique $boutique)
    {
     $users = $boutique->users;
                                // errors not  found if you don't dclare this users
        return view('Admin.users.list', ['users' => $users]);


    }
    public function create()
    {
      $users = User::all() ;
      return view('form.createUser',['users'=>$users,'layout'=>'create']);
    }
    public function store(Request $request)
    {
        $user = new User() ;
        $user->name = $request->input('name') ;
        $user->type =  value('user_boutique') ;
        $user->password = $request->input('password') ;
        $user->email = $request->input('email') ;
        // if ($request->hasfile('image')){
        //     $file = $request->file('image');
        //     $extention = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extention;
        //     $file->move('image/s/', $filename);
        //     $user->image = $filename;
        // }


        $user->save() ;
        return redirect('user/show') ;
    }
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();
        return redirect()->back()->with('status','  Deleted Successfully');
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('form.edituser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $data= User::find($id);
        $data->name  = $input['name'];
        $data->type  =   $input['type'];
        $data->email = $input['email'];
        $data->password =  $input['password'];
        $data->save();
        return redirect('form.users');
        // $user->update($request->all());
        // User::whereId($id)->update($update);
        // return redirect('form.users')->with('success','user updated successfully');
        // return redirect()->route('form.users')
        //                 ->with('success','Article updated successfully');
    }
    public function updateUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        auth()->user()->user->fill($request->except('password'))->save();
        return redirect(' users');
    }

}
