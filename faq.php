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

<div class="container-fluid">
<div class="row">
    <div class="col-xs-2">
            <nav class="nav-sidebar">
                <ul class="nav" style="float:left;">
        <li><a href="#printing">Printing</a></li>
        <li><a href="#other">Other</a></li>
            </ul>
            </nav>
    </div>
    
    <div class="col-xs-10">
    <div class="row">
    <a name="printing"></a> 
    <h1 style="text-align: center">Printing</h1>
          <h4><span class="text-muted">What are we giving you?</span></h4>
          <p class="lead-small">You are downloading two files for your desired device. One for the cap and one for the base. They are both .stl files.</p>
    </div>  
    <br>

    <div class="row">
          <h4><span class="text-muted">What is an .stl file?</span></h4>
          <p class="lead-small">You can think of an STL file as a PDF, but for 3D objects. Just like a PDF, you are limited in what you can change. You can change the size of the STL or orientation (print it upside down or right side up). However, you cannot change the overall design or contour much like you cannot change the text or formatting in a PDF.</p>

          <p class="lead-small">We design the .stl for you, so you don't have to! All you need to do is print the .stl, because we have already scaled and oriented for you.</p>
    </div>  
    <br>

    <div class="row">
          <h4><span class="text-muted">How do I print my .stl file?</span></h4>
          <p class="lead-small">Unlike a PDF, you need to convert .stl files to a printable file before sending it to your 3D printer. This printable file is called .gcode, which basically contains the instructions of how your 3D printer should move to print your desired object. You can simply load the .gcode into your printer's desktop program and print your object.</p>
    </div>  
    <br>

    <div class="row">
          <h4><span class="text-muted">What software will I need to do this?</span></h4>
          <p class="lead-small"> <a href= "http://www.netfabb.com/downloadcenter.php?basic=1">netfabb (manipulating STL)</a></p>
          <p class="lead-small"> <a href= "http://slic3r.org/">Slic3r (converts .stl to .gcode) </a></p>
          <p class="lead-small"> <a href= "http://replicatorwarehouse.com/pronterface/">Pronterface (connect to and control physical printer)</a></p>
    </p>
    </div>  
    <br>

    <hr class="featurette-divider"> 

    <div class="row">
    <a name="Other"></a> 
    <h1 style="text-align: center">Other</h1>
   
          <h4><span class="text-muted">How do I contact you?</span></h4>
          <p class="lead-small">Email us directly at jdlc3d@gmail.com if you have any questions</p>
    </div>  


    </div>
  </div>
</div>

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