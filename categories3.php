<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'functions/db.php';
    $categories = select("SELECT * FROM categories");
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="Components/footer.css">

    <link rel="stylesheet" href="style/categories3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
    <script src="javascript/index.js"></script>
    <title>Categories</title>
</head>

<body>
    <header>
        <?php include 'Components/header.php'; ?>
    </header>

    <main>
        <!-- Name of the collection -->
        <div class="row collectionname mt-5 mb-5">
            <div class="col-md-6 col-sm-11" style="padding-left: 3rem" ;>
                <p class="fs-1 fw-light">Decorative Minerals Auction (Spheres & Carvings)</p>
                <div class="row mt-3">
                    <p class="fw-light color666 fs-6">Start from August 28 - 2024</p>
                </div>
                <div class="row mt-3">
                    <div class=""><a href="#" class="border text-decoration-none follow"><i
                                class="bi bi-heart"></i><span class="mx-3">Following for similar objects</span></a>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="fs-2 fw-light color0028BA">Ends tomorrow 01:00</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mt-3">
                <div class="row">
                    <div class="col p-5">
                        <img src="images/blankimage2.jpg" alt="blank" class="m-5 img-fluid" />
                    </div>
                    <div class="col bg-color p-5">
                        <p class="fs-3 text-start fw-light">Curated by Luca Esposito</p>
                        <p class="fs-3 text-start color666 fw-lighter">Expert in Minerals & Natural History</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Collection items -->
        <div class="container mt-2">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row">
                        <div>
                            <p class="fs-6 color0028BA"><strong>115 objects</strong></p>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <p class="fs-6 color666 ">Sort by</p>
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
                    <div class="row">
                        <div class="col-md-4 col-sm-12 mt-5">
                            <div class="row">
                                <div class="col">
                                    <div class="card p-2">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="p-2"></div>
                                                <div class="p-2">3 days left</div>
                                                <div class="p-2"><a href="#" method="post" onclick="toggleLike()"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                            <path
                                                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                                        </svg></a></div>
                                            </div>
                                            <div>
                                                <img src="images/1.jpg" alt="" class="img-fluid">
                                                <div class="row">
                                                    <div class="col-5 text-start text-dark"
                                                        style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                        Current Bid:</div>
                                                    <div class="col-4 text-start" style="font-size: 16px; margin: 2px;">
                                                        $1,000</div>

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
                        <div class="col-md-4 col-sm-12 mt-5">
                            <div class="row">
                                <div class="col">
                                    <div class="card p-2">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="p-2"></div>
                                                <div class="p-2">3 days left</div>
                                                <div class="p-2"><a href="#" method="post" onclick="toggleLike()"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                            <path
                                                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                                        </svg></a></div>
                                            </div>
                                            <div>
                                                <img src="images/1.jpg" alt="" class="img-fluid">
                                                <div class="row">
                                                    <div class="col-5 text-start text-dark"
                                                        style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                        Current Bid:</div>
                                                    <div class="col-4 text-start" style="font-size: 16px; margin: 2px;">
                                                        $1,000</div>

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
                        <div class="col-md-4 col-sm-12 mt-5">
                            <div class="row">
                                <div class="col">
                                    <div class="card p-2">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="p-2"></div>
                                                <div class="p-2">3 days left</div>
                                                <div class="p-2"><a href="#" method="post" onclick="toggleLike()"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                            <path
                                                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                                        </svg></a></div>
                                            </div>
                                            <div>
                                                <img src="images/1.jpg" alt="" class="img-fluid">
                                                <div class="row">
                                                    <div class="col-5 text-start text-dark"
                                                        style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                        Current Bid:</div>
                                                    <div class="col-4 text-start" style="font-size: 16px; margin: 2px;">
                                                        $1,000</div>

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
                        <div class="col-md-4 col-sm-12 mt-5">
                            <div class="row">
                                <div class="col">
                                    <div class="card p-2">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="p-2"></div>
                                                <div class="p-2">3 days left</div>
                                                <div class="p-2"><a href="#" method="post" onclick="toggleLike()"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                            <path
                                                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                                        </svg></a></div>
                                            </div>
                                            <div>
                                                <img src="images/1.jpg" alt="" class="img-fluid">
                                                <div class="row">
                                                    <div class="col-5 text-start text-dark"
                                                        style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                        Current Bid:</div>
                                                    <div class="col-4 text-start" style="font-size: 16px; margin: 2px;">
                                                        $1,000</div>

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
                        <div class="col-md-4 col-sm-12 mt-5">
                            <div class="row">
                                <div class="col">
                                    <div class="card p-2">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="p-2"></div>
                                                <div class="p-2">3 days left</div>
                                                <div class="p-2"><a href="#" method="post" onclick="toggleLike()"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                            <path
                                                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                                        </svg></a></div>
                                            </div>
                                            <div>
                                                <img src="images/1.jpg" alt="" class="img-fluid">
                                                <div class="row">
                                                    <div class="col-5 text-start text-dark"
                                                        style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                        Current Bid:</div>
                                                    <div class="col-4 text-start" style="font-size: 16px; margin: 2px;">
                                                        $1,000</div>

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
                        <div class="col-md-4 col-sm-12 mt-5">
                            <div class="row">
                                <div class="col">
                                    <div class="card p-2">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="p-2"></div>
                                                <div class="p-2">3 days left</div>
                                                <div class="p-2"><a href="#" method="post" onclick="toggleLike()"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                            <path
                                                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                                        </svg></a></div>
                                            </div>
                                            <div>
                                                <img src="images/1.jpg" alt="" class="img-fluid">
                                                <div class="row">
                                                    <div class="col-5 text-start text-dark"
                                                        style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                        Current Bid:</div>
                                                    <div class="col-4 text-start" style="font-size: 16px; margin: 2px;">
                                                        $1,000</div>

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
                        <div class="col-md-4 col-sm-12 mt-5">
                            <div class="row">
                                <div class="col">
                                    <div class="card p-2">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="p-2"></div>
                                                <div class="p-2">3 days left</div>
                                                <div class="p-2"><a href="#" method="post" onclick="toggleLike()"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                            <path
                                                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                                        </svg></a></div>
                                            </div>
                                            <div>
                                                <img src="images/1.jpg" alt="" class="img-fluid">
                                                <div class="row">
                                                    <div class="col-5 text-start text-dark"
                                                        style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                        Current Bid:</div>
                                                    <div class="col-4 text-start" style="font-size: 16px; margin: 2px;">
                                                        $1,000</div>

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
                </div>
            </div>
        </div>
    </main>
    <footer>
    <?php include 'Components/footer.php'; ?>
    </footer>
</body>

</html>