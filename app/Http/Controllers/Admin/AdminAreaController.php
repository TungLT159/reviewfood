<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RequestArea;
use App\Models\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminAreaController extends AdminController
{
    public function index(){
        $viewdata['areas'] = Area::select('id','ar_name','ar_active','ar_desc')->get();
        return view('admin.area.index',$viewdata);
    }
    public function create(){
        return view('admin.area.create');
    }
    public function store(RequestArea $requestArea){
        $this->insertOrUpdate($requestArea);
        return redirect()->route('admin.index.area');
    }

    public function edit($id){
        $area = Area::find($id);
        return view('admin.area.update',compact('area'));
    }
    public function update(RequestArea $requestArea,$id){
        $this->insertOrUpdate($requestArea,$id);
        return redirect()->route('admin.index.area');
    }
    public function delete($action,$id){
        if($action){
            $area = Area::find($id);
            switch ($action){
                case 'delete':
                    $area->delete();
                    break;
            }
        }
        return Redirect()->Route('admin.index.area');
    }





    public function insertOrUpdate(RequestArea $requestArea,$id=''){
        $area = new Area();
        if($id) $area = Area::find($id);
        $area->ar_name = $requestArea->ar_name;
        $area->ar_slug = str_slug($requestArea->ar_name);
        $area->ar_desc = $requestArea->ar_desc ? $requestArea->ar_desc : $requestArea->ar_name;

        $area->save();
    }
}
