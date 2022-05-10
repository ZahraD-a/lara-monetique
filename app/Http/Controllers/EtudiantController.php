<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Etudiant::all();
        return view('Admin.etudiants.list', ['students' => $students]);
    }

    public function recharge(Transaction $transactions)
    {
     $students = $transactions->students;
                                // errors not  found if you don't dclare this users
        return view('Admin.etudiants.edit', ['students' => $students]);


    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Etudiant() ;
        $student->solde = $request->input('solde') ;
        // $student->student_id = $student->id;
        $student->save() ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= Etudiant::find($id);
        return view('Admin.etudiants.edit', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Etudiant::find($id);
        dd($student);

        $student = Etudiant::all() ;
        return view('Admin.transaction.create',['student'=>$student,'student'=>$student,'layout'=>'edit']);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Etudiant::find($id);


        $student->solde = $request->solde;
        $student->save();
        return redirect('Admin.etudiants.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
