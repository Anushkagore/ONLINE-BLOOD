<?php
  $name=$_POST["t1"];
  $phone=$_POST["t2"];
  $email_addr=$_POST["t3"];
  $msg=$_POST["t4"];
  $con=mysql_connect("localhost","root","");
   if($con==false)
   die("error in connection"); 
   mysql_select_db("contact_us");
   $res=mysql_query("insert into contact_us values('$name',$phone,'$email_addr','$msg')");
     if($res==true)
     echo("record inserted");
  else    
    echo("error in insert query");
?>
     