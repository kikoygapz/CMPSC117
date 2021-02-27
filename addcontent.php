<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="./css/style.css">
    <title>Add Blog</title>
</head>

<body>
    <div class="topbar">
        <ul>
            <li><input class="searchbar" type="text" placeholder="Search"></li>
            <li><a href="./index.html" class="navlink">Home</a></li>
            <li><a href="./profile.html" class="navlink">Profile</a></li>
            <li><a href="./about.html" class="navlink">About</a></li>
        </ul>
    </div>
    <form action="insert.php" method="POST">
    <div class="content">
        <label>Title: </label><input type="text"  name="title"> <br>
        <br>
        <br>
        <br>
        <br>

        <label for="blog">Content: </label><br>


        <textarea name="content" rows="5" cols="33">Enter Post Here...
        </textarea>
        <br>
        <br>
        <br>
        <input type="submit" value="submit">
        <input type="button" value="Discard">
    </div>
    </form>

</body>

</html>