<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['uname'])) {

 ?>
<!DOCTYPE html>
<html>

<head>
     <title>MENU</title>
</head>
<style>
     * {
          padding: 0%;
          margin: 0%;
     }

     body {
          background-image: url(image/home_bg.jpg);
          background-repeat: no-repeat;
          background-size: cover;
          height: 100%;
     }

     iframe.header {
          position: absolute;
          margin-left: 28%;
          margin-right: 22%;
          width: 50%;
     }

     iframe {
          position: absolute;
          border: none;
          height: 100vh;
     }

     .container {
          position: absolute;
          height: 75%;
          width: 60%;
          margin-top: 8%;
          margin-left: 23%;
          margin-right: 25%;
          background: rgba(255, 255, 255, 0.38);
          border-radius: 16px;
          box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
          backdrop-filter: blur(8.2px);
          -webkit-backdrop-filter: blur(8.2px);
          border: 1px solid rgba(255, 255, 255, 0.4);
     }

     .content {
          height: 200px;
          width: 300px;
          background-color: black;
          margin: 10px;
          border-radius: 10px;
     }
     img{
          height: 450px;
          margin: 5px;
          border-radius:16px ;
     }
</style>

<body>
     <!-- header start -->
     <iframe class="header" src="header.html" frameborder="none"></iframe>

     <!-- menu start -->
     <iframe class="menu" src="menu.html" frameborder="none"></iframe>
     <div class="container">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-inner">
                    <div class="carousel-item active">
                         <img src="gambar/download.jfif" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                         <img src="gambar/download(2)" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                         <img src="gambar/download(3)" class="d-block w-100" alt="...">
                    </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
               </button>
          </div>
     </div>



</body>

</html>

<?php 
}else
{
     header("Location: index.php");
     exit();
}
 ?>