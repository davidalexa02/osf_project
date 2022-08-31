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

    <div class="container contproduct">

        <div class="container-fluid filter bg-white">


            <div class="row py-4">
                <div class="col">
                    <div>
                        <!-- Countdown timer -->
                        <div class="flex flex-wrap justify-center gap-4" x-data="timer()" x-init="countdown()">
                            <div class="timer-circle">
                                <div>
                                    <span class="timer-count" x-text="days"></span>
                                    <span class="timer-type">Days</span>
                                </div>
                            </div>
                            <div class="timer-circle">
                                <div>
                                    <span class="timer-count" x-text="hours"></span>
                                    <span class="timer-type">Hours</span>
                                </div>
                            </div>
                            <div class="timer-circle">
                                <div>
                                    <span class="timer-count" x-text="minutes"></span>
                                    <span class="timer-type">Minutes</span>
                                </div>
                            </div>
                            <div class="timer-circle">
                                <div>
                                    <span class="timer-count" x-text="seconds"></span>
                                    <span class="timer-type">Seconds</span>
                                </div>
                            </div>
                        </div>
                        <!-- Countdown timer ends -->
                        <div class="mt-12 text-white text-center">
                            <h1 class="font-bold text-4xl md:text-5xl">
                                Project Coming Soon
                            </h1>
                            <p class="pt-4 text-lg md:text-xl">
                                We love to create dependable business solutions for
                                companies of all sizes and any industry. Our goal is
                                to improve accuracy and efficiency to reduce
                                operational costs
                            </p>
                        </div>
                        <form action="" class="mt-8 md:flex md:max-w-lg md:mx-auto">
                            <div class="relative">
                                <input id="email" type="email" placeholder="Email address" class="
                                    peer
                                    px-8
                                    pt-5
                                    pb-3
                                    w-full
                                    placeholder-transparent
                                    rounded-full
                                    flex-grow
                                    md:rounded-r-none
                                " />
                                <label for="email" class="
                                    absolute
                                    text-gray-700
                                    left-8
                                    top-2
                                    font-bold
                                    text-xs
                                    peer-placeholder-shown:top-4
                                    peer-placeholder-shown:font-normal
                                    peer-placeholder-shown:text-base
                                    peer-focus:top-2
                                    peer-focus:font-bold
                                    peer-focus:text-xs
                                    cursor-text
                                    transition-all
                                ">Email address</label>
                            </div>
                            <button type="submit" class="
                                mt-4
                                bg-pink-800
                                text-white
                                uppercase
                                font-bold
                                text-sm text-center
                                w-full
                                px-8
                                h-14
                                rounded-full
                                md:mt-0 md:rounded-l-none md:w-48
                            ">
                                Sign up
                            </button>
                        </form>
                    </div>
                </div>
                <!-- <div class="col-lg-5 d-flex flex-column justify-content-center align-items-center">
                    <h1 class="text-center ops">Oops!</h1>
                </div>
                <div class="col-lg-6 pb-4">
                    <h4 class="fw-bold">Sorry, this page could not be found!</h4>
                    <p class="mt-3 mb-5">Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                        parturient montes, nascetur ridiculus mus. <br><br>

                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa.
                    </p>
                    <a href="homepage.html">Go back to Homepage</a>
                    <h4 class="mt-5 pb-2 fw-bold">Search our site</h4>
                    <div class="input-group">
                        <input class="form-control border-end-0 border rounded-pill" type="search" placeholder="SEARCH" id="example-search-input">
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border rounded-pill ms-n5" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </div> -->
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