<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('images/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8; border-radius: 50%">
        <span class="brand-text font-weight-light">Amar Store</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('images/userImages/'.Auth::user()->image) }}" class="img-circle elevation-2" alt="Image !">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>  

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @if(Session::get('page') == 'home')
                    <?php $active = "active"; ?>
                @else
                    <?php $active = ""; ?>
                @endif
                <li class="nav-item">
                    <a href=" {{url('/')}} " class="nav-link {{ $active }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <!-- Catalogues -->
                @if(Session::get('page') == 'users' || Session::get('page') == 'profile' || Session::get('page') == 'changePass')
                    <?php $active = "active"; ?>
                @else
                    <?php $active = ""; ?>
                @endif
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link {{ $active }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if(Session::get('page') == "users")
                            <?php $active = "active"; ?>
                        @else
                            <?php $active = ""; ?>
                        @endif
                        <li class="nav-item active">
                            <a href="{{ url('/users') }}" class="nav-link {{ $active }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Users</p>
                            </a>
                        </li>

                        @if(Session::get('page') == "profile")
                            <?php $active = "active"; ?>
                        @else
                            <?php $active = ""; ?>
                        @endif
                        <li class="nav-item active">
                            <a href="{{ url('/profile') }}" class="nav-link {{ $active }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Your Profile</p>
                            </a>
                        </li>

                        @if(Session::get('page') == 'changePass')
                            <?php $active = "active"; ?>
                        @else
                            <?php $active = ""; ?>
                        @endif
                        <li class="nav-item">
                            <a href="{{ url('/change-pass') }}" class="nav-link {{ $active }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Change Password</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
