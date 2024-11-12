@extends('base.template.navbar')
@section('search')
<div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon search-text-field d-none d-md-flex">
  <i class="material-icons mdc-text-field__icon">search</i>
  <input class="mdc-text-field__input" id="text-field-hero-input">
  <div class="mdc-notched-outline">
    <div class="mdc-notched-outline__leading"></div>
    {{-- <div class="mdc-notched-outline__notch">
      <label for="text-field-hero-input" class="mdc-floating-label">Search..</label>
    </div> --}}
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
            <h6 class="card-title card-padding pb-0">Order List</h6>
          </div>
          @if (session()->has('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
          @endif
          <div class="table-responsive">
            {{ $regisOrders->links('pagination') }}
            <table class="table table-hoverable">
              <thead>
                <tr>
                  <th class="text-left">Registraion Order Number</th>
                  <th class="text-center">Name</th>
                  <th class="text-center">Email</th>
                  <th>Destination</th>
                  <th>Phone Number</th>
                  <th>Date</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($regisOrders as $regisOrder)
                  <tr>
                    <td class="text-left">{{ $regisOrder->regisOrder }}</td>
                    <td>
                     {{ $regisOrder->name }}
                    </td>                  
                    <td>
                     {{ $regisOrder->email }}
                    </td>                  
                    <td>
                     {{ $regisOrder->destination }}
                    </td>                  
                    <td>
                     {{ $regisOrder->handphone }}
                    </td>                  
                    <td>
                     {{ $regisOrder->date }}
                    </td>                  
                    <td class="text-right">
                      <a href="/base/order/{{ $regisOrder->id }}/show" class="mdc-button mdc-button--raised icon-button filled-button--info mr-2">
                        <i class="material-icons mdc-button__icon">colorize</i>
                      </a>
                      <form action="/base/order/{{ $regisOrder->id }}/delete" method="post" class="d-inline">
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