@extends('layouts.masterFrontend')
@section('content')
    <div class=" container-fluid my-5 ">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card shadow-lg ">
                    <div class="row p-2 mt-3 justify-content-between text-center">
                        <div class="col"></div>
                        <div class="col">
                            <div class="row justify-content-start ">
                                <div class="col"> <img class="irc_mi img-fluid cursor-pointer " src="{{asset('frontend/image/Logo-Nowvn-Elip.png')}}" width="70" height="70"> </div>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                    <div class="row mx-auto justify-content-center text-center">
                        <div class="col-12 mt-3 ">
                            <nav aria-label="breadcrumb" class="second ">
                                <ol class="breadcrumb indigo lighten-6 first ">
                                    <li class="breadcrumb-item font-weight-bold "><a class="black-text text-uppercase " href="{{route('get.home')}}"><span class="mr-md-3 mr-1">Trang chủ</span></a><i class="fa fa-angle-double-right " aria-hidden="true"></i></li>
                                    <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="{{route('get.list.shopping.cart')}}"><span class="mr-md-3 mr-1">Giỏ hàng</span></a><i class="fa fa-angle-double-right text-uppercase " aria-hidden="true"></i></li>
                                    <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase active-2" href="#"><span class="mr-md-3 mr-1">Thanh toán</span></a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row justify-content-around mb-4">
                        <div class="col-md-5">
                            <div class="card border-0">
                                <h2 class="text-center mt-3">THÔNG TIN THANH TOÁN</h2>
                                <div class="card-header pb-0">
                                    <p class="card-text text-muted mt-4 space mb-2">THÔNG TIN GIAO HÀNG</p>
                                    <hr class="my-0">
                                </div>
                                <form action="" method="POST">
                                    @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="small text-muted mb-1">Địa chỉ</label>
                                        <input type="text" class="form-control form-control-sm" name="address" placeholder="Địa chỉ" >
                                    </div>
                                    <div class="form-group">
                                        <label class="small text-muted mb-1">Email</label>
                                        <input type="email" class="form-control form-control-sm" name="email" placeholder="Email" value="{{get_data_user('web','email')}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="small text-muted mb-1">Số điện thoại</label>
                                        <input type="text" class="form-control form-control-sm" name="phone" placeholder="Số điện thoại" value="{{get_data_user('web','phone')}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="small text-muted mb-1">Ghi chú</label>
                                        <textarea name="note"  class="form-control" cols="30" rows="3" placeholder="Nội dung" style="resize: none"></textarea>
                                    </div>
                                    <div class="row mb-5 mt-4 ">
                                        <div class="col-md-7 col-lg-6 mx-auto"><button type="submit" class="btn btn-block btn-outline-primary btn-lg">Xác nhận</button></div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card border-0">
                                <a href="{{route('get.list.shopping.cart')}}" class="btn btn-danger mx-auto mt-3" >Cập nhật Giỏ Hàng</a>
                                <div class="card-header ">
                                    <p class="card-text text-muted md-4 mb-2 mt-1 space">THÔNG TIN GIỎ HÀNG</p>
                                    <hr class="my-2">
                                </div>
                                <div class="card-body pt-0">
                                    @if(isset($listProducts))
                                        @foreach($listProducts as $listProduct)
                                    <div class="row justify-content-between my-2">
                                        <div class="col-auto col-md-7">
                                            <div class="media flex-column flex-sm-row"> <img  src="{{pare_url_file($listProduct->options->avatar)}}" width="84" height="84" style="border-radius: 10px">
                                                <div class="media-body my-auto">
                                                    <div class="row ">
                                                        <div class="col-auto">
                                                            <h4 class="m-2"><strong>{{$listProduct->name}}</strong></h4>
                                                            @if($listProduct->options->sale > 0)
                                                            <p class="m-2">Giá : {{number_format($listProduct->options->price_old,0,',','.')}} VND</p>
                                                            <p class="m-2">Sale : {{$listProduct->options->sale}}%</p>
                                                            @else
                                                            <p class="m-2">Giá : {{number_format($listProduct->options->price_old,0,',','.')}} VND</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" pl-0 flex-sm-col col-auto my-auto">
                                            <p class="boxed-1 p-2 rounded-circle">{{$listProduct->qty}}</p>
                                        </div>
                                        <div class=" pl-0 flex-sm-col col-auto my-auto ">
                                            <p><b>{{number_format($listProduct->price * $listProduct->qty,0,',','.')}} VND</b></p>
                                        </div>
                                    </div>
                                            <hr>
                                    @endforeach
                                    @endif
                                    <div class="row ">
                                        <div class="col">
                                            <div class="row justify-content-between">
                                                <div class="col-4">
                                                    <p class="mb-1"><b>Tiền hàng:</b></p>
                                                </div>
                                                <div class="flex-sm-col col-auto">
                                                    <p class="mb-1  color-r"><b>{{$total}} VND</b></p>
                                                </div>
                                            </div>
                                            <div class="row justify-content-between">
                                                <div class="col">
                                                    <p class="mb-1"><b>Phí Ship: </b></p>
                                                </div>
                                                <div class="flex-sm-col col-auto">
                                                    <p class="mb-1 color-r"><b>0 VND</b></p>
                                                </div>
                                            </div>
                                            <div class="row justify-content-between">
                                                <div class="col-4">
                                                    <p><b>Tổng Tiền: </b></p>
                                                </div>
                                                <div class="flex-sm-col col-auto">
                                                    <p class="mb-1 color-r"><b>{{$total}} VND</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
{{--                                    <div class="row mb-5 mt-4 ">--}}
{{--                                        <div class="col-md-7 col-lg-6 mx-auto"><button type="button" class="btn btn-block btn-outline-primary btn-lg">ADD GIFT CODE</button></div>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

