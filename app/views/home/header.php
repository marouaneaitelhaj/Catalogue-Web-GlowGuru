<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- <link href="/dist/output.css" rel="stylesheet"> -->

<link rel="stylesheet" href="../app/views/home/style/style.css?v=<?php echo time(); ?>">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <span class="wi">GlowGuru</span>
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " href="./">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="NewArrivals">New Arrivals</a>
        </li>
      </ul>
      <!-- Left links -->
      <form action="" method="post" class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2 mt-2">
        <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search">
      </form>
    </div>
    <div class="w-25 justify-content-around d-flex align-items-center">
    <!-- Icon -->
    <?php
    if (!isset($_SESSION["email"])) {
    ?>
      <a href="login">
        <i class="fa fa-sign-in" aria-hidden="true"></i>
      </a>
    <?php
    }
    ?>
    <?php
    if (isset($_SESSION["email"])) {
    ?>

      <a href="addproduct">
        <i class="fas fa-plus-circle"></i>
      </a>
      <a href="tableproduct">
        <i class="fas fa-edit"></i>
      </a>
    <?php
    }
    ?>
    <?php
    if (isset($_SESSION["email"])) {
    ?>

      <?php
      if (isset($_GET["id"])) {
      ?>
        <i class="fas fa-shopping-cart" onclick="toggleShoppingCart()"></i>
      <?php
      }
      ?>

    <?php
    }
    ?>
    <!-- Avatar -->
    <?php
    if (isset($_SESSION["email"])) {
    ?>
      <div class="dropdown">
        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-user" aria-hidden="true"></i>

        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
          <li>
            <a class="dropdown-item" href="profile">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="Logout">Logout</a>
          </li>
        </ul>
      </div>
    <?php
    }
    ?>
  </div>
  </div>
  <!-- Collapsible wrapper -->

  <!-- Right elements -->

  
  <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>


<!-- Navbar -->
<script>
  function toggleShoppingCart() {
    // Get the shopping cart element
    var shoppingCart = document.querySelector('.shopping-cart');

    // Toggle the visibility of the shopping cart
    if (shoppingCart.style.display === 'none') {
      shoppingCart.style.display = 'block';
    } else {
      shoppingCart.style.display = 'none';
    }
  }
</script>