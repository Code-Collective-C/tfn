<?php
$page_title = "Service Offering";
?>
<?php require_once ('processlead.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-53R3QG6');</script>
<!-- End Google Tag Manager -->
<title>TruckFuelNet - <?php echo $page_title;?></title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
</head>

<body>
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53R3QG6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
        <div class="col-lg-8 h1orange">
            <img src="/images/road_icon.png"  alt="" class="pull-left h1img"/>
            <img class="pull-right h1arw" src="/images/orange_chev.png"  alt=""/>
            <h1>Welcome to one of the best daily fuel prices in the market! </h1>

        </div>
        <div class="col-lg-4">

        </div>
    </div>
    <p class="clearfix"></p>

</div>
<!-- HOME CARDS -->
 <div class="container">
    <div class="row">
        <article class="col-md-8">
            <div class="container">
            <p>When we say you WILL<strong> save</strong> with TruckFuelNet, we MEAN it. </p>
            <p>Expect these <strong>every-day</strong> fuel  savings… for a <strong>start</strong>:</p>
            <ul type="disc">
                    <li>A base price of wholesale<strong> less 4c per litre</strong> at all our <strong>Refuel2Save  sites</strong>.</li>
                 <li>A volume rebate of <strong>up to 8c per litre.</strong>            </li>
            </ul>
            <p>PLUS, benefit from <strong>regular promotions</strong> with extra savings  of <strong>up to 10c/litre!</strong></p>
            <p>And our <strong>real-time</strong> <strong>online</strong> system to remotely manage <br>
                all your <strong>on-road refuelling  needs</strong> will save you <strong>TIME</strong> as well  as money.</p>
            </div>


                <div class="row">
                    <div class="col-md-7 h2con">
                        <h2>Want to know more?</h2>
                    </div>
                </div>


            <div class="container">
                <div class="row">
                <div class="col-md-12 frmhld">

                            <p>Leave us <strong>your details </strong>and we'll call you back.  Or register here as a new client and <strong>start  saving </strong>immediately!</p>

                                                       <?php if (isset($msgsent)) { echo $msgsent; } ?>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="regForm" class="form-horizontal">
			  <div class="row form-group">
			  <label for="firstname_id" class="control-label col-md-4">Name:</label>
				<div class="col-md-8">
					<input type="text" class="form-control  input-sm lead" name="firstname" id="firstname_id" value="<?php if (isset($firstname)) { echo $firstname; } ?>">
					<?php if (isset($err_firstname)) { echo $err_firstname; } ?>
					<?php if (isset($err_firstnamepattern)) { echo $err_firstnamepattern; } ?>
				</div>
        	</div>

       	  <div class="row form-group">
				<label for="compname" class="control-label col-md-4">Company name:</label>
				<div class="col-md-8">
					<input type="text" class="form-control input-sm lead" name="compname" id="compname" value="<?php if (isset($compname)) { echo $compname; } ?>">
					<?php if (isset($err_compname)) { echo $err_compname; } ?>
					<?php if (isset($err_compnamepattern)) { echo $err_compnamepattern; } ?>
				</div>
        	</div>
       	  <div class="row form-group">
			  <label for="emailadd_id" class="control-label col-md-4">Email address:</label>
				<div class="col-md-8">
					<input type="text" class="form-control  input-sm lead" name="emailadd" id="emailadd_id" value="<?php if (isset($emailadd)) { echo $emailadd; } ?>">
					<?php if (isset($err_emailadd)) { echo $err_emailadd; } ?>
					<?php if (isset($err_emailaddpattern)) { echo $err_emailaddpattern; } ?>
				</div>
        	</div>

       	  <div class="row form-group">
		    <label for="cellno_id" class="control-label col-md-4">Contact number:</label>
				<div class="col-md-8">
					<input type="text" class="form-control  input-sm lead" name="cellno" id="cellno_id" value="<?php if (isset($cellno)) { echo $cellno; } ?>">
					<?php if (isset($err_cellno)) { echo $err_cellno; } ?>
					<?php if (isset($err_cellnopattern)) { echo $err_cellnopattern; } ?>
				</div>
        	</div>

    <p class="clearfix"></p>
        	<div class="form-group">
				<div class="col-md-12">
				<input name="submitbut" type="submit" class="btn btn-secondary pull-right" id="regBut" value="Submit">
			</div>
	</div>
                <p class="clearfix"></p>
		</form>


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
    <script src="/js/jquery_3_3_1.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/popper.min.js"></script>
</body>
</html>