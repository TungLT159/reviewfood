<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\File;
use App\Http\Requests\RequestStore;
use App\Http\Requests\RequestTypeProduct;
use App\Models\Area;
use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use App\Models\TypeCook;
use App\Models\TypeProduct;
use App\Models\TypeQuality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminStoreController extends Controller
{
    public function index(Request $request){
        $stores = Store::with('relation_area:id,ar_name','relation_category:id,c_name','relation_typeProduct:id,tp_name');
        if(isset($request->find_store)) $stores->where('st_name','like','%'.$request->find_store.'%');
        if(isset($request->find_area)) $stores->where('st_area_id',$request->find_area);
        if(isset($request->find_typeCook)) $stores->where('st_typeCook_id',$request->find_typeCook);
        if(isset($request->find_typeProduct)) $stores->where('st_typeProduct_id',$request->find_typeProduct);
        if(isset($request->find_category)) $stores->where('st_category_id',$request->find_category);

        $stores = $stores->orderByDesc('id')->paginate(12);
//        $storess = Store::with('relation_typeProduct:id,tp_name')->paginate(20);
//        $typeStores = Store::with(['getStore' => function ($query) {
//            $query->where( ['st_active' => Store::STATUS_PUBLIC])->paginate(20);
//        }])->get();
        $categories = $this->getCategories();
        $areas = $this->getArea();
        $typeCooks = $this->getTypeCook();
        $typeProducts = $this->getTypeProduct();

        $viewdata = [
            'stores' => $stores,
            'areas' => $areas,
            'typeCooks' => $typeCooks,
            'typeProducts' => $typeProducts,
            'categories' => $categories
        ];
        return view('admin.store.index',$viewdata);
    }
    public function create(){
        $categories = $this->getCategories();
        $areas = $this->getArea();
        $typeCooks = $this->getTypeCook();
        $typeProducts = $this->getTypeProduct();
        $typeQualitys = $this->getTypeQuality();
        $viewdata = [
            'areas' => $areas,
            'typeCooks' => $typeCooks,
            'typeProducts' => $typeProducts,
            'categories' => $categories,
            'typeQualitys'=>$typeQualitys
        ];
        return view('admin.store.create',$viewdata);
    }
    public function store(RequestStore $requestStore){
        $this->insertOrUpdate($requestStore);
//        dd($requestStore->all());
//        return redirect()->route('admin.index.store');
        return redirect()->back();
    }
    public function edit($id){
        $categories = $this->getCategories();
        $areas = $this->getArea();
        $typeCooks = $this->getTypeCook();
        $typeProducts = $this->getTypeProduct();
        $typeQualitys = $this->getTypeQuality();
        $stores = Store::find($id);
        $viewdata = [
            'areas' => $areas,
            'typeCooks' => $typeCooks,
            'typeProducts' => $typeProducts,
            'categories' => $categories,
            'typeQualitys'=>$typeQualitys,
            'stores' => $stores
        ];

        return view('admin.store.update',$viewdata);
    }
    public function update(RequestStore $requestStore,$id){
        $this->insertOrUpdate($requestStore,$id);
        return redirect()->route('admin.index.store');

    }
    public function insertOrUpdate( $requestStore, $id=''){
        $store = new Store();
        if($id) $store = Store::find($id);
        $store->st_name = $requestStore->st_name;
        $store->st_slug = str_slug($requestStore->st_name);
        $store->st_category_id = $requestStore->st_category_id;
        $store->st_area_id = $requestStore->st_area_id;
        $store->st_typeCook_id = $requestStore->st_typeCook_id;
        $store->st_typeProduct_id = $requestStore->st_typeProduct_id;
        $store->st_typeQuality_id = $requestStore->st_typeQuality_id;
        $store->st_price = $requestStore->st_price;
        $store->st_phone = $requestStore->st_phone;
        $store->st_hot = $requestStore->st_hot ? $requestStore->st_hot : 0;
        $store->st_lat = $requestStore->st_lat;
        $store->st_lng = $requestStore->st_lng;

//        $store->st_avatar = $requestStore->st_avatar;
        $store->st_timeOpen = $requestStore->st_timeOpen;
        $store->st_address = $requestStore->st_address;
        $store->st_desc_seo = $requestStore->st_desc_seo ? $requestStore->st_desc_seo : $requestStore->st_name;
//        dd($requestStore->all());

//        if($requestStore->hasFile('st_avatar'))
//        {
////            $img_file = $requestStore->file('st_avatar'); // Nh???n file h??nh ???nh ng?????i d??ng upload l??n server
////            $img_file_extension = $img_file->getClientOriginalExtension(); // L???y ??u??i c???a file h??nh ???nh
////            if($img_file_extension != 'png' && $img_file_extension != 'jpg' && $img_file_extension != 'jpeg')
////            {
////                return redirect()->route('admin.index.store')->with('error','?????nh d???ng h??nh ???nh kh??ng h???p l??? (ch??? h??? tr??? c??c ?????nh d???ng: png, jpg, jpeg)!');
////            }
////            $img_file_name = $img_file->getClientOriginalName(); // L???y t??n c???a file h??nh ???nh
////            $random_file_name = str_random(4).'_'.$img_file_name; // Random t??n file ????? tr??nh tr?????ng h???p tr??ng v???i t??n h??nh ???nh kh??c trong CSDL
////            while(file_exists('upload/'.$random_file_name)) // Tr?????ng h???p tr??n g??n v???i 4 k?? t??? random nh??ng v???n c?? th??? x???y ra tr?????ng h???p b??? tr??ng, n??n b??? v??o v??ng l???p while ????? ki???m tra v???i t??n t???t c??? c??c file h??nh trong CSDL, n???u b??? tr??ng th?? s??? random 1 t??n kh??c ?????n khi n??o ko tr??ng n???a th?? tho??t v??ng l???p
////            {
////                $random_file_name = str_random(4).'_'.$img_file_name;
////            }
//            $file = upload_image('st_avatar');
//            unlink('upload/image/'. $store->st_avatar);
//            $img_file->move('upload/image/',$random_file_name); // file h??nh ???????c upload s??? chuy???n v??o th?? m???c c?? ???????ng d???n nh?? tr??n
//            $store->st_avatar = $random_file_name;
//        }

        if($requestStore->hasFile('st_avatar')) {
            $file = upload_image('st_avatar');
            $path_url = pare_url_file($store->pro_avatar);
            if(File::exists(public_path() . $path_url)){
                unlink( public_path(). $path_url);
            }
            if (isset($file['name'])) {
                $store->st_avatar = $file['name'];
            }
        }
        $store->save();
    }

    public function delete($action,$id){
        if($action){
            $store = Store::find($id);
            Switch($action){
                case 'delete':
                    $path_url = pare_url_file($store->st_avatar);
                    if(File::exists(storage_path() . $path_url)){ File::delete(storage_path() . $path_url);}
                    $store->delete();
                    break;
                case 'action':
                    $store->st_active = ! $store->st_active;
                    $store->save();
                    break;
                case 'hot':
                    $store->st_hot = ! $store->st_hot;
                    $store->save();
                    break;
            }
        }
        return Redirect()->Route('admin.index.store');
    }
    public function getCategories(){
        return Category::all();
    }
    public function getArea(){
        return Area::all();
    }
    public function getTypeCook(){
        return TypeCook::all();
    }
    public function getTypeProduct(){
        return TypeProduct::all();
    }
    public function getTypeQuality(){
        return TypeQuality::select('id','tq_name')->get();
    }
}
