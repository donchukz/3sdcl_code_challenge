<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="3sdcl Admin Code Challenge">
    <meta name="keywords" content="3sdcl, Admin, Code, Challenge">
    <meta name="author" content="chuksDev">
    <meta name="robots" content="noindex, nofollow">
    <title>Dashboard - 3sdcl Admin Code Challenge</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<div id="global-loader">
    <div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

    <div class="header">

        <div class="header-left active">
            <a href="#" class="logo logo-normal">
                <img src="{{ asset('assets/img/e-ADAPP-logo-23.png') }}" alt="">
            </a>
            <a href="#" class="logo logo-white">
                <img src="{{ asset('assets/img/e-ADAPP-logo-23.png') }}" alt="">
            </a>
            <a href="#" class="logo-small">
                <img src="{{ asset('assets/img/e-ADAPP-logo-23.png') }}" alt="">
            </a>
            <a id="toggle_btn" href="javascript:void(0);">
            </a>
        </div>

        <a id="mobile_btn" class="mobile_btn" href="##sidebar">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
        </a>

        <ul class="nav user-menu">

            <li class="nav-item">
                <div class="top-nav-search">
                    <a href="javascript:void(0);" class="responsive-search">
                        <i class="fa fa-search"></i>
                    </a>
                    <form action="#">
                        <div class="searchinputs">
                            <input type="text" placeholder="Search Here ...">
                            <div class="search-addon">
                                <span><img src="{{ asset('assets/img/icons/closes.svg') }}" alt="img"></span>
                            </div>
                        </div>
                        <a class="btn" id="searchdiv"><img src="{{ asset('assets/img/icons/search.svg') }}" alt="img"></a>
                    </form>
                </div>
            </li>


            <li class="nav-item dropdown has-arrow flag-nav">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
                    <img src="{{ asset('assets/img/flags/us1.png') }}" alt="" height="20">
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ asset('assets/img/flags/us.png') }}" alt="" height="16"> English
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ asset('assets/img/flags/fr.png') }}" alt="" height="16"> French
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ asset('assets/img/flags/es.png') }}" alt="" height="16"> Spanish
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ asset('assets/img/flags/de.png') }}" alt="" height="16"> German
                    </a>
                </div>
            </li>


            <li class="nav-item dropdown has-arrow main-drop">
                <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
<span class="user-img"><img src="{{ asset('assets/img/profiles/avator1.jpg') }}" alt="">
<span class="status online"></span></span>
                </a>
                <div class="dropdown-menu menu-drop-user">
                    <div class="profilename">
                        <div class="profileset">
