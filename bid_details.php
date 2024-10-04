<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="Components/footer.css">

    <link rel="stylesheet" href="style/bid_details.css">
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
    <title>Bid_details</title>
    <style>
        .fc-999999 {
            color: #999999;
        }

        .fc-666666 {
            color: #666666;
        }

        .fc-0053b8 {
            color: #0053b8;
        }

        .fc-17b100 {
            color: #17B100;
        }

        .follow {
            border: 1px solid black;
            border-radius: 2rem;
            background-color: white;
            padding: 1rem;
        }

        .color0028BA {
            color: #0028BA;
        }

        .bid-size {
            padding: 0 3.5rem 0 3.5rem;
            white-space: nowrap !important;
            font-size: 2rem;
            border-radius: 1rem !important;

        }

        .form-select {
            --bs-form-select-bg-img: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%230028BA ' class='bi bi-caret-down-fill' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14l-4.796-5.481C2.065 5.325 2.52 4.5 3.173 4.5h9.654c.653 0 1.108.825.722 1.159l-4.796 5.48c-.566.647-1.512.647-2.078 0z'/%3E%3C/svg%3E") !important;
            --bs-form-select-bg-position: right 0.75rem center !important;
            --bs-form-select-bg-size: 1.5em !important;
            --bs-form-select-indicator: none !important;
            padding-right: 2.5rem !important;
        }

        .span strong {
            font-weight: light;
            color: #17b100;
        }
    </style>
</head>


<body>
    <!-- header  -->
    <?php include 'Components/header.php'; ?>

    <main>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-11">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <p class="fs-1 fw-light">Decorative Minerals (Sapphire collections)</p>
                                <p class="fs-6 fc-999999">Start from 28 August - 2024</p>

                            </div>
                            <div class="row mt-3">
                                <div class="">
                                    <a href="#" class="border text-decoration-none follow">
                                        <i class="bi bi-heart">
                                        </i>
                                        <span class="mx-3">Following for similar objects</span>
                                    </a>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="fs-4 fw-light color0028BA">Ends tomorrows 01:00</p>
                            </div>
                            <img src="images/blankimage2.jpg" alt="sanpham" class="img-fluid mt-3" />
                            <p class="fs-4 mt-5">RARE SIGNED Kaiser Chiefs – Kaiser Chiefs’ Easy Album
                                Copy is signed by all 5 band members!</p>
                            <p class="fs-6 fc-999999">Thằng Thái tự bịa ra đê product-details</p>
                            <hr />
                            <p class="fs-4 fw-light">Shipping</p>
                            <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis,
                                ligula id scelerisque cursus, nulla mi ullamcorper felis, sit amet sollicitudin metus
                                elit non est. Aenean cursus lectus sed justo fringilla, ut vestibulum odio viverra.
                                Vivamus accumsan convallis sem, sit amet facilisis felis sagittis at. Phasellus
                                ultricies, sapien id tristique convallis, risus ligula fringilla justo, at vehicula dui
                                orci ut purus. Morbi efficitur, massa sit amet tincidunt gravida, nunc orci maximus
                                velit, in congue velit magna a lectus. Integer vel orci nec risus pretium suscipit non
                                id magna. Aliquam erat volutpat. Sed scelerisque vulputate metus, ac fermentum elit
                                faucibus ac.</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- Bid section  -->
                            <div class="row border shadow-sm p-4 mb-5 bg-body-tertiary rounded">
                                <p class="fs-5 fc-666666 text-uppercase">current bid</p>
                                <p class="mb-0 fc-0053b8 fw-bolder" style="font-size: 4rem;">$ 80</p>
                                <p class="fs-6 mb-1 fc-666666 text-uppercase fw-light">reserve price</p>
                                <p class="fs-2 fw-light">$ 720</p>
                                <div class="row">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Choose your bid</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <a class="btn btn-outline-primary bid-size">
                                            <p class="fs-4 mx-3 my-2">Place bid</p>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="btn btn-primary bid-size">
                                            <p class="fs-4 mx-3 my-2">Buy out</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-5 span">
                                    <div>
                                        <img src="images/smallicon.jpg" class="me-4" />Buy confidently with our
                                        <strong>Buyer Protection</strong>
                                    </div>
                                    <div class="mt-2">
                                        <img src="images/smallicon2.jpg" class="me-3" /> Buyer Protection fee: 9% +
                                        $3
                                    </div>
                                    <div class="mt-2">
                                        <img src="images/smallicon1.jpg" class="me-3" /> Closes: Thằng Thái tự bịa
                                    </div>
                                </div>
                            </div>

                            <!-- Buyer Protection -->
                            <div class="row border shadow-sm p-4 mb-5 bg-body-tertiary rounded">
                                <p class="fs-2 fc-17b100 text-uppercase">bitspirit Buyer Protection</p>
                                <div class="col-7">
                                    <div>
                                        <img src="images/smaillicon4.jpg" class="me-4" />Your payment is safe
                                    </div>

                                    <div class="mt-5">
                                        <img src="images/smallicon5.jpg" class="me-4 " />All objects are quality checked

                                    </div>

                                    <div class=" mt-5">
                                        <img src="images/smallicon6.jpg" class="me-4" />All sellers are verified

                                    </div>
                                </div>
                                <div class="col-5">
                                    <img src="images/largeicon.jpg" class="img-fluid" />
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'Components/footer.php';?>
    </main>



</body>

</html>