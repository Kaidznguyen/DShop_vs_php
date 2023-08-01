@extends('admin.layout')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Thêm tài khoản</h1>
            </div><!-- /.col -->
            
          </div>
        </div>
    </div>
      
    <form method="post" action="{{ URL::to('/admin/user_login/add') }}">
        <div class="form-group" style="display:flex;">
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Tên tài khoản</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
            <div class="form-group col-6">
              <label for="menu">Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
        </div>
        <div class="form-group" style="display:flex;">
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Mật khẩu</label>
                <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
            <div class="form-group col-6">
              <label for="menu">Role</label>
              <select class="form-control" name="role">
                
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
                
              </select>
            </div>
        </div>
        
        <div class="card-footer">
          <button type="submit" name="add" class="btn btn-primary">Thêm</button>
        </div>
        @csrf
      </form>
</div>

@endsection
