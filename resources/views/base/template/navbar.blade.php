<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }}</title>
  <link rel="stylesheet" href="{{ url('Base/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ url('Base/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{ url('Base/vendors/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{ url('Base/vendors/jvectormap/jquery-jvectormap.css')}}">
  <link rel="stylesheet" href="{{ url('Base/css/demo/style.css')}}">
  <link rel="stylesheet" href="{{ url('Base/bootstrap/css/bootstrap.css')}}">
  <link rel="shortcut icon" href="{{url('FOBC Logo.ico')}}" />
</head>
<body>
<script src="{{ url('Base/js/preloader.js')}}"></script>
  <div class="body-wrapper">
    <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
        <a href="{{ url('base/dashboard')}}" class="brand-logo">
          <img src="{{ url('Fish On Bait Asia.png')}}" style="width: 200px" alt="logo">
        </a>
      </div>
      <div class="mdc-drawer__content">
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{ url('/base/dashboard') }}">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                Dashboard
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{ url('/base/product') }}">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">toc</i>
                Product
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{ url('/base/country') }}">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">explore</i>
                Destination Country
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{ url('/base/expedition') }}">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">local_shipping</i>
                Expedition
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{ url('/base/user') }}">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">person</i>
                User
              </a>
            </div>
          </nav>
        </div>
      </div>
    </aside>
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.html -->
      <header class="mdc-top-app-bar">
        <div class="mdc-top-app-bar__row">
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
            <span class="mdc-top-app-bar__title">{{ $pages }}!</span>
            @yield('search')
          </div>
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
            <div class="menu-button-container menu-profile d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <span class="d-flex align-items-center">
                  <span class="user-name">Hello, {{ auth()->user()->username }}</span>
                </span>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <form action="/base/logout" method="post">
                    @csrf
                    <button class="mdc-button mdc-ripple-upgraded" type="submit">
                      <li class="mdc-list-item" role="menuitem" tabindex="-1">
                        <div class="item-thumbnail item-thumbnail-icon-only">
                          <i class="mdi mdi-logout-variant text-primary"></i>                      
                        </div>
                        <div class="item-content d-flex align-items-start flex-column justify-content-center">
                          <h6 class="item-subject font-weight-normal">Logout</h6>
                        </div>
                      </li>
                    </button>
                  </form>
                </ul>
              </div>
            </div>
            <div class="divider d-none d-md-block"></div>
            <div class="menu-button-container">
              <button class="mdc-button mdc-menu-button">
                <i class="mdi mdi-email"></i>
                <span class="count-indicator">
                  <span class="count">3</span>
                </span>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">person_add</i>   
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">New deal from a customer!</h6>
                    </div>
                  </li>              
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">

  @yield('bagan')
  
  <!-- partial:partials/_footer.html -->
  <footer>
    <div class="mdc-layout-grid">
      <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
          <span class="text-center text-sm-left d-block d-sm-inline-block tx-14">Copyright © PT. Fish On Bait Company Asia 2024</span>
        </div>
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex justify-content-end">
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center tx-14">Only Admin can Access This Page</span>
        </div>
      </div>
    </div>
  </footer>
  <!-- partial -->
</div>
</div>
</div>
<script src="{{ url('Base/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{ url('Base/vendors/chartjs/Chart.min.js')}}"></script>
<script src="{{ url('Base/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
<script src="{{ url('Base/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{ url('Base/js/material.js')}}"></script>
<script src="{{ url('Base/js/misc.js')}}"></script>
<script src="{{ url('Base/js/dashboard.js')}}"></script>
</body>
</html> 