<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="/public/css/header.css">
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/sidebar-product.css">
    <link rel="stylesheet" href="/public/css/customlayout.css">
    <link rel="stylesheet" href="/public/css/product-site.css">
    <link rel="stylesheet" href="/public/css/owlCustom.css"> -->
    <link rel="stylesheet" href="/public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">

    <link rel="stylesheet" href="/public/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>reviewfoody</title>
</head>
<body>
<div class="wrapper">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <ul class="row-nav">
                        <li class="list"><a class="list__item list__item--bg" href="#">Khám Phá</a></li>
                        <li class="list"><a class="list__item" href="#">Đặt Bàn</a></li>
                        <li class="list"><a class="list__item" href="#">Đặt Giao Hàng</a></li>
                        <li class="list"><a class="list__item" href="#">Đi Chợ</a></li>
                        <li class="list"><a class="list__item" href="#">Làm Đẹp</a></li>
                        <li class="list"><a class="list__item" href="#">NewPos</a></li>
                        <li class="list"><a class="list__item" href="#">Giảm Giá</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header-bottom -->
    <div class="header-bottom">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-sm-12 col-md-9 ">
                    <div class="category-list">
                        <ul class="category-list-main">
                            <li class="logo-box">
                                <img src="/public/Image/foody-vn.png" alt="" class="logo">
                            </li>
                            <li class="category-list-main-local">
                                <select class="js-select2" style="width: 100px">
                                    <option>TPHCM</option>
                                    <option>Select B</option>
                                    <option>Select C</option>
                                    <option>Select D</option>
                                </select>
                            </li>
                            <li class="category-list-main-food">
                                <select class="js-select2" style="width: 100px; padding: 18px 12px;">
                                    <option>TPHCM</option>
                                    <option>Select B</option>
                                    <option>Select C</option>
                                    <option>Select D</option>
                                </select>
                            </li>
                            <li class="category-list-main-search">
                                <form action="">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search this blog">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary input-group-append--px" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </li>
                            <li class="category-list-main-small">
                                <div class="form-group">
                                    <select class="form-control fast--px" id="sel1" name="sellist1">
                                        <option>Thức ăn</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </li>
                            <li class="category-list-main-small">
                                <div class="form-group">
                                    <select class="form-control fast--px" id="sel1" name="sellist1">
                                        <option>App</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="category-list-main-login">
                        <ul class="category-list-main-login__user">
                            <li class="user-list"><a class="user-list--txt" href="">Đăng nhập</a></li>
                            <li class="user-list"><a href=""><i class="fa fa-bell"></i></a></li>
                            <li class="user-list"><a href="">
                                    <div class="dropdown show dropleft">
                                        <a  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-plus-circle"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="user-list"><a href=""><img src="/public/Image/vn.png" width="32px" height="32px" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- </ul> -->
            <!-- </div> -->
        </div>
    </div>
    <div class="owl-main">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="/public/Image/slide3.jpg" alt="images not found" class="item__img">
                <div class="item-cover">
                    <div class="item-cover-container">
                        <div class="item-cover-container__content">
                            <div class="line"></div>
                            <h2 class="txt-title">Teimagine Digital Experience with</h2 class="txt-title">
                            <h1 class="txt-title-big">Start-ups and solutions</h1 class="txt-title-big">
                            <h4 class="txt-detail">We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="/public/Image/slide1.jpg" alt="images not found" class="item__img">
                <!-- <div class="item-cover">
                    <div class="item-cover-container">
                        <div class="item-cover-container__content">
                            <div class="line animated bounceInLeft"></div>
                            <h2 class="txt-title">Reimagine Digital Experience with</h2>
                            <h1 class="txt-title-big">Intelligent solutions</h1>
                            <h4 class="txt-detail">We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                        </div>
                    </div>
                 </div> -->
            </div>
            <div class="item">
                <img src="/public/Image/slide2.jpg" alt="images not found" class="item__img">
                <!-- <div class="item-cover">
                    <div class="item-cover-container">
                        <div class="item-cover-container__content">
                            <div class="line animated bounceInLeft"></div>
                            <h2 class="txt-title">Peimagine Digital Experience with</h2>
                            <h1 class="txt-title-big">Intelligent Solutions</h1>
                            <h4 class="txt-detail">We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4 class="txt-detail">
                        </div>
                    </div>
                 </div> -->
            </div>
            <div class="item">
                <img src="/public/Image/hinh1.png" alt="images not found" class="item__img">
                <!-- <div class="item-cover">
                    <div class="item-cover-container">
                        <div class="item-cover-container__content">
                            <div class="line animated bounceInLeft"></div>
                            <h2 class="txt-title">Peimagine Digital Experience with</h2>
                            <h1 class="txt-title-big">Intelligent Solutions</h1>
                            <h4 class="txt-detail">We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4 class="txt-detail">
                        </div>
                    </div>
                 </div> -->
            </div>
            <div class="item">
                <img src="/public/Image/hinh2.png" alt="images not found" class="item__img">
                <!-- <div class="item-cover">
                    <div class="item-cover-container">
                        <div class="item-cover-container__content">
                            <div class="line animated bounceInLeft"></div>
                            <h2 class="txt-title">Peimagine Digital Experience with</h2>
                            <h1 class="txt-title-big">Intelligent Solutions</h1>
                            <h4 class="txt-detail">We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4 class="txt-detail">
                        </div>
                    </div>
                 </div> -->
            </div>
            <div class="item">
                <img src="/public/Image/slide5.jpg" alt="images not found" class="item__img">
                <!-- <div class="item-cover">
                    <div class="item-cover-container">
                        <div class="item-cover-container__content">
                            <div class="line animated bounceInLeft"></div>
                            <h2 class="txt-title">Peimagine Digital Experience with</h2>
                            <h1 class="txt-title-big">Intelligent Solutions</h1>
                            <h4 class="txt-detail">We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4 class="txt-detail">
                        </div>
                    </div>
                 </div> -->
            </div>
            <div class="item">
                <img src="/public/Image/slide2.jpg" alt="images not found" class="item__img">
                <!-- <div class="item-cover">
                    <div class="item-cover-container">
                        <div class="item-cover-container__content">
                            <div class="line animated bounceInLeft"></div>
                            <h2 class="txt-title">Peimagine Digital Experience with</h2>
                            <h1 class="txt-title-big">Intelligent Solutions</h1>
                            <h4 class="txt-detail">We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4 class="txt-detail">
                        </div>
                    </div>
                 </div> -->
            </div>
        </div>
    </div>
    <!-- Product - item -->
    <div class="product-site">
        <div class="container product-site-main-top">
            <nav class="product-site-main-top__nav">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <div class="nav-tabs-content">
                        <div class="nav-tabs-content__avt">
                            <span> <img src="/public/Image/icon-now.png" alt="" width="35px" height="auto"></span>
                        </div>
                        <div class="nav-tabs-content__txt">
                            <span> Giao tận nơi</span>
                        </div>
                    </div>
                    <a class="nav-item nav-link active" id="nav-deal-tab" data-toggle="tab" href="#nav-deal" role="tab" aria-controls="nav-deal" aria-selected="true">Deal hôm nay</a>
                    <a class="nav-item nav-link" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="false">Tất cả</a>
                    <a class="nav-item nav-link" id="nav-food-tab" data-toggle="tab" href="#nav-food" role="tab" aria-controls="nav-food" aria-selected="false">Food</a>
                    <a class="nav-item nav-link" id="nav-drink-tab" data-toggle="tab" href="#nav-drink" role="tab" aria-controls="nav-drink" aria-selected="false">Drink</a>
                    <a class="nav-item nav-link" id="nav-vege-tab" data-toggle="tab" href="#nav-vege" role="tab" aria-controls="nav-vege" aria-selected="false">Vege</a>
                    <a class="nav-item nav-link" id="nav-cakes-tab" data-toggle="tab" href="#nav-cakes" role="tab" aria-controls="nav-cakes" aria-selected="false">Cakes</a>
                    <a class="nav-item nav-link" id="nav-dessert-tab" data-toggle="tab" href="#nav-dessert" role="tab" aria-controls="nav-dessert" aria-selected="false">Dessert</a>
                </div>
            </nav>
        </div>
        <div class="container product-site-main-bottom">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-deal" role="tabpanel" aria-labelledby="nav-deal-tab">
                    <div class="row no-gutters">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="tab-content-item">
                                <div class="tab-content-item-avt">
                                    <a href=""><img src="/public/Image/item1.jpg" alt=""></a>
                                </div>
                                <div class="tab-content-item-txt">
                                    <a href="" >
                                        <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                        <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                    </a>
                                </div>
                                <div class="tab-content-item-sale">
                                    <div class="tab-content-item-sale__new">
                                        <i class="fa fa-tag"></i>
                                        <span>Cả ngày - Giảm 10%</span>
                                    </div>
                                    <div class="tab-content-item-sale__detail">
                                        Xem thêm 5 ưu đãi khác.....
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="tab-content-item">
                                <div class="tab-content-item-avt">
                                    <a href=""><img src="/public/Image/item2.jpg" alt=""></a>
                                </div>
                                <div class="tab-content-item-txt">
                                    <a href="" >
                                        <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                        <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                    </a>
                                </div>
                                <div class="tab-content-item-sale">
                                    <div class="tab-content-item-sale__new">
                                        <i class="fa fa-tag"></i>
                                        <span>Cả ngày - Giảm 10%</span>
                                    </div>
                                    <div class="tab-content-item-sale__detail">
                                        Xem thêm 5 ưu đãi khác.....
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="tab-content-item">
                                <div class="tab-content-item-avt">
                                    <a href=""><img src="/public/Image/item3.jpg" alt=""></a>
                                </div>
                                <div class="tab-content-item-txt">
                                    <a href="" >
                                        <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                        <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                    </a>
                                </div>
                                <div class="tab-content-item-sale">
                                    <div class="tab-content-item-sale__new">
                                        <i class="fa fa-tag"></i>
                                        <span>Cả ngày - Giảm 10%</span>
                                    </div>
                                    <div class="tab-content-item-sale__detail">
                                        Xem thêm 5 ưu đãi khác.....
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="tab-content-item">
                                <div class="tab-content-item-avt">
                                    <a href=""><img src="/public/Image/item4.jpg" alt=""></a>
                                </div>
                                <div class="tab-content-item-txt">
                                    <a href="" >
                                        <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                        <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                    </a>
                                </div>
                                <div class="tab-content-item-sale">
                                    <div class="tab-content-item-sale__new">
                                        <i class="fa fa-tag"></i>
                                        <span>Cả ngày - Giảm 10%</span>
                                    </div>
                                    <div class="tab-content-item-sale__detail">
                                        Xem thêm 5 ưu đãi khác.....
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="tab-content-item">
                                <div class="tab-content-item-avt">
                                    <a href=""><img src="/public/Image/item5.jpg" alt=""></a>
                                </div>
                                <div class="tab-content-item-txt">
                                    <a href="" >
                                        <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                        <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                    </a>
                                </div>
                                <div class="tab-content-item-sale">
                                    <div class="tab-content-item-sale__new">
                                        <i class="fa fa-tag"></i>
                                        <span>Cả ngày - Giảm 10%</span>
                                    </div>
                                    <div class="tab-content-item-sale__detail">
                                        Xem thêm 5 ưu đãi khác.....
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="tab-content-item">
                                <div class="tab-content-item-avt">
                                    <a href=""><img src="/public/Image/item2.jpg" alt=""></a>
                                </div>
                                <div class="tab-content-item-txt">
                                    <a href="" >
                                        <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                        <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                    </a>
                                </div>
                                <div class="tab-content-item-sale">
                                    <div class="tab-content-item-sale__new">
                                        <i class="fa fa-tag"></i>
                                        <span>Cả ngày - Giảm 10%</span>
                                    </div>
                                    <div class="tab-content-item-sale__detail">
                                        Xem thêm 5 ưu đãi khác.....
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="tab-content-item">
                                <div class="tab-content-item-avt">
                                    <a href=""><img src="/public/Image/item1.jpg" alt=""></a>
                                </div>
                                <div class="tab-content-item-txt">
                                    <a href="" >
                                        <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                        <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                    </a>
                                </div>
                                <div class="tab-content-item-sale">
                                    <div class="tab-content-item-sale__new">
                                        <i class="fa fa-tag"></i>
                                        <span>Cả ngày - Giảm 10%</span>
                                    </div>
                                    <div class="tab-content-item-sale__detail">
                                        Xem thêm 5 ưu đãi khác.....
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="tab-content-item">
                                <div class="tab-content-item-avt">
                                    <a href=""><img src="/public/Image/item4.jpg" alt=""></a>
                                </div>
                                <div class="tab-content-item-txt">
                                    <a href="" >
                                        <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                        <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                    </a>
                                </div>
                                <div class="tab-content-item-sale">
                                    <div class="tab-content-item-sale__new">
                                        <i class="fa fa-tag"></i>
                                        <span>Cả ngày - Giảm 10%</span>
                                    </div>
                                    <div class="tab-content-item-sale__detail">
                                        Xem thêm 5 ưu đãi khác.....
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                    <div class="row no-gutters">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="tab-content-item">
                                <div class="tab-content-item-avt">
                                    <a href=""><img src="/public/Image/item4.jpg" alt=""></a>
                                </div>
                                <div class="tab-content-item-txt">
                                    <a href="" >
                                        <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                        <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                    </a>
                                </div>
                                <div class="tab-content-item-sale">
                                    <div class="tab-content-item-sale__new">
                                        <i class="fa fa-tag"></i>
                                        <span>Cả ngày - Giảm 10%</span>
                                    </div>
                                    <div class="tab-content-item-sale__detail">
                                        Xem thêm 5 ưu đãi khác.....
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="tab-content-item">
                                <div class="tab-content-item-avt">
                                    <a href=""><img src="/public/Image/item3.jpg" alt=""></a>
                                </div>
                                <div class="tab-content-item-txt">
                                    <a href="" >
                                        <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                        <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                    </a>
                                </div>
                                <div class="tab-content-item-sale">
                                    <div class="tab-content-item-sale__new">
                                        <i class="fa fa-tag"></i>
                                        <span>Cả ngày - Giảm 10%</span>
                                    </div>
                                    <div class="tab-content-item-sale__detail">
                                        Xem thêm 5 ưu đãi khác.....
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="tab-content-item">
                                <div class="tab-content-item-avt">
                                    <a href=""><img src="/public/Image/item2.jpg" alt=""></a>
                                </div>
                                <div class="tab-content-item-txt">
                                    <a href="" >
                                        <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                        <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                    </a>
                                </div>
                                <div class="tab-content-item-sale">
                                    <div class="tab-content-item-sale__new">
                                        <i class="fa fa-tag"></i>
                                        <span>Cả ngày - Giảm 10%</span>
                                    </div>
                                    <div class="tab-content-item-sale__detail">
                                        Xem thêm 5 ưu đãi khác.....
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="tab-content-item">
                                <div class="tab-content-item-avt">
                                    <a href=""><img src="/public/Image/item1.jpg" alt=""></a>
                                </div>
                                <div class="tab-content-item-txt">
                                    <a href="" >
                                        <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                        <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                    </a>
                                </div>
                                <div class="tab-content-item-sale">
                                    <div class="tab-content-item-sale__new">
                                        <i class="fa fa-tag"></i>
                                        <span>Cả ngày - Giảm 10%</span>
                                    </div>
                                    <div class="tab-content-item-sale__detail">
                                        Xem thêm 5 ưu đãi khác.....
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-food" role="tabpanel" aria-labelledby="nav-food-tab">...</div>
                <div class="tab-pane fade" id="nav-drink" role="tabpanel" aria-labelledby="nav-drink-tab">...</div>
                <div class="tab-pane fade" id="nav-vege" role="tabpanel" aria-labelledby="nav-vege-tab">...</div>
                <div class="tab-pane fade" id="nav-cakes" role="tabpanel" aria-labelledby="nav-cakes-tab">...</div>
                <div class="tab-pane fade" id="nav-dessert" role="tabpanel" aria-labelledby="nav-dessert-tab">...</div>
            </div>
        </div>
    </div>
    <!-- Product - item - sale -->
    <div class="product-site">
        <div class="container product-site-main-top-sale">
            <nav class="product-site-main-top-sale__nav">
                <div class="nav-tabs" >
                    <div class="nav-tabs-content">
                        <div class="nav-tabs-content__avt">
                            <span> <img src="/public/Image/icon-t.png" alt="" width="35px" height="auto"></span>
                        </div>
                        <div class="nav-tabs-content__txt">
                            <span> Đặt bàn ưu đãi</span>
                        </div>
                    </div>
                    <div class="nav-tabs-category">
                        <div class="form-group">
                            <select class="form-control" >
                                <option>Tìm danh mục</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" >
                                <option>Nổi bật</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
            </nav>
        </div>
        <div class="container product-site-main-bottom">
            <div class="tab-content" id="nav-tabContent">
                <div class="row no-gutters">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="tab-content-item">
                            <div class="tab-content-item-avt">
                                <a href=""><img src="/public/Image/item1.jpg" alt=""></a>
                            </div>
                            <div class="tab-content-item-txt">
                                <a href="" >
                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                </a>
                            </div>
                            <div class="tab-content-item-sale">
                                <div class="tab-content-item-sale__new">
                                    <i class="fa fa-tag"></i>
                                    <span>Cả ngày - Giảm 10%</span>
                                </div>
                                <div class="tab-content-item-sale__detail">
                                    Xem thêm 5 ưu đãi khác.....
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="tab-content-item">
                            <div class="tab-content-item-avt">
                                <a href=""><img src="/public/Image/item2.jpg" alt=""></a>
                            </div>
                            <div class="tab-content-item-txt">
                                <a href="" >
                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                </a>
                            </div>
                            <div class="tab-content-item-sale">
                                <div class="tab-content-item-sale__new">
                                    <i class="fa fa-tag"></i>
                                    <span>Cả ngày - Giảm 10%</span>
                                </div>
                                <div class="tab-content-item-sale__detail">
                                    Xem thêm 5 ưu đãi khác.....
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="tab-content-item">
                            <div class="tab-content-item-avt">
                                <a href=""><img src="/public/Image/item3.jpg" alt=""></a>
                            </div>
                            <div class="tab-content-item-txt">
                                <a href="" >
                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                </a>
                            </div>
                            <div class="tab-content-item-sale">
                                <div class="tab-content-item-sale__new">
                                    <i class="fa fa-tag"></i>
                                    <span>Cả ngày - Giảm 10%</span>
                                </div>
                                <div class="tab-content-item-sale__detail">
                                    Xem thêm 5 ưu đãi khác.....
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="tab-content-item">
                            <div class="tab-content-item-avt">
                                <a href=""><img src="/public/Image/item4.jpg" alt=""></a>
                            </div>
                            <div class="tab-content-item-txt">
                                <a href="" >
                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                </a>
                            </div>
                            <div class="tab-content-item-sale">
                                <div class="tab-content-item-sale__new">
                                    <i class="fa fa-tag"></i>
                                    <span>Cả ngày - Giảm 10%</span>
                                </div>
                                <div class="tab-content-item-sale__detail">
                                    Xem thêm 5 ưu đãi khác.....
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="tab-content-item">
                            <div class="tab-content-item-avt">
                                <a href=""><img src="/public/Image/item5.jpg" alt=""></a>
                            </div>
                            <div class="tab-content-item-txt">
                                <a href="" >
                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                </a>
                            </div>
                            <div class="tab-content-item-sale">
                                <div class="tab-content-item-sale__new">
                                    <i class="fa fa-tag"></i>
                                    <span>Cả ngày - Giảm 10%</span>
                                </div>
                                <div class="tab-content-item-sale__detail">
                                    Xem thêm 5 ưu đãi khác.....
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="tab-content-item">
                            <div class="tab-content-item-avt">
                                <a href=""><img src="/public/Image/item2.jpg" alt=""></a>
                            </div>
                            <div class="tab-content-item-txt">
                                <a href="" >
                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                </a>
                            </div>
                            <div class="tab-content-item-sale">
                                <div class="tab-content-item-sale__new">
                                    <i class="fa fa-tag"></i>
                                    <span>Cả ngày - Giảm 10%</span>
                                </div>
                                <div class="tab-content-item-sale__detail">
                                    Xem thêm 5 ưu đãi khác.....
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="tab-content-item">
                            <div class="tab-content-item-avt">
                                <a href=""><img src="/public/Image/item1.jpg" alt=""></a>
                            </div>
                            <div class="tab-content-item-txt">
                                <a href="" >
                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                </a>
                            </div>
                            <div class="tab-content-item-sale">
                                <div class="tab-content-item-sale__new">
                                    <i class="fa fa-tag"></i>
                                    <span>Cả ngày - Giảm 10%</span>
                                </div>
                                <div class="tab-content-item-sale__detail">
                                    Xem thêm 5 ưu đãi khác.....
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="tab-content-item">
                            <div class="tab-content-item-avt">
                                <a href=""><img src="/public/Image/item4.jpg" alt=""></a>
                            </div>
                            <div class="tab-content-item-txt">
                                <a href="" >
                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                </a>
                            </div>
                            <div class="tab-content-item-sale">
                                <div class="tab-content-item-sale__new">
                                    <i class="fa fa-tag"></i>
                                    <span>Cả ngày - Giảm 10%</span>
                                </div>
                                <div class="tab-content-item-sale__detail">
                                    Xem thêm 5 ưu đãi khác.....
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kham pha  -->
    <div class="container" style="padding: 0;">
        <div id="wrapper-main">
            <aside id="wrapper-main-sidebar">
                <div class="wrapper-main-sidebar-brand">
                    <div class="wrapper-main-sidebar-brand__img" style="text-align: center; margin: 10px;">
                        <img style="background: red; border-radius: 5px;" src="/public/Image/icon-f.png" alt="" width="35px" >
                    </div>
                </div>
                <ul class="sidebar-nav nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <li class="active sidebar-nav__item">
                        <a class="nav-link " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home"></i>Ở đâu</a>
                    </li>
                    <li class="sidebar-nav__item">
                        <a class="nav-link" id="v-pills-live-tab" data-toggle="pill" href="#v-pills-live" role="tab" aria-controls="v-pills-live" aria-selected="true"><i class="fa fa-plug"></i>Nổi bật</a>
                    </li>
                    <li class="sidebar-nav__item">
                        <a class="nav-link " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-cutlery"></i>Ăn gì</a>
                    </li>

                </ul>
            </aside>
            <div id="navbar-wrapper">
                <nav class=" navbar-inverse">
                    <div class="container-fluid" style="padding-right: 0;">
                        <div class="navbar-header">
                            <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="product-site" style="margin: 10px 0;">
                                    <div class="container product-site-main-top-sticky">
                                        <nav class="product-site-main-top__nav">
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-itemNew-tab" data-toggle="tab" href="#nav-itemNew" role="tab" aria-controls="nav-itemNew" aria-selected="true">Mới nhất</a>
                                                <a class="nav-item nav-link" id="nav-live-tab" data-toggle="tab" href="#nav-live" role="tab" aria-controls="nav-live" aria-selected="false">Tất cả</a>
                                                <a class="nav-item nav-link" id="nav-food-tab" data-toggle="tab" href="#nav-food" role="tab" aria-controls="nav-food" aria-selected="false">Food</a>
                                                <a class="nav-item nav-link" id="nav-drink-tab" data-toggle="tab" href="#nav-drink" role="tab" aria-controls="nav-drink" aria-selected="false">Drink</a>
                                                <a class="nav-item nav-link" id="nav-vege-tab" data-toggle="tab" href="#nav-vege" role="tab" aria-controls="nav-vege" aria-selected="false">Vege</a>
                                                <a class="nav-item nav-link" id="nav-cakes-tab" data-toggle="tab" href="#nav-cakes" role="tab" aria-controls="nav-cakes" aria-selected="false">Cakes</a>
                                                <a class="nav-item nav-link" id="nav-dessert-tab" data-toggle="tab" href="#nav-dessert" role="tab" aria-controls="nav-dessert" aria-selected="false">Dessert</a>
                                                <div class="nav-tabs-discover">
                                                    <div class="form-group">
                                                        <select class="form-control" >
                                                            <option>Tìm danh mục</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <select class="form-control" >
                                                            <option>Nổi bật</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <select class="form-control" >
                                                            <option>Nổi bật</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                    <div class="container product-site-main-bottom">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-itemNew" role="tabpanel" aria-labelledby="nav-itemNew-tab">
                                                <div class="row no-gutters">
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item1.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item2.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item3.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item4.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item5.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item2.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item1.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item4.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                                                <div class="row no-gutters">
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item4.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item3.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item2.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item1.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-food" role="tabpanel" aria-labelledby="nav-food-tab">...</div>
                                            <div class="tab-pane fade" id="nav-drink" role="tabpanel" aria-labelledby="nav-drink-tab">...</div>
                                            <div class="tab-pane fade" id="nav-vege" role="tabpanel" aria-labelledby="nav-vege-tab">...</div>
                                            <div class="tab-pane fade" id="nav-cakes" role="tabpanel" aria-labelledby="nav-cakes-tab">...</div>
                                            <div class="tab-pane fade" id="nav-dessert" role="tabpanel" aria-labelledby="nav-dessert-tab">...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-live" role="tabpanel" aria-labelledby="v-pills-live-tab">
                                <div class="product-site" style="margin: 10px 0;">
                                    <div class="container product-site-main-top-sticky">
                                        <nav class="product-site-main-top__nav">
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-itemNew-tab" data-toggle="tab" href="#nav-itemNew" role="tab" aria-controls="nav-itemNew" aria-selected="true">Mới nhất</a>
                                                <a class="nav-item nav-link" id="nav-live-tab" data-toggle="tab" href="#nav-live" role="tab" aria-controls="nav-live" aria-selected="false">Tất cả</a>
                                                <a class="nav-item nav-link" id="nav-food-tab" data-toggle="tab" href="#nav-food" role="tab" aria-controls="nav-food" aria-selected="false">Food</a>
                                                <a class="nav-item nav-link" id="nav-drink-tab" data-toggle="tab" href="#nav-drink" role="tab" aria-controls="nav-drink" aria-selected="false">Drink</a>
                                                <a class="nav-item nav-link" id="nav-vege-tab" data-toggle="tab" href="#nav-vege" role="tab" aria-controls="nav-vege" aria-selected="false">Vege</a>
                                                <div class="nav-tabs-discover">
                                                    <div class="form-group">
                                                        <select class="form-control" >
                                                            <option>Tìm danh mục</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <select class="form-control" >
                                                            <option>Nổi bật</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <select class="form-control" >
                                                            <option>Nổi bật</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                    <div class="container product-site-main-bottom">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-itemNew" role="tabpanel" aria-labelledby="nav-itemNew-tab">
                                                <div class="row no-gutters">
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item1.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item2.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item3.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item4.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item5.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item2.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item1.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item4.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                                                <div class="row no-gutters">
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item4.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item3.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item2.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="tab-content-item">
                                                            <div class="tab-content-item-avt">
                                                                <a href=""><img src="/public/Image/item1.jpg" alt=""></a>
                                                            </div>
                                                            <div class="tab-content-item-txt">
                                                                <a href="" >
                                                                    <h3 class="tab-content-item-txt__title">Food House - Thai Ha</h3>
                                                                    <span class="tab-content-item-txt__detail">85 Thai ha, Quan dong da, Ha noi</span>
                                                                </a>
                                                            </div>
                                                            <div class="tab-content-item-sale">
                                                                <div class="tab-content-item-sale__new">
                                                                    <i class="fa fa-tag"></i>
                                                                    <span>Cả ngày - Giảm 10%</span>
                                                                </div>
                                                                <div class="tab-content-item-sale__detail">
                                                                    Xem thêm 5 ưu đãi khác.....
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-food" role="tabpanel" aria-labelledby="nav-food-tab">...</div>
                                            <div class="tab-pane fade" id="nav-drink" role="tabpanel" aria-labelledby="nav-drink-tab">...</div>
                                            <div class="tab-pane fade" id="nav-vege" role="tabpanel" aria-labelledby="nav-vege-tab">...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </nav>

        </div>

        <!-- <section id="content-wrapper">

        </section> -->
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-sm-12 col-md-3">
                <div class="footer__content">
                    <h4 class="footer__content-title">Khám phá</h4>
                    <div class="footer__line"></div>
                    <ul class="footer__content-list">
                        <li><a href="">Ứng dụng mobile</a></li>
                        <li><a href="">Viết bình luận</a></li>
                        <li><a href="">Tạo bộ sưu tập</a></li>
                        <li><a href="">Phần thưởng</a></li>
                        <li><a href="">Bảo mật thông tin</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="footer__content">
                    <h4 class="footer__content-title">Công ty</h4>
                    <div class="footer__line"></div>
                    <ul class="footer__content-list">
                        <li><a href="">Giới thiệu</a></li>
                        <li><a href="">Trợ giúp</a></li>
                        <li><a href="">Việc làm</a></li>
                        <li><a href="">Góp ý</a></li>
                        <li><a href="">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="footer__content">
                    <h4 class="footer__content-title">Tham gia trên</h4>
                    <div class="footer__line"></div>
                    <ul class="footer__content-list">
                        <li><a href="">Facebook</a></li>
                        <li><a href="">Instagram</a></li>
                        <li><a href="">Youtube</a></li>
                        <li><a href="">Google</a></li>
                        <li><a href="">Twitter</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="footer__content">
                    <h4 class="footer__content-title">Giấy phép</h4>
                    <div class="footer__line"></div>
                    <ul class="footer__content-list">
                        <li><a href="">MXH 363/GP-BTTTT</a></li>
                        <li><a href=""><img src="/public/Image/gov_seals.jpg" alt="" width="50%"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-bottom">
    <div class="footer-bottom__content">
        <p>©2021 Foody Corporation.</p>
        <p>Điện thoại: 0123456789 Email: info@foody.vn</p>
        <p>Giấy phép thiết lập MXH trên mạng số 363/GP-BTTTT do Bộ Thông tin và Truyền thông cấp ngày 30/6/2016 Người chịu trách nhiệm: Thanh Tùng.</p>
    </div>
</div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="/public/js/main.js"></script>
<script src="/public/js/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen-sprite.png">
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

</html>
