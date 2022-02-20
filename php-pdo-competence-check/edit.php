<?php

include 'functions.php';
$pdo = pdo_connect_mysql();
$companyName ='';
$contactPerson = '';
$companyAddress ='';
$telephone ='';
$companyID = 0;

/*if(isset($_POST["employee_id"])){
    $query = $pdo->prepare("
    SELECT * FROM customer WHERE company_id = '".$_POST["company_id"]."'
    ");
    $query->execute();
    $result = $query -> fetch();
    echo json_encode($row);
}*/
if (isset($_GET['edit'])) {
    $companyID = $_GET['edit'];
    $query = $pdo->prepare("
    SELECT * FROM customer WHERE company_id = :company_id
    ");
    $query->bindParam(':company_id', $companyID);
    $query->execute();

    if ($query->rowCount() == 1) {
        $result = $query->fetch();
        $companyName = $result['company_name'];
        $companyAddress = $result['company_address'];
        $telephone = $result['company_tel'];
        $contactPerson = $result['contact_person'];
    }
}
if(isset($_POST['update'])){
    $companyID = $_POST['companyId'];
    $companyName = $_POST['companyName'];
    $companyAddress = $_POST['companyAddress'];
    $contactPerson = $_POST['contactPerson'];
    $telephone = $_POST['telephone'];

   if(editEntry($pdo, $companyName, $companyAddress, $telephone, $contactPerson, $companyID)){
        $_SESSION['message']= "Record has been updated!";
        $_SESSION['msg_type'] = "warning";

        header('location: profile.php');
    }
}

?>
<?= template_header("My Profile") ?>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="feed.php">Feed</a>
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
</header>
<main>

<section class="edit-form w-75">
<h4>UPDATE</h4>
<p>Insert Company Info</p>
<div class="">
    <form class="d-flex flex-column" method="post" action="edit.php">
        <label for="companyName">Name of The Company:</label>
        <input type="text" name="companyName" class="form-control" value="<?php echo $companyName ?>" placeholder="Name Of The Company" required>
        <label for="companyAddress">Address:</label>
        <input type="text" name="companyAddress" class="form-control" value="<?php echo $companyAddress ?>" placeholder="Address Of The Company" required>
        <label for="contactPerson">Contact Person:</label>
        <input type="text" name="contactPerson" class="form-control" value="<?php echo $contactPerson ?>" placeholder="Contact Person" required>
        <label for="telephone">Telephone:</label>
        <input type="text" name="telephone" class="form-control" value="<?php echo $telephone ?>" placeholder="Telephone" required>
        <input type="hidden" name="companyId" value="<?php echo $companyID; ?>"> 
        <input class="btn btn-warning btn-lg" type="submit" value="Update" name="update">
    </form>
</section>

</main>
<footer id="sticky-footer" class="position-absolute bottom-0 flex-shrink-0 py-3 bg-dark text-white-50 ">
    <div class="container text-center">
        <small>Copyright &copy; TEODORA</small>
    </div>
</footer>
<?= template_footer() ?>