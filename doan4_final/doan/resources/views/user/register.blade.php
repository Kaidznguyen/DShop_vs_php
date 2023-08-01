@extends('user.home')
@section('content')
<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Đăng ký</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Đăng ký</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>Có gì mới ở trang web DShop của chúng tôi?</h4>
							<p>Chung tôi luôn luôn thay đổi mỗi ngày để làm mới bản thân</p>
							<a class="primary-btn" href="{{ URL::to('/user/showlogin') }}">Đăng nhập để mua hàng ngay thôi!</a>
						</div>
					</div>
				</div>
                
				<div class="col-lg-6">
                   
					<div class="login_form_inner">
						<h3>Đăng ký</h3>
						<form action="/user/register" method="Post" class="row login_form" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="col-md-12 form-group">
								<input type="email" required class="form-control"  name="username" placeholder="Nhập Username">
							</div>
							<div class="col-md-12 form-group">
								<input type="email" required class="form-control"  name="email" placeholder="Nhập Email">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" required class="form-control"  name="password" placeholder="Nhập Password">
							</div>
                            <div class="col-md-12 form-group">
								<input type="hidden" required class="form-control" value="user"  name="role" placeholder="Nhập Password">
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Đăng ký</button>
								{{-- <a href="#">Forgot Password?</a> --}}
							</div>
						</form>
					</div>
               
				</div>
                
			</div>
		</div>
	</section>
@endsection