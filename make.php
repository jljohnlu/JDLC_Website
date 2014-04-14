<html>
  <head>
      <title>Assist 3D</title>
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

<div class="container-fluid">
	<div class="row">
	    <div class="col-xs-12">
	        <ul class="nav nav-pills nav-justified thumbnail setup-panel">
	            <li class="active"><a href="#step-1">
	                <h4 class="list-group-item-heading">Print</h4>
	                <p class="list-group-item-text"></p>
	            </a></li>
	            <li class="disabled"><a href="#step-2">
	                <h4 class="list-group-item-heading">Order</h4>
	                <p class="list-group-item-text"></p>
	            </a></li>
	            <li class="disabled"><a href="#step-3">
	                <h4 class="list-group-item-heading">Assemble</h4>
	                <p class="list-group-item-text"></p>
	            </a></li>
	        </ul>
	    </div>
	</div>
	<div class="row setup-content" id="step-1">
	    <div class="col-xs-12">
	        <div class="col-md-12 well">
	            <h1 align="center"> Print</h1>
              <p align="center">To print the parts, follow these instructions. </p>
              <ol>
                <li>Setting up the Lulzbot 3D Printer. <a href= "http://jdlc3d.azurewebsites.net/faq.php#printing">Click here to read our FAQ.</a></li>
                    <ul>
                      <li>Flip the power switch on Lulzbot</li>
                      <li>Open Pronterface</li>
                      <li>Click "Connect" near the top of the window</li>
                      <li>Click "Set" for the heater and for the bed to warm up the printer</li>
                     </ul>
                <li>Optional: Rotate and scale your .stl part</li>
                    <ul>
                      <li>Open your .stl file in netfabb</li>
                      <li>Verify that the part is rotated and scaled to your specification</li>
                      <li>Right click on the part and export as an .stl file for your updated .stl</li>
                      <li>Close netfabb (no need to save the project)</li>
                    </ul>
                <li>Convert .stl part to .gcode printer instructions</li>
                    <ul>
                      <li>Open Slic3r</li>
                      <li>Drag and drop your .stl file onto the Slic3r window</li>
                      <li>Click "Export as G-Code"</li>
                    </ul>
                <li>Prepare to print</li>
                    <ul>
                      <li>Click "Load…" in Pronterface</li>
                      <li>Select your .gcode file from Slic3r</li>
                      <li>Check the temperature by clicking “Check temp”</li>
                      <li>As the nozzle heats up, a bit of ABS will ooze from the tip, so use the tweezers to pull off the excess ABS</li>
                      <li>When the temperature reaches the setpoint, click “print” and immediately click “Mini mode”</li>
                      <li>Allow your object to print</li>
                    </ul>
                <li>Removing your part</li>
                    <ul>
                      <li>Wait for the printer to cool down to at least 60˚F by clicking “Check temp”</li>
                      <li>Use a tweezers and dull knife to remove the part from the bed of the 3D printer</li>
                    </ul>
                <li>Turning off the printer</li>
                    <ul>
                      Hit "Disconnect" in the Pronterface window
                      Close Pronterface
                      Flip off the power switch on Lulzbot
                    </ul>
                </ol>
              <br>
              <button id="activate-step-2" class="btn btn-primary btn-lg" style="align-text:center; display:block; width: 300px; margin-left: auto; margin-right: auto; ">Next Step</button>
	        </div>
	    </div>
	</div>
	<div class="row setup-content" id="step-2">
	    <div class="col-xs-12">
	        <div class="col-md-12 well text-center">
	            <h1> Order</h1>
              <p>To order the parts, follow these instructions. </p>
              <p>1. Test</p>
              <p>2. Test</p>
              <br>
              <button id="activate-step-3" class="btn btn-primary btn-lg" style="align-text:center; display:block; width: 300px; margin-left: auto; margin-right: auto; ">Next Step</button>
	        </div>
	    </div>
	</div>
	<div class="row setup-content" id="step-3">
	    <div class="col-xs-12">
	        <div class="col-md-12 well text-center">
	            <h1> Assemble</h1>
              <p>To assemble the parts, follow these instructions. </p>
              <p>1. Test</p>
              <p>2. Test</p>
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