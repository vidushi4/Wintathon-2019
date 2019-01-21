<?php
include('session.php');
?>
<!DOCTYPE html>
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

p
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
	<li><a href="myprofile.php">My profile</a></li>
      <li><a href="p_rate.php">Rate your peers</a></li>
      <li><a href="index.php">Logout</a></li>
    </ul>
  </div>

  <div class="column content" >
    

	
    
  </div>
</div>

<!--<div class="footer">
  <p></p>
</div>-->



</body>
</html>
