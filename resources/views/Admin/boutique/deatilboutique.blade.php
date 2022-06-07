@extends('layouts.adminmaster')
@section('content')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom gutter-b">
                <div class="card-body">
                    <div class="d-flex">
                        <!--begin: Pic-->
                        <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                            <div class="symbol symbol-50 symbol-lg-120">
                                <img src="{{ Storage::url($boutique->image) }}" alt="image" />
                            </div>
                            <div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">
                                <span class="font-size-h3 symbol-label font-weight-boldest">JM</span>
                            </div>
                        </div>
                        <!--end: Pic-->
                        <!--begin: Info-->

                        <div class="flex-grow-1">
                            <!--begin: Title-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <div class="mr-3">
                                    <!--begin::Name-->
                                    <a href="#"
                                        class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{ $boutique->name }}
                                        <i class="flaticon2-correct text-success icon-md ml-2"></i></a>
                                    <!--end::Name-->
                                    <!--begin::Contacts-->
                                    <div class="d-flex flex-wrap my-2">

                                          <a href="#" class="text-muted text-hover-primary font-weight-bold">
                                            <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Map/Marker2.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z"
                                                            fill="#000000" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>Faculté des sciences</a>
                                    </div>
                                    <!--end::Contacts-->
                                </div>
                                <div class="my-lg-0 my-1">
                                    <a href=" "
                                        class="btn btn-sm btn-light-success font-weight-bolder text-uppercase mr-3">Info</a>
                                    <a href=" " class="btn btn-sm btn-info font-weight-bolder text-uppercase">
                                        Employers</a>
                                </div>
                            </div>
                            <!--end: Title-->
                            <!--begin: Content-->
                            <div class="d-flex align-items-center flex-wrap justify-content-between">
                                <div class="flex-grow-1 font-weight-bold text-dark-50 py-5 py-lg-2 mr-5">
                                    {{ $boutique->description }} </div>
                                <div class="d-flex flex-wrap align-items-center py-2">
                                    <div class="d-flex align-items-center mr-10">
                                        <div class="mr-6">
                                            <div class="font-weight-bold mb-2">Start Date</div>
                                            <span
                                                class="btn btn-sm btn-text btn-light-primary text-uppercase font-weight-bold">{{ $boutique->timDebut }}
                                                AM </span>
                                        </div>
                                        <div class="">
                                            <div class="font-weight-bold mb-2">Due Date</div>
                                            <span
                                                class="btn btn-sm btn-text btn-light-danger text-uppercase font-weight-bold">{{ $boutique->timeFin }}
                                                PM</span>
                                        </div>
                                    </div>
                                    {{-- <div class="flex-grow-1 flex-shrink-0 w-150px w-xl-300px mt-4 mt-sm-0">
                                    <span class="font-weight-bold">Progress</span>
                                    <div class="progress progress-xs mt-2 mb-2">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 63%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="font-weight-bolder text-dark">78%</span>
                                </div> --}}
                                </div>
                            </div>
                            <!--end: Content-->
                        </div>
                        <!--end: Info-->
                    </div>
                    <div class="separator separator-solid my-7"></div>
                    <!--begin: Items-->
                    <div class="d-flex align-items-center flex-wrap">
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">


                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                            <span class="mr-4">
                                <i class="flaticon-confetti icon-2x text-muted font-weight-bold"></i>
                            </span>
                            <div class="d-flex flex-column text-dark-75">
                                <span class="font-weight-bolder font-size-sm">ICE</span>
                                <span class="font-weight-bolder font-size-h5">
                                    <span class="text-dark-50 font-weight-bold">{{ $boutique->cfe }}
                            </div>
                            <!--end: Item-->
                            <!--begin: Item-->
                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                <span class="mr-4">
                                    <i class="flaticon-pie-chart icon-2x text-muted font-weight-bold"></i>
                                </span>
                                <div class="d-flex flex-column text-dark-75">
                                    <span class="font-weight-bolder font-size-sm">IF NUMBER</span>
                                    <span class="font-weight-bolder font-size-h5">
                                        <span class="text-dark-50 font-weight-bold">{{ $boutique->if }}
                                </div>
                            </div>
                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                <span class="mr-4">
                                    <i class="flaticon-pie-chart icon-2x text-muted font-weight-bold"></i>
                                </span>
                                <div class="d-flex flex-column text-dark-75">
                                    <span class="font-weight-bolder font-size-sm">Boutique name</span>
                                    <span class="font-weight-bolder font-size-h5">
                                        <span class="text-dark-50 font-weight-bold">{{ $boutique->name }}
                                </div>
                            </div>
                            <!--end: Item-->
                            <!--begin: Item-->
                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                <span class="mr-4">
                                    <i class="flaticon-network icon-2x text-muted font-weight-bold"></i>
                                </span>
                                <div class="d-flex flex-column">
                                    <span class="text-dark-75 font-weight-bolder font-size-sm">Boutique Users</span>
                                    <a href="boutique/users" class="text-primary font-weight-bolder">View</a>
                                </div>
                            </div>
                            <!--end: Item-->
                            <!--begin: Item-->

                            <!--end: Item-->
                            <!--begin: Item-->

                            <!--end: Item-->
                        </div>
                        <!--begin: Items-->

                    </div>
                </div>

            </div>
            <div class="card card-custom gutter-b">
            <div class="card-body py-0">
                <!--begin::Table-->
                <div>{{-- <h5>Liste the utlisateurs de cette boutique</h5> --}}</div>
                <div class="table-responsive">
                    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_4">
                        <thead>
                            <tr class="text-left">
                                <th class="pl-0" style="width: 30px">
                                    <label class="checkbox checkbox-lg checkbox-inline mr-2">
                                        <input type="checkbox" value="1" />
                                        <span></span>
                                    </label>
                                </th>
                                <th class="pl-0" style="min-width: 120px">Order id</th>
                                <th style="min-width: 110px">Image</th>
                                <th style="min-width: 110px">Full Name</th>
                                <th style="min-width: 110px">
                                    <span class="text-primary">Date</span>
                                    <span class="svg-icon svg-icon-sm svg-icon-primary">
                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Down-2.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.3" x="11" y="4" width="2"
                                                    height="10" rx="1" />
                                                <path
                                                    d="M6.70710678,19.7071068 C6.31658249,20.0976311 5.68341751,20.0976311 5.29289322,19.7071068 C4.90236893,19.3165825 4.90236893,18.6834175 5.29289322,18.2928932 L11.2928932,12.2928932 C11.6714722,11.9143143 12.2810586,11.9010687 12.6757246,12.2628459 L18.6757246,17.7628459 C19.0828436,18.1360383 19.1103465,18.7686056 18.7371541,19.1757246 C18.3639617,19.5828436 17.7313944,19.6103465 17.3242754,19.2371541 L12.0300757,14.3841378 L6.70710678,19.7071068 Z"
                                                    fill="#000000" fill-rule="nonzero"
                                                    transform="translate(12.000003, 15.999999) scale(1, -1) translate(-12.000003, -15.999999)" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </th>
                                <th style="min-width: 120px">Email</th>
                                <th style="min-width: 120px">Profession</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($boutique->users as $user)
                                <tr>
                                    <td class="pl-0 py-6">
                                        <label class="checkbox checkbox-lg checkbox-inline">
                                            <input type="checkbox" value="1" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="pl-0">
                                        <a href="#"
                                            class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg"> </a>
                                    </td>
                                    <td data-field="OrderID" aria-label="64616-103" class="datatable-cell"><span style="width: 250px;"><div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-40 symbol-circle symbol-light-warning">
                                                  <span class="symbol-label font-size-h4"><img class="fit-picture"
                                                    src="/media/cc0-images/grapefruit-slice-332-332.jpg"
                                                    alt="Grapefruit slice atop a pile of other slices"></span>								</div>
                                                   <td>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg"> {{$user->pivot->name}}</span>
                                        <span class="text-muted font-weight-bold"></span>
                                    </td>
                                    <td>
                                        <span
                                            class="text-primary font-weight-bolder d-block font-size-lg"> {{ auth()->user()->email}} </span>
                                        <span class="text-muted font-weight-bold"> </span>
                                    </td>
                                    <td>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg"> </span>
                                        <span class="text-muted font-weight-bold"> </span>
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!--end::Table-->
            </div>
            </div>
        </div>


    </div>

@endsection

@section('css')
    <link href="./assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/profile.css')}}" rel="stylesheet" type="text/css" />
@endsection
