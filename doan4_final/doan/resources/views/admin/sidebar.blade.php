<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dshop - Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/admin/showadmin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Trang chủ</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-table"></i>
            <span>Quản lý mô hình</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Các phần quản lý:</h6>
                <a class="collapse-item" href="{{ URL::to('/admin/productcategory/list') }}">Loại mô hình</a>
                <a class="collapse-item" href="{{ URL::to('/admin/product/list') }}">Mô hình</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-table"></i>
            <span>Quản lý bài viết</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Các phần quản lý:</h6>
                <a class="collapse-item" href="{{ URL::to('/admin/postcategory/list') }}">Loại bài viết</a>
                <a class="collapse-item" href="{{ URL::to('/admin/post/list') }}">Bài viết</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/admin/brand/list') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Quản lý nhà cung cấp</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/admin/user_login/list') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Quản lý tài khoản</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/admin/order/list') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Quản lý hóa đơn</span></a>
    </li>
</ul>