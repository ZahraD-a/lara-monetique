<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Post;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class formController extends Controller
{
    // form view
    public function index()
    {
       $articles = DB::select('select * from articles');
       return view('form.form', ['articles' => $articles]);
    }

    public function create()
    {
      $articles = Article::all() ;
      return view('form.createMenu',['articles'=>$articles,'layout'=>'create']);
    }
    public function store(Request $request)
    {
        $article = new Article() ;
        $article->name = $request->input('name') ;
        $article->description = $request->input('description') ;
        $article->prix = $request->input('prix') ;
        $article->status = $request->input('status') ;
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image/s/', $filename);
            $article->image = $filename;
        }
        $article->save() ;
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
      $article = Article::find($id);
      $articles = Article::all() ;
      return view('form.form',['articles'=>$articles,'article'=>$article,'layout'=>'edit']);

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
        $article = Article::find($id);
        $destination = 'image/s/'.$article->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $article->delete();
        return redirect()->back()->with('status','article Image Deleted Successfully');
    }
}
