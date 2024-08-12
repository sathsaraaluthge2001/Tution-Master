@extends('admin.layouts.admin')

@section('content')

<div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
</div>
<div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2 mt-n11">
        <div class="container-fluid py-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="text-white opacity-5" href="javascript:;">Assignments</a></li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Add Assignments</li>
                </ol>
                <h6 class="text-white font-weight-bolder ms-2">Add Assignments</h6>
            </nav>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="card shadow-lg card-profile-bottom">
        <div class="row">
            <div class="col-md-8 mx-10">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Add Assignments</p>
                            <button class="btn btn-primary btn-sm ms-auto"><a class="" href="{{ url('viewassigment') }}">View</a></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Display success message -->
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Start of the form -->
                        <form action="{{ url('assignments') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-id" class="form-control-label">User Id:</label>
                                        <input class="form-control" type="text" id="user-id" name="user_id" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="grade-select" class="form-control-label">Grade ID</label>
                                        <select class="form-control" id="grade-select" name="grade_id" required>
                                            <option value="2">Grade 10</option>
                                            <option value="3">Grade 11</option>
                                            <option value="5">Grade 12</option>
                                            <option value="4">Grade 13</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="form-control-label">Title</label>
                                        <input class="form-control" type="text" id="title" name="title" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description" class="form-control-label">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="file-upload" class="form-control-label">Upload File</label>
                                        <input class="form-control" type="file" id="file-upload" name="file" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="due-date" class="form-control-label">Due Date</label>
                                        <input class="form-control" type="date" id="due-date" name="due_date" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success">Submit Assignment</button>
                                </div>
                            </div>
                        </form>
                        <!-- End of the form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Core JS Files -->
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
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
@endsection
