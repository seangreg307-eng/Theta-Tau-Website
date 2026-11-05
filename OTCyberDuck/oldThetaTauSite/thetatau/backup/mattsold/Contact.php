<!DOCTYPE html>
<html>
<head>
<title>&Theta;&Tau;, Omicron Delta Chapter</title>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Fenix">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Medula+One">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="js/galleria/themes/twelve/galleria.twelve.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery.js"></script>
<script src="js/galleria/galleria-1.3.3.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0; user-scalable=0;">
<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>




 





             

<div id="container" >

<div id="header">
<image id="back-bg"src="images/theta-tau-crest.png" >
<p style="font-family: Fenix; font-size: 200px; color: #c3a41e; position: absolute; left: 20%; top: 5px;">Theta Tau</p>
<p style="font-family: Medula One; font-size: 50px; color: #9E9B97; position: absolute; left: 55%; top: 200px;">Omicron Delta Chapter</p>
<image id="gears" src="images/Gears.png">
<div id="navy">
      <div class="bs-docs-section clearfix">
        <div class="row">
          <div class="col-lg-12">


              <div class="navbar navbar-inverse">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.html">Theta Tau</a>
                </div>
                <div class="navbar-collapse collapse navbar-responsive-collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="Recruitment.html">Recruitment</a></li>
                    <li><a href="Brothers.html">Brothers</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="Upcoming_Events.html">Upcoming</a></li>
                        <li><a href="Past_Events.html">Past	</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="navbar-form navbar-right">
                    <input type="text" class="form-control col-lg-8" placeholder="Search">
                  </form>
                  <ul class="nav navbar-nav navbar-right">
<li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">History<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="Local_History.html">Local</a></li>
                        <li><a href="National_History.html">National</a></li>
                      </ul>
                    </li>                    
<li><a href="Contact.php">Contact</a></li>
                    
                  </ul>
                </div><!-- /.nav-collapse -->
              </div><!-- /.navbar -->
</div>
</div>
</div>
</div>
</div>
</div>



<div id="menu" >
<div class="panel panel-primary side-panel">
              <div class="panel-heading">
                <h2 class="panel-title">Quick Links</h2>
              </div>
              <div class="panel-body">
                <li><a class="links" href="/test/Recruitment.html">Rush Spring 2014!</a></li><br></br>
<li><a class="links" href="http://www.thetatau.org/">National Website</a></li>
<li><a class="links" href="http://www.soe.rutgers.edu/">Rutgers School of Engineering</a></li>
<li><a class="links" href="http://getinvolved.rutgers.edu/fraternities-and-sororities">Rutgers Fraternities and Sororities Information</a></li>

              </div>
            </div>
</div>

<div id="content" >
<div class="text contact-p">
<h1>Contact Us!</h1>
<p>Please contact us by filling out the form.  We just need your name, major, graduation year, email address, and phone number.  We will never give away your information.  It is safe with us!</p>
 
</div>

<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
<div class="contact-forms">
    <form  action="" method="POST" enctype="multipart/form-data">     
<input type="hidden" name="action" value="submit" > 
    Your name:<br> 
<input name="name" type="text" value="" size="30"class="form-control" placeholder="John Smith"/><br> 
    Your Major and Graduation Year:<br> 
    <input name="Mgrad" type="text" value="" size="30"class="form-control" placeholder="MechE,2015"/><br> 
    Your email:<br> 
    <input name="email" type="text" value="" size="30" class="form-control" placeholder="yourname@email.com"/><br> 
    Your Phone Number:<br> 
<input name="telephone" type="text" value="" size="30"class="form-control" placeholder="555-555-5555"/><br> 
    Questions or Concerns?:<br> 
    <textarea name="comments" rows="7" cols="30" class="form-control"></textarea><br> 
    <input class="btn btn-primary"type="submit" value="Submit!"/> 
    </form> 
</div>
    <?php 
	}
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $mgrad=$_REQUEST['Mgrad']; 
    $telephone=$_REQUEST['telephone']; 
    $comments=$_REQUEST['comments']; 
$message="Name: ".$name."\r\nEmail: ".$email."\r\nPhone Number:".$telephone."\r\nMajor and Grad Year: ".$mgrad."\r\nComments:".$comments;
$message = wordwrap($message, 70, "\r\n");
    if (($name=="")||($email=="")||($telephone=="") || ($mgrad=="")) 
        { 
        echo "Name, email, major, grad year, and phone number are required please fill <a href=\"\">the form</a> again, by clicking the Contact Link."; 
        } 
    else{       
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="RUSH FORM RESPONSE"; 
        mail("ruthetatau@gmail", $subject, $message, $from); 
        echo "Thank you for contacting us. We will be in touch with you very soon!"; 
        

        } 
    }   
?> 


</div>

<div id="footer">
Theta Tau Omicron Delta Chapter

</div> 



</div>






</body>
<script src="js/bootstrap.min.js"></script>
</html>
