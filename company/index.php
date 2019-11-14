<?php
$page_title = "Company";
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
        <div class="col-lg-8 h1orange align-middle">
            <img class="pull-left h1img" src="/images/network_icon.png"  alt=""/>
            <img class="pull-right h1arw" src="/images/orange_chev.png"  alt=""/>
            <h1>Key company facts and personnel</h1>
        </div>
        <div class="col-lg-4 h3green">
            <img class="pull-left" src="/images/green_rev_chev.png" width="35" height="70" alt=""/>
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
                <div class="row">
                    <div class="col-md-7 h2con">
                        <h2>Key Facts</h2>

                    </div>
                    <ul>
                        <li>TruckFuelNet  (TFN) commenced business in <strong>April 2008</strong> and is a subsidiary of <strong>Renati  Group Pty Ltd</strong> (<a href="http://www.renati.co.za" target="_blank">www.renati.co.za</a>).</li>
                        <li>We  currently have <strong>over 700 clients</strong> with a diesel turnover of <strong>over 17  million litres</strong> per month.</li>
                        <li>TFN  processes over <strong>45 000 customer transactions</strong> per month.</li>
                        <li>TFN  provides its services through the <strong>TFN Supplier network</strong> – <strong>100 plus  sites</strong> nationally and in Mozambique, Zimbabwe, Botswana and Namibia.</li>
                        <li>TFN is the  biggest independent <strong>on-road refuelling</strong> service provider in RSA.                    </li>
                    </ul>
                </div>
            </div>
            <div class="container">
              <div class="row">
                    <div class="col-md-7 h2con">
                        <h2>Management and Shareholding</h2>
                    </div>
                    <div class="col-md-5"></div>
                </div>
                    <p><strong>Board of Directors</strong><br>
                        Stevie Ferreira (CEO)<br>
                    Neil de Kock (Director)</p>
                    <p><strong>Management</strong><br>
                        Stevie Ferreira (CEO)<br>
John-Stephen Ferreira (GM) <br>
                        Alta Nel (Finance)<br>
                        Carol Turketti (Customer Relations)<br>
                        Angelo Joseph (Supplier Network Manager)<br>
              Moses Makgoba (Call Centre Operations)</p>
                <p><strong>Shareholders</strong><br>
                    The RENATI Group Pty Ltd is 100% shareholder in TFN.</p>

               <!-- <p><strong>Testimonials from some of our satisfied customers </strong></p> -->
            </div>
    <!--
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="row carra">
        <div style="width: 30%"><img class="img-fluid" src="/images/bauzer_logo.png"alt=""/></div>
            <div style="width: 10%"></div>
        <div class="testibox" style="width: 60%"><h5 class="testi">ererere ere re rewrew rere ewr erer rererewr</h5></div>
        </div>


    </div>
    <div class="carousel-item">
              <div class="row carra">
        <div style="width: 30%"><img class="img-fluid" src="/images/bauzer_logo.png"alt=""/></div>
            <div style="width: 10%"></div>
        <div class="testibox" style="width: 60%"><h5 class="testi">ererere ere re rewrew rere ewr erer rererewr</h5></div>
        </div>
    </div>
    <div class="carousel-item">
              <div class="row carra">
        <div style="width: 30%"><img class="img-fluid" src="/images/bauzer_logo.png"alt=""/></div>
            <div style="width: 10%"></div>
        <div class="testibox" style="width: 60%"><h5 class="testi">ererere ere re rewrew rere ewr erer rererewr</h5></div>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      -->

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