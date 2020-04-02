<?php
session_save_path("C:/xampp/tmp");
session_start();
if(isset($_SESSION['indoorpayment'])){
  $conn =mysqli_connect("localhost","root","","parlourproject");

  if(!$conn){
    die("connection failed<br>".mysqli_connect_error());
  }
      $total=$_SESSION['indoorvalues'];
      $amount=$_SESSION['indoorpayment'];
      $first=$_SESSION['first'];
        $last=$_SESSION['last'];
        $id=$_SESSION['id'];
        $email=$_SESSION['email'];
        $tel=$_SESSION['tel'];
}
if(isset($_POST['myaccount'])){

  echo '<script type="text/javascript">';
echo 'window.location.href="account.php";';
echo '</script>';
}
echo "<html><head>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <title>klaus-Payment</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <link rel='stylesheet' href='https://unpkg.com/aos@next/dist/aos.css' />
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
  <link href='https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i' rel='stylesheet'>



<style>

body{

   background: url('images/pay.jpg');
   background-repeat: no-repeat;
   background-attachment: fixed;
   background-position: center center;
   background-size: cover;
   margin: 0 !important;
   background-size: 100% cover!important;

}
.mydiv{width:40%;
  background-color:white;
}
.myform {
width:40%;
background-color:white;}

input[type=email] {
  width: 80%;
  padding: 12px 20px;

  display: inline-block;


}
 input[type=password]{
   width: 75%;
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

</head><body><form method='post'><input style='width:20%;font-size:20px;' class='btn btn-warning'
type='submit' name='myaccount' value='back to my account'></form><center><div class='mydiv' id='division'>";

echo "id :- ".$id."<br>";
echo "first name :- ".$first."<br>";
echo "last name :- ".$last."<br>";
echo "payable amount :- ".$amount."<br>";
echo "your choices :- ".$total;
echo "
<form method='post' class='myform'>

      address:<input type='text' name='useraddress'><br>
      zipcode:<input type='text' name='zipcode'><br>
        time:<input type='time' name='usertime'><br>
        date:<input type='date' name='userdate'><br>
      select the artist<br/><select name='artist' size='1'>
       <option value='6'>kanika ahuja</option><br/>
       <option value='2'>rahish gupta</option><br/>
       <option value='3'>rudraksh</option><br/>
       <option value='7'>suhani sharma</option><br/>
       <option value='8'>ashina kabba</option><br/>
       <option value='50'>any one</option><br/>
      </select><br/>


      <div class='col-50'>

           Accepted Cards
           <div class='icon-container'>
             <i class='fa fa-cc-amex' style='color:blue;'></i>
             <i class='fa fa-cc-mastercard' style='color:red;'></i>
             <i class='fa fa-cc-discover' style='color:orange;'></i>
           </div>
           <label for='cname'>Name on Card</label>
           <input type='text' id='cname' name='cardname' placeholder='John More Doe'>
           <label for='ccnum'>Credit card number</label>
           <input type='text' id='ccnum' name='cardnumber' placeholder='1111-2222-3333-4444'>
           <label for='expmonth'>Exp Month</label>
           <input type='text' id='expmonth' name='expmonth' placeholder='September'>
           <div class='row'>
             <div class='col-50'>
               <label for='expyear'>Exp Year</label>
               <input type='text' id='expyear' name='expyear' placeholder='2018'>
             </div>
             <div class='col-50'>
               <label for='cvv'>CVV no.</label>
               <input type='text' id='cvv' name='cvv' placeholder='352'>
             </div>
           </div>
         </div>
      <input type='submit' name='final_in_order' value='done'>
      </form></div></center></body></html>";

if(isset($_POST['final_in_order'])){


  ///////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////
  //////error will be displayed at the bottom left corner//////
  /////////////////////////////////////////////////////////////
  /////////////////////////////////////////////////////////////
      if($_POST["useraddress"] == ""){

      echo "address missing";
        }

            elseif($_POST["zipcode"] == ""){
                echo "zipcode missing";
              }
              elseif(!preg_match("/^[0-9]{6,8}+$/",$_POST["zipcode"])){
                $numErr="length of zipcode should be between 6 to 8<br>";
                echo $numErr;
              }
        elseif($_POST["usertime"] == ""){
            echo "please specify the time";
          }
          elseif($_POST["userdate"] == ""){
                  echo "please specify the date";
            }
            elseif($_POST["cardname"] == ""){
                echo "card holder name missing";
              }
              elseif($_POST["cardnumber"] == ""){
                  echo "card number missing";
                }
                elseif(!preg_match("/^[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}+$/",$_POST["cardnumber"])){
                  $numErr="write in aparticular format 0000-0000-0000-0000<br>";
                  echo $numErr;
                }
                elseif($_POST["expmonth"] == ""){
                    echo "expiry month  missing";
                  }
                  elseif($_POST["expyear"] == ""){
                      echo "expiry year  missing";
                    }
                    elseif($_POST["cvv"] == ""){
                        echo "cvv number missing";
                      }
                      elseif(!preg_match("/^[0-9]{3,4}+$/",$_POST["cvv"])){
                        $numErr="please consider the exact length of cvv number<br>";
                        echo $numErr;
                      }
        else{
          $selected_artist=$_POST["artist"];
          $added_address=$_POST["useraddress"];
            $added_time=$_POST["usertime"];
              $added_date=$_POST["userdate"];
              $cardholder=$_POST["cardname"];
                $cardnumber=$_POST["cardnumber"];

$random=rand(1000,9999);
            $sql_query="INSERT INTO orders(userid,email,address,userorder,amount,artist_id,entry_time,entry_date,category,orderid,action,cardholder,cardnumber) VALUES('$id','$email','$added_address','$total','$amount','$selected_artist','$added_time','$added_date','indoor',$random,'wait for the response','$cardholder','$cardnumber')";
          if(mysqli_query($conn,$sql_query)){

            $_SESSION['orderid']=$random;
          echo "<center>your order id is ".$random;
            echo "<form method='post' action='account.php'>
            <input type='submit' name='final_in_order' value='back to my account'>
            </form></center>";
          }
          else{
            die('error!!!'.mysqli_error($conn));
          }
        }

    }
?>
