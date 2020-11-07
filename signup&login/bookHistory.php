<?php


require_once 'source/db_connect.php';

include_once 'source/session.php';

if(isset($_POST['ban-btn'])) {

    $customerName = $_SESSION['username'];
    $email = $_SESSION['Email']; 

      $hashed_password = $password; //password_hash($password, PASSWORD_DEFAULT);
      //var_dump($hashed_password); exit;
    try {
      $SQLInsert = "INSERT INTO bookHistory (customerName, email, PackageName)
                   VALUES (:customerName, :email, :PackageName )";

      $statement = $conn->prepare($SQLInsert);
      $statement->execute(array(':customerName' => $customerName, ':email' => $email, ':PackageName' => 'Bandarban'));

      if($statement->rowCount() == 1) {
        header('location: http://localhost/Cholo_Bangladesh/signup&login/dashboard.php');
      }
    }
    catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

}
else  if(isset($_POST['cox-btn'])) {

    $customerName = $_SESSION['username'];
    $email = $_SESSION['Email']; 

    $hashed_password = $password; //password_hash($password, PASSWORD_DEFAULT);
    //var_dump($hashed_password); exit;
  try {
    $SQLInsert = "INSERT INTO bookHistory (customerName, email, PackageName)
                 VALUES (:customerName, :email, :PackageName )";

    $statement = $conn->prepare($SQLInsert);
    $statement->execute(array(':customerName' => $customerName, ':email' => $email, ':PackageName' => 'CoxsBazar'));

    if($statement->rowCount() == 1) {
      header('location: http://localhost/Cholo_Bangladesh/signup&login/dashboard.php');
    }
  }
  catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

}

else if(isset($_POST['syl-btn'])) {

    $customerName = $_SESSION['username'];
      $email = $_SESSION['Email']; 

    $hashed_password = $password; //password_hash($password, PASSWORD_DEFAULT);
    //var_dump($hashed_password); exit;
  try {
    $SQLInsert = "INSERT INTO bookHistory (customerName, email, PackageName)
                 VALUES (:customerName, :email, :PackageName )";

    $statement = $conn->prepare($SQLInsert);
    $statement->execute(array(':customerName' => $customerName, ':email' => $email, ':PackageName' => 'Sylhet'));

    if($statement->rowCount() == 1) {
      header('location: http://localhost/Cholo_Bangladesh/signup&login/dashboard.php');
    }
  }
  catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

}

?>