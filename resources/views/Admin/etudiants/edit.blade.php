
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
                            <span class="card-label font-weight-bolder text-dark"> Students list</span>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 3+  members</span>
                        </h3>

                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <form action="{{  route('etudiantupdate',$student->id) }}" method="post" id="myForm"
                        class="kt-form kt-form--fit kt-form--label-right" enctype="multipart/form-data">

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
                                        <th class="pl-0" style="min-width: 120px">Student id</th>
                                        <th style="min-width: 110px">Image</th>
                                        <th style="min-width: 120px">Full name</th>
                                        <th style="min-width: 120px">CNE</th>
                                        <th style="min-width: 120px">CIN</th>
                                        <th style="min-width: 120px">Num compte</th>
                                        <th style="min-width: 120px">Solde</th>
                                        <th style="min-width: 120px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td class="pl-0 py-6">
                                                <label class="checkbox checkbox-lg checkbox-inline">
                                                    <input type="checkbox" value="1" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="pl-0">
                                                <a href="#"
                                                    class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{ $student->id }}</a>
                                            </td>
                                             <td>
                                                <span
                                                    class="text-primary font-weight-bolder d-block font-size-lg">
                                                    {{-- <img class="" src="avatar/avatar.jpg   " width="60" height="60" alt="photo"> --}}
                                                    <img src="{{ Storage::url($student->image) }}"width="60" height="60" alt="image" />
                                                </span>
                                                <span class="text-muted font-weight-bold"> </span>
                                            </td>
                                            <td>
                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $student->nom }} {{ $student->prenom }}</span>
                                                <span class="text-muted font-weight-bold"></span>
                                            </td>

                                            <td>
                                                <span
                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $student->CNE }}</span>
                                                <span class="text-muted font-weight-bold"> </span>
                                            </td>
                                            <td>
                                                <span
                                                class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $student->CIN }}</span>
                                            <span class="text-muted font-weight-bold"> </span>
                                            </td>
                                           <td>
                                                <span
                                                class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $student->num_compte }}</span>
                                            <span class="text-muted font-weight-bold"> </span>
                                            </td>
                                             <td>
                                                <span
                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $student->solde }} Dh</span>
                                                <span class="text-muted font-weight-bold"> </span>
                                            </td>

                                            <td>
                                                <a href=" "
                                                    class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path
                                                                    d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                    fill="#000000" fill-rule="nonzero"
                                                                    transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                <path
                                                                    d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </a>

                                            </td>

                                        </tr>

                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    </form>
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
    <link href="./assets/vendors/custom/studenttables/studenttables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="./css/profile.css" rel="stylesheet" type="text/css" />
@endsection
