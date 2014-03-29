<html>
  <head>
      <title>Grant Fellow</title>
  </head>
  
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
        <img src="images/banners/banner_small.jpg" style="width: 100%; height: 200px;">
        </div>
  </div>
</div>

<div class="container-fluid">
	<div class="row">
	    <div class="col-xs-12">
	        <ul class="nav nav-pills nav-justified thumbnail setup-panel">
	            <li class="active"><a href="#step-1">
	                <h4 class="list-group-item-heading">Step 1</h4>
	                <p class="list-group-item-text">First step description</p>
	            </a></li>
	            <li class="active"><a href="#step-2">
	                <h4 class="list-group-item-heading">Step 2</h4>
	                <p class="list-group-item-text">Second step description</p>
	            </a></li>
	            <li class="active"><a href="#step-3">
	                <h4 class="list-group-item-heading">Step 3</h4>
	                <p class="list-group-item-text">Third step description</p>
	            </a></li>
	        </ul>
	    </div>
	</div>
	<div class="row setup-content" id="step-1">
	    <div class="col-xs-12">
	        <div class="col-md-12 well text-center">
	            <h1> STEP 1</h1>
	            <button id="activate-step-2" class="btn btn-primary btn-lg">Activate Step 2</button>
	        </div>
	    </div>
	</div>
	<div class="row setup-content" id="step-2">
	    <div class="col-xs-12">
	        <div class="col-md-12 well text-center">
	            <h1> STEP 2</h1>
	        </div>
	    </div>
	</div>
	<div class="row setup-content" id="step-3">
	    <div class="col-xs-12">
	        <div class="col-md-12 well">
	            <h1 class="text-center"> STEP 3</h1>
	    </div>
	</div>
  </div>
</div>


<div id="footer">
    <div class="container">
      <p style="float: right;"><a href="privacy.php">Privacy Policy</a> | <a href="contactus.php">Contact Us</a> </p>
    </div>
</div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.dynatable.js"></script>

</html>


</div>