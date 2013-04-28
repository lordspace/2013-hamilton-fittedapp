<?php

session_start();


?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>Fitted</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet" />
        <link href="assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/jquery-ui-1.10.2/themes/base/jquery.ui.all.css" />

        <link href="assets/main.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script>!window.jQuery && document.write('<script src="assets/jquery-ui-1.10.2/jquery-1.9.1.min.js"><\/script>')</script>
        <script>!window.jQuery && document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"><\/script>')</script>
        <script>!window.jQuery && document.write('<script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"><\/script>')</script>
        <script>!window.jQuery && document.write('<script src="//code.jquery.com/jquery-1.8.2.min.js"><\/script>')</script>

        <script src="assets/jquery-ui-1.10.2/jquery-ui-1.10.2.custom.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/main.js"></script>

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
            <a class="brand" href="./"><img src="assets/logo.png">Fitted</a></a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class=""><a href="./">Home</a></li>
                <li><a href="try.php" class="app_call_to_action">Try it Now!</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
                <li class="active">
                    <a href="join.php">Login / Join</a>
                </li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <!--<li class="dropdown">
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
                </li>-->
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
