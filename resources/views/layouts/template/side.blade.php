<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        @if(Auth::user()->level == 'superadmin')
          <img src="{{url('adminlte/dist/img/ava.jpg')}}" class="img-circle" alt="User Image">
        @else
          <img src="{{url('adminlte/dist/img/adminltelogo.png')}}" class="img-circle" alt="User Image">
        @endif
        </div>
        <div class="pull-left info">
        @if(Auth::user()->level == 'superadmin')
          <p>SuperAdmin</p>
        @else
          <p>Admin</p>
        @endif

          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        
        </div>
      </div>
      
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

      <li><a href="/admin"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Master Data</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @if(Auth::user()->level == 'superadmin')
            <li><a href="/admin/akun"><i class="fa fa-circle-o"></i> Data Admin</a></li>
            @endif
            <li><a href="/admin/anggota"><i class="fa fa-circle-o"></i> Data Anggota</a></li>
            <li><a href="/admin/pengurus"><i class="fa fa-circle-o"></i> Data Pengurus</a></li>
            <li><a href="/admin/alumni"><i class="fa fa-circle-o"></i> Data Alumni</a></li>
            <pengurus></pengurus></li>
          </ul>
        </li>

        <li><a href="/admin/kegiatan"><i class="fa fa-calendar"></i> <span>Kegiatan</span></a></li>
        <li><a href="/admin/prestasi"><i class="fa fa-trophy"></i> <span>Prestasi</span></a></li>
        <li><a href="/admin/tentang"><i class="fa fa-info"></i> <span>Tentang</span></a></li>
<!-- 
        <li><a href="/admin/laporan"><i class="fa fa-info" aria-hidden="true"></i> <span>Laporan</span></a></li> -->

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>