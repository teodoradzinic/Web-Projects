<?php
session_start();
include 'functions.php';
if (isset($_SESSION["username"])) {
    header("Location: feed.php");
}
?>
<?= template_header('Management System') ?>

<header>
    <div class="bg-image" style="background-color: black; background-image: url('img/indexpic.jpg');
     background-size: cover;
            height: 100vh">
        <div class="gradient-custom">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Home</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                        </div>
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="registration.php">Registration</a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="title d-flex flex-column justify-content-center">
                <div class="d-flex justify-content-center">
                    <h1 class="text-white mb-0 text-center align-self-center display-1">Management System</h1>
                </div>
                <span class="text-white align-self-center mb-5">-The Best Management System Ever-</span>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a class="btn btn-outline-light" href="login.php" role="button"><i class="fas fa-sign-in-alt"></i> Login</a>
                    <a class="btn btn-outline-warning" href="registration.php" role="button"><i class="fas fa-user-plus"></i> Register</a>
                </div>
            </div>
        </div>
    </div>
</header>

<footer id="sticky-footer" class="flex-shrink-0 py-3 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; TEODORA</small>
    </div>
  </footer>

<?= template_footer() ?>