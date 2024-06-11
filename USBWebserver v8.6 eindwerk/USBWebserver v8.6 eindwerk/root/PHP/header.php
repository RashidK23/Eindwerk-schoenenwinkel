
<nav class="navbar navbar-inverse">
<div class="container-fluid">
    <div class="navbar-header">
         <!-- <a class="navbar-brand" href="#">DEMO LOGIN</a> -->
         
    </div>
        <div class="nav navbar-nav">
        <a href="Home.php">Home</a>
        <a href="Informatie.php">Informatie</a>
        <a href="Schoenen.php">Schoenen</a>

        <a href=""><?php if ($user!='Login') print 'Welkom '.$user;?></a>
        <?php if ($user=='Login') print '<a href="signupForm.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';?>
        <?php if ($user=='Login') print '<a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';?>
        <a href="logout.php"><?php if ($user!='Login') print 'Logout';?></a>
        <a href="winkelmandje.php"> <i class="fas fa-shopping-cart"></i></a>
    </div>
    
    
</nav>
