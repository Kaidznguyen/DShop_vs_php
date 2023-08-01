@extends('admin.layout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Trang quản trị nhà cung cấp</h1>
    <div class="card-header py-3">
        <a href="{{ URL::to('/admin/brand/showadd') }}"><button class="btn btn-primary">Thêm Nhà Cung Cấp <i class="fas fa-plus"></i></button></a>
    </div>
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
                            <th>Ảnh</th>
                            <th>Tên nhà cung cấp</th>
                            <th>Mô tả</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($listbrand as $key=>$x)
                        <tr style="text-align: center"> 
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="/Upload/{{ $x->img_brand }}" alt="" style="width:150px;height:100px"></td>
                            <td>{{ $x->name_brand }}</td>
                            <td>{!! $x->description_brand !!}</td>
                            <td style="text-align:center">
                                
                              <a style="margin:25px 10px" class="btn btn-primary btn-circle " href="{{ URL::to('/admin/brand/edit'. $x->id_brand ) }}">
                                  <i class="fas fa-edit"></i>
                              </a>
                              <a href="{{ URL::to('/admin/brand/delete'. $x->id_brand ) }}" 
                                class="btn btn-danger btn-circle " style="margin:0px 10px" 
                                onclick="return confirm('Bạn có chắc muốn xóa không!!')">
                                  <i class="fas fa-trash"></i>
                              </a>
                              <a class="btn btn-info btn-circle " style="margin:0px 10px" 
                              href="{{ URL::to('/admin/brand/detail'. $x->id_brand ) }}">
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