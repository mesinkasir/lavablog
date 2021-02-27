    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
<div class="text-center p-3 p-md-5">
            <a class="align-items-center justify-content-center" href="/admin">
                     <i class="fab fa-laravel text-white fa-2x"></i>
            </a></div>
            <hr class="my-0 sidebar-divider">
            <li class="nav-item active p-1">
                <a class="nav-link" href="{{ route('admin.index') }}">
                  <i class="fas fa-home"></i>
                    <span>Home</span></a>
            </li>
            <hr class="sidebar-divider">
@if (Auth::user()->type == 'admin')
                <li class="nav-item active p-1">
                    <a class="nav-link" href="{{ route('admin.users') }}">
                 <i class="fab fa-leanpub"></i>
                        <span>Doc</span></a>
                </li>
            @endif
            <hr class="sidebar-divider">
            <li class="nav-item active p-1">
                <a class="nav-link" href="{{ route('admin.posts.index') }}">
                  <i class="fab fa-blogger-b"></i>
                    <span>Blogs</span></a>
            </li>            <hr class="sidebar-divider">
            <li class="nav-item active p-1">
                <a class="nav-link" href="https://www.hockeycomputindo.com/2010/12/blog-post.html">
               <i class="fas fa-code"></i>
                    <span>Source Code</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item active p-1">
                <a class="nav-link" href="{{ route('logout') }}">
                   <i class="fas fa-power-off"></i>
                    <span>Log Out</span></a>
            </li>
            <div class="text-center d-none d-md-inline">
                <button class="border-0 rounded-circle" id="sidebarToggle"></button>
            </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">