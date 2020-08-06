<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Frontend Routes

Route::get('/','Frontend\FrontendController@index');
Route::get('/about-us','Frontend\FrontendController@aboutUs')->name('about.us');
Route::get('/contact-us','Frontend\FrontendController@contactUs')->name('contact.us');
Route::post('/contact/message','Frontend\FrontendController@message')->name('contact.message');
Route::get('/shopping-cart','Frontend\FrontendController@shoppingCart')->name('shopping.cart');
Route::get('/product-list','Frontend\FrontendController@productList')->name('product.list');
Route::get('/product-category/{category_id}','Frontend\FrontendController@categoryWiseProduct')->name('category.wise.product');
Route::get('/product-brand/{brand_id}','Frontend\FrontendController@brandWiseProduct')->name('brand.wise.product');
Route::get('/product-details/{slug}','Frontend\FrontendController@productDetails')->name('product.details.info');
Route::post('/find-product','Frontend\FrontendController@findProduct')->name('find.product');
Route::get('/get-product','Frontend\FrontendController@getProduct')->name('get.product');
//Shopping-cart
Route::post('/add-to-cart','Frontend\CartController@addToCart')->name('insert.cart');
Route::get('/show-cart','Frontend\CartController@showCart')->name('show.cart');
Route::post('/update-cart','Frontend\CartController@updateCart')->name('update.cart');
Route::get('/delete-cart/{rowId}','Frontend\CartController@deleteCart')->name('delete.cart');

//Customer sign up
Route::get('/customer-login','Frontend\CheckoutController@customerLogin')->name('customer.login');
Route::get('/customer-signup','Frontend\CheckoutController@customerSignup')->name('customer.signup');
Route::post('/customer-signup-store','Frontend\CheckoutController@signupStore')->name('signup.store');
Route::get('/email-verify','Frontend\CheckoutController@emailVerify')->name('email.verify');
Route::post('/verify-store','Frontend\CheckoutController@verifyStore')->name('verify.store');
Route::get('/checkout','Frontend\CheckoutController@checkout')->name('customer.checkout');
Route::post('/checkout/store','Frontend\CheckoutController@checkoutStore')->name('customer.checkout.store');



//Backend Routes
Auth::routes();
//customer -Dashbroad
Route::group(['middleware'=>['auth','customer']],function(){
  Route::get('/dashbroad','Frontend\DashbroadController@dashbroad')->name('dashbroad');
  Route::get('/customer-edit-profile','Frontend\DashbroadController@editProfile')->name('customer.edit.profile');
  Route::post('/customer-update-profile','Frontend\DashbroadController@updateProfile')->name('customer.update.profile');
  Route::get('/customer-password-change','Frontend\DashbroadController@passwordChange')->name('customer.password.change');
  Route::post('/customer-update-password','Frontend\DashbroadController@updatePassword')->name('customer.update.password');

  Route::get('/payment','Frontend\DashbroadController@payment')->name('customer.payment');
  Route::post('/payment/store','Frontend\DashbroadController@paymentStore')->name('customer.payment.store');
  Route::get('/order-list','Frontend\DashbroadController@orderList')->name('customer.order.list');
  Route::get('/order-details/{id}','Frontend\DashbroadController@orderDetails')->name('customer.order.details');
  Route::get('/order-print/{id}','Frontend\DashbroadController@orderPrint')->name('customer.order.print');
});

