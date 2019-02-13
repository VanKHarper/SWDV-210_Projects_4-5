<!------------------------------------------------------------------------------
  Modification Log
  Date          Name            Description
  ----------    -------------   -----------------------------------------------
  2-11-2019     VHarper         Adding functions/methods  
----------------------------------------------------------------------------->
  
<?php

// filters the inputs from the contact form
    $fname = filter_input(INPUT_POST, 'fName');
    $email = filter_input(INPUT_POST, 'email');
    $phone = filter_input(INPUT_POST, 'phone');
    $message = filter_input(INPUT_POST, 'message');
    /* echo "Fields: " . $fname . $email . $phone . $message;  */
    
    // Validates inputs by checking if null
    if ($fname == null || $email == null || $phone == null ||
        $message == null) {
        $error = "Invalid input data. Check all fields and try again.";
        /* include('error.php'); */
        echo "Form Data Error: " . $error; 
        exit();
        } 
    // Adds visitor if no fields are null 
    else {           
            // Connects to Database and visitors PHP files, or throws an connection error
            try {
                require 'database.php';
                require 'visitors.php';
                
            } catch (PDOException $e) {
                echo 'Connection error: ' . $e->getMessage();
                exit();
            }
            
            add_visitor($fname, $email, $phone, $message);
    }

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
		<li><a href="Contact.php"><button>Contact</button></a></li>
	</ul>	
	</div>
</nav>    
    
    <main class="main_index">        
	
	<h3>Thank you <?php echo"$fname" ?> for your submission!</h3>	

    </main>

</body>

</html>