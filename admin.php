<html>
<head>
<link rel="stylesheet" href="style1.css">

        <link rel="stylesheet" href="style1.css">
<table  width="100%" height="10%"  class="index1"  >
<td td width="50%"><a href="INDEX.php" class="nav"> Home </a>
<td><a href="About.php" class="nav">About</a>
<td><a href="why_donate_blood.php" class="nav">Why donate blood</a>
<td><a href="become1.php" class="nav">Donate blood</a>
<td><a href="need_blood.php" class="nav">Need blood</a>
<td><a href="contact_us.php" class="nav">Contact us</a>
<td><a href="admin.php" class="nav">Admin</a>
</tr>
</table>

<style> 
body {
  background-image:url("images/img4.jpg");
  background-color: #cccccc;
   background-size: 1400px;
}

</style>
</head>
<body>
<table align="center"class="admin">
<form method="post" action="add.php">
  <tr>
    <th>
<h1 align="center"><font color="white">Admin Login</font></h1>
</tr>
<tr class="u">
<td> 
<input type="text" name="t1" placeholder="Username" cols="70" class="v" required><br>
</tr>

<tr  class="u">
<td>
<input type="password" name="t2" placeholder="Password" cols="50" class="v" required><br></td>
</tr>


<tr>
<td>
<input type="submit" class="button" value="Login"></button><br>
</tr>
</form>
</table>
</body>
</html>

<?php
   if(isset($_POST["submit"]))
{
    $us=$_POST["t1"];
    $ps=$_POST["t2"];
    
    if($us=="cdj"&&$ps=="1234")
       header('location:add.php');
    else
      echo("<script>alert('Invalid User or pass');</script>");
    
 }
?>


