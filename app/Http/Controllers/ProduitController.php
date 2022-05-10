<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File;

class ProduitController extends Controller
{
    public function index()
    {
       $produits = DB::select('select * from produits');
       return view('form.produit', ['produits' => $produits]);
    }

    public function create()
    {
      $produits = Produit::all() ;
      return view('form.createMenu',['produits'=>$produits,'layout'=>'create']);
    }
    public function store(Request $request)
    {
        $produit = new Produit() ;
        $produit->name = $request->input('name') ;
        $produit->category = $request->input('category') ;
        $produit->description = $request->input('description') ;
        $produit->prix = $request->input('prix') ;
        $produit->status = $request->input('status') ;
        $produit->quantite = $request->input('quantite') ;

        if($request->hasFile('image')){

            $path = $request->file('image')->store('image/s');
            $produit->image = $path;
        }


        $produit->save() ;
        return redirect('/form/new') ;
    }
    // form save
    public function save( Request $request)
    {
        $no_id              = $request->no_id;
        $description        = $request->description;
        $status_checkbox    =   $request->status_checkbox;
        for($i=0;$i<count($no_id);$i++)
        {
            $datasave   =   [

                'no_id'       => $no_id[$i],
                'description' => $description[$i],
                'status'      => $status_checkbox[$i],
            ];

            // return dd($datasave);
            DB::table('save_checklist_tbl')->insert($datasave);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
      $produit = Produit::find($id);
      $produits = Produit::all() ;
      return view('form.editProduit',['produits'=>$produits,'produit'=>$produit,'layout'=>'edit']);

    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'status' => 'required',
            'prix' => 'required'
        ]);

        $post = Produit::find($id);

        if($request->hasFile('image')){

            $path = $request->file('image')->store('image/s');
            $post->image = $path;
        }
        $post->name = $request->name;
        $post->description = $request->description;
        $post->category = $request->category;
        $post->prix = $request->prix;
        $post->status = $request->status;
        $post->save();
         return redirect()->back()
        ->with('success','Post updated successfully');
    }
    // view
    public function viewReport()
    {
        $data=  DB::table('save_checklist_tbl')->get();
        // return dd($data);
        return view('report.report',compact('data'));
    }

    public function destroy($id)
    {
        $produit = Produit::find($id);
        $destination = 'image/s/'.$produit->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $produit->delete();
        return redirect()->back()->with('status','Produit Image Deleted Successfully');
    }
}
