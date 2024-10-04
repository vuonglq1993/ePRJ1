<?php 
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
    include_once 'functions/db.php';
    include_once 'functions/fav_collectf.php';
    $fav_count = count_fav_data($user_id);  
?>
<header>
<nav class="navbar navheight navbar-expand-lg bg-000022">
        <div class="container-fluid mt-1">
            <a class="me-5" href="index.php"><img src="./images/header/logo.png" alt="" style="width: 220px;"class="img-fluid logo"></a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse bg-000022 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link margin-1rem fc-ffffff mt-1" href="categories1.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link margin-1rem fc-ffffff mt-1" href="#">Popular Artists</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link margin-1rem fc-ffffff mt-1" href="inspire_me.php">Inspire me</a>
                    </li>
                    <li class="nav-item">
                    <form action="search.php" method="GET" class="d-flex form-config" role="search">
                        <button class="btn btn-light search-config" type="submit"><i class="bi bi-search"></i></button>
                        <input class="form-control p-0 me-4 ps-5 input-config" name="search" type="search" placeholder="What are you looking for?"
                            aria-label="Search">
                    </form>
                    </li>
                    <div class="d-flex">

                    <a class="btn btn-primary py-1 px-4 bg-31D3FF me-3 sell-config" href="#" role="button">Sell my Art</a>
                    <li class="nav-item  ms-1">
                        <div>
                            
                        <a class="nav-link d-flex fc-ffffff"  href="fav_obj.php">
                            <i class="bi bi-heart-fill" style="font-size: 1.5rem;"></i>
                            <span class="badge countposition bg-31D3FF rounded-pill" style="width: 40%; font-size: 0.5rem; height: 40%;"><?php echo htmlspecialchars($fav_count) ?></span>


                    </a>
                    
                    </div>
                    </li>

                    <li class="nav-item ms-1">
                        <a class="nav-link d-flex fc-ffffff" href="#">
                            <i class="bi bi-clipboard-check-fill" style="font-size: 1.5rem;"></i>
                            <span class="badge countposition bg-31D3FF rounded-pill" style="width: 40%; font-size: 0.5rem; height: 40%;">1</span>

                        </a>
                    </li>
                    <?php if(isset($_SESSION['username'])): ?>
                    <li class="nav-item">
                        <a class="nav-link margin-1rem fc-ffffff ms-1" href="categories1.php"> Hello, <?php echo htmlspecialchars($_SESSION['username']) ?></a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link margin-1rem fc-ffffff m-1" href="login.php">Hello, Guest(Log in)</a>
                    </li>
                    <?php endif; ?>
                    </div>
                </ul>

            </div>
        </div>
    </nav>
</header>