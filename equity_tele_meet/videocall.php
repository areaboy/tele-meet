<?php
error_reporting(0);
include('settings.php');

require_once('data6rst.php');
$timerx = time();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
  <script src="jquery.min.js"></script>
<script src="../moment.js"></script>
	<script src="../livestamp.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <link rel="stylesheet" href="bootstrap.min.css" />
 <script src="bootstrap.min.js"></script>
 




    <title>Welcome to Agora Apointment Video Calls</title>

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

<style>
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            font-family: Apple Chancery, cursive;
        }

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }
    </style>



</head>

<body>
    <div>


 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Meetup</a>
    </div>
    <ul class="nav navbar-nav">
<li class="navbar-brand home_click imagelogo_li_remove" ><img class="img-rounded imagelogo_data" src="logo.png"></li>


 <li class="navgate_no"><a title='Dashboard' href="dashboard.php" style="color:white;font-size:14px;">
<button class="category_post1">Dashboard</button></a></li>


 <li class="navgate_no"><a title='Manage Appointment' href="dashboard_booking.php" style="color:white;font-size:14px;">
<button class="category_post1">Manage Appointment</button></a></li>

 <li class="navgate_no"><a title='Logout' href="logout.php" style="color:white;font-size:14px;">
<button class="category_post1">Logout</button></a></li>


<li class="nav-item"><center><a class="nav-link" style='color:white;font-size:18px;'>Tele Meet Appointment VideoCall</a></center></li>
    </ul>
  </div>
</nav> 


        



<br><br><br>


<h3>Welcome to Tele Meet Video Calls</b></h3>

<?php
if($agora_appid ==''){

echo "<div style='color:white;background:red;padding:10px;'>Agora VideoCall App Id is Empty. Please Edit Settings.php file and update it where appropriates</div>";
exit();
}


 $channel =strip_tags($_GET['channel_id']);

$pstmt = $db->prepare('SELECT * FROM booking where channel =:channel');
$pstmt->execute(array(':channel' =>$channel));
$total_count = $pstmt->rowCount();
if($total_count ==0){

echo "<div style='color:white;background:red;padding:10px;'>Videocall Channel Name not FOUND</div>";
exit();
}

$row = $pstmt->fetch();
$status = $row['status'];
$channel = $row['channel'];

if($status =='awaiting'){

echo "<div style='color:white;background:red;padding:10px;'>This Videcall Channel is set to Awaiting Approval. Please contact Site Admin OR goto <b>Manage Appointments</b> to Approve this VideoCall Channel first </div>";
exit();
}

if($status =='disabled'){

echo "<div style='color:white;background:red;padding:10px;'>This Videcall Channel is Disabled. Please contact Site Admin OR goto <b>Manage Appointments</b> to Approve this VideoCall Channel first </div>";
exit();
}


?>



<script src="agora-uikit.js"></script>

<div class='row'>

<div class='col-sm-1'></div>
<div class='col-sm-10'>

 <body>
    <agora-react-web-uikit
      style="width: 100%; height: 100vh; display: flex;"
      appId='<?php echo  $agora_appid; ?>'
      channel='<?php echo  $channel; ?>'
username='userOne'

    />


    <script>
      // select web component
      const el = document.querySelector('agora-react-web-uikit');
      
      // alternatively you can do this to pass props
      // el.appId = '<Your App ID>'
      
      // Add event listener and subscribe to custom event
      el.addEventListener('agoraUIKitEndcall', (e) => {
        console.log('hello from html')
        // handle endcall event
        el.remove();
      });
    </script>





</div>
<div class='col-sm-1'></div>

</div>





</body>
</html>
























</html>