<?php
error_reporting(0);
include('settings.php');
$timerx = time();


session_start();
include ('authenticate.php');


$userid_sess =  htmlentities(htmlentities($_SESSION['uid1'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['fullname1'], ENT_QUOTES, "UTF-8"));
$username_sess =   htmlentities(htmlentities($_SESSION['username1'], ENT_QUOTES, "UTF-8"));
$photo_sess =  htmlentities(htmlentities($_SESSION['photo1'], ENT_QUOTES, "UTF-8"));
$email_sess =  htmlentities(htmlentities($_SESSION['email1'], ENT_QUOTES, "UTF-8"));

$user_rank = strip_tags($_SESSION['user_rank1']);



$fname_sess = $fullname_sess;
$id_sess =$userid_sess;
$email_sess= $email_sess;


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="jquery.min.js"></script>
<script src="moment.js"></script>
	<script src="livestamp.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <link rel="stylesheet" href="bootstrap.min.css" />
  <script src="jquery.dataTables.min.js"></script>
  <script src="dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="dataTables.bootstrap.min.css" />
  <script src="bootstrap.min.js"></script>


    <title>Welcome  <?php echo $fname_sess; ?></title>

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

 .bottomcorner_css{
  //position:fixed;
position:absolute;
  bottom:0;
  right:0;
  }


 .topcorner_css{
  //position:fixed;
position:absolute;
  top:10;
  right:0;
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

</style>





</head>

<body>
    <div>
        
 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Tele Meet</a>
    </div>
    <ul class="nav navbar-nav">
<li class="navbar-brand home_click imagelogo_li_remove" ><img class="img-rounded imagelogo_data" src="logo.png"></li>



 <li class="navgate_no"><a title='View Dashboard' href="dashboard.php" style="color:white;font-size:14px;">
<button class="category_post1">Dashboard</button></a></li>


 <li class="navgate_no"><a title='Logout' href="logout.php" style="color:white;font-size:14px;">
<button class="category_post1">Logout</button></a></li>


    </ul>
  </div>
</nav> 




<br><br><br>


<h3>Welcome  <b><?php echo $fname_sess; ?></b></h3>

<style>

.status_css{
color:red;
fontsize:16px;
}

.status_css2{
color:green;
fontsize:16px;
}

.status_css3{
color:#800000;
fontsize:16px;
}
</style>



<h4>Search Booking/Appointments by <span style='color:fuchsia'>Booking Id, FullName, Email</span> etc...</h4><br>


<div class="container">
<div class="row">
<div class="col-sm-12 table-responsive">
<div class="alert_server_response"></div>
<div class="loader_x"></div>
<table id="backup_content" class="table table-bordered table-striped">
<thead><tr>



<th>FullName</th>
<th>Email</th>
<th>Time & Date</th>
<th>Appointment Video Call Link</th>
<th>Booked Time</th>
<th>Booking Events</th>
</tr></thead>
</table>
</div>
</div>
</div>






<span class="alert_server_response"></span>
<span class="loader_x"></span>



<script>
$(document).ready(function(){

var get_content = 'get_data';
var backup_type = 'ok';
if(get_content=="" && backup_type==""){
alert('There is an Issue with Cotent Database Retrieval');
}
else{
$('.loader_x').fadeIn(400).html('<br><div style="background:#eee; width:100%;height:30%;text-align:center"><img src="ajax-loader.gif">&nbsp;Please Wait, Your Data is being Loaded</div>');
		
 var backupLord144 = $('#backup_content').DataTable({
  "processing":true,
  "serverSide":true,
  "order":[],
  "ajax":{
   url:"dashboard_booking_action.php",
   type:"POST",
   data:{get_content:get_content, backup_type:backup_type}
  },
  "columnDefs":[
   {
    "orderable":false,
   },
  ],
  "pageLength": 10
 });

if(backupLord144 !=''){
$('.loader_x').hide();
}

}

 




// Delete content
$(document).on('click', '.delete', function(){
var id = $(this).attr("id");
var get_content = "Delete";

alert();


var datasend = "id="+ id + "&get_content=" + get_content;
if(confirm("Are you sure you want to delete this Content?")){

$('.loader_x').fadeIn(400).html('<br><div style="background:#eee; width:100%;height:30%;text-align:center"><img src="ajax-loader.gif">&nbsp;Please Wait, Your Data is being Deleted...</div>');

$.ajax({
url:"cancel_appointment.php",
method:"POST",
data:datasend,
dataType:"json",
success:function(msg){
$('.loader_x').hide();

if(msg.message == 'Deleted'){
alert('Appointment  Canceled Successfully');
$('.alert_server_response').html('<div class= "alert alert-success" style="background:#4CAF50;color:white;padding:14px 18px;border: none;width:100%;height:30px;text-align:center">Appointment Canceled Successfully</div>');
}

//check if Database is not Deleted
if(msg.error == 'deleted-error'){
alert('Error: Database Could not be Deleted');
$('.alert_server_response').html('<div class= "alert alert-danger" style="background:#f44336;color:white;padding:14px 18px;border: none;width:100%;height:30px;text-align:center">Error: Database Could not be Deleted</div>');
}

$('#contentModal').modal('hide');
backupLord144.ajax.reload();
    }
   });
  }
  else
  {
   return false;
  }
 });
 
});


</script>


<script>
$(document).ready(function(){
//$('.btn_call').click(function(){
$(document).on( 'click', '.btn_call', function(){ 





var id = $(this).data('id');
var email = $(this).data('email');
var fullname = $(this).data('fullname');
var phone_no  = $(this).data('phone_no');
var booking_id = $(this).data('booking_id');
var booking_version = $(this).data('booking_id');


$('.p_id').html(id);
$('.p_email').html(email);
$('.p_fullname').html(fullname);
$('.p_identity_value').val(id).value;
$('.p_email_value').val(email).value;
$('.p_fullname_value').val(fullname).value;
$('.p_phone_no_value').val(phone_no).value;
$('.p_phone_no').html(phone_no);

$('.p_booking_id_value').val(booking_id).value;
$('.p_booking_version_value').val(booking_id).value;
$('.p_booking_id_valuex').val(booking_id).value;


});

});






// clear Modal div content on modal closef closed
$(document).ready(function(){

$("#myModal_carto").on("hidden.bs.modal", function(){
    //$(".modal-body").html("");
 $('.mydata_empty').empty(); 
$('#qty').val(''); 
});



});


</script>




<script>
$(document).ready(function(){
//$('.btn_action').click(function(){
$(document).on( 'click', '.btn_action', function(){ 





var id = $(this).data('id');
var email = $(this).data('email');
var fullname = $(this).data('fullname');
var booking_id = $(this).data('booking_id');
var timing1 = $(this).data('timing1');
var timing2 = $(this).data('timing2');
var status = $(this).data('status');



$('.p_item_namex').html(fullname);
$('.p_timing1x').html(timing1);
$('.p_timing2x').html(timing2);
$('.p_statusx').html(status);


$('.p_idx').html(id);
$('.p_emailx').html(email);
$('.p_fullnamex').html(fullname);
$('.p_identity_valuex').val(id).value;
$('.p_email_valuex').val(email).value;
$('.p_fullname_valuex').val(fullname).value;


$('.p_booking_id_valuex').val(booking_id).value;





});

});






// clear Modal div content on modal closef closed
$(document).ready(function(){

$("#myModal_sales").on("hidden.bs.modal", function(){
    //$(".modal-body").html("");
 $('.mydata_emptyx').empty(); 
});



});











   $(document).ready(function(){
//$(".reloadData").click(function(){
$(document).on( 'click', '.reloadData', function(){ 

location.reload();

});

});








// Cancel Appointments
$(document).ready(function(){

//$('.booking_cancel_btn').click(function(){
$(document).on( 'click', '.booking_cancel_btn', function(){ 

// confirm start
if(confirm("Are you sure you want to Cancel Appointment ")){
var id = $(this).data('id');
var booking_id = $(this).data('booking_id');
var booking_version = $(this).data('booking_id');

$(".bookingloader-updates_"+id).fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait, Appointment is being Canceled...</div>');
var datasend = {id:id,booking_id:booking_id, booking_version:booking_version};
		$.ajax({
			
			type:'POST',
			url:'cancel_appointment.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){


$(".bookingloader-updates_"+id).hide();
$(".bookingresult-updates_"+id).html(msg);
//location.reload();

}
			
});
}

// confirm ends

                });


            });





// Approve Agora Videocall Links
$(document).ready(function(){

//$('.approve_btn').click(function(){
$(document).on( 'click', '.approve_btn', function(){ 

// confirm start
if(confirm("Are you sure you want to Approve and Email this Appointment VideoCall Link for this User")){
var id = $(this).data('id');
var booking_id = $(this).data('booking_id');
var booking_version = $(this).data('booking_id');
var fullname = $(this).data('booking_fullname');
var email = $(this).data('booking_email');
var channel = $(this).data('booking_channel');

//alert(channel);
//alert(email);
//return false;

$(".approveloader-updates_"+id).fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait, Appointment Videocall Link is being Approved...</div>');
var datasend = {id:id,booking_id:booking_id, booking_version:booking_version, fullname:fullname, email:email, channel:channel};
		$.ajax({
			
			type:'POST',
			url:'videocall_link_approval_emailing.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){


$(".approveloader-updates_"+id).hide();
$(".approveresult-updates_"+id).html(msg);
//location.reload();

}
			
});
}

// confirm ends

                });


            });








