<html>
 <head>
        <link rel="stylesheet" href="style1.css">
<table  width="100%" height="10%"  class="index1">
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

<body class="c2">
<h1 align="center"> BLOOD DONATE FORM</h1>
 <form method="post" action="#">
 <div class="become"> 
 <table  class="tab2">
 <tr>
    <td>
     full name:
      <input type="text" name="t1" placeholder="full name" required="required" class="bcom1">
        <td>
        Mobile no:
        <input type="text" name="t2" placeholder="only 10 digit" required="required" class="bcom1">
     <td>
      Email id:
        <input type="text" name="t3" placeholder="example@gmail.com" validation="email" class="bcom1"></tr>
   <tr>
      <td>
	Age:<br>
      <input type="text" name="t4" class="bcom1">
   <td>
     gender:
      <br><input type="radio" name="r1" value="male">male
      <input type="radio" name="r1" value="female">female
      <td>
       blood group:<br>
        <select name="s1" class="bcom1">
                  <option> A+
                  <option> B+
                  <option> AB+
                  <option> O+
                  <option> A-
                  <option> B-
                  <option> AB-
                  <option> O-
       </select>
     </tr>
       <tr>
       <td>
        enter date:
        <input type="date" name="t5" class="bcom1">
        <td>
         Address :
        <textarea name="t6" placeholder="enter your address" required="required" class="c"></textarea>
       </tr>
 <tr>
   <td>
  <input type="submit" name="submit"> 
   </tr>
</form>
</table>
<?php
if(isset($_POST['t1']))
{
  $name=$_POST["t1"];
  $mobile=$_POST["t2"];
  $email=$_POST["t3"];
  $age=$_POST["t4"];
  $gender=$_POST["r1"];
  $bg=$_POST["s1"];
  $date=$_POST["t5"];
  $addr=$_POST["t6"];

  $con=mysql_connect("localhost","root","");
   if($con==false)
   die("error in connection"); 
   mysql_select_db("blood_donation");
   $res=mysql_query("insert into blood_donate values('$name',$mobile,'$email',$age,'$gender','$bg','$addr','$date')");
     if($res==true)
     echo("<script>alert('successfully')</script>");
  else    
    echo("error in insert query");

  }
?>
     

