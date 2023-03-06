<?php
//error_reporting(0); 
?>



<?php
session_start();
include ('authenticate.php');


$userid_sess =  htmlentities(htmlentities($_SESSION['uid1'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['fullname1'], ENT_QUOTES, "UTF-8"));
$username_sess =   htmlentities(htmlentities($_SESSION['username1'], ENT_QUOTES, "UTF-8"));
$photo_sess =  htmlentities(htmlentities($_SESSION['photo1'], ENT_QUOTES, "UTF-8"));
$email_sess =  htmlentities(htmlentities($_SESSION['email1'], ENT_QUOTES, "UTF-8"));

$user_rank = strip_tags($_SESSION['user_rank1']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
 <title><?php include('header_title.php'); echo $header_tit; ?> - Welcome <?php echo htmlentities(htmlentities($_SESSION['fullname1'], ENT_QUOTES, "UTF-8")); ?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="landing page, website design" />

  <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
<script src="moment.js"></script>
	<script src="livestamp.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





<script>
$(document).ready(function(){

$('.appointment_btn').click(function(){
// confirm start
 //if(confirm("Are you sure you want to Book Appointments: ")){
var id = $(this).data('id');
var owner_id = $(this).data('uid');
//var p_date  =  $('.p_date').val();

var p_date  =  $("#p_date_"+id).val();
var p_time = $(".p_time:checked").val();


if(p_date==''){
alert('please Select Appointment date.');
}



 else if(p_time==undefined){
alert('please Select Appointment Time.');
}else{

$(".loader-post_"+id).fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait, Appointments is being Booked...</div>');
var datasend = {'id': id, 'owner_id': owner_id, 'p_date': p_date, 'p_time': p_time};
		$.ajax({
			
			type:'POST',
			url:'appointments.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){


	if(msg == 1){
alert('Appointments Successfully Booked');
$(".loader-post_"+id).hide();
$(".result-post_"+id).html("<div style='color:white;background:green;padding:10px;'>Appointments Successfully Booked</div>");
setTimeout(function(){ $(".result-post_"+id).html(''); }, 5000);
//location.reload();
window.location='dashboard_booking.php';
}


	if(msg == 0){

alert('Appointments Could not be Booked. Please ensure you are connected to Internet.');
$(".loader-post_"+id).hide();
$(".result-post_"+id).html("<div style='color:white;background:red;padding:10px;'>Appointments Could not be Booked. Please ensure you are connected to Internet.</div>");
setTimeout(function(){ $(".result-post_"+id).html(''); }, 5000);

}

}
			
});

}// close if statement


//}// confirm ends

                });










            });






</script>




<style>
.imagelogo_li_remove {
list-style-type: none;
margin: 0;
 padding: 0;
}

.imagelogo_data{
 width:120px;
 height:80px;
}
  .navbar {
    letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
   background-color:fuchsia;

    z-index: 9999;
    border: 0;
    font-family: comic sans ms;
//color:white;
  }


.navbar-toggle {
background-color:orange;
  }

.navgate {
padding:16px;color:white;

}

.navgate:hover{
 color: black;
 background-color: orange;

}


.navbar-header{
height:60px;
}

.navbar-header-collapse-color {
background:white;
}

.dropdown_bgcolor{

background: fuchsia;
color:white;
}

.dropdown_dashedline{
 border-bottom: 2px dotted white;
}

.navgate101:hover{
background:purple;
color:white;

}



.invite_btn{
background-color: purple;
padding: 6px;
color:white;
font-size:14px;
//border-radius: 50%;
border: none;
cursor: pointer;
text-align: center;
}
.invite_btn:hover {
background: black;
color:white;
}


.course_btn{
background-color: red;
padding: 6px;
color:white;
font-size:14px;
//border-radius: 50%;
border: none;
cursor: pointer;
text-align: center;
}
.course_btn:hover {
background: black;
color:white;
}


.creator_imagelogo_data{
 width:60px;
 height:60px;
}

/* make modal appear at center of the page */
.modal-appear-center {
margin-top: 25%;
//width:40%;
}


/* make modal appear at center of the page */
.modal-appear-center1 {
margin-top: 15%;
//width:40%;
}


.modal_head_color{
background-color: fuchsia;
padding: 6px;
color:white;
}


.modal_footer_color{
background-color: fuchsia;
padding: 6px;
color:white;
}


/* footer */


  .navbar_footer {
letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
    //background-color:fuchsia;
    color:white;
    padding:20px;
    border: 0;
    font-family: comic sans ms;
  }


.footer_bgcolor{
background: black;
}

.footer_text1{
color:white;
font-size:20px;
border:none;
cursor:pointer;
}

.footer_text2{
color:grey;
font-size:14px;
border:none;
cursor:pointer;
}

.footer_text1:hover{
color:grey;
}


.footer_text2:hover{
color:orange;
}


.footer_dashedline{
 border-top: 1px dashed white;
}




.e_search_form{
width: 38vw;
height:60px;
padding:10px;
cursor:pointer;
border:none;
border-radius:15%;
color:black;
font-size:16px;
background:white;

//transform: skew(-22deg);
margin-left:-90px;

}

.e_search_form:hover{

border-style: solid; border-width:4px; border-color: #824c4e;
background: #dddddd;
color: black;
}



@media screen and (max-width: 768px) {
  .e_search_form{

  width: 100%;
  padding: 20px;
margin-left:0px;
  }
}



@media screen and (max-width: 600px) {
  .e_search_form{
  width: 100%;
  padding: 20px 
margin-left:0px; 
  }
}





.readmore_btn{
background-color: fuchsia;
padding: 6px;
color:white;
font-size:14px;
border-radius: 10%;
border: none;
cursor: pointer;
text-align: center;
//width:100%;
z-index: -999;
}
.readmore_btn:hover {
background: black;
color:white;
}	






.category_post1{
background-color: fuchsia;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
z-index: -999;
}
.category_post1:hover {
background: black;
color:white;
}

.time_css{
background:#ccc;padding:6px;border-radius:20%;
}

.time_css:hover{
background:orange;color:black;
}	
</style>





    </head>
    <body>

 
</head>
<body>




<?php

$token = '1';
$usern  = '1';

?>



<script>

// stopt all bootstrap drop down menu from closing on click inside
$(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});


