<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>LUOE-Examinee </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
 <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>


 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
 <!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

</head>
<?php
include_once 'dbConnection.php';
?>
<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">L U O E</span></div>
<div class="col-md-4 col-md-offset-2">
 <?php
 include_once 'dbConnection.php';
session_start();
  if(!(isset($_SESSION['email']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];
$email=$_SESSION['email'];

include_once 'dbConnection.php';
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="account.php?q=1" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</button></a></span>';
}?>
</div>
</div></div>
<div class="bg">

<!--navigation menu-->
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(@$_GET['q']==3) echo'class="active"'; ?> ><a href="account.php?q=3"><span class="fas fa-home" aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a href="account.php?q=1"><span class="fas fa-calendar-plus" aria-hidden="true"></span>&nbsp;Exam</a></li>
		    <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="account.php?q=2"><span class="fas fa-book" aria-hidden="true"></span>&nbsp;History</a></li>
        <li <?php if(@$_GET['q']==4) echo'class="active"'; ?>><a href="account.php?q=4"><span class="fas fa-comment" aria-hidden="true"></span>&nbsp;Feedback</a></li></ul>
        
  
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!--navigation menu closed-->
<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">



<!--home start-->
<?php if(@$_GET['q']==1) {

echo "<h3 class='text-center' style='color:Green'><b>Available Tests</b></h3>";

$result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
echo  '<div class="green"><div class="panel"><table class="table table-striped title1">
<tr style="color:Green"><th><b>S.N.</b></th><th><b>Topic</b></th><th><b>Total Question</b></th><th><b>Intro</b></th><th></th></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$total = $row['total'];
	$sahi = $row['sahi'];
  $intro = $row['intro'];
	$eid = $row['eid'];
$q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98');
$rowcount=mysqli_num_rows($q12);	
if($rowcount == 0){
	echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$intro.'</td>
	<td><b><a href="account.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'"<input type="submit" style="margin:0px;background:#009e15; border-radius:7px; color:white; padding: 5px 19px; text-decoration: none;" aria-hidden="true"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></input></a></b></td></tr>';
}
else
{
echo '<tr style="color:#004d09"><td>'.$c++.'</td><td>'.$title.'&nbsp;<span title="This exam has been already solved by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td>'.$total.'</td><td>'.$intro.'</td>
	<td><b><a href="update.php?q=quizre&step=25&eid='.$eid.'&n=1&t='.$total.'"<input type="submit" style="margin:0px;background:#008a8a; border-radius:7px; color:white; padding: 5px 10px; text-decoration: none;" aria-hidden="true"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Restart</b></span></input></a></b></td></tr>';
}                                                                              
}
$c=0;
echo '</table></div></div>';

}?>
<!--<span id="countdown" class="timer"></span>
<script>
var seconds = 40;
    function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds; 
    }
    document.getElementById('countdown').innerHTML = minutes + ":" +    remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown').innerHTML = "Buzz Buzz";
    } else {    
        seconds--;
    }
    }
var countdownTimer = setInterval('secondPassed()', 1000);
</script>-->

<!--home closed-->

<!--quiz start-->
<?php
if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
$eid=@$_GET['eid'];
$sn=@$_GET['n'];
$total=@$_GET['t'];
$q=mysqli_query($con,"SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' " );
echo '<div class="panel" style="margin:5%">';
while($row=mysqli_fetch_array($q) )
{
$qns=$row['qns'];
$qid=$row['qid'];
echo '<b>Question &nbsp;'.$sn.'&nbsp;:<br><br>'.$qns.' <br>';
}
$q=mysqli_query($con,"SELECT * FROM options WHERE qid='$qid' " );
echo '<form action="update.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'" method="POST"  class="form-horizontal">
<br />';

