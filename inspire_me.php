<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="Components/footer2.css">
    <link rel="stylesheet" href="Components/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <title>Home</title>
</head>

<body>
        <?php include "Components/header.php"; ?>
<main>
        <!-- Featured content -->

        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/1.jpg" class="d-block img-fluid w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/1.jpg" class="d-block img-fluid w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/1.jpg" class="d-block img-fluid w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Collections -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row justify-content-center">
                        <div class="text-center flex-row">
                            <div class="p-2">
                                <p class="fs-3">Discovery just for you</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="collections">
                            <div id="carouselExampleIndicators" class="carousel">
                                <div class="carousel-inner collection-carousel-inner">
                                    <div class="carousel-item active collection-carousel-item ms-1">
                                        <div class="row">
                                            <img src="images/1.jpg" alt="" class="img-fluid" class="img-fluid" />
                                            <div class="col-6 text-start text-dark">
                                                <p style="font-size: 13px;"><strong>ARTWORKS NEW COLLECTIONS
                                                        2024</strong><br>35 Objects</p>
                                            </div>
                                            <div class="row text-center">
                                                <a class="text-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                                    style="font-size: 14px;" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-caret-right-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                                    </svg> Discover all <svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item collection-carousel-item ms-1">
                                        <div class="row">
                                            <img src="images/1.jpg" alt="" class="img-fluid" class="img-fluid" />
                                            <div class="col-6 text-start text-dark">
                                                <p style="font-size: 13px;"><strong>ARTWORKS NEW COLLECTIONS
                                                        2024</strong><br>35 Objects</p>
                                            </div>
                                            <div class="row text-center">
                                                <a class="text-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                                    style="font-size: 14px;" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-caret-right-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                                    </svg> Discover all <svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                                    </svg>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item collection-carousel-item ms-1">
                                        <div class="row">
                                            <img src="images/1.jpg" alt="" class="img-fluid" class="img-fluid" />
                                            <div class="col-6 text-start text-dark">
                                                <p style="font-size: 13px;"><strong>ARTWORKS NEW COLLECTIONS
                                                        2024</strong><br>35 Objects</p>
                                            </div>
                                            <div class="row text-center">
                                                <a class="text-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                                    style="font-size: 14px;" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-caret-right-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                                    </svg> Discover all <svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                                    </svg>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item collection-carousel-item ms-1">
                                        <div class="row">
                                            <img src="images/1.jpg" alt="" class="img-fluid" class="img-fluid" />
                                            <div class="col-6 text-start text-dark">
                                                <p style="font-size: 13px;"><strong>ARTWORKS NEW COLLECTIONS
                                                        2024</strong><br>35 Objects</p>
                                            </div>
                                            <div class="row text-center">
                                                <a class="text-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                                    style="font-size: 14px;" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-caret-right-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                                    </svg> Discover all <svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                                    </svg>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item collection-carousel-item ms-1">
                                        <div class="row">
                                            <img src="images/1.jpg" alt="" class="img-fluid" class="img-fluid" />
                                            <div class="col-6 text-start text-dark">
                                                <p style="font-size: 13px;"><strong>ARTWORKS NEW COLLECTIONS
                                                        2024</strong><br>35 Objects</p>
                                            </div>
                                            <div class="row text-center">
                                                <a class="text-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                                    style="font-size: 14px;" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-caret-right-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                                    </svg> Discover all <svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                                    </svg>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item collection-carousel-item ms-1">
                                        <div class="row">
                                            <img src="images/1.jpg" alt="" class="img-fluid" class="img-fluid" />
                                            <div class="col-6 text-start text-dark">
                                                <p style="font-size: 13px;"><strong>ARTWORKS NEW COLLECTIONS
                                                        2024</strong><br>35 Objects</p>
                                            </div>
                                            <div class="row text-center">
                                                <a class="text-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                                    style="font-size: 14px;" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-caret-right-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                                    </svg> Discover all <svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev collection-carousel-control-prev" type="button"
                                    data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next collection-carousel-control-next" type="button"
                                    data-bs-target="#testimonialCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="text-center flex-row">
                        <div class="p-2">
                            <p class="fs-3">New products on auction</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-11">
                    <div class="trending">
                        <div id="carouselExample" class="carousel  slide">
                            <div class="carousel-inner trending-carousel-inner">
                                <div class="trending-carousel-item carousel-item active">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card p-2">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="p-2"></div>
                                                        <div class="p-2">3 days left</div>
                                                        <div class="p-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                class="bi bi-heart" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                                            </svg></div>
                                                    </div>
                                                    <div>
                                                        <img src="images/1.jpg" alt="" class="img-fluid">
                                                        <div class="row">
                                                            <div class="col-5 text-start text-dark"
                                                                style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                                Current Bid:</div>
                                                            <div class="col-4 text-start"
                                                                style="font-size: 16px; margin: 2px;">$1,000</div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <p class="m-2">Barcelona</p>
                                            <div class="text-dark" style="--bs-text-opacity: .5;">
                                                <p class="m-2">Acrilyc, Sand on Canvas</p>
                                                <p class="m-2">90x70cm</p>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <div class="text-dark" style="--bs-text-opacity: .5;">

                                                <p class="m-2">Interesting?</p>
                                                <a href="#" class="btn bidbutton me-2">Bid now</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="trending-carousel-item carousel-item ms-1">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card p-2">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="p-2"></div>
                                                        <div class="p-2">3 days left</div>
                                                        <div class="p-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                class="bi bi-heart" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                                            </svg></div>
                                                    </div>
                                                    <div>
                                                        <img src="images/1.jpg" alt="" class="img-fluid">
                                                        <div class="row">
                                                            <div class="col-5 text-start text-dark"
                                                                style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                                Current Bid:</div>
                                                            <div class="col-4 text-start"
                                                                style="font-size: 16px; margin: 2px;">$1,000</div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <p class="m-2">Barcelona</p>
                                            <div class="text-dark" style="--bs-text-opacity: .5;">
                                                <p class="m-2">Acrilyc, Sand on Canvas</p>
                                                <p class="m-2">90x70cm</p>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <div class="text-dark" style="--bs-text-opacity: .5;">

                                                <p class="m-2">Interesting?</p>
                                                <a href="#" class="btn bidbutton me-2">Bid now</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="trending-carousel-item carousel-item ms-1">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card p-2">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="p-2"></div>
                                                        <div class="p-2">3 days left</div>
                                                        <div class="p-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                class="bi bi-heart" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                                            </svg></div>
                                                    </div>
                                                    <div>
                                                        <img src="images/1.jpg" alt="" class="img-fluid">
                                                        <div class="row">
                                                            <div class="col-5 text-start text-dark"
                                                                style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                                Current Bid:</div>
                                                            <div class="col-4 text-start"
                                                                style="font-size: 16px; margin: 2px;">$1,000</div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <p class="m-2">Barcelona</p>
                                            <div class="text-dark" style="--bs-text-opacity: .5;">
                                                <p class="m-2">Acrilyc, Sand on Canvas</p>
                                                <p class="m-2">90x70cm</p>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <div class="text-dark" style="--bs-text-opacity: .5;">

                                                <p class="m-2">Interesting?</p>
                                                <a href="#" class="btn bidbutton me-2">Bid now</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="trending-carousel-item carousel-item ms-1">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card p-2">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="p-2"></div>
                                                        <div class="p-2">3 days left</div>
                                                        <div class="p-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                class="bi bi-heart" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                                            </svg></div>
                                                    </div>
                                                    <div>
                                                        <img src="images/1.jpg" alt="" class="img-fluid">
                                                        <div class="row">
                                                            <div class="col-5 text-start text-dark"
                                                                style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                                Current Bid:</div>
                                                            <div class="col-4 text-start"
                                                                style="font-size: 16px; margin: 2px;">$1,000</div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <p class="m-2">Barcelona</p>
                                            <div class="text-dark" style="--bs-text-opacity: .5;">
                                                <p class="m-2">Acrilyc, Sand on Canvas</p>
                                                <p class="m-2">90x70cm</p>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <div class="text-dark" style="--bs-text-opacity: .5;">

                                                <p class="m-2">Interesting?</p>
                                                <a href="#" class="btn bidbutton me-2">Bid now</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="trending-carousel-item carousel-item ms-1">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card p-2">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="p-2"></div>
                                                        <div class="p-2">3 days left</div>
                                                        <div class="p-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                class="bi bi-heart" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                                            </svg></div>
                                                    </div>
                                                    <div>
                                                        <img src="images/1.jpg" alt="" class="img-fluid">
                                                        <div class="row">
                                                            <div class="col-5 text-start text-dark"
                                                                style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                                Current Bid:</div>
                                                            <div class="col-4 text-start"
                                                                style="font-size: 16px; margin: 2px;">$1,000</div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <p class="m-2">Barcelona</p>
                                            <div class="text-dark" style="--bs-text-opacity: .5;">
                                                <p class="m-2">Acrilyc, Sand on Canvas</p>
                                                <p class="m-2">90x70cm</p>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <div class="text-dark" style="--bs-text-opacity: .5;">

                                                <p class="m-2">Interesting?</p>
                                                <a href="#" class="btn bidbutton me-2">Bid now</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="trending-carousel-item carousel-item ms-1">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card p-2">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="p-2"></div>
                                                        <div class="p-2">3 days left</div>
                                                        <div class="p-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                class="bi bi-heart" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                                            </svg></div>
                                                    </div>
                                                    <div>
                                                        <img src="images/1.jpg" alt="" class="img-fluid">
                                                        <div class="row">
                                                            <div class="col-5 text-start text-dark"
                                                                style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                                Current Bid:</div>
                                                            <div class="col-4 text-start"
                                                                style="font-size: 16px; margin: 2px;">$1,000</div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <p class="m-2">Barcelona</p>
                                            <div class="text-dark" style="--bs-text-opacity: .5;">
                                                <p class="m-2">Acrilyc, Sand on Canvas</p>
                                                <p class="m-2">90x70cm</p>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <div class="text-dark" style="--bs-text-opacity: .5;">

                                                <p class="m-2">Interesting?</p>
                                                <a href="#" class="btn bidbutton me-2">Bid now</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="trending-carousel-item carousel-item ms-1">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card p-2">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="p-2"></div>
                                                        <div class="p-2">3 days left</div>
                                                        <div class="p-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                class="bi bi-heart" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                                            </svg></div>
                                                    </div>
                                                    <div>
                                                        <img src="images/1.jpg" alt="" class="img-fluid">
                                                        <div class="row">
                                                            <div class="col-5 text-start text-dark"
                                                                style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                                Current Bid:</div>
                                                            <div class="col-4 text-start"
                                                                style="font-size: 16px; margin: 2px;">$1,000</div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <p class="m-2">Barcelona</p>
                                            <div class="text-dark" style="--bs-text-opacity: .5;">
                                                <p class="m-2">Acrilyc, Sand on Canvas</p>
                                                <p class="m-2">90x70cm</p>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <div class="text-dark" style="--bs-text-opacity: .5;">

                                                <p class="m-2">Interesting?</p>
                                                <a href="#" class="btn bidbutton me-2">Bid now</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="trending-carousel-item carousel-item ms-1">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card p-2">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="p-2"></div>
                                                        <div class="p-2">3 days left</div>
                                                        <div class="p-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                class="bi bi-heart" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                                            </svg></div>
                                                    </div>
                                                    <div>
                                                        <img src="images/1.jpg" alt="" class="img-fluid">
                                                        <div class="row">
                                                            <div class="col-5 text-start text-dark"
                                                                style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                                Current Bid:</div>
                                                            <div class="col-4 text-start"
                                                                style="font-size: 16px; margin: 2px;">$1,000</div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <p class="m-2">Barcelona</p>
                                            <div class="text-dark" style="--bs-text-opacity: .5;">
                                                <p class="m-2">Acrilyc, Sand on Canvas</p>
                                                <p class="m-2">90x70cm</p>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <div class="text-dark" style="--bs-text-opacity: .5;">

                                                <p class="m-2">Interesting?</p>
                                                <a href="#" class="btn bidbutton me-2">Bid now</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="trending-carousel-item carousel-item ms-1">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card p-2">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="p-2"></div>
                                                        <div class="p-2">3 days left</div>
                                                        <div class="p-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                class="bi bi-heart" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                                            </svg></div>
                                                    </div>
                                                    <div>
                                                        <img src="images/1.jpg" alt="" class="img-fluid">
                                                        <div class="row">
                                                            <div class="col-5 text-start text-dark"
                                                                style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                                Current Bid:</div>
                                                            <div class="col-4 text-start"
                                                                style="font-size: 16px; margin: 2px;">$1,000</div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <p class="m-2">Barcelona</p>
                                            <div class="text-dark" style="--bs-text-opacity: .5;">
                                                <p class="m-2">Acrilyc, Sand on Canvas</p>
                                                <p class="m-2">90x70cm</p>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <div class="text-dark" style="--bs-text-opacity: .5;">

                                                <p class="m-2">Interesting?</p>
                                                <a href="#" class="btn bidbutton me-2">Bid now</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="trending-carousel-item carousel-item ms-1">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card p-2">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="p-2"></div>
                                                        <div class="p-2">3 days left</div>
                                                        <div class="p-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                class="bi bi-heart" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                                            </svg></div>
                                                    </div>
                                                    <div>
                                                        <img src="images/1.jpg" alt="" class="img-fluid">
                                                        <div class="row">
                                                            <div class="col-5 text-start text-dark"
                                                                style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                                Current Bid:</div>
                                                            <div class="col-4 text-start"
                                                                style="font-size: 16px; margin: 2px;">$1,000</div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <p class="m-2">Barcelona</p>
                                            <div class="text-dark" style="--bs-text-opacity: .5;">
                                                <p class="m-2">Acrilyc, Sand on Canvas</p>
                                                <p class="m-2">90x70cm</p>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <div class="text-dark" style="--bs-text-opacity: .5;">

                                                <p class="m-2">Interesting?</p>
                                                <a href="#" class="btn bidbutton me-2">Bid now</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </div>
                            <button class="carousel-control-prev trending-carousel-control-prev" type="button"
                                data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next trending-carousel-control-next" type="button"
                                data-bs-target="#testimonialCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- Email Section -->
        <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-11">
                        <div class="row">
                            <p class="fs-3">Let us inspire you</p>
                        </div>
                        <div class="row pt-4 pb-3 bg-f5f5f5">
                            <div class="col-md-6 col-sm-12">
                                <p class="fs-3 ms-5">Spot the Gem, Seal the Deal!</p>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <form>
                                    <div class="d-flex mt-1">
                                        <div class="">
                                            <div class="mb-3">
                                                <input type="email" class="form-control email-config"
                                                    id="exampleFormControlInput1" placeholder="Your email">
                                            </div>
                                        </div>
                                        <div>
                                            <button type="button"
                                                class="btn btn-dark ms-2 text-uppercase px-5">Subscribe</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
    </main>
    <?php include 'Components/footer2.php'; ?>
</body>

</html>