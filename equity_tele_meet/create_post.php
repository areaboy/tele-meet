
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







<style>



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


.category_post{
background-color: fuchsia;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
width:100%;
z-index: -999;
}
.category_post:hover {
background: black;
color:white;
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


             


 <li class="navgate_no"><a title='View Dashboard' href="dashboard.php" style="color:white;font-size:14px;">
<button class="category_post1">Dashboard</button></a></li>


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

<!--Start Left-->
<div class='col-sm-2'>

</div>

<!--End Left-->










<!--Start Right-->
<div class='col-sm-8'>






<!-- Main Post start -->



<br>

<center><h2>Create New Post/Services</h2></center>





<!--create course form START here-->


<div style="border-style: dashed; border-width:2px; border-color: orange;background:#eeeeee;padding:10px;" class="row">




        



<!--start form-->

<script>

$(document).ready(function(){
$('#post_btn').click(function(){
		
var title = $('#title').val();
//var offering = $(".offering:checked").val();

var offering = "Offering Medical Help";
var messaging = $("#messaging").val();
var help_category = $("#help_category").val();


if(!offering){
alert('Please Select Offering Help.');
//return false;
}



else if(help_category==""){
alert(' Help Request Category cannot be Empty');
//return false;
}


else if(title==""){
alert('Post Title cannot be Empty');
//return false;
}


else if(messaging==""){
alert('Post Description cannot be Empty');
//return false;
}


else{

$('#loader_l2').fadeIn(400).html('<br><div style="color:white;background:#3b5998;padding:10px;"><img src="ajax-loader.gif">&nbsp;Please Wait, Posts is being sent...</div>');
//var datasend = "geo_address="+ geo_address+'&title='+title+'&offering='+offering+'&messaging='+messaging+'&help_category='+help_category;
var datasend = {title:title, offering:offering, messaging:messaging, help_category:help_category};	
		$.ajax({
			
			type:'POST',
			url:'posts.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){



if(msg == 1){
alert('Post Successfully Sent..');			
$('#loader_l2').hide();
$('#result_l2').html("<div style='color:white;background:green;padding:10px;'>Posts Successfully Sent</div>");
setTimeout(function(){ $('#result_l2').html(''); }, 5000);



window.location='dashboard.php';				
			
}else{

alert('Post submission Failed.');			
$('#loader_l2').hide();
$('#result_l2').html("<div style='color:white;background:red;padding:10px;'>Post submission Failed</div>");
setTimeout(function(){ $('#result_l2').html(''); }, 5000);				
	

}




			
			}
			
		});
		
		}
		
	})
					
});




</script>

<div class="col-sm-12 form-group">
<label>Services/Help Category</label>
<select class="form-control col-sm-12" id="help_category" name="help_category" required>
<option value="">-- Select Help Category Type --</option>
<option value="Medical_Personnel">Medical Personnel</option>
<option value="Enterpreneurs">Enterpreneurs</option>
<option value="Lawyers">Lawyers</option>
<option value="Business_Women">Business Women</option>
<option value="IT_Experts">IT Experts</option>
<option value="Others">Others</option>



</select>
</div>



<div class="col-sm-12 form-group">
<label>Post/Service Title (Eg. I Can Help Women with Business Managements)</label>
<input  class="form-control contact_input_color" id="title" name="title" placeholder="Post Title" type="text" required>
</div>



<div class="col-sm-12 form-group">
<label>Post/Service Description</label>
<textarea  class="form-control contact_input_color" id="messaging" name="messaging" placeholder="Post Description"  required></textarea>
</div>



<br>





<div class="col-sm-12 form-group">
                        <div id="loader_l2"></div>
                        <div id="result_l2"></div>
</div>


<button type="button" id="post_btn" class="category_post"  /> Create Post/Services</button>
</div>







<!--end form-->



</div>





<!--create course form ENDS-->





<!-- Main Post ends -->

</div>




<!--Start Left-->
<div class='col-sm-2'>

</div>

<!--End Left-->




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



















