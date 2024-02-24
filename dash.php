<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>LUOE-Admin </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <link  rel="stylesheet" href="css/home_style.css">
 <link  rel="stylesheet" href="css/dashboard.css">
 <link  rel="stylesheet" href="css/course.css">
 <script src="js/jquery.js" type="text/javascript"></script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

<script>
$(function () {
    $(document).on( 'scroll', function(){
        console.log('scroll top : ' + $(window).scrollTop());
        if($(window).scrollTop()>=$(".logo").height())
        {
             $(".navbar").addClass("navbar-fixed-top");
        }

        if($(window).scrollTop()<$(".logo").height())
        {
             $(".navbar").removeClass("navbar-fixed-top");
        }
    });
});</script>
</head>

<body  style="background:#eee;">
<div class="header1">
<div class="row">
<div class="col-lg-6">
<span class="logo">L U O E</span></div>
<?php
 include_once 'dbConnection.php';
session_start();
$email=$_SESSION['email'];
  if(!(isset($_SESSION['email']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];

include_once 'dbConnection.php';
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="#" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</button></a></span>';
}?>

</div></div>
<!-- admin start-->

<!--navigation menu-->
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
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
        <li <?php if(@$_GET['q']==0) echo'class="active"'; ?>><a href="dash.php?q=0">Home<span class="sr-only">(current)</span></a></li>
        <li <?php if(@$_GET['q']==7) echo'class="active"'; ?>><a href="dash.php?q=7">Dashboard</a></li>
        <li <?php if(@$_GET['q']==8) echo'class="active"'; ?>><a href="dash.php?q=8">Course</a></li>
        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a href="dash.php?q=1">Manage Examinee</a></li>
        <li <?php if(@$_GET['q']==4) echo'class="active"'; ?>><a href="dash.php?q=4">Add Exams</a></li>
        <li <?php if(@$_GET['q']==6) echo'class="active"'; ?>><a href="dash.php?q=6">Manage Exams</a></li>
		    <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="dash.php?q=2">User Rankings</a></li>
        <li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a href="dash.php?q=3">Feedback</a></li>
        
        
      </ul>
          </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--navigation menu closed-->
<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">
<!--home start-->

<?php if(@$_GET['q']==0) {

 echo '<section class="home-section">
    
  <br><br>
  <div class="luoe4">
  <img src="image/luoe.png"/><br><br>
  <p>Welcome to Laguna University Online Examination System</p>
  </div>
  <br>
  <div class="benefit1">
      <p>BENEFITS OF CONDUCTING AN ONLINE EXAMINATION</p>
  </div>
  <div class="box-container">
      <div class="box2">
          <i class="fas fa-mobile"></i>
          <h3>Technologically Advanced</h3>
          <p>The all-pervasive nature of technology and its impact on the way of life is blurring the difference between real and virtual. There is a considerably lower use of pen and paper in the digital age.</p>
      </div>
  
      <div class="box2">
          <i class="fas fa-check-square"></i>
          <h3>Easy-to-use</h3>
          <p>The ease-of-use for the administration and the students. The examiners can easily set up the questionnaire, determine the grading and send invites to students. Meanwhile, students can take exams remotely.</p>
      </div>
  
      <div class="box2">
          <i class="fas fa-history"></i>
          <h3>Quick Turnaround Time</h3>
          <p>Online examination system is that it reduces the time invested in overseeing the entire examination process. </p>
      </div>
  
      <div class="box2">
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
  
  <div class="luoe5">
    <p>Online Examination System is a technology-driven way to simplify examination activities like defining exam patterns with question banks, defining exam timer, objective/ subjective question sections, conducting exams using the computer or mobile devices in a paperless manner.</p>
    <br>
    <p>Features:</p>
    <p>✓ Course</p>
    <p>✓ Add Exam</p>
    <p>✓ Manage Exam </p>
    <p>✓ Manage Examinee</p>
    <p>✓ Ranking</p>
    <p>✓ Feedback</p>
    </div>
  </div>
  
  
  
  
  </section>';}



//ranking start
if(@$_GET['q']== 2) 
{
$q=mysqli_query($con,"SELECT * FROM history  ORDER BY sahi DESC, level DESC" )or die('Error223');
echo  '<div class="panel title">
<table class="table table-striped title1" >
<tr style="color:#04015c";><th><b>Rank</b></th><th><b>Name</b></th><th><b>Score</b></th></tr>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$e=$row['email'];
$s=$row['sahi'];
$l=$row['level'];

$q12=mysqli_query($con,"SELECT * FROM user WHERE email='$e' " )or die('Error231');
while($row=mysqli_fetch_array($q12) )
{
$name=$row['name'];
$gender=$row['gender'];
$college=$row['college'];
}
$c++;
echo '<tr><td style="color:#04015c"><b>'.$c.'</b></td><td>'.$name.'</td><td>'.$s."/".$l.'</td>';
}
echo '</table></div>';}
?>



<!--home closed-->
<!--users start-->
<?php if(@$_GET['q']==1) {

$result = mysqli_query($con,"SELECT * FROM user") or die('Error');
echo  '<div class="panel"><table class="table table-striped title1">
<tr style="color:#04015c"><th><b>S.N.</b></th><th><b>Name</b></th><th><b>Gender</b></th><th><b>Course</b></th><th><b>Email</b></th><th><b>Mobile</b></th><th></th></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
	$mob = $row['mob'];
	$gender = $row['gender'];
    $email = $row['email'];
	$college = $row['college'];

	echo '<tr><td>'.$c++.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$college.'</td><td>'.$email.'</td><td>'.$mob.'</td>
	<td><a title="Delete User" href="update.php?demail='.$email.'"><b><span class="glyphicon glyphicon-trash" style="color:red;" aria-hidden="true"></span></b></a></td></tr>';
}
$c=0;
echo '</table></div>';

}?>
<!--user end-->

