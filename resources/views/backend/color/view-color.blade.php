@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manage Color</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Color </li>
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
            <div class="card-header">Color
              <h3>Color List
                <a href="{{route('color.add')}}" class="btn btn-sm btn-info float-right">
                  <i class="fa fa-plus-circle"></i> Add Color </a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>SL.</th>
                      <th>Color Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($allData as $key => $color)
                    @php
                      $count_color = App\Model\ProductColor::where('color_id',$color->id)->count();
                    @endphp
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$color->name}}</td>
                      <td>
                        <a href="{{route('color.edit',$color->id)}}" title="Edit" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                        @if($count_color < 1)
                        <a href="{{route('color.delete',$color->id)}}" title="Delete" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
                        @endif
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
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
