@extends('layouts.master ')
@section('container')
    <section class="py-5 overflow-hidden bg-primary" id="home">
        <div class="container">
            <div class="row flex-center">
                <div class="col-md-5 col-lg-6 order-0 order-md-1 mt-8 mt-md-0"><a class="img-landing-banner"
                        href="#!"><img class="img-fluid" src="assets/img/gallery/hero-header.png" alt="hero-header" /></a>
                </div>
                <div class="col-md-7 col-lg-6 py-8 text-md-start text-center">
                    <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-light">Are you starving?</h1>
                    <h1 class="text-800 mb-5 fs-4">Within a few clicks, find meals that<br class="d-none d-xxl-block" />are
                        accessible near you</h1>
                    <div class="card w-xxl-75">
                        <div class="card-body">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active mb-3" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true"><i class="fas fa-motorcycle me-2"></i>Delivery</button>
                                    <button class="nav-link mb-3" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false"><i
                                            class="fas fa-shopping-bag me-2"></i>Pickup</button>
                                </div>
                            </nav>
                            <div class="tab-content mt-3" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <form class="row gx-2 gy-2 align-items-center">
                                        <div class="col">
                                            <div class="input-group-icon"><i
                                                    class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                                                <label class="visually-hidden" for="inputDelivery">Address</label>
                                                <input class="form-control input-box form-foodwagon-control"
                                                    id="inputDelivery" type="text" placeholder="Enter Your Address" />
                                            </div>
                                        </div>
                                        <div class="d-grid gap-3 col-sm-auto">
                                            <button class="btn btn-danger" type="submit">Find Food</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <form class="row gx-4 gy-2 align-items-center">
                                        <div class="col">
                                            <div class="input-group-icon"><i
                                                    class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                                                <label class="visually-hidden" for="inputPickup">Address</label>
                                                <input class="form-control input-box form-foodwagon-control"
                                                    id="inputPickup" type="text" placeholder="Enter Your Address" />
                                            </div>
                                        </div>
                                        <div class="d-grid gap-3 col-sm-auto">
                                            <button class="btn btn-danger" type="submit">Find Food</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0">

        <div class="container">
            <div class="row h-100 gx-2 mt-7">
                <div class="col-sm-6 col-md-4 h-100 mb-5" data-bs-toggle="modal" data-bs-target="#scrollBodyModal">
                    <div class="card card-background card-span text-white rounded-3">
                        <img class="img-fluid card-mage-radius image-card-height"src="assets/img/gallery/food-world.png" alt="..." />
                        <div class="card-img-overlay ps-0">
                            <span class="badge bg-danger p-2 ms-3">
                                <i class="fas fa-tag me-2 fs-0"></i>
                                <span class="fs-0">20% off</span></span>
                            <span class="badge bg-primary ms-2 me-1 p-2">
                                <i class="fas fa-clock me-1 fs-0"></i>
                                <span class="fs-0">Fast</span>
                            </span>
                        </div>
                        <div class="card-body ps-0">
                            <div class="d-flex align-items-center mb-3">
                                {{-- <img class="img-fluid" src="assets/img/gallery/food-world-logo.png" alt="" /> --}}
                                <div class="flex-1 ms-3">
                                    <h5 class="mb-0 fw-bold text-1000">Food world</h5>
                                    <span class="text-primary fs--1 me-1">
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <span class="mb-0 text-primary">$$$ . noodle yummy</span>
                                    <div class="text-primary fs--1 me-1">
                                        <i class="fas fa-clock me-1 fs-0"></i>
                                        <span>20 min .</span>&nbsp;
                                        <i class="fas fa-motorcycle me-2"></i>
                                        <span>Free</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 h-100 mb-5" data-bs-toggle="modal" data-bs-target="#scrollBodyModal">
                    <div class="card card-background card-span text-white rounded-3">
                        <img class="img-fluid card-mage-radius image-card-height"src="assets/img/gallery/food-world.png" alt="..." />
                        <div class="card-img-overlay ps-0">
                            <span class="badge bg-danger p-2 ms-3">
                                <i class="fas fa-tag me-2 fs-0"></i>
                                <span class="fs-0">20% off</span></span>
                            <span class="badge bg-primary ms-2 me-1 p-2">
                                <i class="fas fa-clock me-1 fs-0"></i>
                                <span class="fs-0">Fast</span>
                            </span>
                        </div>
                        <div class="card-body ps-0">
                            <div class="d-flex align-items-center mb-3">
                                {{-- <img class="img-fluid" src="assets/img/gallery/food-world-logo.png" alt="" /> --}}
                                <div class="flex-1 ms-3">
                                    <h5 class="mb-0 fw-bold text-1000">Food world</h5>
                                    <span class="text-primary fs--1 me-1">
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <span class="mb-0 text-primary">$$$ . noodle yummy</span>
                                    <div class="text-primary fs--1 me-1">
                                        <i class="fas fa-clock me-1 fs-0"></i>
                                        <span>20 min .</span>&nbsp;
                                        <i class="fas fa-motorcycle me-2"></i>
                                        <span>Free</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 h-100 mb-5" data-bs-toggle="modal" data-bs-target="#scrollBodyModal">
                    <div class="card card-background card-span text-white rounded-3">
                        <img class="img-fluid card-mage-radius image-card-height"src="assets/img/gallery/food-world.png" alt="..." />
                        <div class="card-img-overlay ps-0">
                            <span class="badge bg-danger p-2 ms-3">
                                <i class="fas fa-tag me-2 fs-0"></i>
                                <span class="fs-0">20% off</span></span>
                            <span class="badge bg-primary ms-2 me-1 p-2">
                                <i class="fas fa-clock me-1 fs-0"></i>
                                <span class="fs-0">Fast</span>
                            </span>
                        </div>
                        <div class="card-body ps-0">
                            <div class="d-flex align-items-center mb-3">
                                {{-- <img class="img-fluid" src="assets/img/gallery/food-world-logo.png" alt="" /> --}}
                                <div class="flex-1 ms-3">
                                    <h5 class="mb-0 fw-bold text-1000">Food world</h5>
                                    <span class="text-primary fs--1 me-1">
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <span class="mb-0 text-primary">$$$ . noodle yummy</span>
                                    <div class="text-primary fs--1 me-1">
                                        <i class="fas fa-clock me-1 fs-0"></i>
                                        <span>20 min .</span>&nbsp;
                                        <i class="fas fa-motorcycle me-2"></i>
                                        <span>Free</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 h-100 mb-5" data-bs-toggle="modal" data-bs-target="#scrollBodyModal">
                    <div class="card card-background card-span text-white rounded-3">
                        <img class="img-fluid card-mage-radius image-card-height"src="assets/img/gallery/food-world.png" alt="..." />
                        <div class="card-img-overlay ps-0">
                            <span class="badge bg-danger p-2 ms-3">
                                <i class="fas fa-tag me-2 fs-0"></i>
                                <span class="fs-0">20% off</span></span>
                            <span class="badge bg-primary ms-2 me-1 p-2">
                                <i class="fas fa-clock me-1 fs-0"></i>
                                <span class="fs-0">Fast</span>
                            </span>
                        </div>
                        <div class="card-body ps-0">
                            <div class="d-flex align-items-center mb-3">
                                {{-- <img class="img-fluid" src="assets/img/gallery/food-world-logo.png" alt="" /> --}}
                                <div class="flex-1 ms-3">
                                    <h5 class="mb-0 fw-bold text-1000">Food world</h5>
                                    <span class="text-primary fs--1 me-1">
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <span class="mb-0 text-primary">$$$ . noodle yummy</span>
                                    <div class="text-primary fs--1 me-1">
                                        <i class="fas fa-clock me-1 fs-0"></i>
                                        <span>20 min .</span>&nbsp;
                                        <i class="fas fa-motorcycle me-2"></i>
                                        <span>Free</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 h-100 mb-5" data-bs-toggle="modal" data-bs-target="#scrollBodyModal">
                    <div class="card card-background card-span text-white rounded-3">
                        <img class="img-fluid card-mage-radius image-card-height"src="assets/img/gallery/food-world.png" alt="..." />
                        <div class="card-img-overlay ps-0">
                            <span class="badge bg-danger p-2 ms-3">
                                <i class="fas fa-tag me-2 fs-0"></i>
                                <span class="fs-0">20% off</span></span>
                            <span class="badge bg-primary ms-2 me-1 p-2">
                                <i class="fas fa-clock me-1 fs-0"></i>
                                <span class="fs-0">Fast</span>
                            </span>
                        </div>
                        <div class="card-body ps-0">
                            <div class="d-flex align-items-center mb-3">
                                {{-- <img class="img-fluid" src="assets/img/gallery/food-world-logo.png" alt="" /> --}}
                                <div class="flex-1 ms-3">
                                    <h5 class="mb-0 fw-bold text-1000">Food world</h5>
                                    <span class="text-primary fs--1 me-1">
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <span class="mb-0 text-primary">$$$ . noodle yummy</span>
                                    <div class="text-primary fs--1 me-1">
                                        <i class="fas fa-clock me-1 fs-0"></i>
                                        <span>20 min .</span>&nbsp;
                                        <i class="fas fa-motorcycle me-2"></i>
                                        <span>Free</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 h-100 mb-5" data-bs-toggle="modal" data-bs-target="#scrollBodyModal">
                    <div class="card card-background card-span text-white rounded-3">
                        <img class="img-fluid card-mage-radius image-card-height"src="assets/img/gallery/food-world.png" alt="..." />
                        <div class="card-img-overlay ps-0">
                            <span class="badge bg-danger p-2 ms-3">
                                <i class="fas fa-tag me-2 fs-0"></i>
                                <span class="fs-0">20% off</span></span>
                            <span class="badge bg-primary ms-2 me-1 p-2">
                                <i class="fas fa-clock me-1 fs-0"></i>
                                <span class="fs-0">Fast</span>
                            </span>
                        </div>
                        <div class="card-body ps-0">
                            <div class="d-flex align-items-center mb-3">
                                {{-- <img class="img-fluid" src="assets/img/gallery/food-world-logo.png" alt="" /> --}}
                                <div class="flex-1 ms-3">
                                    <h5 class="mb-0 fw-bold text-1000">Food world</h5>
                                    <span class="text-primary fs--1 me-1">
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <span class="mb-0 text-primary">$$$ . noodle yummy</span>
                                    <div class="text-primary fs--1 me-1">
                                        <i class="fas fa-clock me-1 fs-0"></i>
                                        <span>20 min .</span>&nbsp;
                                        <i class="fas fa-motorcycle me-2"></i>
                                        <span>Free</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- modal card body --}}
                <div class="modal fade" id="scrollBodyModal" data-bs-keyboard="false" tabindex="-1"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Flat Hill Slingback</h5>
                                <button data-bs-dismiss="modal" class="btn-close-modal">x</button>
                            </div>
                            <div class="modal-body h-9">

                                <img class="modal-card-img rounded-3 w-100" src="assets/img/gallery/discount-item-1.png"
                                    alt="..." />

                                <h3 class="modal-title mt-3">Flat Hill Slingback</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In aliquet nunc massa,
                                    sed posuere eros feugiat ac.</p>
                                <h5>$ 4.55</h5>

                                <div class="border p-3 variation">
                                    <h5>Variation</h5>
                                    <div class="form-check">
                                        <input class="form-check-input medium-check" type="radio"
                                            name="flexRadioDefault" id="flexRadioDefault1" />
                                        <label class="form-check-label" for="flexRadioDefault1"> Medium</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input large-check" type="radio"
                                            name="flexRadioDefault" id="flexRadioDefault2" checked />
                                        <label class="form-check-label" for="flexRadioDefault2">Large</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input small-check" type="radio"
                                            name="flexRadioDefault" id="flexRadioDefault3" />
                                        <label class="form-check-label" for="flexRadioDefault3">Small</label>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <div class="footer-modal">
                                    <div class="qty">
                                        <button class="btn-sub">-</button>
                                        <input class="re" type="text" value="1">
                                        <button class="btn-plus">+</button>
                                    </div>
                                    <button class="add-to-card">Add to card</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 d-flex justify-content-center mt-5">
                    <a class="btn btn-lg btn-primary" href="#!">
                        View All
                        <i class="fas fa-chevron-right ms-2"> </i>
                    </a>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0 bg-primary-gradient">

        <div class="container">
            <div class="row justify-content-center g-0">
                <div class="col-xl-9">
                    <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
                        <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-6">How does it work</h5>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-3 mb-6">
                            <div class="text-center"><img class="shadow-icon" src="assets/img/gallery/location.png"
                                    height="112" alt="..." />
                                <h5 class="mt-4 fw-bold">Select location</h5>
                                <p class="mb-md-0">Choose the location where your food will be delivered.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-6">
                            <div class="text-center"><img class="shadow-icon" src="assets/img/gallery/order.png"
                                    height="112" alt="..." />
                                <h5 class="mt-4 fw-bold">Choose order</h5>
                                <p class="mb-md-0">Check over hundreds of menus to pick your favorite food</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-6">
                            <div class="text-center"><img class="shadow-icon" src="assets/img/gallery/pay.png"
                                    height="112" alt="..." />
                                <h5 class="mt-4 fw-bold">Pay advanced</h5>
                                <p class="mb-md-0">It's quick, safe, and simple. Select several methods of payment</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-6">
                            <div class="text-center"><img class="shadow-icon" src="assets/img/gallery/meals.png"
                                    height="112" alt="..." />
                                <h5 class="mt-4 fw-bold">Enjoy meals</h5>
                                <p class="mb-md-0">Food is made and delivered directly to your home.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-4 overflow-hidden">

        <div class="container">
            <div class="row h-100">
                <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
                    <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Popular items</h5>
                </div>
                <div class="col-12">
                    <div class="carousel slide" id="carouselPopularItems" data-bs-touch="false"
                        data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <div class="row gx-3 h-100 align-items-center">
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"
                                                src="assets/img/gallery/cheese-burger.png" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Cheese Burger</h5>
                                                <div><span class="text-warning me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-primary">Burger Arena</span></div><span
                                                    class="text-1000 fw-bold">$3.88</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"
                                                role="button">Order now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"
                                                src="assets/img/gallery/toffes-cake.png" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Toffe's Cake</h5>
                                                <div><span class="text-warning me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-primary">Top Sticks</span></div><span
                                                    class="text-1000 fw-bold">$4.00</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"
                                                role="button">Order now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"
                                                src="assets/img/gallery/dancake.png" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Dancake</h5>
                                                <div><span class="text-warning me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-primary">Cake World</span></div><span
                                                    class="text-1000 fw-bold">$1.99</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"
                                                role="button">Order now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"
                                                src="assets/img/gallery/crispy-sandwitch.png" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Crispy Sandwitch</h5>
                                                <div><span class="text-warning me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-primary">Fastfood Dine</span></div><span
                                                    class="text-1000 fw-bold">$3.00</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"
                                                role="button">Order now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"
                                                src="assets/img/gallery/thai-soup.png" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Thai Soup</h5>
                                                <div><span class="text-warning me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-primary">Foody Man</span></div><span
                                                    class="text-1000 fw-bold">$2.79</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"
                                                role="button">Order now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                                <div class="row gx-3 h-100 align-items-center">
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"
                                                src="assets/img/gallery/cheese-burger.png" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Cheese Burger</h5>
                                                <div><span class="text-warning me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-primary">Burger Arena</span></div><span
                                                    class="text-1000 fw-bold">$3.88</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"
                                                role="button">Order now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"
                                                src="assets/img/gallery/toffes-cake.png" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Toffe's Cake</h5>
                                                <div><span class="text-warning me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-primary">Top Sticks</span></div><span
                                                    class="text-1000 fw-bold">$4.00</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"
                                                role="button">Order now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"
                                                src="assets/img/gallery/dancake.png" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Dancake</h5>
                                                <div><span class="text-warning me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-primary">Cake World</span></div><span
                                                    class="text-1000 fw-bold">$1.99</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"
                                                role="button">Order now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"
                                                src="assets/img/gallery/crispy-sandwitch.png" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Crispy Sandwitch</h5>
                                                <div><span class="text-warning me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-primary">Fastfood Dine</span></div><span
                                                    class="text-1000 fw-bold">$3.00</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"
                                                role="button">Order now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"
                                                src="assets/img/gallery/thai-soup.png" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Thai Soup</h5>
                                                <div><span class="text-warning me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-primary">Foody Man</span></div><span
                                                    class="text-1000 fw-bold">$2.79</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"
                                                role="button">Order now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <div class="row gx-3 h-100 align-items-center">
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"
                                                src="assets/img/gallery/cheese-burger.png" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Cheese Burger</h5>
                                                <div><span class="text-warning me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-primary">Burger Arena</span></div><span
                                                    class="text-1000 fw-bold">$3.88</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"
                                                role="button">Order now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"
                                                src="assets/img/gallery/toffes-cake.png" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Toffe's Cake</h5>
                                                <div><span class="text-warning me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-primary">Top Sticks</span></div><span
                                                    class="text-1000 fw-bold">$4.00</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"
                                                role="button">Order now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"
                                                src="assets/img/gallery/dancake.png" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Dancake</h5>
                                                <div><span class="text-warning me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-primary">Cake World</span></div><span
                                                    class="text-1000 fw-bold">$1.99</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"
                                                role="button">Order now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"
                                                src="assets/img/gallery/crispy-sandwitch.png" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Crispy Sandwitch</h5>
                                                <div><span class="text-warning me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-primary">Fastfood Dine</span></div><span
                                                    class="text-1000 fw-bold">$3.00</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"
                                                role="button">Order now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"
                                                src="assets/img/gallery/thai-soup.png" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Thai Soup</h5>
                                                <div><span class="text-warning me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-primary">Foody Man</span></div><span
                                                    class="text-1000 fw-bold">$2.79</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"
                                                role="button">Order now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row gx-3 h-100 align-items-center">
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"
                                                src="assets/img/gallery/cheese-burger.png" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Cheese Burger</h5>
                                                <div><span class="text-warning me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-primary">Burger Arena</span></div><span
                                                    class="text-1000 fw-bold">$3.88</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"
                                                role="button">Order now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"
                                                src="assets/img/gallery/toffes-cake.png" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Toffe's Cake</h5>
                                                <div><span class="text-warning me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-primary">Top Sticks</span></div><span
                                                    class="text-1000 fw-bold">$4.00</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"
                                                role="button">Order now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"
                                                src="assets/img/gallery/dancake.png" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Dancake</h5>
                                                <div><span class="text-warning me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-primary">Cake World</span></div><span
                                                    class="text-1000 fw-bold">$1.99</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"
                                                role="button">Order now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"
                                                src="assets/img/gallery/crispy-sandwitch.png" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Crispy Sandwitch</h5>
                                                <div><span class="text-warning me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-primary">Fastfood Dine</span></div><span
                                                    class="text-1000 fw-bold">$3.00</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"
                                                role="button">Order now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"
                                                src="assets/img/gallery/thai-soup.png" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Thai Soup</h5>
                                                <div><span class="text-warning me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-primary">Foody Man</span></div><span
                                                    class="text-1000 fw-bold">$2.79</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"
                                                role="button">Order now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-icon" type="button"
                            data-bs-target="#carouselPopularItems" data-bs-slide="prev"><span
                                class="carousel-control-prev-icon hover-top-shadow" aria-hidden="true"></span><span
                                class="visually-hidden">Previous</span></button>
                        <button class="carousel-control-next carousel-icon" type="button"
                            data-bs-target="#carouselPopularItems" data-bs-slide="next"><span
                                class="carousel-control-next-icon hover-top-shadow" aria-hidden="true"></span><span
                                class="visually-hidden">Next </span></button>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->

    <section>
        <div class="bg-holder"
            style="background-image:url(assets/img/gallery/cta-one-bg.png);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="card card-span shadow-warning" style="border-radius: 35px;">
                        <div class="card-body py-5">
                            <div class="row justify-content-evenly">
                                <div class="col-md-3">
                                    <div
                                        class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between">
                                        <img src="assets/img/icons/discounts.png" width="100" alt="..." />
                                        <div class="d-flex d-lg-block d-xl-flex flex-center">
                                            <h2 class="fw-bolder text-1000 mb-0 text-gradient">Daily<br
                                                    class="d-none d-md-block" />Discounts </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 hr-vertical">
                                    <div
                                        class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between">
                                        <img src="assets/img/icons/live-tracking.png" width="100" alt="..." />
                                        <div class="d-flex d-lg-block d-xl-flex flex-center">
                                            <h2 class="fw-bolder text-1000 mb-0 text-gradient">Live Tracking</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 hr-vertical">
                                    <div
                                        class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between">
                                        <img src="assets/img/icons/quick-delivery.png" width="100" alt="..." />
                                        <div class="d-flex d-lg-block d-xl-flex flex-center">
                                            <h2 class="fw-bolder text-1000 mb-0 text-gradient">Quick Delivery </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-center mt-md-8">
                <div class="col-lg-5 d-none d-lg-block" style="margin-bottom: -122px;"> <img class="w-100"
                        src="assets/img/gallery/phone-cta-one.png" alt="..." /></div>
                <div class="col-lg-5 mt-7 mt-md-0">
                    <h1 class="text-primary">Install the app</h1>
                    <p>It's never been easier to order food. Look for the finest <br class="d-none d-xl-block" />discounts
                        and
                        you'll be lost in a world of delectable food.</p><a class="pe-2"
                        href="https://www.apple.com/app-store/" target="_blank"><img
                            src="assets/img/gallery/app-store.svg" width="160" alt="" /></a><a
                        href="https://play.google.com/store/apps" target="_blank"><img
                            src="assets/img/gallery/google-play.svg" width="160" alt="" /></a>
                </div>
            </div>
        </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pb-5 pt-8">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card-span mb-3 shadow-lg">
                        <div class="card-body py-0">
                            <div class="row justify-content-center">
                                <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-0 order-md-1"><img
                                        class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-end rounded-md-top-0"
                                        src="assets/img/gallery/crispy-sandwiches.png" alt="..." /></div>
                                <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                                    <h1 class="card-title mt-xl-5 mb-4">Best deals <span class="text-primary"> Crispy
                                            Sandwiches</span>
                                    </h1>
                                    <p class="fs-1">Enjoy the large size of sandwiches. Complete your meal with the
                                        perfect slice of
                                        sandwiches.</p>
                                    <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6"
                                            href="#!">PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card-span mb-3 shadow-lg">
                        <div class="card-body py-0">
                            <div class="row justify-content-center">
                                <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-md-0"><img
                                        class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-start rounded-md-top-0"
                                        src="assets/img/gallery/fried-chicken.png" alt="..." /></div>
                                <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                                    <h1 class="card-title mt-xl-5 mb-4">Celebrate parties with <span
                                            class="text-primary">Fried
                                            Chicken</span></h1>
                                    <p class="fs-1">Get the best fried chicken smeared with a lip smacking lemon chili
                                        flavor. Check out
                                        best deals for fried chicken.</p>
                                    <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6"
                                            href="#!">PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card-span mb-3 shadow-lg">
                        <div class="card-body py-0">
                            <div class="row justify-content-center">
                                <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-0 order-md-1"><img
                                        class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-end rounded-md-top-0"
                                        src="assets/img/gallery/pizza.png" alt="..." /></div>
                                <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                                    <h1 class="card-title mt-xl-5 mb-4">Wanna eat hot & <span class="text-primary">spicy
                                            Pizza?</span>
                                    </h1>
                                    <p class="fs-1">Pair up with a friend and enjoy the hot and crispy pizza pops. Try
                                        it with the best
                                        deals.</p>
                                    <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6"
                                            href="#!">PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <section class="py-0">
        <div class="bg-holder"
            style="background-image:url(assets/img/gallery/cta-two-bg.png);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row flex-center">
                <div class="col-xxl-9 py-7 text-center">
                    <h1 class="fw-bold mb-4 text-white fs-6">Are you ready to order <br />with the best deals? </h1><a
                        class="btn btn-danger" href="#"> PROCEED TO ORDER<i
                            class="fas fa-chevron-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
