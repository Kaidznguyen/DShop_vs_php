@extends('admin.layout')
@section('content') 

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Sửa Bài Viết</h1>
  @foreach ($edit as $cate)

    <form method="post" action="{{ URL::to('/admin/post/update'.$cate ->id)  }}" enctype="multipart/form-data">
      
        <div class="card-body">

          <div class="form-group" style="display:flex;">
            <div class="col-md-3">
              <div class="form-group">
                  <label for="menu">Tên Bài Viết</label>
                  <input type="text" name="title"  class="form-control" value="{{$cate->title}}">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="menu">Ảnh</label>
                <input type="file" name="img" class="form-control" id="upload">          
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                  <label for="menu">Tác Giả</label>
                  <input type="text" name="author"  class="form-control" value="{{$cate->author}}">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                  <label>Loại Bài viết</label>
                  <select class="form-control" name="post_category_id">
                    @foreach($post_category as $key => $x)
                    @if($x->id_cate == $cate->post_category_id)
                        
                      <option selected value="{{ $x->id_cate }}">{{ $x->name_cate }}</option>

                          @else
                            
                          <option value="{{ $x->id_cate }}">{{ $x->name_cate }}</option>
                          
                          @endif
                    @endforeach
                  </select>
              </div>
            </div>
          </div>
  


        </div>
        <div class="card-body">

            <div class="form-group" style="display:flex;">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Mô tả</label>
                    <br/>
                    <textarea type="text" id="des" name="description" class="form-control"  cols="100%" >
                        {{ $cate->description }}

                    </textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="menu">Nội dung</label>
                  <br/>
                  <textarea type="text" id="cont" name="content" class="form-control"  cols="100%" >
                    {{ $cate->content }}
                </textarea>          
                </div>
              </div>
      
            </div>
    
  
  
          </div>

        
        
        <div class="form-group" style="margin-top:50px;text-align:center">

          <button type="submit"  class="btn btn-primary">Sửa bài viết</button>
        </div>
        @csrf
    </form>
    @endforeach
</div>
@endsection