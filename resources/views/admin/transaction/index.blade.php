@extends('layouts.master')
@section('content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('api-admin.index')}}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.index.transaction')}}">Đơn hàng</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
            </ol>
        </nav>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Quản lý đơn hàng
        </h1>
        {{--        <a href="{{route('admin.create.category')}}" class="btn btn-success pull-right">Thêm mới</a>--}}
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên khách hàng</th>
                <th>Tổng tiền</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Ghi chú</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($listTransactions))
                @foreach($listTransactions as $listTransaction)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$listTransaction->getUser->name}}</td>
                        <td>{{number_format($listTransaction->tr_total,0,',','.')}} VND</td>
                        <td>{{$listTransaction->tr_address}}</td>
                        <td>{{$listTransaction->tr_phone}}</td>
                        <td>{{$listTransaction->tr_note}}</td>
                        <td>
                            @if($listTransaction->tr_status == 1)
                                <span class="badge badge-success">Đã xử lý</span>
                            @else
                                <span class="badge badge-dark">Đang xử lý</span>
                            @endif
                        </td>
                        <td class="d-flex">
                            <a href="{{route('admin.delete.transaction',['delete',$listTransaction->id])}}"
                               onclick="return confirm('Bạn có chắc chắn xóa không?')"
                               class="btn btn-danger mr-1">Xóa</a>
                            <a class="btn btn-success js-modal-detail" data-id="{{$listTransaction->id}}" href="{{route('admin.view.transaction',$listTransaction->id)}}"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
{{--                            Modal detail order--}}
    <div class="modal fade" id="myModalDetail">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">CHI TIẾT ĐƠN HÀNG #<b class="transaction-id"></b></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body" id="modal_content">
{{--                    content ajax append--}}
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function () {
            $('.js-modal-detail').click(function (e) {
                    e.preventDefault();
                     let $this = $(this);
                    let url = $this.attr('href');
                    $('.transaction-id').text('').text($this.attr('data-id'));
                    $('#myModalDetail').modal('show');
                    $.ajax({
                        url: url,
                        }).done(function (result) {
                        // console.log(result);
                        if(result){
                            $('#modal_content').html('').append(result);
                        }
                    });

            });
        });
    </script>
@endsection
