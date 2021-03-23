<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
</head>
<body>
    <!-- header -->
    <div class="header">
        <div class="container ctn">
            <div class="header-left">
                <img src="img_psd/logo-market.png" alt="logo">
            </div>
            <div class="header-right">
                <div class="header-top">
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">My Cart</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
                <div class="header-bottom">
                    <div class="search">
                        <input type="text" placeholder="Từ khóa tìm kiếm" name="" id="">
                        <a href="#"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="cart">
                        <div>
                            <a href="#"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                        <div class="price">
                            <p>total</p>
                            <a href="#">$900.00</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- category -->
    <div class="category">
        <div class="ctn ctn-cat">
            <div class="cat-left">
                <ul>
                    <li>
                        <a href="#">categories</a>
                        <ul>
                            <li><a href="#">clothing</a></li>
                            <li><a href="#">electronics</a></li>
                            <li><a href="#">shoes</a></li>
                            <li><a href="#">watches</a></li>
                            <li><a href="#">jewellery</a></li>
                            <li><a href="#">health and beauty</a></li>
                            <li><a href="#">kids and babies</a></li>
                            <li><a href="#">sports</a></li>
                            <li><a href="#">home and garden</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="cat-right">
                <ul>
                    <li><a href="#">Home page</a></li>
                    <li><a href="#">introduce</a></li>
                    <li><a href="#">product</a></li>
                    <li><a href="#">news</a></li>
                    <li><a href="#">contact</a></li>
                    <li><a href="#">branch</a></li>
                    <li><a href="#">map</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- main -->
    <div class="main">
        <div class="ctn">
            <div class="main1">
                <div class="main1-left">
                    <div class="front">
                        <img src="img_psd/add7.png" style="width: 300" alt="">
                    </div>
                    <div class="back">
                        <div class="back-content middle">
                            <h3>Featured store</h3>
                            <p><a href="#">Go to Shop</a></p>
                            <div class="icon">
                                <a href="https://www.facebook.com/profile.php?id=100018846967102"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-facebook-messenger"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main1-right">
                    <div class="slide" id="slide">
                        <div class="move">
                            <i class="fas fa-chevron-left" onclick="back()"></i>
                            <i class="fas fa-chevron-right" onclick="next()"></i>
                        </div>
                        
                        <div class="move-slide">
                            <a href="#"><img src="img_psd/bg-1.jpg"></a>
                            <a href="#"><img src="img_psd/bg-4.jpg"></a>
                            <a href="#"><img src="img_psd/bg-3.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
       
        </div>
