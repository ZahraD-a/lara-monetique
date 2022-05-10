@extends('layouts.adminmaster')
@section('content')
    <div class="card mb-3">
        {{-- <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="..."> --}}
        <div class="card-body">
            <div class=" text-right">
                <a href="form/create" class="btn "></a>

                <div class="col-sm-6 form-group">
                    <div class="input-group">


                   </div>
                  </div>
            </div>
            {{-- <p class="card-text">You can find here all the informatins about Menu in the system</p> --}}

            <table class="table table-bordered table-striped" id="table">
                <thead>
                    <tr>
                        {{-- <th class="text-center">#</th> --}}
                        <th class="text-center">ID</th>
                        <th class="text-center">Reference</th>
                        <th class="text-center">Solde</th>
                        {{-- <th class="text-center">Boutique</th> --}}
                        {{-- <th class="text-center">total</th> --}}
                        <th class="text-center">Date</th>
                        <th class="text-center">status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($factures as $item)
                        <tr>
                            {{-- <td></td> --}}
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->reference }}</td>
                            <td>{{ $item->montant }} Dh </td>
                            {{-- <td>{{$item->boutique->name}}</td> --}}
                            {{-- <td>{{$item->total}}</td> --}}
                             <td>{{ $item->dateFact }}</td>
                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 110px;">
                                      <button class="kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill" id="btn">{{ $item->status }}
                                        </button>
                                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/General/Settings#3.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <rect fill="#000000" opacity="0.3" x="2" y="6" width="21" height="12" rx="6"/>
                                                <circle fill="#000000" cx="17" cy="12" r="4"/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>      </td>


                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
@endsection


@section('script')
    <script src="{{ asset('assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>


    <script src="{{ asset('assets/js/demo1/pages/crud/datatables/advanced/multiple-controls.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/js/demo1/pages/crud/datatables/advanced/multiple-controls.js') }}" type="text/javascript">
    </script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
        const btn = document.getElementById("btn");

btn.addEventListener("click", ()=>{

    if(btn.innerText === "validée"){
        btn.innerText = "non validée";
    }else{
        btn.innerText= " validée";
    }o
});
    </script>
@endsection


@section('css')
    <link href="{{ asset('assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/profile.css')}}" rel="stylesheet" type="text/css" />
    @endsection
