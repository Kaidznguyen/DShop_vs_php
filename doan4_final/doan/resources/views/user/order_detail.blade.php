@extends('user.home')
@section('content')
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Chi tiết hoá đơn</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="single-product.html">Chi tiết hóa đơn</a>
                </nav>
            </div>
        </div>
    </div>
</section>
@if ($order_by_id->isEmpty() and $cus->isEmpty())
<center>
    <h1 style="color:rgb(210, 148, 148)">Bạn chưa mua bất cứ thứ gì!! Hãy mua ngay <a href="/user/category_item" style="text-decoration:none;color:red">tại đây</a></h1>
</center>
@else
<div class="container-fluid">
    <div class="section">
        <div class="header">
            <div class="header_img">
                <img class="header_img_style" src="/Upload/logo.png">
            </div>
            
            <div class="header_name">
                <span class="header_name_p">Cửa Hàng Bán Mô Hình DShop</span>
                <br/>
                <span class="header_name_p">Địa Chỉ:Văn Lâm-Hưng Yên</span>
                <br/>
                <span class="header_name_p">Số Điện Thoại:0999999999</span>
                <br/>   
               
            </div>
        </div>
        <div class="container">
            <center><h2 class="container_header">Hóa Đơn Bán Mô Hình</h2></center>
            <div class="container_name">
                {{-- @foreach ($customer_id as $key=>customerId) --}}
                    <p class="container_name_p">Tên khách hàng:{{$cus->name}}</p>
                    <p class="container_name_p">Số điện thoại:{{$cus->phone}}</p>
                    <p class="container_name_p">Địa chỉ giao hàng:{{$cus->address}}</p>
                    <p class="container_name_p">Địa chỉ Email:{{$cus->email}}</p>
                    <p class="container_name_p">Ghi chú của khách:{{$cus->note}}</p>
                    <p class="container_name_p">Phương thức thanh toán:{{$cus->payment}}</p>

                {{-- @endforeach --}}
            </div>
        </div>
        <div class="row py-8">
            <div class="col-lg-10 mx-auto">
                <div class="card rounded shadow border-0">
                    <div class="card-body p-5 bg-white rounded">
                        <div class="table-responsive">
                            <table id="example" style="width:100%" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Ảnh</th>
                                        <th style="width:30%">Tên Mô Hình</th>
                                        <th>Giá</th>
                                        <th>Số Lượng</th>
                                        <th>Thành Tiền</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order_by_id as $key=>$x)
                                    <tr>
                                        <td ><img style="width:100px;height:100px" src="/Upload/{{$x->img}}" alt=""></td>
                                        <td>{{$x->name}}</td>
                                        <td>{{number_format($x->promotionprice)}}</td>
                                        <td>{{$x->totalquantity}}</td>
                                        <td>{{number_format($x->totalprice)}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="total_price">
                            <h5 style="color:red;padding-top:10px;">
                             
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="footer">
            <div class="footer_customer">
                <p class="footer_cutomer_p">Khách Hàng</p>
                <p class="sign1">{{$cus->name}}</p>
            </div>
            <div class="footer_customer">
                <p class="footer_cutomer_p">Người Bán Hàng</p>
                <div class="header_img">
                    <img class="footer_img_seller" src="/Upload/logo.png">
                    <p class="sign2">DShop</p>

                </div>
            </div>
        </div>
    </div>

    


</div>

<style>
    .section{
        margin:0px auto;
        width:900px;
        background-color:#d2dae2;
        height:auto;
        padding:20px 30px;
         
    }
    .sign1{
    margin-left:-25px;
    line-height: 2rem;
    color: #FD7272;
    font-size: 1.2rem; 
    }
    .sign2{
    margin-left:40px;
    line-height: 2rem;
    color: #FD7272;
    font-size: 1.2rem; 
    }
    .header{
        display:flex;
    }

    .header_img{
        width:40%;
    }

    .header_img_style{
  
        height:200px;
        width:250px;
    }

    .header_name{
        width:60%;
        padding-left:150px;
       
    }

    .header_name_p{
        
        font-size:1.2rem;
        font-style:oblique;
        color:#4b6584;
    }
    .container_header{
        padding-top:30px;
        padding-bottom:20px;
    }
    
    .container_name_p{
        font-size:1.1rem;
    }


    .footer{
        margin-top:30px;
        display:flex;
    justify-content: space-between;
        padding:0 80px;
    }

    .footer_img_seller{
        border-radius: 50%;
        width:130px;
        height:130px;

    }

    .footer_name_p{
        font-size:1.2rem;
        font-style:oblique;
        float:left;
    }

    .footer_cutomer_p{
        font-size:1.2rem;
    }

</style>
@endif
@endsection