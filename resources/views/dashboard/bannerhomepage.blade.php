@extends('layout.header')

@section('content')
    <!-- content -->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Banner homepage</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">List Banner</h1>
            </div>
        </div>
        <!--/.row-->

        {{-- @if ($message = Session::get('success'))
            <div class="alert bg-teal" role="alert">
                <em class="fa fa-lg fa-check">&nbsp;</em>
                {{ $message }}
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert bg-danger" role="alert">
                <em class="fa fa-lg fa-times">&nbsp;</em>
                {{ $message }}
            </div>
        @endif --}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <p align="left"><button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#Addabout">
                        Add Banner
                    </button></p>
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-b" id="tableok">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($bannerhomepage as $bnh)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td><img src="{{ asset($bnh->image) }}" style="width: 100px; height: 50px;"
                                                alt=""></td>
                                        <td>
                                            {{-- <button class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#Editabout-{{ $bnt->id }}">
                                                Edit
                                            </button> --}}
                                            <button class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#Deleteabout-{{ $bnh->id }}">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    @php $no++; @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.panel-->
    </div>
    <!--/.main-->

    <!-- The Modal -->
    <div class="modal" id="Addabout">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New Banner</h4>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form role="form" action="{{ url('/bannerhome_add') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" placeholder="Image">
                        </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($bannerhomepage as $abh)
        <div class="modal" id="Editabout-{{ $abh->id }}">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit About</h4>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form role="form" action="{{ url('about_update/' . $abh->id) }}" method="POST"enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>About</label>
                                <textarea name="about" cols="30" rows="10" placeholder="About" class="form-control">{{ $abh->about }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image" placeholder="Image">
                                <input type="hidden" name="old_image" value="{{ $abh->image }}">


                                <label>If Have Been Change Image , click update For see update item!</label>
                                <img src="{{ $abh->image }}" style="width: 30%">


                            </div>

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal" id="Deleteabout-{{ $abh->id }}">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Delete About</h4>

                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <h5>Are you sure you want to delete data, if the data is deleted it will also delete data related to
                            this data! this action cannot be canceled</h5>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <a href="{{ url('bannerhome_delete/' . $abh->id) }}" class="btn btn-info">Yes</a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
