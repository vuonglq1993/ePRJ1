<?php 
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
    include_once 'functions/db.php';
    include_once 'functions/fav_collectf.php';
    $fav_count = count_fav_data($user_id);  
?>
<header>
    <div class="headerr pt-2 pb-2 row">
        <div class="col-md-2 d-flex justify-content-center align-items-center">
            <a href="index.php"><img src="../ePRJ1/images/header/Group.png" alt="" class="logo-img"></a>
        </div>
        <div class="d-flex col-md-4">
            <ul class="header-links-list d-flex flex-grow-1">
                <li class="flex-fill"><a href="../eprj1/categories1.php">Categories</a></li>
                <li class="flex-fill"><a href="">Popular Artists</a></li>
                <li class="flex-fill"><a href="../eprj1/inspire_me.php">Inspire me</a></li>
            </ul>
            </div>
            <div class="d-flex col-md-4">
            <div class="input-group ms-3">
                <form action="search.php" method="get" class="d-flex">
                    <input class="form-control border-0" type="search" name="search" placeholder="Tìm kiếm..." aria-label="Search">
                    <button class="btn btn-outline-secondary bg-white border-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <button class="header-btn ms-2" type="submit">Sell my Art</button>
        </div>
        <div class="d-flex header-icon-list col-md-2 justify-content-between">
            <ul class="d-flex list-unstyled m-0 flex-grow-1 justify-content-end">
                <li class="me-3">
                    <a href="#"><i class="fa-solid fa-user fa-2x"></i></a>
                </li>
                <li class="position-relative me-3">
                    <a href="/ePRJ1/fav_obj.php">
                        <i class="fas fa-heart fa-2x"></i>
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"><?php echo $fav_count; ?></span>
                    </a>
                </li>
                <li class="position-relative">
                    <a href="#">
                        <i class="fas fa-shopping-cart fa-2x"></i>
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</header>