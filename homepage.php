<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>OSF Project</title>
</head>

<body class="bg-light">
    <!-- topbar -->
    <?php include 'header.php'; ?>

    <div class="container contproduct p-0">

        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-md-9 px-3 mx-md-0">
                    <div id="carouselExampleIndicators" class="carousel slide position-relative" data-bs-ride="true">
                        <div class="carousel-indicators align-items-center">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner filter">
                            <div class="carousel-item active">
                                <img src="img/bagsHeader.png" class="d-block w-100" alt="...">
                                <div class="lefty mx-auto text-md-start">
                                    <h1 class="text-white mb-md-5 mb-4 text-start">Control and manage any device with cloud solutions</h1>
                                    <p class="my-lg-3 text-white text-start">Improve business performance and the user experience with the right mix of IoT technology and processes</p>
                                    <button type="button" class="btn btn-outline-light text-uppercase px-4 text-md-start" onclick="location.href = 'services.php';">View More</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/slider2.png" class="d-block w-100" alt="...">
                                <div class="centy text-center">
                                    <h1 class="text-white mb-md-5 mb-4">Control and manage any device with cloud solutions</h1>
                                    <p class="my-lg-3 text-white">Improve business performance and the user experience with the right mix of IoT technology and processes</p>
                                    <button type="button" class="btn btn-outline-light text-uppercase px-4" onclick="location.href = 'services.php';">View More</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/slider3.png" class="d-block w-100" alt="...">
                                <div class="righty text-md-end">
                                    <h1 class="text-white mb-md-5 mb-4 text-end">Control and manage any device with cloud solutions</h1>
                                    <p class="my-lg-3 text-white text-end">Improve business performance and the user experience with the right mix of IoT technology and processes</p>
                                    <button type="button" class="btn btn-outline-light text-uppercase px-4 text-md-end" onclick="location.href = 'services.php';">View More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 right-side">
                    <div class="container position-relative">
                        <img class="mw-100" src="img/summerSales.png" alt=""></a>
                        <div class="centered">
                            <h1 class="text-center text-white">55%</h1>
                            <p class="text-center my-lg-3 text-white">SUMMER SALES</p>
                        </div>
                    </div>
                    <div class="mt-md-3">
                        <h5>Follow us on Facebook</h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit</p>
                        <div class="align-self-end">
                            <button type="button" class="btn btn-primary" onclick="location.href = 'https://www.facebook.com/';"><i class="fab fa-facebook-f"></i>FOLLOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- desktop popular items -->
    <div class="container mw-100 feat px-md-5 px-3 py-md-5 py-3">

        <h4 class="otherdecorated"><span>Popular Items</span></h4>

        <div class="container mx-auto p-0">
            <div class="row my-4">
                <div class="col-md-3 d-md-flex align-items-md-stretch blogBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/posts-1.jpg" alt="Card image cap">
                        <div class="card-overlay">
                            <div class="centered">
                                <button type="button" class="btn rounded btn-light btn-lg btn-floating" onclick="cartCount()">
                                    <i class="fa-solid fa-plus text-success"></i>
                                </button>
                                <button type="button" class="btn rounded btn-light btn-lg btn-floating" onclick="favouriteCount()">
                                    <i class="fa-solid fa-heart text-danger"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-md-flex align-items-md-stretch blogBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/posts-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <span class="card-link text-muted">$659.55</span>
                            <a class="card-link text-uppercase text-dark" onclick="cartCount()">Buy now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-md-flex align-items-md-stretch blogBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/posts-1.jpg" alt="Card image cap">
                        <div class="card-overlay">
                            <div class="centered">
                                <button type="button" class="btn rounded btn-light btn-lg btn-floating" onclick="cartCount()">
                                    <i class="fa-solid fa-plus text-success"></i>
                                </button>
                                <button type="button" class="btn rounded btn-light btn-lg btn-floating" onclick="favouriteCount()">
                                    <i class="fa-solid fa-heart text-danger"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-md-flex align-items-md-stretch blogBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/posts-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row my-4">
                <div class="col-md-3 d-md-flex align-items-md-stretch blogBox mobileBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/posts-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-md-flex align-items-md-stretch blogBox mobileBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/posts-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-md-flex align-items-md-stretch blogBox mobileBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/posts-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch blogBox mobileBox">
                    <div class="card text-left text-white w-100 none">
                        <img class="card-img" src="img/item8.png" alt="Card image cap">
                        <div class="card-img-overlay card-overlay-static">
                            <div class="lefted container ms-lg-3 ms-1 mb-3">
                                <div class="row">
                                    <div class="col">
                                        <p class="card-text">My dragons are misbehaving again. Unbelievable!</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <img class="card-text" src="img/thinking.png" alt="">
                                    </div>
                                    <div class="col-7">
                                        <sub class="card-text">5H AGO</sub>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- more cards -->
            <div class="row my-4">
                <div class="col-md-3 d-md-flex align-items-md-stretch blogBox moreBox desktopBox mobileBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/posts-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-md-flex align-items-md-stretch blogBox moreBox desktopBox mobileBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/posts-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-md-flex align-items-md-stretch blogBox moreBox desktopBox mobileBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/posts-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch blogBox moreBox desktopBox mobileBox">
                    <div class="card text-left text-white w-100 none">
                        <img class="card-img" src="img/item8.png" alt="Card image cap">
                        <div class="card-img-overlay card-overlay-static">
                            <div class="lefted container ms-lg-3 ms-1 mb-3">
                                <div class="row">
                                    <div class="col">
                                        <p class="card-text">My dragons are misbehaving again. Unbelievable!</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <img class="card-text" src="img/thinking.png" alt="">
                                    </div>
                                    <div class="col-7">
                                        <sub class="card-text">5H AGO</sub>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- mobile carousel popular items -->
            <div class="row my-4 notyet">

                <!-- carousel part -->
                <div class="col">
                    <div id="carousel" class="carousel slide position-relative car-mobile" data-bs-ride="true">
                        <div class="carousel-indicators blackindicators align-items-center">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!-- <img src="img/bagsHeader.png" class="d-block w-100" alt="...">
                                <div class="lefty mx-auto text-md-start">
                                    <h1 class="text-white mb-md-5 mb-4 text-start">Control and manage any device with cloud solutions</h1>
                                    <p class="my-lg-3 text-white text-start">Improve business performance and the user experience with the right mix of IoT technology and processes</p>
                                    <button type="button" class="btn btn-outline-light text-uppercase px-4 text-md-start">View More</button>
                                </div> -->
                                <div class="row">
                                    <!-- <div class="col-md d-md-flex align-items-md-stretch py-md-0 py-4">
                                        <div class="card text-center">
                                            <img class="card-img-top" src="img/nav-girl.png" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-md-3 d-md-flex align-items-md-stretch py-md-0 py-4">
                                        <div class="card text-center">
                                            <img class="card-img-top" src="img/posts-1.jpg" alt="Card image cap">
                                            <div class="card-overlay">
                                                <button type="button" class="btn btn-primary btn-lg btn-floating">
                                                    <i class="fab fa-facebook-f"></i>
                                                </button>
                                                <button type="button" class="btn btn-primary btn-lg btn-floating">
                                                    <i class="fab fa-facebook-f"></i>
                                                </button>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <!-- <img src="img/slider2.png" class="d-block w-100" alt="...">
                                <div class="centy text-center">
                                    <h1 class="text-white mb-md-5 mb-4">Control and manage any device with cloud solutions</h1>
                                    <p class="my-lg-3 text-white">Improve business performance and the user experience with the right mix of IoT technology and processes</p>
                                    <button type="button" class="btn btn-outline-light text-uppercase px-4">View More</button>
                                </div> -->
                                <div class="row">
                                    <!-- <div class="col-md d-md-flex align-items-md-stretch py-md-0 py-4">
                                        <div class="card text-center">
                                            <img class="card-img-top" src="img/posts-2.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-md-3 d-md-flex align-items-md-stretch py-md-0 py-4">
                                        <div class="card text-center">
                                            <img class="card-img-top" src="img/posts-1.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                                <a href="#" class="card-link">Card link</a>
                                                <a href="#" class="card-link">Another link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <!-- <img src="img/slider3.png" class="d-block w-100" alt="...">
                                <div class="righty text-md-end">
                                    <h1 class="text-white mb-md-5 mb-4 text-end">Control and manage any device with cloud solutions</h1>
                                    <p class="my-lg-3 text-white text-end">Improve business performance and the user experience with the right mix of IoT technology and processes</p>
                                    <button type="button" class="btn btn-outline-light text-uppercase px-4 text-md-end">View More</button>
                                </div> -->
                                <div class="row">
                                    <!-- <div class="col-md d-md-flex align-items-md-stretch py-md-0 py-4">
                                        <div class="card text-center">
                                            <img class="card-img-top" src="img/item4.png" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-md-3 d-md-flex align-items-md-stretch py-md-0 py-4">
                                        <div class="card text-center">
                                            <img class="card-img-top" src="img/posts-1.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <!-- <img src="img/slider3.png" class="d-block w-100" alt="...">
                                <div class="righty text-md-end">
                                    <h1 class="text-white mb-md-5 mb-4 text-end">Control and manage any device with cloud solutions</h1>
                                    <p class="my-lg-3 text-white text-end">Improve business performance and the user experience with the right mix of IoT technology and processes</p>
                                    <button type="button" class="btn btn-outline-light text-uppercase px-4 text-md-end">View More</button>
                                </div> -->
                                <div class="row">
                                    <!-- <div class="col-md d-md-flex align-items-md-stretch py-md-0 py-4">
                                        <div class="card text-center">
                                            <img class="card-img-top" src="img/posts-3.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-md-3 d-md-flex align-items-md-stretch py-md-0 py-4">
                                        <div class="card text-center">
                                            <img class="card-img-top" src="img/posts-1.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-md d-md-flex align-items-md-stretch py-md-0 py-4">
                    </div>
                    <div class="col-md d-md-flex align-items-md-stretch py-md-0 py-4">

                    </div>
                    <div class="col-md d-md-flex align-items-md-stretch py-md-0 py-4">

                    </div>
                    <div class="col-md d-md-flex align-items-md-stretch py-md-0 py-4">

                    </div> -->
            </div>

            <div class="row my-5">
                <button id="loadMore2" type="button" class="btn btn-outline-green btn-sm mx-auto none">LOAD MORE <i class="fa-solid fa-arrow-rotate-right"></i></button>
            </div>
        </div>
    </div>
    <!-- desktop popular items -->

    <!-- mobile popular items -->
    <!-- mobile popular items -->

    <div class="container mw-100 p-0 position-relative">
        <img class="w-100" src="img/banner.png" alt="Snow">
        <div id="full" class="centered">
            <h1 class="text-center text-white">Banner OSF Theme</h1>
            <p class="text-center my-lg-3 text-white">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
        </div>
    </div>

    <div class="container-fluid feat px-lg-5 py-5 featlp">

        <h1 class="text-center text-white">Featured Products</h1>

        <p class="text-center my-lg-3 text-white">Unde omnis iste natus error sit voluptatem</p>


        <!-- swiper -->
        <div class="container mx-auto ">

            <div class="row mb-3 arrows mx-auto">
                <div class="col text-light"><i id="prev" class="fa-solid fa-angle-left p-3"></i></div>
                <div id="middle" class="col-1 text-light text-center">
                    <h6 class="py-3 m-0">///</h6>
                </div>
                <div class="col text-end text-light"><i id="next" class="fa-solid fa-angle-right p-3"></i></div>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card text-center">
                            <img class="card-img-top" src="img/posts-1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-center">
                            <img class="card-img-top" src="img/posts-2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-center">
                            <img class="card-img-top" src="img/posts-3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-center">
                            <img class="card-img-top" src="img/posts-4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-center">
                            <img class="card-img-top" src="img/posts-1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-center">
                            <img class="card-img-top" src="img/posts-2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-center">
                            <img class="card-img-top" src="img/posts-3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-center">
                            <img class="card-img-top" src="img/posts-4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-center">
                            <img class="card-img-top" src="img/posts-1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="container mw-100 service py-5">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img src="img/service-focus.png" alt="">
                            </div>
                            <div class="col">
                                <h6>FOCUS</h6>
                                <p>Our unwavering focus on superior service delivery and building next generation
                                    competencies</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="container">
                        <div class="row">
                            <div class="col order-md-1 order-2">
                                <img src="img/service-method.png" alt="">
                            </div>
                            <div class="col order-md-2 order-1">
                                <h6>METHOD</h6>
                                <p>A standardized methodology designed to deliver measurable business results and
                                    predictable costs</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img src="img/service-knowledge.png" alt="">
                            </div>
                            <div class="col">
                                <h6>KNOWLEDGE</h6>
                                <p>A highly skilled, proactive workforce that reliably improves each client’s ROI while
                                    mitigating their business risk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- Footer -->
    <!--Scripts-->
    <script src="assets/bootstrap/jquery-3.6.0.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="assets/bootstrap/popper.min.js"></script>
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/fontsawesome/fontsawesome.js"></script>
    <script src="assets/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>