// Disable Agora Videocall Links
$(document).ready(function(){

//$('.disable_btn').click(function(){
$(document).on( 'click', '.disable_btn', function(){ 

// confirm start
if(confirm("Are you sure you want to Disable this Agora Video Link for this Customer/User")){
var id = $(this).data('id');
var booking_id = $(this).data('booking_id');
var booking_version = $(this).data('booking_id');

$(".disableloader-updates_"+id).fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait, Agora Videocall link is being Disabled...</div>');
var datasend = {id:id,booking_id:booking_id, booking_version:booking_version};
		$.ajax({
			
			type:'POST',
			url:'videocall_link_disable.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){


$(".disableloader-updates_"+id).hide();
$(".disableresult-updates_"+id).html(msg);
//location.reload();

}
			
});
}

// confirm ends

                });


            });


</script>














<input type="hidden" class="p_identity_value pidx"  value="">















<script>



$(document).ready(function(){

//$('.reschedule_btn').click(function(){
$(document).on( 'click', '.reschedule_btn', function(){ 



var id = $(this).data('id');
var p_date  =  $('#p_date').val();
var p_time = $(".p_time:checked").val();
var booking_id = $("#booking_idxx").val();


 if(p_date ==""){
alert('please Appointment Date');
}


 else if(p_time==undefined){
alert('please Pick Appointment Time');
}


else{

$("#loader_r").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait, Appointment Reschedule is being Updated...</div>');
var datasend = {id:id, p_date:p_date, p_time:p_time, booking_id:booking_id};
		$.ajax({
			
			type:'POST',
			url:'appointment_reschedule.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

//alert(msg);
$("#loader_r").hide();
$("#result_r").html(msg);

}
			
});
}


                });


            });




