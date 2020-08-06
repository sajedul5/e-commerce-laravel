<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Model\Category;
use App\Model\Brand;
use App\Model\Color;
use App\Model\Size;
use App\Model\Product;
use App\Model\ProductSize;
use App\Model\ProductColor;
use App\Model\ProductSubImage;
use App\Http\Requests\ProductRequest;
class ProductController extends Controller
{
  public function view()
  {
    $data['allData'] = Product::orderBy('id','desc')->get();
    return view('backend.product.view-product', $data);
  }

  public function add()
  {
    $data['categories'] = Category::all();
    $data['brands'] = Brand::all();
    $data['colors'] = Color::all();
    $data['sizes'] = Size::all();
    return view('backend.product.add-product', $data);
  }

  public function store(Request $request)
  {
    DB::transaction(function() use($request){
      $this->validate($request,[
        'category_id' => 'required',
        'brand_id' => 'required',
        'name' => 'required|unique:products,name',
        'color_id' => 'required',
        'size_id' => 'required',
        'short_desc' => 'required',
        'long_desc' => 'required',
        'price' => 'required',
      ]);

      $data = new Product();
      $data->category_id = $request->category_id;
      $data->brand_id = $request->brand_id;
      $data->name = $request->name;
      $data->slug = str_slug($request->name);
      $data->short_desc = $request->short_desc;
      $data->long_desc = $request->long_desc;
      $data->price = $request->price;
      $img = $request->file('image');
      if($img){
        $imgName = date('YmdHi').$img->getClientOriginalName();
        $img->move(public_path('upload'), $imgName);
        $data['image']=$imgName;
      }
      if($data->save()){
        //product-sub-image-table-data-insert
        $files = $request->sub_image;
        if(!empty($files)){
          foreach($files as $file){
            $imgName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload'), $imgName);
            $subimage['sub_image']=$imgName;

            $subimage = new ProductSubImage();
            $subimage->product_id = $data->id;
            $subimage->sub_image = $imgName;
            $subimage->save();
          }
        }
        //Color-table-data-insert
        $colors = $request->color_id;
        if(!empty($colors)){
          foreach($colors as $color){
            $mycolor = new ProductColor();
            $mycolor->product_id = $data->id;
            $mycolor->color_id = $color;
            $mycolor->save();
          }
        }
        //Size-table-data-insert
        $sizes = $request->size_id;
        if(!empty($sizes)){
          foreach($sizes as $size){
            $mysize = new ProductSize();
            $mysize->product_id = $data->id;
            $mysize->size_id = $size;
            $mysize->save();
          }
        }
      }else{
        return redirect()->back()->with('error', 'Sorry! Data not saved');
      }

    });
    return redirect()->route('product.view')->with('success','Data added successfully!');
  }

  public function edit($id)
  {
    $data['editData'] = Product::find($id);
    $data['categories'] = Category::all();
    $data['brands'] = Brand::all();
    $data['colors'] = Color::all();
    $data['sizes'] = Size::all();
    $data['color_array'] = ProductColor::select('color_id')->where('product_id',$data['editData']->id)->orderBy('id','asc')->get()->toArray();
    $data['size_array']= ProductSize::select('size_id')->where('product_id',$data['editData']->id)->orderBy('id','asc')->get()->toArray();
    return view('backend.product.add-product', $data);
  }

  public function update(ProductRequest $request, $id)
  {


    DB::transaction(function() use($request,$id){
      $this->validate($request,[
        'category_id' => 'required',
        'brand_id' => 'required',
        'color_id' => 'required',
        'size_id' => 'required',
        'short_desc' => 'required',
        'long_desc' => 'required',
        'price' => 'required',
      ]);

      $data = Product::find($id);
      $data->category_id = $request->category_id;
      $data->brand_id = $request->brand_id;
      $data->name = $request->name;
      $data->slug = str_slug($request->name);
      $data->short_desc = $request->short_desc;
      $data->long_desc = $request->long_desc;
      $data->price = $request->price;
      $img = $request->file('image');
      if($img){
        $imgName = date('YmdHi').$img->getClientOriginalName();
        $img->move(public_path('upload'), $imgName);
        if(file_exists('public/upload/'.$data->image) AND !empty($data->image)){
          unlink('public/upload/'.$data->image);
        }
        $data['image']=$imgName;
      }
      if($data->save()){
        //product-sub-image-table-data-update
        $files = $request->sub_image;
        if(!empty($files)){
          $subimage = ProductSubImage::where('product_id',$id)->get()->toArray();
          foreach($subimage as $value){
            if(!empty($value)){
              unlink('public/upload/'.$value['sub_image']);
            }
          }
          ProductSubImage::where('product_id',$id)->delete();
        }
        if(!empty($files)){
          foreach($files as $file){
            $imgName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload'), $imgName);
            $subimage['sub_image']=$imgName;

            $subimage = new ProductSubImage();
            $subimage->product_id = $data->id;
            $subimage->sub_image = $imgName;
            $subimage->save();
          }
        }
        //Color-table-data-update
        $colors = $request->color_id;
        if(!empty($colors)){
          ProductColor::where('product_id',$id)->delete();
        }
        if(!empty($colors)){
          foreach($colors as $color){
            $mycolor = new ProductColor();
            $mycolor->product_id = $data->id;
            $mycolor->color_id = $color;
            $mycolor->save();
          }
        }
        //Size-table-data-update
        $sizes = $request->size_id;
        if(!empty($sizes)){
          ProductSize::where('product_id',$id)->delete();
        }
        if(!empty($sizes)){
          foreach($sizes as $size){
            $mysize = new ProductSize();
            $mysize->product_id = $data->id;
            $mysize->size_id = $size;
            $mysize->save();
          }
        }
      }else{
        return redirect()->back()->with('error', 'Sorry! Data not updated');
      }

    });
    return redirect()->route('product.view')->with('success','Data updated successfully!');
  }

  public function delete($id)
  {
    $data = Product::find($id);
    if(file_exists('public/upload/' .$data->image) AND ! empty($data->image)){
      unlink('public/upload/' .$data->image);
    }
    $subimage = ProductSubImage::where('product_id',$id)->get()->toArray();
    if(!empty($subimage)){
      foreach($subimage as $value){
        if(!empty($value)){
          unlink('public/upload/'.$value['sub_image']);
        }
      }
    }
    ProductSubImage::where('product_id',$data->id)->delete();
    ProductColor::where('product_id',$data->id)->delete();
    ProductSize::where('product_id',$data->id)->delete();
    $data->delete();
    return redirect()->route('product.view')->with('success','Data deleted successfully!');
  }

  public function details($id)
  {
    $data['products']= Product::find($id);
    return view('backend.product.details-product',$data);
  }
}
