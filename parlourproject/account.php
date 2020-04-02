<?php
session_save_path("C:/xampp/tmp");
session_start();
$conn =mysqli_connect("localhost","root","","parlourproject");
if(!$conn){
  die("connection failed<br>".mysqli_connect_error());
}
if(isset($_SESSION['username'])){
  $name=$_SESSION['username'];
    $first=$_SESSION['first'];
      $last=$_SESSION['last'];
      $id=$_SESSION['id'];
      $email=$_SESSION['email'];
      $tel=$_SESSION['tel'];
        $img=$_SESSION['img'];
}
?>
<html>
<head>  <title>klaus-Account</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" rel="stylesheet">
  <style>
        nav{
          z-index:99;
        }
        input[type=text] {
          width: 40%;
          padding: 12px 20px;
          display: inline-block;
          }
        input[type=email],input[type=tel],input[type=number] {
          width: 40%;
          padding: 12px 20px;
          display: inline-block;
        }
       input[type=password]{
         width: 40%;
         padding: 12px 20px;
        display: inline-block;
        }
        input[type=submit]:hover {
        opacity: 0.8;
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
        top:30%;
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
</style>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container" style="background-color:black;">
                <a class="navbar-brand" href="home.php"style="color:white;"><img src="pic/<?php echo $img?>" style="border-radius:50%;" width=20% height=350% ></a>

                <div class="collapse navbar-collapse" id="ftco-nav" >
                          <ul class="nav navbar-nav" style="position:relative;left:30%;color:white;">
                                   <li class="active"><a href="home.php"><p  style="color:white;">HOME</p></a></li>


                            </ul>

                </div>
        </div>
    </nav>

  <div class="container-fluid">
      <img src="images/bg.jpg" alt="Snow" style="width:100%;height:60%;">
      <div class="bottom-left"><div data-aos="fade-right">
        <h2 class="about"><?php echo "Welcome ".$name;?></h2>
        <p><span><a href="home.php"><b>Home</b></a></span>><span class="small">Account</span></p></div>
      </div>

  <br>





<form method="post">

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
                <input style="width:100%;font-size:20px;" class="btn btn-warning" type="submit" value="indoor booking" name="inbook">
          </div>
          <div class="col-md-2">
                <a href="..\priyanshi\home.php" style="width:100%;font-size:20px;" class="btn btn-warning" type="submit"name="outbook">outdoor booking</a>
          </div>
          <div class="col-md-2">

                <input style="width:100%;font-size:20px;" class="btn btn-warning" type="submit" value="order history" name="orders">
          </div>
          <div class="col-md-2">
                <input style="width:100%;font-size:20px;" class="btn btn-warning" type="submit" value="edit details" name="edit">
          </div>
          <div class="col-md-2">

                <input style="width:100%;font-size:20px;"  class="btn btn-warning" type="submit" value="available offers" name="offers">
          </div>
          <div class="col-md-2">
                <input style="width:100%;font-size:20px;" class="btn btn-warning" type="submit" value="logout" name="logout">

          </div>

        </div>
      </div>




</form><br>
<div class="container-fluid">
  <div class="col-lg-12 col-12">
  <center><a href="..\sonal\index1.php"  class="btn text-white btn-warning " style="font-family: andrade_probold; font-size: 29px;">COURSES</a></center>
</div>
</div>





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
    </script>
</body>
</html>
<?php
if(isset($_POST['offers'])){
  $files = scandir("C:/xampp/htdocs/uploads");
  for($a = 2;$a <count($files);$a++){
    ?>
  <p> <?php echo $files[$a];?>
    <a href ="uploads/<?php echo $files[$a];?>" download="<?php echo  $files[$a];?>">
      download</a>
    </p>
  <?php
  }
}

$total=" ";
if(isset($_POST['inbook'])){
  echo"
    <form method='post'>

    </div>
    <div class='pretty p-svg p-round p-plain p-jelly'>
       <input type='checkbox' name='cleansing' value='cleansing'/>
       <div class='state p-primary'>
           <span class='svg' uk-icon='icon: check'></span>
           <label>cleansing(80)</label>
       </div>
   </div>
  <br><br>
  <div class='pretty p-svg p-round p-plain p-jelly'>
     <input type='checkbox' name='spa' value='spa'/>
     <div class='state p-primary'>
         <span class='svg' uk-icon='icon: check'></span>
         <label>spa(60)</label>
     </div>
 </div>
<br><br>
<div class='pretty p-svg p-round p-plain p-jelly'>
   <input type='checkbox' name='facial' value='facial'/>
   <div class='state p-primary'>
       <span class='svg' uk-icon='icon: check'></span>
       <label>facial(80)</label>
   </div>
</div>
<br><br>
<div class='pretty p-svg p-round p-plain p-jelly'>
   <input type='checkbox' name='pedicure' value='pedicure'/>
   <div class='state p-primary'>
       <span class='svg' uk-icon='icon: check'></span>
       <label>pedicure(60)</label>
   </div>
</div>
<br><br>

      nails<br/><select name='a1' size='4'>
       <option value='40'>nail art(40)</option><br/>
       <option value='50'>gel extension(50)</option><br/>
       <option value='70'>acrylic extensions(70)</option><br/>
       <option value='80'>3D nail art(80)</option><br/>
      </select><br/><br/>
    <input style='width:10%;font-size:20px;' class='btn btn-warning'  type='submit' name='submit_in_order' value='place order'>

    </form>";

}
if(isset($_POST['outbook'])){
///////////////////////////////////////////////add priyanshi code here
}
if(isset($_POST['orders'])){

  echo "<table border='1'>
      <tr>
        <th>order id</th>
        <th>order</th>
          <th>amount</th>
      </tr>";
  $sqltb1="SELECT * FROM orders WHERE userid='$id'";
  $res=mysqli_query($conn,$sqltb1);
  if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
        echo "<tr>";
        echo "<td>".$row['orderid']."</td>";
          echo "<td>".$row['userorder']."</td>";
                echo "<td>".$row['amount']."</td>";
                echo "</tr>";

    }

  }
    echo "</table>";
    echo "<html>
    <body>
      <form method='post'>
      <input style='width:30%;font-size:20px;' class='btn btn-warning'type='submit' value='check detailed info about appointment' name='detailed_info'>
    </form>
    </body>
    </html>";
  }




  if(isset($_POST['detailed_info'])){
    echo "<form method='post'>enter order id:-<input type='number' name='info_id'>
    <input type='submit' style='width:20%;font-size:20px;' class='btn btn-warning'value='track appointment' name='track_info'></form>";
  }
  if(isset($_POST['track_info'])){
    $order_user_id=$_POST['info_id'];

    $sqltb1="SELECT * FROM orders WHERE orderid='$order_user_id'";
    $res=mysqli_query($conn,$sqltb1);
    if(mysqli_num_rows($res)>0){

      while($row = mysqli_fetch_assoc($res)){

          echo "<table border='1'>
              <tr>
                <th>user id</th>
                <th>registered address</th>
                  <th>facilities booked</th>
                  <th>total amount</th>
                  <th>time</th>
                    <th>date</th>
                    <th>category</th>
                      <th>orderid</th>
                      <th>status</th>
              </tr>
              <tr>
                <td>".$row['userid']."</td>
                <td>".$row['address']."</td>
                  <td>".$row['userorder']."</td>
                    <td>".$row['amount']."</td>
                    <td>".$row['entry_time']."</td>
                      <td>".$row['entry_date']."</td>
                      <td>".$row['category']."</td>
                        <td>".$row['orderid']."</td>
                          <td>".$row['action']."</td>
              </tr>";
  }
  echo "<form method='post' action='account.php'>
  <input style='width:20%;font-size:20px;' class='btn btn-warning'type='submit' name='final_in_order' value='back to my account'>
  </form>";}
  else{
    echo "invalid order id".mysqli_error($conn);
  }}






        if(isset($_POST['submit_in_order'])) {
          $count_in =0;
            if (isset($_POST["cleansing"]))  {
              $cleansing=$_POST["cleansing"];
              echo "your choice <br>".$cleansing;echo "<br>";
              $total .= $cleansing.",";
              $count_in += 80;
        }
        if(isset($_POST["spa"]))  {
          $spa=$_POST["spa"];
          echo $spa;echo "<br>";
          $total .= $spa.",";
          $count_in += 60;
        }
        if (isset($_POST["facial"]))  {
          $facial=$_POST["facial"];
          echo $facial;echo "<br>";
            $total .= $facial.",";
          $count_in += 80;
    }
    if(isset($_POST["pedicure"]))  {
      $pedicure=$_POST["pedicure"];
      echo $pedicure;echo "<br>";
        $total .= $pedicure.",";
      $count_in += 60;
    }
    if(isset($_POST["a1"]))  {
      $select=$_POST["a1"];
      if($select == 40){
      echo "nail art <br>";
        $total .= "nail art,";}
      elseif($select == 50){
      echo "gel extensions <br>";
      $total .= "gel extension,";}
      elseif($select == 70){
      echo "acrylic extension <br>";
      $total .= "acrylic extension,";}
      else{
      echo "3d nail art <br>";
        $total .= "3d nail art,";}
      $count_in += $_POST["a1"];
    }
    if($count_in == 0){
      echo "<script>alert('please choose atleast one facility in oder to proceed further');</script>";
    }
    else{
        echo "total payable amount = ".$count_in;
        echo "<form method='post'><input type='submit' style='width:20%;font-size:20px;' class='btn btn-warning'name='gotopayin' value='click for payment'></form>";
        $_SESSION['indoorpayment']=$count_in;
        $_SESSION['indoorvalues']=$total;
      }
}

if(isset($_POST['gotopayin'])){

  echo '<script type="text/javascript">';
echo 'window.location.href="paymentindoor.php";';
echo '</script>';
}

if(isset($_POST['logout'])){

  echo '<script type="text/javascript">';
echo 'window.location.href="login.php";';
echo '</script>';

}
if(isset($_POST['edit'])){?>
  <html>
  <body>
    <center>
    <form method="post" enctype="multipart/form-data" style="background-color:pink;width:50%;">
      <p>first:
        <input name="first" type="text" >
      </p>
      <p>last:
        <input name="last" type="text">
            </p>
      <p>email:
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
          <p>age:
            <input name="age" type="number">
              </p>
              <p>number:
                <input name="tel" type="tel">
                  </p>
                  <p>upload a picture:
                    <input type="file" name="img1">
                  </p>
      <input type="submit" name="submitedit" value="edit details">
    </form>
    <form method='post' action='account.php'>
    <input type='submit' name='final_in_order' value='back to my account'>
  </form></center>
    </body>
  </html>
<?php
}
if(isset($_POST['submitedit'])){

$first=$_POST['first'];
$last=$_POST['last'];
$email=$_POST['email'];
$address=$_POST['address'];
$pass=$_POST['password'];
$confirm=$_POST['confirm'];
$age=$_POST['age'];
$tel=$_POST['tel'];
$img=$_FILES['img1']['name'];
$temp_name=$_FILES['img1']['tmp_name'];
$filepath="pic/$img";
$file_type=$_FILES['img1']['type'];

$firstErr=$lastErr=$addrErr=$emailErr=$passErr=$confirmErr=$ageErr=$telErr='';

if ($_POST["first"]){
  $f=$_POST["first"];
  $sqlt="UPDATE userdata SET firstname='$f' WHERE id='$id'";
  if(mysqli_query($conn,$sqlt)){
    echo "firstname updated successfully<br>";

  }
}
if ($_POST["last"]){
  $f=$_POST["last"];
  $sqlt="UPDATE userdata SET lastname='$f' WHERE id='$id'";
  if(mysqli_query($conn,$sqlt)){
    echo "lastname updated successfully<br>";

  }
}
if ($_POST["email"]){
  $f=$_POST["email"];
  $sqlt="UPDATE userdata SET email='$f' WHERE id='$id'";
    $sqlt1="UPDATE orders SET email='$f' WHERE userid='$id'";
  if(mysqli_query($conn,$sqlt)){
    if(mysqli_query($conn,$sqlt1)){
    echo "email updated successfully<br>";

  }
  }
}
if ($_POST["address"]){
  $f=$_POST["address"];
  $sqlt="UPDATE userdata SET address='$f' WHERE id='$id'";
  $sqlt1="UPDATE orders SET address='$f' WHERE userid='$id'";
  if(mysqli_query($conn,$sqlt)){
      if(mysqli_query($conn,$sqlt1)){
    echo "address updated successfully<br>";

  }
  }
}


if($_POST["password"]){
if(!preg_match("/^[A-Z][a-zA-Z@0-9]+$/",$_POST["password"])){
  $regErr="please follow a correct format for password(first letter should be capital followed by any combination of a-z,A-Z,0-9,@)<br>";
  echo $regErr."<br>";
}
else{
  if (empty($_POST["confirm"])) {
      $confirmErr = "confirm password is Missing";
      echo $confirmErr;echo "<br>";
  }
  else{
    if($_POST["password"] === $_POST["confirm"]){
      $f=$_POST['password'];
      $sqlt="UPDATE userdata SET password='$f' WHERE id='$id'";
      if(mysqli_query($conn,$sqlt)){
        echo "password updated successfully<br>";
    }
  }
  else{echo "passwords does not match<br>";}
}
}
}

if ($_POST["age"]){
  $f=$_POST["age"];
  $sqlt="UPDATE userdata SET age='$f' WHERE id='$id'";
  if(mysqli_query($conn,$sqlt)){
    echo "age updated successfully<br>";

  }
}
if ($_POST["tel"]){
  $f=$_POST["tel"];
  $sqlt="UPDATE userdata SET telephone='$f' WHERE id='$id'";
  if(mysqli_query($conn,$sqlt)){
    echo "number updated successfully<br>";

  }
}
if($temp_name || $img){
if($file_type=="image/jpeg")
{
move_uploaded_file($temp_name,$filepath);
$sqlt="UPDATE userdata SET img='$img' WHERE id='$id'";
if(mysqli_query($conn,$sqlt)){
  echo "profile picture updated successfully<br>";

}
}
else{
  echo "format not supported for profile picture";
}
}

}