</div>
<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            dots:false,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    });
    </script>
    <div class="con">
        <div class="category-prod">
            <h2>San pham khuyen mai</h2>
        </div>
        <div class="owl-carousel owl-theme" id="owl1">
            <div class="item">
                <div>
                    <div class="top">
                        <div class="img">
                            <a href="#">
                                <img src="img_psd/img001.jpg" alt="">
                            </a>
                        </div>
                        <div class="quick-view">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <a href="#"><i class="fas fa-eye"></i></a>
                            <a href="#"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="add-to-cart">
                            <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                        </div>
                    </div>
                    <div class="product-name">
                        <a href="#">ao mua dong</a>
                        <span>price: 900$</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="top">
                    <div class="img">
                        <a href="#">
                            <img src="img_psd/img001.jpg" alt="">
                        </a>
                    </div>
                    <div class="quick-view">
                        <a href="#"><i class="far fa-heart"></i></a>
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="add-to-cart">
                        <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                    </div>
                </div>
                <div class="product-name">
                    <a href="#">Ghế Ngồi Streamer</a>
                    <span>Price: 900$</span>
                </div>
            </div>
            <div class="item">
                <div class="top">
                    <div class="img">
                        <a href="#">
                            <img src="img_psd/img001.jpg" alt="">
                        </a>
                    </div>
                    <div class="quick-view">
                        <a href="#"><i class="far fa-heart"></i></a>
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="add-to-cart">
                        <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                    </div>
                </div>
                <div class="product-name">
                    <a href="#">Ghế Ngồi Streamer</a>
                    <span>Price: 900$</span>
                </div>
            </div>
            <div class="item">
                <div class="top">
                    <div class="img">
                        <a href="#">
                            <img src="img_psd/img001.jpg" alt="">
                        </a>
                    </div>
                    <div class="quick-view">
                        <a href="#"><i class="far fa-heart"></i></a>
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="add-to-cart">
                        <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                    </div>
                </div>
                <div class="product-name">
                    <a href="#">Ghế Ngồi Streamer</a>
                    <span>Price: 900$</span>
                </div>
            </div>
            <div class="item">
                <div class="top">
                    <div class="img">
                        <a href="#">
                            <img src="img_psd/img001.jpg" alt="">
                        </a>
                    </div>
                    <div class="quick-view">
                        <a href="#"><i class="far fa-heart"></i></a>
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="add-to-cart">
                        <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                    </div>
                </div>
                <div class="product-name">
                    <a href="#">Ghế Ngồi Streamer</a>
                    <span>Price: 900$</span>
                </div>
            </div>
            <div class="item">
                <div class="top">
                    <div class="img">
                        <a href="#">
                            <img src="img_psd/img001.jpg" alt="">
                        </a>
                    </div>
                    <div class="quick-view">
                        <a href="#"><i class="far fa-heart"></i></a>
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="add-to-cart">
                        <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                    </div>
                </div>
                <div class="product-name">
                    <a href="#">Ghế Ngồi Streamer</a>
                    <span>Price: 900$</span>
                </div>
            </div>
            <div class="item">
                <div class="top">
                    <div class="img">
                        <a href="#">
                            <img src="img_psd/img001.jpg" alt="">
                        </a>
                    </div>
                    <div class="quick-view">
                        <a href="#"><i class="far fa-heart"></i></a>
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="add-to-cart">
                        <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                    </div>
                </div>
                <div class="product-name">
                    <a href="#">Ghế Ngồi Streamer</a>
                    <span>Price: 900$</span>
                </div>
            </div>
            <div class="item">
                <div class="top">
                    <div class="img">
                        <a href="#">
                            <img src="img_psd/img001.jpg" alt="">
                        </a>
                    </div>
                    <div class="quick-view">
                        <a href="#"><i class="far fa-heart"></i></a>
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="add-to-cart">
                        <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                    </div>
                </div>
                <div class="product-name">
                    <a href="#">Ghế Ngồi Streamer</a>
                    <span>Price: 900$</span>
                </div>
            </div>
            <div class="item">
                <div class="top">
                    <div class="img">
                        <a href="#">
                            <img src="img_psd/img001.jpg" alt="">
                        </a>
                    </div>
                    <div class="quick-view">
                        <a href="#"><i class="far fa-heart"></i></a>
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="add-to-cart">
                        <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                    </div>
                </div>
                <div class="product-name">
                    <a href="#">Ghế Ngồi Streamer</a>
                    <span>Price: 900$</span>
                </div>
            </div>
            <div class="item">
                <div class="top">
                    <div class="img">
                        <a href="#">
                            <img src="img_psd/img001.jpg" alt="">
                        </a>
                    </div>
                    <div class="quick-view">
                        <a href="#"><i class="far fa-heart"></i></a>
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="add-to-cart">
                        <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                    </div>
                </div>
                <div class="product-name">
                    <a href="#">Ghế Ngồi Streamer</a>
                    <span>Price: 900$</span>
                </div>
            </div>
            <div class="item">
                <div class="top">
                    <div class="img">
                        <a href="#">
                            <img src="img_psd/img001.jpg" alt="">
                        </a>
                    </div>
                    <div class="quick-view">
                        <a href="#"><i class="far fa-heart"></i></a>
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="add-to-cart">
                        <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                    </div>
                </div>
                <div class="product-name">
                    <a href="#">Ghế Ngồi Streamer</a>
                    <span>Price: 900$</span>
                </div>
            </div>
            <div class="item">
                <div class="top">
                    <div class="img">
                        <a href="#">
                            <img src="img_psd/img001.jpg" alt="">
                        </a>
                    </div>
                    <div class="quick-view">
                        <a href="#"><i class="far fa-heart"></i></a>
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="add-to-cart">
                        <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                    </div>
                </div>
                <div class="product-name">
                    <a href="#">Ghế Ngồi Streamer</a>
                    <span>Price: 900$</span>
                </div>
            </div>
        </div>
    </div>
   <!-- sp -->

   <div class="product-detail">
       <div class="cate">
           <div class="cate-left">
               <span><i class="fas fa-align-right"></i></span>
               <h2>Thời Trang</h2>
               <span><i class="fas fa-angle-double-right"></i></span>
            </div>
           <div class="cate-right">
               <ul>
                   <li><a href="#">ao so mi </a></li>
                   <li><a href="#">ao so mi </a></li>
                   <li><a href="#">ao so mi </a></li>
                   <li><a href="#">ao so mi </a></li>
                   <li><a href="#">ao so mi </a></li>
                   <li><a href="#">ao so mi </a></li>
                   <li><a href="#">ao so mi </a></li>
                   <li><a href="#">ao so mi </a></li>
                   <li><a href="#">ao so mi </a></li>
               </ul>
           </div>
       </div>
       <div class="detail">
           <div class="category">
                <ul>
                    <li><a href="#">ao so mi </a></li>
                    <li><a href="#">ao so mi </a></li>
                    <li><a href="#">ao so mi </a></li>
                    <li><a href="#">ao so mi </a></li>
                    <li><a href="#">ao so mi </a></li>
                    <li><a href="#">ao so mi </a></li>
                    <li><a href="#">ao so mi </a></li>
                    <li><a href="#">ao so mi </a></li>
                    <li><a href="#">ao so mi </a></li>
                </ul>
           </div>
            
            <div class="prod-cate">
                <div>
                    <div class="prod-top">
                        <div>
                            <a href="#">
                                <img src="img_psd/img001.jpg" alt="">
                            </a>
                        </div>
                        <div class="quick">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <a href="#"><i class="fas fa-eye"></i></a>
                            <a href="#"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="cart">
                            <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Thêm Vào Giỏ Hàng</a>
                        </div>
                    </div>
                    <div class="name">
                        <a href="#">Ghế Ngồi Streamer</a>
                        <span>Price: 900$</span>
                    </div>
                </div>
                <div>
                    <div class="prod-top">
                        <div>
                            <a href="#">
                                <img src="img_psd/img001.jpg" alt="">
                            </a>
                        </div>
                        <div class="quick">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <a href="#"><i class="fas fa-eye"></i></a>
                            <a href="#"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="cart">
                            <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Thêm Vào Giỏ Hàng</a>
                        </div>
                    </div>
                    <div class="name">
                        <a href="#">Ghế Ngồi Streamer</a>
                        <span>Price: 900$</span>
                    </div>
                </div>
                <div>
                    <div class="prod-top">
                        <div>
                            <a href="#">
                                <img src="img_psd/img001.jpg" alt="">
                            </a>
                        </div>
                        <div class="quick">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <a href="#"><i class="fas fa-eye"></i></a>
                            <a href="#"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="cart">
                            <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Thêm Vào Giỏ Hàng</a>
                        </div>
                    </div>
                    <div class="name">
                        <a href="#">Ghế Ngồi Streamer</a>
                        <span>Price: 900$</span>
                    </div>
                </div>
                <div>
                    <div class="prod-top">
                        <div>
                            <a href="#">
                                <img src="img_psd/img001.jpg" alt="">
                            </a>
                        </div>
                        <div class="quick">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <a href="#"><i class="fas fa-eye"></i></a>
                            <a href="#"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="cart">
                            <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Thêm Vào Giỏ Hàng</a>
                        </div>
                    </div>
                    <div class="name">
                        <a href="#">Ghế Ngồi Streamer</a>
                        <span>Price: 900$</span>
                    </div>
                </div>
                <div>
                    <div class="prod-top">
                        <div>
                            <a href="#">
                                <img src="img_psd/img001.jpg" alt="">
                            </a>
                        </div>
                        <div class="quick">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <a href="#"><i class="fas fa-eye"></i></a>
                            <a href="#"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="cart">
                            <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Thêm Vào Giỏ Hàng</a>
                        </div>
                    </div>
                    <div class="name">
                        <a href="#">Ghế Ngồi Streamer</a>
                        <span>Price: 900$</span>
                    </div>
                </div>
                <div>
                    <div class="prod-top">
                        <div>
                            <a href="#">
                                <img src="img_psd/img001.jpg" alt="">
                            </a>
                        </div>
                        <div class="quick">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <a href="#"><i class="fas fa-eye"></i></a>
                            <a href="#"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="cart">
                            <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                        </div>
                    </div>
                    <div class="name">
                        <a href="#">Ghế Ngồi Streamer</a>
                        <span>Price: 900$</span>
                    </div>
                </div>
                <div>
                    <div class="prod-top">
                        <div>
                            <a href="#">
                                <img src="img_psd/img001.jpg" alt="">
                            </a>
                        </div>
                        <div class="quick">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <a href="#"><i class="fas fa-eye"></i></a>
                            <a href="#"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="cart">
                            <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                        </div>
                    </div>
                    <div class="name">
                        <a href="#">Ghế Ngồi Streamer</a>
                        <span>Price: 900$</span>
                    </div>
                </div>
                <div>
                    <div class="prod-top">
                        <div>
                            <a href="#">
                                <img src="img_psd/img001.jpg" alt="">
                            </a>
                        </div>
                        <div class="quick">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <a href="#"><i class="fas fa-eye"></i></a>
                            <a href="#"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="cart">
                            <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                        </div>
                    </div>
                    <div class="name">
                        <a href="#">Ghế Ngồi Streamer</a>
                        <span>Price: 900$</span>
                    </div>
                </div>
            </div>
       </div>
   </div>

   <div class="product-detail">
    <div class="cate">
        <div class="cate-left">
            <span><i class="fas fa-align-right"></i></span>
            <h2>Thời Trang</h2>
            <span><i class="fas fa-angle-double-right"></i></span>
         </div>
        <div class="cate-right">
            <ul>
                <li><a href="#">ao so mi </a></li>
                <li><a href="#">ao so mi </a></li>
                <li><a href="#">ao so mi </a></li>
                <li><a href="#">ao so mi </a></li>
                <li><a href="#">ao so mi </a></li>
                <li><a href="#">ao so mi </a></li>
                <li><a href="#">ao so mi </a></li>
                <li><a href="#">ao so mi </a></li>
                <li><a href="#">ao so mi </a></li>
            </ul>
        </div>
    </div>
    <div class="detail">
        <div class="category">
             <ul>
                 <li><a href="#">ao so mi </a></li>
                 <li><a href="#">ao so mi </a></li>
                 <li><a href="#">ao so mi </a></li>
                 <li><a href="#">ao so mi </a></li>
                 <li><a href="#">ao so mi </a></li>
                 <li><a href="#">ao so mi </a></li>
                 <li><a href="#">ao so mi </a></li>
                 <li><a href="#">ao so mi </a></li>
                 <li><a href="#">ao so mi </a></li>
             </ul>
        </div>
         
         <div class="prod-cate">
             <div>
                 <div class="prod-top">
                     <div>
                         <a href="#">
                             <img src="img_psd/img001.jpg" alt="">
                         </a>
                     </div>
                     <div class="quick">
                         <a href="#"><i class="far fa-heart"></i></a>
                         <a href="#"><i class="fas fa-eye"></i></a>
                         <a href="#"><i class="fas fa-search"></i></a>
                     </div>
                     <div class="cart">
                         <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Thêm Vào Giỏ Hàng</a>
                     </div>
                 </div>
                 <div class="name">
                     <a href="#">Ghế Ngồi Streamer</a>
                     <span>Price: 900$</span>
                 </div>
             </div>
             <div>
                 <div class="prod-top">
                     <div>
                         <a href="#">
                             <img src="img_psd/img001.jpg" alt="">
                         </a>
                     </div>
                     <div class="quick">
                         <a href="#"><i class="far fa-heart"></i></a>
                         <a href="#"><i class="fas fa-eye"></i></a>
                         <a href="#"><i class="fas fa-search"></i></a>
                     </div>
                     <div class="cart">
                         <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Thêm Vào Giỏ Hàng</a>
                     </div>
                 </div>
                 <div class="name">
                     <a href="#">Ghế Ngồi Streamer</a>
                     <span>Price: 900$</span>
                 </div>
             </div>
             <div>
                 <div class="prod-top">
                     <div>
                         <a href="#">
                             <img src="img_psd/img001.jpg" alt="">
                         </a>
                     </div>
                     <div class="quick">
                         <a href="#"><i class="far fa-heart"></i></a>
                         <a href="#"><i class="fas fa-eye"></i></a>
                         <a href="#"><i class="fas fa-search"></i></a>
                     </div>
                     <div class="cart">
                         <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Thêm Vào Giỏ Hàng</a>
                     </div>
                 </div>
                 <div class="name">
                     <a href="#">Ghế Ngồi Streamer</a>
                     <span>Price: 900$</span>
                 </div>
             </div>
             <div>
                 <div class="prod-top">
                     <div>
                         <a href="#">
                             <img src="img_psd/img001.jpg" alt="">
                         </a>
                     </div>
                     <div class="quick">
                         <a href="#"><i class="far fa-heart"></i></a>
                         <a href="#"><i class="fas fa-eye"></i></a>
                         <a href="#"><i class="fas fa-search"></i></a>
                     </div>
                     <div class="cart">
                         <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Thêm Vào Giỏ Hàng</a>
                     </div>
                 </div>
                 <div class="name">
                     <a href="#">Ghế Ngồi Streamer</a>
                     <span>Price: 900$</span>
                 </div>
             </div>
             <div>
                 <div class="prod-top">
                     <div>
                         <a href="#">
                             <img src="img_psd/img001.jpg" alt="">
                         </a>
                     </div>
                     <div class="quick">
                         <a href="#"><i class="far fa-heart"></i></a>
                         <a href="#"><i class="fas fa-eye"></i></a>
                         <a href="#"><i class="fas fa-search"></i></a>
                     </div>
                     <div class="cart">
                         <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Thêm Vào Giỏ Hàng</a>
                     </div>
                 </div>
                 <div class="name">
                     <a href="#">Ghế Ngồi Streamer</a>
                     <span>Price: 900$</span>
                 </div>
             </div>
             <div>
                 <div class="prod-top">
                     <div>
                         <a href="#">
                             <img src="img_psd/img001.jpg" alt="">
                         </a>
                     </div>
                     <div class="quick">
                         <a href="#"><i class="far fa-heart"></i></a>
                         <a href="#"><i class="fas fa-eye"></i></a>
                         <a href="#"><i class="fas fa-search"></i></a>
                     </div>
                     <div class="cart">
                         <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                     </div>
                 </div>
                 <div class="name">
                     <a href="#">Ghế Ngồi Streamer</a>
                     <span>Price: 900$</span>
                 </div>
             </div>
             <div>
                 <div class="prod-top">
                     <div>
                         <a href="#">
                             <img src="img_psd/img001.jpg" alt="">
                         </a>
                     </div>
                     <div class="quick">
                         <a href="#"><i class="far fa-heart"></i></a>
                         <a href="#"><i class="fas fa-eye"></i></a>
                         <a href="#"><i class="fas fa-search"></i></a>
                     </div>
                     <div class="cart">
                         <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                     </div>
                 </div>
                 <div class="name">
                     <a href="#">Ghế Ngồi Streamer</a>
                     <span>Price: 900$</span>
                 </div>
             </div>
             <div>
                 <div class="prod-top">
                     <div>
                         <a href="#">
                             <img src="img_psd/img001.jpg" alt="">
                         </a>
                     </div>
                     <div class="quick">
                         <a href="#"><i class="far fa-heart"></i></a>
                         <a href="#"><i class="fas fa-eye"></i></a>
                         <a href="#"><i class="fas fa-search"></i></a>
                     </div>
                     <div class="cart">
                         <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                     </div>
                 </div>
                 <div class="name">
                     <a href="#">Ghế Ngồi Streamer</a>
                     <span>Price: 900$</span>
                 </div>
             </div>
         </div>
    </div>
