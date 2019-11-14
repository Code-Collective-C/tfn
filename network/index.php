<?php
$page_title = "Our Network";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>TruckFuelNet - <?php echo $page_title;?></title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
</head>

<body>

<!-- BANNER & NAV -->
 <?php require_once('../inc/banner.html') ?>
<!-- MARQUEE -->
<!-- iFrame content Gregg -->
    <div class="container scroller">
        <div class="row">
            <div class="col-md-3 pz-logo"><a href="promo_zone.php"><img src="/images/pixel.gif" width="100%" height="80" alt=""/></a></div>
            <div class="col-md-9 pp_info"><?php require("../iframe/price_project.html"); ?></div>
        </div>
    </div>
<!-- INTRO -->
<div class="container intro">
    <div class="row">
        <div class="col-lg-8 h1green align-middle">
            <img class="pull-left h1img" src="/images/network_icon.png"  alt=""/>
            <img class="pull-right h1arw" src="/images/green_chev.png"  alt=""/>
            <h1>The TFN Network</h1>
        </div>
        <div class="col-lg-4 h3orange">
            <img class="pull-left" src="/images/orange_rev_chev.png" width="35" height="70" alt=""/>
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
            <p>TFN has a comprehensive network of<strong> independent and franchised retailers</strong> located on the national and provincial  roads with <strong>cross-border suppliers</strong> in Mozambique, Zimbabwe, Namibia, and  Botswana.</p>
</div>


                <div class="row">
                    <div class="col-md-7 h2con">
                        <h2>Network Map</h2>
                    </div>
                    <div class="col-md-5">
                    <a class="btn btn-secondary pull-right" href="https://app.tfn.co.za/Application/Product/frmRefuelRoutePlanner.aspx?public=true" target="_blank" >Open in new window</a>
                    </div>
                </div>


            <div class="container" style="background-color: #f2f2f2">
                <div class="row">
                <iframe class="pull-right" src="https://app.tfn.co.za/Application/Product/frmRefuelRoutePlanner.aspx?public=true"  width="100%" height="750" frameborder="0"></iframe>
                </div>
            </div>


        </article>

  <!-- ASIDE -->

 <?php require_once('../inc/aside.html') ?>
    </div>
</div>

<!-- FOOTER -->
 <?php require_once('../inc/footer.html') ?>
 <?php include_once("../analyticstracking.php") ?>
    <script src="/js/jquery_3_3_1.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/popper.min.js"></script>
</body>
</html>