</script>


<!--start left column all-->

    <div class="left-column-all left_shifting">

<!-- start column nav-->


<div class="text-center">
<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navgator">
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span> 
        <span class="navbar-header-collapse-color icon-bar"></span>                       
      </button>
     
<li class="navbar-brand home_click imagelogo_li_remove" ><img class="img-rounded imagelogo_data" src="logo1.png"></li>
    </div>
    <div class="collapse navbar-collapse" id="navgator">


      <ul class="nav navbar-nav navbar-right">




 <li class="navgate_no"><a title='Create New Services' href="create_post.php" style="color:white;font-size:14px;">
<button class="category_post1">Create New Post/Services</button></a></li>


 <li class="navgate_no"><a title='Manage Appointments' href="dashboard_booking.php" style="color:white;font-size:14px;">
<button class="category_post1">Manage Appointments</button></a></li>



 <li class="navgate_no"><a title='Logout' href="logout.php" style="color:white;font-size:14px;">
<button class="category_post1">Logout</button></a></li>


             
<li class="navgate"><img style="max-height:60px;max-width:60px;" class="img-circle" width="60px" height="60px" src="uploads/<?php echo htmlentities(htmlentities($_SESSION['photo1'], ENT_QUOTES, "UTF-8")); ?>" width="80px" height="80px">


<span class="dropdown">
  <a style="color:white;font-size:14px;cursor:pointer;" title='View More Data' class="btn1 btn-default1 dropdown-toggle"  data-toggle="dropdown"><?php echo htmlentities(htmlentities($_SESSION['fullname1'], ENT_QUOTES, "UTF-8")); ?>
  <span class="caret"></span></a>

<ul class="dropdown-menu col-sm-12">
<li><a title='My Profile' href="profile_base.php">My Profile/Posts</a></li>
<li><a title='Logout' href="logout.php">Logout</a></li>

</ul></span>

</li>



      </ul>




    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->




<div class='row'>
<br><br><br>



<h3>&nbsp;&nbsp;&nbsp;&nbsp; Welcome
<b style='color:purple'> (<?php echo htmlentities(htmlentities($_SESSION['fullname1'], ENT_QUOTES, "UTF-8")); ?>)</b></h3><br>


<!--Start Left-->
<div class='col-sm-3'>

