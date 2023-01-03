<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=True){
    header("location: login.php");
    exit;
}
$showAlert=false;
$showErr=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '_include/_dbconnect.php';
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $message=$_POST["message"];
    $sql="INSERT INTO `requests` (`fname`, `lname`, `email`, `message`, `r_date`) VALUES ('$fname', '$lname', '$email', '$message', current_timestamp())";
    $result=mysqli_query($conn,$sql);
    if($result){
        $showAlert = true; 
    }
    // $sql="select * from users where email = '$email'";
    // $res=mysqli_query($conn,$sql);
    // $num= mysqli_num_rows($res);
    // if($num > 0){
    //     $showErr="Email already exist";
    // }
    // else{
    //     if(($password == $cpassword)){
    //         $hash = password_hash($password,PASSWORD_DEFAULT);
    //         $sql="INSERT INTO `users` (`fname`, `lname`, `email`, `password`, `date`) VALUES ('$fname', '$lname', '$email', '$hash', current_timestamp())";
    //         $result=mysqli_query($conn,$sql);
    //         if($result){
    //             $showAlert = true; 
    //         }
    //     }
    //     else{
    //         $showErr="Passwords do not match";
    //     }
    // }
}
?>
<!--Navigation-->
<?php include '_include/_header.php' ?>
<!--Contact-->
<div id="cnt"class="row grey lighten-3" style="padding-top: 20px;  padding-bottom: 20px;">
<div class="container">
  <h4 class="center-align tab" style="margin-top: 0px;">Request Audio Book </h4>
  <p style="text-align: center;">Please provide all possible details of Audio Book </p>
  <hr <hr style="height: 2px; width: 50px; background: #009688; border: none;">
  <?php
        if($showAlert){
            echo '
            <div class="alert alert-success" role="alert"> 
                <strong>Success!</strong> Your request is created successfully.
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
    <form action="contact.php" method="post" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" name="fname" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" name="lname" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <input id="email" name="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="message" name="message" type="text" class="validate">
          <label for="message">Request a Audio Book</label>
        </div>
      </div>
      <button type="submit" class="waves-effect waves-light btn" >Request Audiobook</button>
    </form>
  </div>
</div>
</div>
<!--Footer-->
<?php include '_include/_footer.php' ?>




