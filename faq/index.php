<?php
$page_title = "FAQs";

try {
    require_once '../inc/conn.php';
	$sql = "SELECT * FROM tbl_faq ORDER BY faq_order";
	$stmt = $db->prepare($sql);
	$stmt->execute();
	$result = $stmt->fetch();
} catch (Exception $e) {
    $error = $e->getMessage();
}
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
            <div class="col-md-3 pz-logo"><a href="/promo_zone/"><img src="/images/pixel.gif" width="100%" height="80" alt=""/></a></div>
            <div class="col-md-9 pp_info"><?php require("../iframe/price_project.html"); ?></div>
        </div>
    </div>
<!-- INTRO -->
<div class="container intro">
    <div class="row">
        <div class="col-lg-8 h1orange align-middle">
            <img class="pull-left h1img" src="/images/faq_icon.png"  alt=""/>
            <img class="pull-right h1arw" src="/images/orange_chev.png"  alt=""/>
            <h1>Frequently Asked Questions</h1>
        </div>
        <div class="col-lg-4 h3green">
            <img class="pull-left" src="/images/green_rev_chev.png" width="35" height="70" alt=""/>
            <p>How TFN saves you money &ndash; <strong><br>
                <a class="clicky" href="/lead/">click here</a> to SAVE with TFN</strong></p>
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

                        <div class="col-md-12">
            <div id="accordion">

<?php do { ?>
<div class="card">
    <div class="card-header" id="heading<?php echo $result['faq_id']; ?>">
        <button class="btn btn-link btn-accordion" data-toggle="collapse" data-target="#collapse<?php echo $result['faq_id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $result['faq_id']; ?>">
            <?php echo $result['faq_qst']; ?>
        </button>
    </div>

    <div id="collapse<?php echo $result['faq_id']; ?>" class="collapse <?php echo $result['faq_show']; ?>" aria-labelledby="heading<?php echo $result['faq_id']; ?>" data-parent="#accordion">
        <div class="card-body">
            <?php echo $result['faq_anw']; ?>
        </div>
    </div>
</div>
<?php } while ($result= $stmt->fetch()); ?>


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
    <script src="/js/jquery_3_3_1.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/popper.min.js"></script>
</body>
</html>