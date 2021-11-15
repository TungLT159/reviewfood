@extends('layouts.masterFrontend')
@section('content')
{{--    <div class="wapper-detail">--}}
{{--        <div class="navbar-menu">--}}
{{--            <ul class="navbar-menu__top">--}}
{{--                <li class="nav-list-logo"><a href="" style="display: flex;" ><img src="/public/Image/ma-giam-gia-now-vn.png" alt="" width="84px" height="auto"></a></li >--}}
{{--                <li class="nav-list-select">--}}
{{--                    <div class="form-group">--}}
{{--                        <select class="form-control" id="exampleFormControlSelect1">--}}
{{--                            <option>Hà Nội</option>--}}
{{--                            <option>TP Hồ Chí Minh</option>--}}
{{--                            <option>Cần Thơ</option>--}}
{{--                            <option>Sóc Trăng</option>--}}
{{--                            <option>Bạc Liêu</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-list" ><a href="" class="active">Đồ ăn</a></li>--}}
{{--                <li class="nav-list"><a href="">Đặt bàn</a></li>--}}
{{--                <li class="nav-list"><a href="">Thực phẩm</a></li>--}}
{{--                <li class="nav-list"><a href="">Rượu bia</a></li>--}}
{{--                <li class="nav-list"><a href="">Hoa</a></li>--}}
{{--                <li class="nav-list"><a href="">Sản phẩm</a></li>--}}
{{--                <li class="nav-list"><a href="">Thuốc</a></li>--}}
{{--            </ul>--}}
{{--            <a href="" id="openup">--}}
{{--                <img src="/public/Image/ma-giam-gia-now-vn.png" alt="" width="84px" height="auto">--}}
{{--            </a>--}}
{{--        </div>--}}
        <div class="product-detail">
            <div class="container">
                @if(isset($storeDetails))
                <div class="row no-gutters">
                    <input type="hidden" id="lat_1" value={{$storeDetails->st_lat}}  />
                    <input type="hidden" id="lng_1" value={{$storeDetails->st_lng}}>
                    <div class="col-sm-12 col-md-5">
                        <div class="product-detail__img">
                            <img src="{{pare_url_file($storeDetails->st_avatar)}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="product-detail__main">
                            <div class="detail-path"><a href="{{route('get.home')}}">Home</a href="#"> &raquo; <a href="#">{{$localDetail->ar_name}}</a> &raquo; <a href="#">{{$storeDetails->st_name}}</a></div>
                            <div class="detail-branch"><span>{{isset($typeCookDetail->tc_name) ? $typeCookDetail->tc_name : ''}} -</span><a href="#"> Chi nhánh</a></div>
                            <div class="detail-content">
                                <h4 class="detail-content__txt">{{$storeDetails->st_name}}</h4>
                                <div class="line-rating"></div>
                                <div class="detail-content__rating">
                                    <?php
                                    $totalSpace = 0;  $totalPosition = 0;  $totalServe = 0;  $totalQuality = 0;  $totalPrice = 0; $totalNumber = 0; $totalOnlyUser = 0;
                                    if (isset($storeDetails)) {
                                        if (($storeDetails->st_total_rating)) {
                                            $totalSpace = round($storeDetails->st_total_space/$storeDetails->st_total_rating, 1);
                                            $totalPosition = round($storeDetails->st_total_position/$storeDetails->st_total_rating, 1);
                                            $totalServe = round($storeDetails->st_total_serve/$storeDetails->st_total_rating, 1);
                                            $totalQuality = round($storeDetails->st_total_quality/$storeDetails->st_total_rating, 1);
                                            $totalPrice = round($storeDetails->st_total_price/$storeDetails->st_total_rating, 1);
                                            $totalNumber = round($storeDetails->st_total_number/(int)($storeDetails->st_total_rating * 5),1);
                                            $totalOnlyUser =  round($storeDetails->st_activeOpen/10,1); //đánh giá cá nhân show comment

                                        }
                                    }
                                    ?>
                                    <div class="rating-total">{{$totalNumber}}</div>
                                    <div class="rating-wrap">
                                        <ul class="rating-wrap-list">
                                            <li class="rating-wrap-list__item rating-space">{{$totalSpace}}<span>Không gian</span></li>
                                            <li class="rating-wrap-list__item rating-position">{{$totalPosition}}<span>Vị trí</span></li>
                                            <li class="rating-wrap-list__item rating-serve">{{$totalServe}}<span>Phục vụ</span></li>
                                            <li class="rating-wrap-list__item rating-quality">{{$totalQuality}}<span>Chất lượng</span></li>
                                            <li class="rating-wrap-list__item rating-price">{{$totalPrice}}<span>Giá cả</span></li>
                                        </ul>
                                    </div>
                                    <div class="rating-cmt">{{$storeDetails->st_total_rating}}<span>Bình luận</span></div>
                                </div>
                                <div class="line-rating"></div>
                                <div class="detail-content__local">{{$storeDetails->st_address}}</div>
                                <div class="detail-content__start">
                                    @for ($i = 1; $i <= 5 ; $i++)
                                    <span><i class="fa fa-star {{$i <= $totalNumber/2 ? 'active' : '' }}"></i></span>
                                    @endfor
                                </div>
                                <div class="detail-content__rate"><a href="#comment-dg">Xem thêm lượt đánh giá từ Foody</a></div>
                                <div class="detail-content__open">
                                    <div class="open-status">
                                        <a href="#"> <span class="open-gr" title="Mở cửa"></span></a>
                                    </div>
                                    <span><i class="far fa-clock"></i> {{$storeDetails->st_timeOpen}}</span>
                                </div>
                                <div class="detail-content__cost">
                                    <span class="fas-price"><i class="fas fa-dollar-sign "></i>{{$storeDetails->st_price}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @endif
            </div>



            <div class="container text-center mt-5">
                <h2 class="text-center ">Vị trí tuyến đường</h2>
                <button id="btn-access" class="btn btn-success my-4">Cho phép truy cập địa chỉ của bạn</button>
                <input type="button" id="routebtn" value="Tìm vị trí tuyến đường cho bạn" class="btn btn-primary"/>
            </div>
            <div id="map-cavans" style="height: 600px; width: 600px; margin: 20px auto; position: relative; ">

            </div>
        </div>


        <div class="menu-detail">
            <div class="container">
                <h4 class="menu-td">Thực Đơn</h4>
{{--                <div class="menu-search">--}}
{{--                    <form action="" class="">--}}
{{--                        <label for="">Tìm kiếm sản phẩm</label>--}}
{{--                        <div class="input-group">--}}
{{--                            <input type="text" id="search" class="form-control mr-2" name="search">--}}
{{--                            <input type="button" id="btnSearch" class="btn btn-success" value="Tìm kiếm">--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
                <div class="menu-detail-main">
                    @if($productInStoreDetails)
                        @foreach($productInStoreDetails as $productInStoreDetail)
                    <div class="menu-detail-main-list">
                        <div class="menu-detail__content">
                            <div class="menu-detail__content-img">
                                <img src="{{pare_url_file($productInStoreDetail->pro_avatar)}}" alt="">
                            </div>
                            <div class="menu-detail__content-txt">
                                <h5 class="menu-title">{{$productInStoreDetail->pro_name}}</h5>
                                @if($productInStoreDetail->pro_sale == 0)
                                <div class="menu-price">{{$productInStoreDetail->pro_price}} VND</div>
                                @else
                                <div class="menu-price">{{$productInStoreDetail->pro_price}} VND</div>
                                <div class="menu-price-sale">{{$productInStoreDetail->pro_sale}}%</div>
                                @endif
                            </div>
                            <div class="menu-detail__content-btn">
                                <a href="{{route('add.shopping.cart',$productInStoreDetail->id)}}" class="btn btn-danger"><i class="fa fa-plus-circle"></i> Mua ngay</a>
                            </div>
                        </div>
                    </div>
                        @endforeach
                        @endif
                </div>
            </div>
        </div>
<div class="rating-comment" id="comment-dg">
    <div class="container">
        <div class="rating-comment__form" style="position: relative;">
            <h3 class="rating-comment-dg" >Phần đánh giá</h3>
            <hr>
            <h6 style="color: #ff1312">(Hãy kéo thanh đánh giá cho từng phần, viết bình luận để đánh giá)</h6>
            <div class="rating-comment-list">
                <div id="first" class="rating-comment-item">
                    <label for="slider1" class="mr-3">Không gian</label>
                    <input type="range" id="js_space" name="slider1" min=0 max=10 value=0>
                    <div class="score" id="ratingSpace">0</div>
                </div>
                <div id="first" class="rating-comment-item">
                    <label for="slider2" class="mr-3">Vị trí</label>
                    <input type="range" id="js_position" name="slider2" min=0 max=10 value=0>
                    <div class="score" id="ratingPosition">0</div>
                </div>
                <div id="first" class="rating-comment-item">
                    <label for="slider3" class="mr-3">Phục vụ</label>
                    <input type="range" id="js_serve" name="slider3" min=0 max=10 value=0>
                    <div class="score" id="ratingServe">0</div>
                </div>
                <div id="first" class="rating-comment-item">
                    <label for="slider4" class="mr-3">Chất lượng</label>
                    <input type="range" id="js_quality" name="slider4" min=0 max=10 value=0>
                    <div class="score" id="ratingQuality">0</div>
                </div>
                <div id="first" class="rating-comment-item">
                    <label for="slider5" class="mr-3">Giá cả</label>
                    <input type="range" id="js_price" name="slider5" min=0 max=10 value=0>
                    <div class="score" id="ratingPrice">0</div>
                </div>
            </div>
            <div class="form-rating rating-comment-send">
                <textarea name="" id="ra_content" cols="30" rows="4" style="resize: none"></textarea>
                <a class=" btn btn-success js_rating_store" href="{{route('get.rating.store',$storeDetails->id)}}">Gửi đánh giá</a>
            </div>
            <span class="error-form"></span>
        </div>
        <div class="rating-comment-show" id="comment-show">
            <h5>Có <span style="color: #00972a;">{{$storeDetails->st_total_rating}}</span> đánh giá cho cừa hàng <span style="color: #00972a;">{{$storeDetails->st_name}}</span></h5>
            @if(isset($ratings))
                @foreach($ratings as $rating)
            <div class="rating-comment-content my-3">
                <h6 class="rating-comment-title"><span>{{substr($rating->getUserRating->name,0,1)}}</span>{{$rating->getUserRating->name}}</h6>
                <div class="rating-comment-txt d-flex">
                    <div class="detail-content__start mr-2">
                        @for ($i = 1; $i <= 5 ; $i++)
                            <span><i class="fa fa-star {{$i <= $totalOnlyUser ? 'active' : '' }}"></i></span>
                        @endfor
                    </div>
                    {{$rating->ra_content}}
                </div>
                <div class="rating-comment-date"><a href="" class="mr-3">Trả lời</a><span>{{date('d/m/Y H:i',strtotime($rating->created_at))}}</span></div>
            </div>
            <div class="line-rating"></div>
            @endforeach
            @endif
            {{$ratings->links()}}
        </div>
    </div>
</div>
{{--    </div>--}}
@endsection
@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            $('input[type="range"]').on("change mousemove", function () {
                $(this).next().html($(this).val());
            });
            $('.js_rating_store').on('click', function (e) {
                e.preventDefault();
                let content = $('#ra_content').val();
                let numberSpace = $('#js_space').val();
                let numberPosition = $('#js_position').val();
                let numberServe = $('#js_serve').val();
                let numberQuality = $('#js_quality').val();
                let numberPrice = $('#js_price').val();
                let url = $(this).attr('href');
                if (content && (numberSpace != 0) && (numberPosition != 0) && (numberServe != 0) && (numberQuality != 0) && (numberPrice != 0)) {
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {
                            numberSpace: numberSpace,
                            numberPosition: numberPosition,
                            numberServe: numberServe,
                            numberQuality: numberQuality,
                            numberPrice: numberPrice,
                            r_content: content
                        }
                    }).done(function (result) {
                        if (result.code == 1) {
                            alert("Gửi đánh giá thành công!");
                            location.reload();
                        } else {
                            alert('Bạn chưa đăng nhập hoặc bạn đã đánh giá rồi');
                            location.reload();
                        }
                    })
                    // console.log(result);
                } else {
                    alert('Vui lòng điền đánh giá đầy đủ và đăng nhập để gửi đánh giá')
                }
            });
        });
    </script>
{{--    Search ajax--}}
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    $(document).ready(function () {
            $('#search').on('keyup',function(){
                $keyValue = $(this).val();
                $.ajax({
                    type: 'get',
                    url: '{{ URL::to('get.detail.store') }}',
                    data: {
                        'search': $keyValue
                    },
                    success:function(data){
                        $('.menu-detail-main').html(data);
                    }
                });
            });
        {{--$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });--}}
    })
    </script>
{{--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQy2I5q1u8YMrw5uBtB9bR5rqeQpneP2o&callback=initMap"--}}
{{--             defer></script>--}}
{{--    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBQy2I5q1u8YMrw5uBtB9bR5rqeQpneP2o&libraries=places&callback=initAutocomplete"></script>--}}
{{--    <script src="{{asset('frontend/js/script.js')}}"></script>--}}
    <script>
        // var map;
        // function initMap() {
        //     map = new google.maps.Map(document.getElementById('map'), {
        //         center: {lat: 16.064970, lng: 108.174880},
        //         zoom: 8
        //     });
        // }

        // function dogetRedirect_map(position, roomLatlng) {
        //     var map = new google.maps.Map(document.getElementById('map'), {
        //         zoom: 12,
        //         // center: myLatLng
        //     });
        //     var request = {
        //         origin: position,
        //         destination: roomLatlng,
        //         travelMode: google.maps.TravelMode.DRIVING
        //     };
        //     directionsDisplay.setMap(map); // map là biến google maps được tạo ở đoạn code bài trước
        //     directionsService.route(request, function(response, status) {
        //         if (status == google.maps.DirectionsStatus.OK) {
        //             directionsDisplay.setOptions({ preserveViewport: true, suppressMarkers: true });
        //             directionsDisplay.setDirections(response);
        //             var myroute = response.routes[0]; // Kết quả trả về
        //             var time    = myroute.legs[0].duration.text; // Thời gian duy chuyển
        //             var total   = myroute.legs[0].distance.text; // Chiều dài đoạn đường duy chuyển
        //             var from    = myroute.legs[0].start_address; // Điểm xuất phát
        //             var to      = myroute.legs[0].end_address; // Điểm đến
        //         } else {
        //             console.log(status);
        //         }
        //     });
        // }
        // var position = new google.maps.LatLng(16.064970, 108.174881); // Tọa độ điểm xuất phát
        // var roomLatlng = new google.maps.LatLng(21.023319, 105.850540); // Tọa độ điểm đễn
        // // var position = new google.maps.LatLng(lat1, lng1); // Tọa độ điểm xuất phát
        // // var roomLatlng = new google.maps.LatLng(lat2, lng2); // Tọa độ điểm đễn
        // dogetRedirect_map(position, roomLatlng);

        // function initMap() {
        //     var myLatLng = {lat: 16.0566682, lng: 108.1733446};
        //     var map = new google.maps.Map(document.getElementById('map'), {
        //         zoom: 12,
        //         center: myLatLng
        //     });
        //
        // }












        {{--var markerslist = {{ json_encode(getpost_maps_home(5))}}--}}
        {{--function initMap() {--}}
        {{--    var myLatLng = {lat: 16.0566682, lng: 108.1733446};--}}
        {{--    var map = new google.maps.Map(document.getElementById('map'), {--}}
        {{--        zoom: 12,--}}
        {{--        center: myLatLng--}}
        {{--    });--}}
        {{--    for (i = 0; i < markerslist.length; i++) {--}}
        {{--        add_marker(markerslist[i], i, map);--}}
        {{--    }--}}
        {{--}--}}
        {{--function add_marker(markers, iter, map){--}}
        {{--    var infowindow = new google.maps.InfoWindow({--}}
        {{--        content: ''--}}
        {{--    });--}}
        {{--    var pos = new google.maps.LatLng(Number(markers.lat), Number(markers.lng));--}}
        {{--    var content = '<h4>'+markers.title+'</h4>';--}}
        {{--    marker = new google.maps.Marker({--}}
        {{--        position: pos,--}}
        {{--        map: map,--}}
        {{--        iter: iter,--}}
        {{--        content: content,--}}
        {{--        title: markerslist.title--}}
        {{--    });--}}
        {{--    google.maps.event.addListener(marker, 'click', (function (marker, content) {--}}
        {{--        return function () {--}}
        {{--            infowindow.setContent(content);--}}
        {{--            infowindow.open(map, marker);--}}
        {{--            map.setZoom(13);--}}
        {{--            map.panTo(this.getPosition());--}}
        {{--        }--}}
        {{--    })(marker, content));--}}
        {{--}--}}

        {{--function getLocation() {--}}
        {{--    if (navigator.geolocation) {--}}
        {{--        navigator.geolocation.getCurrentPosition(showPosition);--}}
        {{--    } else {--}}
        {{--        x.innerHTML = "Geolocation is not supported by this browser.";--}}
        {{--    }--}}
        {{--}--}}

        {{--function showPosition(position) {--}}
        {{--    console.log(position.coords.latitude); // Lat của vị trí hiện tại<br />  console.log(position.coords.longitude); // Lng của vị trí hiện tại--}}
        {{--}--}}
        // function initMap($lat,$long) {
        //
        //     var myLatLng = {lat: $lat, lng: $long};
        //
        //     var map = new google.maps.Map(document.getElementById('map'), {
        //         zoom: 4,
        //         center: myLatLng
        //     });
        //
        //     var marker = new google.maps.Marker({
        //         position: myLatLng,
        //         map: map,
        //         title: '182 Nguyễn Như Hạnh, Quận Liên Chiểu, Đà Nẵng'
        //     });
        // }

        // var poly;
        // var map;
        //
        // function initMap() {
        //     map = new google.maps.Map(document.getElementById('map'), {
        //         zoom: 7,
        //         center: {lat: 41.879, lng: -87.624}  // Center the map on Chicago, USA.
        //     });
        //
        //     poly = new google.maps.Polyline({
        //         strokeColor: '#000000',
        //         strokeOpacity: 1.0,
        //         strokeWeight: 3
        //     });
        //     poly.setMap(map);
        //
        //     // Add a listener for the click event
        //     map.addListener('click', addLatLng);
        // }
        //
        // // Handles click events on a map, and adds a new point to the Polyline.
        // function addLatLng(event) {
        //     var path = poly.getPath();
        //
        //     // Because path is an MVCArray, we can simply append a new coordinate
        //     // and it will automatically appear.
        //     path.push(event.latLng);
        //
        //     // Add a new marker at the new plotted point on the polyline.
        //     var marker = new google.maps.Marker({
        //         position: event.latLng,
        //         title: '#' + path.getLength(),
        //         map: map
        //     });
        // }



        // (function initMap() {
        //     var addressAutocomplete, addressInput, directionsDisplay, directionsSvc, infoWindow, map, mapLatLng, mapOptions, marker, placeMarkerMaker, placesSvc, searchPlacesResult;
        //
        //     placesSvc = null;
        //
        //     infoWindow = new google.maps.InfoWindow();
        //     // Khởi tạo các tùy chọn cho Map
        //     mapLatLng = new google.maps.LatLng(21.0277644, 105.83415979999995);
        //
        //     directionsDisplay = new google.maps.DirectionsRenderer({
        //         suppressMarkers: true //Không hiển thị đánh dấu điểm A và B
        //     });
        //     directionsSvc = new google.maps.DirectionsService();
        //         //Khởi tạo các tùy chọn cho Map
        //     mapOptions = {
        //         zoom: 12,
        //         center: mapLatLng
        //     };
        //
        //     map = new google.maps.Map($("#map")[0], mapOptions);
        //
        //     directionsDisplay.setMap(map);
        //     //Tạo một marker để đánh dấu vị trí hiện tại
        //     marker = new google.maps.Marker({
        //         position: mapLatLng,
        //         map: map
        //     });

            // addressInput = $("#address")[0];
            //
            // addressAutocomplete = new google.maps.places.Autocomplete(addressInput);
            //
            // addressAutocomplete.bindTo("bounds", map);
            //
            // google.maps.event.addListener(addressAutocomplete, "place_changed", function() {
            //     var placeObj;
            //     placeObj = addressAutocomplete.getPlace();
            //     marker.setPosition(placeObj.geometry.location);
            //     map.setCenter(placeObj.geometry.location);
            //     return mapLatLng = placeObj.geometry.location;
            // });
            //
            // $("#search").on("click", function() {
            //     var placeKeyword, placeRequestObj;
            //     placeKeyword = $("#keyword").val().trim();
            //     if (placeKeyword) {
            //         placeRequestObj = {
            //             location: mapLatLng,
            //             radius: 5000,
            //             keyword: placeKeyword
            //         };
            //         placesSvc = new google.maps.places.PlacesService(map);
            //         return placesSvc.nearbySearch(placeRequestObj, searchPlacesResult);
            //     } else {
            //         return $("#keyword").focus();
            //     }
            // });
            //
            // searchPlacesResult = function(results, status) {
            //     var drawCircle, i, _results;
            //     if (status === google.maps.places.PlacesServiceStatus.OK) {
            //         drawCircle = new google.maps.Circle({
            //             map: map,
            //             center: mapLatLng,
            //             radius: 5000,
            //             strokeColor: "#FF0000",
            //             strokeOpacity: 0.8,
            //             strokeWeight: 1,
            //             strokeColor: "#FF0000",
            //             fillColor: "#FF0000",
            //             fillOpacity: 0.35
            //         });
            //         i = 0;
            //         _results = [];
            //         while (i < results.length) {
            //             placeMarkerMaker(results[i]);
            //             _results.push(i++);
            //         }
            //         return _results;
            //     }
            // };

        //     placeMarkerMaker = function(place) {
        //         var detailRequest, placeLocation;
        //         placeLocation = place.geometry.location;
        //         detailRequest = {
        //             reference: place.reference
        //         };
        //         return placesSvc.getDetails(detailRequest, function(details, status) {
        //             var markerIcon, placeMarker;
        //             markerIcon = '';
        //             if (details.icon) {
        //                 markerIcon = new google.maps.MarkerImage(details.icon, null, null, null, new google.maps.Size(32, 32));
        //             }
        //             placeMarker = new google.maps.Marker({
        //                 map: map,
        //                 position: placeLocation,
        //                 icon: markerIcon,
        //                 animation: google.maps.Animation.DROP
        //             });
        //             google.maps.event.addListener(placeMarker, 'click', function(e) {
        //                 infoWindow.setContent("<b>" + details.name + "</b><br />" + details.formatted_address);
        //                 return infoWindow.open(map, placeMarker);
        //             });
        //             return google.maps.event.addListener(placeMarker, 'click', function(e) {
        //                 var directionsRequest;
        //                 directionsRequest = {
        //                     origin: mapLatLng,
        //                     destination: e.latLng,
        //                     travelMode: google.maps.DirectionsTravelMode.DRIVING
        //                 };
        //                 return directionsSvc.route(directionsRequest, function(result, status) {
        //                     if (status === google.maps.DirectionsStatus.OK) {
        //                         return directionsDisplay.setDirections(result);
        //                     } else {
        //                         return alert(status);
        //                     }
        //                 });
        //             });
        //         });
        //     };
        //
        // }).call(this);
    $(document).ready(function () {

        //        Vị trí hiện tại

        //Xử lý đường đi
        function mapLocation() {
            var directionsDisplay,directionsService,map,latStore,lngStore,latLocal, lngLocal;
            directionsService = new google.maps.DirectionsService();
             latStore = document.getElementById('lat_1').value;
             lngStore = document.getElementById('lng_1').value;
             console.log(latStore,lngStore );

            function initialize() {
                directionsDisplay = new google.maps.DirectionsRenderer();
                var deafultLocation = new google.maps.LatLng(lngStore, latStore);
                var mapOptions = {
                    zoom: 7,
                    center: deafultLocation
                };
                map = new google.maps.Map(document.getElementById('map-cavans'), mapOptions);
                directionsDisplay.setMap(map);
                google.maps.event.addDomListener(document.getElementById('routebtn'), 'click', calcRoute);
            }
            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    x.innerHTML = "Geolocation is not supported by this browser.";
                }
            }
            function showPosition(position) {

                latLocal =  position.coords.latitude ;
                lngLocal = position.coords.longitude;
                console.log('vi tri database',latLocal,lngLocal );
            }
            google.maps.event.addDomListener(document.getElementById('btn-access'), 'click', getLocation);

            function calcRoute() {


                // if (navigator.geolocation) {
                //     navigator.geolocation.getCurrentPosition(function(position) {
                //         var pos = {
                //             lat: position.coords.latitude,
                //             lng: position.coords.longitude
                //         };
                //
                //         infoWindow.setPosition(pos);
                //         infoWindow.setContent('Location found.');
                //         infoWindow.open(map);
                //         map.setCenter(pos);
                //     }, function() {
                //         handleLocationError(true, infoWindow, map.getCenter());
                //     });
                // } else {
                //     // Browser doesn't support Geolocation
                //     handleLocationError(false, infoWindow, map.getCenter());
                // }

                //
                // latStore = document.getElementById('lat_1').value;
                // lngStore = document.getElementById('lng_1').value;

                // var start = new google.maps.LatLng(lngStore, latStore);
                // // //var end = new google.maps.LatLng(38.334818, -181.884886);
                // var end = new google.maps.LatLng(latLocal, lngLocal);
                //
                //     console.log('Diem bat dau',start,'diem ket thuc',end);
                var starts = new google.maps.LatLng(106.696750 , 20.838950);
                var ends = new google.maps.LatLng(10.0300374 , 105.7714438);
                console.log('statrt',starts);
                // var end = new google.maps.LatLng(37.441883, -122.143019);
                var request = {
                    origin: starts,
                    destination: ends,
                    travelMode: google.maps.TravelMode.DRIVING
                };
                directionsService.route(request, function(response, status) {
                    if (status == google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);
                        directionsDisplay.setMap(map);
                    } else {
                        // alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);
                        alert('Không tìm được đường đi. Có thể bạn chưa click chọn cho phép chia sẻ vị trí của bạn.')
                    }
                });

            }

            google.maps.event.addDomListener(window, 'load', initialize);
        }
        mapLocation();
    })



//&callback=initMap

    </script>
{{--    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>--}}
@endsection
