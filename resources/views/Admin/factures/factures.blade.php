@extends('layouts.adminmaster')
@section('content')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Row-->
            <div class="row">

                @foreach ($boutiques as $boutique)
                    <!--begin::Column-->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b card-stretch">
                            <!--begin::Body-->
                            <div class="card-body text-center pt-4">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end">
                                    <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions"
                                        data-placement="left">
                                        <a   class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-hor"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <!--begin::Navigation-->

                                            <!--end::Navigation-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::User-->
                                <div class="mt-7">
                                    <div class="symbol symbol-circle symbol-lg-90">
                                        <img src="{{ Storage::url($boutique->image) }}" alt="image" />
                                    </div>
                                </div>
                                <!--end::User-->
                                <!--begin::Name-->
                                <div class="my-4">
                                    <a href="#"
                                        class="text-dark font-weight-bold text-hover-primary font-size-h4">{{ $boutique->name }}</a>
                                </div>
                                <!--end::Name-->
                                <!--begin::Label-->
                                <span class="btn btn-text btn-light-warning btn-sm font-weight-bold">Validée</span>
                                <!--end::Label-->
                                <!--begin::Buttons-->
                                <div class="mt-9">
                                    <a href="{{ route('boutique-factures-liste',['boutique'=>$boutique->id]) }}"
                                        class="btn btn-light-primary font-weight-bolder btn-sm py-3 px-6 text-uppercase">view
                                        facture</a>
                                </div>
                                <!--end::Buttons-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Column-->

                    @endforeach

            </div>
            <!--end::Row-->
            <!--begin::Row-->

            <!--end::Row-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection

@section('css')
    <link href="./assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/profile.css')}}" rel="stylesheet" type="text/css" />
@endsection
