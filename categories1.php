<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    // Include the database connection file and fetch categories from the database
    include './functions/db.php';
    $categories = select("SELECT * FROM categories"); // Fetch all categories
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- jQuery for handling JavaScript interactions -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Linking CSS files for page styling and Bootstrap -->
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="Components/footer.css">
    <link rel="stylesheet" href="Components/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Bootstrap CSS for responsive design -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Popper.js and Bootstrap JS for handling UI interactions -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

    <title>Categories</title>
</head>

<body>
    <!-- Header section -->
    <?php include 'Components/header.php'; ?>
    
    <!-- Main content section -->
    <main>
        <!-- Popular Categories section -->
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row text-center">
                        <!-- Title for categories section -->
                        <p class="fs-3" style="margin-bottom: 5px;">Select categories</p>
                    </div>
                    <!-- Subtitle for customizing feed -->
                    <div class="text-dark ps-4 text-center" style="--bs-text-opacity: .5;">
                        <p class="fs-6">Customize your feed by choosing categories that interest you</p>
                    </div>
                    <div class="row">
                        <!-- Loop through the categories and display each as a clickable image -->
                        <?php foreach ($categories as $category): ?>
                            <div class="col-md-4 col-sm-6">
                                <a href="categories2.php?cat_id=<?php echo htmlspecialchars($category['category_id']); ?>">
                                    <!-- Category image -->
                                    <img src="<?php echo htmlspecialchars($category['image_url']); ?>" class="img-fluid mt-2" alt="" />
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <span class="my-5 "></span>
    </main>
    
    <!-- Footer section -->
    <?php include 'Components/footer2.php'; ?>

</body>

</html>
