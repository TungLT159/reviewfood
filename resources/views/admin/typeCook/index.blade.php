@extends('layouts.master')
@section('content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('api-admin.index')}}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.index.typeCook')}}">Loại ẩm thực</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
            </ol>
        </nav>
        </ol>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Quản lý loại ẩm thực
        </h1>
        <a href="{{route('admin.create.typeCook')}}" class="btn btn-success pull-right">Thêm mới</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tên loại ẩm thực</th>
                <th>Mô tả</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($typeCooks))
                @foreach($typeCooks as $typeCook)
                    <tr>
                        <td>{{$typeCook->id}}</td>
                        <td>{{$typeCook->tc_name}}</td>
                        <td>{{$typeCook->tc_desc}}</td>
                        <td><a href="" class="{{$typeCook->getStatus($typeCook->tc_active)['class']}}">{{$typeCook->getStatus($typeCook->tc_active)['tc_name']}}</a></td>
                        <td>
                            <a href="{{route('admin.update.typeCook',$typeCook->id)}}" class="btn btn-success">Sửa</a>
                            <a href="{{route('admin.delete.typeCook',['delete',$typeCook->id])}}" onclick="return confirm('Bạn có chắc chắn xóa không?')" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection
