@extends('user.master')
@section('main')
    <!-- detail -->

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
                 @foreach($products as $product)
                 <div>
                     <div class="prod-top">
                         <div>
                             <a href="#">
                                 <img src="{{ url('profile_images'.'/'.$product->prod_img) }}" alt="">
                             </a>
                         </div>
                         <div class="quick">
                             <a href="#"><i class="far fa-heart"></i></a>
                             <a href="#"><i class="fas fa-eye"></i></a>
                             <a href="{{ route('getDetail', $product->id) }}"><i class="fas fa-search"></i></a>
                         </div>
                         <div class="cart">
                             <a href="#"><span><i class="fas fa-cart-arrow-down"></i></span>Thêm Vào Giỏ Hàng</a>
                         </div>
                     </div>
                     <div class="name">
                         <a href="#">{{$product->prod_name}}</a>
                         <span>{{$product->prod_price}}</span>
                     </div>
                 </div>
                 @endforeach
                </div>
            </div>
            {{$products->links()}}
    </div>
   
@endsection