<?php
$first = $last = $emailErr = $passErr = $cpassErr = ' ';
$flag=0;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fname = $_POST['first'];
    $lname = $_POST['last'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    if(!preg_match('/^[A-Z][a-zA-Z ]+$/',$fname) || strlen($fname)<5){
        $first = 'Enter your first name correctly..The length should be atleast 6<br>';
        
        echo '<div class="alert alert-danger" role="alert">
             $first </div>';
            $flag=1;
    }
    if(!preg_match('/^[A-Z][a-zA-Z ]+$/',$lname) || strlen($fname)<5){
        $last = 'Enter your last name correctly..The length should be atleast 6<br>';
        echo $last;
        $flag=1;
    }
    if(!preg_match('/^([a-zA-Z][a-zA-Z0-9_]+)@([a-zA-Z]+).([a-zA-Z]{2,3})$/',$email)){
        $emailErr = 'Enter your email correctly<br>';
        echo $emailErr;
        $flag=1;
    }
    if(!preg_match('/^[a-zA-Z0-9.,-]+$/',$pass) || strlen($fname)<8){
        $passErr = 'Password must be the combination of letters, numbers and must be atleast 8 characters long<br>';
        echo $passErr;
        $flag=1;
    }
    if($cpass!=$pass){
        $cpassErr='Not matching with the password you entered!<br>';
        echo $cpassErr;
        $flag=1;
    }
}

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
    
        $sqltb="INSERT INTO customer(firstname,lastname,email,password) VALUES ($first','$last','$email','$pass')";
    
        if(mysqli_query($conn,$sqltb)){
            echo "new record created<br>";
        }
        else{
            echo "error".$sqltb."<br>".mysqli_error($conn);
        }
    
    mysqli_close($conn);
    }
}


?>

