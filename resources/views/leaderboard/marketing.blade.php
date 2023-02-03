@extends('layout.header')

@section('content')


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Leaderboard</li>
        </ol>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Leaderboard Penjualan</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md">

            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">QTY</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($result as $key =>$data )
       
                    <tr>
                      <th scope="row">{{$key=1}}</th>
                      <td>{{$data->name}}</td>
                      <td>{{$data->leaderboards_count}}</td>
                   
                    </tr>
                    @endforeach
                 
                </tbody>
              </table>


        </div>
    </div>


</div>

    
@stop