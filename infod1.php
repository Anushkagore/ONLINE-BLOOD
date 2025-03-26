
      <h1 align="center">All Donars List</h1>

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
   $res1=mysql_query("select * from blood_donate");
 echo("<br>");
   echo("<table border=1 width='50%' align='center' class='infotable'>");
   echo("<tr class='thead'><th >Full name<th>Mobile no<th>Email id<th> age<th>gender<th>blood group<th>address<th>date</tr>");
       while($row=mysql_fetch_array($res1))
      {
         echo("<tr  class='trow'><td><br>$row[0]");
         echo("<td><br>$row[1]");
         echo("<td><br>$row[2]");
         echo("<td><br>$row[3]");
         echo("<td><br>$row[4]");
         echo("<td><br>$row[5]");
         echo("<td><br>$row[6]");
         echo("<td><br>$row[7]");
      }
}
?>