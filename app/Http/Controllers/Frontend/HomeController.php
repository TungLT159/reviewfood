<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $storeHot = Store::where([
            'st_hot'=> Store::HOT_ON,
            'st_active'=> Store::STATUS_PUBLIC
        ])->limit(5)->get();
        $storeSales = Store::where([
            ['st_sale','<>',0],
            'st_active' => Store::STATUS_PUBLIC
        ])->paginate(8);
//        $typeStores = $this->relation_typeProduct->where('st_active',Store::STATUS_PUBLIC)->with('get_store')->paginate(4);
//       Shopping cart
        $listProducts = \Cart::content();
        $total = \Cart::subtotal(0,',','.');
        $viewdata = [
            'storeHot' => $storeHot,
//            'typeStores' =>$typeStores
            'storeSales' => $storeSales,
            'listProducts' =>  $listProducts,
            'total' => $total
        ];
        return view('frontend.pages.home.index',$viewdata);
    }
}
