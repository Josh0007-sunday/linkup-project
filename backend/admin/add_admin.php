<?php
include 'include/header.php';
include 'include/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<?php
      if (isset($_SESSION['status'])){
    ?>
    <div class="<?php echo $_SESSION['status_code']; ?>">
    <strong><?php echo $_SESSION['status']; ?></strong><?php echo $_SESSION['status_text']; ?>
    </div>
    <?php
        unset( $_SESSION['status']);
      }
    ?>

        
<div class="col-md-12 grid-margin stretch-card">
      <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create Admin Account</h4>
                  <p class="card-description"></p>
                  <form method="post" action="signup.php" class="forms-sample">

                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
                      <div class="col-sm-9">
                        <input type="text" name="username" class="form-control" id="exampleInputUsername2" placeholder="Username">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Role</label>
                      <div class="col-sm-9">
                        <select name="role" id="" class="form-control">
                        <option value="CEO">CEO</option>
                          <option value="DEVELOPER">Developer</option>
                          <option value="MEDIA">Media</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword2" placeholder="Password">
                      </div>
                    </div>

                    <button type="submit" name="upload" class="btn btn-primary me-2">Upload</button>
                    <!-- <button class="btn btn-light">Cancel</button> -->
                  </form>
                </div>
              </div>
            </div>

      


</body>
</html>


<?php
include 'include/footer.php';
?>