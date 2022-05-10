@extends('layouts.master')

@section('content')
<div class="col-xl-4">

    <!--begin:: Widgets/Blog-->
    <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
        <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
            <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(./assets/media//products/vv.jpg)">
                <h3 class="kt-widget19__title kt-font-light">
                    Introducing New Menus
                </h3>
                <div class="kt-widget19__shadow"></div>
                <div class="kt-widget19__labels">
                    <a href="#" class="btn btn-label-light-o2 btn-bold btn-sm ">Recent</a>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">
            <div class="kt-widget19__wrapper">

                <div class="kt-widget19__text">
                    Lorem Ipsum is simply dummy text of the printing and typesetting scrambled a type specimen book text of the dummy text of the printing printing and typesetting industry scrambled dummy text of the printing.
                </div>
            </div>
            <div class="kt-widget19__action">
                <a href="#" class="btn btn-sm btn-label-brand btn-bold">Read More...</a>
            </div>
        </div>
    </div>

    <!--end:: Widgets/Blog-->
</div>
@endsection
