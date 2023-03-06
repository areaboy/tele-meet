

<!DOCTYPE html>
<html lang="en">





<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="jquery.min.js"></script>
<script src="moment.js"></script>
	<script src="livestamp.js"></script>



  <link rel="stylesheet" href="bootstrap.min.css" />
  <script src="bootstrap.min.js"></script>




    <title>Tele Meet</title>

</head>

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




/* navigation */


.left-column-all {
    overflow-x: hidden;
    position: fixed;
    z-index: 9999;
    width:50vw;
    height: 100vh;
    background: url(home1.png) center no-repeat fuchsia;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -ms-background-size: cover;
    -o-background-size: cover;

/*
    margin-top: 0px;
    margin-left: 0px;
    */
}



@media screen and (max-width: 1440px) {
.left-column-all {
width:100vw;
width:100vh;

}

}
	
.right-column-all {
 margin-left:40vw;
/*
margin-left:47vw;
*/
}

@media screen and (max-width: 800px) {
.left-column-all {
    width: 100vw;
    position: inherit;
    background-position: inherit;
}

.right-column-all {
    margin-top: 0px;
margin-left: 0px;

}
}




/*ensure that category button does not jam about us or event section when on mobile start here. you can remove it if you
like. this will make product contain maximum of 8 categories button*/
@media screen and (max-width: 768px) {
.left-column-all {
   padding-bottom:700px;
}
}

@media screen and (max-width: 600px) {
.left-column-all {
   padding-bottom:700px;

}
}

/*ensure that category button does not jam about us or product section when on mobile ends here.*/




