<html>
  <head>
    <title>klaus-Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">



    <style>
    .bottom-left {
      position: absolute;
      top:17%;
      bottom: 18px;
      left: 16px;
    }
    .about{
      font-size: 80px;
      font-weight: 30%;
      color:white;
    }

.form1{
  width:40%;
}

    </style>
</head>
<body>
  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/admin.jpg');height:70%;" data-stellar-background-ratio="0.5">
<div data-aos="fade-right">
    <h2 class="about">Welcome Admin</h2>
    <p><span><a href="home.php"><b>Home</b></a></span>><span class="small" style="color:white;">admin</span></p></div>

<form method="post">
  <input style="width:17%;font-size:20px;"class="btn btn-danger"type="submit" value="total appointments" name="total">
  <input style="width:17%;font-size:20px;"class="btn btn-danger"type="submit" value="pending appointments" name="pending">
    <input style="width:17%;font-size:20px;"class="btn btn-danger"type="submit" value="confirmed appointments" name="confirmed">
    <input style="width:17%;font-size:20px;"class="btn btn-danger"type="submit" value="cancelled appointments" name="cancelled">
      <input style="width:17%;font-size:20px;"class="btn btn-danger"type="submit" value="all users" name="users">
      <input style="width:17%;font-size:20px;"class="btn btn-danger"type="submit" value="logout" name="logout">
        <input style="width:17%;font-size:20px;"class="btn btn-danger"type="submit" value="all artist" name="allartist">
      <input style="width:17%;font-size:20px;"class="btn btn-danger"type="submit" value="add artist" name="newartist">
      <input style="width:17%;font-size:20px;"class="btn btn-danger"class="btn btn-danger" type="submit" value="delete artist account" name="deleteartist">
        <input style="width:17%;font-size:20px;"class="btn btn-danger"type="submit" value="offers" name="offers">
</form>
  </section>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

<script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script></body></html>
<?php
$conn =mysqli_connect("localhost","root","","parlourproject");

if(!$conn){
  die("connection failed<br>".mysqli_connect_error());
}
////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['offers'])){
$files = scandir("C:/xampp/htdocs/uploads");
for($a = 2;$a <count($files);$a++){
  ?>
<p> <?php echo $files[$a];?>
  <a href ="uploads/<?php echo $files[$a];?>" download="<?php echo  $files[$a];?>">
    download</a>
  </p>

<a href="delete.php?name=C:/xampp/htdocs/uploads/<?php echo $files[$a];?>" style="color:red;">
  delete</a>
<?php
}}
//////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['deleteartist'])){
  echo "<form method='post'>
  enter artist id:-<input type='number' name='artid'>  <input style='width:20%;font-size:20px;'class='btn btn-danger'type='submit' name='deleteanartist' value='delete artist'></form>";
}
///////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['deleteanartist'])){
$order_user_id=$_POST['artid'];
$sqltb1="SELECT * FROM artist WHERE artistid='$order_user_id'";
$res=mysqli_query($conn,$sqltb1);
if(mysqli_num_rows($res)>0){
$sqltb1="DELETE FROM artist WHERE artistid='$order_user_id'";
if(mysqli_query($conn,$sqltb1)){
   echo "successfully deleted";
 }
}else{
  echo "invalid id".mysqli_error($conn);
}}
/////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['allartist'])){

echo "<table border='1'><tr>
  <th>id</th>
    <th>name</th>
  <th>registered address</th>
      <th>telephone</th>


</tr>";
$sqltb1="SELECT * FROM artist";
$res=mysqli_query($conn,$sqltb1);
if(mysqli_num_rows($res)>0){
  while($row = mysqli_fetch_assoc($res)){
    echo "<tr>
      <td>".$row['artistid']."</td>
      <td>".$row['name']."</td>
      <td>".$row['address']."</td>
              <td>".$row['telephone']."</td>
    </tr>";
  }
}
echo "</table>";
}


//////////////////////////////////////////////////////////////////////////////////

