@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manage Logo</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Logo </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-md-12">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3>Add Logo
                <a href="{{route('logos.view')}}" class="btn btn-sm btn-info float-right"><i class="fa fa-list"></i> Logo List </a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">

              <form method="post" action="{{route('logos.store')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-row">
                    <div class="col-md-8">
                      <div class="row">
                        <div class="form-group col-md-4">
                          <label for="address">Image</label>
                          <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image">
                          <span class="text-danger">{{($errors->has('image'))?($errors->first('image')):''}}</span>
                        </div>
                        <div class="form-group col-md-4">
                          <img src="{{url('public/upload/no-image.png')}}"
                          style="width:150px; height:150px; border:1px solid #000;" id="showImage">
                        </div>
                        <div class="col-md-4">
                          <div class="form-group" style="padding: 30px;">
                            <input type="submit" class="btn btn-info" value="submit">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </form>

            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </section>
        <!-- /.Left col -->

      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
