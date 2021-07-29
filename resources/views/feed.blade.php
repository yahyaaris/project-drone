<html>

@extends ('base')
@section ('contentFeed')

<body>

    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h1 class="mb-4 ">Feed</h1>
                <div class="row">
                  <div class="col-xl-5 col-lg-6 text-center">
                    <p>This page shows the user the camera feed of the drone.<p>
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
                <h1 class="mb-4">Feed upload</h1>
              </div>
            </div>
 
        <form method="POST" action="/flight-plan">
        @csrf
            <p>Name <i>(Flight Name)</i>:</p><br>
            <input name="#" type="text" style="font-size:30px; color:black"><br>

            <p>Drone <i>(Type of Drone)</i>:</p><br>
            <input name="#" type="text" style="font-size:30px; color:black"><br>

            <p>Location <i>(Position of the Drone)</i>:</p><br>
            <input name="#" type="text" style="font-size:30px; color:black"><br>

            <div class="mb-3">
              <label for="formFileMultiple" class="form-label">Multiple files input available</label>
              <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>

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

<table class="table table-striped table table-bordered">
  <tr>
      <td>NAME</td>
      <td>DRONE</td>
      <td>FEED</td>
  </tr>
  <tr>
      <td>Flight_01</td>
      <td>Drone_01</td>
      <td>
        <div>
          <img src="../../assets/img/feed/drone_pjdp.jpg" alt="Country flag">
        </div>
      </td>
  </tr>
  <tr>
    <td>Flight_02</td>
    <td>Drone_02</td>
    <td>
      <div>
        <img src="../../assets/img/feed/drone_ktn.jpg" alt="Country flag">
      </div>
    </td>
</tr>
  <tr>
    <td>Flight_03</td>
    <td>Drone_03</td>
    <td>
      <div>
        <img src="../../assets/img/feed/drone_kk.jpg" alt="Country flag">
      </div>
    </td>
</tr>
</table>

</body>
@stop

</html>