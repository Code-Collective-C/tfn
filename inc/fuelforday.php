<?php
$dayofyear = date('z') ;

try {
    require_once 'conn.php';
	$sql = "SELECT * FROM tbl_quote WHERE quote_id = :xxxxx";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(':xxxxx',$dayofyear, PDO::PARAM_STR);
	$stmt->execute();
	$result = $stmt->fetch();
} catch (Exception $e) {
    $error = $e->getMessage();
}

?>

<div class="container daily">
    <div class="row">
        <div class="col-md-4 fftdcon">
            <h3 class="fftd">Fuel for the Day</h3>
        </div>
        <div class="col-md-8"> 
        </div>
        <div class="row">
            <div class="col-md-9 offset-2"> 
              <h4 class="thought"><?php echo $result['quote_quote'] ?></h4>
            </div>
        </div>
    </div>
</div>

