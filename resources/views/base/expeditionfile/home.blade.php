@extends('base.template.navbar')
@section('search')
<div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon search-text-field d-none d-md-flex">
  <i class="material-icons mdc-text-field__icon">search</i>
  <input class="mdc-text-field__input" id="text-field-hero-input">
  <div class="mdc-notched-outline">
    <div class="mdc-notched-outline__leading"></div>
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
            <h6 class="card-title card-padding pb-0">Expedition</h6>
            <a href="{{ url('/base/expedition/add') }}"  class="mdc-button mdc-menu-button mdc-button--raised icon-button shaped-button secondary-filled-button mr-4">
              <i class="material-icons mdc-button__icon">add</i>
            </a>
          </div>
          @if (session()->has('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
          @endif
          <div class="table-responsive">
            {{ $Expeditions->links('pagination') }}
            <table class="table table-hoverable">
              <thead>
                <tr>
                  <th class="text-left">Name</th>
                  <th class="text-left">image</th>
                  <th class="text-left">Available</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($Expeditions as $expedition)
                  <tr>
                    <td class="text-left">{{ $expedition->name }}</td>
                    <td class="text-left">
                      @if ($expedition->image)
                          <img src="{{ asset('storage/'.$expedition->image) }}" alt="" style="width: 150px">
                      @else
                          <img src="{{ url('CP/img/frozen.png') }}" alt="" style="width: 150px">
                      @endif
                    </td>                
                    <td class="text-left">
                      {!! $expedition->available == 1 ? '<p class="mdc-typography mdc-theme--success">Active</p>' : '<p class="mdc-typography mdc-theme--danger">Inactive</p>' !!}
                    </td>  
                    <td class="text-right">
                      <a href="/base/expedition/{{ $expedition->id }}/edit" class="mdc-button mdc-button--raised icon-button filled-button--warning mr-2">
                        <i class="material-icons mdc-button__icon">colorize</i>
                      </a>
                      <form action="/base/expedition/{{ $expedition->id }}/delete" method="post" class="d-inline">
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