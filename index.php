<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
    <link rel="stylesheet" href="./css/style.css">
    <title>Blogs</title>
</head>
<body>
    <div class="topbar">
    <ul>
        <a href="./addcontent.php"><img class="icon" src="favicon_io/plus" alt=""></a>
        <li><input class="searchbar" type="text" placeholder="Search"></li>
        <li><a href="./index.php" class="navlink">Home</a></li>
        <li><a href="./profile.html" class="navlink">Profile</a></li>
        <li><a href="./about.html" class="navlink">About</a></li>
    </ul>
    </div>
    <div class="content">
    <h1>How to use?</h1>
    <p>
        You can Add content using the plus button above!
    </p>
    <?php

    $host = "localhost";
    $username = "root";
    $user_pass = "yhYXPV9y";
    $database_in_use = "test";


    $mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo $mysqli->host_info . "\n";

    $sql = "SELECT blogTitle, blogContent FROM blogs_db";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h1>" . $row["blogTitle"]. "</h1>"."<br>";
        echo "<p>" . $row["blogContent"]. "</p>"."<br>";
    }
    } else {
    echo "0 results";
    }
    $mysqli->close();
    ?>

    <label for="comment">Comment:</label><br>

    <textarea id="comment" name="comment" rows="5" cols="33">Type your comment here...</textarea>
    </div>



    <div class="recommendation">
    <h3>Recommendations</h3>
    <?php

    $host = "localhost";
    $username = "root";
    $user_pass = "yhYXPV9y";
    $database_in_use = "test";


    $mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $sql = "SELECT blogTitle FROM blogs_db";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p>" . $row["blogTitle"]. "</p>";
    }
    } else {
    echo "0 results";
    }
    $mysqli->close();
    ?>
    </div>
</body>
</html>