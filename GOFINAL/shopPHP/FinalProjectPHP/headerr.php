<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="projectt.css">
    <script src="https://kit.fontawesome.com/f237661d57.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="basy">

    <div class="birinshi">
        <div class="search-box">
            <input class="search-txt" type="text" name="" placeholder="Type to search">
            <a class="search-btn" href="#">
                <i class="fas fa-search"></i>
            </a>
        </div>

        <div class="current">
            Current
            <select name="select" id="select">
                <option value="">USD</option>
                <option value="">EURO</option>
                <option value="">KZT</option>
            </select>
        </div>
    </div>
    <div></div>
    <?php
    if(isset($_SESSION['logged_user'])):
    ?>
    <div class="ekinshi">
        <div class="eki"> <a href="registrationfrom.php" style="font-size: 12px; color: white;">
                <?php echo $_SESSION['fname']. ' '?><i class="fas fa-user"></i></a>
        </div>
        <div class="ush"><a href="cart.php" style="font-size: 12px; color: white;">
                <i class="fas fa-shopping-basket"></i></a>
        </div>
    </div>

</div>
<?php else :?>
    <div class="ekinshi">

        <div class="eki"> <a href="registrationfrom.php" style="font-size: 12px; color: white;">
                <i class="fas fa-user"></i></a>
        </div>
        <div class="ush"><a href="cart.php" style="font-size: 12px; color: white;">
                <i class="fas fa-shopping-basket"></i></a>
        </div>
        You are not signed in!<br>
    </div>
<?php endif;?>
</div>
</div>
<div class="navbar">
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="#">HOME</a></li>
        <li><a href="shop.html">SHOP</a></li>
        <li><a href="#">MUSIC</a></li>
        <li><a href="contact.html">CONTACT US</a></li>
    </ul>
</div>
