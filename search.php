<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <title>671BookStore</title>
    <script type='text/javascript' src="scripts.js"></script>
    </head>
    
    <body onload="showMenu()">
        <h1>
            671 BookStore
        </h1>
        <div class = "menu" style="margin-bottom: 2em;">
        <center>
            <a href=".">Home</a>
            <a href="books.php">Books</a>
            <a href="search.php">Search</a>
            <a id="signin" style='display:none' href="sign_in.php">Sign in</a>
            <a id="register" style='display:none' href="register.php">Register</a>
            <a id="myaccount" style='display:none' href="myaccount.php">My Account</a>
            <a id="admin" style='display:none' href="admin.php">Admin</a>
            <a id="signout" style='display:none' onclick="signout()" href="index.php">Sign Out</a>
        </center>
        </div>
        
        <form action="books.php" method="POST">
            <div class="filter">
                <table>
                    <tr>
                        <th><section class='const'>Book Name</section></th>
                        <th><input type="text" name="Book"></th>
                    </tr>
                    <tr>
                        <th><section class='const'>Author Name</section></th>
                        <th><input type="text" name="Author"></th>
                    </tr>
                    <tr>
                        <th><section class='const'>Year From</section></th>
                        <th><input type="text" name="YFrom" pattern="[0-9]{4}" title="Year should be 4 digits."></th>
                    </tr>
                    <tr>
                        <th><section class='const'>Year To</section></th>
                        <th><input type="text" name="YTo" pattern="[0-9]{4}" title="Year should be 4 digits."></th>
                    </tr>
                </table>
            </div>
            <center>
                <input type="submit" name="Search" value="Search" class='bookinput'>
            </center>
        </form>
    </body>
</html>