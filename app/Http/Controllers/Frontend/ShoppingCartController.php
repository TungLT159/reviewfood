<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;



class ShoppingCartController extends Controller
{
    public function addProduct(Request $request,$id){
        $products = Product::select('id','pro_name','pro_price','pro_sale','pro_count','pro_avatar')->find($id);
        if(!$products) return redirect('/');
        if($products->pro_sale > 0){
            $priceSale = $products->pro_price * (100 - $products->pro_sale)/100;
        }
        else{
            $priceSale = $products->pro_price;
        }
        if($products->pro_count == 0){
            \Session::flash('toastr',[
                'type' => 'error',
                'message' => 'Sản phẩm tạm thời hết hàng'
            ]);
            return redirect()->back();
//            return redirect()->back()->with(['flash_level' => 'danger', 'flash_message' => 'Sản phẩm tạm hết hàng !']);
        }

        \Cart::add([
            'id' => $id,
            'name' => $products->pro_name,
            'qty' => 1,
            'price' => $priceSale,
            'options' => [
                'avatar' => $products->pro_avatar,
                'sale' => $products->pro_sale,
                'price_old' => $products->pro_price
                ]
        ]);
//        $listProducts = Cart::content();
        \Session::flash('toastr',[
            'type' => 'success',
            'message' => 'Thêm thành công'
        ]);
        return redirect()->back();
//        return redirect()->back()-> with(['flash_level' => 'success', 'flash_message' => 'Thêm Thành Công! <br> Xem giỏ hàng tại:   <a href="/shopping/danh-sach" title="">Giỏ Hàng</a> ']);;
    }

    public  function getListShoppingCart(){
        $listProducts = \Cart::content();
//        dd($listProducts);
        $total = \Cart::subtotal(0,',','.');
        $viewdata = [
            'listProducts' =>  $listProducts,
            'total' => $total
        ];
        return view('frontend.pages.shopping.index',$viewdata);
    }
    public function deleteShoppingCart($id){
        \Cart::remove($id);
        \Session::flash('toastr',[
            'type' => 'success',
            'message' => 'Xóa thành công'
        ]);
        return redirect()->route('get.list.shopping.cart');
    }
    public function getFormPay(){
        $listProducts = \Cart::content();
        $total = \Cart::subtotal(0,',','.');
        $viewdata = [
            'listProducts' =>  $listProducts,
            'total' => $total
        ];
        return view('frontend.pages.shopping.pay',$viewdata);
    }
//    Save thong tin thanh toan
    public function saveInfoPayShoppingCart(Request $request){
            $totalMoneys = str_replace(',','',\Cart::subtotal(0,3));
//            dd($totalMoneys);
            $transactionId = Transaction::insertGetId([
                'tr_user_id' => get_data_user('web'),
                'tr_total' => $totalMoneys,
                'tr_note' => $request->note,
                'tr_address' => $request->address,
                'tr_phone' => $request->phone,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            if($transactionId){
                $listProducts = \Cart::content();
                foreach ($listProducts as $listProduct){
                    Order::insert([
                        'or_transaction_id' =>  $transactionId,
                        'or_product_id' => $listProduct->id,
                        'or_qty' => $listProduct->qty,
                        'or_price' => $listProduct->price,
                        'or_sale' => $listProduct->options->sale,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]);
                }
            }
//            Xoa item trong gio hang
            \Cart::destroy();
        \Session::flash('toastr',[
            'type' => 'success',
            'message' => 'Thanh toán thành công'
        ]);
        return redirect()->route('get.home');
    }
}