if(isset($_POST['newartist'])){
  echo "<center>  <br>
  <form method='post' style='background-color:black;'class='form1'>
  <br>
   id:-<input type='number' name='artistid'><br>
    name:-<input type='text' name='artistname'><br>
      address:-<input type='text' name='artistadd'><br>
      telephone:-<input type='number' name='artisttel'><br><br>
          <input style='width:50%;font-size:20px;'class='btn btn-danger' type='submit' name='submit_artist' value='add an artist'><br><br><br>
  </form>  <br></center>";
}
//////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['submit_artist'])){
  $id =$_POST['artistid'];
    $name =$_POST['artistname'];
      $add =$_POST['artistadd'];
        $tel =$_POST['artisttel'];
        if($id && $name && $add && $tel){
          $sqltb1="INSERT INTO artist(artistid,name,address,telephone) VALUES('$id','$name','$add','$tel')";
          if(mysqli_query($conn,$sqltb1)){
            echo "added successfully";


          }
        }
        else{
          echo "enter all fields";
        }
}
//////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['users'])){
  echo "<form method='post' >
  enter user id:-<input type='number' name='userid'>
  <input style='width:20%;font-size:20px;'class='btn btn-danger' type='submit' name='usersearch' value='search'>
  <input style='width:20%;font-size:20px;'class='btn btn-danger'type='submit' name='userdelete' value='delete account'>
  </form>";
echo "<table border='1'><tr>
  <th>user id</th>
    <th>first name</th>
      <th>last name</th>
      <th>email</th>
  <th>registered address</th>
      <th>telephone</th>
        <th>profile</th>

</tr>";
$sqltb1="SELECT * FROM userdata";
$res=mysqli_query($conn,$sqltb1);
if(mysqli_num_rows($res)>0){
  while($row = mysqli_fetch_assoc($res)){
    echo "<tr>
      <td>".$row['id']."</td>
      <td>".$row['firstname']."</td>
        <td>".$row['lastname']."</td>
      <td>".$row['email']."</td>
      <td>".$row['address']."</td>
              <td>".$row['telephone']."</td>
                <td><img src='pic/".$row['img']."' width='30%' heigth='30%'/></td>
    </tr>";
  }
}
echo "</table>";
}




//////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['logout'])){
    header('Location:login.php');
}
///////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['total'])){
  echo "<form method='post'>
  enter order id:-<input type='number' name='info_id'>
  <input style='width:20%;font-size:20px;'class='btn btn-danger'type='submit' name='search' value='search'>
  </form>";
  $count=0;

  echo "<table border='1'><tr>
    <th>user id</th>
      <th>email</th>
    <th>registered address</th>
      <th>facilities booked</th>
      <th>total amount</th>
      <th>time</th>
        <th>date</th>
        <th>category</th>
          <th>orderid</th>
          <th>status</th>
  </tr>";
  $sqltb1="SELECT * FROM orders";
  $res=mysqli_query($conn,$sqltb1);
  if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
      $count++;
      echo "<tr>
        <td>".$row['userid']."</td>
        <td>".$row['email']."</td>
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
}
echo "</table>";
  echo "total appointments- ".$count;
}

//////////////////////////////////////////////////////////////////////////////////

if(isset($_POST['search'])){
  $order_user_id=$_POST['info_id'];
  $sqltb1="SELECT * FROM orders WHERE orderid='$order_user_id'";
  $res=mysqli_query($conn,$sqltb1);
  if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
        echo "<table border='1'>
            <tr>
              <th>user id</th>
              <th>email</th>
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
              <td>".$row['email']."</td>
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
}
else{
  echo "invalid order id".mysqli_error($conn);
}}

//////////////////////////////////////////////////////////////////////////////////


if(isset($_POST['pending'])){
  $count=0;
  echo "<form method='post'>
  enter order id:-<input type='number' name='info_id'>
  enter action:-<input type='text' name='info_action'>
  <input style='width:20%;font-size:20px;'class='btn btn-danger'type='submit' name='action' value='action'>
  </form>";
  echo "<table border='1'><tr>
    <th>user id</th>
    <th>email</th>
    <th>registered address</th>
      <th>facilities booked</th>
      <th>total amount</th>
      <th>time</th>
        <th>date</th>
        <th>category</th>
          <th>orderid</th>
          <th>status</th>
  </tr>";
  $sqltb1="SELECT * FROM orders WHERE action = 'wait for the response'";
  $res=mysqli_query($conn,$sqltb1);
  if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
      $count++;
      echo "<tr>
        <td>".$row['userid']."</td>
        <td>".$row['email']."</td>
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
}
echo "</table>";
  echo "total pending appointments- ".$count;
}



