<?php
include "db.php";

if(isset($_POST["submit"])){

     $email = $_POST['email'];      
     $password=$_POST["password"];

      $sql="UPDATE `user_info` SET `password`='$password' WHERE email='$email'";
      $result=mysqli_query($con,$sql);
 
      if($result){
          header("location:index.php");
      }
      else{
          die(mysqli_error($con));
      }
 }
?>

<html>

<head>

    <title>PHPJabbers.com | Free Job Agency Website Template</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    <style>
    #top{
            background: #fff;
        }
    .banner {
        height: 70px;
        background: #29ca8e;
        display: flex;
        align-items: center;
    }

    .banner p {
        font-size: 20px;
        margin-left: 285px;
        padding-top: 10px;
    }

    .banner span {
        color: #fff;
        letter-spacing: 2px;
    }
.container{
    margin-top:20rem ;
}
    .banner a {
        color: #337ab7;
    }

    .banner a:hover {
        color: #000;
    }

    center .employee,
    center .employer:hover {
        background-color: #29ca8e;
        padding: 10px 25px;
        border-radius: 10px;
        font-size: 20px;
        color: #fff;
    }

    center .employer,
    center .employee:hover {
        padding: 10px 25px;
        border-radius: 10px;
        font-size: 20px;
        color: #000;
        border: 2px solid #29ca8e;
        background: #fff;
    }
    </style>

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <!-- <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section> -->


    <!-- MENU -->
    <br />
    <br />
    <br />
    <div class="typo">
        <div class="container">

            <form class="well form-horizontal" action="" method="post">
                <fieldset>
                    <!-- Form Name -->
                    <legend>
                        <center>
                            <h3 class="agileits_head">Update Password</h3>
                        </center>
                    </legend>
                    <div class="form-group">
                        <label class="col-md-4 control-label">User Name</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="email" placeholder="User Name" class="form-control" type="text" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Enter New Password</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="password" placeholder="Enter New Password" class="form-control" type="password" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <center>
                                <input type="submit" name="submit" value="Submit" class="btn btn-success">
                            </center>
                        </div>
                    </div>

                </fieldset>
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <center>
                    </div>
                </div>
        </div>

        </form>
    </div>
    </div><!-- /.container --
</html>