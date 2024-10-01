<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="Components/footer.css">
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
<!-- header  -->
    <?php include 'Components/header.php';?>
    <main>

        <!-- Popular Categories section -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row text-center mb-4">
                        <p class="fs-3" style="margin-bottom: 5px;">Archaeology & Natural History</p>
                    </div>

                    <div class="row">
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
        <!-- Collections -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row justify-content-center">
                        <div class="d-flex flex-row">
                            <div class="p-2">
                                <p class="fs-3">Buy anything that matches your style</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
        <!-- Collections -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row justify-content-center">
                        <div class="d-flex flex-row">
                            <div class="p-2">
                                <p class="fs-3">Buy anything that matches your style</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
        <!-- Collections -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row justify-content-center">
                        <div class="d-flex flex-row">
                            <div class="p-2">
                                <p class="fs-3">Buy anything that matches your style</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
        <!-- Collections -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row justify-content-center">
                        <div class="d-flex flex-row">
                            <div class="p-2">
                                <p class="fs-3">Buy anything that matches your style</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
        <!-- Collections -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row justify-content-center">
                        <div class="d-flex flex-row">
                            <div class="p-2">
                                <p class="fs-3">Buy anything that matches your style</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
        <!-- Collections -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row justify-content-center">
                        <div class="d-flex flex-row">
                            <div class="p-2">
                                <p class="fs-3">Buy anything that matches your style</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
    </main>
<!-- footer  -->
<?php include 'Components/footer.php'; ?>

</body>

</html>