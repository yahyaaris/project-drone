<html>
@extends ('base')
@section ('contentCFP')

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
                      IMPORTANT
                    </h1>
                    <div class="row">
                      <div class="text-center">
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
      </div>
    </div>
  </div>
</div>

<div>
    <div class="row mt-4">
        <div class="col-12 col-md-10">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h1 class="mb-4">Create Flight Plan</h1>
              </div>
            </div>
 
        <form method="POST" action="/flight-plan">
        @csrf
            <p>Name <i>(Flight Name)</i>:</p><br>
            <input name="#" type="text" style="font-size:30px; color:black"><br>

            <p>Drone <i>(Type of Drone)</i>:</p><br>
            <input name="#" type="text" style="font-size:30px; color:black"><br>

            <p>User <i>(User Name)</i>:</p><br>
            <input name="#" type="text" style="font-size:30px; color:black"><br>

            <p>Software <i>(Software used)</i>:</p><br>
            <input name="#" type="text" style="font-size:30px; color:black"><br>

            <p>Date <i>(DD.MM.YYYY)</i>:</p><br>
            <input name="#" type="text" style="font-size:30px; color:black"><br>

            <p>Time <i>(HH:MM:SS)</i>:</p><br>
            <input name="#" type="text" style="font-size:30px; color:black"><br>

            <p>Location <i>(Position of the Drone)</i>:</p><br>
            <input name="#" type="text" style="font-size:30px; color:black"><br>

            <button type="submit" style="font-size:15px; color:black">Submit</button>
        </form>
  
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
</div>
</div>
</div>
</div>

</body>
@stop

</html>