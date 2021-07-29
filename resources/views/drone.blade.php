
<!--
=========================================================
* Soft UI Dashboard PRO - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard-pro
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
</head>

@extends ('base')
@section ('contentDrone')

<body class="g-sidenav-show  bg-gray-100">

    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h1 class="mb-4 ">Drone</h1>
                <div class="row">
                  <div class="col-xl-5 col-lg-6 text-center">
                    <p>This page is where the drones are.<p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>

  <div>
    <div class="container-fluid py-4">
        <div class="col-12 col-md-10">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h1 class="mb-4">Drone Profile</h1>
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

  
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header pb-0">
              <div class="d-lg-flex">
                <div>
                  <h5 class="mb-0">All Drones</h5>
                </div>
                <div class="ms-auto my-auto mt-lg-0 mt-4">
                  <div class="ms-auto my-auto">
                    <div class="modal fade" id="import" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog mt-lg-10">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Import CSV</h5>
                            <i class="fas fa-upload ms-3"></i>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p>You can browse your computer for a file.</p>
                            <input type="text" placeholder="Browse file..." class="form-control mb-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="importCheck" checked="">
                              <label class="custom-control-label" for="importCheck">I accept the terms and conditions</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <table class="table table-striped table table-bordered">
              <tr>
                  <td>DRONE</td>
                  <td>BRAND</td>
                  <td>MODEL</td>
                  <td>YEAR</td>
                  <td>QUANTITY</td>
                  <td>STATUS</td>
              </tr>
              <tr>
                  <td>Drone_01</td>
                  <td>Brand_01</td>
                  <td>#0001</td>
                  <td>2020</td>
                  <td>1</td>
                  <td>Repairing</td>
              </tr>
              <tr>
                <td>Drone_02</td>
                <td>Brand_01</td>
                <td>#0002</td>
                <td>2018</td>
                <td>10</td>
                <td>Good Condition</td>
            </tr>
            <tr>
              <td>Drone_03</td>
              <td>Brand_02</td>
              <td>#0003</td>
              <td>2015</td>
              <td>4</td>
              <td>Good Condition</td>
          </tr>
          </table>
            </div>
          </div>
        </div>
      </div>
</body>

@stop

</html>