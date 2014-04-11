<html>
  <head>
      <title>Assist 3D</title>
  </head>
  
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/jquery.dynatable.css" rel="stylesheet">

  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

        <div class="container-fluid">

          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php"><img src="images/logos/logo_horizontal.png" style="max-height: 50px;"></a>            
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">  <!--navbar-nav is the uncollapsed bar-->

                <li><a href="home.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="design.php">Design</a></li>
                <li><a href="make.php">Make</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Community<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="forum/phpBB3/index.php">Forum</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                </ul>
                </li>
              </li>
          </ul>
        </div>
      </div>

  </nav>

<div class="hero">
    <div class="container">
        <div class="col-sm-12">
          <h2></h2>
        </div>
    </div>
    <div class="hero-tab-images">
      <div class="hero-image active">
        <img src="images/banners/banner_small.png" style="width: 100%; height: 200px;">
        </div>
  </div>
</div>

<br>

<form action="designoutput.php" method="POST" name="">

<table align = "center">
	<tr>
      	<td align = "center">
			<input type="radio" value="foot" name="body" > Foot<br />
			<img src="images/foot.png" alt="foot" style="height:200px; width:200px;">
       	</td>
        <td align = "center">
			<input type="radio" value="arm" name="body" > Arm<br />
        	<img src="images/arm.png" alt="arm" style="height:200px; width:200px;">
        </td>
        <td align = "center">
			<input type="radio" value="head" name="body" > Head<br />
        	<img src="images/head.png" alt="head" style="height:200px; width:200px;">
        </td>
   	</tr>
  <tr>
  <br>
  </tr>
	<tr>
      	<td align = "center">
			<input type="radio" value="large" name="size" > Large<br />
			<img src="images/large.png" alt="large" style="height:200px; width:200px;">
       	</td>
        <td align = "center">
			<input type="radio" value="medium" name="size" > Medium<br />
			<img src="images/medium.png" alt="medium" style="height:200px; width:200px;">
        </td>
        <td align = "center">
			<input type="radio" value="small" name="size" > Small<br />	
			<img src="images/small.png" alt="small" style="height:200px; width:200px;">
        </td>
   	</tr>

   	<tr>
      <td></td>
   		<td align = "center">
		<input name="submit" type="submit" value="Submit">
		</td>
      <td></td>
	</tr>
</table>
</form>

<div id="footer">
    <div class="container">
      <p style="float: right;"><a href="privacy.php">Privacy Policy</a> | <a href="contactus.php">Contact Us</a> </p>
    </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.dynatable.js"></script>

</html>


</div>