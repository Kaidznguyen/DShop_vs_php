@extends('user.home')
@section('content')
    	<!-- start banner Area -->

	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Các mẫu mô hình mới <br>Trong bộ sưu tầm mới!</h1>
									<p>Hãy đặt hàng ngay bây giờ để nhận được nhiều ưu đãi của cửa hàng DShop.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Thêm vào giỏ hàng</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img" style="margin-top: 100px">
									<img class="img-fluid" style="" src="Upload/banner2.png" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content" style="margin-top: 150px">
									<h1>Các mẫu mô hình mới <br>Trong bộ sưu tầm mới!</h1>
									<p>Hãy đặt hàng ngay bây giờ để nhận được nhiều ưu đãi của cửa hàng DShop.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Thêm vào giỏ hàng</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img" style="margin-top: 50px;margin-left:50px">
									<img class="img-fluid" style="width:85%;height:75%" src="Upload/banner1.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="user/img/features/f-icon1.png" alt="">
						</div>
						<h6>Miễn phí giao hàng</h6>
						<p>Miễn phí giao hàng tất cả các đơn</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="user/img/features/f-icon2.png" alt="">
						</div>
						<h6>Chính sách đổi trả</h6>
						<p>Hoàn trả tất cả các đơn lỗi do shop</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="user/img/features/f-icon3.png" alt="">
						</div>
						<h6>Hỗ trợ 24/7</h6>
						<p>Hỗ trợ nhanh chóng</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="user/img/features/f-icon4.png" alt="">
						</div>
						<h6>Phương thức thanh toán</h6>
						<p>Đa dang các hình thức thanh toán</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Mô hình Hot</h1>
						</div>
					</div>
				</div>
				<div class="row" >
					<!-- single product -->
					@foreach ($figure as $x)
					<div class="col-lg-3 col-md-6" >
						<div class="single-product">
							<img class="img-fluid" src="/Upload/{{ $x->img }}" alt="" style="width: 250px;height: 250px;"> 
							<div class="product-details">
								<h6>{{$x->name}}</h6>
								<div class="price">
									<h6>{{ number_format($x->promotionprice) }} $</h6>
									<h6 class="l-through">{{ number_format($x->price) }} $</h6>
								</div>
								<div class="prd-bottom">

									<a onclick="AddCart({{$x->id}})" href="javascript:" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text" >Thêm vào giỏ</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Yêu thích</p>
									</a>
									
									<a href="{{ URL::to('/user/Detail/'.$x->id) }}" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">Xem thêm</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					
				</div>
			</div>
		</div>
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Phụ kiện anime</h1>
							
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					@foreach ($pk as $x)
						
					
					<div class="col-lg-3 col-md-6" >
						<div class="single-product">
							<img class="img-fluid" src="/Upload/{{ $x->img }}" alt="" style="width: 250px;height: 250px;"> 
							<div class="product-details">
								<h6>{{$x->name}}</h6>
								<div class="price">
									<h6>{{ number_format($x->price) }} $</h6>
									<h6 class="l-through">{{ number_format($x->promotionprice) }} $</h6>
								</div>
								<div class="prd-bottom">

									<a onclick="AddCart({{$x->id}})" href="javascript:" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">Thêm vào giỏ</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Yêu thích</p>
									</a>
									<!-- <a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a> -->
									<a href="{{ URL::to('/user/Detail/'.$x->id) }}" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">Xem thêm</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- end product Area -->

	<!-- Start exclusive deal Area -->
	<section class="exclusive-deal-area">
		<div class="container-fluid">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 no-padding exclusive-left">
					<div class="row clock_sec clockdiv" id="clockdiv">
						<div class="col-lg-12">
							<h1>MÔ HÌNH GIẢM GIÁ SHOCK!!!!</h1>
							<p>Hãy mua ngay bây giờ ^^. </p>
						</div>
						<div class="col-lg-12">
							<div class="row clock-wrap">
								<div class="col clockinner1 clockinner">
									<h1 class="days">150</h1>
									<span class="smalltext">Ngày</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="hours">23</h1>
									<span class="smalltext">Giờ</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="minutes">47</h1>
									<span class="smalltext">Phút</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="seconds">59</h1>
									<span class="smalltext">Giây</span>
								</div>
							</div>
						</div>
					</div>
					<a href="" class="primary-btn">Mua Ngay</a>
				</div>
				<div class="col-lg-6 no-padding exclusive-right">
					<div class="active-exclusive-product-slider">
						<!-- single exclusive carousel -->
						@foreach ($hot as $x)
						<div class="single-exclusive-slider">
							<img class="img-fluid" src="/Upload/{{ $x->img }}" alt="">
							<div class="product-details">
								<div class="price">
									<h6>{{ number_format($x->promotionprice) }} $</h6>
									<h6 class="l-through">{{ number_format($x->price) }} $</h6>
								</div>
								<a href="{{ URL::to('/user/Detail/'.$x->id) }}" style="text-decoration: none"><h4>{{$x->name}}</h4></a>
								<div class="add-bag d-flex align-items-center justify-content-center">
									<a class="add-btn" onclick="AddCart({{$x->id}})"  href="javascript:"><span class="ti-bag"></span></a>
									<span class="add-text text-uppercase">Thêm vào giỏ</span>
								</div>
							</div>
						</div>
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End exclusive deal Area -->

	<!-- Start brand Area -->
	<section class="brand-area section_gap">
		<div class="container">
			<div class="row">
				@foreach ($brand as $x)
				<a class="col " href="#">
					<img class="img-fluid-new d-block mx-auto" src="/Upload/{{ $x->img_brand }}" alt="">
				</a>
				@endforeach
				
				
			</div>
		</div>
	</section>
	<!-- End brand Area -->

@endsection
