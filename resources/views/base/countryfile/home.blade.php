@extends('base.template.navbar')
@section('search')
<div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon search-text-field d-none d-md-flex">
  <i class="material-icons mdc-text-field__icon">search</i>
  <input class="mdc-text-field__input" id="text-field-hero-input">
  <div class="mdc-notched-outline">
    <div class="mdc-notched-outline__leading"></div>
    <div class="mdc-notched-outline__notch">
      <label for="text-field-hero-input" class="mdc-floating-label">Search..</label>
    </div>
    <div class="mdc-notched-outline__trailing"></div>
  </div>
</div>
@endsection
@section('bagan')
<main class="content-wrapper">
  <div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
        <div class="mdc-card p-0">
          <div class="d-flex justify-content-between align-items-center">
            <h6 class="card-title card-padding pb-0">Country Reached</h6>
            <a href="{{ url('/base/country/add') }}"  class="mdc-button mdc-menu-button mdc-button--raised icon-button shaped-button secondary-filled-button mr-4">
              <i class="material-icons mdc-button__icon">add</i>
            </a>
          </div>
          @if (session()->has('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
          @endif
          <div class="table-responsive">
            <table class="table table-hoverable">
              <thead>
                <tr>
                  <th class="text-left">Nation</th>
                  <th>District</th>
                  <th>Image</th>
                  <th>Available</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($countries as $country)
                  <tr>
                    <td class="text-left">{{ $country->nation }}</td>
                    <td>{{ $country->district }}</td>                
                    <td></td>                
                    <td>
                      {!! $country->available == 1 ? '<p class="mdc-typography mdc-theme--success">Active</p>' : '<p class="mdc-typography mdc-theme--danger">Inactive</p>' !!}
                    </td>  
                    <td class="text-right">
                      <a href="/base/country/{{ $country->id }}/edit" class="mdc-button mdc-button--raised icon-button filled-button--warning mr-2">
                        <i class="material-icons mdc-button__icon">colorize</i>
                      </a>
                      <form action="/base/country/{{ $country->id }}/delete" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="mdc-button mdc-button--raised icon-button filled-button--secondary" type="submit" onclick="return confirm('Sure?');">
                          <i class="material-icons mdc-button__icon">delete</i>
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection