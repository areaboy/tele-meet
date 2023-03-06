<?php
//error_reporting(0);


session_start();
include ('authenticate.php');

$uid = strip_tags($_SESSION['uid1']);
$userid = $uid;
$fullname = strip_tags($_SESSION['fullname1']);
$username =  strip_tags($_SESSION['username1']);
$photo = strip_tags($_SESSION['photo1']);
$email = strip_tags($_SESSION['email1']);
$user_rank = strip_tags($_SESSION['user_rank1']);




include('data6rst.php');

$pid=strip_tags($_POST['id']);
$owner_id=strip_tags($_POST['owner_id']);


$booking_date = strip_tags($_POST['p_date']);
$booking_time = strip_tags($_POST['p_time']);

//2023-01-27 10:30:00_10:30 AM

$parts = explode('_', $booking_time);
$tim = $parts[1];
$time_result= "$booking_date $tim";



//insert into database

$timer = time();
include("time/now.fn");
$created_time=strip_tags($now);
$dt2=date("Y-m-d H:i:s");

/*
CREATE TABLE `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `post_id` varchar(100) DEFAULT NULL,
  `owner_id` varchar(100) DEFAULT NULL,
  `email_count` varchar(100) DEFAULT NULL,
  `timing` varchar(100) DEFAULT NULL,
  `timing1` varchar(100) DEFAULT NULL,
`timing2` varchar(100) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `channel` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;
*/




$token1= md5(uniqid());
$token2 = time();
$token = $token1.$token2;

$test_str ='avanade';
$chanel_name=$test_str.$token2;
 
$statement = $db->prepare('INSERT INTO booking
(fullname,email_address,post_id,owner_id,email_count,timing,timing1,timing2,status,channel)
 
                          values
(:fullname,:email_address,:post_id,:owner_id,:email_count,:timing,:timing1,:timing2,:status,:channel)');

$statement->execute(array( 
':fullname' => $fullname,
':email_address' => $email,
':post_id' => $pid,
':owner_id' => $owner_id,
':email_count' =>'0',
':timing' => $timer,
':timing1' => $created_time,
':timing2' => $time_result,
':status' => 'awaiting',
':channel' => $chanel_name
));




if($statement){

echo 1;
}else{

echo 0;
}









?>


