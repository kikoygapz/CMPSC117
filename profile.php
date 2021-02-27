<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Edit Profile</title>
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
    <<form action="addprofile.php" method="POST">
        <label for="name">Name</label> <br><input type="text" name="name"><br><br>
        <label for="age">Age</label> <br><input type="number" name="age"><br><br>
        <label for="address">Address</label> <br><input type="text" name="address"><br><br>


        <label for="birthdate">Birthday <br> <input type="date" value="birthdate"> </label><br><br>

        <legend>Contact Details</legend>
        <label for="email">Email</label><br>
        <input type="email" name="email"><br>
        
        <label for="phone">Phone</label><br>
        <input type="tel" name="phone"><br><br><br>

        <input type="button" value="Cancel">
        <input type="submit">
        
    </form>
</body>
</html>