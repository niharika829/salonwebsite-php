<?php
include('connect.php');
$nameErr=$phnErr=$emailErr="";
if(isset($_POST['submit']))
{
    // $name=$_POST['uname'];
    // $email=$_POST['email'];
    // $mobile=$_POST['mobile'];
	extract($_POST);

    if(!preg_match("/^[A-Z][a-zA-Z ]+$/",$uname)){
        $nameErr="<span style='color:red'; >Only letters and white spaces allowed</span><br>";
    }
    if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/",$mobile)){
        $phnErr="<span style='color:red'; >Number should be in 10 digit  - . , </span><br>";
    }
    if(!preg_match("/^([a-zA-z][a-zA-Z0-9_]+)@([a-zA-Z]+)\.([a-zA-Z]{2-3})$/", $email)){
        $emailErr="<span style='color:red'; >Email Should be in format .</span><br>";
    }
    $course=implode(",",$course);
$sql=mysqli_query($conn,"insert into book (uname,email,Gender,mobile,course,type,joining) values('$uname','$email','$gender','$mobile','$course','$type','$date')");
if($sql)
  header("location:confirmation.php?uname=".$uname);
else
  ?>
<script>
  alert("Email already exist");
</script>
<?php
}

?>

<html>

<head>
<title>Registeration</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="bootstrap.css">

<style type="text/css">
  body{
    background-image:url('Image1/booking5.jpg'); 
  
  }
   #box{
  
  width:800px;
  padding:20px;
  margin: 30px;
font-family:Times New Roman;
  opacity:0.8;
}
</style>
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color:#E60073"> 
  <div class="container">
      <h6><a href="index1.php" class="navbar-brand">SECRET BEAUTY</a><h6>
       <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarid">
        <span class="navbar-toggler-icon"></span>
       </button>
      <div class="collapse navbar-collapse" id="navbarid">
           <ul class="navbar-nav text-right ml-auto">
        <li class="nav-item  zoom"><a href="index1.php" class="nav-link text-white">Home</a></li>
        <li class="nav-item zoom"><a href="index1.php" class="nav-link text-white">Courses</a></li>
        <li class="nav-item zoom"><a href="about.php" class="nav-link text-white">About Us</a></li>
        <li class="nav-item zoom"><a href="booking1.php" class="nav-link text-white">Register Now</a></li>
        <li class="nav-item zoom"><a href="gallery.php" class="nav-link text-white">Gallery</a></li>
        <li class="nav-item zoom"><a href="index1.php" class="nav-link text-white">Contact Us</a></li>
         </ul>
      </div>
  </div>
</nav>
<br>
<br>


  <div class="container">

<div class="col-lg-10 col-12 badge-dark" id="box">
  <h1> BOOK YOUR APPOINTMENT</h1>
    <form action="" method="post">
    Name :<input type="text"name="uname" class="text-dark" placeholder="Enter your name" required><br><?php echo $nameErr;?>
    Email :<input type="text" placeholder="xyz@gmail.com " name="email"  class="text-dark" required><br>
    <?php echo $emailErr;?>
    Gender: <p style="color: white;">Male:<input type="radio" name="gender" value="male">Female:<input type="radio" name="gender" value="female"><br>

    Mobile Number :<input type="text" placeholder="xxxxxxxxxx"class="text-dark" name="mobile" required><br><?php echo $phnErr;?>
    Select Course:<br>
    <input type="checkbox" name="course[]" class="text-dark" value="Beauty Therapy">Beauty Therapy
    <input type="checkbox" name="course[]" class="text-dark" value="Hair">Hair
    <input type="checkbox" name="course[]" class="text-dark" value="Makeup">Makeup
    <input type="checkbox" name="course[]"class="text-dark" value="Nailart">Nailart
    <input type="checkbox" name="course[]" class="text-dark" value="Bridal">Bridal</p>
    <br>
    Type of course<select name="type" required>
      <option>Certification</option>
      <option>Foundation</option>
    </select><br>
    Joining Month<input type="date" name="date" required>
    <input type="submit" value="submit" name="submit" style="background-color: #E60073">
  <a href="index1.php"  class="btn btn-outline-info text-white" style="font-family: andrade_probold; background-color: #E60073">Cancel</a>
  </form>
  </div>
 </div>
  
</body>
</html>