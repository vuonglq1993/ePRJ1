<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

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
    <header></header>
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

        <!-- Trending -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="d-flex flex-row">
                        <div class="p-2">
                            <p class="fs-3">Our trending for sale</p>
                        </div>
                        <div class="p-2 mt-3">
                            <p><a href="#"
                                    class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-opacity-25 link-underline-opacity-75-hover">See
                                    all trending</a></p>
                        </div>
                    </div>
                    <div class="text-dark ps-4" style="--bs-text-opacity: .5;">
                        <p class="fs-6">Our online gallery favorites. Don't miss your chance - <strong>Shop
                                now!</strong>
                        </p>
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
        <!-- Collections -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row justify-content-center">
                        <div class="d-flex flex-row">
                            <div class="p-2">
                                <p class="fs-3">Buy anything that matches your style</p>
                            </div>
                            <div class="p-2 mt-3">
                                <p><a href="#"
                                        class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-opacity-25 link-underline-opacity-75-hover">See
                                        all collections</a></p>
                            </div>
                        </div>
                        <div class="text-dark ps-4" style="--bs-text-opacity: .5;">
                            <p class="fs-6 ">Discover our curation for sale
                            </p>
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
        <!-- Navigate -->
        <div class="container mt-5">
            <div class="navigating">
                <div class="row justify-content-center">
                    <div class="col-11">
                        <p class="fs-3" style="margin-bottom: 1px;">What are you looking for?</p>
                        <div class="text-dark" style="--bs-text-opacity: .5;">
                            <p class="fs-6">Navigate through our most searched topics in our online gallery to start
                                your
                                jouney!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row  justify-content-center">
                    <div class="col-2">
                        <p class="ms-2 mb-3"><a href="#"
                                class="link-body-emphasis link-offset-2 link-underline-opacity-0 link-opacity-25 link-underline-opacity-0-hover">
                                Lorem
                            </a></p>
                        <p class="ms-2  mb-3"><a href="#"
                                class="link-body-emphasis link-offset-2 link-underline-opacity-0 link-opacity-25 link-underline-opacity-0-hover">
                                Lorem
                            </a></p>
                        <p class="ms-2 mb-3"><a href="#"
                                class="link-body-emphasis link-offset-2 link-underline-opacity-0 link-opacity-25 link-underline-opacity-0-hover">
                                Lorem
                            </a></p>
                        <p class="ms-2 mb-3"><a href="#"
                                class="link-body-emphasis link-offset-2 link-underline-opacity-0 link-opacity-25 link-underline-opacity-0-hover">
                                Lorem
                            </a></p>
                        <p class="ms-2 mb-3"><a href="#"
                                class="link-body-emphasis link-offset-2 link-underline-opacity-0 link-opacity-25 link-underline-opacity-0-hover">
                                Lorem
                            </a></p>
                        <p class="ms-2 mb-3"><a href="#"
                                class="link-body-emphasis link-offset-2 link-underline-opacity-0 link-opacity-25 link-underline-opacity-0-hover">
                                Lorem
                            </a></p>
                        <p class="ms-2 mb-3"><a href="#"
                                class="link-body-emphasis link-offset-2 link-underline-opacity-0 link-opacity-25 link-underline-opacity-0-hover">
                                Lorem
                            </a></p>
                        <p class="ms-2 mb-3"><a href="#"
                                class="link-body-emphasis link-offset-2 link-underline-opacity-0 link-opacity-25 link-underline-opacity-0-hover">
                                Lorem
                            </a></p>
                        <p class="ms-2 mb-3"><a href="#"
                                class="link-body-emphasis link-offset-2 link-underline-opacity-0 link-opacity-25 link-underline-opacity-0-hover">
                                Lorem
                            </a></p>
                        <p class="ms-2 mb-3"><a href="#"
                                class="link-body-emphasis link-offset-2 link-underline-opacity-0 link-opacity-25 link-underline-opacity-0-hover">
                                Lorem
                            </a></p>
                        <p class="ms-2 mb-3"><a href="#"
                                class="link-body-emphasis link-offset-2 link-underline-opacity-0 link-opacity-25 link-underline-opacity-0-hover">
                                Lorem
                            </a></p>
                        <p class="ms-2 mb-3"><a href="#"
                                class="link-body-emphasis link-offset-2 link-underline-opacity-0 link-opacity-25 link-underline-opacity-0-hover">
                                Lorem
                            </a></p>
                        <p class="ms-2 mb-3"><a href="#"
                                class="link-body-emphasis link-offset-2 link-underline-opacity-0 link-opacity-25 link-underline-opacity-0-hover">
                                Lorem
                            </a></p>
                    </div>

                    <div class="col-9">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="card p-2">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="p-2"></div>
                                                    <div class="p-2">3 days left</div>
                                                    <div class="p-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-heart"
                                                            viewBox="0 0 16 16">
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
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="card p-2">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="p-2"></div>
                                                    <div class="p-2">3 days left</div>
                                                    <div class="p-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-heart"
                                                            viewBox="0 0 16 16">
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
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="card p-2">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="p-2"></div>
                                                    <div class="p-2">3 days left</div>
                                                    <div class="p-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-heart"
                                                            viewBox="0 0 16 16">
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
                        <div class="row justify-content-center">
                            <div class="text-center"><a href="#" class="btn seeall"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                        <path
                                            d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                    </svg> See all "<strong>Art</strong>" works <svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                    </svg></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Get insipred section -->
        <div class="container mt-5">
            <div class="getinspired">
                <div class="row justify-content-center">
                    <div class="col-11">
                        <div class="d-flex flex-row">
                            <div class="p-2">
                                <p class="fs-3 text-start">Get inspired</p>
                            </div>
                            <div class="p-2 mt-3">
                                <p><a href="#"
                                        class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-opacity-25 link-underline-opacity-75-hover">Explore
                                        all</a></p>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6 sm-12">
                                <img src="./images/1.jpg" class="img-fluid" alt="" />
                                <p class="fs-5 text-start mt-3">Adriano Tawin</p>
                                <p class="fs-6 text-start">Inside the Cologne Apartment of a Trendsetting Content
                                    Creator Jewellery buyer and interior design content creator Jenny Brucherseifer
                                    shows
                                    us her art collection (and gives us serious room envy) in her...</p>
                                <div class="text-start "><a href="#" class="btn readmore">Read more<svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                            <path
                                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                        </svg> </a>
                                </div>
                            </div>
                            <div class="col-md-6 sm-12">
                                <img src="./images/1.jpg" class="img-fluid" alt="" />
                                <p class="fs-5 text-start mt-3">Adriano Tawin</p>
                                <p class="fs-6 text-start">Inside the Cologne Apartment of a Trendsetting Content
                                    Creator Jewellery buyer and interior design content creator Jenny Brucherseifer
                                    shows
                                    us her art collection (and gives us serious room envy) in her...</p>
                                <div class="text-start"><a href="#" class="btn readmore">Read more<svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                            <path
                                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                        </svg> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popular Categories section -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row">
                        <p class="fs-3" style="margin-bottom: 5px;">Popular Categories</p>

                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <img src="./images/index/books.png" class="img-fluid mt-2" alt="" />
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <img src="./images/index/modeltrains.png" class="img-fluid mt-2" alt="" />
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <img src="./images/index/wine.png" class="img-fluid mt-2" alt="" />
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <img src="./images/index/bags.png" class="img-fluid mt-2" alt="" />
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <img src="./images/index/moderncoin.png" class="img-fluid mt-2" alt="" />
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <img src="./images/index/champage.png" class="img-fluid mt-2" alt="" />
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <img src="./images/index/stamps.png" class="img-fluid mt-2" alt="" />
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <img src="./images/index/jewellery.png" class="img-fluid mt-2" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Email Section -->
        <div class="row emailsection">
            <div class="emailform col-md-5 col-sm-11">
                <p class="fs-3">Let us inspire you</p>
                <p class="fw-lighter">Want to receive exciting antique and lifestyle content, directly to your inbox?
                </p>
                <form>
                    <div class="mb-3 row">
                        <div class="col-8">
                            <div class="container">
                                <div class="row inputemail">
                                    <div class="col-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-envelope mt-1" viewBox="0 0 16 16">
                                            <path
                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                                        </svg>
                                    </div>
                                    <div class="col-10">
                                        <input type="email" class="no-border input-group" id="exampleInputEmail1"
                                            placeholder='Email address'>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1">
                            <button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="21" height="21" fill="currentColor" class="bi bi-caret-right-fill"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                </svg></button>

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-7 col-sm-12">
                <img src="./images/1.jpg" class="img-fluid" alt="" />
            </div>
        </div>

        <!-- Iconic Brand Section -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row">
                        <p class="fs-3" style="margin-bottom: 5px;">Iconic Brands</p>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mt-3 sm-4">
                            <img src="./images/1.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="col-md-2 mt-3 sm-4">
                            <img src="./images/1.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="col-md-2 mt-3 sm-4">
                            <img src="./images/1.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="col-md-2 mt-3 sm-4">
                            <img src="./images/1.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="col-md-2 mt-3 sm-4">
                            <img src="./images/1.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="col-md-2 mt-3 sm-4">
                            <img src="./images/1.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="col-md-2 mt-3 sm-4">
                            <img src="./images/1.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="col-md-2 mt-3 sm-4">
                            <img src="./images/1.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="col-md-2 mt-3 sm-4">
                            <img src="./images/1.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="col-md-2 mt-3 sm-4">
                            <img src="./images/1.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="col-md-2 mt-3 sm-4">
                            <img src="./images/1.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="col-md-2 mt-3 sm-4">
                            <img src="./images/1.jpg" class="img-fluid" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Download app section  -->
        <div class="row downloadsection mt-5 mb-5">
            <div class="downloadapp col-md-5 col-sm-11">
                <p class="fs-2 mt-5">Download the <strong>BIDSPIRIT</strong> app</p>
                <p class="fs-5">and discover special object anytime, anywhere</p>
                <div class="row mt-5">
                    <div class="col-md-6 col-sm-12">
                        <img src="./images/Appstore.png" class="img-fluid" alt="" />
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <img src="./images/CHplay.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-12">
                <img src="./images/footerapp.png" class="img-fluid" alt="" />
            </div>
        </div>
    </main>
    <footer></footer>
</body>

</html>