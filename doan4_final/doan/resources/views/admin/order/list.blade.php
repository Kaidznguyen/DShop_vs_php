@extends('admin.layout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Trang quản trị hóa đơn</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
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
                              href="{{ URL::to('/admin/order/detail'. $cate->id_order ) }}">
                                  <i class="fas fa-eye"></i>
                              </a>
                            </td>
                          </tr>
                          @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection