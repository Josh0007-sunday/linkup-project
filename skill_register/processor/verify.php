<?php
include '../../include/connect.php';

session_start();
 $campus = $_SESSION["campus"];
 $fname = $_SESSION["fname"];
 $lname = $_SESSION["lname"];
 $email = $_SESSION["email"];
 $phone_number = $_SESSION["phno"];
 $amount = $_SESSION["amount"];
 $other_campus = $_SESSION["campus_other"];
 $skill = $_SESSION["skill"];
 $subskill = $_SESSION["subskill"];






if(isset($_GET["transaction_id"]) AND isset($_GET["status"])  AND isset($_GET["tx_ref"])){
    $trans_id = htmlspecialchars($_GET['transaction_id']);
    $trans_status = htmlspecialchars($_GET['status']);
    $trans_ref = htmlspecialchars($_GET['tx_ref']);

    //Verify Endpoint
    $url = "https://api.flutterwave.com/v3/transactions/".$trans_id."/verify";

    //Create cURL session
    $curl = curl_init($url);

    //Turn off SSL checker
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

    //Decide the request that you want
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
    
    //Set the API headers
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer FLWSECK_TEST-ef2b7caa813c6a0318af94f9e2214e45-X",
        "Content-Type: Application/json"
    ]);

    //Run cURL
    $run = curl_exec($curl);

    //Check for erros
    $error = curl_error($curl);
    if($error){
        die("Curl returned some errors: " . $error);
    }

   //echo"<pre>" . $run . "</pre>";
   //Convert to json obj
   $result = json_decode($run);

  $status = $result->data->status;
  $message = $result->message;
  $id = $result->data->id;
  $reference =  $result->data->tx_ref;
  $amount =  $result->data->amount;
  $charged_amount = $result->data->charged_amount;
  $fullName =  $result->data->customer->name;
  $email =  $result->data->customer->email;
  $phone =  $result->data->customer->phone_number;

  if(($status != $trans_status) OR ($trans_id != $id)){
     header("Location: ../campusbased.php");
     exit;
  }else{
      //Give value
      $stmt = $con->prepare("INSERT INTO user_payment (status, amount, trx_id, fullname, email) VALUES (?,?,?,?,?)");
      $stmt->bind_param("sssss", $status, $amount, $id, $fullName, $email);

      if ($stmt->execute()) {
      header('location: success.php');
    } else {
        echo "Error: " . $stmt->error;
    }
    // Close the statement and the connection
    $stmt->close();
    $con->close();
  }
  
  curl_close($curl);

}else{
    header("Location: ../campusbased.php");
     exit; 
}
          //insert new data
          if ($stmt = $con->prepare('INSERT INTO campusbased (campus, firstname, lastname, email, contact, suggest_campus, skill, sub_skill) VALUES (?,?,?,?,?,?,?,?)')){
            $stmt->bind_param('ssssssss', $campus, $fname, $lname, $email, $phone_number, $other_campus, $skill, $subskill);
            $stmt->execute();
        
            $_SESSION['status_text'] = 'You have successfully registered your skill on our platform
                                    we would use your info to link you up with people who need youre services ';
            $_SESSION['status'] = 'Registration Success';
            $_SESSION['status_code'] = 'success';
            // header('location: ../campusbased.php');
            }else{
            //something went wrong check to make sure fields are complete
            $_SESSION['status'] = 'Something went wrong, make sure the fields are not empty!';
            $_SESSION['status_code'] = 'error';
            header('location: ../campusbased.php');
            }
           $con->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rave or Flutterwave Integration in PHP and cURL</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <h1>Rave Verification Page!</h1>
   <hr>
   <div class="container verify">
    <table>
    <tr>
       <th>Full Name</th>
       <th>Phone Number</th>
       <th>Email</th>
       <th>Transaction Status</th>
       <th>Reference</th>
       <th>Transaction Id</th>
       <th>Amount</th>
       <th>Charged Amount</th>
       </tr>
       <tr>
            <td><?php echo $fullName; ?></td>
            <td><?php echo $phone; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $status; ?></td>
            <td><?php echo $reference; ?></td>
            <td><?php echo $id; ?></td>
            <td><?php echo $amount; ?></td>
            <td><?php echo $charged_amount; ?></td>
       </tr>
    </table>
   </div> 
</body>
</html>