Route::group(['middleware'=>['auth','admin']],function(){
  //admin - Dashbroad
  Route::get('/home', 'HomeController@index')->name('home');
  Route::prefix('users')->group(function(){
    Route::get('/view', 'Backend\UserController@view')->name('users.view');
    Route::get('/add', 'Backend\UserController@add')->name('users.add');
    Route::post('/store', 'Backend\UserController@store')->name('users.store');
    Route::get('/edit/{id}', 'Backend\UserController@edit')->name('users.edit');
    Route::post('/update/{id}', 'Backend\UserController@update')->name('users.update');
    Route::get('/delete/{id}', 'Backend\UserController@delete')->name('users.delete');
  });


  Route::prefix('profiles')->group(function(){
    Route::get('/view', 'Backend\ProfileController@view')->name('profiles.view');
    Route::get('/edit', 'Backend\ProfileController@edit')->name('profiles.edit');
    Route::post('/update', 'Backend\ProfileController@update')->name('profiles.update');
    Route::get('/password/view', 'Backend\ProfileController@passwordview')->name('profiles.password.view');
    Route::post('/password/update', 'Backend\ProfileController@passwordupdate')->name('profiles.password.update');

  });


  Route::prefix('logos')->group(function(){
    Route::get('/view', 'Backend\LogoController@view')->name('logos.view');
    Route::get('/add', 'Backend\LogoController@add')->name('logos.add');
    Route::post('/store', 'Backend\LogoController@store')->name('logos.store');
    Route::get('/edit/{id}', 'Backend\LogoController@edit')->name('logos.edit');
    Route::post('/update/{id}', 'Backend\LogoController@update')->name('logos.update');
    Route::get('/delete/{id}', 'Backend\LogoController@delete')->name('logos.delete');
  });


  Route::prefix('sliders')->group(function(){
    Route::get('/view', 'Backend\SliderController@view')->name('sliders.view');
    Route::get('/add', 'Backend\SliderController@add')->name('sliders.add');
    Route::post('/store', 'Backend\SliderController@store')->name('sliders.store');
    Route::get('/edit/{id}', 'Backend\SliderController@edit')->name('sliders.edit');
    Route::post('/update/{id}', 'Backend\SliderController@update')->name('sliders.update');
    Route::get('/delete/{id}', 'Backend\SliderController@delete')->name('sliders.delete');
  });


  Route::prefix('video')->group(function(){
    Route::get('/view', 'Backend\VideoController@view')->name('video.view');
    Route::get('/add', 'Backend\VideoController@add')->name('video.add');
    Route::post('/store', 'Backend\VideoController@store')->name('video.store');
    Route::get('/edit/{id}', 'Backend\VideoController@edit')->name('video.edit');
    Route::post('/update/{id}', 'Backend\VideoController@update')->name('video.update');
    Route::get('/delete/{id}', 'Backend\VideoController@delete')->name('video.delete');
  });


  Route::prefix('about')->group(function(){

    Route::get('/view', 'Backend\AboutController@view')->name('about.view');
    Route::get('/add', 'Backend\AboutController@add')->name('about.add');
    Route::post('/store', 'Backend\AboutController@store')->name('about.store');
    Route::get('/edit/{id}', 'Backend\AboutController@edit')->name('about.edit');
    Route::post('/update/{id}', 'Backend\AboutController@update')->name('about.update');
    Route::get('/delete/{id}', 'Backend\AboutController@delete')->name('about.delete');
  });

  Route::prefix('contact')->group(function(){

    Route::get('/view', 'Backend\ContactController@view')->name('contact.view');
    Route::get('/add', 'Backend\ContactController@add')->name('contact.add');
    Route::post('/store', 'Backend\ContactController@store')->name('contact.store');
    Route::get('/edit/{id}', 'Backend\ContactController@edit')->name('contact.edit');
    Route::post('/update/{id}', 'Backend\ContactController@update')->name('contact.update');
    Route::get('/delete/{id}', 'Backend\ContactController@delete')->name('contact.delete');
    Route::get('/message', 'Backend\ContactController@message')->name('contact.message');
  });

  Route::prefix('category')->group(function(){

    Route::get('/view', 'Backend\CategoryController@view')->name('category.view');
    Route::get('/add', 'Backend\CategoryController@add')->name('category.add');
    Route::post('/store', 'Backend\CategoryController@store')->name('category.store');
    Route::get('/edit/{id}', 'Backend\CategoryController@edit')->name('category.edit');
    Route::post('/update/{id}', 'Backend\CategoryController@update')->name('category.update');
    Route::get('/delete/{id}', 'Backend\CategoryController@delete')->name('category.delete');
  });

  Route::prefix('brand')->group(function(){

    Route::get('/view', 'Backend\BrandController@view')->name('brand.view');
    Route::get('/add', 'Backend\BrandController@add')->name('brand.add');
    Route::post('/store', 'Backend\BrandController@store')->name('brand.store');
    Route::get('/edit/{id}', 'Backend\BrandController@edit')->name('brand.edit');
    Route::post('/update/{id}', 'Backend\BrandController@update')->name('brand.update');
    Route::get('/delete/{id}', 'Backend\BrandController@delete')->name('brand.delete');
  });

  Route::prefix('color')->group(function(){

    Route::get('/view', 'Backend\ColorController@view')->name('color.view');
    Route::get('/add', 'Backend\ColorController@add')->name('color.add');
    Route::post('/store', 'Backend\ColorController@store')->name('color.store');
    Route::get('/edit/{id}', 'Backend\ColorController@edit')->name('color.edit');
    Route::post('/update/{id}', 'Backend\ColorController@update')->name('color.update');
    Route::get('/delete/{id}', 'Backend\ColorController@delete')->name('color.delete');
  });

  Route::prefix('size')->group(function(){

    Route::get('/view', 'Backend\SizeController@view')->name('size.view');
    Route::get('/add', 'Backend\SizeController@add')->name('size.add');
    Route::post('/store', 'Backend\SizeController@store')->name('size.store');
    Route::get('/edit/{id}', 'Backend\SizeController@edit')->name('size.edit');
    Route::post('/update/{id}', 'Backend\SizeController@update')->name('size.update');
    Route::get('/delete/{id}', 'Backend\SizeController@delete')->name('size.delete');
  });

  Route::prefix('product')->group(function(){

    Route::get('/view', 'Backend\ProductController@view')->name('product.view');
    Route::get('/add', 'Backend\ProductController@add')->name('product.add');
    Route::post('/store', 'Backend\ProductController@store')->name('product.store');
    Route::get('/edit/{id}', 'Backend\ProductController@edit')->name('product.edit');
    Route::post('/update/{id}', 'Backend\ProductController@update')->name('product.update');
    Route::get('/delete/{id}', 'Backend\ProductController@delete')->name('product.delete');
    Route::get('/details/{id}', 'Backend\ProductController@details')->name('product.details');
  });

  Route::prefix('customer')->group(function(){

    Route::get('/view', 'Backend\CustomerController@view')->name('customer.view');
    Route::get('/draft/view', 'Backend\CustomerController@draftView')->name('customer.draft.view');
    Route::get('/delete/{id}', 'Backend\CustomerController@delete')->name('customer.delete');
  });

  Route::prefix('order')->group(function(){

    Route::get('/pending/list', 'Backend\OrderController@pendingList')->name('order.pending.list');
    Route::get('/approve/list', 'Backend\OrderController@approveList')->name('order.approve.list');
    Route::get('/details/{id}', 'Backend\OrderController@details')->name('order.details');
    Route::get('/approve/{id}', 'Backend\OrderController@approve')->name('order.approve');
    Route::get('/order-print/{id}', 'Backend\OrderController@orderPrint')->name('order.print');

  });

});
