@extends('web.waras')

@section("content")
<!-- Banner Here -->



{{--<div class="banner header-text">--}}
{{--  <div class="owl-banner owl-carousel">            --}}
{{--      @foreach ($banneraboutus as $bs)--}}
{{--          <div class="banner-item" style="background-image: url({{ asset($bs->image) }});">--}}
{{--              <div class="text-content">--}}
{{--                  <h4>Find your car today!</h4>--}}
{{--                  <h2>Kt 88 Cars For U !</h2>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--      @endforeach--}}
{{--  </div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

<div class="row">
    <div class="col-md-12">
        <div class="p-3" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);"><h1 class="display-3 p-3 text-white" style="background-color: black">About Us</h1></div>
        <img src="{{url($banneraboutus->image)}}" style='height: 500px; width: 100%; object-fit: cover' alt="">
    </div>
</div>
<div class="products">
  <div class="container mb-5">


{{--      <div class="col-lg-12">--}}
{{--      <div class="row">--}}
{{--          <div class="col-md">--}}
{{--              <h1 class="display-4">About Us</h1>--}}
{{--          </div>--}}
{{--      </div>--}}
          <div class="row ">
              @foreach ($about as $ab)
              <div class="col-md-6">
                  <div class="card" style="width: 33rem;">

                      <div class="card-body">
                        <p class="text-justify ">{{$ab->about}}</p>
                      </div>
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-md-6 rounded">
                  <img  src="{{$ab->image}}" alt="" id="myImg3" class="img-thumbnail rounded wc-image zoom_01">
                </div><!-- /.col-lg-6 -->
              @endforeach
          </div>
      </div>
{{--  </div>--}}
</div>

@stop
