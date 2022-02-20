<?php
include 'functions.php';
$pdo = pdo_connect_mysql();

if(isset($_GET['delete'])){
    $companyID = $_GET['delete'];
    $query = $pdo->prepare("
    DELETE FROM customer WHERE company_id = :company_id
    ");
    $query->bindParam(':company_id', $companyID);
    $query->execute();
    header('location: profile.php');
}

?>