<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/swiper/swiper-bundle.min.css" />
    <title>OSF Project</title>
</head>

<body class="bg-light">
    <!-- topbar -->
    <?php include 'header.php'; ?>

    <div class="container contproduct">
        <nav class="mx-auto" aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Category landing</li>
            </ol>
        </nav>

        <h1 class="decorated my-5"><span>Services</span></h1>

        <div id="changingContainer" class="container-fluid filter bg-white">
            <div class="row pt-4 pb-md-4">
                <div class="col-md d-flex justify-content-md-start pt-md-3">
                    <label for="price">Price</label>
                    <select id="price" name="price" class="form-select w-75" aria-label="Default select example">
                        <option value="1">$0.00-$100.00</option>
                        <option value="2">$100.00-$200.00</option>
                        <option value="3">$200.00-$300.00</option>
                    </select>
                </div>
                <div class="col-md d-flex justify-content-md-center pt-3">
                    <label for="brands">Brands</label>
                    <select id="brands" name="brands" class="form-select w-75" aria-label="Default select example">
                        <option value="1">Ukraine Sport</option>
                        <option value="2">Romania Sport</option>
                        <option value="3">Spain Sport</option>
                    </select>
                </div>
                <div class="col-md d-flex justify-content-md-end pt-3">
                    <label for="size">Size</label>
                    <select id="size" name="size" class="form-select w-75" aria-label="Default select example">
                        <option value="1">Small</option>
                        <option value="2">Medium</option>
                        <option value="3">Large</option>
                    </select>
                </div>
            </div>
            <div class="row pb-4 pt-md-4">
                <div class="col-md d-flex justify-content-md-start pt-3">
                    <label for="price">Color</label>
                    <div class="mt-2 ml-2">
                        <input class="form-check-input colors white" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="#ffffff">
                        <input class="form-check-input colors blue" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="#00ffff">
                        <input class="form-check-input colors black" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="#00008b">
                        <input class="form-check-input colors green" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="#ff0000">
                        <input class="form-check-input colors darkblue" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="#ff4500">
                        <input class="form-check-input colors orange" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="#008000">
                        <input class="form-check-input colors red" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="#808080">
                        <input class="form-check-input colors gray" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="#000000">
                    </div>
                </div>
                <div class="col-md d-flex justify-content-md-center pt-3">
                    <label for="brands">Sort by</label>
                    <select id="brands" name="brands" class="form-select w-75" aria-label="Default select example">
                        <option value="1">Price</option>
                        <option value="2">Brands</option>
                        <option value="3">Size</option>
                    </select>
                </div>
                <div class="col-md d-flex justify-content-md-end pt-3">
                    <label for="size">Show</label>
                    <select id="size" name="size" class="form-select w-75" aria-label="Default select example">
                        <option value="1">16 per page</option>
                        <option value="2">24 per page</option>
                        <option value="3">32 per page</option>
                    </select>
                </div>
            </div>
        </div>

        <p class="text-center my-3">12,209 results in apparel</p>

        <div class="container">
            <div class="row my-4">
                <div class="col-md-3 blogBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/item3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-md-0 mt-4 blogBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/item3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-md-0 mt-4 blogBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/item3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-md-0 mt-4 blogBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/item3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-3 blogBox moreBox mobileBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/item3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-md-0 mt-4 blogBox moreBox mobileBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/item3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-md-0 mt-4 blogBox moreBox mobileBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/item3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-md-0 mt-4 blogBox moreBox mobileBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/item3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-3 blogBox moreBox mobileBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/item3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-md-0 mt-4 blogBox moreBox mobileBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/item3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-md-0 mt-4 blogBox moreBox mobileBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/item3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-md-0 mt-4 blogBox moreBox mobileBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/item3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-3 blogBox moreBox mobileBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/item3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-md-0 mt-4 blogBox moreBox mobileBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/item3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-md-0 mt-4 blogBox moreBox mobileBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/item3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-md-0 mt-4 blogBox moreBox mobileBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/item3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-3 blogBox moreBox desktopBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/item3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-md-0 mt-4 blogBox moreBox desktopBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/item3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-md-0 mt-4 blogBox moreBox desktopBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/item3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-md-0 mt-4 blogBox moreBox desktopBox">
                    <div class="card text-center">
                        <img class="card-img-top" src="img/item3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <button id="loadMore" type="button" class="btn btn-green btn-sm mx-auto">LOAD MORE</button>
            </div>
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

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- Footer -->



    <div class="cookie-container">
        <p>
            We use cookies in this website to give you the best experience on our
            site and show you relevant ads. To find out more, read our
            <a href="#">privacy policy</a> and <a href="#">cookie policy</a>.
        </p>

        <button class="cookie-btn">
            Okay
        </button>
    </div>

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