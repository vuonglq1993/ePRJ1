<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Trang Admin</title>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <?php include 'components/sidebar.php'; ?> 
        
        <div id="page-content-wrapper">
            <?php include 'components/header.php'; ?>
            <div class="container-fluid">
                <h1 class="mt-4">Dòng H1</h1>
                <p>Dòng p</p>
            </div>
            <?php include 'components/footer.php'; ?>
        </div>
    </div>
</body>
</html>
