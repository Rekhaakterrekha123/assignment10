<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
	  <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">My Business Name</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Portfolio.php">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <h1>Contact Us</h1>
    <form method="post">
        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name" required><br>
        <label for="email">Email:</label>
        <input type="Email" id="Email" name="Email" required><br>
		 <label for="Phone">Phone:</label>
        <input type="Phone" id="Phone" name="Phone" required><br>
        <label for="Message">Message:</label><br>
        <textarea id="Message" name="Message" rows="4" cols="50" required></textarea><br>
        <input type="submit" value="Submit">
    </form>
	<!-- validation and insertion -->

	<?php
						include('config.php');
						if(isset($_POST['submit'])){
							

							$sql = "INSERT INTO contact (Name,Email,Phone,Message,)
							VALUES ('" . $_POST["Name"] ."','" . $_POST["Email"] . "','" . $_POST["Phone"] . "','" . $_POST["Message"] . "')";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('New Doctor Has been Added Successfully!');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$conn->close();
						}
					?> 


</body>
</html>
