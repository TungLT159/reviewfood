<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Store;
use App\Models\TypeProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class typeProductController extends Controller
{
//    public function getTypeProduct(){
//        $typeProducts = TypeProduct::all();
//        return view('frontend.pages.home.index')->with(['typeProducts'=>$typeProducts]);
//    }
    public function getListStore(Request $request)
    {
        $url = $request->segment(2);
        $url = preg_split('/(-)/i', $url);
        if ($id = array_pop($url)) {
            $stores = Store::Where([
                'st_typeProduct_id' => $id,
                'st_active' => Store::STATUS_PUBLIC
            ])->orderBy('id', 'DESC')->paginate(12);
            $viewdata = [
                'stores' => $stores
            ];
            return view('frontend.pages.home.index', $viewdata);
        }
        return redirect('/');

    }
}

//    public function getStoreByTypeId(Request $request)
//    {
//        $typeId = $request->get('type_id');
////        die($typeId);
//        $stores = Store::Where([
//            'st_typeProduct_id' => $typeId,
//            'st_active' => Store::STATUS_PUBLIC
//        ])->orderBy('id','DESC')->paginate(12);
//        $viewdata = [
//            'stores' => $stores
//        ];
//        return view('frontend.pages.home.index',$viewdata);
//    }
//}
