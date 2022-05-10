@extends('layouts.adminmaster')
@section('content')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-body p-0">
                    <!--end::Wizard Nav-->
                    <!--begin::Wizard Body-->
                    <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                        <div class="col-xl-12 col-xxl-7">
                            <!--begin::Form Wizard-->
                            <form action="{{ url('boutique/store') }}" method="post" id="kt_projects_add_form"
                                enctype="multipart/form-data">
                                <!--begin::Step 1-->

                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div class="pb-5" data-wizard-type="step-content">
                                    <div class="row">
                                        <div class="col-xl-12">

                                            <div class="form-group row">
                                                @csrf
                                                <div class="col-lg-9 col-xl-6">
                                                    <h3 class="mb-10 font-weight-bold text-dark">New Boutique </h3>
                                                </div>
                                                <div class="alert alert-custom alert-default" role="alert">
                                                    <div class="alert-icon">
                                                        <span class="svg-icon svg-icon-primary svg-icon-xl">
                                                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Tools/Compass.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <path
                                                                        d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z"
                                                                        fill="#000000" opacity="0.3"></path>
                                                                    <path
                                                                        d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z"
                                                                        fill="#000000" fill-rule="nonzero"></path>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </div>
                                                    <div class="alert-text"> Add name and email of this boutique, then
                                                        get the password automaticly by email,
                                                        Add image of this boutique.</div>
                                                </div>
                                            </div>
                                            <div class="form-group row">

                                                <div class="image">
                                                    <label>
                                                        <h4>Add image</h4>
                                                    </label>
                                                    <input type="file" class="form-control" name="image" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Name de Boutique :</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Boutique Name " aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Boutique Email : </label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input type="text" class="form-control" name="email"
                                                        placeholder="Email" aria-describedby="basic-addon1">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->

                                <!--end::Step 3-->
                                <!--begin::Step 4-->

                                <!--end::Step 4-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                    <div></div>
                                    <div>
                                        <button href="{{ url('admin/boutique') }}" type="submit"
                                            class="btn btn-success font-weight-bolder text-uppercase px-9 py-4"
                                            data-wizard-type="action-submit">Submit</button>
                                        <button type="submit"
                                            class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4"
                                            data-wizard-type="action-next">Cancel</button>
                                    </div>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form Wizard-->
                        </div>
                    </div>
                    <!--end::Wizard Body-->

                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
@endsection


@section('css')
    <link href="./assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="./css/profile.css" rel="stylesheet" type="text/css" />
@endsection
