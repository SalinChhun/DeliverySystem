<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Foodwagon | Responsive, Ecommerce &amp; Business Templatee</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('assets/css/theme.css') }}"
        rel="stylesheet />

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main"
        id="top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container">
            <a class="navbar-brand d-inline-flex" href="{{ url('/') }}">
                <img class="d-inline-block" src="assets/img/gallery/logo.svg" alt="logo" />
                <span class="text-1000 fs-3 fw-bold ms-2 text-gradient">fooda
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse border-top border-lg-0 my-2 mt-lg-0" id="navbarSupportedContent">
                <div class="mx-auto pt-5 pt-lg-0 d-block d-lg-none d-xl-block">
                    <p class="mb-0 fw-bold text-lg-center">
                        Deliver to: <i class="fas fa-map-marker-alt text-warning mx-2"></i>
                        <span class="fw-normal">
                            Current Location
                        </span>
                        <span>Setec Institute</span>
                    </p>
                </div>
                <form class="d-flex mt-4 mt-lg-0 ms-lg-auto ms-xl-0">
                    <div class="input-group-icon pe-2"><i class="fas fa-search input-box-icon text-primary"></i>
                        <input class="form-control border-0 input-box bg-100" type="search" placeholder="Search Food"
                            aria-label="Search" />
                    </div>


                    <button class="btn btn-white shadow-warning text-warning" type="submit">

                        <i class="fas fa-user me-2"></i>
                        <a href="{{ url('signin') }}">
                            Login
                        </a>
                    </button>

                    <button class="btn btn-white shadow-warning " type="submit">
                        <i class="fas fa-user me-2"></i>
                        <a href="{{ url('all') }}" class="text-warning">
                            Card
                        </a>
                    </button>

                    {{-- modal card body --}}
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModalCenter">
                        Launch demo modal
                    </button>
                </form>
            </div>
        </div>
    </nav>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Create Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" autocomplete="off ">
                        @csrf
                        <input type="text" name="name" id="name" placeholder="Product Name">
                        <input type="text" name="price" id="price " placeholder="Product Price">
                        <input type="text" name="description" id="description" placeholder="Product Description">
                        <input type="text" name="status" id="status" placeholder="Product Status">
                        <button class="btn btn-secondary">POST</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
