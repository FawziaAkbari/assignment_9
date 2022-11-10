<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- the php comment for check the login permission -->
    <div class="container container-signin">
        <?php
            if(isset($_GET['login'])){
                echo "<h5>Login failed! </h5>";
            }
            ?>
            <!-- the html form for add student by manager -->
            <form action="get_users/login.php" method="POST" enctype="multipart/form-data">
            <h1>Welcome dear customer</h1>
            <div class="input-el">
                <input type="number" min="0"  class="input-feild" name="user-name" id="user-name" placeholder="User Name" required>
            </div>
            <div class="input-el">
                <input type="password" class="input-feild" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="input-el">
                    <button class="btn-submit input-feild btn-signin" name="submit">LOGIN</button>
            </div>

        </form>
    <!-- end form -->

   
</body>
</html>
