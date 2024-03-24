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
                        Add New Product
                    </button>
                </form>
            </div>
        </div>
    </nav>

    {{-- @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{section('success')}}
        </div>
    @endif --}}

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalCenterTitle">Create Post</h5>

                    <svg style="cursor: pointer" data-dismiss="modal" aria-label="Close" width="33" height="32"
                        viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_b_8868_3901)">
                            <rect x="0.5" width="32" height="32" rx="16" fill="#C2C5DC"
                                fill-opacity="0.9" />
                            <path
                                d="M11.5219 20.9726C11.1537 20.6107 11.1664 19.9696 11.5092 19.6269L15.14 15.996L11.5092 12.3778C11.1664 12.0287 11.1537 11.3939 11.5219 11.0258C11.89 10.6513 12.5311 10.664 12.8739 11.0131L16.4984 14.6376L20.1229 11.0131C20.4784 10.6576 21.1005 10.6576 21.4686 11.0258C21.8431 11.3939 21.8431 12.016 21.4813 12.3778L17.8632 15.996L21.4813 19.6205C21.8431 19.9823 21.8368 20.598 21.4686 20.9726C21.1068 21.3407 20.4784 21.3407 20.1229 20.9853L16.4984 17.3607L12.8739 20.9853C12.5311 21.3344 11.8964 21.3407 11.5219 20.9726Z"
                                fill="#0A0019" />
                        </g>
                        <defs>
                            <filter id="filter0_b_8868_3901" x="-49.5" y="-50" width="132" height="132"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feGaussianBlur in="BackgroundImageFix" stdDeviation="25" />
                                <feComposite in2="SourceAlpha" operator="in"
                                    result="effect1_backgroundBlur_8868_3901" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_8868_3901"
                                    result="shape" />
                            </filter>
                        </defs>
                    </svg>
                </div>
                <div class="modal-body">


                    <form id="postForm" method="POST" autocomplete="off" enctype="multipart/form-data">
                        <x-image-upload name="multiphoto[]" />

                        @csrf
                        <div class="inputProductInfo">
                            <div class="selectCatContainer">
                                <select name="category_id" class="selectCategory">
                                    @foreach ($categoryies as $c)
                                        <option value="{{ $c->id }}">
                                            {{ isset($c->category_name) ? $c->category_name : 'Unknown Category' }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="inputProductTitleContainer">
                                <input type="text" name="name" id="name" class="inputProductTitle"
                                    placeholder="Product Name">
                            </div>

                            <div class="inputProductPriceContainer">
                                <input type="text" name="price" id="price" class="inputProductPrice"
                                    value="{{ old('price', request()->input('price')) }}" placeholder="Product Price">
                                @error('price')
                                    <div class="text-sm text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="selectDisPriceContainer">
                                {{-- <input placeholder="Discount" type="text" class="inputProductDisPrice">
                                <div class="chooseDisType">
                                    <ul class="nav nav-tabs-dis-price" id="discount_type" role="tablist">
                                        <li class="nav-item-dis-price-dollar">
                                            <a name = "discount_type" class="nav-link-dollar active" id="home-tab" data-toggle="tab"
                                                href="#home" role="tab" aria-controls="home"
                                                aria-selected="true">$</a>
                                        </li>
                                        <li class="nav-item-dis-price-percent">
                                            <a class="nav-link-percent" id="profile-tab" data-toggle="tab" href="#profile"
                                                role="tab" aria-controls="profile" aria-selected="false">%</a>
                                        </li>
                                    </ul>
                                </div> --}}

                                <input placeholder="Discount" type="text" class="inputProductDisPrice"
                                    name="discount_values"> <!-- Assuming this is your input for price -->

                                <!-- Hidden input field to store the discount type -->
                                <input type="hidden" id="discount_type_input" name="discount_type" value=0>
                                <!-- Default value is $ -->

                                <div class="chooseDisType">
                                    <ul class="nav nav-tabs-dis-price" role="tablist">
                                        <li class="nav-item-dis-price-dollar">
                                            <a class="nav-link-dollar active" id="home-tab" data-toggle="tab"
                                                href="#home" role="tab" aria-controls="home"
                                                aria-selected="true" onclick="updateDiscountType(0)">
                                                <!-- Update discount type to $ -->
                                                $
                                            </a>
                                        </li>
                                        <li class="nav-item-dis-price-percent">
                                            <a class="nav-link-percent" id="profile-tab" data-toggle="tab"
                                                href="#profile" role="tab" aria-controls="profile"
                                                aria-selected="false" onclick="updateDiscountType(1)">
                                                <!-- Update discount type to % -->
                                                %
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="inputProductDescContainer">
                                <input type="text" name="description" class="inputProductDesc" id="description"
                                    placeholder="Product Description">
                            </div>

                        </div>

                        {{-- handle upload photo --}}
                        @if (Session::has('error'))
                            <p style="color:rgb(243, 89, 89);">
                                {{ session('error') }}
                            </p>
                        @endif
                        @if (Session::has('success'))
                            <p style="color:rgb(184, 236, 182);">
                                {{ session('success') }}
                            </p>
                        @endif

                        {{-- <button type="submit" class="btn btn-secondary">POST</button> --}}
                        <div>
                            <button type="submit" class="btn-post-product">Post</button>
                        </div>
                    </form>


                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div> --}}
            </div>
        </div>
    </div>

    <script>
        function updateDiscountType(discountType) {
            console.log("Updating discount type to:", discountType);
            document.getElementById('discount_type_input').value = discountType;
        }
    </script>

    @section('js')
        <script>
            //Preview one img
            function previewimg(evt) {
                let img = document.getElementById('img');
                img.src = URL.createObjectURL(evt.target.files[0]);
            }

            //Preview one img
            function previewimgmulti(evt) {
                //let imgmulti = document.getElementById('img_multi');
                let photos = evt.target.files;
                //alert(photos.length);
                let imgmulti = "";
                for (let i = 0; i < photos.length; i++) {
                    let src = URL.createObjectURL(evt.target.files[i]);
                    imgmulti += "<img src='" + src + "' width='200' class='imgmulti' />";
                }
                document.getElementById('photos').innerHTML = imgmulti;
            }
        </script>
    @endsection

    