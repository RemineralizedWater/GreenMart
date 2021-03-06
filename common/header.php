<header>
    <?php
    $httpProtocol = !isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on' ? 'http' : 'https';
    $base = $httpProtocol . '://' . $_SERVER['HTTP_HOST'];
    $base = strpos($base, "localhost") ? $base . "/Soen287_team/" : $base . "/"; ?>

    <head>

        <link rel="shortcut icon" href="../favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="scripts/p4.js" async></script>
    </head>

    <!--    Mobile Navigation Bar    -->
    <div class="mobnav">
        <div class="slogan">
            <h4><i>Your community grocery store.</i></h4>
        </div>
        <div id="logo">
            <a href="<?php echo $base ?>index.php" class="active"><img src="<?php echo $base ?>images/logo_new.png"
                                                                       alt="Green Mart logo" id="logo"></a>
        </div>

        <div class="icon">
            <div class="rightlinks">
                <a href="<?php echo $base ?>p4.php" style="float:right" id="shoppingCartNbr">Shopping Cart (4)</a>
                <a href="<?php echo $base ?>p6.php" style="float:right">Sign Up</a>
                <a href="<?php echo $base ?>p5.php" style="float:right">Log In</a>
            </div>
            <a href="javascript:void(0);" onclick="showNav()">
                <i class="fa fa-bars"></i>
            </a>
        </div>

        <div id="myLinks">
            <a href="<?php echo $base ?>aisles/index.php">Aisles</a>
            <a href="<?php echo $base ?>deals.php">Deals</a>
            <a href="<?php echo $base ?>recipes.php">Recipes</a>
            <a href="<?php echo $base ?>blog.php">Blog</a>
        </div>

    </div>

    <script>
        function showNav() {
            const x = document.getElementById("myLinks");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>

</header>