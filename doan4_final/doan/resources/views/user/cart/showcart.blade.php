@extends('user.home')
@section('content')
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Trang giỏ hàng</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="cart.html">Giỏ hàng</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Cart Area =================-->
@if(Session::has('cart') != null)
<section class="cart_area" id="cart">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>TT</th>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng tiền</th>
                        </tr>
                    </thead>
                    <tbody >
                        <?php
                            $total = 0;
                        ?>
                    @foreach($carts as $id=>$x)
                    <?php
                    
                    $total += $x['price'] * $x['quantity'];
                    
                    ?>
                        <tr ng-repeat="item in cartItems track by item.name">
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="/Upload/{{$x['img']}}" alt="" style="width: 200px;height: 200px;">
                                    </div>
                                    <div class="media-body">
                                        <p>{{$x['name']}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>{{number_format($x['price'])}} $</h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <input type="number"  data-id="{{$id}}" min="1" class="txtQuantity" value="{{$x['quantity']}}" />
                                    
                                </div>
                            </td>
                            <td> 
                                <h5>{{number_format($x['price'] * $x['quantity'])}} $</h5>
                                
                            </td>
                            <td><a href="javascript:" data-id="{{$id}}" id="delete" class="btn btn-outline-danger">Xoá</a></td>
                        </tr>
                        
                        @endforeach
                        
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                
                            </td>
                            <td>
                                <h5>Tổng tiền</h5>             
                            </td>
                            <td>
                                <h5>{{number_format($total)}} $</h5>
                            </td>
                            
                        </tr>
                        <tr class="out_button_area">
                            <td>

                            </td><td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <div  class="checkout_btn_inner d-flex align-items-center">
                                    <a class="gray_btn" href="index.html">Tiếp tục mua hàng</a>
                                    <?php
                                    $id = Session::get('id_us');
                                    
                                    ?>
                                    @if( Session::has('id_us') != null)
                                        <a class="primary-btn" href="{{ URL::to('/user/checkout') }}">Thanh toán</a>
                                    @else
                                        <a class="primary-btn" href="{{ URL::to('/user/showlogin') }}">Thanh toán</a>
                                    @endif
                                </div>
                            </td>
                            <td>
                                
                            </td>
                            
                            <td>
                               
                            </td>
                        </tr>
                    </tbody>
                    

                </table>
            </div>
        </div>
    </div>
</section>


    
@else
<div style="margin:0px auto">
    <center>
        <h1 style="color:black">Bạn chưa mua bất cứ món đồ nào T.T!! Hãy bắt đầu mua sắm ngay <a href="{{ URL::to('/') }}" style="text-decoration: none;color:red">Tại đây</a>!</h1>
    </center>
</div>
@endif
@endsection