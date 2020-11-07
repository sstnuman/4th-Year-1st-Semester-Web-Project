<?php

require_once 'source/session.php';
require_once 'source/db_connect.php';

if(isset($_POST['login-btn'])) {

    $user = $_POST['user-name'];
    $password = $_POST['user-pass'];
    //$hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $hashed_password =$password;
    //var_dump($password); exit;
    //var_dump($hashed_password); exit;
    try {
      $SQLQuery = "SELECT * FROM users WHERE username = :username";
      $statement = $conn->prepare($SQLQuery);
      $statement->execute(array(':username' => $user));
      //$statement->execute(array(':pass' => $hashed_password));
      //var_dump($statement); exit;
      while($row = $statement->fetch()) {
        //var_dump($row); exit;
        //var_dump("I am here"); exit;
        $id = $row['id'];
       // $hashed_password = $row['password'];
        //$hashed_password = password_hash($row['password'], PASSWORD_DEFAULT);
        $username = $row['username']; 
        if(  $hashed_password == $row["password"]) {
          $_SESSION['id'] = $id;
          $_SESSION['username'] = $username;
          //var_dump($row['Email']); exit;
          $_SESSION['Email'] = $row['Email'];
          header('location: dashboard.php');
        }
        else {
         // var_dump("Invalid username or password"); exit;
          echo "Error: Invalid username or password";
        }
      }
    }
    catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

}

?>