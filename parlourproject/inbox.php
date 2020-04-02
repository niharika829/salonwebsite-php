<?php
if(isset($_POST['booknow_inbox'])){
  header('Location:login.php');
}
?>
<html>
  <head>
    <title>klaus-indoor</title>
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
    nav{



      z-index: 99;


    }

    ion-icon {
       font-size: 50px;
       color:black;
    }
.about{
  font-size: 80px;
  font-weight: 30%;
  color:black;
}

.small{

  color:black;
}

    .sticky {
      position: fixed;
      top: 0;
      width: 100%;
    }
    .bottom-left {
      position: absolute;
      bottom: 18px;
      left: 16px;
    }
.big{
  font-family: Impact, Charcoal, sans-serif;
  color:grey;
  font-size: 80px;
  font-weight: 30%;
}
.sub{
  font-family: Impact, Charcoal, sans-serif;
  color:black;
  font-size: 30px;
  font-weight: 30%;
}







#cont1 {
  width: 20px;
  height: 300px;


  background: url("images/clean.png");

 background-size: cover;
  cursor: pointer;

  -webkit-box-shadow: 15px 15px 5px #000;
        box-shadow: 3px 3px 3px #000;
  }
  #cont2 {
    width: 20px;
    height: 300px;


    background: url("images/spa1.jpg");

   background-size: cover;
    cursor: pointer;

    -webkit-box-shadow: 15px 15px 5px #000;
          box-shadow: 3px 3px 3px #000;
    }
    #cont3 {
      width: 20px;
      height: 300px;


      background: url("images/facial.jpeg");

     background-size: cover;
      cursor: pointer;

      -webkit-box-shadow: 15px 15px 5px #000;
            box-shadow: 3px 3px 3px #000;
      }
      #cont4 {
        width: 20px;
        height: 300px;


        background: url("images/pedi.jpg");

       background-size: cover;
        cursor: pointer;

        -webkit-box-shadow: 15px 15px 5px #000;
              box-shadow: 3px 3px 3px #000;
        }

.overlay {
  width: 100%;
  height: 100%;

   grid-template-columns: 1fr;



  background: rgba(77, 77, 77, .9);

  opacity: 0;
  transition: all 0.5s;
  text-transform:capitalize;
  font-family: 'Playfair Display', serif;
}


.items {
  padding-left: 20px;
  letter-spacing: 3px;
}

.head {
color:white;
  font-size: 30px;
  line-height: 40px;

  transform: translateY(40px);
  transition: all 0.7s;

}

.price {
color:white;
  font-size: 22px;
  line-height: 10px;
  font-weight: bold;

  transform: translateY(40px);
  transition: all 0.7s;
  .old {
    text-decoration: line-through;
    color: white;
  }
}

.cart {
color:white;
  font-size: 12px;
  letter-spacing: 1px;
  font-family: 'Lato', sans-serif;
  transform: translateY(40px);
  transition: all 0.7s;
  i {
    font-size: 16px;
  }
  span {
    margin-left: 10px;
  }
}

.container:hover .overlay {
  opacity: 1;
  & .head {
    transform: translateY(0px);
  }

  & hr {
    width: 75px;
    transition-delay: 0.4s;
  }

  & .price {
    transform: translateY(0px);
    transition-delay: 0.3s;
    opacity: 1;
  }

  & .cart {
    transform: translateY(0px);
    transition-delay: 0.6s;
    opacity: 1;
  }
}

.bottom-left {
  position: absolute;
top:55%;
}



#panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 50px;
  display: none;
}
#cont5 {
  width: 20px;
  height: 300px;


  background: url("images/n1.jpg");

 background-size: cover;
  cursor: pointer;

  -webkit-box-shadow: 15px 15px 5px #000;
        box-shadow: 3px 3px 3px #000;
  }
  #cont6 {
    width: 20px;
    height: 300px;


    background: url("images/n2.png");

   background-size: cover;
    cursor: pointer;

    -webkit-box-shadow: 15px 15px 5px #000;
          box-shadow: 3px 3px 3px #000;
    }
    #cont7 {
      width: 20px;
      height: 300px;


      background: url("images/n3.jpg");

     background-size: cover;
      cursor: pointer;

      -webkit-box-shadow: 15px 15px 5px #000;
            box-shadow: 3px 3px 3px #000;
      }
      #cont8 {
        width: 20px;
        height: 300px;


        background: url("images/n4.jpg");

       background-size: cover;
        cursor: pointer;

        -webkit-box-shadow: 15px 15px 5px #000;
              box-shadow: 3px 3px 3px #000;
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
        <div class="container-fluid">
  <img src="images/bg.jpg" alt="Snow" style="width:100%;height:80%;">
  <div class="bottom-left"><div data-aos="fade-right">
              <h2 class="about">INDOOR</h2>
              <p><span><a href="home.php"><b>Home</b></a></span>><span class="small">indoor</span></p></div>
</div>

</div>
    <br>
    <section>
    <div class="container-fluid">
      <div class="row">
<div class="col-md-1" ></div>
        <div class="col-md-4" >
          <div data-aos="fade-right">
          <!--///////////////////////////////////////////////////////////////////////////////////-->

 <div class="col-lg-25"style="margin-top:5%;border:1px solid white;">
	<div id="cont1"class="container"style="width:120%">
  <div class="overlay">
    <div class = "items"></div>
    <div class = "items head">
      <p>CLEANSING</p>
      <hr>
    </div>
    <div class = "items price" id="p1">
      <p class="old">Rs 80/ member</p>

    </div>
    <div class="items cart">
      <i class="fa fa-address-book-o" style="font-size:36px"></i>
      <span>BOOK NOW</span><br /><br /><br /><br /><br /><br />

  </div>
</div>
</div></div>
  <!--///////////////////////////////////////////////////////////////////////////////////-->


          </div>
        </div>
        <div class="col-md-1" ></div>
        <div class="col-md-4" >
          <div data-aos="fade-down">

  <!--///////////////////////////////////////////////////////////////////////////////////-->

<div class="col-lg-25"style="margin-top:5%;border:1px solid white;">
  <div id="cont2"class="container"style="width:120%">
  <div class="overlay">
    <div class = "items"></div>
    <div class = "items head">
      <p>SPA</p>
      <hr>
    </div>
    <div class = "items price" id="p1">
      <p class="old">Rs 60/ member</p>

    </div>
    <div class="items cart">
      <i class="fa fa-address-book-o" style="font-size:36px"></i>
      <span>BOOK NOW</span><br /><br /><br /><br /><br /><br />

  </div>
</div>
</div></div>
  <!--///////////////////////////////////////////////////////////////////////////////////-->

          </div>
        </div><div class="col-md-3" ></div>
      </div>
      <div class="row">
<div class="col-md-1" ></div>
        <div class="col-md-4" >
          <div data-aos="fade-right">
          <!--///////////////////////////////////////////////////////////////////////////////////-->

<div class="col-lg-25"style="margin-top:5%;border:1px solid white;">
  <div id="cont3"class="container"style="width:120%">
  <div class="overlay">
    <div class = "items"></div>
    <div class = "items head">
      <p>FACIAL</p>
      <hr>
    </div>
    <div class = "items price" id="p1">
      <p class="old">Rs 80/ member</p>

    </div>
    <div class="items cart">
      <i class="fa fa-address-book-o" style="font-size:36px"></i>
      <span>BOOK NOW</span><br /><br /><br /><br /><br /><br />

  </div>
</div>
</div></div>
  <!--///////////////////////////////////////////////////////////////////////////////////-->


        </div>
        </div>
        <div class="col-md-1" ></div>
        <div class="col-md-4" >
    <div data-aos="fade-left">


  <!--///////////////////////////////////////////////////////////////////////////////////-->

