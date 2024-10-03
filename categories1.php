<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include './functions/db.php';
    $categories = select("SELECT * FROM categories");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="Components/footer.css">
    <link rel="stylesheet" href="Components/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
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
    <title>Home</title>
</head>

<body>
    <!-- header -->
    <?php include 'Components/header.php'; ?>
    <!-- main  -->
    <main>
        <!-- <div class="text-dark ps-4 text-center mt-5" style="--bs-text-opacity: .5;">
            <h1 class="fs-3">POPULAR TRENDING FOR YOU
            </h1>
        </div> -->
        <!-- <hr> -->
        <!-- Popular Categories section -->
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row text-center">
                        <p class="fs-3" style="margin-bottom: 5px;">Select categories</p>
                    </div>
                    <div class="text-dark ps-4 text-center" style="--bs-text-opacity: .5;">
                        <p class="fs-6">Customize your feed by choosing categories that interest you
                        </p>
                    </div>
                    <div class="row">
                        <?php foreach ($categories as $category): ?>
                            <div class="col-md-4 col-sm-6">
                                <a href="categories2.php?cat_id=<?php echo htmlspecialchars($category['category_id']); ?>"><img src="<?php echo htmlspecialchars($category['image_url']); ?>" class="img-fluid mt-2" alt="" /></a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
    <?php include 'Components/footer.php'; ?>

</body>

</html>