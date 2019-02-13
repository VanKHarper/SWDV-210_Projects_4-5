<!------------------------------------------------------------------------------
  Modification Log
  Date          Name            Description
  ----------    -------------   -----------------------------------------------
  2-12-2018      VHarper        NA
  -----------------------------------------------------------------------------> 
<?php 
 /* By: Van Harper 2/8/2019 */
 
 include('contact_Config.php'); 
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
	
	<h2>Contact Information:</h2>

	<div class="myContact1">
		<ul>
			<li>I currently live in Boise, Idaho.</li>
			<li>My address is 555 Fake St.</li>
		</ul>
	</div>
	
	<div class="myContact2">
		<p><a class="mobile" href="tel:2084730381">(208) 555-0381</a></p>	
		<p>	<a href="mailto:vanharper@mycwi.cc">vanharper@mycwi.cc</a></p>
	</div>

	<h2>Contact Form:</h2>	

	<div class="contactForm">
            <form action="contact_submit.php" method="POST"><!-- Start Form -->
		
		<div class="firstName">
			<label for="fName">Name:</label>		
			<input type="text" id="fName" name="fName" placeholder="Please Leave Your Name..." value="" required>
		</div>
		<br><br>
		
	
		<div class="Email">
			<label for="email">Email:</label>
			<input type="email" name="email" id="email"  placeholder="Please Leave Your Email address..." value="" required>
		</div>
		<br><br>
		
		<div class="Phone">
			<label for="phone">Phone:</label>
			<input type="tel" id="phone" name="phone"  placeholder="Please Leave Your Phone Number..." value="" required>
		</div>
		<br><br>	

		<label for="details">Details:</label>
		<input type="text" name="message" id="message"  placeholder="Please Leave A Short Message..." value="" required>
                <br><br>
		
                
		
            <input type="submit" class="sub_button" value="Submit">
		
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
