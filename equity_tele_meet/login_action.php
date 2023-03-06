

<?php
//error_reporting(0); 
session_start();

$email = strip_tags($_POST['email']);
$password = strip_tags($_POST['password']);


if ($email == ''){
echo "<div class='alert alert-danger' id='alerts_login'><font color=red>Email is empty</font></div>";
exit();
}


if ($password == ''){
echo "<div class='alert alert-danger' id='alerts_login'><font color=red>password is empty</font></div>";
exit();
}


// honey pot spambots
$emailaddress_pot =$_POST['emailaddress_pot'];
if($emailaddress_pot !=''){
//spamboot detected.
//Redirect the user to google site

echo "<script>
window.setTimeout(function() {
    window.location.href = 'https://google.com';
}, 1000);
</script><br><br>";

exit();
}


include('data6rst.php');


// check if user has verified his email
$result_verified = $db->prepare('select * from users where email=:email');
$result_verified->execute(array(':email' =>$email));
while ($rowv = $result_verified->fetch()) {
$user_verified=htmlentities($rowv['user_verified'], ENT_QUOTES, "UTF-8");

if($user_verified == 0){
echo "<div class='alert alert-danger' id='alerts_login'><font color=red>Error: Please Signup first or Verify link sent to your email inbox or spam box</font></div>";
exit();
}


}



// check if user has been banned
$result_banned = $db->prepare('select * from users where email=:email');
$result_banned->execute(array(':email' =>$email));
while ($rowb = $result_banned->fetch()) {

$user_banned=htmlentities($rowb['user_banned'], ENT_QUOTES, "UTF-8");
if($user_banned == 1){
echo "<div class='alert alert-danger' id='alerts_login'><font color=red>You have been banned from accessing this site. Contact Site Admin</font></div>";
exit();
}



}




// log in if data were okay
$result = $db->prepare('SELECT * FROM users where email = :email and password = :password');

		$result->execute(array(
			':email' => $email,
':password' => $password

    ));

$count = $result->rowCount();

$row = $result->fetch();

if( $count == 1 ) {
//session_start();
session_regenerate_id();

// initialize session if things where ok.
$_SESSION['uid1'] = $row['id'];
$_SESSION['fullname1'] = $row['fullname'];
$_SESSION['username1'] = $row['id'];
$_SESSION['email1'] = $row['email'];
$_SESSION['photo1'] = $row['photo'];
$_SESSION['user_rank1'] = $row['user_rank'];
$_SESSION['user_banned1'] = $row['user_banned'];
$_SESSION['token1'] = $row['data'];
$_SESSION['usern1'] = $row['status'];
$_SESSION['points1'] = $row['points'];
$_SESSION['levels1'] = $row['levels'];
$_SESSION['created_time1'] = $row['created_time'];

echo "<div class='alert alert-success'>login sucessful <img src='ajax-loader.gif'></div>";
echo "<script>window.location='dashboard.php'</script>";

}
else {
	
echo "<div class='alert alert-danger' id='alerts_login'><font color=red>Either Username or Password is Wrong</font></div>";
}


?>

<?php ob_end_flush(); ?>