<h4> Tele Meet Activities</h4>
<li class='seeking_css'><a style='color:white;' href="view.php?data_type=Medical_Personnel">Meet Virtual Medical Personnel</a></li>
<li class='seeking_css'><a style='color:white;' href="view.php?data_type=Enterpreneurs">Meet Virtual Enterpreneurs</a></li>
<li class='seeking_css'><a style='color:white;' href="view.php?data_type=Lawyers">Meet Virtual Lawyers</a></li>
<li class='seeking_css'><a style='color:white;' href="view.php?data_type=Business_Women">Meet Virtual Business Women</a></li>
<li class='seeking_css'><a style='color:white;' href="view.php?data_type=IT_Experts">Meet Virtual IT Experts</a></li>

<li class='seeking_css'><a style='color:white;' href="view.php?data_type=Others">Others</a></li>


	


</div>

<!--End Left-->










<!--Start Right-->
<div class='col-sm-9'>






<!-- Main Post Database query starts here -->









<style>
.point_count { color: #fff; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: #ec5574; padding: 2px 6px;font-size:20px; }
.point_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:20px; }


</style>


        <div class="content">

            <?php

include('data6rst.php');

$result = $db->prepare("SELECT * FROM posts where data_type =:data_type order by id desc");
$result->execute(array(':data_type' =>'post'));

$count_post = $result->rowCount();
if($count_post ==0){
echo "<div style='background:red;color:white;padding:10px;border:none;'>No Data Posted Yet.. <b></b></div>";
}


