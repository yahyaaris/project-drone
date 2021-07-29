<html>

@extends ('base')
@section ('contentDroneCreate')

<body>
    <h1>Drone</h1>
<div>
    <div class="row mt-4">
        <div class="col-12 col-md-10">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h1 class="mb-4">Create Drone Profile</h1>
              </div>
            </div>
    <div>
        <form method="POST" action="/drone">
        @csrf
            <p>Name <i>(Drone Name)</i>:</p><br>
            <input name="#" type="text" style="font-size:30px; color:black"><br>

            <p>Brand <i>(Drone Brand)</i>:</p><br>
            <input name="#" type="text" style="font-size:30px; color:black"><br>

            <p>Model <i>(Drone Model)</i>:</p><br>
            <input name="#" type="text" style="font-size:30px; color:black"><br>

            <p>Year <i>(Year of Manufactured)</i>:</p><br>
            <input name="#" type="text" style="font-size:30px; color:black"><br>

            <button type="submit" style="font-size:15px; color:black">Submit</button>
        </form>
    </div>
  
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