
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ben Moussa Optique</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="../css/styleboxlogin.css">
    <link rel="stylesheet" href="../css/styleboxforgot.css">
    <link rel="stylesheet" href="../css/styleboxsubscribe.css">

</head>
  <body>

  <div class="site-wrap">

    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="../index.php" class="js-logo-clone">Ben Moussa Optic</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>


<!--CLIENT-->
                  <li>
                    <a href="account.php">
                      <span class="icon icon-person" ></span>
                    </a>
                  </li>

<!--CLIENT-->



                  <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                  <li>
                    <a href="cart.html" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count">2</span>
                    </a>
                  </li>
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>

    </header>

   <!--CLIENT FORGOT PASSWORD-->
  <div class="bg_modal2">
                  <div class="modal_content2">
                     <div class="close" onclick="notdisplay2()">+</div>

                    <p class="requiringmail"> Write your email to receive the configurations to retrieve the password </p>
                    <br>
                    <br>
                    <form method ="POST" name="RetrievePassword" id ="RetrievePassword" action="RetrievePassword.php">
                      <input name="mail" id="mail" type="email" placeholder="Your Mail">
					  <?php if(!empty($_GET['message']))
					  {
                          $message = $_GET['message'];
                          echo '<p style="color:red;"> '.$message.'</p>'; //if we find a message in the URL, means there's an error
                       }

					   ?>

                      <input class="button" type="submit" value="Retrieve Password">

                    </form>
                  </div>
                </div>
<!--LOGIN-->
    <form  method="POST" name="Login" id="Login" action="LoginFCT.php" ">
        <input type="text" placeholder="Nickname" name="pseudo" id="pseudo"  size="10" class="form-control" required>
		<?php if(!empty($_GET['message']))
					  {
                          $message = $_GET['message'];
                          echo '<p style="color:red;"> '.$message.'</p>'; //if we find a message in the URL, means there's an error
                       }

					   ?>
        <input type="Password" placeholder="Password" name="motdepasse" id="motdepasse" size="10" class="form-control" required>
		<?php if(!empty($_GET['message2']))
					  {
                          $message2 = $_GET['message2'];
                          echo '<p style="color:red;"> '.$message2.'</p>'; //if we find a message in the URL, means there's an error
                       }

					   ?>
		<p class="forgot" onclick="displaying2()">Forgot Password?</p>
		<input class="button" type="submit" value="Login">

	</form>
  <script type="text/javascript" src="../js/trait.js"></script>

      <script src="../js/jquery-3.3.1.min.js"></script>
      <script src="../js/jquery-ui.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/owl.carousel.min.js"></script>
      <script src="../js/jquery.magnific-popup.min.js"></script>
      <script src="../js/aos.js"></script>

      <script src="../js/main.js"></script>

  </body>
</html>
