<html>
 <head>
        <link rel="stylesheet" href="style1.css">
</head>
<body>
  
  <div class="ad">
  <div class="ad1">
    blood bank & admin donation panel
  </div></div>
  <div class="all">
  <div class="dashbord">
  <div class="contant">
      <a href="add.php" class="vi">Dashbord</a>
    </div>
  <div class="contant">
      <a href="infod.php" class="vi">Donar List</a>
    </div>
    <div class="contant">
    <a href="ud.php" class="vi">Change  password</a>
    </div>
    <div class="contant">
    <a href="feedback.php" class="vi">Contact query</a>
    </div>
    <div class="contant">
    <a href="bill.php" class="vi">Bill</a>
    </div>
    <div class="contant">
    <a href="user.php" class="vi">User Record</a>
    </div>
    
    
    <a href="index.php" class="vi">
    <div class="contant">
      Log  Out</a>
    </div>
</a>
  </div>
  <div class="aaa">
    Dashboard
  
  
  <?php
  
  echo"<div class='all1'>";
  $con=mysql_connect("localhost","root","");
   if($con==false)
   die("error in connection"); 
   mysql_select_db("blood_donation");
   
   $res=mysql_query("select * from blood_donate");
     $row=mysql_num_rows($res);
echo"<a href='infod.php' class='href'>";
echo"<div class='tb'>";
    echo"$row";
    echo"<br> All donar </div>";
    echo'<img src="images/img11.png" class="r2">';
    echo"</a>";
    
    $res=mysql_query("select * from contact_us");
     $row=mysql_num_rows($res);
echo"<a href='feedback.php' class='href'>";
echo"<div class='tb'>";
    echo"$row";
    echo"<br> feedback";
    echo'<img src="images/img10.jpg" class="r1">';
    echo"</div>";
    
    echo"</a>";
    

echo"<a href='bill.php' class='href'>";
echo"<div class='tb'>";
    echo"$row";
    echo"<br> Bill </div>";
    echo'<img src="images/bill.jpg" class="r2">';
    echo"</a>";
    $res=mysql_query("select * from bill");
     $row=mysql_num_rows($res);

 echo"<a href='user.php' class='href'>";
 echo"<div class='tb'>";
    echo"$row";
    echo"<br> User record</div>";
    echo'<img src="images/img12.png" class="r2">';
    echo"</a>";
    
    

echo"<a href='bill_record.php' class='href'>";
echo"<div class='tb'>";
    echo"$row";
    echo"<br> bill record</div>";
    echo'<img src="images/img13.png" class="r2">';
    echo"</a>";
    echo"<div>";

     
?>






























