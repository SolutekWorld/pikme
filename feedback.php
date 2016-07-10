
<?php
include('session.php');
?>
<!DOCTYPE HTML>

<html>

<head>
  <title></title>
  <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="feedbackstyle.css">
 <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body style="margin: 0 auto"><div class="nav" style="width:100%; position:relative;">
<h2>Pikme</h2>
<div class="menu" style="position:absolute; top:0; right:0;">
<div class="dropbtn"><a href="home.php"> Home</a></div>
<div class="dropbtn"><a href="mybookings.php"> My Bookings</a></div>
<div class="dropbtn"><a href="about.php">About</a> </div>
<div class="dropdown">
<div class="dropbtn"><?php echo $login_session; ?></div>
  <div class="dropdown-content">
    <a href="#">Feedback</a>
    <a href="logout.php">Logout</a>
  </div>
</div>
<div class="icon">

    <a href="javascript:void(0);" onclick="myFunction()"><i class="fa fa-bars"></i></a>
  </div>
</div><!-- end of menu -->
</div><!-- end of nav -->
<br><br><br><br>
<form>
  <div class="formelement">
    <h1>Contact Form :</h1>
    <label>
      <span>Your name</span><input id="name" type="text" name="name" />
    </label>

    <label>
      <span>Email Address</span><input id="email" type="text" name="email" />
    </label>

    <label>
      <span>Subject</span><input id="subject" type="text" name="subject" />
    </label>

    <label>
      <span>Message</span><textarea id="feedback" name="feedback"></textarea>
      
    </label>
    <br>
    <button type="button" value="Submit Form" /><span>Submit</span></button>

  </div>
</form>
<script type="text/javascript">
	
	function myFunction() {
    document.getElementsByClassName("menu")[0].classList.toggle("responsive");
}
</script>
</body>

</html>
