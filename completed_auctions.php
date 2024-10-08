<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- jQuery library for JavaScript interactions -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Linking external CSS files for styling -->
    <link rel="stylesheet" href="style/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="Components/header2.css">
    <link rel="stylesheet" href="Components/footer.css">
    
    <!-- Bootstrap CSS for responsive layout and design -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Popper.js and Bootstrap JS for handling interactivity -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    <!-- Custom JavaScript for page-specific interactions -->
    <script src="javascript/index.js"></script>
    <script src="javascript/fav.js"></script>
    
    <title>Completed Auction</title>
</head>

<body>
    <!-- Include header component -->
    <?php include 'Components/header.php'; ?>

    <!-- Main section -->
    <main>
        <!-- Banner carousel displaying a single main image -->
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/2.jpg" class="d-block img-fluid w-100" alt="Banner Image">
                </div>
            </div>
        </div>

        <!-- Container for displaying a single product -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-11">
                    <!-- Section title -->
                    <div class="row">
                        <div class="p-2">
                            <p class="fs-3 ps-3">Completed Auction </p>
                            <!-- Navigation links for auction types -->
                            <nav class="nav">
                                <a class="nav-link fw-bold" href="trending_auctions.php" style="color: #666666;">Trending auction</a>
                                <a class="nav-link fw-bold" href="sponsored_auctions.php" style="color: #666666;">Sponsored auction</a>
                                <a class="nav-link fw-bold" href="incoming_auctions.php" style="color: #666666;">Incoming auction</a>
                                <a class="nav-link fw-bold active" aria-current="page" href="#">Completed auction</a>
                            </nav>
                        </div>
                    </div>

                    <!-- Display the product details -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-11">
                                <!-- Favorite heart icon for the single product -->
                                <div class="row">
                                    <a href="#" class="text-end mb-3">
                                        <i class="bi bi-heart-fill"></i>
                                    </a>
                                </div>
                                
                                <!-- Product image and description -->
                                <div class="row">
                                    <img src="images/1.jpg" alt="Product Image" class="img-fluid" />
                                    <div class="col-6 text-start text-dark">
                                        <p style="font-size: 13px;">
                                            <strong>ARTWORKS NEW COLLECTIONS 2024</strong><br>
                                            35 Objects Available
                                        </p>
                                    </div>

                                    <!-- Call to action link for more details about the product -->
                                    <div class="row text-center">
                                        <a class="text-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                            style="font-size: 14px;" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                            </svg>
                                            Discover All 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                                <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
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

    <!-- Include footer component -->
    <?php include 'Components/footer2.php'; ?>

</body>

</html>