.section_padding {
padding: 60px 40px;
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



.logme_btn{

background: fuchsia;
color:white;
cursor: pointer;
padding:16px;
border-radius: 10%;

}
.logme_btn:hover{
background: orange;
color:black;

}	

</style>


<body>




    


    <div>

<!-- start column nav-->


<div class="text-center">
<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
 <div class="navbar-header">
      <a class="navbar-brand" href="#" style='font-size:20px;color:white;'>Tele-Meet</a>
    </div>
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




 <li class="navgate_no"><a title='Home' href="index.php" style="color:white;font-size:14px;">
<button class="category_post1">Home</button></a></li>



 <li class="navgate_no"><a title='Login' href="login.php" style="color:white;font-size:14px;">
<button class="category_post1">Login</button></a></li>




      </ul>




    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->















<br><br>


<h2><center>Tele-Meet</center></h2>
<center>

<br><span style='font-size:20px;'>Users Signup System</span><br><br>
</center>




    
  
        <div class="container">



            <div class="row">
<div class="col-sm-2"></div>

      <div class="col-sm-8">
 <script>

function imagePreview(e) 
{
 var readImage = new FileReader();
 readImage.onload = function()
 {
  var displayImage = document.getElementById('imageupload_preview');
  displayImage.src = readImage.result;
 }
 readImage.readAsDataURL(e.target.files[0]);
}


            $(function () {
                $('#save_btn').click(function () {
                    //var username = $('#username').val();
                    var email = $('#email').val();
                   // var phone_no = $('#phone_no').val();
                    var password = $('#password').val();
                    var confirm_password =$('#confirm-password').val();
                    var fullname = $('#fullname').val();
                    var file_fname = $('#file_content').val();
                    //var country = $('#country').val();
                    var emailaddress_pot = $('#emailaddress_pot').val();

                    //preparing Email for validations
                    var atemail = email.indexOf("@");
                    var dotemail = email.lastIndexOf(".");



if(password != confirm_password){
alert('Password Does not Match');
return false;
}

// start if validate
if(file_fname==""){
alert('please Select File to Upload');
}

else if(email==""){
alert('please Enter Email Address');
}

else  if (atemail < 1 || ( dotemail - atemail < 2 )){
alert("Please enter valid email Address")
}

else if(password==""){
alert('please Enter Password');
}

else if(fullname==""){
alert('please Enter Your Fullname');
}

else{

var fname=  $('#file_content').val();
var ext = fname.split('.').pop();
//alert(ext);

// add double quotes around the variables
var fileExtention_quotes = ext;
fileExtention_quotes = "'"+fileExtention_quotes+"'";

 var allowedtypes = ["PNG", "png", "gif", "GIF", "jpeg", "JPEG", "BMP", "bmp","JPG","jpg"];
    if(allowedtypes.indexOf(ext) !== -1){
//alert('Good this is a valid Image');
}else{
alert("Please Upload a Valid image. Only Images Files are allowed");
return false;
    }

          var form_data = new FormData();
          form_data.append('file_content', $('#file_content')[0].files[0]);
          form_data.append('file_fname', file_fname);
          form_data.append('email', email);
          form_data.append('fullname', fullname);
          form_data.append('password', password);
          form_data.append('emailaddress_pot', emailaddress_pot);
                    $('.upload_progress').css('width', '0');
                    $('#btn').attr('disabled', 'disabled');
                    $('#loader').fadeIn(400).html('<br><span class="well" style="color:black"><img src="ajax-loader.gif">&nbsp;Please Wait, Your Data is being Submitted</span>');
                    $.ajax({
                        url: 'signup_action.php',
                        data: form_data,
                        processData: false,
                        contentType: false,
                        ache: false,
                        type: 'POST',
                        xhr: function () {
                      //var xhr = new window.XMLHttpRequest();
                            var xhr = $.ajaxSettings.xhr();
                            xhr.upload.addEventListener("progress", function (event) {
                                var upload_percent = 0;
                                var upload_position = event.loaded;
                                var upload_total  = event.total;

                                if (event.lengthComputable) {
                                    var upload_percent = upload_position / upload_total;
                                    upload_percent = parseInt(upload_percent * 100);
                                  //upload_percent = Math.ceil(upload_position / upload_total * 100);
                                    //$('.upload_progress').css('width', upload_percent + '%');
document.getElementsByClassName("upload_progress")[0].style.width(upload_percent + '%');
//document.getElementsByClassName('upload_progress')[0].style.width(upload_percent + '%');

                                    $('.upload_progress').text(upload_percent + '%');

//document.getElementsByClassName("upload_progress")[0].style.width == upload_percent + '%';
/*
document.getElementsByClassName('upload_progress')[0].style.width(upload_percent + '%');
document.getElementsByClassName('upload_progress')[0].text(upload_percent + '%');


*/
//document.getElementsByClassName('upload_progress')[0] - would select the first element with this class. 
//Then instead of .width() you should use element.style.width(upload_percent + '%')


                                }
                            }, false);
                            return xhr;
                        },
                        success: function (msg) {
                                $('#box').val('');
				$('#loader').hide();
				$('.result_data').fadeIn('slow').prepend(msg);
				$('#alertdata_uploadfiles').delay(5000).fadeOut('slow');
                                $('#alerts_reg').delay(5000).fadeOut('slow');
                                $('#alertdata_uploadfiles2').delay(20000).fadeOut('slow');
                                $('#save_btn').removeAttr('disabled');


//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (successfully) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/successfully/g) || []).length;
//alert(bcount);

if(bcount > 0){
$('#file_fname').val('');
$('#email').val('');
$('#fullname').val('');
$('#password').val('');
$('#confirm-password').val('');
}




                        }
                    });
} // end if validate
                });
            });




// start checking for email availability
$(document).ready(function(){
    $('#email').keyup(function(){ 
       var email = $('#email').val();
 if(email.length < 2) {
// ensure that user must type something first at least 2 characters before fetching database records
return false;
}
       var token = 101201;
        var ShowResult1 = $('#email_check');
            ShowResult1.html('<font color=green>Checking Email Availability...</font> <img src="loader.gif" align="absmiddle"> '); // you can use loading animation here
           var datasend = "email="+ email + "&token=" + token;
            $.ajax({
            type : 'POST',
            data : datasend,
            url  : 'email_check.php',
            success: function(data){

                if(data == 0){
  ShowResult1.html('<br><span class="well alert alert-success"><font color=green>This Email Address <b>('+email+')</b> is Available</font></span>');
                }
                else if(data > 0){
  ShowResult1.html('<br><span class="well alert alert-warning"><font color=red>This Email Address <b>('+email+')</b> is Taken....</font></span>');
                }
                else{
  ShowResult1.html('<br><span class="well alert alert-warning"><font color=red>We have problem with your Query.</font></span>');
                }
            }

            });
    });
});

// end checking for email availability

        </script>
   
<style>
.upload_progress{
padding:10px;
background:green;
color:white;
cursor:pointer;
min-width:30px;
}

#imageupload_preview
{
max-height:200px;
max-width:200px;
}
</style>


<!--start form-->
<div class='well'>



<form id="" method="post">

<div class="form-group">
<label style="padding:6px;color:white;background:fuchsia;text-align:left;font-size:16px;">Select Profile Photo: </label>
<input style="background:#c1c1c1;" class="col-sm-12 form-control" type="file" id="file_content" name="file_content" accept="image/*" onchange="imagePreview(event)" />
 <img id="imageupload_preview"/>
</div>


 <div class="form-group">
              <label style="padding:6px;color:white;background:fuchsia;text-align:left;font-size:16px;" for="email">
<span class="fa fa-envelope-o"></span>Email</label>
              <input type="text" class="col-sm-12 form-control" id="email" name="email" placeholder="Enter email">
<div class="result1" id="email_check"></div>
            </div>


 <div class="form-group">
              <label style="padding:6px;color:white;background:fuchsia;text-align:left;font-size:16px;" for="psw">
<span class="fa fa-eye"></span> Password</label>
              <input type="password" class="col-sm-12 form-control" id="password" name="password" placeholder="Enter password">
            </div>

 <div class="form-group">
              <label style="padding:6px;color:white;background:fuchsia;text-align:left;font-size:16px;" for="psw">
<span class="fa fa-eye"></span> Confirm Password</label>
              <input type="password" class="col-sm-12 form-control" id="confirm-password" name="confirm-password" placeholder=" Confirm Password">
            </div>


<style>
.secured_pot{ display:none; } /* hide because is spam protection */
</style>
<input class="secured_pot" type="text" name="emailaddress_pot" id="emailaddress_pot" />




<div class="form-group">
              <label style="padding:6px;color:white;background:fuchsia;text-align:left;font-size:16px;" for="fullname">
<span class="fa fa-male"></span> FullName</label>
              <input type="text" class="col-sm-12 form-control" id="fullname" name="fullname" placeholder="Enter Full Name">
            </div>


                    <div class="form-group">
                            <div class="upload_progress" style="width:0%">0%</div>

                        <div id="loader"></div>
                        <div class="result_data"></div>
                    </div>

                    <input type="button" id="save_btn" class="pull-right logme_btn" value="Register" />
                </form>

<br><br>
</div>

<!--end form-->



<br><br><br><br><br><br>




                </div>





<div class="col-sm-2"></div>
</div>


</div></body></html>