<!--feedback start-->
<?php if(@$_GET['q']==3) {
$result = mysqli_query($con,"SELECT * FROM `feedback` ORDER BY `feedback`.`date` DESC") or die('Error');
echo  '<div class="panel"><table class="table table-striped title1">
<tr style="color:#04015c"><th><b>S.N.</b></th><th><b>Subject</b></th><th><b>Email</b></th><th><b>Date</b></th><th><b>Time</b></th><th><b>By</b></th><th></th><th></th></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$date = $row['date'];
	$date= date("d-m-Y",strtotime($date));
	$time = $row['time'];
	$subject = $row['subject'];
	$name = $row['name'];
	$email = $row['email'];
	$id = $row['id'];
	 echo '<tr><td>'.$c++.'</td>';
	echo '<td><a title="Click to open feedback" href="dash.php?q=3&fid='.$id.'">'.$subject.'</a></td><td>'.$email.'</td><td>'.$date.'</td><td>'.$time.'</td><td>'.$name.'</td>
	<td><a title="Open Feedback" href="dash.php?q=3&fid='.$id.'"><b><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></b></a></td>';
	echo '<td><a title="Delete Feedback" href="update.php?fdid='.$id.'"><b><span class="glyphicon glyphicon-trash" style="color:red;" aria-hidden="true"></span></b></a></td>

	</tr>';
}
echo '</table></div>';
}
?>
<!--feedback closed-->

<?php if(@$_GET['q']==6) {

$result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
echo  '<div class="panel"><table class="table table-striped title1">
<tr><th><b>S.N.</b></th><th><b>Topic</b></th><th><b>Total question</b></th></th><th></th></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$total = $row['total'];
    $time = $row['time'];
	$eid = $row['eid'];

	echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td>
	<td><b><a title="Delete Exam" href="update.php?q=rmquiz&eid='.$eid.'"<span class="glyphicon glyphicon-trash" style="color:red;" aria-hidden="true"></span></b></a></td></tr>';
}
$c=0;
echo '</table></div>';

}
?>
<?php
//dashboard start
if(@$_GET['q']== 7) 
{

echo  '<div class="home-content">
<div class="overview-boxes">
  <div class="box">
    <div class="right-side">
      <div class="box-topic">Total Course</div>
      <div class="number">';
          
      
     $count = 1;
      $sel_query = "SELECT COUNT(Course) FROM course_table;";
      $result = mysqli_query($con,$sel_query);
      while($row = mysqli_fetch_assoc($result)) { 
          echo $row['COUNT(Course)'];
      }
      echo'</div>
      <div class="indicator">
      </div>
    </div>
  </div>
  <div class="box">
    <div class="right-side">
      <div class="box-topic">Total Exam</div>
      <div class="number">';
            
     $count = 1;
     $sel_query = "SELECT COUNT(title) FROM quiz;";
     $result = mysqli_query($con,$sel_query);
     while($row = mysqli_fetch_assoc($result)) { 
         echo $row['COUNT(title)'];
     }
      echo'</div>
      <div class="indicator">
      </div>
    </div>
  </div>
  <div class="box">
    <div class="right-side">
      <div class="box-topic">Total Examinee</div>
      <div class="number">';
        
      $count = 1;
      $sel_query = "SELECT COUNT(name) FROM user;";
      $result = mysqli_query($con,$sel_query);
      while($row = mysqli_fetch_assoc($result)) { 
          echo $row['COUNT(name)'];
      }
 echo'
      </div>
      </div>
      <div class="indicator">
      </div>
    </div>
</div>
</div>';
}
?>

