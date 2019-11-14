<?php
$page_title = "Community";
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
            <h1>A positive contribution to community and country</h1>
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
            <p>One of TFN's business objectives is to  make a <strong>positive and long-lasting</strong> contribution to the <strong>country</strong> and  our <strong>community</strong> through various initiatives, either in <strong>partnership</strong> with <strong>credible</strong> organisations or <strong>in-house</strong>. We consider these  initiatives equally as <strong>important</strong> as the business itself and <strong>making a  difference</strong> in the lives of the <strong>under-privileged</strong> has become a key  focus of TFN.</p>

            <div class="row">

              <div class="col-9 nb greenbckg">
                <h5>Luthemba Lethu</h5>
                  <p>Luthemba Lethu service the community through outreach and rehabilitation programs in the prison,
                      schools, community and police. Destiny House is a farm for prison inmates to prepare them for the
                      workplace after prison. <br>
                      <br>
                    Problem children in schools are invited to weekend camps where the love of
                    God, respect for yourself and a vision for the future are ministered to them. Upliftment of the
                community, rehabilitation of drug addicts and alcoholics and identifying of criminal elements to the
                police in Kempton Park city center change the lives of people and make the city center a safer place!<br>
<br>

All Lethumba programs are based on the Word of God and Christian principles served in love to the
people and for the Glory of God!</p>

                </div>
                <div class="col-3 nb comlog">
                    <p><img class="pull-left" src="/images/arrow_right_gr.png" alt=""/><img src="/images/Luthemba.png" alt=""/></p>
                </div>

</div>
    <p class="clearfix"></p>
                            <div class="row">
  <div class="col-3 nb comlog">
                    <p><img src="/images/ffd.png" alt=""/><img class="pull-right" src="/images/arrow_left_gr.png" alt=""/></p>
                </div>

                <div class="col-9 nb greenbckg">
                    <h5>TFN Fuel for the Day</h5>
                    <p>Truck drivers are on the road for long periods <br>
                        and need spiritual and personal encouragement <br>
                        and motivation. Fuel for the Day is a daily motivational booklet aimed at and distributed among truck drivers.</p>
                    <p>The booklet is based on the Word of God and Christian principles of love, respect, excellence and faith. To date we have distributed over 53,000 booklets with reports of life-changing testimonies.</p>

                </div>


</div>
 <p class="clearfix"></p>
                            <div class="row">

                <div class="col-9 nb greenbckg">
                  <h5>MES</h5>
                    <p>MES is a national organisation that provides food, shelter and clothes to the less fortunate. TFN contributes financially to the activities of MES in the city center of Kempton Park. View www.mes.org.za for more information on MES activities and work.</p>

                </div>
                <div class="col-3 nb comlog">
                    <p><img src="/images/mes.png" alt=""/><img class="pull-left" src="/images/arrow_right_gr.png" alt=""/></p>
                </div>

</div>
     <p class="clearfix"></p>
                            <div class="row">
  <div class="col-3 nb comlog">
                    <p><img src="/images/Laerskool-Impala.png" alt=""/><img class="pull-right" src="/images/arrow_left_gr.png" alt=""/></p>
                </div>

                <div class="col-9 nb greenbckg">
                    <h5>Learner Support</h5>
                    <p>We are a financial sponsor for a local primary school to provide food parcels for children coming to school without a lunchbox or parents who cannot afford to give their children food for the day.</p>

                </div>


</div>
                </div>


                <div class="row">


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