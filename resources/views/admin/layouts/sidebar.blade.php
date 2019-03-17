<ul class="sidebar-menu">
    <li class="header">MENU NAVIGATION</li>
    <li class="{{Request::is('admin') ? 'active' : '' }} treeview">
        <a href="{{ route('dashboard.index') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
    <li class="{{Request::is('admin/users*') ? 'active' : '' }} treeview">
        <a href="{{ route('users.index') }}">
            <i class="fa fa-user"></i> <span>Pengguna</span>
        </a>
    </li>
    <li class="{{Request::is('admin/menu') ? 'active' : '' }} treeview">
        <a href="#">
            <i class="fa fa-database"></i> <span>Menu</span>
        </a>
    </li>
</ul>


{{-- <li class="treeview">
    data-widget="tree"
    <a href="#">
        <i class="fa fa-share"></i> <span>Multilevel</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
        <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-circle-o"></i> Level Two
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
    </ul>
</li> --}}
