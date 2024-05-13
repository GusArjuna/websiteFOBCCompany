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
          <h6 class="card-title card-padding pb-0">Product Table</h6>
          <div class="table-responsive">
            <table class="table table-hoverable">
              <thead>
                <tr>
                  <th class="text-left">Name</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Available</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-left">Tuna</td>
                  <td>Fish</td>
                  <td>300 USD/Kg</td>
                  <td class="mdc-typography mdc-theme--success">Ready</td>
                  <td>edit delete</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection