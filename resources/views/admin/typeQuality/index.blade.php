@extends('layouts.master')
@section('content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('api-admin.index')}}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.index.typeQuality')}}">Chất lượng</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
            </ol>
        </nav>
        </ol>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Quản lý phần chất lượng
        </h1>
        <a href="{{route('admin.create.typeQuality')}}" class="btn btn-success pull-right">Thêm mới</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên phần chất lượng</th>
                <th>Mô tả</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($typeQualitys))
                @foreach($typeQualitys as $typeQuality)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$typeQuality->tq_name}}</td>
                        <td>{{$typeQuality->tq_desc}}</td>
                        <td><a href="" class="{{$typeQuality->getStatus($typeQuality->tq_active)['class']}}">{{$typeQuality->getStatus($typeQuality->tq_active)['tq_name']}}</a></td>
                        <td>
                            <a href="{{route('admin.update.typeQuality',$typeQuality->id)}}" class="btn btn-success">Sửa</a>
                            <a href="{{route('admin.delete.typeQuality',['delete',$typeQuality->id])}}" onclick="return confirm('Bạn có chắc chắn xóa không?')" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection
