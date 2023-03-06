<?php
error_reporting(0);

$booking_idx = strip_tags($_POST['booking_id']);

$id = strip_tags($_POST['id']);

 $p_timex = trim($_POST['p_time']);

$arr_time = explode('_', $p_timex);
$p_time = $arr_time[0];
$p_time2 = $arr_time[1];


$appointment_date = trim($_POST['p_date']);

//$report_date = $v_date;
//$report_month= date('m');

//$str_date = '2021-01-14';
//2022-08-17
//2022-08-19T17:00:00Z

$str_date =$appointment_date;
$ff1 = explode('-', $str_date);
$yearing1 =$ff1[0];
$monthing1= $ff1[1];
$daying1= $ff1[2];


$string = $monthing1;
 
//Get the first character.
$firstCharacter = $string[0];

//Get the second character.
$secondCharacter = $string[1];

if($firstCharacter ==0){
$report_month = $secondCharacter;
}

if($firstCharacter !=0){
$report_month = $monthing1;
}




//"2022-08-19T17:00:00Z"
  // 2022-08-17T17:00:00Z

$date1=$appointment_date;
$date_time =$p_time;
$date_t='T';
$date_z='Z';
$date_final=$date1.$date_t.$date_time.$date_z;


//2022-08-19T16:00:00Z
//2021-12-17T18:00:00Z


include('data6rst.php');
include('settings.php');




$up = $db->prepare("UPDATE booking SET timing1 =:timing1, timing2=:timing2 where id =:id");
$up->execute(array( 
':timing1' => $p_time2,
':timing2' => $appointment_date,
':id' => $booking_idx
));




if($up){

echo "<script>alert('Booking/Appointment Successfully Re-Scheduled'); location.reload();</script>";
echo "<div id='alertdata' style='background:green;color:white;padding:10px;border:none;'>Booking/Appointment Successfully Re-Scheduled</div>";

}else{
echo "<div id='alertdata' style='background:red;color:white;padding:10px;border:none;'>Booking/Appointment Re-Scheduling Failed</div>";
}


?>