while($row=mysqli_fetch_array($q) )
{
$option=$row['option'];
$optionid=$row['optionid'];
echo'<input type="radio" name="ans" value="'.$optionid.'"><b> '.$option.' </b><br><br>';
}
echo'<br /><button type="submit" class="btn btn-primary" style="border-radius:0%"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</button></form></div>';
//header("location:dash.php?q=4&step=2&eid=$id&n=$total");
}
//result display
if(@$_GET['q']== 'result' && @$_GET['eid']) 
{
$eid=@$_GET['eid'];
$q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$email' " )or die('Error157');
echo  '<div class="panel">
<center><h1 class="title" style="color:#006618">Result</h1><center><br /><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';

while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
$w=$row['wrong'];
$r=$row['sahi'];
$qa=$row['level'];
echo '<tr style="color:#66005f"><td>Total Questions</td><td>'.$qa.'</td></tr>
      <tr style="color:#00665d"><td>right Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td><td>'.$r.'</td></tr> 
	  <tr style="color:#cc0902"><td>Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td><td>'.$w.'</td></tr>
	  <tr style="color:#9aa802"><td>Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>'.$r.'</td></tr>';
}
$q=mysqli_query($con,"SELECT * FROM rank WHERE  email='$email' " )or die('Error157');
while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
echo '<tr style="color:#b06f00"><td>Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>'.$r."/".$qa.'</td></tr>';
}
echo '</table></div>';

}
?>
<!--quiz end-->
<?php
//history start
if(@$_GET['q']== 2) 
{
$q=mysqli_query($con,"SELECT * FROM history WHERE email='$email' ORDER BY date DESC " )or die('Error197');
echo  '<div class="green"><div class="panel title">
<table class="table table-striped title1" >
<tr style="color: Green"><th><b>S.N.</b></th><th><b>Exams</b></th><th><b>Question Solved</b></th><th><b>Right</b></th><th><b>Wrong<b></th><th><b>Score</b></th>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$eid=$row['eid'];
$s=$row['score'];
$w=$row['wrong'];
$r=$row['sahi'];
$qa=$row['level'];
$q23=mysqli_query($con,"SELECT title FROM quiz WHERE  eid='$eid' " )or die('Error208');
while($row=mysqli_fetch_array($q23) )
{
$title=$row['title'];
}
$c++;
echo '<tr><td>'.$c.'</td><td>'.$title.'</td><td>'.$qa.'</td><td>'.$r.'</td><td>'.$w.'</td><td>'.$r.'/'.$qa.'</td></tr>';
}
echo'</table></div></div>';
}


