<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ get_data_user('admins','name')}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Bảng tin</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-circle-o"></i> Bảng tin</a></li>
                    <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li>

            <li class="{{ request()->is('admin/category*') ? 'active' : '' }}">
                <a href="{{route('admin.category.index')}}">
                    <i class="fa fa-table "></i> <span>Danh mục</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li class="{{ request()->is('admin/product*') ? 'active' : '' }}">
                <a href="{{route('admin.product.index')}}">
                    <i class="fa fa-product-hunt"></i> <span>Sản phẩm</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            <li class="{{ request()->is('admin/unit*') ? 'active' : '' }}">
                <a href="{{route('admin.unit.index')}}">
                    <i class="fa fa-balance-scale"></i> <span>Đơn vị</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>

            <li class="treeview {{ request()->is('admin/post*') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-newspaper-o"></i> <span>Bài viết</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ request()->is('admin/post/category*') ? 'active' : '' }}"><a
                            href="{{route('admin.postcate.index')}}"><i class="fa fa-circle-o"></i> Danh mục</a></li>
                    <li class="{{ request()->is('admin/post') ? 'active' : '' }}"><a
                            href="{{route('admin.post.index')}}"><i class="fa fa-circle-o"></i> Bài viêt</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cart-arrow-down"></i> <span> Đơn hàng</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-circle-o"></i> Chờ xác nhận</a></li>
                    <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Đã huỷ</a></li>
                </ul>
            </li>


            <li class="{{ request()->is('admin/coupon*') ? 'active' : '' }}">
                <a href="{{route('admin.coupon.index')}}">
                    <i class="fa fa-tags"></i> <span> Mã giảm giá</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>

            <li class="{{ request()->is('admin/slider*') ? 'active' : '' }}">
                <a href="{{route('admin.slider.index')}}">
                    <i class="fa fa-calendar"></i> <span> Slider</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>

            <li class="{{ request()->is('admin/user*') ? 'active' : '' }}">
                <a href="{{route('admin.unit.index')}}">
                    <i class="fa fa-users"></i> <span> Khách hàng</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>

            <li class="{{ request()->is('admin/unit*') ? 'active' : '' }}">
                <a href="{{route('admin.unit.index')}}">
                    <i class="fa fa-comments"></i> <span> Bình luận</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>

            <li class="{{ request()->is('admin/contact*') ? 'active' : '' }}">
                <a href="{{route('admin.contact.index')}}">
                    <i class="fa fa-id-card"></i> <span> Phản hồi</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>

            {{--            <li>--}}
            {{--                <a href="{{route('admin.setting.index')}}">--}}
            {{--                    <i class="fa fa-cogs"></i> <span> Cài đặt chung</span>--}}
            {{--                    <span class="pull-right-container">--}}
            {{--            </span>--}}
            {{--                </a>--}}
            {{--            </li>--}}

            <li class="treeview {{ request()->is('admin/setting*') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-cogs"></i> <span> Cài đặt</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ request()->is('admin/setting/admin') ? 'active' : '' }}"><a
                            href="{{route('admin.setting.admin')}}"><i class="fa fa-circle-o"></i> Quản trị viên</a>
                    </li>
                    <li class="{{ request()->is('admin/setting*') ? 'active' : '' }}"><a
                            href="{{route('admin.setting.website')}}"><i class="fa fa-circle-o"></i> Cài đặt hệ
                            thống</a></li>
                </ul>
            </li>

            <li>
                <a href="{{route('admin.logout')}}">
                    <i class="fa fa-sign-out"></i> <span> Đăng xuất</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>

            <li>
                <a href="../mailbox/mailbox.html">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
                </a>
            </li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
