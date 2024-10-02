<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style/fav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="Components/header.css">
    <link rel="stylesheet" href="Components/footer.css">

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
        <?php include 'Components/header.php'; ?>
    <main>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row">
                        <div class="p-2">
                            <p class="fs-3 ps-3">My favourites</p>
                            <nav class="nav">
                                <a class="nav-link fw-bold" href="fav_obj.php" style="color: #666666" ;>Objects</a>
                                <a class="nav-link  fw-bold active" aria-current="page" href="#">Collections</a>
                                <a class="nav-link fw-bold" href="fav_seller.php" style="color: #666666" ;>Seller</a>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ps-4 mt-5">
                            <p class="fs-6 color0028BA"><strong>115 objects</strong></p>
                        </div>
                        <div class="d-flex flex-row ps-4">
                            <div>
                                <p class="fs-6 color666">Sort by</p>
                            </div>
                            <div class="hidden">
                                <select class="no-border form-select color0028BA" aria-label="Default select example">
                                    <option selected>Time remaining</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-11">
                                <div class="row">
                                    <a href="#" class="text-end mb-3"><i class="bi bi-heart-fill"></i></a>
                                </div>
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
                                                fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                            </svg> Discover all <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-caret-left-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-11">
                                <div class="row">
                                    <a href="#" class="text-end mb-3"><i class="bi bi-heart-fill"></i></a>
                                </div>
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
                                                fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                            </svg> Discover all <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-caret-left-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-11">
                                <div class="row">
                                    <a href="#" class="text-end mb-3"><i class="bi bi-heart-fill"></i></a>
                                </div>
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
                                                fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                            </svg> Discover all <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-caret-left-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-11">
                                <div class="row">
                                    <a href="#" class="text-end mb-3"><i class="bi bi-heart-fill"></i></a>
                                </div>
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
                                                fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                            </svg> Discover all <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-caret-left-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
        <?php include 'Components/footer.php'; ?>
</body>

</html>