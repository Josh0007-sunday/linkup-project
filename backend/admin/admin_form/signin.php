<?php
include '../include/connect2.php';
session_start();




if(isset($_POST['login'])){
    $username = htmlspecialchars($_POST['username']);
    $pass = htmlspecialchars('pass');

    //login fields//
//check if the data from the login form was selected
  if (!isset($username, $pass)){
    //could not get the data sent
    exit('please fill both the activation code and password fields');
  }
  //prepare sql from injection
  if($stmt = $con->prepare('SELECT id, password FROM add_admin WHERE username =?  ')){
    //Bind param
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();
  
    if ($stmt->num_rows > 0){
      $stmt->bind_result($id, $password);
      $stmt->fetch();
      $_SESSION['status'] = 'This account already exists';
      $_SESSION['status_code'] = 'alert alert-warning';
      header('location: login.php');
    
      if (password_verify($pass, $password)){
        //create sessions
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['id'] = $id;
        //redirect
        header('location: ../index.php');
      }else{
        $_SESSION['status'] = 'Incorrect username or password';
        $_SESSION['status_code'] = 'alert alert-danger';
        header('location: login.php');
      }
    }else{
      $_SESSION['status'] = 'Incorrect username or password';
      $_SESSION['status_code'] = 'alert alert-danger';
      header('location: login.php');
    }
    $stmt->close();
  }
  
}


?>
