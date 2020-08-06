@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manage Brand</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Brand </li>
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
                Edit Brand
                @else
                Add Brand
                @endif
                <a href="{{route('brand.view')}}" class="btn btn-sm btn-info float-right">
                  <i class="fa fa-list"></i> Brand List </a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">

                <form method="post" action="{{(@$editData)?route('brand.update',$editData->id):route('brand.store')}}" >
                    @csrf
                  <div class="form-row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Brand Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"  placeholder="Brand Name" name="name" value="{{(@$editData->name)}}">
                        <span class="text-danger">{{($errors->has('name'))?($errors->first('name')):''}}</span>
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
