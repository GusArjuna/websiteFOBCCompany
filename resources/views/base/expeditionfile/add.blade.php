@extends('base.template.navbar')
@section('bagan')
<main class="content-wrapper">
  <div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
      <div class="mdc-layout-grid__cell--span-12">
        <div class="mdc-card">
          <h6 class="card-title">Add Expedition</h6>
          <div class="template-demo">
            <form action="{{ url('/base/expedition/add') }}" method="post" class="mt-4">
              @csrf
              <div class="row g-3">
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control form-control-sm mb-3"  placeholder="" name="name" value="{{ old('name') }}" required autofocus>
                        <label for="">Name</label>
                        @error('name')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-start">
                  <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="available" name="available">
                      <label class="form-check-label" for="available">Is Available</label>
                  </div>
                </div>           
              </div>
              
              <button type="submit" class="mdc-button mdc-button--outlined mdc-button--dense mdc-ripple-upgraded mt-4">
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection