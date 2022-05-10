

@extends('layouts.master')

@section('content')

<div class="card mb-3">
    {{-- <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="..."> --}}
    <div class="card-body">
        <div class=" text-right">
            <a href="form/create" class="btn " ></a>


        </div>
        <h5 class="card-title">List of Ligne Commandes :</h5>
        {{-- <p class="card-text">You can find here all the informatins about Menu in the system</p> --}}

         <table class="table table-bordered table-striped"   id="table">
         <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">ID</th>
                <th class="text-center">Reference</th>
                <th class="text-center">etudiant</th>
                <th class="text-center">Boutique</th>
                <th class="text-center">Quantité</th>
                <th class="text-center">Prix(dh)</th>
                <th class="text-center">Total</th>
                <th class="text-center">status</th>
                <th class="text-center">Date</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($commande->produits as $item)
            {{dd($item)}}
            <tr >
                <td></td>
                <td>{{$item->id}}</td>
                <td>{{$item->reference}}</td>
                <td>{{$item->etudiant->nom}} {{$item->etudiant->prenom}}</td>
                <td>{{$item->boutique->name}}</td>
                <td>{{$item->total}}</td>
                <td>{{$item->produit->prix}}</td>
                <td></td>
                <td>{{$item->status}}</td>
                <td>{{$item->created_at}}</td>
                <td>
                  {{--   <button class="edit-modal btn btn-info"
                        data-info="{{$item->id}},{{$item->produit_id}},{{$item->quantite}}">
                        <span class="glyphicon glyphicon-edit"></span> Edit
                    </button> --}}
                    {{-- <button class="fa fa-check-square-o"
                        data-info="{{$item->id}},{{$item->produit_id}},{{$item->quantite}}">
                        <span class="glyphicon glyphicon-trash"></span> Done
                    </button> --}}
                    <a href="" class="btn btn-danger" >
                        <i class="fa fa-trash"></i></a>

                </td>
            </tr>
            @endforeach

            </tbody>

    </table>
    </div>
</div>


@endsection


@section('script')

		<script src="{{asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>


		<script src="{{asset('assets/js/demo1/pages/crud/datatables/advanced/multiple-controls.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/js/demo1/pages/crud/datatables/advanced/multiple-controls.js')}}" type="text/javascript"></script>
        <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });


    </script>
@endsection


@section('css')
<link href="{{asset('assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/profile.css')}}" rel="stylesheet" type="text/css" />

@endsection
