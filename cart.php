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
    <?php include 'header.php';?>

    <div class="container contproduct p-0">

        <nav class="mx-auto" aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav>

        <h1 class="decorated my-5"><span>Shopping Cart</span></h1>

        <div class="container-fluid filter bg-white">
            <div class="row py-4">
                <div class="col-md-2 d-flex justify-content-end">
                    <img class="mw-100" src="img/imggris.png" alt="">
                </div>
                <div class="col-md-4">
                    <h6>Kristina Dam Oak Table With White Marble Top</h6>
                    <sub class="text-muted">$2,195.00</sub>
                </div>
                <div class="col-md-2 d-flex justify-content-end">
                    <div class="qty mt-2">
                        <span class="minus bg-dark">-</span>
                        <input type="number" class="count" name="qty" value="1">
                        <span class="plus bg-dark">+</span>
                    </div>
                </div>
                <div class="col-md-2 d-flex justify-content-end">
                    <h2>$299.29</h2>
                </div>
                <div class="col-md-1 d-flex justify-content-end">
                    <button type="button" class="btn-close mt-2" aria-label="Close"></button>
                </div>
            </div>
            <div class="row py-4">
                <div class="col-md-2 d-flex justify-content-end">
                    <img class="mw-100" src="img/imggris.png" alt="">
                </div>
                <div class="col-md-4">
                    <h6>Kristina Dam Oak Table With White Marble Top</h6>
                    <sub class="text-muted">$2,195.00</sub>
                </div>
                <div class="col-md-2 d-flex justify-content-end">
                    <div class="qty mt-2">
                        <span class="minus bg-dark">-</span>
                        <input type="number" class="count" name="qty" value="1">
                        <span class="plus bg-dark">+</span>
                    </div>
                </div>
                <div class="col-md-2 d-flex justify-content-end">
                    <h2>$299.29</h2>
                </div>
                <div class="col-md-1 d-flex justify-content-end">
                    <button type="button" class="btn-close mt-2" aria-label="Close"></button>
                </div>
            </div>
            <div class="row border-top pt-4 pb-5">
                <div class="col-md-5 d-flex justify-content-end">
                    <input type="text" placeholder="Enter Coupon Code">
                    <button type="button" class="btn btn-green btn-sm ms-2">LOAD MORE</button>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-green btn-sm ms-2">LOAD MORE</button>
                    <button type="button" class="btn btn-green btn-sm ms-2">LOAD MORE</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php';?>
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
    <script src="assets/js/main.js"></script>
    <script src="assets/bootstrap/popper.min.js"></script>
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/fontsawesome/fontsawesome.js"></script>
</body>

</html>