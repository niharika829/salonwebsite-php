<?php
session_save_path("C:/xampp/tmp");
  session_start();
if(isset($_POST['submit'])){

      if (empty($_POST["email"])) {
          $nameErr = "email Missing";
          echo $nameErr;echo "<br>";
      }
      elseif (empty($_POST["password"])) {
          $nameErr1 = "password Missing";
          echo $nameErr1;echo "<br>";
      }
      elseif(!preg_match("/^[A-Z][a-zA-Z@0-9]+$/",$_POST["password"])){
        $addErr="please follow a correct format for password(first letter should be capital followed by any combination of a-z,A-Z,0-9,@)<br>";
        echo $addErr;
      }
else{

$servername ="localhost";
$username="root";
$password="";

$email=$_POST['email'];
$pass=$_POST['password'];

$conn =mysqli_connect($servername,$username,$password,"parlourproject");

if(!$conn){
  die("connection failed<br>".mysqli_connect_error());
}


if($email === "root@root.com"  && $pass === "Root@123"){
  header('Location:admin.php');
}
else{
$sqltb1="SELECT * FROM userdata WHERE email='$email'";
$res=mysqli_query($conn,$sqltb1);
if(mysqli_num_rows($res)>0){
  while($row = mysqli_fetch_assoc($res)){
    if($pass === $row["password"]){
      setcookie("email",$_POST["email"],time()+20);
      setcookie("password",$_POST["password"],time()+20);
        $_SESSION['username']=$row["firstname"]." ".$row["lastname"];
        $_SESSION['first']=$row["firstname"];
            $_SESSION['last']=$row["lastname"];
              $_SESSION['id']=$row["id"];
              $_SESSION['email']=$row["email"];
              $_SESSION['tel']=$row["telephone"];
              $_SESSION['img']=$row["img"];
        header('Location:account.php');}
      else{
        header('Location:login.php');
      }
  }


}
else{
  echo "not a member";
}}
}
}
?>
