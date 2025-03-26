<html>
 <head>
        <link rel="stylesheet" href="style1.css">
</head>
<table width="100%"class="wlc1">
<th ><h1  align="center" class="wlc">Welcome to  Nitysewa BloodBank </h1></th>
</table>
<style> 
.n1 {
    font-size:bold;
    color: rgba(22, 2, 2, 0.995);
    text-decoration: none;
    /* text-transform: capitalize; */
    font-size: 100%;
    /* text-shadow: 2px; */
    font-weight: bold;
    font-family:Arial Rounded MT Bold;  

}



</style>

<body>
<table  width="100%" height="10%"  class="index1" >
<tr>
<td width="50%"><a href="INDEX.php" class="n1"> Home </a></td>
<td width="5%"><a href="rate.php" class="n1">Rate</a></td>
<td width="10%"><a href="why_donate_blood.php" class="n1">Why donate blood</a></td>
<td  width="8%"><a href="contact_us.php" class="n1">Contact us</a></td>
<td width="10%"><a href="admin.php" class="n1">Admin</a></td>
</tr>
</table>
</body>
       
        
<style> 
body {
  background-image:url("images/img4.jpg");
  background-color: #cccccc;
   background-size: 1600px;
}

.admin1{
    background-color:hsla(55, 8%, 69%, 0.56);
    margin-top: 15px;
    width: 500px;
    height:500px;
    border-radius: 10px;
    text-align: center;
    margin-left: 500px;
    margin-right: 500%;

    
}

</style>
<table class="admin1" >
<form method="post" action="#" >
  <tr>
    <th>
    <img src="images/img1.png" height="30%" width="20%">
    <h1 align="center" ><font color="black" >User Login</font></h1>
</tr>
<tr class="u1">
<td> 
<input type="text" name="t1" placeholder="Username" cols="70" class="v1" required><br>
</tr>

<tr  class="u1">
<td>
<input type="password" name="t2" placeholder="Password" cols="50" class="v1" required><br></td>
</tr>
<tr>
<td>
<input type="submit" class="button" value="Login" name="submit"></button><br>
</tr>
<tr>
        <td>
                Don't have account !<a href="sign.php">signin</a>
</form>
</table>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
if($_COOKIE['login']==1)
{
        echo("<script>alert('Account create successfully'); </script>");
          setcookie("login","0");
}
}

if(isset($_POST['submit']))
{
        setcookie("user",$_POST['t1']);
        $u=$_POST['t1'];
        $p=$_POST['t2'];
        $con=mysql_connect("localhost","root","");
        if($con==false)
        die("error in connection"); 
        mysql_select_db("blood_donation");
        $res=mysql_query("select * from login where userid='$u' and password='$p'");
          if($row=mysql_fetch_array($res))
          {
                header('location:login1.php');
          }
          else
          {
                echo("<script>alert('Invalid user and password'); </script>");
          }
}   
?>
<html>
<!-- <table border="1" width="100%"  height="20%" align="center"> -->
              <!-- <tr> -->
                <!-- <td> -->
                   <!-- <h2> Copyright -->
                        <!-- nitysewa1141@gmail.com -->
                   <!-- </h2></table> -->

                   <!-- </html> -->

                
