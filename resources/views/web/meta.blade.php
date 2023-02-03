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
        
        <div class="container">
            <div class="row">
              <div class="col-md-8 offset-2 mt-5">
                <div class="card">
                  <div class="card-header bg-info">
                    <h6 class="text-white">Dynamic Meta Title | Meta Description</h6>
                  </div>
                  <div class="card-body">
                    <form method="post" action="{{route('store.meta')}}"> 
                        @csrf 
                      <div class="form-group">
                        <label>Product Meta Title</label>
                        <input type="text" name="product_meta_title" class="form-control" />
                      </div>
                      <div class="form-group">
                        <label>Product Meta Desciption</label>
                        <input type="text" name="product_meta_description" class="form-control" />
                      </div>
                      <div class="form-group">
                        <label>Product Meta Keyboards (Comma Separated )</label>
                        <input type="text" name="product_meta_keywords" class="form-control" />
                      </div>
                      <div class="form-group text-center">
                        <button type="submit" class="btn btn-info">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div> 
@endsection
