<!doctype html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body style="background-color:grey;">
        <div class="container text-center mt-5 form-group" style="width:500px">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create a new account</h5>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <input type="text" placeholder="Firstname" name="first" class="form-control"><br>
                        <input type="text" placeholder="Lastname" name="last" class="form-control"><br>
                        <input type="email" placeholder="Email" name="email" class="form-control"><br>
                        <small class="text-muted">We will not share your email with anyone!!</small><br>
                        <input type="password" placeholder="Enter your password" name="pass" class="form-control"><br>
                        <input type="password" placeholder="Confirm password" name="cpass" class="form-control"><br>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <a href="log.php">Already have an account?? Please login</a>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
// $first = $last = $emailErr = $passErr = $cpassErr = ' ';
$flag=0;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fname = $_POST['first'];
    $lname = $_POST['last'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    if(!preg_match('/^[A-Z][a-zA-Z ]+$/',$fname) || strlen($fname)<5){
        
        echo '<div class="text-center"><div class="alert alert-danger" role="alert">
              Enter your first name correctly..The length should be atleast 6 </div></div>';
        header("Refresh: 5; URL=//localhost/parlourproject/priyanshi/login.php");
        $flag=1;
    }
    if(!preg_match('/^[A-Z][a-zA-Z ]+$/',$lname) || strlen($fname)<5){
        echo '<div class="text-center"><div class="alert alert-danger" role="alert">
             Enter your last name correctly..The length should be atleast 6 </div></div>';
        header("Refresh: 5; URL=//localhost/parlourproject/priyanshi/login.php");
        $flag=1;
    }
    if(!preg_match('/^([a-zA-Z][a-zA-Z0-9_]+)@([a-zA-Z]+).([a-zA-Z]{2,3})$/',$email)){
        echo '<div class="text-center"><div class="alert alert-danger" role="alert">
              Enter your email correctly </div></div>';
        header("Refresh: 5; URL=http://localhost/parlourproject/priyanshi/login.php");
        $flag=1;
    }
    // if(!preg_match('/^[a-z][A-Z][0-9]$/',$pass) || strlen($fname)<8){
    //     echo '<div class="text-center"><div class="alert alert-danger" role="alert">
    //           Password must be the combination of letters, numbers and must be atleast 8 characters long</div></div>';
    //     header("Refresh: 5; URL=http://localhost/php/project/login.php");
    //     $flag=1;
    // }
    if($cpass!=$pass){
        echo '<div class="text-center"><div class="alert alert-danger" role="alert">
              Not matching with the password you entered!';
        header("Refresh: 5; URL=//localhost/parlourproject/priyanshi/login.php");
        $flag=1;
    }
}
$flag2=0;
if($flag==0){
    if(isset($_POST['submit'])){
        $servername = "localhost";
        $username = "root";
        $password = "";
    
        $first=$_POST['first'];
        $last=$_POST['last'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        // $cpass=$_POST['cpass'];
    
        $conn = mysqli_connect($servername,$username,$password,"project");
        if(!$conn){
            die("connection failed<br>".mysqli_connect_error());
        }
    
        else{
            echo "Connected!!<br>";
        }
    
        $sqltb="INSERT INTO customer(firstname,lastname,email,password) VALUES ('$first','$last','$email','$pass')";
    
        if(mysqli_query($conn,$sqltb)){
            echo '<div class="text-center"><div class="alert alert-success" role="alert">
            Account created successfully!!</div></div>';
            $flag2=1;
        }
        else{
            echo ('<div class="text-center"><div class="alert alert-danger" role="alert">').
            ("Error ".mysqli_error($conn)).('</div></div>');
        }

        
    
    mysqli_close($conn);
    }

    
}

if($flag2==1){
    header('location: log.php');
}



?>



