<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU NAVIGATION</li>
    <li class="{{Request::is('admin') ? 'active' : '' }}">
        <a href="{{ route('dashboard.index') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
    <li class="{{Request::is('admin/users*') ? 'active' : '' }}">
        <a href="{{ route('users.index') }}">
            <i class="fa fa-user"></i> <span>Pengguna</span>
        </a>
    </li>
    <li class="{{Request::is('admin/menu*') ? 'active' : '' }}">
        <a href="{{ route('menu.index') }}">
            <i class="fa fa-database"></i> <span>Menu</span>
        </a>
    </li>
    <li class="treeview
        {{Request::is('admin') || Request::is('admin/users*') || Request::is('admin/menu*')  ? '' : 'active' }} ">
        <a href="#">
            <i class="fa fa-list"></i> <span> Content</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{Request::is('admin/home*') ? 'active' : '' }}">
                <a href="{{ route('home.index') }}">
                    <i class="fa fa-home"></i> <span> Home</span>
                </a>
            </li>
            <li class="{{Request::is('admin/aboutus*') ? 'active' : '' }}">
                <a href="{{ route('aboutus.index') }}">
                    <i class="fa fa-history"></i> <span> Tentang Kami</span>
                </a>
            </li>
            <li class="treeview {{ Request::is('admin/visi*') || Request::is('admin/misi*')  ? 'active' : '' }}">
                <a href="#"><i class="fa fa-bar-chart"></i> Visi & Misi
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{Request::is('admin/visi*') ? 'active' : '' }}">
                        <a href="{{ route('visi.index') }}"><i class="fa fa-clone"></i> Visi</a>
                    </li>
                    <li class="{{ Request::is('admin/misi*') ? 'active' : '' }}">
                        <a href="{{ route('misi.index') }}"><i class="fa fa-clone"></i> Misi</a>
                    </li>
                </ul>
            </li>
            <li class="{{Request::is('admin/product*') ? 'active' : '' }}">
                <a href="{{ route('aboutus.index') }}">
                    <i class="fa fa-product-hunt"></i> <span> Product</span>
                </a>
            </li>
            <li class="{{Request::is('admin/notice*') ? 'active' : '' }}">
                <a href="{{ route('aboutus.index') }}">
                    <i class="fa fa-list-alt"></i> <span> Pengumuman</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
            <a href="#">
                <i class="fa fa-photo"></i> <span>Galeri</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-file-image-o"></i> Foto</a></li>
                <li><a href="#"><i class="fa fa-file-movie-o"></i> Video</a></li>
            </ul>
    </li>
    <li class="{{Request::is('admin/notice*') ? 'active' : '' }}">
        <a href="{{ route('aboutus.index') }}">
            <i class="fa fa-address-card"></i> <span> Kontak Kami</span>
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
