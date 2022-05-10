@extends('layouts.adminmaster')
@section('content')
<div class="card-body">
    <!--begin::Scroll-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class=" text-right">

                <a  href="{{ url('/Addbooutique') }}" ><i class="flaticon2-plus"></i>Add new Boutique</a>


            </div>
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
                                        <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
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
                                  <!--begin::Desc-->
                        <p class="mb-7">{{ $boutique->description }}</p>
                            <a href="#" class="text-primary pr-1"> {{ $boutique->timeFin }}AM-{{ $boutique->timDebut }}PM</a>
                            <!--end::Desc-->
                            <!--begin::Info-->
                            <div class="mb-7">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark-75 font-weight-bolder mr-2">IF:</span>
                                    <a href="#" class="text-muted text-hover-primary">{{ $boutique->if }}</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-cente my-1">
                                    <span class="text-dark-75 font-weight-bolder mr-2">FCE:</span>
                                    <a href="#" class="text-muted text-hover-primary">{{ $boutique->cfe }}</a>
                                </div>

                            </div>
                                <!--begin::Label-->
                                {{-- <span class="btn btn-text btn-light-warning btn-sm font-weight-bold">Status</span> --}}
                                <!--end::Label-->
                                <!--begin::Buttons-->
                                <div class="mt-9">
                                    <a href="{{ route('boutiqueDescription',['boutique'=>$boutique->id]) }}"
                                        class="btn btn-light-primary font-weight-bolder btn-sm py-3 px-6 text-uppercase">view
                                        </a>
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
    <!--end::Scroll-->
</div>
@endsection
@section('css')
    <link href="./assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/profile.css')}}" rel="stylesheet" type="text/css" />
@endsection
