<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=True){
    header("location: login.php");
    exit;
}
?>
<?php include '_include/_header.php' ?>
  <!--Post-->
  <div id="cnt"class="row grey lighten-3" style="padding-top: 20px;  padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col s12 m4 l4">
                <img style="width: 100%;" src="./img/rdpd.jpg" alt="Rich Dad Poor Dad">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti quaerat ab necessitatibus. Sequi, porro est illum voluptate cupiditate magni nesciunt corporis eum cumque, ad, quod autem dolore quis impedit fugit quae dolor omnis temporibus rem non facilis! Corporis sapiente qui commodi voluptas provident beatae impedit dolorum, perspiciatis voluptates, iste hic?</p>
            </div>
            <div class="col s12 m8 l8">
                <h2>Rich Dad Poor Dad</h2>
                <h6>Robert kiyosaki</h6>
                <audio controls style="width: 100%;">
                    <source src="./audio/rdpd.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
                <embed type="application/pdf" src="./pdf/rdpd.pdf" width="100%" height="600">
            </div>
        </div>
    </div>
  </div>
  <!--Footer-->
  <footer class="teal" >
    <div class="white-text footer-copyright" style="padding: 10px 0px;">
      <div class="container center-align">
      &copy; 2022 Lission, All rights reserved. <br><br>
      <a class="white-text" href="https://in.linkedin.com/in/bhargava-sharabha-pagidimarri-7b546b199" target="_blank"><i style="font-size: 30px; padding:0px 5px" class="fa-brands fa-linkedin"></i></a>
      <a class="white-text" href="https://github.com/BhargavaSharabha" target="_blank"><i style="font-size: 30px; padding:0px 5px" class="fa-brands fa-square-github"></i></a>
      <a class="white-text" href="https://twitter.com/bhargava1458PBS" target="_blank"><i style="font-size: 30px; padding:0px 5px" class="fa-brands fa-square-twitter"></i></a>
      <a class="white-text" href="https://www.instagram.com/bhargavasharabha/" target="_blank"><i style="font-size: 30px; padding:0px 5px" class="fa-brands fa-square-instagram"></i></a>
      </div>
    </div>
  </footer>
</body>
</html>



