
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
  body {
   margin:40px;
   padding:0;
  }
body {
background-image: url("bg4.png");
background-repeat: no-repeat;
background-size: 100% 100%;
}
</style>
</head>
<body >
<table width="100%">
<colgroup>
    <col style="width: 50%" />
    <col style="width: 50%" />
  </colgroup>
<tr><td><div><justify><span class="login100-form-title p-b-51">About Us</span>
<p>This Web Application demonstrates the usage of ratings to increase the efficiency of search results for a recruiter.<br>
Skills of a candidate can be misleading, as recruiters cannot figure out if the candidate with said skills is experienced enough for the job.
Sometimes they need a beginner in Python, who just needs to debug some basic code, whereas sometimes they need a seasoned Python programmer who can write code from scratch for a deep learning application.
In both cases, the recruiter will use Python Programming as the skill to be searched for. But he needs different levels of the skill set, right?<br>
This is where our App comes in! We provide the option of entering a rating for the skill we have on a scale of 0 to 10. This is self-rating. We also have the option of peers rating us for our skills.<br>
Now recruiters can search for candidates using both Skill sets and experience levels in the skill sets. Sounds like an improvement to the traditional search filter, right?</p></justify></div></td>
<td><br><br>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" action="login1.php" method="POST">

					<span class="login100-form-title p-b-51">
						Login
					</span>
					
					Are You a : <input type="radio" name="type" id="type" value="Candidate">Candidate</button> <input type="radio" name="type" id="type" value="Recruiter">Recruiter </button> ? <br><br>
					

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="user" id="user" placeholder="abc@xyz.com">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" id="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
			
					<div class="container-login100-form-btn m-t-17">
						<input type="submit" name="submit" value="Submit" id="submit"/>
					</div>

				</form>
				<a href="signup_form.html">Not signed up? Click here!</a>
			</div>
		</div>
	</div>
	
	</td>
	</tr>
	</table>

</script>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>