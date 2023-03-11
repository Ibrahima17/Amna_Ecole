<div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href=""><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
              <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
              </button>
              <ul class="navbar-nav w-100">
                <li class="nav-item w-100">
                  <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" action="{{ url('search') }}" method="get">
                  @csrf
                    <input type="text" style="color: white;" class="form-control" name="search" placeholder="Recherche">
                    <input type="submit" value="Search" class="btn btn-outline-primary">
                  </form>
                </li>
              </ul>
              <li>
                <x-app-layout>
                  
                </x-app-layout>
              </li>
          </div>
        </nav>