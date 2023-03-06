

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



 <li class="navgate_no"><a title='Signup' href="signup.php" style="color:white;font-size:14px;">
<button class="category_post1">Signup</button></a></li>




      </ul>




    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->















<br><br>


<h2><center>Tele-Meet</center></h2>
<center>

<br><span style='font-size:20px;'>Users Login System</span><br><br>
</center>




    
  
        <div class="container">



            <div class="row">
<div class="col-sm-2"></div>

      <div class="col-sm-8">

               <script>


//login starts
$(document).ready(function(){
                $('#login_btn').click(function () {
                 
                    var email = $('#email').val();
                    var password = $('#password').val();
                    var emailaddress_pot = $('#emailaddress_pot').val();
                  

                    //preparing Email for validations
                    var atemail = email.indexOf("@");
                    var dotemail = email.lastIndexOf(".");

if(email==""){
alert('please Enter Email Address');
}

else  if (atemail < 1 || ( dotemail - atemail < 2 )){
alert("Please enter valid email Address")
}

else if(password==""){
alert('please Enter Password');
}

else{


          var form_data = new FormData();
          form_data.append('email', email);
          form_data.append('password', password);
          form_data.append('emailaddress_pot', emailaddress_pot);

                    $('.upload_progress').css('width', '0');
                    $('#btn').attr('disabled', 'disabled');
                    $('#loader').fadeIn(400).html('<br><span class="well" style="color:black"><img src="ajax-loader.gif">&nbsp;Please Wait, Your Data is being Processed...</span>');
                    $.ajax({
                        url: 'login_action.php',
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
                                    $('.upload_progress').css('width', upload_percent + '%');
                                    $('.upload_progress').text(upload_percent + '%');
                                }
                            }, false);
                            return xhr;
                        },
                        success: function (msg) {
                                
				$('#loader').hide();
				$('.result_data').fadeIn('slow').prepend(msg);
                                $('#alerts_login').delay(10000).fadeOut('slow');
                                $('#login_btn').removeAttr('disabled');


$('#email').val('');
$('#password').val('');


                        }
                    });
} // end if validate
                });
            });


// login ends here







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
              <label style="background:fuchsia;color:white;text-align:left;font-size:16px;" for="email">
<span class="fa fa-envelope-o"></span>Email</label>
              <input type="text" class="col-sm-12 form-control" id="email" name="email" placeholder="Enter email" value="rachaelbush@gmail.com">
            </div>

<br>
<br>
 <div class="form-group">
              <label style="background:fuchsia;color:white;text-align:left;font-size:16px;" for="psw">
<span class="fa fa-eye"></span> Password</label>
              <input type="password" class="col-sm-12 form-control" id="password" name="password" placeholder="Enter password" value="123">
            </div>


<style>
.secured_pot{ display:none; } /* hide because is spam protection */
</style>
<input class="secured_pot" type="text" name="emailaddress_pot" id="emailaddress_pot" />
 <div class="upload_progress" style="width:0%">0%</div>
<div id="loader"></div>
                        <div class="result_data"></div>

                    <input type="button" id="login_btn" class="pull-right logme_btn" value="login Now" />
                </form>
<br><br>
</div>

<!--end form-->




<br><br><br><br>



                </div>





<div class="col-sm-2"></div>
</div>


</div></body></html>























