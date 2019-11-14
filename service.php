<?php
$page_title = "Service Offering";
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>TruckFuelNet - <?php echo $page_title;?></title>
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
    </div>    
<!-- INTRO -->
<div class="container intro">
    <div class="row">
        <div class="col-lg-8 h1orange">
            <img src="images/road_icon.png"  alt="" class="pull-left h1img"/>
            <img class="pull-right h1arw" src="images/orange_chev.png"  alt=""/>
            <h1>Redefining on-road refuelling &ndash; in real-time </h1>
            
        </div>
        <div class="col-lg-4 h3green">
            <img class="pull-left" src="images/green_rev_chev.png" width="35" height="70" alt=""/> 
            <p>How TFN saves you money &ndash; <strong><br>
                <a class="clicky" href="lead.php">click here</a> to SAVE with TFN</strong></p>
        </div>
    </div>
    <p class="clearfix"></p>

</div>    
<!-- HOME CARDS -->
 <div class="container">
    <div class="row">
        <article class="col-md-8">
            <div class="container">
            <p>To be <strong>competitive</strong> as a commercial <strong>trucking owner/operator</strong>, you need to <strong>constantly</strong> look for the best <strong>fuel price</strong>, on top of <strong>managing</strong> and <strong>administering</strong> driver  spend. All this takes a <strong>great deal</strong> of <strong>time</strong> and <strong>energy</strong> and  above all – <strong>money</strong>!</p>
            <p>Now imagine a <strong>REAL-TIME</strong> solution  to help manage your <strong>on-road spending</strong>. <strong>Refuel</strong> at the <strong>best price</strong> and manage your <strong>driver spend</strong> – all in <strong>one</strong> solution! Our solution  will <strong>save</strong> you money and make your <strong>life easier</strong>. </p>
            <p>When used in <strong>conjunction</strong> with our other products – <strong>Refuel2Save</strong>,<strong> Road Wallet and MAXCard</strong> –  you have a <strong>complete solution</strong> for all your <strong>refuelling needs</strong>.</p>
            </div>
            
            
                <div class="row">
                    <div class="col-md-7 h2con">
                        <h2>How it works</h2>
                    </div>
                </div>
            
            
            <div class="container">
                <p>TFN offers a <strong>cloud-based</strong>,<strong> real-time software solution</strong> to manage all your <strong>on-road refuelling </strong>needs.</p>
                <p><strong>Functionality includes:</strong></p>
                <ul><li> <strong>Schedule</strong> refuelling orders; <strong>SMS orders</strong> for quick refuelling; select <strong>suppliers</strong> with best <strong>zones</strong> and <strong>prices</strong> where your trucks can refuel; set the  rules for refuelling; <strong>authorise</strong> refuelling from your <strong>mobile</strong> <strong>app</strong>;  view refuelling <strong>transactions</strong> and account <strong>balances</strong> from your  mobile app.</li>
                    <li>Immediate <strong>real-time</strong> transaction reporting on all transactions. </li>
                    <li><strong>Detailed</strong> account and transaction <strong>reporting</strong> on all transactions per <strong>supply site</strong>, <strong>truck</strong> and <strong>driver</strong>. </li>
                    <li>Comprehensive <strong>functionality</strong> to administer and <strong>manage</strong> sub-contractor refuelling,  account status and <strong>credit limits</strong>. </li>
                    <li>Homebase  refuelling <strong>management</strong> and processing integrated with <strong>on-road</strong> refuelling.</li>
                    <li>Add  trucks, authorise transactions and manage <strong>truck refuelling rules</strong> from  the comfort of your <strong>customer dashboard</strong>. </li>
                    <li><strong>24/7  Call Centre</strong> to assist with any refuelling query or customer service. 
                      </li>
                </ul>  <p>To get all these features, you pay a  monthly <strong>access fee</strong> based on your<strong> fleet size</strong> – from <strong>R175pm</strong> for a small fleet to <strong>R1000pm</strong> for 200+ vehicles.                    
                    
            </div>
            
            
        </article>

  <!-- ASIDE -->      
      
 <?php require_once('inc/aside.html') ?>   
    </div>
</div>

<!-- FOOTER -->
 <?php require_once('inc/footer.html') ?>  
 <?php include_once("analyticstracking.php") ?>
    <script src="js/jquery_3_3_1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>
</html>