if(@$_GET['q']== 3) 
{

  echo '<section class="home-section">
    
  <br><br>
  <div class="luoe">
  <img src="image/examinee-logo.png"/>
  <p>Welcome to Laguna University Online Examination System</p>
  </div>
  <br>
  <div class="benefit">
      <p>BENEFITS OF CONDUCTING AN ONLINE EXAMINATION</p>
  </div>
  <div class="box-container">
      <div class="box1">
          <i class="fas fa-mobile"></i>
          <h3>Technologically Advanced</h3>
          <p>The all-pervasive nature of technology and its impact on the way of life is blurring the difference between real and virtual. There is a considerably lower use of pen and paper in the digital age.</p>
      </div>
  
      <div class="box1">
          <i class="fas fa-check-square"></i>
          <h3>Easy-to-use</h3>
          <p>The ease-of-use for the administration and the students. The examiners can easily set up the questionnaire, determine the grading and send invites to students. Meanwhile, students can take exams remotely.</p>
      </div>
  
      <div class="box1">
          <i class="fas fa-history"></i>
          <h3>Quick Turnaround Time</h3>
          <p>Online examination system is that it reduces the time invested in overseeing the entire examination process. </p>
      </div>
  
      <div class="box1">
          <i class="fas fa-lock"></i>
          <h3>Highly Secure</h3>
          <p>There is no room for conducting malicious activities to rig the system and produce incorrect results. </p>
      </div>
  </div>
  
  <div class="benefit">
      <p>SCOPE AND OBJECTIVE OF ONLINE EXAMINATION</p>
  </div>
  <div class="box-container">
  <div class="box1">
  <h3>Conduct exams effortless</h3>
  <p>The functionalities of an exam software such as user-friendly dashboard, multiple languages, support for multiple question types and formats, detailed reporting, automatic instant results help in smooth conduction.</p>
  </div>
  
  <div class="box1">
  <h3>Prevents cheatings</h3>
  <p>Cheating amongst the test-takers in the examination hall is one of the major drawbacks of pen paper-based assessment. Online examination managed avoids the possibilities of secretly using unfair means to get the right answers. </p>
  </div>
  
  <div class="box1">
  <h3>Promote social interaction between the test taker and experts</h3>
  <p>An online environment promotes exam preparation with experts or peers as they can review the course content together. </p>
  </div>
  
  <div class="box1">
  <h3>Reduce administrative burden</h3>
  <p>Organizing and running exams online not only reduces an organization’s administrative burden but also saves cost and time. Online examination with its objective to make evaluation massive but simple, cost-effective and faster has replaced the pen paper-based assessment. </p>
  </div>
  </div>
  
  <div class="luoe1">
  <p>Online Examination System is a technology-driven way to simplify examination activities like defining exam patterns with question banks, defining exam timer, objective/ subjective question sections, conducting exams using the computer or mobile devices in a paperless manner.</p>
  <br>
  <p>Instructions:</p>
  <p>✓ All questions are compulsary.</p>
  <p>✓ Make sure that you have correctly attempted all the questions before submissions. </p>
  <p>✓ Make sure you clicked on submit button to successfully complete the test.</p>
  </div>
  </div>
  
  
  
  
  </section>';}
?>


<?php if(@$_GET['q']==4) {
  include_once 'dbConnection.php';


echo '<div class="row" style="font-family:\'typo\'; color:#ebfcef">
<div class="col-md-3"></div>
<div class="col-md-6 panel" style="background: #004d09; min-height:430px;">
<h2 align="center" style="font-family:\'typo\'; color:#dcf7e5;">FEEDBACK</h2>
<div style="font-size:14px">';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $id=uniqid();
  $date=date("Y-m-d");
  $time=date("h:i:s a");
  $feedback = $_POST['feedback'];
  $q=mysqli_query($con,"INSERT INTO feedback VALUES  ('$id' , '$name', '$email' , '$subject', '$feedback' , '$date' , '$time')")or die ("Error");

        echo "<script> Swal.fire({
          title: 'Thank you for your valuable feedback!',
          icon: 'success',
          confirmButtonText: 'OK'
        })</script>";
        

        $con->close();
  }

echo' 

  <div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
  
  </div><div class="col-md-1"></div></div>
  
  <form role="form"  method="post" action="">
  <div class="row">
  <div class="col-md-3"><b>Name:</b></div>
  <div class="col-md-9">
  <!-- Text input-->
  <div class="form-group">
    <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text" style="background-color:#dcf7e5;">
  </div>
  </div>
  <div class="col-md-3"><b>Subject:</b></div>
  <div class="col-md-9">
  <!-- Text input-->
  <div class="form-group">
     <input id="name" name="subject" placeholder="Enter subject" class="form-control input-md" type="text" style="background-color:#dcf7e5;">    
  </div>
  </div>
  </div><!--End of row-->
  
  <div class="row">
  <div class="col-md-3"><b>E-Mail address:</b></div>
  <div class="col-md-9">
  <!-- Text input-->
  <div class="form-group">
    <input id="email" name="email" placeholder="Enter your email" class="form-control input-md" type="email" style="background-color:#dcf7e5;">    
   </div>
  </div>
  </div><!--End of row-->
  
  <div class="form-group"> 
  <textarea rows="5" cols="8" name="feedback" style="background-color:#dcf7e5;" class="form-control" placeholder="Write feedback here..."></textarea>
  </div>
  <div class="form-group" align="center">
  <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="color:white;width:150px;
  height:40px;" />
  </div>
  </form>';
}?>

</div></div></div></div>
<!--Footer start-->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>
