<html>
  <head>
      <title>Grant Fellow</title>
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
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Team<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="mission.php">Mission</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="advisors.php">Advisors</a></li>
                </ul>
                </li>
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
        <img src="images/banners/banner_small.jpg" style="width: 100%; height: 200px;">
        </div>
  </div>
</div>



<form action="http://jdlc.azurewebsites.net/designoutput.php" method="POST" name="">

<table>
	<tr>
      	<td>
			<input type="radio" value="foot" name="body" >:<br />
			<img src="images/foot.png" alt="foot" style="height:100px; width:100px;">
       	</td>
        <td>
			<input type="radio" value="arm" name="body" >:<br />
        	<img src="images/arm.png" alt="arm" style="height:100px; width:100px;">
        </td>
        <td>
			<input type="radio" value="head" name="body" >:<br />
        	<img src="images/head.png" alt="head" style="height:100px; width:100px;">
        </td>
   	</tr>

	<tr>
      	<td>
			<input type="radio" value="large" name="size" >:<br />
			<img src="images/large.png" alt="large" style="height:100px; width:100px;">
       	</td>
        <td>
			<input type="radio" value="medium" name="size" >:<br />
			<img src="images/medium.png" alt="medium" style="height:100px; width:100px;">
        </td>
        <td>
			<input type="radio" value="small" name="size" >:<br />	
			<img src="images/small.png" alt="small" style="height:100px; width:100px;">
        </td>
   	</tr>

   	<tr>
      	<td>
			<input type="radio" value="circle" name="shape" >:<br />
			<img src="images/circle.png" alt="circle" style="height:100px; width:100px;">
       	</td>
        <td>
			<input type="radio" value="diamond" name="shape" >:<br />	
			<img src="images/diamond.png" alt="diamond" style="height:100px; width:100px;">
        </td>
        <td>
			<input type="radio" value="triangle" name="shape" >:<br />
			<img src="images/triangle.png" alt="triangle" style="height:100px; width:100px;">
        </td>
   	</tr>
	
   	<tr>
   		<td>
		<input name="submit" type="submit" value="Submit">
		</td>
	</tr>
</table>
</form>

<div id="footer">
    <div class="container">
      <p style="float: right;"> <a href="login.php">Sign Up</a> | <a href="privacy.php">Privacy Policy</a> | <a href="contactus.php">Contact Us</a> </p>
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