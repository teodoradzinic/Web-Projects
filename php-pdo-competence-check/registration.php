<?php
session_start();

include 'functions.php';
$pdo = pdo_connect_mysql();

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($name == "" || $email == '' || $password == "" || $address == "") {
        return;
    }
    if (insertData($pdo, $name, $address, $email, $password)) {
        $_SESSION['username'] = $email;
        header("Location: feed.php");
    }
}

?>
<?= template_header('registration') ?>
<div class="login-bg">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
    </header>
    <main>
        <div class="register-animation d-flex justify-content-around flex-wrap">
            <section class="animation  my-2">
                <h1><br></br>
                    <div class="c1">
                        <div class="type">Build customer relations</div>
                    </div>
                    </br>
                    <div class="c2">
                        <div class="type2">Grow your business</div>
                    </div>
                    </br>
                    <div class="c3">
                        <div class="type3">Build a strong brand</div>
                    </div>
                    <br></br>
                    <div class="c4">
                        <div class="type4"><a href="#">Get started today</a></div>
                    </div>
                </h1>
            </section>
            <div class="form-reg d-flex flex-column justify-content-center">
                <h1 class="text-white">Register today</h1>
                <form class="d-flex flex-column justify-content-center" method="post" action="registration.php">
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="text" name="address" placeholder="Address" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input class="btn btn-warning p-3" type="submit" value="register" name="register">
                    <div><span class="text-white">Already have an account?</span>
                        <a href="login.php">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
<footer id="sticky-footer" class="flex-shrink-0 py-3 bg-dark text-white-50">
    <div class="container text-center">
        <small>Copyright &copy; TEODORA</small>
    </div>
</footer>
<?= template_footer() ?>