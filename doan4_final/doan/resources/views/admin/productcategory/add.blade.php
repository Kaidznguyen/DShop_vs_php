@extends('admin.layout')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Thêm loại mô hình</h1>
            </div><!-- /.col -->
            
          </div>
        </div>
    </div>
      
    <form method="post" action="{{ URL::to('/admin/productcategory/add') }}">
      
        <div class="card-body">
            <div class="form-group" style="display:flex;justify-content:space-between">
                <div class="form-group col-7">
                    <label for="exampleInputEmail1">Tên loại mô hình</label>
                    <input type="text" name="name_cate" class="form-control"  placeholder="Tên loại mô hình">
                </div>
            </div>
        </div>   
        <div class="card-body">
            <div class="form-group" style="display:flex;justify-content:space-between">
                <div class="form-group col-7">
                    <label for="exampleInputPassword1">Mô Tả</label>
                    <br/>
                    <textarea type="text" id="des" name="description"  cols="90%" rows="5"></textarea>
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