<div class="col-lg-25"style="margin-top:5%;border:1px solid white;">
  <div id="cont4"class="container"style="width:120%">
  <div class="overlay">
    <div class = "items"></div>
    <div class = "items head">
      <p>PEDICURE</p>
      <hr>
    </div>
    <div class = "items price" id="p1">
      <p class="old">Rs 60/ member</p>

    </div>
    <div class="items cart">
      <i class="fa fa-address-book-o" style="font-size:36px"></i>
      <span>BOOK NOW</span><br /><br /><br /><br /><br /><br />

  </div>
</div>
</div></div>
  <!--///////////////////////////////////////////////////////////////////////////////////-->

 </div></div>
        </div><div class="col-md-3" ></div>
      </div>
<br><br>
      <div class="row">
<div class="col-md-1" ></div>
<div class="col-md-10" >

<div id="flip">nails</div>
<div id="panel">
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->
 <div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
  <div class="col-lg-25"style="margin-top:5%;border:1px solid white;">
    <div id="cont5"class="container"style="width:120%">
    <div class="overlay">
      <div class = "items"></div>
      <div class = "items head">
        <p>NAIL ART</p>
        <hr>
      </div>
      <div class = "items price" id="p1">
        <p class="old">Rs 40/ member</p>

      </div>
      <div class="items cart">
        <i class="fa fa-address-book-o" style="font-size:36px"></i>
        <span>BOOK NOW</span><br /><br /><br /><br /><br /><br />

    </div>
  </div>
</div></div></div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="col-md-3">
<div class="col-lg-25"style="margin-top:5%;border:1px solid white;">
<div id="cont6"class="container"style="width:120%">
<div class="overlay">
  <div class = "items"></div>
  <div class = "items head">
    <p>GEL EXTENSIONS</p>
    <hr>
  </div>
  <div class = "items price" id="p1">
    <p class="old">Rs 50/ member</p>

  </div>
  <div class="items cart">
    <i class="fa fa-address-book-o" style="font-size:36px"></i>
    <span>BOOK NOW</span><br /><br /><br /><br /><br /><br />

</div>
</div>
</div></div></div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="col-md-3">
<div class="col-lg-25"style="margin-top:5%;border:1px solid white;">
<div id="cont7"class="container"style="width:120%">
<div class="overlay">
  <div class = "items"></div>
  <div class = "items head">
    <p>ACRYLIC EXTENSIONS</p>
    <hr>
  </div>
  <div class = "items price" id="p1">
    <p class="old">Rs 70/ member</p>

  </div>
  <div class="items cart">
    <i class="fa fa-address-book-o" style="font-size:36px"></i>
    <span>BOOK NOW</span><br /><br /><br /><br /><br /><br />

</div>
</div>
</div></div></div>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="col-md-3">
<div class="col-lg-25"style="margin-top:5%;border:1px solid white;">
<div id="cont8"class="container"style="width:120%">
<div class="overlay">
  <div class = "items"></div>
  <div class = "items head">
    <p>3D NAIL ART</p>
    <hr>
  </div>
  <div class = "items price" id="p1">
    <p class="old">Rs 80/ member</p>

  </div>
  <div class="items cart">
    <i class="fa fa-address-book-o" style="font-size:36px"></i>
    <span>BOOK NOW</span><br /><br /><br /><br /><br /><br />

</div>
</div>
</div></div></div>
</div></div>

</div>
</div>
<div class="col-md-1" ></div>
</div><br><br>
    </div>
    <form method="post">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">

          </div>
            <div class="col-md-8">
      <input style="width:50%;font-size:30px;" type="submit" class="btn btn-warning" name="booknow_inbox" value="book now">
    </div>
    <div class="col-md-4">

    </div></div></div>
    </form>
</section>

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

$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});

    </script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  </body>
</html>
