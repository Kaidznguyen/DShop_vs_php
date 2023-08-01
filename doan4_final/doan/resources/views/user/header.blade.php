<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ URL::to('/') }}"><img style="width:100px;height:80px" src="/Upload/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{ URL::to('/') }}">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ URL::to('/user/category_item') }}">Danh mục</a></li>

                        {{-- <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                             aria-expanded="false">Cửa hàng</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/user/category_item') }}">Danh mục</a></li>
                                <!-- <li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a></li> -->
                                <!-- <li class="nav-item"><a class="nav-link" href="checkout.html">Checkout</a></li> -->
                                {{-- <li class="nav-item"><a class="nav-link" href="{{ URL::to('/user/showcarts') }}">Giỏ hàng</a></li> --}}
                                {{-- <li class="nav-item"><a class="nav-link" href="">Đơn hàng</a></li> --}}
                                {{-- <li class="nav-item"><a class="nav-link" href="">Theo dõi đơn hàng</a></li> 
                            </ul>
                        </li> --}}
                        <li class="nav-item submenu dropdown">
                            <a href="{{ URL::to('/user/blog_item') }}" class="nav-link dropdown-toggle" >Bài viết</a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="">Liên hệ</a></li>
                        <?php
                        $id = Session::get('id_us');
                        $username = Session::get('username');
                        $role = Session::get('role');
                        
                        ?>
                        @if( Session::has('id_us') != null)
                        {{-- <li class="nav-item"><a class="nav-link" href="{{ URL::to('/user/logout') }}">Đăng xuất</a></li> --}}
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">{{$username}}</a>
                            <ul class="dropdown-menu">
                                @if( Session::has('role') && Session::get('role') == 'admin')
                                    <li class="nav-item"><a class="nav-link" href="{{ URL::to('/admin/showadmin') }}">Quản lý cửa hàng</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ URL::to('/user/logout') }}">Đăng xuất</a></li>
                                @else

                                    
                                    <li class="nav-item"><a class="nav-link" href="{{ URL::to('/order') }}">Đơn hàng</a></li>                               
                                    <li class="nav-item"><a class="nav-link" href="{{ URL::to('/user/logout') }}">Đăng xuất</a></li>
                                @endif
                            </ul>
                        </li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ URL::to('/user/showlogin') }}">Đăng nhập</a></li>
                            

                        @endif
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="{{ URL::to('/user/showcarts') }}" class="cart"><span class="ti-bag"></span></a></li>
                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between" action="{{ URL::to('/user/search') }}" method="post">
                @csrf
                <input type="text" class="form-control" id="search_input" name="keywords_submit" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>

</header>