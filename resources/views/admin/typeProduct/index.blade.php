@extends('layouts.master')
@section('content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('api-admin.index')}}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.index.typeProduct')}}">Loại sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
            </ol>
        </nav>
        </ol>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Quản lý loại sản phẩm
        </h1>
        <a href="{{route('admin.create.typeProduct')}}" class="btn btn-success pull-right">Thêm mới</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tên loại sản phẩm</th>
                <th>Mô tả</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($typeProducts))
                @foreach($typeProducts as $typeProduct)
                    <tr>
                        <td>{{$typeProduct->id}}</td>
                        <td>{{$typeProduct->tp_name}}</td>
                        <td>{{$typeProduct->tp_desc}}</td>
                        <td><a href="" class="{{$typeProduct->getStatus($typeProduct->tp_active)['class']}}">{{$typeProduct->getStatus($typeProduct->tp_active)['tp_name']}}</a></td>
                        <td>
                            <a href="{{route('admin.update.typeProduct',$typeProduct->id)}}" class="btn btn-success">Sửa</a>
                            <a href="{{route('admin.delete.typeProduct',['delete',$typeProduct->id])}}" onclick="return confirm('Bạn có chắc chắn xóa không?')" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection
