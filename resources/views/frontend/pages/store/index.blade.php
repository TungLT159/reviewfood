<div class="row no-gutters">
    @if(isset($stores))
        @foreach($stores as $store)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="tab-content-item">
                    <div class="tab-content-item-avt">
                        <a href=""><img src="{{pare_url_file($store->st_avatar)}}" alt=""></a>
                    </div>
                    <div class="tab-content-item-txt">
                        <a href="">
                            <h3 class="tab-content-item-txt__title">{{$store->st_name}}</h3>
                            <span
                                class="tab-content-item-txt__detail">{{$store->st_address}}</span>
                        </a>
                    </div>
                    <div class="tab-content-item-sale">
                        <div class="tab-content-item-sale__new">
                            <i class="fa fa-tag"></i>
                            <span>Cả ngày - Giảm {{$store->st_sale}}</span>
                        </div>
                        <div class="tab-content-item-sale__detail">
                            Xem thêm 5 ưu đãi khác.....
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>

