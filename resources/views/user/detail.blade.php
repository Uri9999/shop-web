@extends('user.master')
    @section('main')

    <!-- detail -->

    <div class="detail">
        <div class="detail-top">
            <div class="img-product">
                <img src="{{ $product->prod_img }}" alt="">
                <!-- src="{{ url('profile_images').'/'.$product->prod_img }} -->
            </div>
            <div class="detail-product">
                <h3>Tên Sản Phẩm: {{ $product->prod_name}}</h3>
                <div class="rate">
                    <div class="rating">
                        <div>5.0</div>
                        <div>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="evaluate">
                        <div class="amount">2</div>
                        <div>đánh giá</div>
                    </div>
                    <div class="sold">
                        <div class="amount-sold">4</div>
                        <div>đã bán</div>
                    </div>
                </div>
                <div class="price">{{number_format($product->prod_price, 0, ',', '.')}}<sup>đ</sup></div>
                <div class="description">Chi tiết: {!!$product->prod_description!!}</div>
                <div class="status">Trạng Thái: @if($product->status==1) còn hàng @else hết hàng @endif</div>
                <div class="buy">
                    <a href="#"><i class="fas fa-shopping-cart"></i>Thêm Vào Giỏ Hàng</a>
                </div>
            </div>
        </div>
    </div>

    <div>
        <h2>Comment-Nhận xét:</h2>
        <div class="form">
            <form action="{{route('addComment')}}" method="post">
                @csrf
                <table>
                    <tr>
                        <td>Content:</td>
                        <td><input type="text" name="content"></td>
                        <td><input type="hidden" name="product_id" value="{{$product->id}}"></td>
                    </tr>
                    <tr>
                        <input type="submit" value="submit">
                    </tr>
                </table>
            </form>
        </div>
        <h2>Comments list</h2>
        <div class="list-comments">
            @foreach($comments as $comment)
                <div>
                    <div>khach hang: {{$comment->user_name}}</div>
                    <div>noi dung : {{$comment->content}}</div>
                    <br>
                </div>
            @endforeach
        </div>
    </div>
   


    @endsection