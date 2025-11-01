<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gujarat Tourism</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <style>
    /* Navbar Base */
    .navbar {
      background-color: #fff;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
      padding: 10px 0;
    }

    /* Navbar Links */
    .navbar-nav .nav-link {
      color: #333;
      font-weight: 500;
      margin-right: 20px;
      transition: color 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
      color: #007bff;
    }

    /* Dropdown Menu */
    .dropdown-menu {
      border-radius: 10px;
      border: none;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Search Bar */
    .form-control {
      width: 220px;
      border-radius: 20px;
      border: 1px solid #ddd;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      border-color: #007bff;
      box-shadow: 0 0 6px rgba(0, 123, 255, 0.3);
    }

    /* Buttons */
    .btn-outline-dark {
      border-radius: 20px;
      padding: 6px 18px;
    }

    .btn-info {
      border-radius: 20px;
      padding: 6px 20px;
      background-color: #0dcaf0;
      border: none;
      transition: background-color 0.3s ease;
    }

    .btn-info:hover {
      background-color: #0bb7da;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Gujarat Tourism</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- Cities -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="citiesDropdown" data-bs-toggle="dropdown">Cities</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Ahmedabad</a></li>
              <li><a class="dropdown-item" href="#">Surat</a></li>
              <li><a class="dropdown-item" href="#">Vadodara</a></li>
            </ul>
          </li>

          <!-- Spots -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="spotsDropdown" data-bs-toggle="dropdown">Spots</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Beaches</a></li>
              <li><a class="dropdown-item" href="#">Temples</a></li>
              <li><a class="dropdown-item" href="#">Wildlife</a></li>
            </ul>
          </li>

          <!-- Food -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="foodDropdown" data-bs-toggle="dropdown">Food</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Street Food</a></li>
              <li><a class="dropdown-item" href="#">Traditional Dishes</a></li>
            </ul>
          </li>

          <!-- Travel -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="travelDropdown" data-bs-toggle="dropdown">Travel</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Transport</a></li>
              <li><a class="dropdown-item" href="#">Stay</a></li>
            </ul>
          </li>
        </ul>

        <!-- Search -->
        <form class="d-flex me-3" role="search">
          <input class="form-control" type="search" placeholder="Ahmedabad" aria-label="Search">
        </form>

        <!-- Auth Buttons -->
        <a href="/login" class="btn btn-outline-dark me-2">Login</a>
        <a href="/register" class="btn btn-info text-white fw-semibold">Register</a>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
