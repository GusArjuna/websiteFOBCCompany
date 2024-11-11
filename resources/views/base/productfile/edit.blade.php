@extends('base.template.navbar')
@section('bagan')
<main class="content-wrapper">
  <div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
      <div class="mdc-layout-grid__cell--span-12">
        <div class="mdc-card">
          <h6 class="card-title">Edit Product</h6>
          <div class="template-demo">
            <form action="/base/product/{{ $product->id }}" method="post" class="mt-4" enctype="multipart/form-data">
              @csrf
              @method('patch')
              <div class="row g-3">
                <div class="col-md-4">
                  <div class="form-floating">
                      <input type="text" class="form-control form-control-sm mb-3"  placeholder="" name="name" value="{{ old('name',$product->name) }}" required autofocus>
                      <label for="">Name</label>
                      @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-floating">
                      <input type="number" class="form-control form-control-sm mb-3" placeholder="" name="purchase" value="{{ old('purchase',$product->purchase) }}" required>
                      <label for="">Purchase Price</label>
                      @error('purchase')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-floating">
                      <input type="number" class="form-control form-control-sm mb-3" placeholder="" name="sell" value="{{ old('sell',$product->sell) }}" required>
                      <label for="">Sell Price</label>
                      @error('sell')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-floating">
                      <input type="number" class="form-control form-control-sm mb-3" placeholder="" name="storageCosts" value="{{ old('storageCosts',$product->storageCosts) }}" required>
                      <label for="">Storage Cost</label>
                      @error('storageCosts')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-floating">
                      <input type="number" class="form-control form-control-sm mb-3" placeholder="" name="safetyStock" value="{{ old('safetyStock',$product->safetyStock) }}" required>
                      <label for="">Safety Stock</label>
                      @error('safetyStock')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-floating">
                      <input type="number" class="form-control form-control-sm mb-3" placeholder="" name="lifetime" value="{{ old('lifetime',$product->lifetime) }}" required>
                      <label for="">Lifetime</label>
                      @error('lifetime')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>
              </div>
              <div class="col-md-2 d-flex align-items-center justify-content-start">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="available" name="available"@if ($product->available==1)
                    checked
                @endif>
                    <label class="form-check-label" for="available">Is Available</label>
                </div>
              </div>
              <div style="width: 300px">
                <label for="iamge" class="form-label">Image</label>
                {{-- img preview css dan onchange bikin sendiri --}}
                <input type="hidden" name="oldImage" value="{{ $product->image }}">
                @if ($product->image)  
                  <img src="{{ asset('storage/'.$product->image) }}" class="img-preview img-fluid">
                @else
                  <img class="img-preview img-fluid">
                @endif
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