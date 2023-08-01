@extends('admin.layout')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Sửa loại mô hình</h1>
            </div><!-- /.col -->
            
          </div>
        </div>
    </div>
      @foreach ($edit as $cate)
      <form method="post" action="{{ URL::to('/admin/brand/update'.$cate ->id_brand) }} " enctype="multipart/form-data">
      
        <div class="card-body">
            <div class="form-group" style="display:flex;justify-content:space-between">
                <div class="form-group col-7">
                    <label for="exampleInputEmail1">Tên loại mô hình</label>
                    <input type="text" name="name_brand" class="form-control"  placeholder="Tên loại mô hình" value="{{ $cate ->name_brand}}">
                </div>
            </div>
        </div>   
        <div class="card-body">
            <div class="form-group" style="display:flex;justify-content:space-between">
                <div class="form-group col-7">
                    <label for="exampleInputEmail1">Ảnh</label>
                    <input type="file" name="img" class="form-control">
                </div>
            </div>
        </div>   
        <div class="card-body">
            <div class="form-group" style="display:flex;justify-content:space-between">
                <div class="form-group col-7">
                    <label for="exampleInputPassword1">Mô Tả</label>
                    <br/>
                    <input type="text" class="form-control" value="{{ $cate ->description_brand}}"  name="description">
                    
            </div>
        </div>   
        </div>
        <div class="card-footer">
          <button type="submit" name="edit" class="btn btn-primary">Sửa</button>
        </div>
        @csrf
      </form>
      @endforeach
    
</div>

@endsection
