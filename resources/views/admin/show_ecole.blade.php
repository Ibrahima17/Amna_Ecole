<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
      .h2_font
        {
            text-align: center;
            font-size: 40px;
            padding-top: 40px;
        }
        .center
        {
          margin: auto;
          width: 50%;
          text-align: center;
          margin-top: 30px;
          border: 3px solid white;
        }
        .img_size
        {
          width: 100px;
          height: 100px;
        }
        .th_deg
        {
          padding: 30px;
        }
        .th_color
        {
          background: skyblue;
        }
        th {
        border: 3px solid white;
        } 
        td {
          border: 3px solid white;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <h2 class="h2_font"> 
              Toutes les écoles
            </h2>
            <!-- <div style="padding-left: 50px; padding-bottom: 20px;">
              <form action="{{ url('search') }}" method="get">
                @csrf
                <input type="text" style="color: black;" name="search" placeholder="Recherche">

                <input type="submit" value="Search" class="btn btn-outline-primary">
              </form>
            </div> -->
          <table class="center">
              <tr class="th_color">
                <th class="th_deg">Nom </th>
                <th class="th_deg">Email </th>
                <th class="th_deg">Telephone</th>
                <th class="th_deg">Adresse</th>
                <th class="th_deg">Filiere</th>
                <th class="th_deg">Photo</th>
                <th class="th_deg">Delete</th>
                <th class="th_deg">Edit</th>
                <!-- <th>Action</th> -->
              </tr>

              @foreach($ecole as $ecole)
              <tr>
                <td>{{$ecole->nom}}</td>
                <td>{{$ecole->email}}</td>
                <td>{{$ecole->tel}}</td>
                <td>{{$ecole->address}}</td>
                <td>
                {{$ecole->filiere}}
                </td>
                <td>
                  <img class="img_size" src="/ecole/{{$ecole->image}}" alt="">            
                </td>
                <td>
                    <a class="btn btn-danger" onclick="return confirm('Voulez vous supprimez cet element ?')" href="{{url('delete_ecole', $ecole->id)}}">Delete</a> 
                </td>
                <td>
                    <a class="btn btn-success" href="{{url('update_ecole', $ecole->id)}}">Edit</a>
                </td>
                <!-- <th>
                  <a onclick="return confirm('Voulez vous supprimez cet element ?')" class="btn btn-danger" href="{{url('delete_filiere', $ecole->id)}}">Delete</a>
                </th> -->
              </tr>
              @endforeach
            </table>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>