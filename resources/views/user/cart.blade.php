@extends('user.master')

@section('main')

    <div class="main">
        <div class="ctn">
            <!-- <div class="main1">
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
                    <div class="clip clip1">
                        <div class="content">
                            <h2>money back</h2>
                            <p>30 days money back guarantee</p>
                        </div>
                    </div>
                    <div class="clip clip2">
                        <div class="content">
                            <h2>free shipping</h2>
                            <p>shipping on orders over $99</p>
                        </div>
                    </div>
                    <div class="clip clip3">
                        <div class="content">
                            <h2>special sale</h2>
                            <p>extra $5 off on all items</p>
                        </div>
                    </div>
                </div>
            </div> -->
           <div class="table">
               <div class="table-right"></div>
               <div class="table-left">
                   <h2>My Cart</h2>
                    <form action="" >
                        <div class="show-cart">
                            <div id="menu">
                                <div id="img"> Ảnh sản phẩm </div>
                                <div id="product">ten</div>
                                <div id="price">đơn giá</div>
                                <div id="amount">so luong</div>
                                <div id="total-price">thanh tien</div>
                                <div id="delete">xoa</div>
                            </div>
                            @foreach($products as $product)
                            <div id="items">
                                <div id="img"> <img src="{{$product->prod_img}}" with="115" height="130" alt="product"> </div>
                                <div id="product">{{$product->prod_name}}</div>
                                <div id="price">{{number_format($product->prod_price, 0, ',', '.')}}đ</div>
                                <div id="amount"><input with="40" type="number" name="" id=""></div>
                                <div id="total-price">thanh tien</div>
                                <div id="delete"><a href="">Xóa</a></div>
                            </div>
                            @endforeach
                            
                        </div>
                    </form>
                    <div class="table-bt">
                        <div><span>tong thanh toan : 90000</span></div>
                        <div>
                            <a href="#">cap nhat</a>
                            <a href="#">mua tiep</a>
                            <a href="#">xoa gio hang</a>
                        </div>
                    </div>
               </div>
           </div>
        </div>
    </div>




@endsection

