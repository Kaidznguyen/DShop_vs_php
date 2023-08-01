@extends('admin.layout')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Thêm nhà cung cấp</h1>
            </div><!-- /.col -->
            
          </div>
        </div>
    </div>
      
    <form method="post" action="{{ URL::to('/admin/brand/add') }}" enctype="multipart/form-data">
      
        <div class="card-body">
            <div class="form-group" style="display:flex;justify-content:space-between">
                <div class="form-group col-7">
                    <label for="exampleInputEmail1">Tên nhà cung cấp</label>
                    <input type="text" name="name_brand" class="form-control"  placeholder="Tên loại mô hình">
                </div>
            </div>
        </div>   
        <div class="card-body">
            <div class="form-group" style="display:flex;justify-content:space-between">
                <div class="form-group col-7">
                    <label for="exampleInputEmail1">Ảnh</label>
                    <input type="file" name="img" class="form-control" id="upload">
                </div>
            </div>
        </div>   
        <div class="card-body">
            <div class="form-group" style="display:flex;justify-content:space-between">
                <div class="form-group col-7">
                    <label for="exampleInputPassword1">Mô Tả</label>
                    <br/>
                    <textarea type="text"  name="description" id="des"  cols="90%" rows="5"></textarea>
            </div>
        </div>   
        </div>
        <div class="card-footer">
          <button type="submit" name="add" class="btn btn-primary">Thêm</button>
        </div>
        @csrf
      </form>
</div>

@endsection
