<?php
session_start();
include 'include/connect2.php';

if(isset($_POST['upload'])){
  $username = htmlspecialchars($_POST['username']);
  $email = htmlspecialchars($_POST['email']);
  $role = htmlspecialchars($_POST['role']);
  $password = htmlspecialchars('pass');


  if ($stmt = $con->prepare('SELECT id, password FROM add_admin WHERE username = ? AND email = ?')){
    $stmt->bind_param('ss', $username, $email);
    $stmt->execute();
    $stmt->store_result();
    //store result so we can check if the account exist in the database
    if ($stmt->num_rows > 0){
      //user name already exists
      $_SESSION['status'] = 'Username already exists try using something else';
      $_SESSION['status_code'] = 'alert alert-warning';
      header('location: add_admin.php');
    }else{
           //insert new data
           if ($stmt = $con->prepare('INSERT INTO add_admin (username, email, role, password) VALUES (?,?,?,?)')){
            $password = password_hash($password, PASSWORD_DEFAULT);
    
            $stmt->bind_param('ssss', $username, $email, $role, $password);
            $stmt->execute();
        
            $_SESSION['status_text'] = 'You have successfully uploaded a new admin to the platform';
            $_SESSION['status'] = 'Registration Success';
            $_SESSION['status_code'] = 'alert alert-success';
            header('location: add_admin.php');
            }else{
            //something went wrong check to make sure fields are complete
            $_SESSION['status'] = 'Something went wrong, make sure the fields are not empty!';
            $_SESSION['status_code'] = 'alert alert-danger';
            header('location: add_admin.php');
            }
    }
 
        $con->close();
  }
}
?>