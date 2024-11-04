@extends('base.template.navbar')
@section('bagan')
<main class="content-wrapper">
  <div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
      <div class="mdc-layout-grid__cell--span-12">
        <div class="mdc-card">
          <h6 class="card-title">Add Product</h6>
          <div class="template-demo">
            <form action="{{ url('/base/product/add') }}" method="post" class="mt-4" enctype="multipart/form-data">
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
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="number" class="form-control form-control-sm mb-3" placeholder="" name="price" value="{{ old('price') }}" required>
                        <label for="">Price</label>
                        @error('price')
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
                <div style="width: 300px">
                  <label for="iamge" class="form-label">Image</label>
                  {{-- img preview css dan onchange bikin sendiri --}}
                  <img class="img-preview img-fluid">
                  <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                  @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
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