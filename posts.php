<?php require_once("includes/Database.php");?>
<?php require_once("includes/Functions.php");?>
<?php require_once("includes/Sessions.php");?>
<?php Confirm_Login() ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="fontawesome/all.css">
    <link rel="stylesheet" href="fontawesome/solid.css">
    <link rel="stylesheet" href="fontawesome/brands.css">
    <link rel="stylesheet" href="fontawesome/regular.css">
    <link rel="stylesheet" href="fontawesome/fontawesome.css">
    <!-- fontawesome JS-->
    <script defer src="fontawesome/all.js"></script>
    <script defer src="fontawesome/solid.js"></script>
    <script defer src="fontawesome/brands.js"></script>
    <script defer src="fontawesome/regular.js"></script>
    <script defer src="fontawesome/fontawesome.js"></script>

    <title>Posts</title>
  </head>
  <body>
  <!-- NAVBAR STARTS HERE-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
      <div class="container">
        <a href="index.php" class="navbar-brand text-success h1">IFFCSAT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapseCMS"
         aria-controls="navbarcollapseCMS" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarcollapseCMS">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="index.php" class="nav-link text-success">
            <i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a href="profile.php" class="nav-link text-success">
            <i class="fas fa-user"></i> Profile</a>
        </li>
        <li class="nav-item">
          <a href="posts.php" class="nav-link text-success">
            <i class="fas fa-sticky-note"></i> Posts</a>
        </li>
        <li class="nav-item">
          <a href="college.php" class="nav-link text-success">
            <i class="fas fa-university"></i> College</a>
        </li>
        <li class="nav-item">
          <a href="teachers.php" class="nav-link text-success">
            <i class="fas fa-user-tie"></i> Teachers</a>
        </li>
        <li class="nav-item">
          <a href="students.php" class="nav-link text-success">
            <i class="fas fa-user-graduate"></i> Students</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="Logout.php" class="nav-link text-danger">
            <i class="fas fa-user-times"></i> Logout</a>
        </li>
      </ul>
      </div>
      </div>
    </nav>
    <div style="height:5px;background:teal;"></div>
    <!-- NAVBAR ENDS HERE -->

    <!-- HEADER STARTS HERE-->
    <header class="bg-white text-dark py-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 mb-3">
            <a href="AddNewPost.php" class="btn btn-primary btn-block">
              <i class="fas fa-edit"></i> Add New Post
            </a>
          </div>
          <div class="col-lg-3 mb-3">
            <a href="#" class="btn btn-dark btn-block">
              <i class="fas fa-server"></i>  View Notices
            </a>
          </div>
          <div class="col-lg-3 mb-3">
            <a href="#" class="btn btn-warning btn-block">
              <i class="fas fa-book-open"></i>  View Assignments
            </a>
          </div>
          <div class="col-lg-3 mb-3">
            <a href="#" class="btn btn-success btn-block">
              <i class="fas fa-book"></i> Submit Assignments
            </a>
          </div>

        </div>
      </div>

    </header>
    <!-- HEADER ENDS HERE -->

    <!-- FOOTER STARTS HERE-->
    <div style="height:5px;background:teal;"></div>
    <footer class="bg-warning text-white">
      <div class="container">
        <div class="row">
          <div class="col">
          <p class="lead text-center m-auto p-1 text-success">Project By | Roops |&copy; ----All right Reserved.</p>
           </div>
         </div>
      </div>
    </footer>
    <!-- FOOTER ENDS HERE-->

  </body>
</html>
