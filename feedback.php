<html>
 <head>
        <link rel="stylesheet" href="style1.css">
</head>

<?php
$con=mysql_connect("localhost","root","");
   if($con==false)
   die("error in connection"); 
   mysql_select_db("blood_donation");
   $res1=mysql_query("select * from contact_us");
 echo("<br>");
   echo("<table border=1 width='100%' align='left'class='trow'>");
   echo("<tr class='adminrow'><th>Full name<th>Mobile no<th>Email id<th> Message</tr>");
       while($row=mysql_fetch_array($res1))
      {
         echo("<tr class='hv'><td><br>$row[0]");
         echo("<td><br>$row[1]");
         echo("<td><br>$row[2]");
         echo("<td><br>$row[3]");
        
echo("</tr>");
}
echo("</table>");
?>
