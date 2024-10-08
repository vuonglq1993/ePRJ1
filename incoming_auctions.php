<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags for responsive design and character encoding -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jQuery for JavaScript interactions -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- External CSS files for layout and design -->
    <link rel="stylesheet" href="style/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="Components/header2.css">
    <link rel="stylesheet" href="Components/footer.css">

    <!-- Bootstrap CSS for responsive layout and design -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Popper.js and Bootstrap JS for handling interactive elements -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

    <!-- Custom JavaScript for page-specific interactions -->
    <script src="javascript/index.js"></script>
    <script src="javascript/fav.js"></script>

    <title>Sponsored Auction</title>
</head>

<body>
    <!-- Include header component -->
    <?php include 'Components/header.php'; ?>

    <main>
        <!-- Banner section with a carousel for images -->
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-inner">
                <!-- Active carousel item -->
                <div class="carousel-item active">
                    <img src="images/2.jpg" class="d-block img-fluid w-100" alt="...">
                </div>
            </div>
        </div>

        <!-- Main content container -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row">
                        <div class="p-2">
                            <!-- Page title and navigation for auctions -->
                            <p class="fs-3 ps-3">Incoming auctions</p>
                            <nav class="nav">
                                <!-- Navigation tabs for different auction types -->
                                <a class="nav-link fw-bold" href="trending_auctions.php" style="color: #666666;">Trending Auctions</a>
                                <a class="nav-link fw-bold" href="sponsored_auctions.php" style="color: #666666;">Sponsored auction</a>
                                <a class="nav-link fw-bold active" aria-current="page" href="#">Incoming auction</a>
                                <a class="nav-link fw-bold" href="completed_auctions.php" style="color: #666666;">Completed auction</a>
                            </nav>
                        </div>
                    </div>

                    <!-- Information about the number of objects in the auction -->
                    <div class="row">
                        <div class="ps-4 mt-5">
                            <p class="fs-6 color0028BA"><strong>115 objects</strong></p>
                        </div>

                        <!-- Dropdown to sort auctions by time remaining or other criteria -->
                        <div class="d-flex flex-row ps-4">
                            <div>
                                <p class="fs-6 color666">Sort by</p>
                            </div>
                            <div class="hidden">
                                <!-- Sorting options -->
                                <select class="no-border form-select color0028BA" aria-label="Default select example">
                                    <option selected>Time remaining</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Auction item display section -->
                    <div class="container">
                        <div class="row">
                            <!-- Auction item block -->
                            <div class="col-md-3 col-sm-11">
                                <div class="row">
                                    <!-- Heart icon for favoriting the item -->
                                    <a href="#" class="text-end mb-3"><i class="bi bi-heart-fill"></i></a>
                                </div>
                                <div class="row">
                                    <!-- Auction item image and description -->
                                    <img src="images/1.jpg" alt="" class="img-fluid" />
                                    <div class="col-6 text-start text-dark">
                                        <p style="font-size: 13px;">
                                            <strong>ARTWORKS NEW COLLECTIONS 2024</strong><br>
                                            35 Objects
                                        </p>
                                    </div>

                                    <!-- "Discover all" button with SVG icons -->
                                    <div class="row text-center">
                                        <a class="text-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" style="font-size: 14px;" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                            </svg> Discover all 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                                <path d="m3.86 8.753 5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Repeat the same block structure for additional auction items -->
                            <!-- Auction item 2 -->
                            <div class="col-md-3 col-sm-11">
                                <div class="row">
                                    <a href="#" class="text-end mb-3"><i class="bi bi-heart-fill"></i></a>
                                </div>
                                <div class="row">
                                    <img src="images/1.jpg" alt="" class="img-fluid" />
                                    <div class="col-6 text-start text-dark">
                                        <p style="font-size: 13px;">
                                            <strong>ARTWORKS NEW COLLECTIONS 2024</strong><br>
                                            35 Objects
                                        </p>
                                    </div>
                                    <div class="row text-center">
                                        <a class="text-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" style="font-size: 14px;" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                            </svg> Discover all 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                                <path d="m3.86 8.753 5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Add more auction items as needed in the same structure -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Include footer component -->
    <?php include 'Components/footer2.php'; ?>

</body>

</html>
