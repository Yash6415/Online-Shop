<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Admin Login</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Trendz Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- //Meta tag Keywords -->
    <!--/Style-CSS -->
    <link rel="stylesheet" href="./assets/css/style1.css" type="text/css" media="all" />
    <!--//Style-CSS -->
</head>

<body>
    <!-- /login-section -->

    <section class="w3l-forms-23">
        <div class="forms23-block-hny">
            <div class="wrapper">
                <h1>Admin Login Form</h1>
                <!-- if logo is image enable this   
					<a class="logo" href="index.html">
					  <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
					</a> 
				-->
                <div class="d-grid forms23-grids">
                    <div class="form23">
                        <div class="main-bg">
                            <h6 class="sec-one">Admin</h6>
                            <div class="speci-login first-look">
                                <img src="http://localhost/online shop/" alt="" class="img-responsive" width="40px" >
                            </div>
                        </div>
                        <div class="bottom-content">
                            <form action="logincheck.php" method="post">
                                <input type="text" name="name" class="input-form" placeholder="Your UserName"
                                    required="required" />
                                <input type="password" name="password" class="input-form" placeholder="Your Password"
                                    required="required" />
                                <button type="submit" class="loginhny-btn btn">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //login-section -->
</body>

</html>