</script>

















<input type="hidden" class="p_booking_id_valuex book_pay_id" id="booking_idxx" value="">





 <!--Reshedule Booking Modal ends -->
  <div class="modal fade" id="myModal_r_booking" role="dialog">
    <div class="modal-dialog full-screen-modal">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Re-Schedule Appointments </h4>
        </div>
        <div class="modal-body">
<div class='row'>

<div class='well col-sm-12'>
<h3>Users Details</h3>
<b>Full Name: </b><span class='p_fullnamex'></span><br>
<b>Email: </b><span class='p_emailx'></span><br>
<b>Time & Date: </b><span class='p_timing1x'></span>, <span class='p_timing2x'></span>)<br>

</div>




</div>




 <div class="form-group col-sm-12">
              <label>Date: </label>
              <input type="date" class="col-sm-6 form-control" name="p_date" id="p_date"   placeholder="">
            </div>



<style>
.time_css{
background:#ccc;padding:6px;border-radius:20%;
}

.time_css:hover{
background:orange;color:black;
}



</style>


<div class='well'>
 <div class="form-group">
              <label style="" for="">
Pick Time</label><br>
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





</div>
<br>

                    <input type="button" id="reschedule_btn"  class="btn btn-primary reschedule_btn" value="Reschedule Appointment Now!" />



<div id='loader_r'></div>
<div id='result_r'></div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <!--Reshedule Booking Modal ends -->


</body>
</html>