</div>
<div class="product-detail">
    <div class="cate">
        <div class="cate-left">
            <span><i class="fas fa-align-right"></i></span>
            <h2>Thời Trang</h2>
            <span><i class="fas fa-angle-double-right"></i></span>
         </div>
        <div class="cate-right">
            <ul>
                <li><a href="#">ao so mi </a></li>
                <li><a href="#">ao so mi </a></li>
                <li><a href="#">ao so mi </a></li>
                <li><a href="#">ao so mi </a></li>
                <li><a href="#">ao so mi </a></li>
                <li><a href="#">ao so mi </a></li>
                <li><a href="#">ao so mi </a></li>
                <li><a href="#">ao so mi </a></li>
                <li><a href="#">ao so mi </a></li>
            </ul>
        </div>
    </div>
    <div class="detail">
        <div class="category">
             <ul>
                 <li><a href="#">ao so mi </a></li>
                 <li><a href="#">ao so mi </a></li>
                 <li><a href="#">ao so mi </a></li>
                 <li><a href="#">ao so mi </a></li>
                 <li><a href="#">ao so mi </a></li>
                 <li><a href="#">ao so mi </a></li>
                 <li><a href="#">ao so mi </a></li>
                 <li><a href="#">ao so mi </a></li>
                 <li><a href="#">ao so mi </a></li>
             </ul>
        </div>
         
         <div class="prod-cate">
             <div>
                 <div class="prod-top">
                     <div>
                         <a href="#">
                             <img src="img_psd/img001.jpg" alt="">
                         </a>
                     </div>
                     <div class="quick">
                         <a href="#"><i class="far fa-heart"></i></a>
                         <a href="#"><i class="fas fa-eye"></i></a>
                         <a href="#"><i class="fas fa-search"></i></a>
                     </div>
                     <div class="cart">
                         <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Thêm Vào Giỏ Hàng</a>
                     </div>
                 </div>
                 <div class="name">
                     <a href="#">Ghế Ngồi Streamer</a>
                     <span>Price: 900$</span>
                 </div>
             </div>
             <div>
                 <div class="prod-top">
                     <div>
                         <a href="#">
                             <img src="img_psd/img001.jpg" alt="">
                         </a>
                     </div>
                     <div class="quick">
                         <a href="#"><i class="far fa-heart"></i></a>
                         <a href="#"><i class="fas fa-eye"></i></a>
                         <a href="#"><i class="fas fa-search"></i></a>
                     </div>
                     <div class="cart">
                         <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Thêm Vào Giỏ Hàng</a>
                     </div>
                 </div>
                 <div class="name">
                     <a href="#">Ghế Ngồi Streamer</a>
                     <span>Price: 900$</span>
                 </div>
             </div>
             <div>
                 <div class="prod-top">
                     <div>
                         <a href="#">
                             <img src="img_psd/img001.jpg" alt="">
                         </a>
                     </div>
                     <div class="quick">
                         <a href="#"><i class="far fa-heart"></i></a>
                         <a href="#"><i class="fas fa-eye"></i></a>
                         <a href="#"><i class="fas fa-search"></i></a>
                     </div>
                     <div class="cart">
                         <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Thêm Vào Giỏ Hàng</a>
                     </div>
                 </div>
                 <div class="name">
                     <a href="#">Ghế Ngồi Streamer</a>
                     <span>Price: 900$</span>
                 </div>
             </div>
             <div>
                 <div class="prod-top">
                     <div>
                         <a href="#">
                             <img src="img_psd/img001.jpg" alt="">
                         </a>
                     </div>
                     <div class="quick">
                         <a href="#"><i class="far fa-heart"></i></a>
                         <a href="#"><i class="fas fa-eye"></i></a>
                         <a href="#"><i class="fas fa-search"></i></a>
                     </div>
                     <div class="cart">
                         <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Thêm Vào Giỏ Hàng</a>
                     </div>
                 </div>
                 <div class="name">
                     <a href="#">Ghế Ngồi Streamer</a>
                     <span>Price: 900$</span>
                 </div>
             </div>
             <div>
                 <div class="prod-top">
                     <div>
                         <a href="#">
                             <img src="img_psd/img001.jpg" alt="">
                         </a>
                     </div>
                     <div class="quick">
                         <a href="#"><i class="far fa-heart"></i></a>
                         <a href="#"><i class="fas fa-eye"></i></a>
                         <a href="#"><i class="fas fa-search"></i></a>
                     </div>
                     <div class="cart">
                         <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Thêm Vào Giỏ Hàng</a>
                     </div>
                 </div>
                 <div class="name">
                     <a href="#">Ghế Ngồi Streamer</a>
                     <span>Price: 900$</span>
                 </div>
             </div>
             <div>
                 <div class="prod-top">
                     <div>
                         <a href="#">
                             <img src="img_psd/img001.jpg" alt="">
                         </a>
                     </div>
                     <div class="quick">
                         <a href="#"><i class="far fa-heart"></i></a>
                         <a href="#"><i class="fas fa-eye"></i></a>
                         <a href="#"><i class="fas fa-search"></i></a>
                     </div>
                     <div class="cart">
                         <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                     </div>
                 </div>
                 <div class="name">
                     <a href="#">Ghế Ngồi Streamer</a>
                     <span>Price: 900$</span>
                 </div>
             </div>
             <div>
                 <div class="prod-top">
                     <div>
                         <a href="#">
                             <img src="img_psd/img001.jpg" alt="">
                         </a>
                     </div>
                     <div class="quick">
                         <a href="#"><i class="far fa-heart"></i></a>
                         <a href="#"><i class="fas fa-eye"></i></a>
                         <a href="#"><i class="fas fa-search"></i></a>
                     </div>
                     <div class="cart">
                         <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                     </div>
                 </div>
                 <div class="name">
                     <a href="#">Ghế Ngồi Streamer</a>
                     <span>Price: 900$</span>
                 </div>
             </div>
             <div>
                 <div class="prod-top">
                     <div>
                         <a href="#">
                             <img src="img_psd/img001.jpg" alt="">
                         </a>
                     </div>
                     <div class="quick">
                         <a href="#"><i class="far fa-heart"></i></a>
                         <a href="#"><i class="fas fa-eye"></i></a>
                         <a href="#"><i class="fas fa-search"></i></a>
                     </div>
                     <div class="cart">
                         <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Them vao gio hang</a>
                     </div>
                 </div>
                 <div class="name">
                     <a href="#">Ghế Ngồi Streamer</a>
                     <span>Price: 900$</span>
                 </div>
             </div>
         </div>
    </div>
