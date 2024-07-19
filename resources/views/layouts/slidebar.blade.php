<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route ('profile') }}">
      <div class="sidebar-brand-icon">
        <i class="fas fa-user-secret"></i>
      </div>
      <div class="sidebar-brand-text mx-3">SB Admin <br><sup> {{ auth()->user()->name }}</sup></div>
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
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#Home" aria-expanded="true"
            aria-controls="Home">
            <i class="fas fa-house-user"></i>
            <span>Home</span>
        </a>
        <div id="Home" class="collapse" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item active" href="{{ route ('home.index') }}"><i class="fas fa-spell-check"></i><span>&ensp;Content</span></a>
                <a class="collapse-item active" href="{{ route ('social_media.index') }}"><i class="fas fa-icons"></i><span>&ensp;Link Social Media</span></a>
            </div>
        </div>
    </li>


    <!-- Profile -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#Profile" aria-expanded="true"
            aria-controls="Profile">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span>
        </a>
        <div id="Profile" class="collapse" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item active" href="{{ route ('text_profiles.index') }}"><i class="fas fa-spell-check"></i><span>&ensp;Title</span></a>
                <a class="collapse-item active" href="{{ route ('experiences') }}"><i class="fa fa-briefcase"></i><span>&ensp;Experience</span></a>
                <a class="collapse-item active" href="{{ route('education') }}"><i class="fas fa-graduation-cap"></i><span>&ensp;Education</span></a>
                <a class="collapse-item active" href="{{ route ('skills') }}"><i class="fas fa-laptop-code"></i><span>&ensp;Profesional Skill</span></a>
                <a class="collapse-item active" href="{{ route ('languages') }}"><i class="fa fa-language"></i><span>&ensp;Languages</span></a>
            </div>
        </div>
    </li>


    <!-- Project -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#Project" aria-expanded="true"
            aria-controls="Project">
            <i class=" 	fas fa-laptop-house"></i>
            <span>Project</span>
        </a>
        <div id="Project" class="collapse" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item active" href="{{ route ('title_project') }}"><i class="fas fa-spell-check"></i><span>&ensp;Title</span></a>
                <a class="collapse-item active" href="{{ route ('project.index') }}"><i class="fa fa-briefcase"></i><span>&ensp;Project</span></a>
            </div>
        </div>
    </li>


    <!-- Contact -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#Contact" aria-expanded="true"
            aria-controls="Contact">
            <i class="fas fa-address-book"></i>
            <span>Contact</span>
        </a>
        <div id="Contact" class="collapse" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item active" href="{{ route ('title_contact') }}"><i class="fas fa-spell-check"></i><span>&ensp;Title</span></a>
                <a class="collapse-item active" href="{{ route ('contacts.index') }}"><i class="far fa-comments"></i><span>&ensp;Message</span></a>
            </div>
        </div>
    </li>




    <!-- Link Navbar -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route ('navbar.index') }}">
          <i class="fas fa-link"></i>
          <span>Navbar</span></a>
      </li>

    <!-- Link Footers -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#Footer" aria-expanded="true"
            aria-controls="Footer">
            <i class="fas fa-link"></i>
            <span>Footer</span>
        </a>
        <div id="Footer" class="collapse" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item active" href="{{ route ('title_footer') }}"><i class="fas fa-spell-check"></i><span>&ensp;Title</span></a>
                <a class="collapse-item active" href="{{ route ('footers.index') }}"><i class="fa fa-briefcase"></i><span>&ensp;Link</span></a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>

