<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RequestTypeQuality;
use App\Models\TypeQuality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminTypeQualityController extends AdminController
{
    public function index(){
        $viewdata['typeQualitys'] = TypeQuality::select('id','tq_name','tq_active','tq_desc')->get();
        return view('admin.typeQuality.index',$viewdata);
    }
    public function create(){
        return view('admin.typeQuality.create');
    }
    public function store(RequestTypeQuality $requestTypeQuality){
        $this->insertOrUpdate($requestTypeQuality);
        return redirect()->route('admin.index.typeQuality');
    }

    public function edit($id){
        $typeQuality = TypeQuality::find($id);
        return view('admin.typeQuality.update',compact('typeQuality'));
    }
    public function update(RequestTypeQuality $requestTypeQuality,$id){
        $this->insertOrUpdate($requestTypeQuality,$id);
        return redirect()->route('admin.index.typeQuality');
    }
    public function delete($action,$id){
        if($action){
            $typeQuality = TypeQuality::find($id);
            switch ($action){
                case 'delete':
                    $typeQuality->delete();
                    break;
            }
        }
        return Redirect()->Route('admin.index.typeQuality');
    }

    public function insertOrUpdate(RequestTypeQuality $requestTypeQuality,$id=''){
        $typeQuality = new TypeQuality();
        if($id) $typeQuality = TypeQuality::find($id);
        $typeQuality->tq_name = $requestTypeQuality->tq_name;
        $typeQuality->tq_slug = str_slug($requestTypeQuality->tq_name);
        $typeQuality->tq_desc = $requestTypeQuality->tq_desc ? $requestTypeQuality->tq_desc : $requestTypeQuality->tq_name;

        $typeQuality->save();
    }
}
