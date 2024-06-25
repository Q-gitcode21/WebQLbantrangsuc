<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashirwaad Jewelry</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">

    <link rel="stylesheet" href="http://localhost/Web%20qu%e1%ba%a3n%20l%c3%bd/Public/CSS/style.css">
</head>

<body>
    <div class="home_black_version">
        <header class="header_area header_black">
            <!-- header top starts -->
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="social_icone">
                                <ul>
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-right">
                                <ul>
                                    <li class="top_links">
                                        <a href="#">Tài khoản<i class="ion-chevron-down"></i></a>
                                        <ul class="dropdown_links">
                                            <li><a href="http://localhost/Web%20qu%e1%ba%a3n%20l%c3%bd/Login">Đăng nhập </a></li>
                                            <li><a href="http://localhost/Web%20qu%e1%ba%a3n%20l%c3%bd/Dangky">Đăng ký</a></li>
                                        </ul>
                                    </li>
                                    <p>User Id: <?php echo $_SESSION['Id']; ?></p>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top ends -->

            <!-- header middle starts -->
            <div class="header_middel">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5">
                            <div class="home_contact">
                                <div class="contact_icone">
                                    <img src="images/icon/icon_phone.png" alt="">
                                </div>
                                <div class="contact_box">
                                    <p> Hỗ trợ : <a href="tel: 1234567894">1234567894</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3 col-4">
                            <div class="logo">
                                <a href="index.html"><img src="images/logo/logo-ash.png" alt=""></a>
                                
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-7 col-6">
                            <div class="middel_right">
                                <div class="search_btn">
                                    <a href="#"><i class="ion-ios-search-strong"></i></a>
                                    <div class="dropdown_search">
                                        <form action="#">
                                            <input type="text" placeholder="Search Product ....">
                                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="wishlist_btn">
                                    <a href="#"><i class="ion-heart"></i></a>
                                </div>
                                <div class="cart_link">
                                    <a href="#"><i class="ion-android-cart"></i><span class="cart_text_quantity">
                                            </span><i class="ion-chevron-down"></i></a>
                                    <span class="cart_quantity">2</span>

                                    <!-- mini cart -->
                                    <div class="mini_cart">
                                        <div class="cart_close">
                                            <div class="cart_text">
                                                <h3>Giỏ hàng</h3>
                                            </div>
                                            <div class="mini_cart_close">
                                                <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img src="images/nav-product/product.jpg" alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">Nhẫn đôi</a>
                                                <span class="quantity">SL : 1</span>
                                                <span class="price_cart"> 20,599,000 VND</span>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img src="images/nav-product/product2.jpg" alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">Bông tai</a>
                                                <span class="quantity">SL : 1</span>
                                                <span class="price_cart">12,000,000 VND</span>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_total">
                                            <span>Tổng tiền : </span>
                                            <span> 32,599,000 VND</span>
                                        </div>
                                        <div class="mini_cart_footer">
                                            <div class="cart_button checkout">
                                                <a href="#" class="active">Mua hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- mini cart ends  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header middle ends -->

            <!-- header bottom starts -->

           
            <!-- header bottom ends -->
        </header>

        <!-- slider section starts -->
        <div class="slider_area slider_black owl-carousel">
            <div class="single_slider" data-bgimg="images/slider/1.png">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="slider_content">
                                <p>Khuyến mãi độc quyền-20% tuần này</p>
                                <h1>Vòng cổ</h1>
                                <span>Vòng cổ vàng cho đám cưới 22 Carat</span>
                                <p class="slider_price">Giá khởi điểm <span>75,999,000 VNĐ</span></p>
                                <a href="#" class="button">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="single_slider" data-bgimg="images/slider/2.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="slider_content">
                                <p>Khuyến mãi độc quyền-40% tuần này</p>
                                <h1>Bông tai và chuỗi hạt</h1>
                                <span>Set cô dâu hoàn chỉnh</span>
                                <p class="slider_price">Giá khởi điểm <span> 89,499,000</span></p>
                                <a href="#" class="button">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="single_slider" data-bgimg="images/slider/3.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="slider_content">
                                <p>Khuyến mãi độc quyền-10% tuần này</p>
                                <h1>Nhẫn cưới</h1>
                                <span> Nhẫn cưới giới hạn đặc biệt Luxury dành cho cặp đôi </span>
                                <p class="slider_price">Giá Khởi điểm <span> 23,999,000</span></p>
                                <a href="#" class="button">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- slider section ends -->
        <!-- banner section starts -->
        <section class="banner_section banner_black">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="images/banner/bg-1.jpg" alt="banner1"></a>
                                <div class="banner_content">
                                    <p>Thiết kế mới</p>
                                    <h2>Nhẫn tạo tác nhỏ</h2>
                                    <span>Sale 20% </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="images/banner/bg-2.jpg" alt="banner2"></a>
                                <div class="banner_content">
                                    <p>Bán chạy nhất</p>
                                    <h2>Nhẫn kim cương</h2>
                                    <span>Sale 10% </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="images/banner/bg-3.jpg" alt="banner3"></a>
                                <div class="banner_content">
                                    <p>Sản phẩm nổi bật</p>
                                    <h2>Nhẫn Platinium</h2>
                                    <span>Sale 30% </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner section ends -->
        <!-- product section area starts  -->

        <section class="product_section p_section1 product_black_section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_area">
                            <div class="product_tab_button">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a href="#featured" class="active" data-toggle="tab" role="tab"
                                            aria-controls="featured" aria-selected="true">Nổi bật</a>
                                    </li>
                                    <li>
                                        <a href="#onsale" data-toggle="tab" role="tab" aria-controls="onsale"
                                            aria-selected="false">Giảm giá</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="featured" role="tabpane1">
                                    <div class="product_container">
                                        <div class="custom-row product_column3">
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/1.jpg"
                                                                alt="product1"></a>
                                                        <!-- <a href="#" class="secondary_img"><img
                                                                src="images/product/2.jpg" alt="product1"></a> -->
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Vòng cổ</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">45,000,000 VND</span>
                                                            <span class="current_price">44,150,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/3.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/4.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Bông tai</a></h3>
                                                        <div class="price_box">

                                                            <span class="current_price">45,000,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/5.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/6.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Vòng cổ</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 75654</span>
                                                            <span class="current_price">Rs. 74015</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/7.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/8.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Bông tai</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">45,000,000 </span>
                                                            <span class="current_price">44,150,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/9.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/10.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Đá quý</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">45,000,000 </span>
                                                            <span class="current_price">44,150,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/11.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/12.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Vòng cổ</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">45,000,000 </span>
                                                            <span class="current_price">44,150,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/13.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/14.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Nose Pin</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">45,000,000 </span>
                                                            <span class="current_price">44,150,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/15.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/16.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Diamonds</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">45,000,000 </span>
                                                            <span class="current_price">44,150,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/17.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/18.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Ring</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">45,000,000 </span>
                                                            <span class="current_price">44,150,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/19.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/20.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Couple Ring</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">45,000,000 VND </span>
                                                            <span class="current_price">44,150,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/21.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/22.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Vòng cổ</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">45,000,000 VND</span>
                                                            <span class="current_price">44,150,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/23.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/24.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Vòng cổ Set</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">45,000,000 VND</span>
                                                            <span class="current_price">44,150,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade" id="onsale" role="tabpane1">
                                    <div class="product_container">
                                        <div class="custom-row product_column3">
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/49.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/50.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Vòng cổ</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">45,000,000 VND</span>
                                                            <span class="current_price">44,150,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/2.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/3.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Bông tai</a></h3>
                                                        <div class="price_box">

                                                            <span class="current_price">45,000,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/4.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/5.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Vòng cổ</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 75654</span>
                                                            <span class="current_price">Rs. 74015</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/6.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/7.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Bangles</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">45,000,000 VND</span>
                                                            <span class="current_price">44,150,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/8.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/9.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Gemstones</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">45,000,000 VND</span>
                                                            <span class="current_price">44,150,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/10.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/11.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Wedding set</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">45,000,000 VND</span>
                                                            <span class="current_price">44,150,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/12.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/13.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Nose Pin</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">45,000,000 VND</span>
                                                            <span class="current_price">44,150,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/14.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/15.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Diamonds</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">45,000,000 VND</span>
                                                            <span class="current_price">44,150,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/16.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/17.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Ring</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">45,000,000 VND</span>
                                                            <span class="current_price">44,150,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/20.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/21.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Couple Ring</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">45,000,000 VND</span>
                                                            <span class="current_price">44,150,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/70.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/28.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Vòng cổ</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">45,000,000 VND</span>
                                                            <span class="current_price">44,150,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/71.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/72.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Trang sức</a>
                                                        </div>
                                                        <h3><a href="#">Vòng cổ Set</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">45,000,000 VND</span>
                                                            <span class="current_price">44,150,000 VND</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>This is a gold ring with diamond and Lorem ipsum
                                                                    dolor sit amet.</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Mua hàng</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- product section area sends -->

        <!-- banner full width start -->
       
        <!-- banner full width end -->

        <!-- product section area starts  -->
        <section class="product_section p_section1 product_black_section bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title">
                            <h2>Sản phẩm bán chạy</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="product-area">
                            <div class="product_container bottom">
                                <div class="custom-row product_row1">
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/71.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/72.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Chi tiết</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Trang sức</a>
                                                </div>
                                                <h3><a href="#">Vòng cổ Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">45,000,000 VND</span>
                                                    <span class="current_price">44,150,000 VND</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>This is a gold ring with diamond and Lorem ipsum
                                                            dolor sit amet.</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Mua
                                                                    hàng</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/4.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/5.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Quick
                                                        View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Trang sức</a>
                                                </div>
                                                <h3><a href="#">Vòng cổ Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">45,000,000 VND</span>
                                                    <span class="current_price">44,150,000 VND</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>This is a gold ring with diamond and Lorem ipsum
                                                            dolor sit amet.</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Mua
                                                                    hàng</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/10.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/11.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Quick
                                                        View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Trang sức</a>
                                                </div>
                                                <h3><a href="#">Vòng cổ Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">45,000,000 VND</span>
                                                    <span class="current_price">44,150,000 VND</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>This is a gold ring with diamond and Lorem ipsum
                                                            dolor sit amet.</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Mua
                                                                    hàng</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/24.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/22.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Quick
                                                        View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Trang sức</a>
                                                </div>
                                                <h3><a href="#">Vòng cổ Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">45,000,000 VND</span>
                                                    <span class="current_price">44,150,000 VND</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>This is a gold ring with diamond and Lorem ipsum
                                                            dolor sit amet.</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Mua
                                                                    hàng</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/26.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/27.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Quick
                                                        View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Trang sức</a>
                                                </div>
                                                <h3><a href="#">Vòng cổ Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">45,000,000 VND</span>
                                                    <span class="current_price">44,150,000 VND</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>This is a gold ring with diamond and Lorem ipsum
                                                            dolor sit amet.</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Mua
                                                                    hàng</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <footer class="footer_widgets footer_black">
            <div class="container">
                <div class="footer_top">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="widgets_container contact_us">
                                <h3>LUXURY</h3>
                                <div class="footer_contact">
                                    <p>Địa chỉ : 78 Hoàng Hoa Thám, Quận cam, TP.HCM /p>
                                    <p>Liên hệ : <a href="tel:(+91)888888885555">(+91)888888885555</a></p>
                                    <p>Email : LUXURYJW@gmail.com</p>
                                    <ul>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                        <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-7">
                            
                        </div>
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="row">
                        <div class="col-12">
                          
                        </div>
                    </div>
                </div>

            </div>
        </footer>
        <!-- footer section ends -->
    </div>

    <!-- modal section starts -->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="images/product/70.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="images/product/71.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="images/product/72.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="images/product/73.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Vòng cổ nữ</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">50,000,000</span>
                                        <span class="old_price">54,000,000</span>
                                    </div>
                                    <div class="see_all">
                                        <a href="#">Trang sức nổi bật</a>
                                    </div>
                                    <div class="modal_add_to_cart mb-15">
                                        <form action="#">
                                            <input type="number" min="0" max="100" step="1">
                                            <button type="submit">Mua hàng</button>
                                        </form>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus quibusdam
                                            nisi voluptas consequatur tempora, recusandae nemo blanditiis eaque odit
                                            voluptatibus voluptatem, ipsa incidunt fugiat a.</p>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Chia sẻ sản phẩm</h2>
                                        <ul>
                                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                            <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                            <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal section ends -->







    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- JavaScript Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script src="http://localhost/Web%20qu%e1%ba%a3n%20l%c3%bd/Public/JS/main.js"></script>
</body>

</html>