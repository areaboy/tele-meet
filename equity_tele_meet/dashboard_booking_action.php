
<?php 

// check for int, string etc..

error_reporting(0);
include('settings.php');
include('data6rst.php');

// get total count
$pstmt = $db->prepare('SELECT * FROM booking');
$pstmt->execute();
$total_count = $pstmt->rowCount();

// ensure that they cotain only alpha numericals
if(strip_tags(isset($_POST["get_content"]))){
$get_content = strip_tags($_POST["get_content"]);
if($get_content == 'get_data'){

$sql_query = '';
$error = '';
$message='';
$response_bl = array();

$sql_query .= "SELECT * FROM booking ";
if(strip_tags(isset($_POST["search"]["value"]))){

$search_value= strip_tags($_POST["search"]["value"]);
$sql_query .= 'WHERE fullname LIKE "%'.$search_value.'%" ';
$sql_query .= 'OR email_address LIKE "%'. $search_value.'%" ';
$sql_query .= 'OR timing LIKE "%'. $search_value.'%" ';
$sql_query .= 'OR status LIKE "%'. $search_value.'%" ';
$sql_query .= 'OR timing1 LIKE "%'. $search_value.'%" ';
  }



//ensure that order post is set
$start = $_POST['start'];
$length = $_POST['length'];
$draw= $_POST["draw"];
if(strip_tags(isset($_POST["order"]))){
$order_column = strip_tags($_POST['order']['0']['column']);
$order_dir = strip_tags($_POST['order']['0']['dir']);

$sql_query .= 'ORDER BY '.$order_column.' '.$order_dir.' ';
}
else{
$sql_query .= 'ORDER BY id DESC ';
}
if($length != -1){
$sql_query .= 'LIMIT ' . $start . ', ' . $length;
}

$pstmt = $db->prepare($sql_query);
$pstmt->execute();
$rows_count = $pstmt->rowCount();




while($row = $pstmt->fetch()){
$rows1 = array();
$id = $row['id'];
$fullname = $row['fullname'];
$email_address = $row['email_address'];
$booking_id = $row['id'];
$post_id = $row['post_id'];
$owner_id = $row['owner_id'];
$timing = $row["timing"];
$email_count = $row["email_count"];

$p_time = $row['timing1'];
$status = $row['status'];
$channel = $row['channel'];
$timing1 = $row['timing1'];
$timing2 = $row['timing2'];

$time_all = "$timing2";


$str = $site_url;
$parts = explode('/', $str);
$rx = $parts[0];

if($rx == 'localhost'){
$site_url_check = 'http';
}else{
$site_url_check = 'https';
}

if($status =='awaiting'){

$stat  ="<span class='status_css'>Awaiting Approval</span>";

}


if($status =='approved'){

$stat  ="<span class='status_css2'>Approved</span>";

}


if($status =='disabled'){

$stat  ="<span class='status_css3'>Link Disabled</span>";

}

$videocall_link_approval= "
<button id='' title='Approve Videocall Links' class='approve_btn btn btn-primary btn-xs'
 data-id='$id'
 data-booking_id='$booking_id'
data-booking_version='$booking_id'
data-booking_fullname='$fullname'
data-booking_email='$email_address'
data-booking_channel='$channel'

 >
 Approve & Email Videocall Links</button>
 <div class='approveloader-updates_$id'></div>
   <div class='approveresult-updates_$id'></div>";




$videocall_link_disabled= "
<button id='' title='Disable Videocall Links' class='disable_btn btn btn-danger btn-xs'
 data-id='$id'
 data-booking_id='$booking_id'
data-booking_version='$booking_id'

 >
 Disable Videocall Links</button>
 <div class='disableloader-updates_$id'></div>
   <div class='disableresult-updates_$id'></div>";



$booking_appointment_videocall_link ="<a target='_blank' href='$site_url_check://$site_url/videocall.php?channel_id=$channel'> </b>$site_url_check://$site_url/videocall.php?channel_id=$channel</b></a> <br>
 <b>Status:</b> $stat  $videocall_link_disabled $videocall_link_approval";
       



    
$appointment_cancel= "
<button id='' title='Cancel Appointment' class='booking_cancel_btn btn btn-danger btn-xs'
 data-id='$id'
 data-booking_id='$booking_id'
data-booking_version='$booking_id'
 >
 Cancel Appointment</button>
 <div class='bookingloader-updates_$id'></div>
   <div class='bookingresult-updates_$id'></div>";


              


$rows1[] = $fullname;
$rows1[] = $email_address;
$rows1[] = $time_all;
$rows1[] = $booking_appointment_videocall_link;
$rows1[] = '<span data-livestamp="'.$timing.'"></span>';


$rows1[] = "
<button id='' title='Cancel Appointment' class='booking_cancel_btn btn btn-danger btn-xs'
 data-id='$id'
 data-booking_id='$booking_id'
data-booking_version='$booking_id'
 >
 Cancel Appointment</button>
 <div class='bookingloader-updates_$id'></div>
   <div class='bookingresult-updates_$id'></div>


<button type='button'  class='btn btn-warning btn-xs btn_action' data-toggle='modal' data-target='#myModal_r_booking'
data-id='$id'
data-fullname='$fullname'
data-booking_id='$booking_id'
data-booking_version='$booking_id'
data-email='$email_address'
data-fullname='fullname'
data-timing1='$timing1'
data-timing2='$timing2'
data-status='$status'
>Reschedule Appointment</button>

";





$response_bl[] = $rows1;
}

$data = array(
"draw"    => $draw,
"recordsTotal"  => $rows_count,
"recordsFiltered" => $total_count,
"data"    => $response_bl);
}// you can close this

if($_POST["get_content"] == 'get_one_content')
 {
  $id =  $_POST["id"];
  $sql_query = "SELECT * FROM booking WHERE id = '$id'";
  $pstmt = $db->prepare($sql_query);
  $pstmt->execute();
  while($row = $pstmt->fetch()){
   $data['given_name'] = $row['given_name'];
   $data['family_name'] = $row['family_name'];

  }
 }

 //}
 
 



// delete content
if(strip_tags($_POST["get_content"]) == 'Delete'){
$error='';
$error1='';
$message='';
$pstmt_del='';	
$id = intval($_POST["id"]);
  
$pstmt_del = $db->prepare('DELETE from booking where id=:id');
$pstmt_del->execute(array(':id' =>$id));
$message = 'Deleted';
if($pstmt_del){
    $data = array(
    'error'   => $error,
    'message'  =>$message);
	}else{
	$data = array(
	'error'   => $error,
    'message'   => 'deleted-error'
    );
	}	
 }
 // end delete contents

 echo json_encode($data);
}



?>