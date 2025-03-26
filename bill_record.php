<html>
 <head>
        <link rel="stylesheet" href="style1.css">
</head>
<h1 align="center">All Bill Records List</h1>

<?php

$con=mysql_connect("localhost","root","");
   if($con==false)
   die("error in connection"); 
   mysql_select_db("blood_donation");
   $res1=mysql_query("select * from bill");
 echo("<br>");
   echo("<table border=1 width='100%' align='center' class='infotable'>");
   echo("<tr class='thead'><th >Date<th>Cells<th>Amount<th> Quantity<th>provide Doners amount</tr>");
       while($row=mysql_fetch_array($res1))
      {
         echo("<tr  class='trow'><td><br>$row[0]");
         echo("<td><br>$row[1]");
         echo("<td><br>$row[2]");
         echo("<td><br>$row[3]");
         echo("<td><br>$row[4]");
         
        echo("</tr>");
      }
      echo("</table>");

?>