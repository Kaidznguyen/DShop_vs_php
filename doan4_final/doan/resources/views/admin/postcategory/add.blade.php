@extends('admin.layout')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Thêm loại bài viết</h1>
            </div><!-- /.col -->
            
          </div>
        </div>
    </div>
      
    <form method="post" action="{{ URL::to('/admin/postcategory/add') }}">
      
        <div class="card-body">
            <div class="form-group" style="display:flex;justify-content:space-between">
                <div class="form-group col-7">
                    <label for="exampleInputEmail1">Tên loại bài viết</label>
                    <input type="text" name="name_cate" class="form-control"  placeholder="Tên loại bài viết">
                </div>
            </div>
        </div>   
        <div class="card-body">
            <div class="form-group" style="display:flex;justify-content:space-between">
                <div class="form-group col-7">
                    <label for="exampleInputPassword1">Mô Tả</label>
                    <br/>
                    <textarea type="text" id="des" name="description_cate"  cols="90%" rows="5"></textarea>
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
