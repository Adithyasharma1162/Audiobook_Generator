<?php
    $showAlert=false;
    $showErr=false;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include '_include/_dbconnect.php';
        $fname=$_POST["first_name"];
        $lname=$_POST["last_name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $cpassword=$_POST["cpassword"];
        $sql="select * from users where email = '$email'";
        $res=mysqli_query($conn,$sql);
        $num= mysqli_num_rows($res);
        if($num > 0){
            $showErr="Email already exist";
        }
        else{
            if(($password == $cpassword)){
                $hash = password_hash($password,PASSWORD_DEFAULT);
                $sql="INSERT INTO `users` (`fname`, `lname`, `email`, `password`, `date`) VALUES ('$fname', '$lname', '$email', '$hash', current_timestamp())";
                $result=mysqli_query($conn,$sql);
                if($result){
                    $showAlert = true; 
                }
            }
            else{
                $showErr="Passwords do not match";
            }
        }
    }
?>

  <!--Navigation-->
  <?php include '_include/_header.php' ?>
  <!--SignUp-->
  <div id="cnt"class="row grey lighten-3" style="padding-top: 20px;  padding-bottom: 20px;">
    <div class="container">
      <h4 class="center-align tab" style="margin-top: 0px;">SignUp</h4>
      <hr <hr style="height: 2px; width: 50px; background: #009688; border: none;">
      <?php
        if($showAlert){
            echo '
            <div class="alert alert-success" role="alert"> 
                <strong>Success!</strong> Your account is created successfully. Please <a href="login.php" class="alert-link">Login</a> to continue.
            </div>';
        }
      ?>
      <?php
        if($showErr){
            echo '
            <div class="alert alert-danger" role="alert"> 
                <strong>Error!</strong> '.$showErr.'
            </div>';
        }
      ?>
      <div class="row">
        <form class="col s12" action="signup.php" method="post" >
          <div class="row">
            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate" name="first_name">
              <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate" name="last_name">
              <label for="last_name">Last Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate" name="email" required>
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate" name="password" required>
              <label for="message">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="cpassword" type="password" class="validate" name="cpassword" required>
              <label for="message">Conform Password</label>
            </div>
          </div>
          <button type="submit" class="waves-effect waves-light btn" >SignUp</button>
        </form>
      </div>
    </div>
  </div>
  <!--Footer-->
  <?php include '_include/_footer.php' ?>




