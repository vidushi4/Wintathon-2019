<?php
include('session.php');
?>
<!DOCTYPE html>
<?php
  $con= mysqli_connect('localhost','root','','project') or die("Connection was not established");
  
  ?>
<html>
<head>
<style>

* {
    box-sizing: border-box;
}
a:link, a:visited {
    background-color: LightCoral;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: LightSalmon;
}
body {
    background-image: url("background2.png");
}
.header, .footer {
    background-color: wheat;
    color: white;
    padding: 15px;
}
h1
{
text-align: center;
color:DarkSlateGrey;
}
.column {
    float: left;
    padding: 15px;
}
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
.menu {
    width: 25%;
}
.content {
    width: 75%;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 8px;
    margin-bottom: 8px;
    background-color: LightCoral;
    color: #ffffff;
}
.menu li:hover {
    background-color: LightSalmon;
}
h2{
color:white;
text-align: center;
text-decoration:underline;}

table
{
color:Cornsilk;
font-size:20px;
}
</style>
</head>
<body>

<div class="header">
  <h1>Welcome, <?php echo $_SESSION['login_name']; ?></h1>
</div>

<div class="clearfix">
  <div class="column menu">
    <ul>
  <li><a href="myprofile.php">Home</a></li>
      <li><a href="p_rate.php">Rate your peers</a></li>
      <li><a href="index.php">Logout</a></li>
    </ul>
  </div>

  <div class="column content" >
    <h2>Rate your peers:</h2>
<br>
 

  <p>
  <table align="center" width="40%" border="2">
  <tr>
  <th>Name</th>
  <th>Skill 1</th>
  <th>Skill 2</th>
  <th>Skill 3</th>
  <th>Skill 4</th>
  <th>Skill 5</th>
  </tr>

  <?php
  $select= "select * from candidate";
  $run=mysqli_query($con,$select);
  while($row=mysqli_fetch_array($run))
  {
    
    $email=$row['Email'];
    $name = $row['Name'];
    $Skill1=$row['Skill1'];
    $Skill2=$row['Skilll2'];
    $Skill3=$row['Skill3'];
    $Skill4=$row['Skill4'];
    $Skill5=$row['Skill5'];  
  ?>
  <tr>
    <form action="" method="POST">
  <td><?php echo $name; ?></td>
  <td style="display:none;"><input type="hidden" name="email" id="email" value="<?php echo $email;?>"></td>
  <td><?php echo $Skill1; ?>
    <br>
    <input type="text" name="Skill1" id="Skill1" value=0 placeholder="Rating" min=0 max=10>
  </td>
  <td><?php echo $Skill2; ?>
  <br>
    <input type="text" name="Skill2" id="Skill2" value=0 placeholder="Rating" min=0 max=10>
  </td>
  <td><?php echo $Skill3; ?>
    <br>
    <input type="text" name="Skill3" id="Skill3" placeholder="Rating" value=0 min=0 max=10>
  </td>
  <td><?php echo $Skill4; ?>
    <br>
    <input type="text" name="Skill4" id="Skill4" placeholder="Rating" value=0 min=0 max=10>
  </td>
  <td><?php echo $Skill5; ?>
    <br>
    <input type="text" name="Skill5" id="Skill5" placeholder="Rating" value=0 min=0 max=10>
  </td>
  <td>
      <input type="submit" name="submit" value="Submit" id="submit"/>

</td>
</form>

  <?php 
}
  if($_POST)
    {
      $conn=mysqli_connect('localhost','root','','project');
    

      if(isset($_POST['submit']))
    {
    
  $emailid=$_POST['email'];
  $p_rate1=$_POST['Skill1'];
  $p_rate2=$_POST['Skill2'];
  $p_rate3=$_POST['Skill3'];
  $p_rate4=$_POST['Skill4'];
  $p_rate5=$_POST['Skill5'];
  echo $p_rate1;
  echo $name;
  echo $emailid;
  
  if($p_rate1!=0){
  $c1="UPDATE candidate SET count1=count1+1 where Email='$emailid'";
  $r1=mysqli_query($conn,$c1);
  $sql1="UPDATE candidate SET prate1=(prate1+'$p_rate1')/count where Email='$emailid'";
  $result1=mysqli_query($conn,$sql1);}

  if($p_rate2!=0){
  $c2="UPDATE candidate SET count2=count2+1 where Email='$emailid'";
  $r2=mysqli_query($conn,$c2);
   $sql2="UPDATE candidate SET prate2=(prate2+'$p_rate2')/count2 where Email='$emailid'";
  $result2=mysqli_query($conn,$sql2);}

  if($p_rate3!=0){
  $c3="UPDATE candidate SET count3=count3+1 where Email='$emailid'";
  $r3=mysqli_query($conn,$c3);
   $sql3="UPDATE candidate SET prate3=(prate3+'$p_rate3')/count3 where Email='$emailid'";
  $result3=mysqli_query($conn,$sql3);}

  if($p_rate4!=0){
  $c4="UPDATE candidate SET count4=count4+1 where Email='$emailid'";
  $r4=mysqli_query($conn,$c4);
   $sql4="UPDATE candidate SET prate4=(prate4+'$p_rate4')/count4 where Email='$emailid'";
  $result4=mysqli_query($conn,$sql4);}

  if($p_rate5!=0){
  $c5="UPDATE candidate SET count5=count5+1 where Email='$emailid'";
  $r5=mysqli_query($conn,$c5);
   $sql5="UPDATE candidate SET prate5=(prate5+'$p_rate5')/count5 where Email='$emailid'";
  $result5=mysqli_query($conn,$sql5);}

}
}

?>
  </tr>
  </table>
  </p>
</div>
</body>
</html>