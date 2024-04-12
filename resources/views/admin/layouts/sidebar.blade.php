<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Web Gallery Foto</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            {{--  --}}
            <li class="dropdown active">
              <a href="/admin/daftar" class="nav-link nav-link-1 {{Request::is('admin/daftar')? 'active' : '' }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
     
              <a href="/admin/foto" class="nav-link nav-link-2 {{Request::is('admin/foto')? 'active' : '' }}" ><i class="fas fa-columns"></i> <span>Data Foto</span></a> 

              <a href="/admin/kategori" class="nav-link nav-link-2 {{Request::is('admin/kategori')? 'active' : '' }}" ><i class="fas fa-columns"></i> <span>Kategori</span></a> 
  
          </ul>
        </aside>
      </div>