</div>

    <div class="footer">
   
        <div class="footer-infor">
            <div class="footer-infor1">
                <div><img src="img_psd/logo-market.png" alt=""></div>
                <p>laskdjf ksdkfjsk sdkfjks dsfsdfs df sf </p>
                <ul>
                    <li><a href="#"><img src="img_psd/lg-bt1.png" alt=""><span>0123 Your City</span></a></li>
                    <li><a href="#"><img src="img_psd/lg-bt2.png" alt=""><span>(+84) 392128799</span></a></li>
                    <li><a href="#"><img src="img_psd/lg-bt3.png" alt=""><span>nothing9xhdtk@gmail.com</span></a></li>
                </ul>
            </div>
            <div class="footer-infor2">
                <h2>information</h2>
                <ul>
                    <li><a href="#">our story</a></li>
                    <li><a href="#">privacy & policy</a></li>
                    <li><a href="#">terms & conditions</a></li>
                    <li><a href="#">shipping & delivery</a></li>
                    <li><a href="#">careers</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
            <div class="footer-infor3">
                <h2>oursocial</h2>
                <ul>
                    <li><a href="#"><img src="img_psd/lg-bt-1.png" alt=""></a><span>google+</span></a></li>
                    <li><a href="#"><img src="img_psd/lg-bt-2.png" alt=""></a><span>pinterest</span></a></li>
                    <li><a href="#"><img src="img_psd/lg-bt-3.png" alt=""></a><span>vimeo</span></a></li>
                    <li><a href="#"><img src="img_psd/lg-bt-4.png" alt=""></a><span>instagram</span></a></li>
                    <li><a href="#"><img src="img_psd/lg-bt-5.png" alt=""></a><span>facebook</span></a></li>
                    <li><a href="#"><img src="img_psd/lg-bt-6.png" alt=""></a><span>twitter</span></a></li>
                    <li><a href="#"><img src="img_psd/lg-bt-7.png" alt=""></a><span>RSS</span></a></li>
                    <li><a href="#"><img src="img_psd/lg-bt-8.png" alt=""></a><span>YouTube</span></a></li>
                </ul>
            </div>
            <div class="footer-infor4">
                <div>
                    <h2>opening time</h2>
                    <div>
                        <span><img src="img_psd/lg-bt-9.png" alt=""></span>
                        <span>Monday-Friday: 08:30 am - 09:30 pm</span>
                        <span>Sat-Sun: 09:00 am - 10:00 pm</span>

                    </div>
                </div>
                <div>
                    <h2>payment option</h2>
                    <ul>
                        <li><a href="#"><img src="img_psd/lg-mn1.png" alt=""></a></li>
                        <li><a href="#"><img src="img_psd/lg-mn2.png" alt=""></a></li>
                        <li><a href="#"><img src="img_psd/lg-mn3.png" alt=""></a></li>
                        <li><a href="#"><img src="img_psd/lg-mn4.png" alt=""></a></li>
                        <li><a href="#"><img src="img_psd/lg-mn1.png" alt=""></a></li>
                        <li><a href="#"><img src="img_psd/lg-mn1.png" alt=""></a></li>
                        <li><a href="#"><img src="img_psd/lg-mn1.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-end">
        <div>
            <ul>
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Advance</a></li>
                <li><a href="#">Searchs</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div>
            <p>&copy; 2020 PSDFreebies.com | All Rights Reserved</p>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>