<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        {{ __('Menu') }}
    </div>

    <!-- home -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('home.index') }}">
        <i class="fas fa-home"></i>
        <span>Home</span></a>
    </li>


    <!-- Profile -->
    <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item active" href="profil"><i class="fa fa-history"></i><span>Experience</span></a>
                <a class="collapse-item active" href="profil"><i class="fas fa-graduation-cap"></i><span>Education</span></a>
                <a class="collapse-item active" href="profil"><i class="fas fa-laptop-code"></i><span>Profesional Skill</span></a>
                <a class="collapse-item active" href="profil"><i class="fa fa-language"></i><span>Languages</span></a>
            </div>
        </div>
    </li>

    <!-- Message -->
    <li class="nav-item">
        <a class="nav-link" href="/massa">
          <i class="far fa-comments"></i>
          <span>Message</span></a>
    </li>

    <!-- Admin -->
    <li class="nav-item">
      <a class="nav-link" href="/profile">
        <i class=" 	fas fa-user-tie"></i>
        <span>admin</span></a>
    </li>

    <!-- Link Footers -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route ('footers') }}">
        <i class="fas fa-link"></i>
        <span>Link Footers</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>

