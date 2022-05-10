@extends('layouts.adminmaster')
@section('content')

<div class="container py-5">

    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="bg-white rounded-lg shadow-sm p-5">
          <!-- Credit card form tabs -->
          <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
            <li class="nav-item">
              <a data-toggle="pill" href="#nav-tab-card" class="nav-link active rounded-pill">
                                  <i class="fa fa-credit-card"></i>
                                  Account Card
                              </a>
            </li>

            <li class="nav-item">
              <a data-toggle="pill" href="#nav-tab-bank" class="nav-link rounded-pill">
                                  <i class="fa fa-university"></i>
                                    Last Transaction Information
                               </a>
            </li>
          </ul>
          <!-- End -->
          <!-- Credit card form content -->
          <div class="tab-content">
            <!-- credit card info-->
            <div id="nav-tab-card" class="tab-pane fade show active">
             <p class="alert alert-success">Add salary to   {{$etudiant->nom}} {{$etudiant->prenom}} 's account</p>
              <form action="{{ route('tansaction_store',$etudiant->id )}}" method="post">

                  @csrf
                <div class="form-group">
                  <label for="cardNumber"> Votre solde (Dh)</label>
                  <div class="input-group">
                    <input type="number" name="montant" placeholder="Your mnt" class="form-control" required>
                    <div class="input-group-append">
                      <span class="input-group-text text-muted">
                                                  <i class="fa fa-cc-mastercard mx-1"></i>
                                              </span>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label><span class="hidden-xs">Date de payment</span></label>
                      <div class="input-group">
                        <input type="date" name="datePay" id="date" class="form-control" style="width: 100%; display: inline;"   >
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    {{-- <div class="form-group mb-4">
                      <label title="Three-digits code on the back of your card">status

                      <select id="status " name="status" class="form-control"
                      placeholder="status" required>
                      <option value="in" name="sexe">In</option>
                      <option value="out" name="sexe">Out</option>
                      </select>
                    </div> --}}
                  </div>
                </div>
                <button type="submit" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> Confirm  </button>
              </form>
            </div>
            <!-- End -->
            <!-- Paypal info -->

            <!-- End -->
            <!-- bank transfer info -->
            <div id="nav-tab-bank" class="tab-pane fade">

              <h6>student account details</h6>
              <dl>
                <dt>Name</dt>
                <dd> {{$etudiant->nom}} {{$etudiant->prenom}}</dd>
              </dl>
              <dl>
                <dt>Account number</dt>
                <dd>{{$etudiant->num_compte}}</dd>
              </dl>
              @if($etudiant->latestTransaction->first())
              <dl>
                <dt>  Date de transaction</dt>
                <dd>{{$etudiant->latestTransaction->first()->datePay}}</dd>
              </dl>
              @else
              <dt>  Date de transaction</dt>
                <dd>no transaction yet</dd>
              @endif
              @if($etudiant->latestTransaction->first())
              <dl>
                <dt>Solde </dt>
                <dd>{{$etudiant->latestTransaction->first()->montant}}</dd>
              </dl>
              @else
              <dt> Solde</dt>
                <dd>no transaction yet</dd>
              @endif
              @if($etudiant->latestTransaction->first())
              <p class="text-muted">Cette operation a été effecctuer avec success
              </p>
              @else
              <p class="text-muted">Cette operation n' été pas effecctuer avec success
            </p>
            @endif
              <button type="button" class="btn btn-light-primary font-weight-bold py-4 mr-3 mr-sm-14 my-1" onclick="window.print();">Download Order Details</button>

            </div>

            <!-- End -->
          </div>
          <!-- End -->
        </div>
      </div>
    </div>
  </div>
@endsection
@section('css')
    <link href="./assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/profile.css')}}" rel="stylesheet" type="text/css" />
@endsection