<span class="user-img"><img src="{{ asset('assets/img/profiles/avator1.jpg') }}" alt="">
<span class="status online"></span></span>
                            <div class="profilesets">
                                <h6>John Doe</h6>
                                <h5>Admin</h5>
                            </div>
                        </div>
                        <hr class="m-0">
                        <a class="dropdown-item" href="#"> <i class="me-2" data-feather="user"></i> My Profile</a>
                        <a class="dropdown-item" href="#"><i class="me-2" data-feather="settings"></i>Settings</a>
                        <hr class="m-0">
                        <a class="dropdown-item logout pb-0" href="{{route('auth.login')}}"><img src="{{ asset('assets/img/icons/log-out.svg') }}" class="me-2" alt="img">Logout</a>
                    </div>
                </div>
            </li>
        </ul>


        <div class="dropdown mobile-user-menu">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">My Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="{{route('auth.login')}}">Logout</a>
            </div>
        </div>

    </div>


    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="active">
                        <a href="{{route('home.dashboard')}}"><img src="{{ asset('assets/img/icons/dashboard.svg') }}" alt="img"><span> Dashboard</span> </a>
                    </li>
                    <li>
                        <a href="#"><i data-feather="file"></i><span> Farmers</span> </a>
                    </li>
                    <li>
                        <a href="#"><i data-feather="file"></i><span> Staff</span> </a>
                    </li>
                    <li>
                        <a href="#"><i data-feather="file"></i><span> Synchronization</span> </a>
                    </li>
                    <li>
                        <a href="#"><i data-feather="file"></i><span> Settings</span> </a>
                    </li>
                    <li>
                        <a href="#"><i data-feather="file"></i><span> Report</span> </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count">
                        <div class="dash-counts">
                            <h4>100</h4>
                            <h5>Customers</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="user"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das1">
                        <div class="dash-counts">
                            <h4>100</h4>
                            <h5>Suppliers</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="user-check"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das2">
                        <div class="dash-counts">
                            <h4>100</h4>
                            <h5>Purchase Invoice</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="file-text"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das3">
                        <div class="dash-counts">
                            <h4>105</h4>
                            <h5>Sales Invoice</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="file"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7 col-sm-12 col-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Purchase & Sales</h5>
                            <div class="graph-sets">
                                <ul>
                                    <li>
                                        <span>Sales</span>
                                    </li>
                                    <li>
                                        <span>Purchase</span>
                                    </li>
                                </ul>
                                <div class="dropdown">
                                    <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        2022 <img src="{{ asset('assets/img/icons/dropdown.svg') }}" alt="img" class="ms-2">
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="sales_charts"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12 col-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">Recently Added Products</h4>
                            <div class="dropdown">
                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                                    <i class="fa fa-ellipsis-v"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a href="#" class="dropdown-item">Product List</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-item">Product Add</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive dataview">
                                <table class="table datatable ">
                                    <thead>
                                    <tr>
                                        <th>Sno</th>
                                        <th>Products</th>
                                        <th>Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="productimgname">
                                            <a href="#" class="product-img">
                                                <img src="{{ asset('assets/img/product/product22.jpg') }}" alt="product">
                                            </a>
                                            <a href="#">Apple Earpods</a>
                                        </td>
                                        <td>$891.2</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="productimgname">
                                            <a href="#" class="product-img">
                                                <img src="{{ asset('assets/img/product/product23.jpg') }}" alt="product">
                                            </a>
                                            <a href="#">iPhone 11</a>
                                        </td>
                                        <td>$668.51</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="productimgname">
                                            <a href="#" class="product-img">
                                                <img src="{{ asset('assets/img/product/product24.jpg') }}" alt="product">
                                            </a>
                                            <a href="#">samsung</a>
                                        </td>
                                        <td>$522.29</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td class="productimgname">
                                            <a href="#" class="product-img">
                                                <img src="{{ asset('assets/img/product/product6.jpg') }}" alt="product">
                                            </a>
                                            <a href="#">Macbook Pro</a>
                                        </td>
                                        <td>$291.01</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-0">
                <div class="card-body">
                    <h4 class="card-title">Expired Products</h4>
                    <div class="table-responsive dataview">
                        <table class="table datatable ">
                            <thead>
                            <tr>
                                <th>SNo</th>
                                <th>Product Code</th>
                                <th>Product Name</th>
                                <th>Brand Name</th>
                                <th>Category Name</th>
                                <th>Expiry Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="javascript:void(0);">IT0001</a></td>
                                <td class="productimgname">
                                    <a class="product-img" href="#">
                                        <img src="{{ asset('assets/img/product/product2.jpg') }}" alt="product">
                                    </a>
                                    <a href="#">Orange</a>
                                </td>
                                <td>N/D</td>
                                <td>Fruits</td>
                                <td>12-12-2022</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="javascript:void(0);">IT0002</a></td>
                                <td class="productimgname">
                                    <a class="product-img" href="#">
                                        <img src="{{ asset('assets/img/product/product3.jpg') }}" alt="product">
                                    </a>
                                    <a href="#">Pineapple</a>
                                </td>
                                <td>N/D</td>
                                <td>Fruits</td>
                                <td>25-11-2022</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="javascript:void(0);">IT0003</a></td>
                                <td class="productimgname">
                                    <a class="product-img" href="#">
                                        <img src="{{ asset('assets/img/product/product4.jpg') }}" alt="product">
                                    </a>
                                    <a href="productlist.html">Stawberry</a>
                                </td>
                                <td>N/D</td>
                                <td>Fruits</td>
                                <td>19-11-2022</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><a href="javascript:void(0);">IT0004</a></td>
                                <td class="productimgname">
                                    <a class="product-img" href="#">
                                        <img src="{{ asset('assets/img/product/product5.jpg') }}" alt="product">
                                    </a>
                                    <a href="#">Avocat</a>
                                </td>
                                <td>N/D</td>
                                <td>Fruits</td>
                                <td>20-11-2022</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

<script src="{{ asset('assets/js/feather.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>

<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
