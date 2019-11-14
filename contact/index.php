<?php
$page_title = "Contact";
require_once ('../process.php'); ?>
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
            <img class="pull-left h1img" src="/images/contact_icon.png"  alt=""/>
            <img class="pull-right h1arw" src="/images/orange_chev.png"  alt=""/>
            <h1>Our contact details</h1>
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
                        <div class="col-md-4">
                         <div class="bodyheading"><strong>Office Number</strong></div>
  <p>011 394 4199</p>
   <div class="bodyheading"><strong>Fax Number</strong></div>
  <p>011 394 0660 / 0281</p>
   <div class="bodyheading"><strong>Email</strong></div>
  <p><a href="mailto:crm@tfn.co.za">crm@tfn.co.za</a></p>
	<div class="bodyheading"><strong>Physical Address</strong></div>
  <p>	    111 Monument Road<br>
		    Nimrod Park<br>
		    Kempton Park<br>
	      1619</p>
	      <div class="bodyheading"><strong>Postal Address</strong></div>
  <p>Postnet Suite 101<br>
		    Private bag X07<br>
		    Aston Manor, <br>
	      1630</p>
                        </div>
                        <div class="col-md-8 frmhld">
                           <?php if (isset($msgsent)) { echo $msgsent; } ?>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="regForm" class="form-horizontal">
			  <div class=" row form-group">
			  <label for="firstname_id" class="control-label col-md-4">First name:</label>
				<div class="col-md-8">
					<input type="text" class="form-control  input-sm" name="firstname" id="firstname_id" value="<?php if (isset($firstname)) { echo $firstname; } ?>">
					<?php if (isset($err_firstname)) { echo $err_firstname; } ?>
					<?php if (isset($err_firstnamepattern)) { echo $err_firstnamepattern; } ?>
				</div>
        	</div>

       	  <div class="row form-group">
				<label for="surname_id" class="control-label col-md-4">Last name:</label>
				<div class="col-md-8">
					<input type="text" class="form-control  input-sm" name="surname" id="surname_id" value="<?php if (isset($surname)) { echo $surname; } ?>">
					<?php if (isset($err_surname)) { echo $err_surname; } ?>
					<?php if (isset($err_surnamepattern)) { echo $err_surnamepattern; } ?>
				</div>
        	</div>
       	  <div class="row form-group">
			  <label for="emailadd_id" class="control-label col-md-4">Email address:</label>
				<div class="col-md-8">
					<input type="text" class="form-control  input-sm" name="emailadd" id="emailadd_id" value="<?php if (isset($emailadd)) { echo $emailadd; } ?>">
					<?php if (isset($err_emailadd)) { echo $err_emailadd; } ?>
					<?php if (isset($err_emailaddpattern)) { echo $err_emailaddpattern; } ?>
				</div>
        	</div>

       	  <div class="row form-group">
		    <label for="cellno_id" class="control-label col-md-4">Contact number:</label>
				<div class="col-md-8">
					<input type="text" class="form-control  input-sm" name="cellno" id="cellno_id" value="<?php if (isset($cellno)) { echo $cellno; } ?>">
					<?php if (isset($err_cellno)) { echo $err_cellno; } ?>
					<?php if (isset($err_cellnopattern)) { echo $err_cellnopattern; } ?>
				</div>
        	</div>
       	  <div class="row form-group">
       	    <label for="comments_id" class="control-label col-md-4">Comments/enquiry:</label>
				<div class="col-md-8">
				<textarea name="comments" rows="5"  class="form-control  input-sm" id="comments_id" value="<?php if (isset($comments)) { echo $comments; } ?>"></textarea>
				<?php if (isset($err_comments)) { echo $err_comments; } ?>
			  </div>
      	</div>
    <p class="clearfix"></p>
        	<div class="form-group">
				<div class="col-md-12">
				<input name="submitbut" type="submit" class="btn btn-light pull-right" id="regBut" value="Submit">
			</div>
	</div>
                <p class="clearfix"></p>
		</form>
                        </div>
                    </div>
                    <p class="clearfix"></p>
                 <div class="row">
                    <div class="col-md-7 h2con">
                        <h2>Map to offices</h2>
                    </div>
                </div>

<section>


                    <div class="row">
                        <div class="col-md-12">


                        </div>
     <iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3583.384332639856!2d28.239040000000003!3d-26.08637!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9514c49a47c7f7%3A0x9317523994440077!2s111+Monument+Rd%2C+Kempton+Park%2C+1619%2C+South+Africa!5e0!3m2!1sen!2s!4v1420547680924"  width="100%" height="400" frameborder="0"></iframe>

                    </div>
                    </section>
                    <p class="clearfix"></p>


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