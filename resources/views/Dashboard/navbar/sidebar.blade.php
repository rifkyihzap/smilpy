<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/">
    <img src="img/smilpy.png" alt="Smilpy Logo" width="180" height="70" style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src=" " class="img-circle elevation-2" alt="Foto Profil">
        </div>
        <div class="info dropdown">
        <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a class="{{ Request::is('dashboard')? 'active' : '' }}" href="/dashboard">
                    <i class="bi bi-house-door"></i> 
                        Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="{{ Request::is('dashboard/mypost')? 'active' : '' }}" href="/mypost">
                    <i class="bi bi-file-post-fill"></i> 
                    My Posts
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