<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>TruckFuelNet</title>
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
            <img class="pull-left h1img" src="/images/road_icon.png"  alt=""/>
            <img class="pull-right h1arw" src="/images/green_chev.png"  alt=""/>
            <h1>On-road Refuel Management &ndash; true convenience in real-time refuelling</h1>
        </div>
    </div>
    <p class="clearfix"></p>

</div>
<!-- HOME CARDS -->
 <div class="container">
    <div class="row">
        <article class="col-md-8">
            <div class="container">
                <p>Introducing the <strong>TFN On-road Refuel  Management</strong> software program, the most comprehensive <strong>real-time</strong>, <strong>on-road</strong> refuelling <strong>management</strong> solution in the market! </p>
                <ul>
                    <li>Manage and authorise – in <strong>real-time</strong> – where, when, who and  how much a truck can <strong>refuel</strong> from the <strong>convenience</strong> of your <strong>computer</strong> or customer <strong>app</strong>. </li>
                    <li>Includes <strong>immediate reporting</strong> on all transactions.</li>
                    <li>Fixed <strong>monthly fee</strong> based on your <strong>fleet size</strong>.</li>
                </ul>
                <h4 class="cta">Register now to enjoy these fantastic benefits! </h4>


                <div class="container">
                    <div class="row dwlds">
                        <div class="col-md-6 bd">
                            <strong class="orgtxt">Download Brochure</strong>
                            <hr class="hrs" />
                            <a href="/downloads/Management System.pdf" target="_blank"><img class="img-fluid" src="/images/pdf.png" width="200" height="37" alt=""/></a>
                        </div>
                        <div class="col-md-6">
                            <strong class="orgtxt">Watch Video</strong>
                            <hr class="hrs" />
                            <a href="#" data-toggle="modal" data-target="#overview"><img class="img-fluid" src="/images/vid.png" width="200" height="37" alt=""/> </a>
                        </div>
                    </div>
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

   <?php require_once('../inc/vid_overview.html') ?>
    <script src="/js/jquery_3_3_1.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script>
         $(function(){
    $('#overview').modal({
        show: false
    }).on('hidden.bs.modal', function(){
        $(this).find('video')[0].pause();
    });
});
     </script>
</body>
</html>