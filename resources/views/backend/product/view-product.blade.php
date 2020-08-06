@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manage Product</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Product </li>
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
            <div class="card-header">Product
              <h3>Product List
                <a href="{{route('product.add')}}" class="btn btn-sm btn-info float-right">
                  <i class="fa fa-plus-circle"></i> Add Product </a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>SL.</th>
                      <th>Category</th>
                      <th>Brand</th>
                      <th>Product Name</th>
                      <th>Price</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($allData as $key => $product)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$product['category']['name']}}</td>
                      <td>{{$product['brand']['name']}}</td>
                      <td>{{$product->name}}</td>
                      <td>{{$product->price}}</td>
                      <td>
                        <img src="{{(!empty($product->image))?url('public/upload/'.$product->image):url('public/upload/no-image.png')}}"
                        style="width:80px; height:80px;">
                      </td>
                      <td>
                        <a href="{{route('product.edit',$product->id)}}" title="Edit" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                        <a href="{{route('product.details',$product->id)}}" title="Details" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                        <a href="{{route('product.delete',$product->id)}}" title="Delete" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
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
