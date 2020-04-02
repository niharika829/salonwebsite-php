<?php
if(isset($_POST['log'])){
$servername = "localhost";
$username = "root";
$password = "";
$email=$_POST['email'];
$pass=$_POST['pass'];

$conn = mysqli_connect($servername,$username,$password,"project");
if(!$conn){
    die("Please check your connection<br>".mysqli_connect_error());
}
$flag=0;
$conn1="SELECT * FROM customer";
$res=mysqli_query($conn,$conn1);
if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
        if($row['email']==$email && $row['password']==$pass){
            echo ('<div class="text-center"><div class="alert alert-success" role="alert">').
           "Welcome ".$row["firstname"]." ".$row["lastname"].('</div></div>');
           $flag=1;
        }
    }
}
if($flag==0){
    echo '<div class="text-center"><div class="alert alert-danger" role="alert">
          Sorry! Wrong Credentials</div></div>';
}

}

?>
