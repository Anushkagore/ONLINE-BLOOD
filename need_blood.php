<html>
 <head>
        <link rel="stylesheet" href="style1.css">
</head>
<table  width="100%" height="10%" class="index1" >
<td td width="50%"><a href="INDEX.php" class="nav"> Home </a>
<td><a href="rate.php" class="nav">Rate</a>
<td><a href="why_donate_blood.php" class="nav">Why donate blood</a>
<td><a href="become1.php" class="nav">Donate blood</a>
<td><a href="need_blood.php" class="nav">Need blood</a>
<td><a href="contact_us.php" class="nav">Contact us</a>
<td><a href="admin.php" class="nav">Admin</a>
</tr>
<body class="need">
<table width="60%" height="50%">
<form method="post" action="#">
<tr> <td><h1>Need Blood</h1>
 <tr><td>Blood Group<br>
  <select name="s1">
                  <option selected='selected'>A+</option>
                  <option 'selected'>B+</option>
                  <option selected>AB+</option>
                  <option selected>O+</option>
                  <option selected>A-</option>
                  <option selected>B-</option>
                  <option selected>AB-</option>
                  <option selected>O-</option>
                  
       </select>
  <td>Reason,why do you need blood?<br>
 <textarea name="t1" required></textarea><br><br>
<input type="submit" name="submit" value="search">
</form>
</table>
<?php 
if(isset($_POST["submit"]))
{
$bg=$_POST["s1"];
$reason=$_POST["t1"];
$con=mysql_connect("localhost","root","");
   if($con==false)
   die("error in connection"); 
   mysql_select_db("blood_donation");
   $res=mysql_query("insert into need_blood values('$bg','$reason')");
   $res1=mysql_query("select * from blood_donate where blood_group='$bg'");
 echo("<br>");
   echo("<table border=1 width='100%' align='center' bgcolor='white' class='trow'>");
   echo("<tr class='adminrow'><th >Full name<th>Mobile no<th>Email id<th> age<th>gender<th>blood group<th>address</tr>");
       while($row=mysql_fetch_array($res1))
      {
         echo("<tr><td><br>$row[0]");
         echo("<td><br>$row[1]");
         echo("<td><br>$row[2]");
         echo("<td><br>$row[3]");
         echo("<td><br>$row[4]");
         echo("<td><br>$row[5]");
         echo("<td><br>$row[6]");
      }
}
?>

 
