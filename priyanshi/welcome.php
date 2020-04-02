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
            <p style="color:white;">
                <?php
                session_start();
                echo 'Welcome'.$_SESSION['user']['username'];
                ?>
            </p>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" style="border-color: white;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item right">
                        <a class="nav-link menu" href="logout.php?logout" style="color:white;">Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <h1 class="text-center text-danger">Women Services</h1>
            <div class="row mt-5">
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $conn = mysqli_connect($servername,$username,$password,"project");
                    if(!$conn){
                        die("Please check your connection<br>".mysqli_connect_error());
                    }
                    else{
                        mysqli_select_db($conn,'women');
                        $query = " SELECT `id`, `name`, `price`, `description` FROM `women` ORDER BY price ASC";
                        $queryfire = mysqli_query($conn,$query);
                        $num = mysqli_num_rows($queryfire);
                        if($num > 0){
                        while($row=mysqli_fetch_array($queryfire)){
                ?>
                            <div class="col-sm-4">
                               
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                            <hr>
                                            <?php echo $row['description']; ?>
                                            <hr>
                                            <h6> &#8377; <?php echo $row['price']; ?></h6>
                                            <form action="cal.php" method="post">
                                            <button type="submit" name="submit" class="btn btn-primary" value="<?php echo $row['price'];?>">Book</button>
                                            </form>
                                        </div>
                                    </div>
                                

                            </div>
                <?php
                        }
                    }
                }
                ?>
            </div>

            <h1 class="text-center text-danger mt-5">Men Services</h1>
            <div class="row mt-5">
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $conn = mysqli_connect($servername,$username,$password,"project");
                    if(!$conn){
                        die("Please check your connection<br>".mysqli_connect_error());
                    }
                    else{
                        mysqli_select_db($conn,'women');
                        $query = " SELECT `id`, `name`, `price`, `description` FROM `men` ORDER BY price ASC";
                        $queryfire = mysqli_query($conn,$query);
                        $num = mysqli_num_rows($queryfire);
                        if($num > 0){
                        while($row=mysqli_fetch_array($queryfire)){
                ?>
                            <div class="col-sm-4">
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                            <hr>
                                            <?php echo $row['description']; ?>
                                            <hr>
                                            <h6> &#8377; <?php echo $row['price']; ?></h6>
                                            <form action="cal.php" method="post">
                                            <button type="submit" name="submit" class="btn btn-primary" value="<?php echo $row['price'];?>">Book</button>
                                            </form>
                                        </div>
                                    </div>


                            </div>
                <?php
                        }
                    }
                }
                ?>
            </div>

        </div>

        
    </body>
</html>

<
