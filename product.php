<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>OSF Project</title>
</head>

<body class="bg-light">
    <!-- topbar -->
    <?php include 'header.php'; ?>

    <div class="container contproduct p-0">

        <nav class="mx-auto" aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav>

        <h1 class="decorated my-5"><span>Ruffle Front V-Neck Cardigan</span></h1>

        <div class="container-fluid filter bg-white">
            <div class="row pb-4">
                <div class="col-lg-6">
                    <img class="mw-100" src="img/PG.10216885.JJ169XX.PZ.png" alt="">
                </div>
                <div class="col-lg-2">
                    <p><img class="mw-100" src="img/PG.10216885.JJ169XX.PZ-small.png" alt=""></p>
                    <p><img class="mw-100" src="img/productthmb2.png" alt=""></p>
                    <p><img class="mw-100" src="img/producttmb3.png" alt=""></p>
                    <p><img class="mw-100" src="img/producttmb4.png" alt=""></p>
                </div>
                <div class="col-lg-4 text-left">
                    <h1 class="my-5">$299.29</h1>
                    <p>
                        <select id="size" name="size" class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </p>
                    <p>
                    <div class="qty mt-5">
                        <span class="minus bg-dark">-</span>
                        <input type="number" class="count" name="qty" value="1">
                        <span class="plus bg-dark">+</span>
                    </div>
                    <button type="button" class="btn btn-green btn-sm mx-auto ">LOAD MORE</button>
                    </p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore Beatae vitae dicta sunt explicabo.
                        Nemo enim ipsam voluptatem quia voluptas <br> <a href="">Read more</a>
                    </p>
                    <p>
                        <a href="" class="text-muted me-2">Share</a>
                        <i class="fab fa-facebook-f"></i><i class="fab fa-google"></i><i class="fab fa-twitter"></i><i class="fab fa-pinterest"></i>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mw-100 p-lg-5">

            <h1 class="text-center">Popular Items</h1>

            <div class="container mx-auto p-0">
                <div class="row my-4">
                    <div class="col-md">
                        <div class="card">
                            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card">
                            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card">
                            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card">
                            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-5 notyet">
                    <button type="button" onclick="topFunction()" id="myBtn" class="btn btn-green btn-sm mx-auto text-uppercase">Scroll to top</button>
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

    <!-- bottombar -->
    <!-- <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
    </ul> -->

    <!--Scripts-->

    <script src="assets/bootstrap/jquery-3.6.0.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/bootstrap/popper.min.js"></script>
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/fontsawesome/fontsawesome.js"></script>
</body>

</html>