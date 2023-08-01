@extends('admin.layout')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Sửa loại bài viết</h1>
            </div><!-- /.col -->
            
          </div>
        </div>
    </div>
      @foreach ($edit as $cate)
      <form method="post" action="{{ URL::to('/admin/postcategory/update'.$cate ->id_cate) }} ">
      
        <div class="card-body">
            <div class="form-group" style="display:flex;justify-content:space-between">
                <div class="form-group col-7">
                    <label for="exampleInputEmail1">Tên loại bài viết</label>
                    <input type="text" name="name_cate" class="form-control"  placeholder="Tên loại bài viết" value="{{ $cate ->name_cate}}">
                </div>
            </div>
        </div>   
        <div class="card-body">
            <div class="form-group" style="display:flex;justify-content:space-between">
                <div class="form-group col-7">
                    <label for="exampleInputPassword1">Mô Tả</label>
                    <br/>
                    <textarea type="text" class="form-control" id="des" name="description_cate">
                      {{-- @foreach($edit as $x) --}}
                          {{ $cate->description_cate }}
                      {{-- @endforeach --}}
                    </textarea>
                    
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
