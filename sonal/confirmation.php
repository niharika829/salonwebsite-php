<?php
include('connect.php');
$sql=mysqli_fetch_array(mysqli_query($conn,"select * from book where uname='$_GET[uname]' ORDER BY id DESC LIMIT 1
"));


?>
<!DOCTYPE html>
<html>
<head>
	<title>Billing</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/css">
		body{
			background-image: url('Image1/back4.jpg');
		}
		#c{
			display: none;
		}
		
		
	</style>
</head>
<body style="background-color: black;">
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
	<?php
 		$count=count(explode(",",$sql['course']))
 		?>
 		<?php
 		if($sql['type']=="certification")
 		$total_money=$count*10000;
 		else
 		{
 		$total_money=$count*6000;
 		} 
 		?>
 <div class="container-fluid">
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Gender</th>
            <th>Course</th>
            <th>Type</th>
            <th>Totalprice</th>
            <th width="280px">Action</th>
        </tr>

        
	        <tr>
	            <td>1</td>
	      
	            <td><?php echo $sql['uname'];?></td>
	            <td><?php echo $sql['email'];?></td>
	            <td><?php echo $sql['mobile'];?></td>
	            <td><?php echo $sql['gender'];?></td>
	            <td><?php echo $sql['course'];?></td>
	            <td><?php echo $sql['type'];?></td>
	            <td><?php echo $total_money;?></td>
	            <td><button   class="btn btn-outline-success badge-success " onclick="c()">Click here</button></td>
	            </tr>
	        </table>


	   <div class="col-lg-5 col-md-5 col-sm-5 col-12 m-auto badge-dark" id="c">
 			<p class="text-white font-weight-bold">Your booking is confirmed so you have to visit the salon. We will call you within 24 hours  for the confirmation of appointment. Please Keep your phone should be on active mode.Thank You.</p>
 			<p class="text-white font-weight-bold">For futher information and queries Contact us</p>
		<p class="text-white font-weight-bold">SECRET BEAUTY ,Gurgaon</p>
		<p class="text-white font-weight-bold">Mon-fri, Open:9:00a.m , Close:9:00p.m</p>
		<pre class="text-white font-weight-bold">Adjacent to DLF Qutab Enclave,
Phase-1, Gurgaon -122002| Map
Email:contact@patnitopinn.com
Phoneno:+91124455666|+91124455777</pre>
<a href="index1.php"  class="btn btn-outline-success btn-success badge-success">Go To Home Page</a>


 		</div>

 	</div>
 	
 </div>

		    <script>
		    	function c()

		    	{
                   var x= document.getElementById("c");
                   if (x.style.display === "none") 
                   {
                       x.style.display = "block";
                    } 
                    else {
                              x.style.display = "none";
                          }
		    	}
		    </script>
</body>
</html>