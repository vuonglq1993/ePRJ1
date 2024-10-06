<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="Components/footer.css">
    <link rel="stylesheet" href="Components/header2.css">

    <link rel="stylesheet" href="style/categories.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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

<header>
<nav class="navbar navheigh navbar-expand-lg bg-000022">
        <div class="container-fluid mt-1">
            <a class="me-5" href="index.php"><img src="./images/header/logo.png" alt="" style="width: 220px;"class="img-fluid logo"></a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse bg-000022 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav my-1 mb-lg-0">
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-brand margin-1rem fc-ffffff mt-1" href="about-us.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-brand margin-1rem fc-ffffff mt-1" href="contact.php">Contact us</a>
                    </li>
                    <li class="nav-item">
                    <form action="search.php" method="GET" class="d-flex form-config" role="search">
                        <button class="btn btn-light search-config" type="submit"><i class="bi bi-search"></i></button>
                        <input class="form-control p-0 me-4 ps-5 input-config" name="search" type="search" placeholder="What are you looking for?"
                            aria-label="Search">
                    </form>
                    </li>
                    <div class="d-flex">

                    <!-- <a class="btn btn-primary py-1 px-4 bg-31D3FF me-3 sell-config" href="#" role="button">Sell my Art</a> -->
                    <li class="nav-item  ms-1">
                        <div>
                            
                        <a class="nav-link d-flex fc-ffffff"  href="fav_obj.php">
                            <i class="bi bi-heart-fill" style="font-size: 1.5rem;"></i>
                            <span class="badge countposition bg-31D3FF rounded-pill" style="width: 40%; font-size: 0.5rem; height: 40%;"><?php echo htmlspecialchars($fav_count) ?></span>


                    </a>
                    
                    </div>
                    </li>


                    <?php if(isset($_SESSION['username'])): ?>
                    <li class="nav-item wrap">
                        <a class="nav-link margin-1rem fc-ffffff ms-1" href="categories1.php"> Wellcome, <?php echo htmlspecialchars($_SESSION['username']) ?></a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link margin-1rem fc-ffffff m-1" href="login.php">Wellcome, Guest(Log in)</a>
                    </li>
                    <?php endif; ?>
                    </div>
                </ul>

            </div>
        </div>
    </nav>
</header>