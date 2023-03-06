<?php

error_reporting(0);
session_start();
include ('authenticate.php');

$uid = strip_tags($_SESSION['uid1']);
$userid = $uid;
$fullname = strip_tags($_SESSION['fullname1']);
$username =  strip_tags($_SESSION['username1']);
$photo = strip_tags($_SESSION['photo1']);
$email = strip_tags($_SESSION['email1']);
$user_rank = strip_tags($_SESSION['user_rank1']);



$mt = microtime(true);
$timer = time();
include("time/now.fn");
$created_time=strip_tags($now);
$dt2=date("Y-m-d H:i:s");
$title = strip_tags($_POST['title']);

//replace any space with hyphen
$sp ='-';
$tt = time();
$title_seo = str_replace(' ', '-', $title.$sp.$tt);


include('data6rst.php');
$offering = strip_tags($_POST['offering']);
$messaging = strip_tags($_POST['messaging']);
$help_category = strip_tags($_POST['help_category']);
$offering1 = str_replace(' ', '-', $offering);



        if($offering1 !=''){
          



$statement = $db->prepare('INSERT INTO posts
(title,title_seo,content,timer1,timer2,username,fullname,userphoto,userid,points,help_category,offering,total_comments,data_type)
                        values
(:title,:title_seo,:content,:timer1,:timer2,:username,:fullname,:userphoto,:userid,:point, :help_category,:offering,:total_comments,:data_type)');
$statement->execute(array( 
':title' => $title,
':title_seo' => $title_seo,
':content' => $messaging,
':timer1' => $timer,
':timer2' => $created_time,
':username' => $username,
':fullname' => $fullname,
':userphoto' => $photo,
':userid' => $uid,
':point' => '100',
':help_category' => $help_category,
':offering' => $offering,
':total_comments' => '0',
':data_type' => 'post'
));





$res = $db->query("SELECT LAST_INSERT_ID()");
$lastId_post = $res->fetchColumn();





$pst = $db->prepare('select * from users where id=:id');
$pst->execute(array(':id' =>$userid));
$r = $pst->fetch();
//$rc = $pst->rowCount();


$counter_points=$r['points'];
$new_count = 50;
$final_count = $counter_points + $new_count;


$update= $db->prepare('UPDATE users set points =:points where id=:id');
$update->execute(array(':points' => $final_count, ':id' =>$userid));


$update= $db->prepare('UPDATE posts set points =:points where userid=:userid');
$update->execute(array(':points' => $final_count, ':userid' =>$userid));



echo 1;	

}
else{
//echo "Post submission Failed";
echo 2;
}




?>