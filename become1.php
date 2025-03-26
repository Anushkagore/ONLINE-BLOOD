<html>
 <head>
        <link rel="stylesheet" href="style1.css">
<table  width="100%" height="10%" class="index1" >
<tr>
<td td width="50%"><a href="INDEX.php" class="nav"> Home </a>
<td><a href="rate.php" class="nav">Rate</a>
<td><a href="why_donate_blood.php" class="nav">Why donate blood</a>
<td><a href="become1.php" class="nav">Donate blood</a>
<td><a href="need_blood.php" class="nav">Need blood</a>
<td><a href="contact_us.php" class="nav">Contact us</a>
<td><a href="admin.php" class="nav">Admin</a>
</tr>
</table>



<style> 
body {
  background-image:url("images/img5.jpg");
  background-color: #cccccc;
   background-size: 1400px;
}

</style>
<table border="1" height="80%" width="60%" align="center" bgcolor="white">
    <tr>
<form method="post" action="become2.php">
    <tr>
<h1 align="center">Instruction to donate blood</h1>
</div>
<td>
 <div class="b2">
      <ul>
    <li>Take light refreshment/food before blood donation(2hours before).
    <li>Any healthy person from the age of 18 years with a weight 45kgs and above can donate blood.</li>
    <li>Women should avoid blood donation during their menstrual bleedding</li> 
    <li>Person who has consumed alcohol should avoid giving blood for next 24hours.</li>
    <li>Person who had recent attack of infection like jaundice Typhoid,Malaria,Rubella etc should not give blood.</li>
    <li>Person who had undergone major surgery should avoid blood donation for 6th month.</li>
    <li>Pregancy,locating women should avoid blood donation.</li>
    <li>Must be good health</li>
    <li>Typing.This blood type.Blood can be A,B,AB, OR O.</li>
</ul>
</div>
<div class="b3">
<input type="checkbox" name="c1" value="I agree" required>I agree 
<input type="submit" name="submit" value="submit" class="b4" required>
</div>
</tr>
</table>
</form>
</body>
</html>
<?php
 if(isset($_POST["submit"]))
 {
  if(isset($_POST["c1"]))
  header('location:become2.php');
 }
 ?>

  
