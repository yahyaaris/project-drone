<html>

@extends ('base')
@section ('contentFlightStatus')

<body>

    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h1 class="mb-4 ">Flight Status</h1>
                <div class="row">
                  <div class="">
                    <p>This is where the user can know the status of the flight and its position.<p>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>

  <table class="table table-striped table table-bordered">
    <tr>
        <td>NAME</td>
        <td>DRONE</td>
        <td>USER</td>
        <td>DATE</td>
        <td>TIME</td>
        <td>LOCATION / POSITION</td>
        <td>STATUS</td>
    </tr>
    <tr>
        <td>Flight_01</td>
        <td>Drone_01</td>
        <td>User_01</td>
        <td>29.7.2021</td>
        <td>10:30:05</td>
        <td>Damansara Perdana, 47820 Petaling Jaya, Selangor</td>
        <td>In Air</td>
    </tr>
    <tr>
      <td>Flight_02</td>
      <td>Drone_02</td>
      <td>User_02</td>
      <td>30.7.2021</td>
      <td>14:28:56</td>
      <td>Jalan Jaya Gading, 25150 Kuantan, Pahang</td>
      <td>Scheduled</td>
  </tr>
    <tr>
      <td>Flight_03</td>
      <td>Drone_03</td>
      <td>User_03</td>
      <td>31.7.2021</td>
      <td>17:12:31</td>
      <td>Jalan Perwira, 88100 Kota Kinabalu, Sabah</td>
      <td>Scheduled</td>
</tr>
</table>
  
</body>
@stop

</html>