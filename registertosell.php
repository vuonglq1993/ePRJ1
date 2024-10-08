<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="Components/header2.css">
    <link rel="stylesheet" href="Components/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="javascript/index.js"></script>
    <script src="javascript/fav.js"></script>
    <title>Sell Your Art</title>
</head>

<body>
    <!-- Header -->
    <?php include 'Components/header.php';?>
<main>
    <div class="container mt-5">
        <div class="row justify-content-center my-5">
            <div class="col-11">
                <div class="row text-center my-5">
                    <p class="fs-5">Do you want to sell your Art? Register with us RIGHT NOW</p>
                </div>
                <div class="row">
                    <form action="sell" method="get">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Your name(*)</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput2" class="form-label">Your email
                                        address(*)</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput2"
                                        placeholder="">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput3" class="form-label">Phone number(*)</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput3"
                                        placeholder="">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput4" class="form-label">Country</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput4"
                                        placeholder="">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Your message here</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="imageUpload" class="form-label">Upload your artwork</label>
                                    <input class="form-control" type="file" id="imageUpload" name="artwork">
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </main>
    <!-- Footer -->
    <?php include 'Components/footer2.php';?>
</body>

</html>