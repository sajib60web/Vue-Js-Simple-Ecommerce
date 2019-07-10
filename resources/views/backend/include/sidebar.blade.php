<div id="sidebar-wrapper" class="bg-theme bg-theme2" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{ asset('/backend') }}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            <h5 class="logo-text">Bulona Admin</h5>
        </a>
    </div>
    <div class="user-details">
        <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
            <div class="avatar"><img class="mr-3 side-user-img" src="{{ asset('/backend') }}/assets/images/avatars/avatar-13.png" alt="user avatar"></div>
            <div class="media-body">
                <h6 class="side-user-name">Mark Jhonsan</h6>
            </div>
        </div>
        <div id="user-dropdown" class="collapse">
            <ul class="user-setting-menu">
                <li><a href="javaScript:void();"><i class="icon-user"></i> My Profile</a></li>
                <li><a href="javaScript:void();"><i class="icon-settings"></i> Setting</a></li>
                <li><a href="javaScript:void();"><i class="icon-power"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li class="{{ Request::is('home')?'active':'' }}">
            <a href="{{ url('home') }}" class="waves-effect">
                <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="{{ Request::is('main-category/manage')?'active':'' }}">
            <a href="{{ url('main-category/manage') }}" class="waves-effect">
                <i class="zmdi zmdi-widgets"></i> <span>Main Category</span>
            </a>
        </li>

        <li class="{{ Request::is('sub-category/manage')?'active':'' }}">
            <a href="{{ url('sub-category/manage') }}" class="waves-effect">
                <i class="zmdi zmdi-widgets"></i> <span>Sub Category</span>
            </a>
        </li>

        <li class="{{ Request::is('brand/manage')?'active':'' }}">
            <a href="{{ url('brand/manage') }}" class="waves-effect">
                <i class="zmdi zmdi-widgets"></i> <span>Brand</span>
            </a>
        </li>

        <li class="{{ Request::is('product/manage')?'active':'' }}">
            <a href="{{ url('product/manage') }}" class="waves-effect">
                <i class="zmdi zmdi-widgets"></i> <span>Product</span>
            </a>
        </li>

    </ul>
</div>
