@extends('layouts.master')

@section('content')
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>

    <div class="row header-container justify-content-center">
        <div class="header">
            {{-- <h3>Boutique Management System</h3> --}}
        </div>
        <section>
            <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
                <div class="row">
                    <div class="col-lg-12">

                        <!--begin::Portlet-->
                        <div class="kt-portlet">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">
                                        Form Menu
                                    </h3>
                                </div>
                            </div>
                            <form action="{{ url('form/store') }}" method="post"
                                class="kt-form kt-form--fit kt-form--label-right" enctype="multipart/form-data">

                                <div class="kt-portlet__body">
                                    <div class="form-group row">
                                        @csrf
                                        <div class="col-lg-6">
                                            <label>Name :</label>
                                            <input name="name" type="text" class="form-control" placeholder="Enter name">
                                        </div>

                                        <div class="col-lg-6">
                                            <label>Description :</label>
                                            <input name="description" type="text" class="form-control"
                                                placeholder="Enter desccription">
                                        </div>
                                        <div class="col-lg-6 :">
                                            <label for="category">category</label>
                                            {{-- <input type="text" name="category" class="form-control" placeholder="Last Name" required> --}}
                                            <select id="category " name="category" class="form-control"
                                                placeholder="Last Name" required>
                                                <option value="Food" name="sexe">Food</option>
                                                <option value="Boisson" name="sexe">Poissons</option>
                                                <option value="Salade" name="sexe">Salades</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Prix :</label>
                                            <input name="prix" type="text" class="form-control"
                                                placeholder="Enter the prix">
                                        </div>


                                        <div class="col-lg-6">
                                            <label for="status">status :</label></br>
                                            {{-- <input type="tel" name="status" class="form-control" placeholder="Phone" required> --}}
                                            <select id="status " name="status" type="checkbox" class="form-control"
                                                required>
                                                <option value="active" name="status"><span
                                                        class="kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill">Active
                                                    </span></option>
                                                <option value="inactive" name="status">InActive </option>
                                            </select>

                                        </div>


                                        <div class="col-lg-6">
                                            <label>Images :</label>
                                            <input name="image" type="file" class="form-control">
                                        </div>


                                    </div>
                                    <div class="col-lg-12">
                                        <input type="hidden" class="prod_id">
                                        <label for="quantite"> Quantity</label>
                                        <div class="input-group text-center mb-3 " style="width: 110px">
                                            <button class="input-group-text decrement-btn">-</button>
                                            <input type="text" name="quantite" class="form-control qty-input text-center"
                                                value="1" />
                                            <button class="input-group-text increment-btn">+</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <input href="{{ url('form/new') }}" type="submit" class="btn btn-sm btn-info"
                                            value="Save">
                                        <input type="reset" class="btn btn-sm btn-warning" value="Reset">
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() { // changes

            //    $('.addtoCartbtn').click(function (e) {
            //        e.preventDefault();
            //        var product_id= $(this).closest('.product_data').find('.prod_id').val();
            //        var product_qty= $(this).closest('.product_data').find('.qty-input').val();
            //        alert(product_id);
            //        alert(product_qty);

            //    });
            $(".increment-btn").click(function(e) {
                e.preventDefault();
                var inc_value = $(".qty-input").val();
                var value = parseInt(inc_value, 10);
                value = isNaN(value) ? 0 : value;
                if (value < 100) {
                    value++;
                    $(".qty-input").val(value);
                }
            });
            $('.decrement-btn').click(function(e) {
                e.preventDefault();
                var dec_value = $('.qty-input').val();
                var value = parseInt(dec_value, 10);
                value = isNaN(value) ? 0 : value;
                if (value > 1) {
                    value--;
                    $('.qty-input').val(value);
                }
            });
        });
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5d78ff",
                    "dark": "#282a3c",
                    "light": "#ffffff",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                    "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                }
            }
        };
    </script>
@endsection
@section('css')
    <link href="{{ asset('assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/profile.css')}}" rel="stylesheet" type="text/css" />

@endsection
