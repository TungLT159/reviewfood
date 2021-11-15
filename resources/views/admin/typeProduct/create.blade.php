@extends('layouts.master')
@section('content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('api-admin.index')}}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.index.typeProduct')}}">Loại sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thêm mới</li>
            </ol>
        </nav>
        </ol>
    </div>
    {{--    <div class="container-fluid">--}}
    <div class="row">
        <div class="col-md-12">
            @include('admin.typeProduct.form')
        </div>
    </div>
    {{--    </div>--}}

@endsection
