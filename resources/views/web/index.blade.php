@extends('web.waras')
{{-- @foreach ($viewproduct as $v) --}}
@section('title',$viewproduct["product_meta_title"])
@section('description',$viewproduct["product_meta_description"])
@section('keywords',$viewproduct["product_meta_keywords"])
{{-- @endforeach --}}
@section('content')
    <!-- Banner Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            @foreach ($bannerhome as $bh)
                <div class="banner-item" style="background-image: url({{ asset($bh->image) }});">
                    <div class="text-content">
                        <h4>Find your car today!</h4>
                        <h2>Kt 88 Cars For U !</h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
    </div>



    {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img style="height: 90vh" class="d-block w-100" src="web/assets/images/mobil3.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" style="height: 90vh" src="web/assets/images/mobil2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" style="height: 90vh" src="web/assets/images/mobil4.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> --}}

    <div class="container-fluid">


        <div class="row">
            @php $modelT = new App\Models\User(); @endphp
            @foreach ($cars as $car)
                @php $data = $modelT->cek_booked($car->id); @endphp
                @if ($car->status_id == 1)
                    <div class="col-md-2 my-2">
                        <div class="card">
{{--                            <img cl®om-image="{{ $car->img_car }}" />--}}
                            <div class="card-body">
                                <div class="pull-left">
                                    <p>Nama : </p> <b>{{ $car->name_car }}</b>
                                    <p>Type Mobil:</p> <b>{{ $car->type_car }}</b>
                                    <p>Vendor Mobil:</p> <b>{{ $car->vendor->name_vendor }}</b>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="pull-left col-md-6">
                                        @php
                                            $hasil_rupiah = number_format($car->day_price, 2, ',', '.');
                                        @endphp
                                        Rp.{{ $hasil_rupiah }}
                                    </div>
                                    <div class="pull-right col-md-6">
                                        @if ($data)
                                            @if ($data->status_transaction == 'process')
                                                <p align="right"><a href="#" class="btn btn-warning btn-sm"
                                                        data-toggle="modal" data-target="#Booked">Booked</a></p>
                                            @elseif($data->status_transaction == 'agree')
                                                <p align="right"><a href="#" class="btn btn-danger btn-sm"
                                                        data-toggle="modal" data-target="#Sold">Sold</a></p>
                                            @else
                                                <p align="right"><a href="{{ url('car_detail/' . $car->id) }}"
                                                        class="btn btn-info btn-sm">Detail</a></p>
                                            @endif
                                        @else
                                            <p align="right"><a href="{{ url('car_detail/' . $car->id) }}"
                                                    class="btn btn-info btn-sm">Detail</a></p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                @endif
            @endforeach
            {{--            <div class="col-md"> --}}
            {{--                <ul class="pages"> --}}
            {{--                    {{ $cars->links() }} --}}
            {{-- </ul> --}}
            {{-- </div> --}}

        </div>

    </div>
    </div>
    <div class="modal fade" id="Booked" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">This car have been booked</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form">
                        <p>This car have been booked , and wil bee ready again if the booked before not pay the invoice !
                        </p>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Sold" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">This car have been sold</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form">
                        <p>This car have been sold</p>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
