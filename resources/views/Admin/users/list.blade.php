@extends('layouts.adminmaster')
@section('content')

<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <div class="card card-custom">
                    <!--begin::Header-->
                    <div class="card-header border-0 py-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">Boutique   Users</span>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 4+  members</span>
                        </h3>

                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-0">
                        <!--begin::Table-->
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

                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="pl-0 py-6">
                                                <label class="checkbox checkbox-lg checkbox-inline">
                                                    <input type="checkbox" value="1" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="pl-0">
                                                <a href="#"
                                                    class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{ $user->id }}</a>
                                            </td>
                                            <td data-field="OrderID" aria-label="64616-103" class="datatable-cell"><span style="width: 250px;"><div class="d-flex align-items-center">
                                                								<div class="symbol symbol-40 symbol-circle symbol-light-warning">
                                                      	<span class="symbol-label font-size-h4"><img src="image/s/vc.jpg" width="50" height="50" alt=" " /></span>								</div>
                                                           <td>
                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $user->name }}</span>
                                                <span class="text-muted font-weight-bold"></span>
                                            </td>
                                            <td>
                                                <span
                                                    class="text-primary font-weight-bolder d-block font-size-lg">{{ $user->created_at }}</span>
                                                <span class="text-muted font-weight-bold"> </span>
                                            </td>
                                            <td>
                                                <span
                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $user->email }}</span>
                                                <span class="text-muted font-weight-bold"> </span>
                                            </td>
                                            <td>
                                                <span
                                                    class="label label-lg label-light-warning label-inline">Utilisateur</span>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Advance Table Widget 10-->
                <!--end::Section-->
                {{-- </div> --}}
                <!--end::Layout-->
                {{-- </div> --}}
                <!--end::Page Layout-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
</div>
@endsection


@section('css')
    <link href="./assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/profile.css')}}" rel="stylesheet" type="text/css" />

    @endsection
