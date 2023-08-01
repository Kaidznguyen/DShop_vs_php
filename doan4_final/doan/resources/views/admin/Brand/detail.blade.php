@extends('admin.layout')
@section('content') 
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Chi Tiết Nhà Cung Cấp</h1>
            </div><!-- /.col -->
          
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    @foreach ($detail as $key => $cate)
      
        <div class="card-body">
            <div class="form-group" style="display:flex;justify-content:space-between">
                <div class="form-group col-7">
                    <label for="exampleInputEmail1">Tên loại mô hình</label>
                    <input type="text" name="name_brand" readonly class="form-control"   value="{{ $cate ->name_brand}}">
                </div>
            </div>
        </div>   
        <div class="card-body">
            <div class="form-group" style="display:flex;justify-content:space-between">
                <div class="form-group col-7">
                    <label for="exampleInputEmail1">Ảnh</label><br>
                    <img src="{{ URL::to('/Upload/'.  $cate->img_brand ) }}" value="{{ $cate->img_brand }}" style="width:230px;height:200px;">
                </div>
            </div>
        </div>   
        <div class="card-body">
            <div class="form-group" style="display:flex;justify-content:space-between">
                <div class="form-group col-7">
                    <label for="exampleInputPassword1">Mô Tả</label>
                    <br/>
                    <input type="text" class="form-control" readonly value="{{ $cate ->description_cate}}"  name="description">
                    
            </div>
        </div>   
        </div>
        
        @csrf
      <div class="card-footer">
        <a href="{{ URL::to('/admin/brand/list') }}"><button type="submit" class="btn btn-primary">Quay lại</button></a>
      </div>
    @endforeach
</div>

@endsection