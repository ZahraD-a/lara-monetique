@extends('layouts.adminmaster')
@section('content')
    <div class="col-md-7 col-lg-12 col-xxl-7">
        <!--begin::Engage Widget 14-->
        <div class="card card-custom card-stretch gutter-b">

            <div class="card-body p-15 pb-20">
                <div class="row mb-17">
                    <div class="col-xxl-5 mb-11 mb-xxl-0">
                        <!--begin::Image-->
                        <div class="card card-custom card-stretch">
                            <div class="card-body p-0 rounded px-10 py-15 d-flex align-items-center justify-content-center"
                                style="background-color: rgb(248, 242, 230), 231, 208);">
                                <div class="flex-shrink-3 mr-8 symbol symbol-90 symbol-circle">
                                    {{-- <img src="{{ Storage::url($boutique->image) }}" alt="image" /> --}}
                                </div>
                                <div> <img src="/images/lg.png" class="mw-100 w-200px" style="transform: scale(1.6);">
                                </div>
                            </div>
                        </div>
                        <!--end::Image-->
                    </div>
                    <div class="col-xxl-7 pl-xxl-11">
                        <h5 class="font-weight-bolder  mb-7" style="font-size: 32px;">Operations de
                            "<strong>{{ $boutique->name }}</strong>" </h5>

                        {{-- <div class="line-height-xl"> Deux activités peuvent prétendre au titre des opérations de banque : La
                            première pération désigne le fait d'une
                            recharge de compte au sein de notre établissement,
                            et les opérations de decharge qui éetaient effectue dans les boutique. </div> --}}
                    </div>
                </div>
                <div class="row mb-6">

                    <!--begin::Info-->
                    <div class="col-6 col-md-3">
                        <div class="mb-8 d-flex flex-column">
                            <span class="text-dark font-size-h4 font-weight-bolder ml-0">Num etudiant</span>
                            <span>-----------------------------</span>
                            @foreach ($boutique->transactions as $transaction)
                                <span
                                    class="text-Dark font-size-h5 font-weight-bolder ml-0">{{ $transaction->etudiant_id }}
                                </span>

                                <span>-----------------------------</span>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="mb-8 d-flex flex-column">
                            <span class="text-dark font-size-h4 font-weight-bolder ml-0">Nom etudiant</span>
                            <span>-----------------------------</span>
                            @foreach ($boutique->transactions as $transaction)
                                <span
                                    class="text-Dark font-size-h5 font-weight-bolder ml-0">{{ $transaction->etudiant->nom }}-{{ $transaction->etudiant->prenom }}</span>

                                <span>-----------------------------</span>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="mb-8 d-flex flex-column">
                            <span class="text-dark font-size-h4 font-weight-bolder ml-0">Date</span>
                            <span>-----------------------------</span>

                            @foreach ($boutique->transactions as $transaction)
                                <span class="text-dark font-size-h5 font-weight-bolder ml-0">{{ $transaction->datePay }}
                                </span>

                                <span>---------------------</span>
                            @endforeach

                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="mb-8 d-flex flex-column">
                            <span class="text-dark font-size-h4 font-weight-bolder ml-0"> Montant</span>
                            <span>---------------------</span>
                            @foreach ($boutique->transactions as $transaction)
                                <span class="text-danger font-size-h5 font-weight-bolder ml-0">{{ $transaction->montant }}
                                    Dh</span>

                                <span>---------------------</span>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="mb-8 d-flex flex-column">
                            <span class="text-danger font-size-h4 font-weight-bolder ml-0"> Total (Dh)</span>
                            <span>---------------------</span>
                            <?php
                            $sum = 0;
                            ?>
                            @foreach ($boutique->transactions as $transaction)
                                <?php
                                $sum += $transaction->montant;
                                ?>
                            @endforeach
                            <span class="text-primary font-size-h5 font-weight-bolder ml-0"> {{ $sum }}</span>

                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="mb-8 d-flex flex-column">

                            <span   class="btn btn-light-primary  " >Paid
                                 </span>
                            <span class="svg-icon">
                        </div>
                    </div>



                    <!--end::Info-->
                </div>
                <!--begin::Buttons-->
                <div class="d-flex">
                    <button type="button" class="btn btn-light-primary font-weight-bold" onclick="window.print();">Download
                        Order Details</button>
                    <span class="svg-icon">
                </div>
                <!--end::Buttons-->
            </div>

        </div>
        <!--end::Engage Widget 14-->
    </div>
@endsection
@section('css')
    <link href="./assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet" type="text/css" />
@endsection
