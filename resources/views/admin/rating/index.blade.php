@extends('layouts.master')
@section('content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('api-admin.index')}}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.index.rating')}}">Đánh giá</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
            </ol>
        </nav>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Quản lý đánh giá
        </h1>
{{--        <a href="{{route('admin.create.product')}}" class="btn btn-success pull-right">Thêm mới</a>--}}
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên khách hàng</th>
                <th>Tên cửa hàng</th>
                <th>Nội dung</th>
                <th>Số điểm</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($ratings))
                @foreach($ratings as $rating)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{isset($rating->getUserRating->name) ? $rating->getUserRating->name : '[N\A]'}}</td>
                        <td>{{isset($rating->getStoreRating->st_name) ? $rating->getStoreRating->st_name : '[N\A]'}}</td>
                        <td>{{$rating->ra_content}}</td>
                        <td>{{$rating->getStoreRating->st_activeOpen}}/50</td>
                        <td >
                            <a href="{{route('admin.delete.rating',['delete',$rating->id])}}" onclick="return confirm('Bạn có chắc chắn xóa không?')" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        {{ $ratings->links() }}

    </div>
@endsection
