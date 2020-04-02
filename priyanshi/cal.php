<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="main.jpg" type="image/gif" sizes="16x16">
    <title>Booking --The Patnitop Inn</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="./aos-master/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Main Styling -->
    <link rel="stylesheet" href="./aos-master/dist/aos.css">
    <link rel="stylesheet" href="imagehover.css-master/css/imagehover.min.css">
    <link href="cal.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Norican&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton|Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya|Lobster+Two|Trochut&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h2 class="display-3 text-center" style=" font-family: 'Berkshire Swash', cursive;">Make a Payment</h2>

    <div class="row">
      <div class="col-50">
        <div class="container" id="xc">
          <form action="welcome.php">          
            <div class="row">
              <div class="col-50">
                <h3>Booking</h3>
                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                <input type="text" id="fname" name="name" placeholder="John M. Doe" readonly value="<?php 
                                                                                                    session_start();
                                                                                                    echo $_SESSION['user']['username'];
                                                                                                    ?>">
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="text" id="email" name="email" placeholder="john@example.com" readonly value="<?php 
                                                                                                    // session_start();
                                                                                                    echo $_SESSION['user']['mail'];
                                                                                                    ?>">
          
              <div class="col-50">
                <h3>Payment</h3>
                <label for="fname">Accepted Cards</label>
                <div class="icon-container">
                  <i class="fa fa-cc-visa" style="color:navy;"></i>
                  <i class="fa fa-cc-amex" style="color:blue;"></i>
                  <i class="fa fa-cc-mastercard" style="color:red;"></i>
                  <i class="fa fa-cc-discover" style="color:orange;"></i>
                </div>
                <label for="cname">Name on Card</label>
                <input type="text" id="cname" name="cname" placeholder="John More Doe" required maxlength="20">
                <label for="ccnum">Card number</label>
                <input type="text" id="ccnum" name="cnum" placeholder="1111-2222-3333-4444" required maxlength="16" minlength="16">
                <label for="expmonth">Expiry</label>
                <input type="date" id="expmonth" name="expmon" required>
                <label for="cvv">CVV</label>
                <input type="password" id="cvv" name="cvv" placeholder="352">
              </div>
                    
            </div>
            <input type="submit" class="btn" id="btSubmit" name="submite" value="Pay <?php echo $_POST['submit'];?>">
          </form>
        </div>
      </div>
    </div>
</body>
</html>

