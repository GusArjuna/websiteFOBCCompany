@extends('base.template.navbar')
@section('bagan')
<main class="content-wrapper">
  <div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
      <div class="mdc-layout-grid__cell--span-12">
        <div class="mdc-card">
          <h6 class="card-title">Generate Eoq</h6>
          <div class="template-demo">
            <form action="{{ url('/base/eoq') }}" method="post" class="mt-4" enctype="multipart/form-data">
              @csrf
              <div class="row g-3">
                @foreach ($products as $product)
                <div class="col-md-4">
                  <div class="form-floating">
                    <input type="hidden" name="product_names[]" value="{{ $product->name }}">
                    <input type="number" class="form-control form-control-sm mb-3" placeholder="" name="demand[{{ $product->name }}]" value="{{ old('demand.'.$product->id) }}" required autofocus>
                    <label for="">Demand for {{ $product->name }}</label>
                    @error('demand.'.$product->id)
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                </div>
                @endforeach
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