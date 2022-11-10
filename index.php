<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.css">
    <title>Shoping</title>
</head>
<body>
        <nav>
            <div class="navbar">            
                <h1 class="nav-logo"><span class="logo">AFG</span>Shoping</h1>
                <ul>
                    <li><a href="">home</a></li>
                    <li><a href="">categodies</a></li>
                    <li><a href="">about</a></li>
                    <li><a href="">services</a></li>
                </ul>
            </div>
        </nav>

        <main class="main-section">
            <?php
             if(isset($_GET['wel'])){
                echo "<h5 class='title'>Welcome ". $_SESSION['user']['user_name']."</h5>";
            }
        
            ?>
            <div class="content">
                <h1 class="logo">Minimalism <span>at its finest</span></h1>
                <div class="links">
                    <a href="singin.php" class="link">LOGIN</a><a href="signup.php">SING UP</a>
                </div>
            </div>
            <div class="images">
                <div class="img-1 img">
                    <span class="left">12$</span>
                    <span class="fa-solid fa-cart-arrow-down right"></span>
                </div>
                <div class="img-2 img">
                    <span class="left">12$</span>
                    <span class="fa-solid fa-cart-arrow-down right"></span>
                </div>
                <div class="img-3 img">
                    <span class="left">12$</span>
                    <span class="fa-solid fa-cart-arrow-down right"></span>
                </div>
        </main>
</body>
</html>