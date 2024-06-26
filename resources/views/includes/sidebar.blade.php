<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
id="accordionSidebar">
<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
<div class="sidebar-brand-icon rotate-n-15">
<i class="fas fa-coffee"></i>
</div>
<div class="sidebar-brand-text mx-3">CAFEOURE</div>
</a>
<!-- Divider -->
<hr class="sidebar-divider my-0">
<!-- Nav Item - Dashboard -->
<li class="nav-item active">
<a class="nav-link" href="/dashboard">
<i class="fas fa-fw fa-home"></i>
<span>Dashboard</span></a>
</li>
<!-- Divider -->

@if($showmenuAdmin)
<hr class="sidebar-divider">
<li class="nav-item active">
<a class="nav-link" href="/pelanggan">
<i class="fas fa-fw fa-users"></i>
<span>Pelanggan</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider my-0">
<!-- Nav Item - Dashboard -->
<li class="nav-item active">
<a class="nav-link" href="/menu">
<i class="fas fa-fw fa-hamburger"></i>
<span>Menu</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider my-0">
<!-- Nav Item - Dashboard -->
<li class="nav-item active">
<a class="nav-link" href="/kategori">
<i class="fas fa-fw fa-utensils"></i>
<span>Kategori</span></a>
@endif

</li>
<hr class="sidebar-divider my-0">
<li class="nav-item active">
    <div class="nav-item active" aria-labelledby="navbarDropdown">
        <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
    
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li>
</ul>
