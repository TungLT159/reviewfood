@extends('layouts.master')
@section('content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('api-admin.index')}}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.index.store')}}">Cửa hàng</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
            </ol>
        </nav>
    </div>
    <div class="col-sm-12 col-md-10 px-0">
        <form action="" class="d-inline-flex">
            <div class="form-group col-md-3 pl-0 pr-1">
                    <input type="text" class="form-control mr-1" id="inputName"  name="find_store" placeholder="Tìm kiếm cửa hàng" value="{{\Request::get('find_store')}}">
            </div>
            <div class="form-group col-md-2 pl-0 pr-1">
                <select class="form-control mr-1 js-select2" name="find_area">
                    <option value="">--Khu Vực--</option>
                    @if(isset($areas))
                        @foreach($areas as $area)
                            <option value="{{$area->id}}" {{\Request::get('find_area') == $area->id ? 'selected' : ''}}>{{$area->ar_name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group col-md-2 pl-0 pr-1">
                <select class="form-control mr-1 js-select2" name="find_typeCook">
                    <option value="">--Ẩm Thực--</option>
                    @if(isset($typeCooks))
                        @foreach($typeCooks as $typeCook)
                            <option value="{{$typeCook->id}}" {{\Request::get('find_typeCook') == $typeCook->id ? 'selected' : ''}}>{{$typeCook->tc_name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group col-md-2 pl-0 pr-1">
                <select class="form-control mr-1 js-select2" name="find_category">
                    <option value="">--Loại Cửa Hàng--</option>
                    @if(isset($categories))
                        @foreach($categories as $categorie)
                            <option value="{{$categorie->id}}" {{\Request::get('find_category') == $categorie->id ? 'selected' : ''}}>{{$categorie->c_name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group col-md-3 pl-0 pr-1">
                <select class="form-control mr-1 js-select2" name="find_typeProduct">
                    <option value="">--Thể Loại Cửa Hàng--</option>
                    @if(isset($typeProducts))
                        @foreach($typeProducts as $typeProduct)
                            <option value="{{$typeProduct->id}}" {{\Request::get('find_typeProduct') == $typeProduct->id ? 'selected' : ''}}>{{$typeProduct->tp_name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group pl-0 pr-1">
                <input type="submit" class="btn btn-dark" value="Search">
            </div>
        </form>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Quản lý cửa hàng
        </h1>
        <a href="{{route('admin.create.store')}}" class="btn btn-success pull-right">Thêm mới</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên cửa hàng</th>
                <th>Địa chỉ</th>
                <th>Ảnh minh họa</th>
                <th>Thể loại sản phẩm</th>
                <th>Loại sản phẩm</th>
                <th>Nổi bật</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($stores))
                @foreach($stores as $store)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            {{$store->st_name}}
                            <ul style="padding-left: 20px;">
                                <li>Thời gian: {{$store->st_timeOpen}}</li>
                                <li>Giá: {{$store->st_price}}</li>
                            </ul>
                        </td>
                        <td>
                            {{$store->st_address}}
                            <ul style="padding-left: 20px;">
                                <li>Khu vực: {{isset($store->relation_area->ar_name) ? $store->relation_area->ar_name : '[N\A]'}}</li>
                            </ul>
                        </td>
                        <td><img src="{{ asset(pare_url_file($store->st_avatar)) }}"  alt="" width="80px" height="80px"></td>
                        <td>{{isset($store->relation_category->c_name) ? $store->relation_category->c_name : '[N\A]'}}</td>
                        <td>{{isset($store->relation_typeProduct->tp_name) ? $store->relation_typeProduct->tp_name : '[N\A]'}}</td>
                        <td ><a href="{{route('admin.delete.store',['hot',$store->id])}}" class="{{$store->getHot($store->pro_hot)['class']}}">{{$store->getHot($store->pro_hot)['name']}}</a></td>
                        <td><a href="{{route('admin.delete.store',['action',$store->id])}}" class="{{$store->getStatus($store->st_active)['class']}}">{{$store->getStatus($store->st_active)['st_name']}}</a></td>
                        <td class="d-flex">
                            <a href="{{route('admin.update.store',$store->id)}}" class="btn btn-success mr-1">Sửa</a>
                            <a href="{{route('admin.delete.store',['delete',$store->id])}}" onclick="return confirm('Bạn có chắc chắn xóa không?')" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        {{$stores->links()}}
    </div>
@endsection
