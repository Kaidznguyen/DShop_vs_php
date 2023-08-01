@extends('user.home')
@section('content')
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h3>{{$detail->name}}</h3>
					<nav class="d-flex align-items-center">
						<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Danh mục cửa hàng<span class="lnr lnr-arrow-right"></span></a>
						<a href="single-product.html">{{$detail->name}}</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="">
						<div>
							<img style="width:650px;height:500px" class="img-fluid" src="/Upload/{{ $detail->img }}">
						</div>
						<!-- <div class="single-prd-item">
							<img class="img-fluid" src="img/category/s-p1.jpg" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="img/category/s-p1.jpg" alt="">
						</div> -->
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>{{$detail->name}}</h3>
						<h2 name="price">{{ number_format($detail->promotionprice) }} $</h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Danh mục</span> : {{$detail->name_cate}}</a></li>
                            <li><a class="active" href="#"><span>Hãng</span> : {{$detail->name_brand}}</a></li>
							<li><a href="#"><span>Tình trạng</span> : Còn hàng</a></li>
						</ul>
						<p><i></i></p>
						
							
							{{-- <div class="product_count">
								<label for="qty">Số lượng:</label>
								<input type="text" name="quantity" id="sst" value="1" title="Quantity:" class="input-text qty">
								
								 <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
								 class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
								<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 1 ) result.value--;return false;"
								 class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button> 
							</div> --}}
							<div class="card_area d-flex align-items-center">
								{{-- <input type="hidden" name="pro_hidden"  value="{{$detail->id}}" class="input-text qty"> --}}

								<a style="border:none" class="primary-btn" href="javascript:" onclick="AddCart({{$detail->id}})" >Thêm vào giỏ hàng</a>
								<a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
								<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
							</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mô tả</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
					 aria-selected="false">Bình luận</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
					 aria-selected="false">Đánh giá</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p>{!!$detail->description!!}</p>
				</div>

				<div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="comment_list">

								
   								 @foreach($comment as $cmt)

								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="/user/img/product/review-1.png" alt="">
										</div>
										<div class="media-body">
											<h4 style="text-transform: capitalize;">{{$cmt->name_com}}</h4>
										
											<h5 >{{ $cmt->created_at}}</h5>
											<a class="reply_btn" href="#">Reply</a>
										</div>
									</div>
									<p style="text-transform: capitalize;">{{$cmt->comment_mes}}</p>
								</div>
								@endforeach
							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<?php
								
								$username = Session::get('username');
								
								
								?>
								<h4>Đăng bình luận</h4>
								<?php
										$id = Session::get('id_us');
		
										?>
										@if(Session::has('id_us') != null)
										<form class="row contact_form" action="{{ URL::to('/user/Detail/'.$detail->id) }}" method="post" id="contactForm" novalidate="novalidate">
											@csrf
											<div class="col-md-12">
												<div class="form-group">
													<input type="hidden" class="form-control" id="fullname" name="name_com" value="{{$username}}" placeholder="Điền tên của bạn">
												</div>
											</div>
											{{-- <div class="col-md-12">
												<div class="form-group">
													<input type="email" class="form-control" id="email" name="email" placeholder="Địa chỉ email">
												</div>
											</div> --}}
											<div class="col-md-12">
												<div class="form-group">
													<textarea class="form-control" name="comment_mes" id="message" rows="1" placeholder="Bình luận"></textarea>
												</div>
											</div>
											<div class="col-md-12 text-right">
												
												<button type="submit" value="submit" id="postcomment" data-id="{{$detail->id}}" class="btn primary-btn">Đăng bình luận</button>
											</div>
										</form>
										@else
										<form class="row contact_form"   id="contactForm" novalidate="novalidate">
											@csrf
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" id="fullname" name="name_com" placeholder="Điền tên của bạn">
												</div>
											</div>
											{{-- <div class="col-md-12">
												<div class="form-group">
													<input type="email" class="form-control" id="email" name="email" placeholder="Địa chỉ email">
												</div>
											</div> --}}
											<div class="col-md-12">
												<div class="form-group">
													<textarea class="form-control" name="comment_mes" id="message" rows="1" placeholder="Bình luận"></textarea>
												</div>
											</div>
											<div class="col-md-12 text-right">
												
												<button class="btn primary-btn"><a style="text-decoration:none;color:#777777" href="{{ URL::to('/user/showlogin') }}">Đăng bình luận</a></button>
											</div>
										</form>
										@endif
								{{-- <form class="row contact_form" action="{{ URL::to('/user/Detail/'.$detail->id) }}" method="post" id="contactForm" novalidate="novalidate">
									@csrf
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="fullname" name="name_com" placeholder="Điền tên của bạn">
										</div>
									</div>

									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="comment_mes" id="message" rows="1" placeholder="Bình luận"></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										
										<button type="submit" value="submit" id="postcomment" data-id="{{$detail->id}}" class="btn primary-btn">Đăng bình luận</button>
									</div>
								</form> --}}
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane " id="review" role="tabpanel" aria-labelledby="review-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="row total_rate">
								<div class="col-6">
									<div class="box_total">
										<h5>Tổng điểm</h5>
										<h4>4.0</h4>
										<h6>(03 đánh giá)</h6>
									</div>
								</div>
								<div class="col-6">
									<div class="rating_list">
										<h3>Dựa trên đánh giá</h3>
										<ul class="list">
											<li><a href="#">5 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">4 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">3 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">2 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">1 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="review_list">
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-1.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-2.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-3.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Thêm đánh giá</h4>
								<p>Đánh giá của bạn:</p>
								<ul class="list">
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
								</ul>
								<p>Nổi bật</p>
								<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Your Full name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tên của bạn'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Địa chỉ email'">
										</div>
									</div>
								
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Review" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Đánh giá'"></textarea></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="primary-btn">Đăng đánh giá</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection