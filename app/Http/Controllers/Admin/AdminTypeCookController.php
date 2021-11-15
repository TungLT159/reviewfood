<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RequestTypeCook;
use App\Models\TypeCook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminTypeCookController extends AdminController
{
    public function index(){
        $viewdata['typeCooks'] = TypeCook::select('id','tc_name','tc_active','tc_desc')->get();
        return view('admin.typeCook.index',$viewdata);
    }
    public function create(){
        return view('admin.typeCook.create');
    }
    public function store(RequestTypeCook $requestTypeCook){
        $this->insertOrUpdate($requestTypeCook);
        return redirect()->route('admin.index.typeCook');
    }

    public function edit($id){
        $typeCook = TypeCook::find($id);
        return view('admin.typeCook.update',compact('typeCook'));
    }
    public function update(RequestTypeCook $requestTypeCook,$id){
        $this->insertOrUpdate($requestTypeCook,$id);
        return redirect()->route('admin.index.typeCook');
    }
    public function delete($action,$id){
        if($action){
            $typeCook = TypeCook::find($id);
            switch ($action){
                case 'delete':
                    $typeCook->delete();
                    break;
            }
        }
        return Redirect()->Route('admin.index.typeCook');
    }

    public function insertOrUpdate(RequestTypeCook $requestTypeCook,$id=''){
        $typeCook = new TypeCook();
        if($id) $typeCook = TypeCook::find($id);
        $typeCook->tc_name = $requestTypeCook->tc_name;
        $typeCook->tc_slug = str_slug($requestTypeCook->tc_name);
        $typeCook->tc_desc = $requestTypeCook->tc_desc ? $requestTypeCook->tc_desc : $requestTypeCook->tc_name;

        $typeCook->save();
    }
}
