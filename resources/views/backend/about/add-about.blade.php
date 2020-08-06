@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manage About</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">About </li>
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
              <h3>Add About
                <a href="{{route('about.view')}}" class="btn btn-sm btn-info float-right">
                  <i class="fa fa-list"></i> About List </a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">

              <form method="post" action="{{route('about.store')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="address">About</label>
                      <textarea name="about" class="form-control @error('about') is-invalid @enderror" placeholder="About"></textarea>
                      <span class="text-danger">{{($errors->has('about'))?($errors->first('about')):''}}</span>
                    </div>
                        <div class="col-md-4">
                          <div class="form-group">
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
