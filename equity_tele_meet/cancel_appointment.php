
<?php 


error_reporting(0);

$id = intval($_POST["id"]);
$booking_id = strip_tags($_POST["booking_id"]);
$booking_version = strip_tags($_POST["booking_version"]);

// 
include('data6rst.php');
include('settings.php');


$pstmt_del = $db->prepare('DELETE from booking where id=:id');
$pstmt_del->execute(array(':id' =>$id));

if($pstmt_del){
echo "<script>alert('Appointment Booking cancelation successful....'); location.reload();</script>";
echo "<div id='alertdata_uploadfiles_o' style='background:green;color:white;padding:10px;border:none;'>
 Appointment Booking successfully canceled</div><br>";
}else{
// echo nothing
}







?>