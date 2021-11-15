<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Area;
use App\Models\Product;
use App\Models\Rating;
use App\Models\Store;
use App\Models\TypeCook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreDetailController extends Controller
{
    public function getStoreSearch(Request $request)
    {
        $storesSearch = Store::with('relation_area:id,ar_name', 'relation_category:id,c_name');
        if (isset($request->k_find_store))
            $storesSearch->where('st_name', 'like', '%' . $request->k_find_store . '%')
                ->orWhere('st_address', 'like', '%' . $request->k_find_store . '%');
        if (isset($request->k_find_area)) $storesSearch->where('st_area_id', $request->k_find_area);
        if (isset($request->k_find_category)) $storesSearch->where('st_category_id', $request->k_find_category);
        $storesSearch = $storesSearch->where(
            'st_active', Store::STATUS_PUBLIC
        )->orderByDesc('id')->paginate(12);
//        $productInStoreDetails =  Product::where([
//            'pro_typeStore_id'=>$id,
//            'pro_active'=>Product::STATUS_PUBLIC
//        ])->get();
//        dd($storesSearch);

        $viewdata = [
            'storesSearch' => $storesSearch
        ];
//        if(!isset($storesSearch)){
//            \Session::flash('toastr',[
//                'type' => 'error',
//                'message' => 'Không tồn tại cửa hàng này !'
//            ]);
//        }
        return view('frontend.pages.store.listStore', $viewdata);

//            return redirect()->route('get.error.store_search');


    }


    public function getDetailStore(Request $request)
    {
        $url = $request->segment(2);
        $url = preg_split('/(-)/i', $url);
        if ($id = array_pop($url)) {
            $storeDetails = Store::where('st_active', Store::STATUS_PUBLIC)->find($id);
//           dd($storeDetails->all());
            $productInStoreDetails = Product::where([
                'pro_typeStore_id' => $id,
                'pro_active' => Product::STATUS_PUBLIC
            ])->get();
//           $productInStoreDetail = Store::where([$storeDetails,Product::find('pro_typeStore_id')->get()
            $localDetail = Area::find($storeDetails->st_area_id);
            $typeCookDetail = TypeCook::find($storeDetails->st_typeCook_id);
//           Shopping cart
            $listProducts = \Cart::content();
            $total = \Cart::subtotal(0, ',', '.');
            $ratings = Rating::where('ra_store_id', $id)->orderBy('id', 'DESC')->paginate(6);
            $viewdata = [
                'storeDetails' => $storeDetails,
                'localDetail' => $localDetail,
                'typeCookDetail' => $typeCookDetail,
                'productInStoreDetails' => $productInStoreDetails,
                'listProducts' => $listProducts,
                'total' => $total,
                'ratings' => $ratings
            ];
            return view('frontend.pages.store.detail', $viewdata);


        }
        dd($request->all());
        if ($request->ajax()) {
            if($id = array_pop($url)){
                $productInStoreDetails = Product::where([
                    'pro_typeStore_id' => $id,
                    'pro_active' => Product::STATUS_PUBLIC
                ]);
                $output = '';
                $products = $productInStoreDetails->where('pro_name', 'LIKE', '%' . $request->txtSearch . '%')->get();
                if ($products) {
                    foreach ($products as $key => $product) {
//                    $output .= '<tr>
//                    <td>' . $product->id . '</td>
//                    <td>' . $product->title . '</td>
//                    <td>' . $product->description . '</td>
//                    <td>' . $product->price . '</td>
//                    </tr>';
                        $output .= ' <div class="menu-detail-main-list">
                        <div class="menu-detail__content">
                            <div class="menu-detail__content-img">
                                <img src=' . pare_url_file($product->pro_avatar) . ' alt="">
                            </div>
                            <div class="menu-detail__content-txt">
                                <h5 class="menu-title">' . $product->pro_name . '</h5>
                                <div class="menu-price">' . $product->pro_price . ' VND</div>

                            </div>
                    </div>';
                    }
                }

                return Response($output);
            }
            }


    }

//    public function search(Request $request){
//    $url = $request->segment(2);
//dd($url);
////        $url = preg_split('/(-)/i', $url);
////        if ($id = array_pop($url)) {
////            $productInStoreDetails = Product::where([
////                'pro_typeStore_id' => $id,
////                'pro_active' => Product::STATUS_PUBLIC
////            ]);
//        if ($request->ajax()) {
//
//                $output = '';
//                $products = Product::where('pro_name', 'LIKE', '%' . $request->txtSearch . '%')->get();
//                if ($products) {
//                    foreach ($products as $key => $product) {
////                    $output .= '<tr>
////                    <td>' . $product->id . '</td>
////                    <td>' . $product->title . '</td>
////                    <td>' . $product->description . '</td>
////                    <td>' . $product->price . '</td>
////                    </tr>';
//                        $output .= ' <div class="menu-detail-main-list">
//                        <div class="menu-detail__content">
//                            <div class="menu-detail__content-img">
//                                <img src=' . pare_url_file($product->pro_avatar) . ' alt="">
//                            </div>
//                            <div class="menu-detail__content-txt">
//                                <h5 class="menu-title">' . $product->pro_name . '</h5>
//                                <div class="menu-price">' . $product->pro_price . ' VND</div>
//
//                            </div>
//                    </div>';
//                    }
//                }
//
//                return Response($output);
//            }
//        }

}
