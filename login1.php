<?php
if($_POST){
session_start(); // Starting Session
// Define $username and $password
$username=$_POST['user'];
$password=$_POST['pass'];
$type=$_POST['type'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
  $dbhost = 'localhost';
  $user = 'root';
  $pass = '';
  
  $link = mysqli_connect("$dbhost","$user","$pass","project");

if(isset($_POST['submit'])){
   
// SQL query to fetch information of registerd users and finds user match.
  if($type=="Recruiter"){
//echo $username;
//echo $password;
  	$query = "select * from recruiter where Password='$password' AND Email='$username'";
  	$result=mysqli_query($link,$query);
    while($row=mysqli_fetch_array($result)){
    $name= $row['Name'];}
  	$rows = $result->num_rows;
  	if ($rows == 1) {
      //echo "hi";
  		$_SESSION['login_username']=$username;
      $_SESSION['login_name']=$name; // Initializing Session
  		//echo $_SESSION['login_user'];
  		echo '<a href="recruiter.php">'."Succesful Login, click here to continue.".'</a>'; // Redirecting To Other Page
  	} else {
  		$error = "Username or Password is invalid";
  	}
  }
  else{
$query = "select * from candidate where Password='$password' AND Email='$username'";
    $result=mysqli_query($link,$query);
    while($row=mysqli_fetch_array($result)){
    $name= $row['Name'];}
    $rows = $result->num_rows;
    if ($rows == 1) {
      
      $_SESSION['login_username']=$username;
      $_SESSION['login_name']=$name; // Initializing Session
      //echo $_SESSION['login_user'];
      echo '<a href="profile.php">'."Successful Login, click here to continue.".'</a>'; // Redirecting To Other Page
    } else {
      $error = "Username or Password is invalid";
    }
  }
}
}

?>
 



