<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin') }}" class="brand-link"> {{--  --}}
        <img src="{{ asset('public/assets/images/logo.png') }}{{-- {{ asset(Setting::getValue('app_logo')) }} --}}" alt="PR OverTheTop"
            class="brand-image img-circle elevation-3 mr-5" style="opacity: .8">
        <span class="brand-text font-weight-light">PR</span>
    </a>

    <!-- Sidebar -->
    <div style="font-size: 18px" class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-legacy nav-compact"
                data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('admin') }}" class="nav-link {{ request()->routeIs('admin') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                {{-- start navbar for super admin --}}

                    <li style="font-size: 20px" class="nav-header ml-2 text-danger">ACCESS</li>
                    <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="nav-link {{ request()->routeIs('user.index') ? 'active':'' }}">
                            <i class="fas fa-user nav-icon"></i>
                            <p>Users</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('role.index') }}" class="nav-link {{ request()->routeIs('role.index') ? 'active':'' }}">
                            <i class="fas fa-user-cog nav-icon"></i>
                            <p>Role</p>
                        </a>
                    </li>



                    <li class="nav-item">
                        <a href="{{ route('permission.index') }}" class="nav-link {{ request()->routeIs('permission.index') ? 'active':'' }}">
                            <i class="fas fa-unlock nav-icon"></i>
                            <p>Permission</p>
                        </a>
                    </li>

                <hr>


                <li style="font-size: 18px" class="nav-header ml-2 text-danger">Publishers </li>
                <li class="nav-item menu-is-opening menu-open">
                    <a href="#" class="nav-link">
                        <svg class="svg-inline--fa fa-arrow-right fa-w-14" style="color: yellow;width: 30ps;height: 22px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg>
                        <p>
                             All Publishers
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <input type="hidden" name="project_id" value="">
                                <i class="fa fa-list nav-icon"></i>
                                <p>All Publishers Sites</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Add Publisher Site</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <hr>


        </nav>
        <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
</aside>
