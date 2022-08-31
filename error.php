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

    <div class="container contproduct">
        <nav class="mx-auto" aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">404</li>
            </ol>
        </nav>

        <h1 class="decorated my-5"><span>404</span></h1>

        <div class="container-fluid filter bg-white">
            <div class="row py-4">
                <div class="col-lg-5 d-flex flex-column justify-content-center align-items-center">
                    <h1 class="text-center ops">Oops!</h1>
                </div>
                <div class="col-lg-6 pb-4">
                    <h4 class="fw-bold">Sorry, this page could not be found!</h4>
                    <p class="mt-3 mb-5">Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                        parturient montes, nascetur ridiculus mus. <br><br>

                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa.
                    </p>
                    <a href="homepage.php">Go back to Homepage</a>
                    <h4 class="mt-5 pb-2 fw-bold">Search our site</h4>
                    <div class="input-group">
                        <input class="form-control border-end-0 border rounded-pill" type="search" placeholder="SEARCH" id="example-search-input">
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border rounded-pill ms-n5" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
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
    <script src="assets/js/index.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/bootstrap/popper.min.js"></script>
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/fontsawesome/fontsawesome.js"></script>
</body>

</html>