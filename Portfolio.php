<!DOCTYPE html>
<html>
<head>
  <title>Portfolio</title>
  <!-- Add any necessary CSS styles or external stylesheets here -->
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

  <h1>My Portfolio</h1>
  
  <?php
  // Create an array of portfolio projects with their details
  $portfolioProjects = array(
    array(
      'title' => 'Project 1',
      'description' => 'This is the description of Project 1.',
      'image' => 'project1.jpg',
    ),
    array(
      'title' => 'Project 2',
      'description' => 'This is the description of Project 2.',
      'image' => 'project2.jpg',
    ),
    // Add more projects as needed
  );
  
  // Loop through the array and display each project
  foreach ($portfolioProjects as $project) {
    echo '<h2>' . $project['title'] . '</h2>';
    echo '<p>' . $project['description'] . '</p>';
    echo '<img src="' . $project['image'] . '" alt="' . $project['title'] . '">';
    echo '<hr>'; // Add a horizontal line separator between projects
  }
  ?>

</body>
</html>
