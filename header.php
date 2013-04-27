<!DOCTYPE html>
<html lang="en">
    <head>
        <title>FittedApp</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet" />
        <link href="assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/jquery-ui-1.10.2/themes/base/jquery.ui.all.css">

        <link href="assets/main.css" rel="stylesheet" />
    </head>
    <body>
        <div class="container-fluid">

    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Fitted</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class=""><a href="index.php">Home</a></li>
                <li><a href="try.php" class="app_call_to_action">Try it Now!</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
                <li class="active">
                    <a href="join.php">Login / Join</a>
                </li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->


            <div class="row-fluid">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div> <!-- /row-fluid -->
