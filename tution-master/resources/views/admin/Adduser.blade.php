@extends('admin.layouts.admin')
@section('content')

<div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
  </div>
  <div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2 mt-n11">
      <div class="container-fluid py-1">
        <nav arAia-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="text-white opacity-5" href="javascript:;">User</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Add User</li>
          </ol>
          <h6 class="text-white font-weight-bolder ms-2">Add User</h6>
        </nav>
        <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-flex align-items-center">
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <div class=" card shadow-lg  card-profile-bottom">
      <div class="row">
        <div class="col-md-8 mx-10">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Add User</p>
               
                <button class="btn btn-primary btn-sm ms-auto"> <a class="" href="{{ url('viewuser') }}">View</a></button>
                
              </div>
            </div>
            <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if(session('unsuccess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('unsuccess') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
           
                        
              <p class="text-uppercase text-sm">User Information</p>
              <form action="{{url('users')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Name:</label>
                    <input class="form-control" type="text" name="name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Contact No:</label>
                    <input class="form-control" type="text" name="contact">
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Email:</label>
                    <input class="form-control" type="email" name="email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Password:</label>
                    <input class="form-control" type="Password" name="password">
                  </div>
                  <div class="form-group">
                            <label for="grade-select" class="form-control-label">Grade</label>
                            <select class="form-control" id="grade-select" name="role">
                                <option value="teacher">teacher</option>
                                <option value="student">student</option>
                                
                            </select>
                        </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Address</label>
                    <input class="form-control" type="text" name="address">
                  </div>
                  <div class="col-md-12">
                      <button type="submit" class="btn btn-success">Add User</button>
                  </div>
                </div>
            </div>
          </form>
          </div>
        </div>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
  @endsection