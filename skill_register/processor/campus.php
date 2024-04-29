<?php
include '../../include/connect.php';
session_start();

    

//     //validating email
//     if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
//         $_SESSION['status'] = 'Check the email address and try again!';
//         $_SESSION['status_code'] = 'warning';
//         header('location: ../campusbased.php');
//     }

    


//     //insert new data
//     if ($stmt = $con->prepare('INSERT INTO campusbased (campus, firstname, lastname, email, contact, suggest_campus, skill, sub_skill) VALUES (?,?,?,?,?,?,?,?)')){
//     $stmt->bind_param('ssssssss', $_POST['campus'], $_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['phno'], $_POST['campus_other'], $_POST['skill'], $_POST['subskill']);
//     $stmt->execute();

//     $_SESSION['status_text'] = 'You have successfully registered your skill on our platform
//                             we would use your info to link you up with people who need youre services ';
//     $_SESSION['status'] = 'Registration Success';
//     $_SESSION['status_code'] = 'success';
//     // header('location: ../campusbased.php');
//     }else{
//     //something went wrong check to make sure fields are complete
//     $_SESSION['status'] = 'Something went wrong, make sure the fields are not empty!';
//     $_SESSION['status_code'] = 'error';
//     header('location: ../campusbased.php');
//     }
//    $con->close();




   if(isset($_POST["next"])){
    $campus = htmlspecialchars($_POST["campus"]);
    $fname = htmlspecialchars($_POST["fname"]);
    $lname = htmlspecialchars($_POST["lname"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone_number = htmlspecialchars($_POST["phno"]);
    $amount = htmlspecialchars($_POST["amount"]);
    $other_campus = htmlspecialchars($_POST["campus_other"]);
    $skill = htmlspecialchars($_POST["skill"]);
    $subskill = htmlspecialchars($_POST["subskill"]);

    $_SESSION["campus"] = $campus;
    $_SESSION["fname"] = $fname;
    $_SESSION["lname"] = $lname;
    $_SESSION["email"] = $email;
    $_SESSION["phno"] = $phone_number;
    $_SESSION["amount"] = $amount;
    $_SESSION["campus_other"] = $other_campus;
    $_SESSION["skill"] = $skill;
    $_SESSION["subskill"] = $subskill;

        // check if data was submitted.
        if (!isset( $_POST['campus'], $_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['phno'])){
            // could not get user data
            $_SESSION['status'] = 'The form was not able to be inserted. Please fill up the form!';
            $_SESSION['status_code'] = 'error';
            header('location: ../campusbased.php');
            // exit('please complete the registration form');
        }
        //make sure the registration input are not empty
        if (empty($_POST['campus']) || empty($_POST['fname']) || empty($_POST['lname'])  || empty($_POST['email']) || empty($_POST['phno']) || empty($_POST['amount']) || empty($_POST['campus_other']) || empty($_POST['skill']) || empty($_POST['subskill'])){
            $_SESSION['status'] = 'please fill up the registration form!';
            $_SESSION['status_code'] = 'warning';
            header('location: ../campusbased.php');
        }
                      //Integrate Rave pament
                      $endpoint = "https://api.flutterwave.com/v3/payments";
                      //Required Data
                      $postdata = array(
                          "tx_ref" => uniqid().uniqid(),
                          "currency" => "NGN",
                          "amount" => $amount,
                          "customer" =>array(
                              "name" => $fname.$lname,
                              "email" => $email,
                              "phone_number" => $phone_number
                          ),
                          "customizations" =>array(
                              "title" => "Skill Registration fee",
                              "description" => ""
                          ),
          
                          "meta" =>array(
                              "reason" => "",
                              "address" => ""
                          ),
                          "redirect_url" => "http://localhost/linkup/skill_register/processor/verify.php"
                      );
          
                      //Init cURL handler
                      $ch = curl_init();
          
                      //Turn of SSL checking
                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
          
                      //Set the endpoint
                      curl_setopt($ch, CURLOPT_URL, $endpoint);
          
                      //Turn on the cURL post method
                      curl_setopt($ch, CURLOPT_POST, 1);
          
                      //Encode the post field
                      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));
          
                      //Make it reurn data
                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          
                      //Set the waiting timeout
                      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
                      curl_setopt($ch, CURLOPT_TIMEOUT, 200);
          
                      //Set the headers from endpoint
                      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                      "Authorization: Bearer FLWSECK_TEST-ef2b7caa813c6a0318af94f9e2214e45-X",
                      "Content-Type: Application/json",
                      "Cache-Control: no-cahe"
                      ));
          
                      //Execute the cURL session
                      $request = curl_exec($ch);
          
                      $result = json_decode($request);
                      header("Location:".$result->data->link);
                      //var_dump($result);
                      //Close the cURL session
                      curl_close($ch);

   }
   
  
?>