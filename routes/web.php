<?php

Auth::routes();
Route::group(['namespace'=>'Auth'],function (){
    Route::get('dang-ky','RegisterController@getRegister')->name('get.register');
    Route::post('dang-ky','RegisterController@postRegister')->name('post.register');

    Route::get('dang-nhap','LoginController@getLogin')->name('get.login');
    Route::post('dang-nhap','LoginController@postLogin')->name('post.login');
    Route::get('dang-xuat','LoginController@getLogout')->name('post.logout.user');

});
Route::group(['namespace'=>'Frontend'],function (){
   Route::get('/','HomeController@index')->name('get.home');
//   Route::get('danh-muc/{slug}-{id}','CategoryController@getListProduct')->name('get.list.product');
//    Route::get('/','typeProductController@getTypeProduct')->name('get.type.Product');
    Route::get('san-pham/{slug}-{id}', 'StoreDetailController@getDetailStore')->name('get.detail.store');
//    Route::get('store/get_by_product_type', 'typeProductController@getStoreByTypeId')->name('get.list.store_by_id');
    Route::get('san-pham', 'StoreDetailController@getStoreSearch')->name('get.list.store_search');
    Route::get('san-pham/error-search', 'StoreDetailController@getStoreSearch')->name('get.error.store_search');
    Route::get('/search', 'StoreDetailController@search');

//    Gio hang
    Route::group(['prefix'=>'shopping'],function (){
        Route::get('/add/{id}','ShoppingCartController@addProduct')->name('add.shopping.cart');
        Route::get('/danh-sach','ShoppingCartController@getListShoppingCart')->name('get.list.shopping.cart');
        Route::get('/delete/{id}','ShoppingCartController@deleteShoppingCart')->name('delete.shopping.cart');
    });
// thanh toán
    Route::group(['prefix' => 'giohang', 'middleware' =>'CheckLoginUser'], function() {
        Route::get('/thanh-toan', 'ShoppingCartController@getFormPay')->name('get.form.pay');
        Route::post('/thanh-toan', 'ShoppingCartController@saveInfoPayShoppingCart');
    });
//    Danh gia
    Route::group(['prefix' => 'rating', 'middleware' =>'CheckLoginUser'], function() {
        Route::post('/danh-gia/{id}', 'RatingController@saveRatingStore')->name('get.rating.store');
    });
//    Search
//    Route::group(['prefix' => 'search'], function() {
////        Route::get('/', 'LiveSearchController@index')->name('get.search');
//        Route::get('/search', 'LiveSearchController@search');
//
//    });
});


include 'route_admin.php';


