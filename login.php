<!------------------------------------------------------------------------------
  Modification Log
  Date          Name            Description
  ----------    -------------   -----------------------------------------------
  2-12-2018      VHarper        NA
  ----------------------------------------------------------------------------->
<?php 
/* By: Van Harper 2/8/2019 */
?>

<!DOCTYPE html>
<!-- This web site template was created by: Van Harper, 9/15/2018 -->

<html lang="en">

<head>
		<!-- Style sheet link-->
		<link rel="stylesheet" href="css/styles.css" /> 			
		
	<title>Van Harper HTML5 and CSS3 Portfolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
</head>

<body>
	
<header>

	<div id="banner" class="">
	<img src="images/bannerContact.jpg" alt="Banner">
	</div>
	
</header>
		
<nav>
	<div class="links">
	<ul>
		<li><a href="index.html"><button>Home</button></a></li>
                <li><a href="login.php"><button>Login</button></a></li>
		<li><a href="about.html"><button>About Me</button></a></li>
		<li><a href="education.html"><button>Education</button></a></li>
		<li><a href="contact.php"><button>Contact</button></a></li>
                
	</ul>	
	</div>
</nav>
		
<main class="main_con">	
	

	<h2>User Login</h2>
	
	<div class="contactForm">
	<form action="admin.php" method="get"><!-- Start Form -->
		
		<div class="firstName">
			<label for="username">Username:</label>		
			<input type="text" id="username" name="username" placeholder="Please Enter Your Username..." required>
		</div>
		<br><br>
		
		<div class="lastName">
			<label for="password">Password:</label>
			<input type="password" name="password" id="password"  placeholder="Please Enter Your Password..." required>
		</div>
		<br><br>
		
                <input type="submit" value="Login">
		
	</form>
</div>
	
</main>
	
</body>
	
<footer>

		<hr>
		<div class="SMicons"> <!-- Div class for social media icons = "SMicons" -->
			<a href="https://github.com/VanKHarper"><img src="images/github.png" alt="Github Link"></a>
			<a href="https://www.linkedin.com/in/van-harper-912816154/"><img src="images/linkedin.png" alt="Linkedin Link"></a>
		</div>
		
</footer>

</html>