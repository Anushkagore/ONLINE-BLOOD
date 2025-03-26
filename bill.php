<html>
    <head>
    <link rel="stylesheet" href="style1.css">
</head>
<h2 align="center" class="tbill1">Total Bill</h2>
    <body  class="body1">
 <div class="billcart">
        <form method="post" action="bill.php" class="billcart">
          <div class="data1">  Date:<br>
            <input type="DATE" name="d1" value="<?php echo($_POST["d1"]);?>"> 
            </div><br>
            <div class="data1">   
            Enter Cells:<br>
            <select name="t1">
                <option selected="selected">P.V.C.(Packed Cell Volume)</option>
                <option selected="selected">F.F.P.(Fresh Frozen Plasma)</option>
                <option selected="selected">Platelet Concentrate</option>
                <option selected="selected">Whole Human Blood</option>
            </select>
            </div>
<br>
<div class="data1">
             Enter Amout:<br>
            <input type="text" name="t2"  class="input" value="<?php  if(isset($_POST['t2']))echo($_POST["t2"]);?>">
            </div>
<br>
<div class="data1">
            Enter  Quantity:<br>
            <input type="text" name="t3"  class="input" value="<?php  if(isset($_POST['t3'])) echo($_POST["t3"]);?>">
            </div>
<br>
<div class="data1">
            Provide donar amount:<br>
            <input type="text" name="t4" class="input" value="<?php if(isset($_POST['t4'])) echo($_POST["t4"]);?>"><br>
            </div>
            <br>
            <div class="data1">
            Total:<br>
             <input type="text" class="input" value="<?php if(isset($_POST['t1']))echo($_POST['t2']*$_POST['t3']-$_POST['t4']);?>">
            </div><br>
            <input type="submit" name="submit" class="A">
</form>
    </body>
    </html>

<?php
if(isset($_POST["submit"])) 
{
 $date=$_POST["d1"];
 $cells=$_POST["t1"];
 $amount=$_POST["t2"];
 $qty=$_POST["t3"];
 $pd=$_POST["t4"];
 $t=$amount*$qty-$pd;
 echo'';
 $con=mysql_connect("localhost","root","");
   if($con==false)
   die("error in connection"); 
   mysql_select_db("blood_donation");
   $res=mysql_query("insert into bill values('$date','$cells','$amount',$qty,'$pd')");
     if($res==true)
     echo("<script>alert('successfully')</script>");
  else    
    echo("error in insert query");

  }
?>
    
</form>
</div>
</table>
<html>
<body>
<button onclick="window.print()">PRINT</button>
 </body>
</html>

    