<?php if(@$_GET['q']==8) {

echo '<section class="home-section">
<br><br><table>
<thead>
  <th>Course</th>
</thead>
<tbody>';
$count = 1;
            $sel_query = "SELECT * FROM course_table ORDER BY Course ASC;";
            $result = mysqli_query($con,$sel_query);
            while($row = mysqli_fetch_assoc($result)) { 
              echo '<tr>
              <td align = "center">'; echo $row['Course']; 
              echo '</td>
              </tr>';
              $count++; }
              echo '</tbody>
              </table>
                </section>
          ';

}
?>

<!--feedback reading portion start-->
<?php if(@$_GET['fid']) {
echo '<br />';
$id=@$_GET['fid'];
$result = mysqli_query($con,"SELECT * FROM feedback WHERE id='$id' ") or die('Error');
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
	$subject = $row['subject'];
	$date = $row['date'];
	$date= date("d-m-Y",strtotime($date));
	$time = $row['time'];
	$feedback = $row['feedback'];
	
echo '<div class="panel"<a title="Back to Archive" href="update.php?q1=2"><b><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span></b></a><h2 style="text-align:center; margin-top:-15px;font-family: "Ubuntu", sans-serif;"><b>'.$subject.'</b></h1>';
 echo '<div class="mCustomScrollbar" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:450px; line-height:35px;padding:5px;"><span style="line-height:35px;padding:5px;">-&nbsp;<b>DATE:</b>&nbsp;'.$date.'</span>
<span style="line-height:35px;padding:5px;">&nbsp;<b>Time:</b>&nbsp;'.$time.'</span><span style="line-height:35px;padding:5px;">&nbsp;<b>By:</b>&nbsp;'.$name.'</span><br />'.$feedback.'</div></div>';}
}?>
<!--Feedback reading portion closed-->

<!--add quiz start-->
<?php
if(@$_GET['q']==4 && !(@$_GET['step']) ) {
echo ' 
<div class="row">
<span class="title1" style="font-size:22px;"><b><center>Enter Exam Details</center></b></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6">   <form class="form-horizontal title1" name="form" action="update.php?q=addquiz"  method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter Exam Title" class="form-control input-md" type="text">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="total"></label>  
  <div class="col-md-12">
  <input id="total" name="total" placeholder="Enter total number of questions" class="form-control input-md" type="number">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="desc"></label>  
  <div class="col-md-12">
  <textarea rows="8" cols="8" name="desc" class="form-control" placeholder="Write description here..."></textarea>  
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form></div>';



}
?>
<!--add exam end-->

<!--add exam step2 start-->
<?php
if(@$_GET['q']==4 ) {
echo ' 
<div class="row">
<span class="title1" style="margin-left:40%;font-size:20px;"><b>Enter Question Details</b></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6"><form class="form-horizontal title1" name="form" action="update.php?q=addqns&n='.@$_GET['n'].'&eid='.@$_GET['eid'].'&ch=4 "  method="POST">
<fieldset>
';
 
 for($i=1;$i<=@$_GET['n'];$i++)
 {
echo '<b>Question number&nbsp;'.$i.'&nbsp;:</><br /><!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="qns'.$i.' "></label>  
  <div class="col-md-12">
  <textarea rows="3" cols="5" name="qns'.$i.'" class="form-control" placeholder="Write question number '.$i.' here..."></textarea>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'1"></label>  
  <div class="col-md-12">
  <input id="'.$i.'1" name="'.$i.'1" placeholder="Enter option a" class="form-control input-md" type="text">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'2"></label>  
  <div class="col-md-12">
  <input id="'.$i.'2" name="'.$i.'2" placeholder="Enter option b" class="form-control input-md" type="text">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'3"></label>  
  <div class="col-md-12">
  <input id="'.$i.'3" name="'.$i.'3" placeholder="Enter option c" class="form-control input-md" type="text">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'4"></label>  
  <div class="col-md-12">
  <input id="'.$i.'4" name="'.$i.'4" placeholder="Enter option d" class="form-control input-md" type="text">
    
  </div>
</div>
<br />
<b>Correct answer</b>:<br />
<select id="ans'.$i.'" name="ans'.$i.'" placeholder="Choose correct answer " class="form-control input-md" >
   <option value="a">Select answer for question '.$i.'</option>
  <option value="a">option a</option>
  <option value="b">option b</option>
  <option value="c">option c</option>
  <option value="d">option d</option> </select><br /><br />'; 
 }
    
echo '<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form></div>';



}
?><!--add exam step 2 end-->

<!--remove exam-->



</div><!--container closed-->
</div></div>
</body>
</html>
