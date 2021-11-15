@extends('layouts.masterFrontend')
@section('content')
    <div class="container">
    <div class="mb-4" style="margin-top: 20px; text-align: center">
        <h1 class="h3 mt-10 text-gray-800">
            Danh sách đơn hàng
        </h1>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr style="font-weight: bold">
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Thành tiền</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>

            @if(isset($listProducts))
                @foreach($listProducts as $listProduct)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$listProduct->name}}</td>
                        <td>
                            <img src="{{pare_url_file($listProduct->options->avatar)}}" alt="" style="width: 80px; height: 80px">
                        </td>
                        <td>{{$listProduct->qty}}</td>
                        <td>
                            <ul>
                                @if($listProduct->options->sale > 0)
                                <li>Giá: {{number_format($listProduct->options->price_old,0,',','.')}} VND</li>
                                <li>Sale: {{$listProduct->options->sale}}%</li>
                                @else
                                <li>Giá: {{number_format($listProduct->options->price_old,0,',','.')}} VND</li>
                                @endif
                            </ul>
                        </td>
                        <td>{{number_format($listProduct->qty * $listProduct->price,0,',','.')}} VND</td>
                        <td>
                            <a href="" class="btn btn-success">Sửa</a>
                            <a href="{{route('delete.shopping.cart',$listProduct->rowId)}}" onclick="return confirm('Bạn có chắc chắn xóa không?')" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        <div class="text-right my-3">
            <h2 style="font-weight: bold; margin: 15px 0; text-align: right">Tông đơn hàng: {{$total}} VND</h2>
            <a href="{{route('get.home')}}" class="btn btn-danger" >Tiếp tục mua hàng</a>
            <a href="{{route('get.form.pay')}}" class="btn btn-success" >Thanh Toán</a>
        </div>

    </div>
    </div>

@endsection

