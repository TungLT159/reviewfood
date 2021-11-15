<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\AdminRequestCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Switch_;

//use App\Http\Controllers\Controller;

class AdminCategoryController extends AdminController
{
//    Trang index
    public function index(){
        $viewdata['categories'] = Category::select('id','c_name','c_desc_seo','c_title_seo','c_active')->get();
//        $viewdata = [
//          'categories' => $categories
//        ];
//        dd($viewdata);
        return view('admin.category.index',$viewdata);
    }
//    Trang thêm mới danh mục
    public function create(){
        return view('admin.category.create');
    }
//    Xử lí lưu dữ liệu
    public function store(AdminRequestCategory $requestCategory){
        $category = new Category();
        $category->c_name = $requestCategory->name;
        $category->c_slug = str_slug($requestCategory->name);
        $category->c_icon = str_slug($requestCategory->icon);
        $category->c_title_seo = $requestCategory->c_title_seo ? $requestCategory->c_title_seo : $requestCategory->name;
        $category->c_desc_seo = $requestCategory->c_desc_seo;
        $category->save();

        return Redirect()->Route('admin.index.category');
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.update',compact('category'));
    }
    public function update(AdminRequestCategory $requestCategory, $id){
        $category = Category::find($id);
        $category->c_name = $requestCategory->name;
        $category->c_slug = str_slug($requestCategory->name);
        $category->c_icon = str_slug($requestCategory->icon);
        $category->c_title_seo = $requestCategory->c_title_seo ? $requestCategory->c_title_seo : $requestCategory->name;
        $category->c_desc_seo = $requestCategory->c_desc_seo;
        $category->save();

        return Redirect()->Route('admin.index.category');
    }
    public function delete($action,$id){
        if($action){
            $category = Category::find($id);
            Switch($action){
                case 'delete':
                    $category->delete();
                    break;
            }
        }
        return Redirect()->Route('admin.index.category');
    }

}
