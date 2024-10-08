<?php
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
include_once 'functions/db.php';
include_once 'functions/fav_collectf.php';
$fav_count = count_fav_data($user_id);
?>
<header>
    <nav class="navbar navheigh navbar-expand-lg bg-000022">
        <div class="container-fluid">
                     <a class="ms-3" href="index.php"><img src="./images/header/logo.png" alt="" style="width: 220px;"
                    class="img-fluid logo"></a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse bg-000022 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav my-1 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  mx-4 fc-ffffff mt-1" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Auction
                        </a>
                        <ul class="dropdown-menu bg-000022">
                            <li><a class="dropdown-item   mt-1 fc-ffffff" href="trending_auctions.php">Trending
                                    auction</a>

                            <li><a class="dropdown-item  mt-1 fc-ffffff" href="sponsored_auctions.php">Sponsored
                                    auction</a></li>
                            <li><a class="dropdown-item  mt-1 fc-ffffff" href="incoming_auctions.php">Incoming
                                    auction</a></li>
                            <li><a class="dropdown-item   mt-1 fc-ffffff" href="completed_auctions.php">Completed
                                    auction</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  mx-4 fc-ffffff mt-1" href="registertosell.php">Register to sell
                            with us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  mx-4 fc-ffffff mt-1" href="about-us.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  mx-4 fc-ffffff mt-1" href="contact.php">Contact us</a>
                    </li>

                    <div class="d-flex">
                        <li class="nav-item mx-4">
<!-- Button to open the search modal -->
<button class="btn search-config mt-2" type="submit" data-bs-toggle="modal" data-bs-target="#searchModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-search mb-2 search-icon"
        viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
    </svg>
</button>

                            <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Search Form -->
                                            <form action="search.php" method="GET" role="search">
                                                <div class="container">
                                                    <div class="row bg-f8f9fa">
                                                        <div class="col">
                                                            <input type="text" class="form-control no-border-input"
                                                                id="search" name="search"
                                                                placeholder="What are you looking for?">
                                                        </div>
                                                        <div class="col text-end">
                                                            <button type="submit" class="btn no-border-input"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor" class="bi bi-search"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                                                </svg></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item  mx-4">
                            <div>

                                <a class="nav-link d-flex fc-ffffff" href="fav_obj.php">
                                    <i class="bi bi-heart-fill mt-1" style="font-size: 1.2rem;"></i>
                                    <span class="badge countposition bg-31D3FF rounded-pill"
                                        style="width: 40%; font-size: 0.5rem; height: 40%;"><?php echo htmlspecialchars($fav_count) ?></span>


                                </a>

                            </div>
                        </li>


                        <?php if (isset($_SESSION['username'])): ?>
                            <li class="nav-item wrap">
                                <a class="nav-link mx-4  fc-ffffff ms-1" href="categories1.php"> Wellcome,
                                    <?php echo htmlspecialchars($_SESSION['username']) ?></a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link mx-4  fc-ffffff m-1" href="login.php">Wellcome, Guest(Log
                                    in)</a>
                            </li>
                        <?php endif; ?>
                    </div>
                </ul>

            </div>
        </div>
    </nav>
</header>