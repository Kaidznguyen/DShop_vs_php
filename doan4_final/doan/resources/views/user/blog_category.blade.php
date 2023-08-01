@extends('user.home')
@section('content')
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Trang bài viết</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Bài viết</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Blog Categorie Area =================-->
{{-- <section class="blog_categorie_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" ng-repeat="x in listpostcate">
                <div class="categories_post">
                    <img src="/Upload/" alt="post" style="height: 300px;width: 500px;">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="blog.html">
                                <h5>ten</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>mô tả</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> --}}
<!--================Blog Categorie Area =================-->

<!--================Blog Area =================-->
<section class="blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_left_sidebar">
                    @foreach ($all as $x)
                    <article class="row blog_item">
                        <div class="col-md-3" >
                            <div class="blog_info text-right">
                                
                                <ul class="blog_meta list">
                                    <li><a href="#">{{$x->author}}<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">{{$x->created_at }}<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">06 Bình luận<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="/Upload/{{$x->img}}" alt="">
                                <div class="blog_details">
                                    <a href="single-blog.html">
                                        <h2>{{$x->title}}</h2>
                                    </a>
                                    <p>{!!$x->description!!}</p>
                                    <a href="{{ URL::to('/user/blog_detail/'.$x->id) }}" class="white_bg_btn">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                    

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-left"></span>
                                    </span>
                                </a>
                            </li>
                            <li class="page-item"><a href="#" class="page-link">01</a></li>
                            <li class="page-item active"><a href="#" class="page-link">02</a></li>
                            <li class="page-item"><a href="#" class="page-link">03</a></li>
                            <li class="page-item"><a href="#" class="page-link">04</a></li>
                            <li class="page-item"><a href="#" class="page-link">09</a></li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-right"></span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">

                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Danh mục bài viết</h4>
                        <ul class="list cat-list">
                            <li>
                                <a href="{{ URL::to('/user/blog_item') }}" class="d-flex justify-content-between">
                                    <p>Tất cả</p>
                                    {{-- <p>37</p> --}}
                                </a>
                            </li>
                            @foreach ($cate as $x)
                            <li>
                                <a href="{{ URL::to('/user/category_blog_item/'.$x->id_cate) }}" class="d-flex justify-content-between">
                                    <p>{{$x->name_cate}}</p>
                                    {{-- <p>37</p> --}}
                                </a>
                            </li>
                            @endforeach
                           

                        </ul>
                        <div class="br"></div>
                    </aside>
                     {{-- <aside class="single-sidebar-widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>
                        <p>
                            Here, I focus on a range of items and features that we use in life without
                            giving them a second thought.
                        </p>
                        <div class="form-group d-flex flex-row">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                            </div>
                            <a href="#" class="bbtns">Subcribe</a>
                        </div>
                        <p class="text-bottom">You can unsubscribe at any time</p>
                        <div class="br"></div>
                    </aside>  --}}
                    {{-- <aside class="single-sidebar-widget tag_cloud_widget">
                        <h4 class="widget_title">Tag Clouds</h4>
                        <ul class="list">
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Art</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Adventure</a></li>
                        </ul>
                    </aside>  --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!--========
@endsection