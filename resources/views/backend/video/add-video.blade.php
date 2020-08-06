@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manage Video</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Video </li>
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
              <h3>@if(@$editData)
                Edit Video
                @else
                Add Video
                @endif
                <a href="{{route('video.view')}}" class="btn btn-sm btn-info float-right">
                  <i class="fa fa-list"></i> Video List </a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">

                <form method="post" action="{{(@$editData)?route('video.update',$editData->id):route('video.store')}}" >
                    @csrf
                  <div class="form-row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Video Code</label>
                        <textarea name="video" rows="8" cols="80" class="form-control @error('video') is-invalid @enderror" placeholder="Video Code">{{(@$editData->video)}}</textarea>
                        <span class="text-danger">{{($errors->has('video'))?($errors->first('video')):''}}</span>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <button type="submit" class="btn btn-info">{{(@$editData)?"Update":"Submit"}}</button>
                      </div>
                    </div>
                  </div>
                <form>

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
