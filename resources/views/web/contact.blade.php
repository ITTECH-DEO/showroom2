@extends('web.waras')

@section("style")
    <style>
        .mirror{
            display: inline-block;
            font-size: 30px;

            -webkit-transform: matrix(-1, 0, 0, 1, 0, 0);
            -moz-transform: matrix(-1, 0, 0, 1, 0, 0);
            -o-transform: matrix(-1, 0, 0, 1, 0, 0);
            transform: matrix(-1, 0, 0, 1, 0, 0);
        }
    </style>
@endsection

@section("content")
<!-- Banner Here -->
<div class="row">
    <div class="col-md-12">
        <div class="p-3" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
            <div class="text-center">
                <h1 class="display-3 p-3 text-white" style="background-color: black">CONTACT</h1>
                <h1 class="display-3 p-3 text-white mirror" style="background-color: black">U</h1>
                <h1 class="display-3 p-3 text-white mirror" style="background-color: black">S</h1>
            </div>

        </div>
        <img src="{{url($bannercontact->image)}}" style='height: 500px; width: 100%; object-fit: cover' alt="">
    </div>
</div>




{{--<section class="ftco-section">--}}
    <div class="container">
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-6 text-center mb-5">--}}
{{--                <h2 class="heading-section">Contact Us</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters mb-5">
                        <div class="col-md-7 ">
                            <div class="contact-wrap w-100 p-md-5 p-4 mr-3 ">
                                <h3 class="mb-4">Our Offices</h3>
                                <div id="form-message-warning" class="mb-4"></div>

                                <table class="table table-striped b-t b-b table-dark" id="tableok">
                                    <thead>
                                        <tr>
                                            <th>Nama Cabang</th>
                                            <th>Nomer Wa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($whatsapp as $no)
                                        <tr>

                                            <td>{{$no->nama_cabang}}</td>
                                            <td>{{$no->wa}}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>



                            </div>
                        </div>
                        <div class="col-md d-flex align-items-stretch mt-5">
                            <iframe src="https://maps.google.com/maps?q=Blk.%20F,%20Jl.%20Boulevard%20Bintaro%20Jaya%20Blok%20F,%20Pd.%20Jaya,%20Kec.%20Pd.%20Aren,%20Kota%20Tangerang%20Selatan,%20Banten%2015220&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="2"
                                  style="border:2" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="text">
                                    <p><span>Address:</span> Jl. Pd. Jaya, Pondok Jaya, South Tangerang City, Banten, Indonesia</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="text">
                                    @foreach ($admin as $adm )
                                    <p><span>Phone:</span> <a href="https://wa.me/62{{$adm->phone_number}}">{{ $adm->phone_number }}</a></p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text">
                                    <p><span>Instagram:</span> <a href="https://www.instagram.com/kt88cars/">kt88cars</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="text">
                                    <p><span>Website</span> <a href="kt88cars.com/homepage">kt88cars.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--</section>--}}

@stop
