<?php

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit;
}

$role = htmlspecialchars($_SESSION['role']);
?>

<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    li.nav-item {
        margin: 5px 0;
    }

    .nav-link {
        text-decoration: none;
        padding: 5px 10px;
        display: inline-block;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="collapse navbar-collapse text-white" id="navbarNav">
    <ul class="navbar-nav text-white" >
      <li class="nav-item" >
        <h4><a href="main.php" class="nav-link text-white">Home</a></h4>
      </li>
      <li class="nav-item" style="margin: 5px 0;">
        <h4><a href="profile.php" class="nav-link text-white">Profile</a></h4>
      </li>
      <?php
        if ($role == 2) {
            echo "
            <li class='nav-item' style='margin: 5px 0;'>
              <h4><a href='admin.php' class='nav-link text-white'>Admin</a></h4>
            </li>
            ";
        }
      ?>
      <li class="nav-item" style="margin: 5px 0;">
        <h4><a href="logout.php" class="nav-link text-white">Logout</a></h4>
      </li>
    </ul>
  </div>
</nav>
