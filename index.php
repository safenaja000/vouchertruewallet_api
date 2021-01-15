<?php 
//ตัวอย่าง
include 'giftcodetruewallet.class.php';
$class = new twgiftcode;
echo json_encode($class->redeem('0954950599','7fdmeejYSbM9gal0fd'));

?>