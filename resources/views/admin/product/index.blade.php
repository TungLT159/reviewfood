@extends('layouts.master')
@section('content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('api-admin.index')}}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.index.product')}}">Sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
            </ol>
        </nav>
    </div>
    <div class="col-sm-12 col-md-10">
        <form action="" class="d-inline-flex">
            <div class="form-group col-md-4">
                <input type="text" class="form-control mr-1" id="inputName"  name="search_name" placeholder="Tìm kiếm sản phẩm" value="{{\Request::get('search_name')}}">
            </div>
            <div class="form-group col-md-6">
                <select class="form-control mr-1 js-select2" name="search_store">
                    <option value="">--Chọn cửa hàng--</option>
                    @if(isset($stores))
                        @foreach($stores as $store)
                            <option value="{{$store->id}}" {{\Request::get('search_store') == $store->id ? 'selected' : ''}}>{{$store->st_name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-dark" value="Search">
            </div>
        </form>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Quản lý sản phẩm
        </h1>
        <a href="{{route('admin.create.product')}}" class="btn btn-success pull-right">Thêm mới</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Thuộc cửa hàng</th>
                <th>Hình ảnh</th>
                <th>Nổi bật</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($products))
                @foreach($products as $product)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            {{$product->pro_name}}
                            <ul style="padding-left: 20px">
                                <li>Giá: {{number_format($product->pro_price,0, ',','.')}} VND</li>
                                <li>Sale: {{$product->pro_sale}} %</li>
                            </ul>
                        </td>
                        {{--                        Reletionship--}}
                        <td>{{isset($product->relation_store->st_name) ? $product->relation_store->st_name : '[N\A]'}}</td>
                        <td><img src="{{pare_url_file($product->pro_avatar)}}" alt="" width="80px" height="80px"></td>
                        <td ><a href="{{route('admin.action.product',['hot',$product->id])}}" class="{{$product->getHot($product->pro_hot)['class']}}">{{$product->getHot($product->pro_hot)['name']}}</a></td>
                        <td><a href="{{route('admin.action.product',['active',$product->id])}}" class="{{$product->getStatus($product->pro_active)['class']}}">{{$product->getStatus($product->pro_active)['pro_name']}}</a></td>
                        <td >
                            <a href="{{route('admin.update.product',$product->id)}}" class="btn btn-success mr-1">Sửa</a>
                            <a href="{{route('admin.action.product',['delete',$product->id])}}" onclick="return confirm('Bạn có chắc chắn xóa không?')" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection
