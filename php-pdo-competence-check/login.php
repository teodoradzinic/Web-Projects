<?php
session_start();

include 'functions.php';
$pdo = pdo_connect_mysql();

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == "" || $password == "") {
        return;
    }
    if (checkLogin($pdo, $email, $password)) {
        $_SESSION['username'] = $email;
        header("Location: feed.php");
    } else {
        echo '<span class="message">The email or password are not correct!</span>';
    }
}
?>

<?= template_header("Login") ?>
<div class="login-bg">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end"  id="navbarNavAltMarkup">
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
        <div class="form d-flex flex-column justify-content-center m-5">
            <h1 class="text-white display-1">Login</h1>
            <form method="post" action="login.php">
                <div class="d-flex flex-wrap">
                <input type="email" class=" me-1 mb-1" name="email" placeholder="Email" required>
                <input type="password" class=" mb-1" name="password" placeholder="Password" required>
                </div>
                <input class="btn btn-secondary px-4" type="submit" value="login" name="login">
                <div><span class="text-white">No account?</span>
                    <a href="registration.php">Register</a>
                </div>
            </form>
        </div>
    </main>
</div>
<footer id="sticky-footer" class="position-absolute bottom-0 flex-shrink-0 py-3 bg-dark text-white-50">
    <div class="container text-center">
        <small>Copyright &copy; TEODORA</small>
    </div>
</footer>
<?= template_footer() ?>