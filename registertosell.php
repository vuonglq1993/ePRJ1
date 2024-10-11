<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
    $phone = isset($_SESSION['phone']) ? $_SESSION['phone'] : '';
    ?>

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
    <?php include 'Components/header.php'; ?>
    <main>
        <div class="container mt-5">
            <div class="row justify-content-center my-5">
                <div class="col-11">
                    <div class="row text-center my-5">
                        <p class="fs-5">Do you want to sell your Art? Register with us RIGHT NOW</p>
                    </div>
                    <div class="row">
                        <form id="requestForm" method="get">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Your name(*)</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="<?php echo isset($username) ? htmlspecialchars($username) : ''; ?>"
                                            required>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput2" class="form-label">Your email
                                            address(*)</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput2"
                                            value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>"
                                            required>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput3" class="form-label">Phone number(*)</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput3"
                                            value="<?php echo isset($phone) ? htmlspecialchars($phone) : ''; ?>"
                                            required>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput4" class="form-label">Country</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput4"
                                            placeholder="">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Your message
                                        here</label>
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
        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalLabel">Notification</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Your message has been sent
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            document.getElementById('requestForm').addEventListener('submit', function (event) {
                event.preventDefault(); // Ngăn form submit thực tế nếu không cần thiết
                // Thực hiện các hành động như gửi request ở đây

                // Hiển thị modal sau khi request thành công
                var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();
            });
        </script>
    </main>
    <!-- Footer -->
    <?php include 'Components/footer2.php'; ?>
</body>

</html>