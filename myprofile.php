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
    <h2>My profile:</h2>
<br>
 

 <!--Education table----------------------------------------------------------------------------------->
	<p>
	<table align="center" width="40%" border="2">
	<tr>
	<th>College</th>
	<th>Degree</th>
	</tr>
	<?php
  echo $username;
	$query = "select * from candidate where Email='$username'";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){

    $id= $row['College Name'];
    $add=$row['Degree']
	
	?>
	<tr>
	<td><?php echo $id; ?></td>
	<td><?php echo $add; ?></td>
	</tr>
	<?php } ?>
	
	
	</table>
	</p>

<br>
<!--Work Experience table----------------------------------------------------------------------------------->
  <p>
  <table align="center" width="40%" border="2">
  <tr>
  <th>Company</th>
  <th>Job Title</th>
  </tr>
  <?php
  $query = "select * from candidate where Email='$username'";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result))
  {
    $id=$row['Company name'];
    $add=$row['Job title'];
  
  ?>
  <tr>
  <td><?php echo $id; ?></td>
  <td><?php echo $add; ?></td>
  </tr>
  <?php } ?>
  
  
  </table>
  </p>

<br>
  <!--Skills table----------------------------------------------------------------------------------->
  <p>
  <table align="center" width="40%" border="2">
  <tr>
  <th>Skills</th>
  <th>Self Rating</th>
  </tr>
  <?php
  $query = "select * from candidate where Email='$username'";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result))
  {
    $id1=$row['Skill1'];
    $add1=$row['srate1'];
    $id2=$row['Skilll2'];
    $add2=$row['srate2'];
    $id3=$row['Skill3'];
    $add3=$row['srate3'];
    $id4=$row['Skill4'];
    $add4=$row['srate4'];
    $id5=$row['Skill5'];
    $add5=$row['srate5'];
  
  ?>
  <tr>
  <td><?php echo $id1; ?></td>
  <td><?php echo $add1; ?></td>
  </tr>
  <tr>
  <td><?php echo $id2; ?></td>
  <td><?php echo $add2; ?></td>
  </tr>
  <tr>
  <td><?php echo $id3; ?></td>
  <td><?php echo $add3; ?></td>
  </tr>
  <tr>
  <td><?php echo $id4; ?></td>
  <td><?php echo $add4; ?></td>
  </tr>
  <tr>
  <td><?php echo $id5; ?></td>
  <td><?php echo $add5; ?></td>
  </tr>
  <?php } ?>
  
  
  </table>
  </p>



    
  </div>
</div>

<!--<div class="footer">
  <p></p>
</div>-->

</body>
</html>
