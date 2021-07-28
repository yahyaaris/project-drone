<html>
@extends ('base')
@section ('contentFlightPlanIndex')

<body>

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-lg-12 position-relative z-index-2">
      <div class="card card-plain mb-4">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-lg-6">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-sm-6">
          <div class="card  mb-4">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <h1 class="font-weight-bolder mb-4">
                      Flight Plan  
                    </h1>
                    <div class="row">
                      <div class="text-center">
                      <p>This page is where the user can create new flight plan.</p>
                      <p>When creating the new flight plan, need to take note about the date and location during the flight plan.</p>
                      <p>Don't forget to put in the user and drone information.<p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4 text-end">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-sm-5 mt-sm-0 mt-4">
          <div class="card  mb-4">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <h1 class="font-weight-bolder mb-4">
                      Create Flight Plan
                    </h1>
                    <div class="row">
                      <div class="text-center">
                        <p>Click the link below in order to create a new flight plan.<p>
                          <a href= "http://drone.test/flight-plan/create">New Flight Plan
                          </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4 text-end">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
@stop

</html>