<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Admin</title>
  <link rel="stylesheet" href="{{ url('Base/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ url('Base/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{ url('Base/css/demo/style.css')}}">
  <link rel="shortcut icon" href="{{url('FOBC Logo.ico')}}">
</head>
<body>
<script src="{{ url('Base/js/preloader.js')}}"></script>
  <div class="body-wrapper">
    <div class="main-wrapper">
      <div class="page-wrapper full-page-wrapper d-flex align-items-center justify-content-center" style="background-image: url('CP/img/miami.png'); background-size: cover; background-repeat: no-repeat; width: 100vw; height: 100vh;">
        <main class="auth-page">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-6-tablet">
                <div class="mdc-card">
                  <form action="/login" method="POST">
                    @csrf
                    <div class="mdc-layout-grid">
                      <center></center>
                      <h3 style="margin-bottom: 100px"><center>LOGIN ADMIN</center></h3>
                      @if (session()->has('Success'))
                      <script>
                          let sessionData = @json(session('Success'));
                          alert(sessionData);
                      </script>
                      @endif
                      @if (session()->has('Error'))
                      <script> 
                          let sessionData = @json(session('Error'));
                          alert(sessionData);
                      </script>
                      @endif
                      <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" id="text-field-hero-input" name="username" value="{{ old('username') }}" autofocus required>
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label">Username</label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" type="password" id="text-field-hero-input" name="password" value="{{ old('password') }}" required>
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label">Password</label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <button type="submit" class="mdc-button mdc-button--raised w-100">
                            Login
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>
  <script src="{{ url('Base/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{ url('Base/js/material.js')}}"></script>
  <script src="{{ url('Base/js/misc.js')}}"></script>
</body>
</html>