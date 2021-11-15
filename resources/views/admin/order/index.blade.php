@if($orderDetails)
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
{{--                <th>Thao tác</th>--}}
            </tr>
            </thead>
            <tbody>

                @foreach($orderDetails as $orderDetail)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><a href="#">{{$orderDetail->getProduct->pro_name}}</a></td>
                        <td>
                            <img src="{{isset($orderDetail->getProduct->pro_avatar) ? pare_url_file($orderDetail->getProduct->pro_avatar) : ''}}" alt="" style="width: 80px; height: 80px">
                        </td>
                        <td style="text-align: center">{{$orderDetail->or_qty}}</td>
                        <td>
                            <ul style="list-style: none; padding-left: 0">
                                @if($orderDetail->or_sale > 0)
                                    <li>Giá: {{number_format($orderDetail->getProduct->pro_price,0,',','.')}} VND</li>
                                    <li>Sale: {{$orderDetail->or_sale}}%</li>
                                @else
                                    <li>Giá: {{number_format($orderDetail->or_price,0,',','.')}} VND</li>
                                @endif
                            </ul>
                        </td>
                        <td>{{number_format($orderDetail->or_qty * $orderDetail->or_price,0,',','.')}} VND</td>
{{--                        <td>--}}
{{--                            <a href="" onclick="return confirm('Bạn có chắc chắn xóa không?')" class="btn btn-danger">Xóa</a>--}}
{{--                        </td>--}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif
