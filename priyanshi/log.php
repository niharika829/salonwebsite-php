<!doctype html>
<html>
    <head>
        <title>Log in</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body style="background-color:grey;">
        <nav class="navbar sticky-top navbar-expand-lg" style="background-color: black;">
        <!-- <a class="navbar-brand" href="./bootstrap/index1.html"><img src="main.jpg" style="height:60px"></a> -->
        <!-- <a class="navbar-brand" href="./bootstrap/index1.html" style="color: black;">The Patnitop Inn</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" style="border-color: white;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item right">
                        <a class="nav-link menu" href="home.php" style="color:white;">Home</a>
                    </li>
                    <li class="nav-item right">
                        <a class="nav-link menu" href="signup.php" style="color:white;">Sign up</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container text-center mt-5 form-group" style="width:500px">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Log in to your Account</h5>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <input type="email" placeholder="Enter your email" name="email" class="form-control"><br>
                        <input type="password" placeholder="Enter your password" name="pass" class="form-control"><br>
                        <button type="submit" name="log" class="btn btn-primary">Login</button>
                    </form>
                    <a href="signup.php">Donot have an account? Please Sign Up</a>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
session_start();
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
$row = mysqli_fetch_assoc($res);
$fname='';
$lname='';
$m='';
if(mysqli_num_rows($res)>0){
    while($row){
        if($row['email']==$email && $row['password']==$pass){
           $fname=$row['firstname'];
           $lname=$row['lastname'];
           $m=$row['email'];
           $flag=1;
           break;
        }
    }
}
if(mysqli_fetch_assoc($res)){
    // $_SESSION['user']=" ".$fname." ".$lname;
    // $_SESSION['mail']=$m;
    $_SESSION['user'] = array();
    $_SESSION['user']['username'] = " ".$fname." ".$lname;
    $_SESSION['user']['mail'] = $m;

    header("location:welcome.php");
}
if($flag==0){
    echo '<div class="text-center"><div class="alert alert-danger" role="alert">
          Sorry! Wrong Credentials</div></div>';
}

}

?>

