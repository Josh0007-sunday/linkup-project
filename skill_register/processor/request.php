<?php
include '../../include/connect.php';
session_start();


        // check if data was submitted.
    if (!isset($_POST['campus'], $_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['phno'], $_POST['campus_other'], $_POST['skill'], $_POST['sub_skill'] )){
        // could not get user data
        $_SESSION['status'] = 'The form was not able to be inserted. Please fill up the form!';
        $_SESSION['status_code'] = 'error';
        header('location: ../request_services.php');
        // exit('please complete the registration form');
    }

    //make sure the registration input are not empty
    if (empty($_POST['campus']) || empty($_POST['fname'])  || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['phno']) || empty($_POST['campus_other']) || empty($_POST['skill']) || empty($_POST['subskill'])   ){
        $_SESSION['status'] = 'please fill up the registration form!';
        $_SESSION['status_code'] = 'warning';
        header('location: ../request_services.php');
    }

      //insert new account
      if ($stmt = $con->prepare('INSERT INTO request_service (campus, fname, lname, email, contact, suggest_campus, skill, sub_skill) VALUES (?,?,?,?,?,?,?,?)')){
 
  
        $stmt->bind_param('ssssssss', $_POST['campus'], $_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['phno'], $_POST['campus_other'], $_POST['skill'], $_POST['subskill']);
        $stmt->execute();
  
  
        $_SESSION['status'] = 'Registration was successful! Try logging in!';
        $_SESSION['status_text'] = 'you will get feed back email from our team';
        $_SESSION['status_code'] = 'success';
        header('location: success.php');
      }else{
        //something went wrong check to make sure fields are complete
        $_SESSION['status'] = 'Something went wrong, make sure the fields are not empty!';
        $_SESSION['status_code'] = 'error';
        header('location: register.php');
      }
  
  
  $con->close();
?>