@extends('admin.layout')
@section('content') 
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Chi Tiết loại bài viết</h1>
            </div><!-- /.col -->
          
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    @foreach ($detail as $key => $cate)
    {{-- <form method="post" action="{{ URL::to('/admin/publish/detail'.$cate->id) }}"> --}}
      
        <div class="card-body">
            <div class="form-group" style="display:flex;justify-content:space-between">
                <div class="form-group col-7">
                    <label for="exampleInputEmail1">Tên loại bài viết</label>
                    <input type="text" name="name_cate" readonly class="form-control" style="text-align:center"  value="{{ $cate ->name_cate}}">
                </div>
            </div>
        </div>   
        <div class="card-body">
            <div class="form-group" style="display:flex;justify-content:space-between">
                <div class="form-group col-7">
                    <label for="exampleInputPassword1">Mô Tả</label>

                    <textarea  class="form-control" readonly  name="description">
                      {{-- @foreach($detail as $x) --}}
                          {!! $cate ->description_cate !!}
                      {{-- @endforeach --}}
                    </textarea>
                    
            </div>
        </div>   
        </div>
        
        @csrf
      {{-- </form> --}}
      <div class="card-footer">
        <a href="{{ URL::to('/admin/productcategory/list') }}"><button type="submit" class="btn btn-primary">Quay lại</button></a>
      </div>
    @endforeach
</div>

@endsection