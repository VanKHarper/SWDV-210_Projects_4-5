<!------------------------------------------------------------------------------
  Modification Log
  Date          Name            Description
  ----------    -------------   -----------------------------------------------
  2-12-2018      VHarper        Adding functions/methods
  ----------------------------------------------------------------------------->
<?php   
// Connects to database, visitors and employees PHP files or thorws a connection error
try {
    include_once 'database.php';
    include "visitors.php";
    include "employees.php";
} catch (PDOException $e) {
    echo 'Connection error: ' . $e->getMessage();
    exit();
}
        
// Check action; on initial load it is null
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_visitors';
    }
}  

// Lists the visitors & employees
if ($action == 'list_visitors') {

    // Read employee data 

    $employeeID = filter_input(INPUT_GET, 'empID', 
            FILTER_VALIDATE_INT);
    if ($employeeID == NULL || $employeeID == FALSE) {
        $employeeID = 1;
    }
    try {

        $employees = getEmployees();
        
        $visitors = getVisitors($employeeID);
    }
    catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
    }
}

// Delete button logic
else if ($action == 'delete_visitor') {

    deleteVisitor($visitor_id);
    header("Location: admin.php");
}
?>



<!doctype html>

<html>

<head>
	<!-- Style sheet link-->
        <link rel="stylesheet" href="css/styles.css" />	
	<title>Van Harper Admin Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Admin Page">        

</head>

<body>


<header>

	<div id="banner" class="">
	<img src="images/banner.jpg" alt="Banner">
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
    
    <br>

<section>
    
  <h3>My Admin Page</h3>
  
 <!-- Displays Visitor info -->
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th class="right">Phone</th>
                <th>Message</th>
            </tr>
            
    <?php foreach ($visitors as $visitor) : ?>
            <tr>
                <td><?php echo $visitor['name']; ?></td>
                <td><?php echo $visitor['email']; ?></td>
                <td><?php echo $visitor['phone']; ?></td>
                <td><?php echo $visitor['message']; ?></td> </td>                            
            </tr>            
            
        </table>
            
        <!-- Delete Button -->
        <form action="admin.php" method="post">
            <input type="hidden" name="action"
                    value="delete_visitor">
            <input type="hidden" name="visitorID"
                    value="<?php echo $visitor['visitorID']; ?>">
            <input type="submit" value="Delete">
        </form>
    <?php endforeach; ?>
        
  <h2>Please select an employee email to view messages</h2>
  
            <!-- Displays Employee's links -->
            <ul style="list-style-type:none;" >
    <?php foreach($employees as $employee) : ?>
                <li style="display: inline-block; margin-right: 2em; margin-bottom: 1.1em;">
                    <a href="?empID=<?php echo $employee['employeeID']; ?>">
                        <?php echo $employee['fname'] . " "  . $employee['lname']; ?>                                           
                    </a>                    
                </li>
    <?php endforeach; ?>
            </ul>
            
            </br>       
    
</section>
  
  
</body>

<br><br>

<footer>

		<hr>
		<div class="SMicons"> <!-- Div class for social media icons = "SMicons" -->
			<a href="https://github.com/VanKHarper"><img src="images/github.png" alt="Github Link"></a>
			<a href="https://www.linkedin.com/in/van-harper-912816154/"><img src="images/linkedin.png" alt="Linkedin Link"></a>
		</div>
		
</footer>

</html>