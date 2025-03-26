<html>
 <head>
        <link rel="stylesheet" href="style1.css">
</head>
<table  width="100%" height="10%"  class="index1">
<tr><td td width="50%"><a href="INDEX.php" class="nav"> Home </a>
<td><a href="about.php" class="nav">About</a>
<td><a href="rate.php" class="nav">Rate</a>
<td><a href="why_donate_blood.php" class="nav">Why donate blood</a>
<td><a href="become1.php" class="nav">Become a donar
<td><a href="need_blood.php" class="nav">Need blood</a>
<td><a href="contact_us.php" class="nav">Contact us</a>
<td><a href="admin.php" class="nav">Admin</a>
</tr>
</table>
<h1 style="text-align:center;font-size:45px;">Welcome to  Nitysewa BloodBank </h1>
    <form method="post" action="#" class="user1">
           Name:<br>
            <input type="text" name="t1" placeholder="enter full name"><br>
     
           Address:<br>
            <input type="text" name="t2" placeholder="enter address"><br>
     
           Mobile no:<br>
            <input type="text" name="t3" placeholder="enter moblie no"><br>
       
           Email:<br>
            <input type="email" name="t4" placeholder="enter email" validate><br>
       
           Age :<br>
            <input type="number" name="t5" placeholder="enter age" ><br>
         
           Userid:<br>
            <input type="text" name="t6" placeholder="enter userid"><br>
       
            Password:<br>
            <input type="password" name="t7" placeholder="enter password"><br>
       
   <input type="submit" value="ok">
</table>


<?php
if(isset($_POST['t1']))
{
  $name=$_POST["t1"];
  $address=$_POST["t2"];
  $mob=$_POST['t3'];
  $email=$_POST["t4"];
  $age=$_POST["t5"];
  $user=$_POST["t6"];
  $pass=$_POST["t7"];
  

  $con=mysql_connect("localhost","root","");
   if($con==false)
   die("error in connection"); 
   mysql_select_db("blood_donation");
   $res=mysql_query("insert into login values('$name','$address',$mob,'$email',$age,'$user','$pass')");
     if($res==true)
    {
        setcookie("login","1");
        header('location:INDEX.php');
    
    }
  }
?>
