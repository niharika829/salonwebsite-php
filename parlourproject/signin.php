<html>
<head>
  <title>klaus-Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">


<style>

body{

   background: url('images/bg.jpg');
   background-repeat: no-repeat;
   background-attachment: fixed;
   background-position: center center;
   background-size: cover;
   margin: 0 !important;
   background-size: 100% cover!important;

}
form {
width:40%;
margin-top:10%;}

input[type=text] {
  width: 80%;
  padding: 12px 20px;

  display: inline-block;


}

input[type=email],input[type=tel],input[type=number] {
  width: 80%;
  padding: 12px 20px;

  display: inline-block;


}
 input[type=password]{
   width: 80%;
   padding: 12px 20px;

   display: inline-block;

 }
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 80%;
  border-radius: 40px;
}

input[type=submit]:hover {
  opacity: 0.8;
}


@media screen and (max-width: 300px) {

  input[type=submit] {
     width: 100%;
  }
}

</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container" style="background-color:black;">
          <a class="navbar-brand" href="home.php"style="color:white;"><img src="images/klaus.jpg" width=50% height=250% ></a>

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
<center>


  <form action="dbsigninform.php"method="post" enctype="multipart/form-data" style="background-color:pink;">
    <p><br>Welcome To Our Family<br>
    <p>first name:
      <input name="first" type="text" >
    </p>
    <p>last name:
      <input name="last" type="text">
          </p>
    <p>email id:
      <input name="email" type="email">
        </p>
        <p>address:
          <input name="address" type="text" >
        </p>
        <p>password:
          <input name="password" type="password">
              </p>
              <p>confirm:
                <input name="confirm" type="password">
                    </p>
        <p>your age:
          <input name="age" type="number">
            </p>
            <p>tel number:
              <input name="tel" type="tel">
                </p>
                <p>picture:
                  <input type="file" name="img1">
                </p>
    <input type="submit" name="submit" value="create new account">
  </form>

</center>




</body>
</html>
