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
            <div class="card-header">
              <h3>@if(@$editData)
                Edit Product
                @else
                Add Product
                @endif
                <a href="{{route('product.view')}}" class="btn btn-sm btn-info float-right">
                  <i class="fa fa-list"></i> Product List </a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">

                <form method="post" action="{{(@$editData)?route('product.update',$editData->id):route('product.store')}}" enctype="multipart/form-data">
                    @csrf
                  <div class="form-row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Category </label>
                        <select class="form-control @error('category_id') is-invalid @enderror"  name="category_id" id="category_id">
                          <option value="">select Category</option>
                          <span class="text-danger">{{($errors->has('category_id'))?($errors->first('category_id')):''}}</span>
                          @foreach($categories as $category)
                          <option value="{{$category->id}}" {{(@$editData->category_id==$category->id)?"selected":""}}>{{$category->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Brand </label>
                        <select class="form-control @error('brand_id') is-invalid @enderror"  name="brand_id" id="brand_id">
                          <option value="">select Brand</option>
                          <span class="text-danger">{{($errors->has('brand_id'))?($errors->first('brand_id')):''}}</span>
                          @foreach($brands as $brand)
                          <option value="{{$brand->id}}" {{(@$editData->brand_id==$brand->id)?"selected":""}}>{{$brand->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Product Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"  placeholder="Product Name" name="name" value="{{(@$editData->name)}}">
                        <span class="text-danger">{{($errors->has('name'))?($errors->first('name')):''}}</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Colors</label>
                        <select class="form-control @error('color_id') is-invalid @enderror select2"  name="color_id[]" id="color_id" multiple>
                          <span class="text-danger">{{($errors->has('color_id'))?($errors->first('color_id')):''}}</span>
                          @foreach($colors as $color)
                          <option value="{{$color->id}}" {{(@in_array(['color_id'=>$color->id],$color_array))?"selected":""}}>{{$color->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Sizes </label>
                        <select class="form-control @error('size_id') is-invalid @enderror select2"  name="size_id[]" id="size_id" multiple>
                          <span class="text-danger">{{($errors->has('size_id'))?($errors->first('size_id')):''}}</span>
                          @foreach($sizes as $size)
                          <option value="{{$size->id}}" {{(@in_array(['size_id'=>$size->id],$size_array))?"selected":""}}>{{$size->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Short Description </label>
                        <textarea name="short_desc" class="form-control @error('short_desc') is-invalid @enderror">{{@$editData->short_desc}}</textarea>
                        <span class="text-danger">{{($errors->has('short_desc'))?($errors->first('short_desc')):''}}</span>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Short Description </label>
                        <textarea name="long_desc" class="form-control @error('long_desc') is-invalid @enderror" rows="4">{{@$editData->long_desc}}</textarea>
                        <span class="text-danger">{{($errors->has('long_desc'))?($errors->first('long_desc')):''}}</span>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Product Price</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror"  placeholder="Product Price" name="price" value="{{(@$editData->price)}}">
                        <span class="text-danger">{{($errors->has('price'))?($errors->first('price')):''}}</span>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control"   name="image" id="image">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <img src="{{(!empty($editData->image))?url('public/upload/'.$editData->image):url('public/upload/no-image.png')}}"
                        style="width:150px; height:150px; border:1px solid #000;" id="showImage">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Sub Image</label>
                        <input type="file" class="form-control"   name="sub_image[]" multiple>
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
