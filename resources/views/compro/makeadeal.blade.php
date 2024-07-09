@extends('compro.template.navbar')
@section('bagan')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('CP/img/about.jpg');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Make a Deal</h2>
            <p>Make your seafood business easier with our fast, secure, and reliable ordering service - let's make a deal now!</p>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>Make a Deal</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->
  <div class="container mt-5">
    
    <form action="/buyFracture/datain" method="post">
        @csrf
        <div class="row g-3">
            <p>Your Identity</p>
            <div class="col-md-3">
                <div class="form-floating">
                    <input type="text" class="form-control mb-3"  placeholder="" name="customername" value="">
                    <label for="">Name</label>
                </div>
            </div>
            <div class="col-md-3">
              <div class="form-floating">
                  <select class="form-control" aria-label=".form-select-sm example" name="destination" >
                      <option value="">- Choose -</option>
                  </select>
                  <label>Destination</label>
                  @error('keterangan')
                      <div class="alert alert-danger"></div>
                  @enderror
              </div>
            </div>
            <div class="col-md-3">
                <div class="form-floating">
                    <input type="tel" style="height: 58px;" class="form-control mb-3"  placeholder="" name="handphone" value="" id="phone" pattern="\d"  required>
                </div>
            </div>
            
              <div id="inputdata">

              </div>
              <div class="col-md-3">
                  <button type="button" id="addBtn" class="btn btn-primary rounded-pill">
                    <i class="bi bi-plus-circle-dotted"> Add Products</i>
                  </button>
              </div>
              <div class="col-md-9">
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
                <button type="reset" class="btn btn-secondary mb-3">Reset</button>
              </div>
        </div>
    </form>
  </div>

</main><!-- End #main -->
@endsection

@section('java')
<script>

    function validateNumberInput(event) {
        var key = event.keyCode || event.which;
        var keyValue = String.fromCharCode(key);
        var isValid = /^[0-9]+$/.test(keyValue);

        if (!isValid) {
            event.preventDefault();
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        var phoneInput = document.getElementById('phone');
        phoneInput.addEventListener('keypress', validateNumberInput);
    });

   document.addEventListener("DOMContentLoaded", function() {
            var input = document.querySelector("#phone");
            window.intlTelInput(input, {
                // options here
                initialCountry: "auto",
                geoIpLookup: function(success, failure) {
                    fetch('https://ipinfo.io?token=<YOUR_TOKEN>', { method: 'get' })
                        .then(response => response.json())
                        .then((ipjson) => { success(ipjson.country); })
                        .catch(() => { success('US'); });
                },
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
            });
        });


  $('#addBtn').click(function (){
      let newInputan = `<div class="row g-3 mb-2">
                          <div class="col-md-3">
                            <div class="form-floating">
                                <select class="form-control @error('food') is-invalid @enderror makanan" aria-label=".form-select-sm example" name="food[]" >
                                    <option value="">- Pilih Salah Satu -</option>
                                </select>
                                <label>Product</label>
                                @error('keterangan')
                                    <div class="alert alert-danger"></div>
                                @enderror
                            </div>
                          </div>
                          <div class="col-md-1">
                            <div class="mt-2">
                                <button type="button" class="btn btn-outline-danger removeBtn" ><i class="bi bi-dash-lg"></i></button>
                            </div>
                          </div>
                        </div>
                        `
  $('#inputdata').append(newInputan);
  });

  $(document).on('click', '.removeBtn', function() {
      $(this).parent().parent().parent().remove();
    });
</script>
@endsection