<?php
$page_title = "Products & Services";
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
            <img class="pull-left h1img" src="/images/products_icon.png"  alt=""/>
            <img class="pull-right h1arw" src="/images/orange_chev.png"  alt=""/>
            <h1>Products and Services</h1>
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
            <div class="row">

<div class="container">
    <div class="card-group">
 <!-- ONE -->

    <div class="card">
        <div class="card-header">Management System</div>
        <div class="card-body">
            <a class="btn btn-light btn-brd" href="#" data-toggle="modal" data-target="#overview">WATCH VIDEO</a>
            <a href="/downloads/Management System.pdf" target="_blank" class="btn btn-light btn-brd">DOWNLOAD BROCHURE</a>
            <a class="btn btn-light btn-brd" href="/refuel_management.php">READ MORE</a>
        </div>
            <img src="/images/down.png" alt="Card image cap" width="35" height="18" class="card-img-bottom ml-auto mr-auto">
    </div>

  <!-- TWO -->

    <div class="card pica">
        <div class="card-body"></div>
    </div>

 <!-- THREE -->

    <div class="card">
        <div class="card-header"><img class="img-fluid" src="/images/refuel2Save.png" alt="Refuel2Save"/></div>
        <div class="card-body">
            <a class="btn btn-light btn-brd" href="#"  data-toggle="modal" data-target="#refuel2save">WATCH VIDEO</a>
            <a href="/downloads/Refuel2Save.pdf" target="_blank" class="btn btn-light btn-brd">DOWNLOAD BROCHURE</a>
            <a class="btn btn-light btn-brd" href="/refuel2save.php">READ MORE</a>
        </div>
            <img src="/images/down.png" alt="Card image cap" width="35" height="18" class="card-img-bottom ml-auto mr-auto">
    </div>


    </div>




<div class="card-group">
 <!-- ONE -->

    <div class="card">
            <img src="/images/down.png" alt="Card image cap" width="35" height="18" class="card-img-top ml-auto mr-auto">
                <div class="card-header"><img class="img-fluid" src="/images/promozone_alt.png" alt="Refuel2Win"/></div>
        <div class="card-body">
            <a class="btn btn-light btn-brd" href="#" data-toggle="modal" data-target="#promozone">WATCH VIDEO</a>
            <a class="btn btn-light btn-brd" href="/promo_zone.php">READ MORE</a>
        </div>


            <img src="/images/down.png" alt="Card image cap" width="35" height="18" class="card-img-bottom ml-auto mr-auto">
    </div>

  <!-- TWO -->

    <div class="card picb">
        <div class="card-body"></div>
    </div>

 <!-- THREE -->

    <div class="card">
            <img src="/images/down.png" alt="Card image cap" width="35" height="18" class="card-img-top ml-auto mr-auto">
        <div class="card-header"><img class="img-fluid" src="/images/refuel2win.png" alt="Refuel2Win"/></div>
<!--        <div class="card-body">
            <a href="/downloads/Refuel2Win.pdf" target="_blank" class="btn btn-light btn-brd">DOWNLOAD BROCHURE</a>
            <a class="btn btn-light btn-brd" href="refuel2win.php">READ MORE</a>
        </div>-->
        <div class="card-body">
           <button type="button" class="btn btn-light btn-brd btn-block" href="#" disabled>Coming Soon</button>
        </div>
            <img src="/images/down.png" alt="Card image cap" width="35" height="18" class="card-img-bottom ml-auto mr-auto">
    </div>


    </div>


<div class="card-group">
 <!-- ONE -->

    <div class="card">
            <img src="/images/down.png" alt="Card image cap" width="35" height="18" class="card-img-top ml-auto mr-auto">
        <div class="card-header"><img class="img-fluid" src="/images/refuel2earn.png" alt="RoadWallet"/></div>
<!--        <div class="card-body">
            <a class="btn btn-light btn-brd" href="#">WATCH VIDEO</a>
            <a class="btn btn-light btn-brd" href="refuel2earn.php">READ MORE</a>
        </div>-->
        <div class="card-body">
           <button type="button" class="btn btn-light btn-brd btn-block" href="#" disabled>Coming Soon</button>
        </div>
            <img src="/images/down.png" alt="Card image cap" width="35" height="18" class="card-img-bottom ml-auto mr-auto">
    </div>

  <!-- TWO -->

    <div class="card picc">
        <div class="card-body"></div>
        <img src="/images/up.png" alt="Card image cap" width="35" height="18" class="card-img-bottom rev ml-auto mr-auto">
    </div>

 <!-- THREE -->

    <div class="card">
            <img src="/images/down.png" alt="Card image cap" width="35" height="18" class="card-img-top ml-auto mr-auto">
        <div class="card-header"><img class="img-fluid" src="/images/road_wallet.png" alt="RoadWallet"/></div>
<!--        <div class="card-body">
            <a class="btn btn-light btn-brd" href="#">WATCH VIDEO</a>
            <a href="/downloads/RoadWallet.pdf" target="_blank" class="btn btn-light btn-brd">DOWNLOAD BROCHURE</a>
            <a class="btn btn-light btn-brd" href="road_wallet.php">READ MORE</a>
        </div>-->
        <div class="card-body">
           <button type="button" class="btn btn-light btn-brd btn-block" href="#" disabled>Coming Soon</button>
        </div>
            <img src="/images/down.png" alt="Card image cap" width="35" height="18" class="card-img-bottom ml-auto mr-auto">
    </div>


    </div>


<div class="card-group">
 <!-- ONE -->

  <div class="card picd">
        <img src="/images/down.png" alt="Card image cap" width="35" height="18" class="card-img-top  ml-auto mr-auto">
      <div class="card-body"></div>
    </div>

 <!-- TWO -->

    <div class="card">
            <img src="/images/up.png" alt="Card image cap" width="35" height="18" class="card-img-top rev ml-auto mr-auto">
        <div class="card-header"><img class="img-fluid" src="/images/maxCcard.png" alt="RoadWallet"/></div>
        <div class="card-body">
           <button type="button" class="btn btn-light btn-brd btn-block" href="#" disabled>Coming Soon</button>
        </div>
    </div>

  <!-- THREE -->

    <div class="card pice">
        <img src="/images/down.png" alt="Card image cap" width="35" height="18" class="card-img-top  ml-auto mr-auto">
      <div class="card-body"></div>
    </div>





    </div>

</div>




            </div><br>
<br>

        </article>

  <!-- ASIDE -->

 <?php require_once('../inc/aside.html') ?>
    </div>
</div>

<!-- FOOTER -->
 <?php require_once('../inc/footer.html') ?>
 <?php include_once("../analyticstracking.php") ?>
  <?php require_once('../inc/vid_overview.html') ?>
    <?php require_once('../inc/vid_refuel2save.html') ?>
    <?php require_once('../inc/vid_promozone.html') ?>
    <script src="/js/jquery_3_3_1.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/popper.min.js"></script>
         <script>
     $(function(){
    $('#promozone, #refuel2save, #overview').modal({
        show: false
    }).on('hidden.bs.modal', function(){
        $(this).find('video')[0].pause();
    });
});
     </script>
</body>
</html>