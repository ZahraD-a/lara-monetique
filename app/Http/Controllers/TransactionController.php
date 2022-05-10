<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.transaction.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Etudiant $etudiant)
    {
        $transactions = Transaction::all() ;
        return view('Admin.transaction.create',['transactions'=>$transactions,'layout'=>'create','etudiant'=>$etudiant]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Etudiant $etudiant)
    {


        // $etudiant= Etudiant::find($request->input('etudiant_id'));

        $transactions = new Transaction() ;
        $transactions->montant = $request->input('montant') ;
        $transactions->status = value('In') ;
        $transactions->datePay = $request->input('datePay') ;
        $transactions->etudiant_id = $etudiant->id;


       // $transactions->etudiant()->attach($etudiant->id);//add id user to pivot table

        //$etudiant->save() ;
        $transactions->save() ;

        $etudiant->increaseBalance($request->input('montant'));

          return redirect()->route('etudiant/list') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        return view('Admin.transaction.detailTrans', ['etudiant' => $etudiant]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
