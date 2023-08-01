@extends('user.home')
@section('content')
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Thanh toán</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="single-product.html">Thanh toán</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
    <div class="container">
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-7">
                    <h3>Chi tiết giao hàng</h3>
                    <form class="row contact_form"  action="{{URL::to('/save')}}"  method="post" novalidate="novalidate">
                        @csrf
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" required id="first" placeholder="Nhập tên người nhận" name="name">
                            <span class="placeholder" ></span>
                        </div>

                        
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" required id="number" placeholder="Số điện thoại" name="phone">
                            <span class="placeholder" ></span>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" required id="email" placeholder="Địa chỉ email" name="email">
                            <span class="placeholder"  ></span>
                        </div>


                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" required id="add1" placeholder="Địa chỉ giao hàng" name="address">
                            <span class="placeholder" ></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <p>Phương thức thanh toán</p>
                            <select class="country_select" name="payment">
                                <option value="MoMo">Thanh toán qua MoMo</option>
                                <option value="COD">Nhận hàng rồi thanh toán</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <h3>Ghi chú</h3>
                                

                            </div>
                            <input class="form-control" name="note" id="message"  placeholder="Bạn có bất cứ điều gì cần chúng tôi chú ý khi giao hàng không">
                        </div>
                        <input type="submit" style="margin-left: 17px" class="primary-btn btn" href="" value="Thanh toán">
                    </form>
                </div>
                <div class="col-lg-5">
                    <div class="order_box">
                        <h2>Đơn hàng của bạn</h2>
                        <ul class="list">
                            <li><a href="#">Sản phẩm <span>Giá</span></a></li>
                            <?php
                                $pr = Session::get('cart');
                                $total = 0;
                            ?>
                            @foreach ($pr as $x)
                            <?php
                    
                    $total += $x['price'] * $x['quantity'];
                    $totalprcie = $total + 10;
                    ?>
                                <li><a href="#"> {{$x['name']}}<span class="middle">x {{$x['quantity']}}</span> <span class="last">{{number_format($x['price'] * $x['quantity'])}} $</span></a></li>
                            @endforeach
                        </ul>
                        <ul class="list list_2">
                            <li><a href="#">Tạm tính <span>{{number_format($total)}} $</span></a></li>
                            <li><a href="#">Tiền giao hàng <span>Flat rate: $10</span></a></li>
                            <li><a href="#">Tổng giá tiền <span>{{number_format($totalprcie)}} $</span></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection