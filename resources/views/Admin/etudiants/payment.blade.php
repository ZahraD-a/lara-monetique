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
                                   Bank Transfer
                               </a>
            </li>
          </ul>
          <!-- End -->
          <!-- Credit card form content -->
          <div class="tab-content">
            <!-- credit card info-->
            <div id="nav-tab-card" class="tab-pane fade show active">
              <p class="alert alert-success">Some text success or error</p>
              <form role="form">
                <div class="form-group">
                  <label for="username">Full name (on the CIH)</label>
                  <input type="text" name="username" placeholder="student" required class="form-control">
                </div>

                <div class="form-group">
                  <label for="cardNumber">Account number</label>
                  <div class="input-group">
                    <input type="text" name="cardNumber" placeholder="Your account number" class="form-control" required>
                    <div class="input-group-append">
                      <span class="input-group-text text-muted">
                                                  <i class="fa fa-cc-visa mx-1"></i>
                                                  <i class="fa fa-cc-amex mx-1"></i>
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
                        <input type="number" placeholder="MM" name="" class="form-control" required>
                        <input type="number" placeholder="YY" name="" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group mb-4">
                      <label title="Three-digits code on the back of your card"> Prix (DH)

                                              </label>
                      <input type="text" required class="form-control">
                    </div>
                  </div>
                </div>
                <button type="button" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> Confirm  </button>
              </form>
            </div>
            <!-- End -->
            <!-- Paypal info -->

            <!-- End -->
            <!-- bank transfer info -->
            <div id="nav-tab-bank" class="tab-pane fade">
              <h6>Bank account details</h6>
              <dl>
                <dt>Bank</dt>
                <dd> THE WORLD BANK</dd>
              </dl>
              <dl>
                <dt>Account number</dt>
                <dd>7775877975</dd>
              </dl>
              <dl>
                <dt>IBAN</dt>
                <dd>CZ7775877975656</dd>
              </dl>
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
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
    <link href="./css/profile.css" rel="stylesheet" type="text/css" />
@endsection
