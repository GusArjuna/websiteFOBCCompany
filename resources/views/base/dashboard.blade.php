@extends('base.template.navbar')
@section('bagan')
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                  <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-0">EOQ TABLES</h4>
                  </div>
                  <div class="d-block d-sm-flex justify-content-between align-items-center">
                      <h5 class="card-sub-title mb-2 mb-sm-0">Eoq Predict For Our Product</h5>
                  </div>
                  <a href="{{ url('/base/eoq') }}"  class="mdc-button mdc-menu-button mdc-button--raised icon-button shaped-button secondary-filled-button mt-4 mb-4" style="width: 600px">
                    {{-- <i class="material-icons mdc-button__icon">add</i> --}}
                    Generate
                  </a>
                  <div class="mdc-layout-grid__inner mt-2">
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--span-8-tablet">
                      @if (session()->has('success'))
                      <div class="alert alert-success">{{ session('success') }}</div>
                      @endif
                        <div class="table-responsive">
                          <table class="table table-hoverable">
                            <thead>
                              <tr>
                                <th class="text-left">Name</th>
                                <th>Purchase Price</th>
                                <th>Selling Price</th>
                                <th>Lifetime</th>
                                <th>Holding Cost</th>
                                <th>Demand</th>
                                <th>ROP</th>
                                <th>EOQ</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($products as $product)
                                <tr>
                                  <td class="text-left">{{ $product->name }}</td>                               
                                  <td >{{ $product->purchase }}</td>                
                                  <td >{{ $product->sell }}</td>                
                                  <td >{{ $product->lifetime }}</td>                
                                  <td >{{ $product->storageCosts }}</td>                
                                  <td >@if (isset($product->eoq->rop))
                                    {{ $product->eoq->demand }}
                                    @else
                                    Demand Not yet
                                    @endif</td>                
                                  <td >
                                    @if (isset($product->eoq->rop))
                                    {{ $product->eoq->rop }}
                                    @else
                                    EOQ belum di Generate
                                    @endif  
                                  </td>                
                                  <td >
                                    @if (isset($product->eoq->eoqs))
                                    {{ $product->eoq->eoqs }}
                                    @else
                                    EOQ belum di Generate
                                    @endif   
                                  </td>                
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--span-8-tablet"> 
                      <div id="revenue-map" class="revenue-world-map"></div>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </main>
        @endsection