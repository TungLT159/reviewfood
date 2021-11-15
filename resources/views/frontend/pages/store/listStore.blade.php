@extends('layouts.masterFrontend')
@section('content')
    <!-- Product - item -->
    {{--    @include('frontend.components.slider')--}}
    <div class="product-site">
        <div class="container product-site-main-bottom">
            <div class="tab-content" id="nav-tabContent">
                @if(isset($storesSearch))
                    <h4 class="my-3 text-danger">Tìm thấy được : {{count($storesSearch)}} cửa hàng</h4>
                    <div class="row no-gutters">
                        @foreach($storesSearch as $storesSearchs)
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="tab-content-item">
                                    <div class="tab-content-item-avt">
                                        <a href="{{route('get.detail.store',[$storesSearchs->st_slug,$storesSearchs->id])}}"><img
                                                src="{{pare_url_file($storesSearchs->st_avatar)}}" alt=""></a>
                                    </div>
                                    <div class="tab-content-item-txt">
                                        <a href="{{route('get.detail.store',[$storesSearchs->st_slug,$storesSearchs->id])}}">
                                            <h3 class="tab-content-item-txt__title">{{$storesSearchs->st_name}}</h3>
                                            <span
                                                class="tab-content-item-txt__detail">{{$storesSearchs->st_address}}</span>
                                        </a>
                                    </div>
                                    <div class="tab-content-item-sale">
                                        <div class="tab-content-item-sale__new">
                                            <i class="fa fa-tag"></i>
                                            <span>Cả ngày - Giảm {{$storesSearchs->st_sale}}%</span>
                                        </div>
                                        <div class="tab-content-item-sale__detail">
                                            Xem thêm 5 ưu đãi khác.....
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                            @else--}}
                            {{--                                <div class="container">--}}
                            {{--                                    <div class="row">--}}
                            {{--                                        <img src="https://cuocchuixoong.com/template/bella/images/icons/empty-cart.png"--}}
                            {{--                                             alt="Empty Store">--}}
                            {{--                                        <h3>Không tồn tại cửa hàng bạn đã tìm kiếm !</h3>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                        @endforeach
                        {{--                        @else--}}
                        {{--                        <p>dshabdashdsadas</p>--}}
                        {{--                        <div class="container">--}}
                        {{--                            <div class="row">--}}
                        {{--                                <img src="https://cuocchuixoong.com/template/bella/images/icons/empty-cart.png" alt="Empty Store">--}}
                        {{--                                <h3>Không tồn tại cửa hàng bạn đã tìm kiếm !</h3>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
