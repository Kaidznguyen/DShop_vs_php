@extends('user.home')
@section('content')
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Trang danh mục</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Danh mục</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<div class="container" >
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">Danh mục sản phẩm</div>
                    <ul class="main-categories" >
						<li class="main-nav-list"><a href="{{ URL::to('/user/category_item') }}">Tất cả sản phẩm</a></li>

                    @foreach ($cate as $x)
						<li class="main-nav-list"><a href="{{ URL::to('/user/category_item/'.$x->id_cate) }}">{{$x->name_cate}}</a></li>
                    @endforeach
					</ul>

					<div class="head">Thương hiệu mô hình</div>
                    
					<ul class="main-categories" >

                    @foreach ($brand as $x)

						<li class="main-nav-list"><a href="{{ URL::to('/user/category_item/'.$x->id_brand) }}">{{$x->name_brand}}</a></li>
                    @endforeach
					</ul>

				</div>
				<div class="sidebar-filter mt-50">
					<div class="common-filter">
						<div class="head">Lọc theo giá</div>
						<form action="{{URL::to('/user/category_item_by_price')}}" method="get" onsubmit="updateMinMaxValues()">
							<div class="price-range-area">
								<div id="price-range"></div>
								<div class="value-wrapper d-flex">
									<div class="price">Giá:</div>
									<span>$</span>
									<div id="lower-value"></div>
									<div class="to">đến</div>
									<span>$</span>
									<div id="upper-value"></div>
									<input type="hidden" name="min" id="min">
									<input type="hidden" name="max" id="max">

								</div>
								<div>
									<input class="btn" type="submit" value="Lọc sản phẩm">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7" >
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					
					<div class="pagination">
						{{ $all->links('pagination::bootstrap-4') }}
					</div>
				</div>
				

				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
                        @foreach ($all as $x)
                            						<!-- single product -->
						<div class="col-lg-4 col-md-6" ng-repeat="x in mhbydanhmuc">
							<div class="single-product" >
								<img class="img-fluid" src="/Upload/{{$x->img}}" alt="" style="width: 250px;height: 250px;">
								<div class="product-details">
									<h6>{{$x->name}}</h6>
									<div class="price">
										<h6>{{ number_format($x->promotionprice) }} $</h6>
										<h6 class="l-through">{{ number_format($x->price) }} $</h6>
									</div>
									<div class="prd-bottom">

										<a href="javascript:" onclick="AddCart({{$x->id}})" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">Thêm vào giỏ</p>
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
				</section>
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				{{-- <div class="filter-bar d-flex flex-wrap align-items-center"> --}}
					{{-- <div class="sorting mr-auto">
						<select>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
						</select>
					</div> --}}
				
					
				{{-- </div> --}}
				<!-- End Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					
					<div class="pagination">
						{{ $all->links('pagination::bootstrap-4') }}
					</div>
				</div> 	

			</div>
		</div>
	</div>

@endsection