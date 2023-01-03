<?php
    $login=false;
    $showErr=false;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include '_include/_dbconnect.php';
        $email=$_POST["email"];
        $password=$_POST["password"];
        $sql="select * from users where email='$email'";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        if($num == 1){
            while($row=mysqli_fetch_assoc($result)){
                if(password_verify($password,$row['password'])){
                    $login = true; 
                    session_start();
                    $_SESSION['loggedin']=true;
                    $sql="select fname from users where email='$email'";
                    $result=mysqli_query($conn,$sql);
                    $x=$result->fetch_assoc();
                    $y= $x['fname'];
                    $e= $x['email'];
                    $_SESSION['username']=$y;
                    $_SESSION['email']=$e;
                    header("location: index.php");
                }
                else{
                    $showErr="Invalid Credentials";
                }
            }
        }
        else{
            $showErr="Invalid Credentials";
        }
    }
?>
  <!--Navigation-->
  <?php include '_include/_header.php' ?>
  <!--Login-->
  <div id="cnt"class="row grey lighten-3" style="padding-top: 20px;  padding-bottom: 20px;">
    <div class="container">
      <h4 class="center-align tab" style="margin-top: 0px;">Login</h4>
      <hr <hr style="height: 2px; width: 50px; background: #009688; border: none;">
      <?php
        if($login){
            echo '
            <div class="alert alert-success" role="alert"> 
                <strong>Success!</strong> You are Logged in.
            </div>';
        }
        if($showErr){
            echo '
            <div class="alert alert-danger" role="alert"> 
                <strong>Error!</strong> '.$showErr.'
            </div>';
        }
      ?>
      <div class="row">
        <form class="col s12" action="login.php" method="post">
          <div class="row">
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate" name="email">
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate" name="password">
              <label for="message">Password</label>
            </div>
          </div>
          <button class="waves-effect waves-light btn" type="submit" >Login</button>
        </form>
      </div>
    </div>
  </div>
  <!--Footer-->
  <?php include '_include/_footer.php' ?>




