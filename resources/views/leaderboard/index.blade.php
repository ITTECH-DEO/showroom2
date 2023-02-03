@extends('layout.header')

@section('content')
    <!-- content -->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Banner</li>
            </ol>
        </div>
        <!--/.row-->
        @if(Session::has('success'))
        <br>
        <div class="alert alert-success" role="alert">
            Mobil Berhasil Terjual !
          </div>

          <br>
    @endif
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Input Penjualan Marketing</h1>
            </div>
        </div>

        <form action="{{ route('add.penjualan') }}" method="post">
            @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Nama Marketing</label>
                    <select class="form-control" name="user_id" id="exampleFormControlSelect1">
                        @foreach ($user as $p)
                            <option value="{{$p->id}}">{{$p->name}}</option>
                        @endforeach
                      
                    </select>
                  </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">List Mobil</label>
                    <select class="form-control" name="car_id" id="exampleFormControlSelect1">
                        @foreach ($cars as $p)
                            <option value="{{$p->id}}" >{{$p->name_car}}</option>
                        @endforeach
                    </select>
                  </div>
            </div>
        </div>
    
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-success w-100" type="submit">TERJUAL</button>
                </div>
                
            </div>

        </form>
   
        <!--/.row-->

       
    
@endsection