/////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['action'])){
  if ($_POST["info_id"]  && $_POST["info_action"]){
    $orderid=$_POST["info_id"];
    $orderaction=$_POST["info_action"];
    $sqltb1="SELECT * FROM orders WHERE orderid='$orderid'";
    $res=mysqli_query($conn,$sqltb1);
    if(mysqli_num_rows($res)>0){
        while($row = mysqli_fetch_assoc($res)){
      require('class.phpmailer.php');
      require('class.smtp.php');
      require('PHPMailerAutoload.php');
      $mail = new PHPMailer;
      $mail->SMTPDebug=0;
      $mail->IsSMTP();                        // Set mailer to use SMTP
      $mail->Host ='smtp.gmail.com';
      $mail->Port = 587;
      $mail->SMTPAuth = true;
      ///////////////////
      $mail->Username = 'klaussecretbeauty@gmail.com';

      $mail->Password = 'Klaus@123';
      $mail->SMTPSecure = 'tls';
      $mail->From = 'klaussecretbeauty@gmail.com';
      $mail->FromName = 'Klaus';
      $mail->AddAddress($row["email"]);
      $mail->IsHTML(true);
      $mail->Subject = 'appointment related response';
      $mail->Body    = 'your appointment '.$row["userorder"].' at time '.$row["entry_time"].' on '.$row["entry_date"].' has been '.$orderaction;
      $mail->AddAttachment("images/bg.jpg");
      if(!$mail->Send()) {
         echo 'Message could not be sent.';
         echo 'Mailer Error: ' . $mail->ErrorInfo;
         exit;
      }}


    $sqlt="UPDATE orders SET action='$orderaction' WHERE orderid='$orderid'";
    if(mysqli_query($conn,$sqlt)){
      echo "action updated successfully<br>";
    }
  }else{
    echo "invalid order id";
  }

}
else{
  echo "<script>alert('enter all the fields')</script>";
}}




///////////////////////////////////////////////////////////////////////////////////



if(isset($_POST['cancelled'])){
  $count=0;
  echo "<table border='1'><tr>
    <th>user id</th>
    <th>email</th>
    <th>registered address</th>
      <th>facilities booked</th>
      <th>total amount</th>
      <th>time</th>
        <th>date</th>
        <th>category</th>
          <th>orderid</th>
          <th>status</th>
  </tr>";
  $sqltb1="SELECT * FROM orders WHERE action LIKE 'cancel%'";
  $res=mysqli_query($conn,$sqltb1);
  if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
      $count++;
      echo "<tr>
        <td>".$row['userid']."</td>
        <td>".$row['email']."</td>
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
}
echo "</table>";
  echo "total cancelled appointments- ".$count;
}



//////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['confirmed'])){
  $count=0;
  echo "<table border='1'><tr>
    <th>user id</th>
    <th>email</th>
    <th>registered address</th>
      <th>facilities booked</th>
      <th>total amount</th>
      <th>time</th>
        <th>date</th>
        <th>category</th>
          <th>orderid</th>
          <th>status</th>
  </tr>";
  $sqltb1="SELECT * FROM orders WHERE action LIKE 'confirm%'";
  $res=mysqli_query($conn,$sqltb1);
  if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
      $count++;
      echo "<tr>
        <td>".$row['userid']."</td>
        <td>".$row['email']."</td>
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
}
echo "</table>";
  echo "total confirmed appointments- ".$count;
}



///////////////////////////////////////////////////////////////////////////////////

if(isset($_POST['usersearch'])){
  $order_user_id=$_POST['userid'];
  $sqltb1="SELECT * FROM userdata WHERE id='$order_user_id'";
  $res=mysqli_query($conn,$sqltb1);
  if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
      echo "<table border='1'><tr>
        <th>user id</th>
          <th>first name</th>
            <th>last name</th>
            <th>email</th>
        <th>registered address</th>
            <th>telephone</th>
              <th>profile</th>

      </tr>
      <tr>
            <td>".$row['id']."</td>
            <td>".$row['firstname']."</td>
              <td>".$row['lastname']."</td>
            <td>".$row['email']."</td>
            <td>".$row['address']."</td>
                    <td>".$row['telephone']."</td>
                      <td><img src='pic/".$row['img']."' width='30%' heigth='30%'/></td>
          </tr>";
}
}
else{
  echo "invalid order id".mysqli_error($conn);
}}



/////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['userdelete'])){
  $order_user_id=$_POST['userid'];
  $sqltb1="SELECT * FROM userdata WHERE id='$order_user_id'";
  $res=mysqli_query($conn,$sqltb1);
  if(mysqli_num_rows($res)>0){
  $sqltb1="DELETE FROM userdata WHERE id='$order_user_id'";
  if(mysqli_query($conn,$sqltb1)){
    echo "successfully deleted";
  }}else{
    echo "invalid id".mysqli_error($conn);
  }}
?>
