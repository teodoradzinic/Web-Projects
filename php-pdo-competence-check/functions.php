<?php
$companyName ='';
$contactPerson = '';
$companyAddress ='';
$telephone ='';
$companyID = 0;

function pdo_connect_mysql()
{
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'management_db';
    try {
        return new PDO('mysql:host=' . $host . ';dbname=' . $db_name . ';charset=utf8', $user, $password);
    } catch (PDOException $exception) {
        exit('Failed to connect to the database!');
    }
}

function template_header($title)
{
    echo <<<EOT
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>$title</title>
        <script src="https://kit.fontawesome.com/6671a42cb5.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/custom.css" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;1,300&display=swap" rel="stylesheet">
    </head>
    <body>
EOT;
}

function template_footer()
{
    echo <<<EOT
    <script src="./js/custom.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>
    EOT;
}

function insertData($pdo, $name, $address, $email, $password)
{
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = $pdo->prepare("
      
    INSERT INTO user(name, address, email, password)
    VALUES(:name, :address, :email, :password)
      ");

    $query->bindParam(":name", $name);
    $query->bindParam(":address", $address);
    $query->bindParam(":email", $email);
    $query->bindParam(":password", $hash);

    return $query->execute();
}

function checkLogin($pdo, $email, $password)
{
    
    $query = $pdo->prepare("
      SELECT * FROM user WHERE email=:email 
      ");
    $query->bindParam(":email", $email);
    

    $query->execute();

    if ($query->rowCount() == 1) {
        $row = $query->fetch(PDO::FETCH_ASSOC);
        if(password_verify($password, $row['password'])) {
            echo 'Success. You are logged in';
            return true;
            } else {
           echo 'Wrong PW';
           return false;
           }
    } else {
        return false;
    }
}
function createEntry($pdo, $companyName, $companyAddress, $telephone, $contactPerson, $userID){
    $query = $pdo->prepare("
    INSERT INTO customer(company_name, contact_person, company_tel, company_address, user_id)
    VALUES(:company_name, :contact_person, :company_tel, :company_address, :user_id)
    ");
    $query->bindParam(":company_name", $companyName);
    $query->bindParam(":contact_person", $contactPerson);
    $query->bindParam(":company_tel", $telephone);
    $query->bindParam(":company_address", $companyAddress);
    $query->bindParam(":user_id", $userID);
    
    return $query->execute();

}

function editEntry($pdo, $companyName, $companyAddress, $telephone, $contactPerson, $companyID){
    $query = $pdo->prepare("
    UPDATE customer SET company_name =:company_name, contact_person = :contact_person, company_tel = :company_tel, company_address = :company_address, company_id =:company_id
    WHERE company_id = :company_id
    ");
    $query->bindParam(":company_name", $companyName);
    $query->bindParam(":contact_person", $contactPerson);
    $query->bindParam(":company_tel", $telephone);
    $query->bindParam(":company_address", $companyAddress);
    $query->bindParam(":company_id", $companyID);

    return $query->execute();
}
function selectFromTable($pdo){
    $email = $_SESSION["username"];
    $sql = "SELECT * FROM user WHERE email = :email";
    $query = $pdo->prepare($sql);
    $query->bindParam(":email", $email);
    $query->execute();
    $result = $query->fetch();
    return $result;
}
if (isset($_GET['edit'])) {
    $companyID = $_GET['edit'];
    $pdo = pdo_connect_mysql();
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
