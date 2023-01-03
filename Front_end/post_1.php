<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=True){
    header("location: login.php");
    exit;
}
?>
<?php include '_include/_header.php' ?>
    <div class="container">
        <div class="left">
            <img src="./img/rdpd.jpg" alt="Cover Image of Rich Dad Poor Dad">
            <div class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur necessitatibus, doloremque iste repudiandae fugiat, repellat placeat vel consequatur dignissimos cupiditate iure magni, earum voluptas quaerat minus ratione error eum eaque. Reprehenderit, corporis magnam? Distinctio sint eum dicta voluptatem porro dolorem quam voluptatum nobis, a nam at amet quod aperiam quaerat.</div>
        </div>
        <div class="right">
            <h2>Rich Dad Poor Dad</h2>
            <h6>Robert kiyosaki</h6>
            <audio controls>
                <source src="./audio/CNS.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
            <embed type="application/pdf" src="/pdf/CNS.pdf" width="100%" height="600">
        </div>
    </div>
    <?php include '_include/_footer.php' ?>