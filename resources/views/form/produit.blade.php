@extends('layouts.master')

@section('content')
    <div class="card mb-3">

        {{-- <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="..."> --}}
        <div class="card-body">

            <div class=" text-right">
                <a href="/main/successlogin" class="btn btn-clean btn-icon-sm">
                    <i class="la la-long-arrow-left"></i>
                    Back
                </a>
                <a href="form/create" class="btn btn-primary"><i class="flaticon2-plus"></i>Add new Menu</a>


            </div>
            <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                <h1></h1>

            </div>

            {{-- <h5 class="card-title">List of Menus :</h5> --}}
            {{-- <p class="card-text">You can find here all the informatins about Menu in the system</p> --}}

            <table class="table table-bordered table-striped" style="width:100%" id='myTable'>
                <thead>
                    <tr>
                        {{-- <th scope="col">CNE</th> --}}
                        <th>id</th>
                        <th>name</th>
                        <th> Category</th>
                        <th> Description</th>
                        <th>status</th>
                        <th>Prix </th>
                        <th>Stock</th>
                        <th>Image</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produits as $produit)
                        <tr>
                            <td>{{ $produit->id }}</td>
                            <td>{{ $produit->name }}</td>
                            <td>{{ $produit->category }}</td>
                            <td>{{ $produit->description }}</td>
                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 110px;">
                                    <span
                                        class="kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill">{{ $produit->status }}</span></span>
                            </td>

                            <td>{{ $produit->prix }}DH</td>
                            <td>{{ $produit->quantite }}</td>
                            {{-- <th>{{ $student-> }}</th> --}}
                            {{-- <td>{{ $student->speciality }}</td> --}}
                            <td>
                                <img src="{{ Storage::url($produit->image) }} " style="width:90px;height:70px;"
                                    alt="Image">

                            </td>
                            <td>

                                {{-- <a href="{{ url('form/edit/{id}' . $produit->id) }}" class="btn btn-success">
                                    <i class="fa fa-shield" ></i></a> --}}
                                {{-- <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Delete</a> --}}
                                {{-- <a href="{{ url('form/destroy/' . $produit->id) }}" class="btn btn-danger">
                                    <i class="fa fa-trash"></i></a> --}}

                                <a href="{{ route('updateProduit-edit' , $produit->id) }}"
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
                                <a href="{{ url('deleteProduit/destroy/' . $produit->id) }}"
                                    class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                                <path
                                                    d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </a>
                            </td>


                        </tr>
                    @endforeach


                </tbody>
            </table>
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
@endsection
