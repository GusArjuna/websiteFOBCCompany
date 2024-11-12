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
            <h6 class="card-title card-padding pb-0">Order Detail</h6>
          </div>
          @if (session()->has('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
          @endif
          <div class="table-responsive">
            <table class="table table-hoverable">
              <thead>
                <tr>
                  <th class="text-left">Registraion Order Number</th>
                  <th class="text-center">Name</th>
                  <th class="text-center">Email</th>
                  <th>Destination</th>
                  <th>Phone Number</th>
                  <th>Date</th>
                  <th>Product</th>
                  <th>Quantity</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $order)
                  <tr>
                    @if ($loop->first)  <!-- Mengecek apakah ini iterasi pertama -->
                        <td class="text-left">{{ $order->regisOrder }}</td> 
                        <td>{{ $order->regisOrders->name }}</td> 
                        <td>{{ $order->regisOrders->email }}</td> 
                        <td>{{ $order->regisOrders->destination }}</td> 
                        <td>{{ $order->regisOrders->handphone }}</td> 
                        <td>{{ $order->regisOrders->date }}</td> 
                    @else
                    <td class="text-left"></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td>  
                    @endif                 
                    <td>
                     {{ $order->product }}
                    </td>                  
                    <td>
                     {{ $order->quantity }}
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