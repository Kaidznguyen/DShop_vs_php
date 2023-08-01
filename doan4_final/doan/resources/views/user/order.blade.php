@extends('user.home')
@section('content')
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Hoá đơn</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="single-product.html">Hóa đơn</a>
                </nav>
            </div>
        </div>
    </div>
</section>
@if ($order->isEmpty())
<center>
    <h1 style="color:rgb(210, 148, 148)">Bạn chưa mua bất cứ thứ gì!! Hãy mua ngay <a href="/user/category_item" style="text-decoration:none;color:red">tại đây</a></h1>
</center>
@else
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr style="text-align: center">
                    <th>Thứ tự</th>
                    <th>Mã vận đơn</th>
                    <th>Tên khách hàng</th>
                    <th>SĐT</th>
                    <th>Phương thức thanh toán</th>
                    <th>Trạng thái</th>
                    <th>Chức năng</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($order as $key=>$cate)
                <tr style="text-align: center">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $cate->shipping_id }}</td>
                    <td>{{ $cate->name }}</td>
                    <td>{{$cate->phone}}</td>
                    <td>{{$cate->payment}}</td>
                    <td>{{$cate->status}}</td>
                    <td style="text-align:center">
                      <a class="btn btn-info btn-circle " style="margin:0px 10px" 
                      href="{{ URL::to('/user/order_detail/'. $cate->id_order ) }}">
                          <i class="fas fa-eye"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection