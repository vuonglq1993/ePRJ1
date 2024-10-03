<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header Example</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
  <style>
    .navbar-custom {
      background-color: #0b0b33; /* Màu nền xanh đậm */
      padding: 10px 20px;
    }

    .navbar-custom .navbar-brand img {
      height: 40px; /* Đặt chiều cao logo */
    }

    .navbar-custom .nav-link {
      color: white;
      font-size: 1rem;
      padding-left: 15px;
    }

    .navbar-custom .search-input {
      border-radius: 2rem;
      border: none;
      padding: 5px 15px;
      width: 300px;
      margin-left: 15px;
    }

    .navbar-custom .search-input::placeholder {
      color: #cccccc;
    }

    .navbar-custom .search-icon {
      position: relative;
      left: -30px;
      color: #cccccc;
    }

    .navbar-custom .btn-sell {
      background-color: #5bc0de;
      border-radius: 2rem;
      color: white;
      padding: 5px 20px;
      margin-left: 10px;
    }

    .navbar-custom .navbar-icons {
      color: white;
      font-size: 1.5rem;
      margin-left: 20px;
    }

    .navbar-custom .icon-badge {
      position: relative;
      top: -10px;
      left: -10px;
      font-size: 0.7rem;
      background-color: #5bc0de;
      color: white;
      border-radius: 50%;
      padding: 2px 5px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://yourlogo.com/logo.png" alt="Logo">
    </a>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="#">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Popular Artists</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Inspire me</a>
      </li>
    </ul>
    <form class="d-flex align-items-center">
      <i class="bi bi-search search-icon"></i>
      <input class="form-control search-input" type="search" placeholder="What are you looking for?" aria-label="Search">
    </form>
    <button class="btn btn-sell" type="button">Sell my Art</button>
    <div class="d-flex align-items-center">
      <i class="bi bi-person navbar-icons"></i>
      <i class="bi bi-heart navbar-icons position-relative">
        <span class="icon-badge">1</span>
      </i>
      <i class="bi bi-cart3 navbar-icons position-relative">
        <span class="icon-badge">0</span>
      </i>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
