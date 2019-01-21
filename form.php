<html>
<body>
<?php
if($_POST){
  $dbhost = 'localhost';
  $username = 'root';
  $password = '';
 //echo "hi"; 
  $link = mysqli_connect("$dbhost","$username","","project");
 if(isset($_POST['submit'])){
 	//echo "hmm";
$name=$_POST["name"];
$email= $_POST["email"];
$pwd=$_POST["pwd"];
$jobtitle=$_POST["jobtitle"];
$degree=$_POST["degree"];
$college_name=$_POST["college_name"];
$company_name=$_POST["company_name"];
$skill1=$_POST["skill1"];
$srate1=$_POST["srate1"];
$skill2=$_POST["skill2"];
$srate2=$_POST["srate2"];
$skill3=$_POST["skill3"];
$srate3=$_POST["srate3"];
$skill4=$_POST["skill4"];
$srate4=$_POST["srate4"];
$skill5=$_POST["skill5"];
$srate5=$_POST["srate5"];
//echo $user;
//echo $degree;
//echo $srate1;
 
 
  $query = "INSERT INTO candidate (Name,Email,Password,Job title,Degree,College Name,Company name,Skill1,srate1,Skill2,srate2,Skill3,srate3,Skill4,srate4,Skill5,srate5,prate1,prate2,prate3,prate4,prate5,count1,count2,count3,count4,count5) VALUES('$name','$email','$pwd','$jobtitle','$degree','$college_name','$company_name','$skill1','$srate1','$skill2','$srate2','$skill3','$srate3','$skill4','$srate4','$skill5','$srate5',0,0,0,0,0,0,0,0,0,0)";
  $result=mysqli_query($link,$query);
  
}
}
?>
<a href="index.php">Successfully Signed up. Click here to log in.</a>
</body>
</html>