while ($row = $result->fetch()) {

$id = htmlentities(htmlentities($row['id'], ENT_QUOTES, "UTF-8"));
$postid = $id;
$title = htmlentities(htmlentities($row['title'], ENT_QUOTES, "UTF-8"));
$title_seo = htmlentities(htmlentities($row['title_seo'], ENT_QUOTES, "UTF-8"));
$content = $row['content'];
$username = htmlentities(htmlentities($row['username'], ENT_QUOTES, "UTF-8"));
$fullname = htmlentities(htmlentities($row['fullname'], ENT_QUOTES, "UTF-8"));
$userphoto = htmlentities(htmlentities($row['userphoto'], ENT_QUOTES, "UTF-8"));
$created_time = htmlentities(htmlentities($row['timer2'], ENT_QUOTES, "UTF-8"));
$timer1 = htmlentities(htmlentities($row['timer1'], ENT_QUOTES, "UTF-8"));
$post_userid = htmlentities(htmlentities($row['userid'], ENT_QUOTES, "UTF-8"));

$microcontent = substr($content, 0, 120)."...";
$offering = htmlentities(htmlentities($row['offering'], ENT_QUOTES, "UTF-8"));
$help_category = htmlentities(htmlentities($row['help_category'], ENT_QUOTES, "UTF-8"));
$points = htmlentities(htmlentities($row['points'], ENT_QUOTES, "UTF-8"));
$total_comment = htmlentities(htmlentities($row['total_comments'], ENT_QUOTES, "UTF-8"));


            ?>

                    <div class="post well">

<img class='' style='border-style: solid; border-width:3px; border-color:fuchsia; width:80px;height:80px; 
max-width:80px;max-height:80px;border-radius: 50%;' src='uploads/<?php echo $userphoto; ?>'><br>
<b style='color:fuchsia;font-size:18px;' >Name: <?php echo $fullname; ?> </b><br>


<b class='title_css'>Title: <?php echo $title; ?></b><br>
<b >Descriptions:</b><br><?php echo $content; ?> ....<br>
      
<span style='color:fuchsia;'><b> Time: </b> <span data-livestamp="<?php echo $timer1;?>"></span></span> <br>


<button title='Book Appointments' type="button" class="readmore_btn btn btn-warning" data-toggle="collapse" data-target="#demo_<?php echo $id; ?>">
Book Appointments(Hide/Unhide)</button>
  <div id="demo_<?php echo $id; ?>" class="collapse">

<br>


        <div>
    		<p><h3>Appointment Time</h3>


<div class='col-sm-3 time_css'>
<input type="radio" id="p_time" name="p_time" value="10:00:00_10:00 AM" class="p_time"/>10:00 AM <br>
</div>
<div class='col-sm-3 time_css'>
<input type="radio" id="p_time" name="p_time" value="10:30:00_10:30 AM" class="p_time"/>10:30 AM <br>
</div>
<div class='col-sm-3 time_css'>
 <input type="radio" id="p_time" name="p_time" value="11:00:00_11:00 AM" class="p_time"/>11:00 AM <br>   
</div>

<div class='col-sm-3 time_css'>
 <input type="radio" id="p_time" name="p_time" value="11:30:00_11:30 AM" class="p_time"/>11:30 AM <br> </div>
<div class='col-sm-3 time_css'>
<input type="radio" id="p_time" name="p_time" value="12:00:00_12:00 PM" class="p_time"/>12:00 PM <br> </div>
<div class='col-sm-3 time_css'> 
<input type="radio" id="p_time" name="p_time" value="12:30:00_12:30 PM" class="p_time"/>12:30 PM <br></div>
<div class='col-sm-3 time_css'>
<input type="radio" id="p_time" name="p_time" value="13:00:00_1:00 PM" class="p_time"/>1:00 PM <br>  </div>
<div class='col-sm-3 time_css'>
<input type="radio" id="p_time" name="p_time" value="13:30:00_1:30 PM" class="p_time"/>1:30 PM <br> </div>
<div class='col-sm-3 time_css'>
<input type="radio" id="p_time" name="p_time" value="14:00:00_2:00 PM" class="p_time"/>2:00 PM <br> </div>
<div class='col-sm-3 time_css'>
<input type="radio" id="p_time" name="p_time" value="14:30:00_2:30 PM" class="p_time"/>2:30 PM <br> </div>
<div class='col-sm-3 time_css'>
<input type="radio" id="p_time" name="p_time" value="15:00:00_3:00 PM" class="p_time"/>3:00 PM <br> </div>
<div class='col-sm-3 time_css'>
<input type="radio" id="p_time" name="p_time" value="15:30:00_3:30 PM" class="p_time"/>3:30 PM <br> </div>
<div class='col-sm-3 time_css'>
<input type="radio" id="p_time" name="p_time" value="16:00:00_4:00 PM" class="p_time"/>4:00 PM <br></div>
<div class='col-sm-3 time_css'>
<input type="radio" id="p_time" name="p_time" value="16:30:00_4:30 PM" class="p_time"/>4:30 PM <br> </div>
<div class='col-sm-3 time_css'>
<input type="radio" id="p_time" name="p_time" value="17:00:00_5:00 PM" class="p_time"/>5:00 PM <br>
</div>
<div class='col-sm-3 time_css'>
<input type="radio" id="p_time" name="p_time" value="17:30:00_5:30 PM" class="p_time"/>5:30 PM <br>
</div>



</p>
    	</div>



        <div>
    		<p><h3>Appointment Date</h3>

 <div class="form-group col-sm-12">
              <input type="date" class="p_date_<?php echo $id; ?> col-sm-6 form-control" name="p_date_<?php echo $id; ?>" id="p_date_<?php echo $id; ?>"   placeholder="">
            </div>


  <div class="loader-post_<?php echo $id; ?>"></div>
   <div class="result-post_<?php echo $id; ?>"></div>

<button class=' btn btn-info appointment_btn' data-id='<?php echo $id; ?>' data-uid='<?php echo $username; ?>' title='Book Now'>Book Now</button>
 
<br>

  </div><br>



                 
</div>





            <?php

                }
            ?>



<!-- Main Post Database query ends here-->

</div>








</div>
<!--End Right-->

</div>
<!--Row-->











<style>

.title_css{
//background: green;
color:green;
cursor:pointer;
font-size:24px;

}


.title_css:hover{
//background: purple;
color:purple;

}



.seeking_css{
background: fuchsia;
color:white;
padding:6px;
cursor:pointer;
border:none;
border-radius:10%;
font-size:16px;
}

.seeking_css:hover{
background: black;
color:white;

}



.offering_css{
background: green;
color:white;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.offering_css:hover{
background: black;
color:white;

}



.cat_css{
background: #ec5574;
color:white;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.cat_css:hover{
background: black;
color:white;

}



</style>



<!--form START-->











<!-- footer Section start -->

<footer class=" navbar_footer text-center footer_bgcolor">

<div class="row">
        <div class="col-sm-12">

<p class="footer_text1"><?php echo $header_tit; ?></p>
<p class="footer_text2"><?php include('footer_title.php'); echo $footer_tit1; ?></p>
<br>

        </div>



        </div>

<br/>
  <p></p>
</footer>

<!-- footer Section ends -->








   
</body>
</html>



















