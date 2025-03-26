<html>
 <head>
        <link rel="stylesheet" href="style1.css">
</head>

<?php
$con=mysql_connect("localhost","root","");
   if($con==false)
   die("error in connection"); 
   mysql_select_db("blood_donation");
   $res1=mysql_query("select * from blood_donate");
 echo("<br>");
   echo("<table border=1 width='100%' align='left'class='trow'>");
   echo("<tr class='adminrow'><th>Full name<th>Mobile no<th>Email id<th> age<th>gender<th>blood group<th>address <th>date</tr>");
       while($row=mysql_fetch_array($res1))
      {
         echo("<tr class='hv'><td><br>$row[0]");
         echo("<td><br>$row[1]");
         echo("<td><br>$row[2]");
         echo("<td><br>$row[3]");
         echo("<td><br>$row[4]");
         echo("<td><br>$row[5]");
         echo("<td><br>$row[6]");
         echo("<td><br>$row[7]");
echo("</tr>");
}
echo("</table>");
?>
<html>
<body>
<button onclick="window.print()">PRINT</button>
 </body>
</html>
