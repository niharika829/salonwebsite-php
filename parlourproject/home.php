<?php
if(isset($_POST['submit_inbox'])){
  header('Location:inbox.php');
}
if(isset($_POST['submit_outbox'])){
  header('Location:outbox.php');
}
if(isset($_POST['submit_login'])){
  header('Location:login.php');
}
?>
<html>
  <head>
    <title>Klaus||Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>


    .sticky {
      position: fixed;
      top: 0;
      width: 100%;
    }
nav{



  z-index: 99;


}

.parallax_one{

  background-image: url("images/bg.jpg");


  min-height: 400px;
margin:5%;

  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
          <div class="container" style="background-color:black;">
            <a class="navbar-brand" href="home.php"style="color:white;"><img src="images/klaus.jpg" width=50% height=350% ></a>

            <div class="collapse navbar-collapse" id="ftco-nav" >
              <ul class="nav navbar-nav" style="position:relative;left:30%;color:white;">
       <li class="active"><a href="home.php"><p  style="color:white;">HOME</p></a></li>
       <li><a href="about.php"><p  style="color:white;">ABOUT</p></a></li>
       <li><a href="contact.php"><p  style="color:white;">CONTACT</p></a></li>

     </ul>

            </div>
          </div>
        </nav>
<section>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>


            <div class="carousel-inner">

              <div class="item active">
                <img src="images/pic4.jpg" alt="Los Angeles" style="width:100%;height:100%;">
                <div class="carousel-caption">
                  <h3>Get Pretty Look</h3>
                  <p>We pride ourselves on our high quality work and attention to detail. The products we use are of top quality branded products.</p>
                </div>
              </div>

              <div class="item">
                <img src="images/pic2.jpg" alt="Chicago" style="width:100%;height:100%;">
                <div class="carousel-caption">
                  <h3>Natural Beauty</h3>
                  <p>This parlour provides huge facilities with advanced technology equipments and best quality service. Here we offer best treatment that you might have never experienced before.</p>
                </div>
              </div>

              <div class="item">
                <img src="images/pic5.jpg" alt="New York" style="width:100%;height:100%;">
                <div class="carousel-caption">
                  <h3>Spa & Body Care</h3>
                  <p>This parlour focuses on providing best services beacause your care is our need.</p>
                </div>
              </div>

            </div>


            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
</section>
<br>
<div class="parallax_one"><div class="container">



  <div class="row">
   <div class="col-md-4">

                   <div data-aos="fade-right" style="margin-top:25%;">


                       <form method="post">

       <div style="background:transparent url('images/makeappointment.jpg') no-repeat center center /cover ">

             <br><br>    <br><br>
             <div data-aos="fade-down-right">
       <input style="width:60%;font-size:30px;"class="btn btn-danger" type="submit" name="submit_inbox" value="INDOOR"></div>
           <br><br>    <br><br>
           <div data-aos="fade-down-left">
             <a href="..\priyanshi\home.php" style="width:60%;font-size:30px;"class="btn btn-danger" type="submit" name="submit_inbox">OUTDOOR</a>
           </div>
               <br><br>    <br><br>

           <div data-aos="fade-down-left">
           <a href="..\sonal\index1.php"  style="width:60%;font-size:30px;" class="btn btn-danger" name="submit_outbox">COURSE</a></div>
               <br><br>    <br><br>
                 <div data-aos="fade-down-right">
             <input   style="width:60%;font-size:30px;" class="btn btn-danger" type="submit" name="submit_login" value="LOGIN"></div>
                 <br><br>    <br><br>

       </div>



                       </form>

                   </div>
     </div>
	 <div class="col-md-7" ><div data-aos="fade-left"><img src="images/natural.jpg" style="margin-top:15%;width:100%;height:80%"></div></div>
  </div>
</div></div>


		<br>


    <footer style="background-color:black;">
         <div class="container-fluid">
           <div class="row">

             <div class="col-md-4">
                  <div data-aos="zoom-out">
               <div style="color:white;">
                 <h2 style="color:white;">Klaus</h2>
                 Our main focus is on quality and hygiene. Our Parlour is well equipped with advanced technology equipments and provides best quality services. Our staff is well trained and experienced.
               </div>
             </div></div>

             <div class="col-md-4" style="padding-left: 150px">
               <div data-aos="zoom-out">
                <div style="color:white;">
                 <h2 >Links</h2>
                 <ul class="list-unstyled">
                   <li><a href="home.php" class="py-2 d-block">Home</a></li>
                   <li><a href="about.php" class="py-2 d-block">About</a></li>
                   <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
                 </ul>
               </div>
             </div></div>

             <div class="col-md-4">
                <div data-aos="zoom-out">
               <div style="color:white;">
                 <h2 >Have a Questions?</h2>
                 <div>

                   <ul class="list-unstyled">
                     <li><a href="contact.php"><i class="fa fa-home" style="font-size:60px;color:white;text-shadow:2px 2px 4px #000000;"></i></li>
                     <li><a href="contact.php"><a href="contact.php"><i class="fa fa-phone" style="font-size:60px;color:white;text-shadow:2px 2px 4px #000000;"></i></a></li>
                     <li><a href="contact.php"><i class="fa fa-comments" style="font-size:60px;color:white;text-shadow:2px 2px 4px #000000;"></i></a></li>
                   </ul>
                 </div>

               </div>
             </div></div>
           </div>

         </div>
       </footer>


       <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
         <script>
           AOS.init();
         </script>
  </body>
  <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("ftco-navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</html>
