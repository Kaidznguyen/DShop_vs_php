@extends('admin.layout')
@section('content') 

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Sửa Mô Hình</h1>
  @foreach ($edit as $cate)
    <form method="post" action="{{ URL::to('/admin/product/update'.$cate ->id) }}" enctype="multipart/form-data">
      
        <div class="card-body">
          <div class="form-group" style="display:flex;">
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Tên Mô Hình</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Tên Sản Phẩm" value="{{ $cate ->name}}">
            </div>
            <div class="form-group col-6">
              <label for="menu">Ảnh Mô Hình</label>
              <input type="file" name="img" class="form-control" id="upload">
            </div>
          </div>
          <div class="form-group" style="display:flex;">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="menu">Giá</label>
                  <input type="number" name="price"  class="form-control" value="{{ $cate ->price}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <label for="menu">Giá Khuyến Mại</label>
                  <input type="number" name="promotionprice"   class="form-control" value="{{ $cate ->promotionprice}}">
              </div>
            </div>
          </div>
  
          <div class="form-group" style="display:flex;">
            <div class="col-md-6">
              <div class="form-group">
                  <label>Nhà Cung Cấp</label>
                  <select class="form-control" name="product_brand">
                    @foreach($brand_product as $key => $category)
                          @if($category->id_brand == $cate->brand_id)
                          <option selected value="{{ $category->id_brand }}">{{ $category->name_brand }}</option>
                          @else
                          <option value="{{ $category->id_brand }}">{{ $category->name_brand }}</option>
                          @endif
                        @endforeach
                  </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <label>Loại Mô Hình</label>
                  <select class="form-control" name="product_cate">
                    @foreach($category_product as $key => $category)
                          @if($category->id_cate == $cate->figure_category_id)
                          <option selected value="{{ $category->id_cate }}">{{ $category->name_cate }}</option>
                          @else
                          <option value="{{ $category->id_cate }}">{{ $category->name_cate }}</option>
                          @endif
                        @endforeach
                  </select>
              </div>
            </div>
          </div>
          <div class="form-group" style="display:flex;">
            <div class="col-md-4">
              <div class="form-group">
                  <label>Mô Tả</label>
                  <input type="text" name="description" class="form-control" value="{{ $cate ->description}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                  <label>Số Lượng</label>
                  <input type="number" name="quantity" class="form-control" value="{{ $cate ->quantity}}">
              </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Bảo Hành</label>
                    <input type="number" name="warranty" class="form-control" value="{{ $cate ->warranty}}">
                </div>
              </div>
          </div>


          
        </div>
        
        
        <div class="form-group" style="margin-top:50px;text-align:center">
          <a href="{{ URL::to('/admin/product/list') }}"><button type="submit"  class="btn btn-primary">Quay Lại</button></a>
          <button type="submit"  class="btn btn-primary">Sửa Sản Phẩm</button>
        </div>
        @csrf
    </form>
    @endforeach

</div>
@endsection