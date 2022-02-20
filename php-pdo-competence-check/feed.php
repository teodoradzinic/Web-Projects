<?php
session_start();
include 'functions.php';
$pdo = pdo_connect_mysql();

if (isset($_SESSION["username"])) {

    $email = $_SESSION["username"];
    $sql = "SELECT * FROM user WHERE email = :email";
    $query = $pdo->prepare($sql);
    $query->bindParam(":email", $email);
    $query->execute();

    $result = $query->fetch();
} else {
    header('location: index.php');
}
?>
<?= template_header("Companies") ?>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="profile.php">My Customers</a>
                </div>
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="logout.php">Logout <i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <?php echo '<h4 class="salutation">Welcome ' . $result['name'] . '</h4>'; ?>
</header>

<main>
    <div class="feed-title">
        <h5 class="mb-3">All companies</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, eum.</p>
        <div>
            <span>Lorem, ipsum dolor. </span>
            <span><?php
                    echo  date("Y/m/d"); ?></span>
        </div>
    </div>

    <section class="display">
        <div class="d-flex flex-column justify-content-center align-items-center">

            <?php
            $query = $pdo->prepare("
    SELECT * FROM customer order by create_time desc
    ");
            $query->execute();

            while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="card mb-3 w-75">
                    <div class="card-body p-0 d-flex flex-column justify-content-center">
                        <h5 class="card-title ps-2"><?php echo $result['company_name'] ?></h5>
                        <div class="ps-4">
                            <p class="card-text"><i class="fas fa-map-marker-alt"></i> <?php echo $result['company_address'] ?></p>
                            <p class="card-text"><i class="fas fa-phone-alt"></i> <?php echo $result['company_tel'] ?></p>
                            <p class="card-text"><i class="fas fa-id-card-alt"></i> <?php echo $result['contact_person'] ?></p>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </section>
</main>

<footer id="sticky-footer" class="flex-shrink-0 py-3 bg-dark text-white-50">
    <div class="container text-center">
        <small>Copyright &copy; TEODORA</small>
    </div>
</footer>
<?= template_footer() ?>