<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RequestTypeProduct;
use App\Models\TypeProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminTypeProductController extends AdminController
{
    public function index(){
        $typeProducts = TypeProduct::select('id','tp_name','tp_active','tp_desc')->get();
        $viewdata = [
            'typeProducts' => $typeProducts
        ];
        return view('admin.typeProduct.index',$viewdata);
    }
    public function create(){
        return view('admin.typeProduct.create');
    }
    public function store(RequestTypeProduct $requestTypeProduct){
        $this->insertOrUpdate($requestTypeProduct);
        return redirect()->route('admin.index.typeProduct');
    }

    public function edit($id){
        $typeProduct = TypeProduct::find($id);
        return view('admin.typeProduct.update',compact('typeProduct'));
    }
    public function update(RequestTypeProduct $requestTypeProduct,$id){
        $this->insertOrUpdate($requestTypeProduct,$id);
        return redirect()->route('admin.index.typeProduct');
    }
    public function delete($action,$id){
        if($action){
            $typeProduct = TypeProduct::find($id);
            switch ($action){
                case 'delete':
                    $typeProduct->delete();
                    break;
            }
        }
        return Redirect()->Route('admin.index.typeProduct');
    }

    public function insertOrUpdate(RequestTypeProduct $requestTypeProduct,$id=''){
        $typeProduct = new TypeProduct();
        if($id) $typeProduct = TypeProduct::find($id);
        $typeProduct->tp_name = $requestTypeProduct->tp_name;
        $typeProduct->tp_slug = str_slug($requestTypeProduct->tp_name);
        $typeProduct->tp_desc = $requestTypeProduct->tp_desc ? $requestTypeProduct->tp_desc : $requestTypeProduct->tp_name;

        $typeProduct->save();
    }
}
