<html>
 <head>
        <link rel="stylesheet" href="style1.css">
</head>
<table  width="100%" height="10%"  class="index1"  >
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
<form method="post" action="#"  align="center" class="tab1"><h1 align="center">Contact us</h1>
 <div class="contact"> 
   <font size="5%"> Full Name:</font><br>
  <input type="text" name="t1" class="c"><br>
  <font size="5%">Phone Number:</font><br>
  <input type="text" name="t2" class="c"><br>
  <font size="5%">Email Addrees:</font><br>
  <input type="text" name="t3" class="c"><br>
  <font size="5%"> Message:</font><br>
  <textarea name="t4" class="c" ></textarea><br><br>
 <input type="submit" class="A" >
</div>
</table>
 </form>
</body>
</html>

<?php
if(isset($_POST['t1']))
{
  $name=$_POST["t1"];
  $phone=$_POST["t2"];
  $email_addr=$_POST["t3"];
  $msg=$_POST["t4"];
  $con=mysql_connect("localhost","root","");
   if($con==false)
   die("error in connection"); 
   mysql_select_db("blood_donation");
   $res=mysql_query("insert into contact_us values('$name',$phone,'$email_addr','$msg')");
     if($res==true)
     echo("<script>alert('feedback send succesfully')</script>");
}
?>
     