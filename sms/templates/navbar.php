<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <a href="index.php" class="navbar-brand">
        <strong>SMS</strong>
    </a>
    <!-- Left navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./contact.php" class="nav-link">Contact</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./about.php" class="nav-link">About</a>
      </li>

      <?php
      if(is_admin()): ?>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./users.php" class="nav-link">Users</a>
      </li>
      <?php endif;

      if(is_user_logged_in()):
      ?>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./profile.php" class="nav-link">Profile</a>
      </li>

        <li class="nav-item d-none d-sm-inline-block">
        <a href="./functions/logout.php" class="nav-link">Logout</a>
      </li>
      <?php else: ?>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="./login.php" class="nav-link">Login</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./registration.php" class="nav-link">Sign Up</a>
      </li>

      <?php endif; ?>

    </ul>
  </nav>
  <!-- /.navbar -->