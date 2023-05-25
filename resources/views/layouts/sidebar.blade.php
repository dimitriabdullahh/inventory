        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-white elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="brand-link">
                <img src="{{asset('AdminLTE/dist')}}/img/Group 1.png" alt="Group Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-heavy text-dark">Sahabat Tani</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="{{ route('pegawai.index') }}" class="nav-link active">
                                <i class="nav-icon fas fa-user-alt"></i>
                                <p>Pegawai</p>
                            </a>
                            <a href="{{ route ('kategori.index') }}" class="nav-link active">
                                <i class="nav-icon fas fa-cubes"></i>
                                <p>
                                    Kategori
                                </p>
                            </a>
                            <a href="{{ route('pemasok.index') }}" class="nav-link active">
                                <i class="nav-icon fas fa-truck"></i>
                                <p>Pemasok</p>
                            </a>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>