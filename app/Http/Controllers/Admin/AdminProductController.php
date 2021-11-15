<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RequestProduct;
use App\Http\Requests\RequestStore;
use App\Models\Area;
use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use App\Models\TypeCook;
use App\Models\TypeProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AdminProductController extends Controller
{
    public function index(Request $request){
//        lấy dữ liệu để tìm kiếm
            $products = Product::with('relation_store:id,st_name');
            if(isset($request->search_name)) $products->where('pro_name','like','%'.$request->search_name.'%');
            if(isset($request->search_store)) $products->where('pro_typeStore_id',$request->search_store);

        $products = $products->orderByDesc('id')->paginate(10);

            $stores = $this->getStore();
            $viewdata = [
              'products' => $products,
                'stores' => $stores
            ];
        return view('admin.product.index',$viewdata);
    }
    public function create(){
        $stores = $this->getStore();
//        $areas = $this->getArea();
//        $typeCooks = $this->getTypeCook();
//        $typeProducts = $this->getTypeProduct();
        $viewdata = [
            'stores' => $stores

        ];
        return view('admin.product.create',$viewdata);
    }
    public function store(RequestProduct $requestProduct){
//        $this->insertOrUpdate($requestProduct);
//        dd($requestProduct->all());
        $product = new Product();
        $product->pro_name = $requestProduct->pro_name;
        $product->pro_slug = str_slug($requestProduct->pro_name);
        $product->pro_typeStore_id = $requestProduct->pro_typeStore_id;
        $product->pro_price = $requestProduct->pro_price;
        $product->pro_count = $requestProduct->pro_count;
        $product->pro_sale = $requestProduct->pro_sale;
        $product->pro_hot = $requestProduct->pro_hot ? $requestProduct->pro_hot : 0;
//        $product->pro_avatar = $requestProduct->pro_avatar;
        $product->pro_desc_seo = $requestProduct->pro_desc_seo ? $requestProduct->pro_desc_seo : $requestProduct->pro_name;
        $product->pro_keyword_seo = $requestProduct->pro_keyword_seo;
//            dd($requestProduct->all());

        if($requestProduct->hasFile('pro_avatar')){
            $file = upload_image('pro_avatar');
            if(isset($file['name'])){
                $product->pro_avatar = $file['name'];
            }
        }

        $product->save();
        return redirect()->back();
    }
    public function edit($id){
        $stores = $this->getStore();
        $product = Product::find($id);
        $viewdata = [
          'stores' => $stores,
          'product'=> $product
        ];
        return view('admin.product.update',$viewdata);
    }
    public function update(RequestProduct $requestProduct,$id){
//        $this->insertOrUpdate($requestProduct,$id);
        $product = Product::find($id);
        $product->pro_name = $requestProduct->pro_name;
        $product->pro_slug = str_slug($requestProduct->pro_name);
        $product->pro_typeStore_id = $requestProduct->pro_typeStore_id;
        $product->pro_price = $requestProduct->pro_price;
        $product->pro_count = $requestProduct->pro_count;
        $product->pro_sale = $requestProduct->pro_sale;
        $product->pro_hot = $requestProduct->pro_hot ? $requestProduct->pro_hot : 0;
//        $product->pro_avatar = $requestProduct->pro_avatar;
        $product->pro_desc_seo = $requestProduct->pro_desc_seo ? $requestProduct->pro_desc_seo : $requestProduct->pro_name;
        $product->pro_keyword_seo = $requestProduct->pro_keyword_seo;
//dd($requestProduct->all());

        if($requestProduct->hasFile('pro_avatar')) {
            $file = upload_image('pro_avatar');
            $path_url = pare_url_file($product->pro_avatar);
//        dd($path_url);
//        if(File::exists(Public_path(). $path_url)){ File::delete(Public_path() . $path_url);}

            if(file_exists(public_path() . $path_url)){
                unlink( public_path(). $path_url);
            }
            if (isset($file['name'])) {
                $product->pro_avatar = $file['name'];

//                $path_url = $product->pro_avatar;
//                if(File::exists(Public_path(). $path_url)){ File::delete(Public_path() . $path_url);}
//                dd($product->pro_avatar);
            }
        }

//            dd($requestProduct->all());


        $product->save();
        return redirect()->route('admin.index.product');
    }
//    public function insertOrUpdate( $requestProduct, $id=''){
//            if($id) $product = Product::find($id);
//            $product->pro_name = $requestProduct->pro_name;
//            $product->pro_slug = str_slug($requestProduct->pro_name);
//            $product->pro_typeStore_id = $requestProduct->pro_typeStore_id;
//            $product->pro_price = $requestProduct->pro_price;
//            $product->pro_sale = $requestProduct->pro_sale;
//            $product->pro_avatar = $requestProduct->pro_avatar;
//            $product->pro_desc_seo = $requestProduct->pro_desc_seo ? $requestProduct->pro_desc_seo : $requestProduct->pro_name;
//            $product->pro_keyword_seo = $requestProduct->pro_keyword_seo;
////            dd($requestProduct->all());
//            if($requestProduct->hasFile('pro_avatar')){
//                $file = upload_image('pro_avatar');
//                if(isset($file['name'])){
//                    $product->pro_avatar = $file['name'];
//                }
//            }
//
//            $product->save();
//    }
    public function action($action,$id){
        if($action){
            $product = Product::find($id);
            Switch($action){
                case 'delete':
                    $path_url = pare_url_file($product->pro_avatar);
//                    dd($path_url);
                    if(File::exists(Public_path(). $path_url)){ File::delete(Public_path() . $path_url);}
                    $product->delete();
                    break;
                case 'active':
                    $product->pro_active =  ! $product->pro_active;
                    $product->save();
                    break;
                case 'hot':
                    $product->pro_hot = ! $product->pro_hot;
                    $product->save();
                    break;
            }
        }
        return Redirect()->Route('admin.index.product');
    }




    public function getStore(){
        return Store::all();
    }
//    public function getArea(){
//        return Area::select('id','ar_name')->get();
//    }
//    public function getTypeCook(){
//        return TypeCook::select('id','tc_name')->get();
//    }
//    public function getTypeProduct(){
//        return TypeProduct::select('id','tp_name')->get();
//    }
}
