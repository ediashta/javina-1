<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{!! asset('assets/css/admin/css/bootstrap.min.css') !!}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{!! asset('assets/css/admin/css/dataTables.bootstrap5.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/admin/css/style.css') !!}" />
    <link rel="icon" href="{!! asset('assets/img/admin/logo.ico') !!}" type="image/x-icon">
    @yield('header')
    <title>BACKOFFICE ISITAMAN</title>
</head>

<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">BACKOFFICE ISITAMAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar"
                aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="topNavBar">
                <form class="d-flex ms-auto my-3 my-lg-0">
                    <!-- <div class="input-group"> -->
                    <!-- <input class="form-control" type="search" placeholder="Search" aria-label="Search"/> -->
                    <!-- <button class="btn btn-primary" type="submit"> -->
                    <!-- <i class="bi bi-search"></i> -->
                    <!-- </button> -->
                    <!-- </div> -->
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-person-fill"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                @yield('sidenav')
            </nav>
        </div>
    </div>
    @yield('content')
    <script src="{!! asset('assets/js/admin/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="{!! asset('assets/js/admin/js/jquery-3.5.1.js') !!}"></script>
    <script src="{!! asset('assets/js/admin/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! asset('assets/js/admin/js/dataTables.bootstrap5.min.js') !!}"></script>
    <script src="{!! asset('assets/js/admin/js/script.js') !!}"></script>
</body>

</html>
