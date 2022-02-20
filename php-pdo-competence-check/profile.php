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
}else{
    header('location: index.php');
}

?>
<?= template_header("My Profile") ?>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark position-relative">
        <div class="container-fluid">
            <a class="navbar-brand" href="feed.php">Feed</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="logout.php">Logout <i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </div>
    </nav>



</header>

<main>

    <h2 class="customers-heading"> Your Customers</h2>
    <?php echo '<h4 class="salutation">' . $result['name'] . '</h4>'; ?>

        <div class="button-div">
            <button type="button" class="btn btn-warning mb-3" id="myModal" data-bs-toggle="modal" data-bs-target="#myInput">
            <i class="fas fa-plus"></i>
            New Entry
        </button></div>
    <section class="display">
        

        <div class="d-flex flex-column justify-content-center align-items-center">
            <?php
            $query = $pdo->prepare("
    SELECT * FROM customer WHERE user_id = :user_id 
    ");
            $userID = $result['user_id'];
            $query->bindParam(":user_id", $userID);
            $query->execute();

            while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="card mb-3 w-75">

                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title"><?php echo $result['company_name'] ?></h5>
                            <p class="card-text">Address: <?php echo $result['company_address'] ?></p>
                            <p class="card-text">Telephone: <?php echo $result['company_tel'] ?></p>
                            <p class="card-text">Contact person: <?php echo $result['contact_person'] ?></p>
                            <p class="card-text">Created on <?php echo $result['create_time'] ?></p>
                            <?php if ($result['create_time'] !== $result['edit_time']) { ?>
                                <p class="hidden">Edited on <?php echo $result['edit_time'] ?></p>
                            <?php } ?>
                        </div>
                        <div>
                            <a href="edit.php?edit=<?php echo $result['company_id']; ?>" class="btn btn-secondary btn-sm"><i class="far fa-edit"></i> Edit</a>
                            <a href="delete.php?delete=<?php echo $result['company_id']; ?>" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</a>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </section>

    <!-- Add Modal -->
    <div class="modal fade" id="myInput" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-black" id="exampleModalLabel">New Entry</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="add-modal modal-body">
                    <p>Insert Company Info</p>
                    <div class="d-flex flex-column justify-content-center">
                        <form class="d-flex flex-column justify-content-center" method="post" action="add.php">
                            <input type="text" name="companyName" placeholder="Name Of The Company" required>
                            <input type="text" name="companyAddress" placeholder="Address Of The Company" required>
                            <input type="text" name="contactPerson" placeholder="Contact Person" required>
                            <input type="text" name="telephone" placeholder="Telephone" required>
                            <input class="btn btn-warning" type="submit" value="Create" name="create">
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</main>

<footer id="sticky-footer" class="position-absolute bottom-0 flex-shrink-0 py-3 bg-dark text-white-50">
    <div class="container text-center">
        <small>Copyright &copy; TEODORA</small>
    </div>
</footer>
<?= template_footer() ?>