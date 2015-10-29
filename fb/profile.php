<?php
session_start(); 
?>
<?php include "functions.php"; ?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Login with Facebook</title>
<link href="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet"> 
 </head>
  <body>
  <?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->
<div class="container">
<div class="hero-unit">
  <h1> <?php echo $_SESSION['FULLNAME']; ?></h1>
  <?php include "header.php"; ?>
  </div>
<div class="span4">
 <ul class="nav nav-list">
<li class="nav-header">Profile pic</li>
	<li><img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"></li>
<li class="nav-header">Facebook ID</li>
<li><?php echo  $_SESSION['FBID']; ?></li>
<li class="nav-header">Fullname</li>
<li><?php echo $_SESSION['FULLNAME']; ?></li>
<li class="nav-header">Email</li>
<li><?php echo $_SESSION['EMAIL']; ?></li>
     <table>
         <tr><th>Latitude</th><th>Longitude</th><th>Date</th></tr>
<?php
$result= getUserInfo($_SESSION['FBID']);
    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>'.$row['lat'].'</td>'. '<td>'.$row['lon'].'</td>'.'<td>'.$row['date'].'</td>' . '<br>';
        echo '</tr>';;
    }
$count=NoOfMaps($_SESSION['FBID']);
while($row = mysqli_fetch_assoc($count)) {
    echo "You have mapped ".$row['count']." times.";
}
?>
     </table>
<div><a href="logout.php">Logout</a></div>
</ul></div></div>
    <?php else: ?>     <!-- Before login --> 
<div class="container">
<h1>Login with Facebook</h1>
           Not Connected
<div>
      <a href="fbconfig.php">Login with Facebook</a></div>
	 <div> <a href="http://www.krizna.com/general/login-with-facebook-using-php/"  title="Login with facebook">View Post</a>
	  </div>
      </div>
    <?php endif ?>
  </body>
</html>
