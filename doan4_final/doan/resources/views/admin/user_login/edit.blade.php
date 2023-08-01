@extends('admin.layout')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Sửa tài khoản</h1>
            </div><!-- /.col -->
            
          </div>
        </div>
    </div>
    @foreach ($edit as $x)
    <form method="post" action="{{ URL::to('/admin/user_login/update'.$x ->id_us) }}">
      
        <div class="form-group" style="display:flex;">
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Tên tài khoản</label>
                <input type="text" name="username" class="form-control" value="{{ $x ->username}}" id="exampleInputEmail1" placeholder="">
            </div>
            <div class="form-group col-6">
              <label for="menu">Email</label>
              <input type="email" name="email" class="form-control" value="{{ $x ->email}}"  id="exampleInputEmail1" placeholder="">
            </div>
        </div>
        <div class="form-group" style="display:flex;">
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Mật khẩu</label>
                <input type="password" name="password" value="{{ $x ->password}}"  class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
            <div class="form-group col-6">
              <label for="menu">Role</label>
              
              <select class="form-control" id="select_id" value="{{ $x ->role}}"  name="role">
                    @if ($x->role == 'admin')
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                     @else
                     <option value="user">User</option>
                     <option value="admin">Admin</option>

                    @endif
                
              </select>
            </div>
        </div>
        @endforeach

        
        <div class="card-footer">
          <button type="submit"  class="btn btn-primary">Sửa</button>
        </div>
        @csrf
      </form>
</div>

@endsection
