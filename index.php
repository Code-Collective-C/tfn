<?php
$page_title = "Home";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>TruckFuelNet</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">   
    <link rel="stylesheet" type="text/css" href="css/custom.css">    
</head>

<body>
    
<!-- BANNER & NAV -->
 <?php require_once('inc/banner.html') ?>   
<!-- MARQUEE -->
<!-- iFrame content Gregg -->
    <div class="container scroller"> 
        <div class="row">
            <div class="col-md-3 pz-logo"><a href="promo_zone.php"><img src="images/pixel.gif" width="100%" height="80" alt=""/></a></div>
            <div class="col-md-9 pp_info"><?php require("iframe/price_project.html"); ?></div>
        </div>
        <div class="clearer"></div>
    </div>    
<!-- INTRO -->
<div class="container intro">
    <div class="row">
        <div class="col-lg-8 h1orange">
            <img class="pull-left h1img" src="images/fuel_icon.png"  alt=""/>
            <img class="pull-right h1arw" src="images/orange_chev.png"  alt=""/>
            <h1>Your complete on-road, real-time refuelling and driver spend solution</h1>
        </div>
        <div class="col-lg-4 h3green">
            <img class="pull-left" src="images/green_rev_chev.png" width="35" height="70" alt=""/> 
            <p>How TFN saves you money &ndash; <strong><br>
                <a class="clicky" href="lead.php">click here</a> to SAVE with TFN</strong></p>
        </div>
    </div>
    <p class="clearfix"></p>
    <div class="row">
        <div class="col-lg-8">
            <p>TruckFuelNet provides customers with the  best <strong>on-road diesel discount</strong>. We put you <strong>in control</strong> with a comprehensive, real-time <strong>management solution</strong> for all your <strong>on-road refuelling</strong> and <strong>driver spend</strong> needs.</p>
        </div>
    </div>
</div>    
<!-- HOME CARDS -->
 <div class="container">
    <div class="row">
        <article class="col-md-8">
            <div class="container">
            <div class="row row1">
                <div class="col-md-6 nb">
                    <img class="img-fluid" src="images/service_01.jpg" alt=""/>
                </div>
                <div class="col-md-6 nb service">
                    <h2><img class="pull-left" src="images/arrow_right.png" alt=""/><a href="service.php">Service Offering</a></h2>
                </div>
            </div>
            <div class="row row2">
                <div class="col-md-6 nb product">
                    <h2><a href="products.php">&nbsp;Products &amp; Services&nbsp;</a><img class="pull-right" src="images/arrow_left.png" alt=""/></h2>
                </div>
                <div class="col-md-6 nb">
                    <img class="img-fluid" src="images/products_02.jpg" alt=""/>
                </div>
            </div>
            <div class="row row1">
                <div class="col-md-6 nb">
                    <img class="img-fluid" src="images/benefits_01.jpg" alt=""/>
                </div>
                <div class="col-md-6 nb benefit">
                    <h2><img class="pull-left" src="images/arrow_right.png" alt=""/><a href="benefits.php">Benefits</a></h2>
                </div>
            </div>
            <div class="row row2">
                <div class="col-md-6 nb network">
                    <h2><a href="network.php">&nbsp;Our Network&nbsp;</a><img class="pull-right" src="images/arrow_left.png" alt=""/></h2>
                </div>
                <div class="col-md-6 nb">
                    <img class="img-fluid" src="images/network_02.jpg" alt=""/>
                </div>
            </div>
            </div>    
        </article>

  <!-- ASIDE -->      
 <?php require_once('inc/aside.html') ?>       
        
    </div>
</div>
<!-- DAILY -->
<?php require_once('inc/fuelforday.php') ?>
<!-- FOOTER -->
 <?php require_once('inc/footer.html') ?> 
 <?php include_once("analyticstracking.php") ?>
    
    <script src="js/jquery_3_3_1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>
</html>