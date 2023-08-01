@extends('admin.layout')
@section('content') 

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Thêm Mô Hình</h1>
    <form method="post" action="{{ URL::to('/admin/product/add') }}" enctype="multipart/form-data">
      
        <div class="card-body">
          <div class="form-group" style="display:flex;">
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Tên Mô Hình</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Tên Sản Phẩm">
            </div>
            <div class="form-group col-6">
              <label for="menu">Ảnh Mô Hình</label>
              <input type="file" name="img" class="form-control" id="upload">
            </div>
          </div>
          <div class="form-group" style="display:flex;">
            <div class="col-md-3">
              <div class="form-group">
                  <label for="menu">Giá</label>
                  <input type="number" name="price"  class="form-control" >
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                  <label for="menu">Giá Khuyến Mại</label>
                  <input type="number" name="promotionprice"   class="form-control" >
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                  <label>Số Lượng</label>
                  <input type="number" name="quantity" class="form-control" >
              </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Bảo Hành</label>
                    <input type="number" name="warranty" class="form-control" >
                </div>
            </div>
          </div>
  
          <div class="form-group" style="display:flex;">
            <div class="col-md-6">
              <div class="form-group">
                  <label>Nhà Cung Cấp</label>
                  <select class="form-control" name="product_brand">
                    @foreach($brand_product as $key => $x)
                      <option value="{{ $x->id_brand }}">{{ $x->name_brand }}</option>
                    @endforeach
                  </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <label>Loại Mô Hình</label>
                  <select class="form-control" name="product_cate">
                    @foreach($category_product as $key => $x)
                      <option value="{{ $x->id_cate }}">{{ $x->name_cate }}</option>
                    @endforeach
                  </select>
              </div>
            </div>
          </div>
          {{-- <div class="form-group" style="display:flex;">

              </div>
          </div> --}}
          <center>
            <div class="card-body" >
            
              <div class="form-group" >
                  <div class="form-group col-10">
                      <label for="exampleInputPassword1">Mô Tả</label>
                      <br/>
                      <textarea type="text" id="des" name="description" class="form-control"  cols="100%" ></textarea>
              </div>
          </div>  
          </center>


          
        </div>
        
        
        <div class="form-group" style="margin-top:50px;text-align:center">

          <button type="submit"  class="btn btn-primary">Thêm Sản Phẩm</button>
        </div>
        @csrf
    </form>
</div>
@endsection