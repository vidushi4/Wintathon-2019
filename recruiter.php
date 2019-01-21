<?php
include('session.php');
?>
<!doctype html>
<html>
<head>
<title>Recruiters page</title>
	
<link rel="stylesheet" type="text/css" href="recruiter.css">
</head>
<body>
	<a href="index.php" class="button">Logout</a>
	<div class = "header">
	<h1><?php echo"Welcome ";
	echo $_SESSION['login_name']; ?></h1>
</div>
<form action="" method="POST">
	<label for="job">Job Opening:</label>	
	<input type="text" placeholder="Ex: Developer" style="margin-right:20px" id="job" required>
	<div>	
		
	<label for="1st">Skill 1:</label>	
	<input type="text" placeholder="Required Skill 1" style="margin-right:20px" id="1st" required>
	<label for="sr1">Self Rate 1:</label>
	<input type="number" placeholder="Self Rating for skill 1" name="srate1" id="srate1" required>
	<label for="pr1">Peer Rate 1:</label>
	<input type="number" placeholder="Peer Rating for skill 1" name="prate1" id="prate1" required>
	</div>
	<div>
	<label for="2nd">Skill 2:</label>
	<input type="text" placeholder="Required Skill 2" style="margin-right:20px" id="2nd" required>
	<label for="sr2">Self Rate 2:</label>
	<input type="number" placeholder="Self Rating for skill 2" name="srate2" id="srate2" required>
	<label for="pr2">Peer Rate 2:</label>
	<input type="number" placeholder="Peer Rating for skill 2" name="prate2" id="prate2" required>
	</div>
	<div>
	<label for="3rd">Skill 3:</label>	
	<input type="text" placeholder="Required Skill 3" style="margin-right:20px" id="3rd" required>
	<label for="sr3">Self Rate 3:</label>
	<input type="number" placeholder="Self Rating for skill 3" name="srate3" id="srate3" required>
	<label for="pr3">Peer Rate 3:</label>
	<input type="number" placeholder="Peer Rating for skill 3" id="prate3" name="prate3"required>

	</div>
	<div>
	<label for="4th">Skill 4:</label>	
	<input type="text" placeholder="Required Skill 4" style="margin-right:20px" id="4th" required>
	<label for="sr4">Self Rate 4:</label>
	<input type="number" placeholder="Self Rating for skill 4" name="srate4" id="srate4" required>
	<label for="pr4">Peer Rate 4:</label>
	<input type="number" placeholder="Peer Rating for skill 4" name="prate4" id="prate4" required>
	</div>
	<div>
	<label for="5th">Skill 5:</label>	
	<input type="text" placeholder="Required Skill 5" style="margin-right:20px" id="5th" required>
	<label for="sr5">Self Rate 5:</label>
	<input type="number" placeholder="Self Rating for skill 4" name="srate5" id="srate5" required>
	<label for="pr5">Peer Rate 3:</label>
	<input type="number" placeholder="Peer Rating for skill 4" name="prate5" id="prate5" required>
	</div>
	<br>
	<br>
	<input type="submit" name="submit" value="Submit" id="submit"/>
</form>
<!--input type=button onClick="parent.location='index.html'" value='click here'-->


<p>
	<table align="center" width="40%" border="2">
	<tr>
	<th>College</th>
	<th>Degree</th>
	</tr>
	<?php

if($_POST)
    {
      $conn=mysqli_connect('localhost','root','','project');
    

      if(isset($_POST['submit']))
    {
    
  $s_rate1=$_POST['srate1'];
  $s_rate2=$_POST['srate2'];
  $s_rate3=$_POST['srate3'];
  $s_rate4=$_POST['srate4'];
  $s_rate5=$_POST['srate5'];
  $p_rate1=$_POST['prate1'];
  $p_rate2=$_POST['prate2'];
  $p_rate3=$_POST['prate3'];
  $p_rate4=$_POST['prate4'];
  $p_rate5=$_POST['prate5'];

	$select= "select * from candidate where srate1>'$s_rate1' AND prate1>'$p_rate1' AND srate2>'$s_rate2' AND prate2>'$p_rate2' AND srate3>'$s_rate3' AND prate3>'$p_rate3' AND srate4>'$s_rate4' AND prate4>'$p_rate4' AND srate5>'$s_rate5' AND prate5>'$p_rate5'";
	$run=mysqli_query($conn,$select);
	while($row=mysqli_fetch_array($run))
	{
		$name=$row['Name'];
		$degree=$row['Degree'];
		$college=$row['College Name'];
		$des=$row['Job title'];
		$company=$row['Company name'];
	
	?>
	<tr>
	<td><?php echo $name; ?></td>
	<td><?php echo $degree; ?></td>
	<td><?php echo $college; ?></td>
<td><?php echo $des; ?></td>
<td><?php echo $company; ?></td>
	</tr>
	<?php }}} ?>
	
	
	</table>
	</p>

</body>
</html>	
