@extends('layouts.master')

@section('content')
            <!--begin::Aside-->

            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Page Layout-->
                            <div class="d-flex flex-row">
                                <!--begin::Layout-->
                                <div class="flex-row-fluid">
                                    <!--begin::Section-->
                                    <div class="row">

                                        <div class="col-md-6 col-lg-12 col-xxl-7">
                                            <!--begin::Engage Widget 14-->

                                            <div class="container">
                                                <!--begin::Page Layout-->

                                                <div class="d-flex flex-row">
                                                    <!--begin::Aside-->
                                                    <div class="flex-row-fluid ml-lg-8">
                                                        <!--begin::Card-->
                                                        <div class="card card-custom gutter-b">
                                                            <div class="card-body p-0">

                                                                <div class="kt-portlet kt-portlet--height-fluid">
                                                                    <div class="kt-portlet__head">
                                                                        <div class="kt-portlet__head-label">
                                                                            <h3 class="kt-portlet__head-title">
                                                                                Historique
                                                                            </h3>
                                                                        </div>

                                                                    </div>
                                                                    <div class="kt-portlet__body">
                                                                        <div class="kt-scroll" data-scroll="true" data-height="380" data-mobile-height="300">

                                                                            <!--Begin::Timeline 3 -->
                                                                            <div class="kt-timeline-v2">
                                                                                <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                                                                                    <div class="kt-timeline-v2__item">
                                                                                        <span class="kt-timeline-v2__item-time"> 2022</span>
                                                                                        <div class="kt-timeline-v2__item-cricle">
                                                                                            <i class="fa fa-genderless kt-font-danger"></i>
                                                                                        </div>
                                                                                        <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                                                                                            {{-- User: {{ $commande->boutique->user_id }}<br> --}}
                                                                                            Reference Cmd: {{ $commande->reference }}<br>
                                                                                            Etudiant: {{ $commande->etudiant->nom }}<br>
                                                                                            Status: {{ $commande->status }}

                                                                                        </div>

                                                                                    </div>

                                                                                    @foreach ($commande->historique as $historique)
                                                                                        <div class="kt-timeline-v2__item">
                                                                                            {{-- <span class="kt-timeline-v2__item-time">User: {{$historique->users}}</span> --}}
                                                                                            <div class="kt-timeline-v2__item-cricle">
                                                                                                <i class="fa fa-genderless kt-font-danger"></i>
                                                                                            </div>
                                                                                            <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                                                                                                {{-- User: {{ $commande->boutique->user_id }}<br> --}}
                                                                                                <span class="font-weight-bolder mb-2">User:
                                                                                                    {{ $historique->user->name }}</span><br>
                                                                                                Status Command: {{ $historique->status }}<br>
                                                                                                Date: {{ $historique->created_at }}<br>
                                                                                                {{-- Status: {{ $historique->status }} --}}

                                                                                            </div>
                                                                                        </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>

                                                                            <!--End::Timeline 3 -->
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!--end::Card-->
                                                    </div>
                                                    <div class="flex-row-fluid ml-lg-8">
                                                        <!--begin::Card-->
                                                        <div class="card card-custom gutter-b">
                                                            <div class="card-body p-0">
                                                                <!-- begin: Invoice-->
                                                                <!-- begin: Invoice header-->
                                                                <div class="row justify-content-center py-8 px-8 py-md-27 px-md-0">
                                                                    <div class="col-md-10">
                                                                        <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                                                                            <h1 class="display-4 font-weight-boldest mb-10">ORDER DETAILS</h1>
                                                                            <div class="d-flex flex-column align-items-md-end px-0">
                                                                                <!--begin::Logo-->
                                                                                <a href="#" class="mb-5">
                                                                                    <img src="/metronic/theme/html/demo1/dist/assets/media/logos/logo-dark.png" alt="" />
                                                                                </a>
                                                                                <!--end::Logo-->
                                                                                <span class="d-flex flex-column align-items-md-end opacity-70">
                                                                                    <span>Fs Rabat</span>
                                                                                    <span>Street oued ziz 22</span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="border-bottom w-100"></div>
                                                                        <div class="d-flex justify-content-between pt-6">
                                                                            <div class="d-flex flex-column flex-root">
                                                                                <span class="font-weight-bolder mb-2">ORDER DATE</span>
                                                                                <span class="opacity-70">{{ $commande->created_at }}</span>
                                                                            </div>
                                                                            <div class="d-flex flex-column flex-root">
                                                                                <span class="font-weight-bolder mb-2">ORDER Ref.</span>
                                                                                <span class="opacity-70">{{ $commande->reference }}</span>
                                                                            </div>
                                                                            <div class="d-flex flex-column flex-root">
                                                                                <span class="font-weight-bolder mb-2">DELIVERED TO.</span>
                                                                                <span class="opacity-70">{{ $commande->etudiant->prenom }} {{ $commande->etudiant->nom }}
                                                                                 </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end: Invoice header-->
                                                                <!-- begin: Invoice body-->
                                                                <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                                                                    <div class="col-md-10">
                                                                        <div class="table-responsive">
                                                                            <table class="table">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th class="pl-0 font-weight-bold text-muted text-uppercase">Ordered Items</th>
                                                                                        <th class="text-right font-weight-bold text-muted text-uppercase">Qty</th>
                                                                                        <th class="text-right font-weight-bold text-muted text-uppercase">Unit Price</th>
                                                                                        <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Amount</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @foreach ($commande->produits as $produit)
                                                                                    <tr class="font-weight-boldest">
                                                                                        <td class="border-0 pl-0 pt-7 d-flex align-items-center">
                                                                                        <!--begin::Symbol-->
                                                                                        <div class="symbol symbol-40 flex-shrink-0 mr-4 bg-light">
                                                                                            <div class="symbol-label" style="background-image: url('/metronic/theme/html/demo1/dist/assets/media/products/11.png')"></div>
                                                                                        </div>
                                                                                        <!--end::Symbol-->
                                                                                        {{ $produit->name }} </td>
                                                                                        <td class="text-right pt-7 align-middle">{{ $produit->pivot->quantite }}</td>
                                                                                        <td class="text-right pt-7 align-middle">{{ $produit->prix }}  </td>
                                                                                        <td class="text-primary pr-0 pt-7 text-right align-middle">{{ $produit->pivot->quantite * $produit->prix }} DH</td>
                                                                                    </tr>
                                                                                    @endforeach

                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end: Invoice body-->
                                                                <!-- begin: Invoice footer-->
                                                                <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0 mx-0">
                                                                    <div class="col-md-10">
                                                                        <div class="table-responsive">
                                                                            <table class="table">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th class="font-weight-bold text-muted text-uppercase">PAYMENT STATUS</th>
                                                                                        <th class="font-weight-bold text-muted text-uppercase"></th>
                                                                                        <th class="font-weight-bold text-muted text-uppercase"> </th>
                                                                                        <th class="font-weight-bold text-muted text-uppercase text-right">TOTAL PAID</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr class="font-weight-bolder">
                                                                                        <td>{{ $commande->status }} </td>
                                                                                        <td> </td>
                                                                                        <td> </td>
                                                                                        <td class="text-primary font-size-h3 font-weight-boldest text-right">789.00 Dh</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end: Invoice footer-->
                                                                <!-- begin: Invoice action-->
                                                                <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                                                                    <div class="col-md-10">
                                                                        <div class="d-flex justify-content-between">
                                                                            <button type="button" class="btn btn-light-primary font-weight-bold" onclick="window.print();">Download Order Details</button>
                                                                            <button type="button" class="btn btn-primary font-weight-bold" onclick="window.print();">Print Order Details</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end: Invoice action-->
                                                                <!-- end: Invoice-->
                                                            </div>
                                                        </div>
                                                        <!--end::Card-->
                                                    </div>
                                                    <!--end::Aside-->
                                                    <!--begin::Layout-->

                                                    <!--end::Layout-->
                                                </div>
                                                <!--end::Page Layout-->
                                            </div>
                                            <!--end::Engage Widget 14-->
                                        </div>

                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Section-->
                                    <!--begin::Advance Table Widget 10-->

                                    <!--end::Advance Table Widget 10-->
                                    <!--end::Section-->
                                </div>
                                <!--end::Layout-->
                            </div>
                            <!--end::Page Layout-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>


    <script src="{{ asset('assets/js/demo1/pages/crud/datatables/advanced/multiple-controls.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/js/demo1/pages/crud/datatables/advanced/multiple-controls.js') }}"
        type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });


        $('.showEditModal').click(function(e) {


            course_id = e.target.parentElement.previousElementSibling.innerText
            phone = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling
                .previousElementSibling.innerText
            name = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling
                .previousElementSibling.previousElementSibling.previousElementSibling.innerText
            id = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling
                .previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling
                .innerText

            course_id = e.target.getAttribute('data-id')


            $('#course_id').val(course_id);
            $('#phone').val(phone);

            $('#name').val(name);

            $('#submit').val("Edit Student");

            $('.modal-title').text('Edit Student')

            $('form').attr('action', 'student/' + id)
            $('form').append('<input type="hidden" name="_method" value="PUT">')
            $('#myModal').modal('show');
        })
    </script>
@endsection

@section('css')
    <link href="./assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="./css/profile.css" rel="stylesheet" type="text/css" />
@endsection
