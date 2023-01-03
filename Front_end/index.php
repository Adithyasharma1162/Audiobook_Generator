<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=True){
    header("location: login.php");
    exit;
}
?>
<?php include '_include/_header.php' ?>
<!--Welcome-->
<div id="cnt"class="row" style="padding-top: 20px;  padding-bottom: 20px;">
  <div class="container">
    <div class="row">
      <div class="col s12 m6 l6 flex-cont">
        <br><br><br><br>
        <h2 class="flex-chil">Lission | Audiobook Generator</h2>
        <p class="flex-chil">Free Audio Library</p>
        <a href="./post.php" class="waves-effect waves-light btn flex-chil"><i class="left fa-solid fa-headphones-simple"></i>Listen Now</a>
      </div>
      <div class="col s12 m6 l6">
        <img src="./img/Audiobook-bro.svg" alt="Welcome-image">
      </div>
    </div>
    </div>
  </div>
<!--Search-->
<!-- <div id="cnt"class="row grey lighten-3" style="padding-top: 20px;  padding-bottom: 20px;">
  <div class="container">
    <h4 class="center-align tab" style="margin-top: 0px;">Search Audio Book </h4>
    <hr <hr style="height: 2px; width: 50px; background: #009688; border: none;">
    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <input id="search" type="text" class="validate">
            <label for="text">Search AudioBook</label>
          </div>
        </div>
      </form>
      <a class="waves-effect waves-light btn">Search AudioBook</a>
    </div>
    </div>
  </div> -->
  <!--Recomendations-->
  <div id="pjt" class="row grey lighten-3" style="padding-top: 20px;  padding-bottom: 20px;">
    <div class="container">
      <h4 class="center-align tab" style="margin-top: 0px;">Our Recomendations</h4>
      <hr <hr style="height: 2px; width: 50px; background: #009688; border: none;">
      <div class="col l3 m6 s12 """>
        <div class="card">
          <div class="card-content">
            <img style="width: 100%;" src="./img/rdpd.jpg" alt="Rich Dad Poor Dad">
            <span class="card-title">Rich Dad Poor Dad</span>
            <P style="margin-bottom: 10px;">Author : <small>Robert T. Kiyosaki</small></P>
            <p>Rich Dad Poor Dad: What the Rich Teach Their Kids About Money That the Poor and Middle Class Do Not!</p>
          </div>
          <div class="card-action">
            <a href="./post.php" class="waves-effect waves-light btn"><i class="left fa-solid fa-headphones-simple"></i>Listen Book</a>
          </div>
        </div>
      </div>
      <div class="col l3 m6 s12 """>
        <div class="card">
          <div class="card-content">
            <img style="width: 100%;" src="./img/tagr.jpg" alt="Rich Dad Poor Dad">
            <span class="card-title">Think and Grow Rich</span>
            <P style="margin-bottom: 10px;">Author : <small>Napoleon Hill</small></P>
            <p>Rich Dad Poor Dad: What the Rich Teach Their Kids About Money That the Poor and Middle Class Do Not!</p>
          </div>
          <div class="card-action">
            <a class="waves-effect waves-light btn"><i class="left fa-solid fa-headphones-simple"></i>Listen Book</a>
          </div>
        </div>
      </div>
      <div class="col l3 m6 s12 """>
        <div class="card">
          <div class="card-content">
            <img style="width: 100%;" src="./img/rdpd.jpg" alt="Rich Dad Poor Dad">
            <span class="card-title">Rich Dad Poor Dad</span>
            <P style="margin-bottom: 10px;">Author : <small>Robert T. Kiyosaki</small></P>
            <p>Rich Dad Poor Dad: What the Rich Teach Their Kids About Money That the Poor and Middle Class Do Not!</p>
          </div>
          <div class="card-action">
            <a class="waves-effect waves-light btn"><i class="left fa-solid fa-headphones-simple"></i>Listen Book</a>
          </div>
        </div>
      </div>
      <div class="col l3 m6 s12 """>
        <div class="card">
          <div class="card-content">
            <img style="width: 100%;" src="./img/tagr.jpg" alt="Rich Dad Poor Dad">
            <span class="card-title">Think and Grow Rich</span>
            <P style="margin-bottom: 10px;">Author : <small>Napoleon Hill</small></P>
            <p>Rich Dad Poor Dad: What the Rich Teach Their Kids About Money That the Poor and Middle Class Do Not!</p>
          </div>
          <div class="card-action">
            <a class="waves-effect waves-light btn"><i class="left fa-solid fa-headphones-simple"></i>Listen Book</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!--Footer-->
  <?php include '_include/_footer.php' ?>




