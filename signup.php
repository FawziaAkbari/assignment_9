<?php
    include 'get_users/get_users.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- the php comment for check the login permission -->
    <div class="container"> 
            <!-- the html form for add student by manager -->
            <form action="get_users/get_users.php" method="POST" enctype="multipart/form-data">
            <h1>Welcome dear customer</h1>
            <div class="input-el">
                <label class="lable" for="name">Name</label>
                <input type="text" class="input-feild" name="name" id="name" placeholder="Your Name" required>
            </div>
            <div class="input-el">
                <label class="lable" for="last_name">Last Name</label>
                <input type="text" class="input-feild" name="last_name" id="last_name" placeholder="Last Name" required>
            </div>
            <div class="input-el">
                <label class="lable" for="user_name">User Name</label>
                <input type="text"  class="input-feild" name="user_name" id="user_name" placeholder="User Name" required>
            </div>
            <div class="input-el">
                <label class="lable" for="address">Address</label>
                <input type="address" class="input-feild" name="address" id="address" placeholder="Address" required>
            </div>
            <div class="input-el">
                <label class="lable" for="email">Email</label>
                <input type="emailt" class="input-feild" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="input-el">
                <label class="lable" for="password">Password</label>
                <input type="password" class="input-feild" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="input-el">
                <label class="lable" for="confirm">Confirm</label>
                <input type="password" class="input-feild" name="confirm" id="confirm" placeholder="Confirm" required>
            </div>
            <div class="input-el">
                <div>
                    <button class="info button btn-submit input-feild" name="submit">SING UP</button>
                    <button class="info button btn-submit input-feild">RESET</button>
                </div>
            </div>

        </form>
            <!-- the button for logout the manager -->
        <!-- <form method="POST" action="session_destroy.php">
            <input type="submit" class="btn-logout" value="Log me out" name="submit">
        </form> -->
            <!-- php class object -->
    </div>
    <!-- end form -->

   
</body>
</html>
