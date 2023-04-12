<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
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

    <h1>Welcome to My Blog</h1>
    <?php
    // Array of blog posts data
    $posts = array(
        array(
            'id' => 1,
            'title' => 'First Blog Post',
            'content' => 'This is the content of the first blog post.'
        ),
        array(
            'id' => 2,
            'title' => 'Second Blog Post',
            'content' => 'This is the content of the second blog post.'
        ),
        array(
            'id' => 3,
            'title' => 'Third Blog Post',
            'content' => 'This is the content of the third blog post.'
        )
    );

    // Check if the 'id' parameter is passed in the URL
    if (isset($_GET['id'])) {
        $postId = $_GET['id'];

        // Loop through the blog posts and find the post with matching 'id'
        $post = null;
        foreach ($posts as $p) {
            if ($p['id'] == $postId) {
                $post = $p;
                break;
            }
        }

        // Display the individual blog post if found
        if ($post) {
            echo '<h2>' . $post['title'] . '</h2>';
            echo '<p>' . $post['content'] . '</p>';
        } else {
            echo '<p>Post not found.</p>';
        }
    } else {
        // Loop through the blog posts and display them as list items with links to individual post pages
        echo '<ul>';
        foreach ($posts as $post) {
            echo '<li><a href="?id=' . $post['id'] . '">' . $post['title'] . '</a></li>';
        }
        echo '</ul>';
    }
    ?>
</body>
</html>
