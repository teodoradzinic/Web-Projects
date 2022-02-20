<?php 
session_start();
include 'functions.php';
$pdo = pdo_connect_mysql();

$companyName ='';
$contactPerson = '';
$companyAddress ='';
$telephone ='';
$companyID = 0;

if (isset($_POST['create'])) {
   
    $email = $_SESSION["username"];
    $sql = "SELECT * FROM user WHERE email = :email";
    $query = $pdo->prepare($sql);
    $query->bindParam(":email", $email);
    $query->execute();

    $result = $query->fetch();
    $companyName = $_POST['companyName'];
    $companyAddress = $_POST['companyAddress'];
    $telephone = $_POST['telephone'];
    $contactPerson = $_POST['contactPerson'];

    $userID = $result['user_id'];

    if ($companyName == "" || $companyAddress == '' || $telephone == "" || $contactPerson == "") {
        return;
    }
    if (createEntry($pdo, $companyName, $companyAddress, $telephone, $contactPerson, $userID)) {
        echo "Added";
        header("Location: profile.php");
    }
    
}


?>