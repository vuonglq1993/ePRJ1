<?php
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
include_once 'functions/db.php';
include_once 'functions/fav_collectf.php';
$fav_count = count_fav_data($user_id);
?>
<header>
    <nav class="navbar navheigh navbar-expand-lg bg-000022">
        <div class="container-fluid mt-1">
            <a class="me-5" href="index.php"><img src="./images/header/logo.png" alt="" style="width: 220px;"
                    class="img-fluid logo"></a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse bg-000022 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav my-1 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle navbar-brand margin-1rem fc-ffffff mt-1" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Auction
                        </a>
                        <ul class="dropdown-menu bg-000022">
                        <li><a class="dropdown-item navbar-brand  mt-1 fc-ffffff" href="trending_auctions.php">Trending auction</a>

                            <li><a class="dropdown-item navbar-brand mt-1 fc-ffffff" href="sponsored_auctions.php">Sponsored auction</a></li>
                            <li><a class="dropdown-item navbar-brand mt-1 fc-ffffff" href="incoming_auctions.php">Incoming auction</a></li>
                            <li><a class="dropdown-item navbar-brand  mt-1 fc-ffffff" href="completed_auctions.php">Completed auction</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-brand margin-1rem fc-ffffff mt-1" href="registertosell.php">Register to sell with us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-brand margin-1rem fc-ffffff mt-1" href="about-us.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-brand margin-1rem fc-ffffff mt-1" href="contact.php">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <form action="search.php" method="GET" class="d-flex form-config" role="search">
                            <button class="btn btn-light search-config" type="submit"><i
                                    class="bi bi-search"></i></button>
                            
                        </form>
                    </li>
                    <div class="d-flex">

                        <!-- <a class="btn btn-primary py-1 px-4 bg-31D3FF me-3 sell-config" href="#" role="button">Sell my Art</a> -->
                        <li class="nav-item  ms-1">
                            <div>

                                <a class="nav-link d-flex fc-ffffff" href="fav_obj.php">
                                    <i class="bi bi-heart-fill" style="font-size: 1.5rem;"></i>
                                    <span class="badge countposition bg-31D3FF rounded-pill"
                                        style="width: 40%; font-size: 0.5rem; height: 40%;"><?php echo htmlspecialchars($fav_count) ?></span>


                                </a>

                            </div>
                        </li>


                        <?php if (isset($_SESSION['username'])): ?>
                            <li class="nav-item wrap">
                                <a class="nav-link margin-1rem fc-ffffff ms-1" href="categories1.php"> Wellcome,
                                    <?php echo htmlspecialchars($_SESSION['username']) ?></a>
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