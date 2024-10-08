<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'functions/db.php';
    ?>
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
    <title>Register</title>
</head>

<body>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    <div>
                    <h1 class="text-center mt-5">Register</h1>
                    </div>
                    <form action="./post_register.php" method="post">
                        <div class="my-4">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" class="form-control" name="username" required />
                        </div>
                        <div class="my-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" name="email" required />
                        </div>
                        <div class="my-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control" name="password" required />
                        </div>
                        <div class="my-4">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" id="phone" class="form-control" name="phone" />
                        </div>
                        <div class="my-4">
                            <label for="address" class="form-label">Address</label>
                            <textarea id="address" name="address" class="form-control"></textarea>
                        </div>
                        <div class="row my-4 mx-2">
                            <div class="col-6">
                            <button type="submit" name="login" class="btn btn-primary px-5">Register</button>
                            </div>
                            <div class="col-6">
                            <a href="login.php" class="btn btn-secondary px-5">Log in</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>