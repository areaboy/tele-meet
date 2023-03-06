
<?php 


error_reporting(0);

$id = intval($_POST["id"]);
$booking_id = strip_tags($_POST["booking_id"]);
$booking_version = strip_tags($_POST["booking_version"]);

// 
include('data6rst.php');
include('settings.php');


$pstmt = $db->prepare('UPDATE booking SET status=:status where id=:id');
$pstmt->execute(array(':status' =>'disabled', ':id' =>$id));

if($pstmt){
echo "<script>alert('Disable successful....'); location.reload();</script>";
echo "<div id='alertdata_uploadfiles_o' style='background:green;color:white;padding:10px;border:none;'>
 Disable successful.</div><br>";
}else{
// echo nothing
}







?>