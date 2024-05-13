@extends('base.template.navbar')
@section('bagan')
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--success">
                  <div class="card-inner">
                    <h5 class="card-title">Borrowed</h5>
                    <h5 class="font-weight-light pb-2 mb-1 border-bottom">$62,0076.00</h5>
                    <p class="tx-12 text-muted">48% target reached</p>
                    <div class="card-icon-wrapper">
                      <i class="material-icons">dvr</i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--danger">
                  <div class="card-inner">
                    <h5 class="card-title">Annual Profit</h5>
                    <h5 class="font-weight-light pb-2 mb-1 border-bottom">$1,958,104.00</h5>
                    <p class="tx-12 text-muted">55% target reached</p>
                    <div class="card-icon-wrapper">
                      <i class="material-icons">attach_money</i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--primary">
                  <div class="card-inner">
                    <h5 class="card-title">Lead Conversion</h5>
                    <h5 class="font-weight-light pb-2 mb-1 border-bottom">$234,769.00</h5>
                    <p class="tx-12 text-muted">87% target reached</p>
                    <div class="card-icon-wrapper">
                      <i class="material-icons">trending_up</i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--info">
                  <div class="card-inner">
                    <h5 class="card-title">Average Income</h5>
                    <h5 class="font-weight-light pb-2 mb-1 border-bottom">$1,200.00</h5>
                    <p class="tx-12 text-muted">87% target reached</p>
                    <div class="card-icon-wrapper">
                      <i class="material-icons">credit_card</i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                  <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-0">Revenue by location</h4>
                  </div>
                  <div class="d-block d-sm-flex justify-content-between align-items-center">
                      <h5 class="card-sub-title mb-2 mb-sm-0">Sales performance revenue based by country</h5>
                  </div>
                  <div class="mdc-layout-grid__inner mt-2">
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--span-8-tablet">
                        <div class="table-responsive">
                          <table class="table dashboard-table">
                            <tbody>
                              <tr>
                                <td>
                                  <span class="flag-icon-container"><i class="flag-icon flag-icon-us mr-2"></i></span>United States</td>
                                <td>$1,671.10</td>
                                <td class=" font-weight-medium"> 39% </td>
                              </tr>
                              <tr>
                                <td> <span class="flag-icon-container"><i class="flag-icon flag-icon-ph mr-2"></i></span>Philippines	</td>
                                <td>$1,064.75</td>
                                <td class=" font-weight-medium"> 30% </td>
                              </tr>
                              <tr>
                                <td> <span class="flag-icon-container"><i class="flag-icon flag-icon-gb mr-2"></i></span>United Kingdom</td>
                                <td>$1,055.98</td>
                                <td class=" font-weight-medium"> 45% </td>
                              </tr>
                              <tr>
                                <td> <span class="flag-icon-container"><i class="flag-icon flag-icon-ca mr-2"></i></span>Canada</td>
                                <td>$1,045.49</td>
                                <td class=" font-weight-medium"> 80% </td>
                              </tr>
                              <tr>
                                <td> <span class="flag-icon-container"><i class="flag-icon flag-icon-fr mr-2"></i></span>France</td>
                                <td>$2,050.93</td>
                                <td class=" font-weight-medium"> 10% </td>
                              </tr>
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