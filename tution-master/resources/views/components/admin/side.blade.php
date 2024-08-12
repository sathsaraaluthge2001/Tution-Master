
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="./assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Argon Dashboard 2</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{url('/')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/tables.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item ">
                <a class="nav-link dropdown-toggle" href="#" id="notesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-bullet-list-67 text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Assignments</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="notesDropdown">
                    <li>
                        <a class="nav-link ms-5" href="{{ url('viewassigment') }}">
                            <i class="ni ni-bullet-list-67 text-primary"></i> 
                            <span class="nav-link-text ms-1">View Assignments</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link ms-5" href="{{ url('addassigments') }}">
                            <i class="ni ni-fat-add text-success"></i> 
                            <span class="nav-link-text ms-1">Add Assignments</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item ">
                <a class="nav-link dropdown-toggle" href="#" id="notesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Papers</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="notesDropdown">
                    <li>
                        <a class="nav-link ms-5" href="{{ url('viewpapers') }}">
                            <i class="ni ni-bullet-list-67 text-primary"></i> 
                            <span class="nav-link-text ms-1">View Papers</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link ms-5" href="{{ url('addpapers') }}">
                            <i class="ni ni-fat-add text-success"></i> 
                            <span class="nav-link-text ms-1">Add Papers</span>
                        </a>
                    </li>
                </ul>
            </li>
        <li class="nav-item ">
                <a class="nav-link dropdown-toggle" href="#" id="notesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 ">Notes</span>
                </a>
                <ul class="dropdown-menu " aria-labelledby="notesDropdown">
                    <li>
                        <a class="nav-link ms-5" href="{{ url('viewnotes') }}">
                            <i class="ni ni-bullet-list-67 text-primary"></i> 
                            <span class="nav-link-text ms-1">View Note</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link ms-5 " href="{{ url('addnotes') }}">
                            <i class="ni ni-fat-add text-success"></i> 
                            <span class="nav-link-text ms-1">Add Note</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item ">
                <a class="nav-link dropdown-toggle" href="#" id="notesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="notesDropdown">
                    <li>
                        <a class="nav-link ms-5" href="{{ url('viewuser') }}">
                            <i class="ni ni-bullet-list-67 text-primary"></i> 
                            <span class="nav-link-text ms-1">View Users</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link ms-5" href="{{ url('adduser') }}">
                            <i class="ni ni-fat-add text-success"></i> 
                            <span class="nav-link-text ms-1">Add Users</span>
                        </a>
                    </li>
                </ul>
            </li>
        
        
        <li class="nav-item">
          <a class="nav-link " href="./pages/virtual-reality.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Virtual Reality</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{url('profile')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/sign-in.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{url('sign-up')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
    
  </aside>

  