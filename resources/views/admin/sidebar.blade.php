<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href=""><img src="admin/assets/images/logo.png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href=""><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
         
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Ecole</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/view_ecole')}}">Add Ecoles</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/show_ecole')}}">Show Ecoles</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Filiere</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/view_filiere')}}">Add Filiere</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/show_filiere')}}">Show Filiere</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      