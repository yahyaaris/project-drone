<html>

@extends ('base')
@section ('contentDroneCreate')

<body>
    <h1>Flight Plan</h1>
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