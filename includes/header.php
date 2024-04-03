<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Google Fonts-->

    <!--CSS Link-->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsiveNavBar.css">

    <title><?php echo($title); ?></title>
</head>

<body>
    <?php $class="";
    if ($title != "Home") {
        $class="replace-header-img";
    }
    ?>
    <header class="<?php echo($class); ?>">
        <!--BaseCode for Nav Bar-->
        <nav class="navbar hide">
            <div class="navcontent justify">
                <div>
                    <a href="index.php" class="nav-logo">
                        <img src="images/logo-with-script.png" alt="">
                    </a>
                </div>
                <div>
                    <div class="burger navbar-toggle" id="js-navbar-toggle">
                        <div class="l1"></div>
                        <div class="l2"></div>
                        <div class="l3"></div>
                    </div>
                    <?php include('includes/nav.html'); ?>
                </div>
            </div>
        </nav>
        <?php $subtitle = "This is who we are.";
        if ($title != "Home") {
            $subtitle = $title;
        } ?>
        <h1 id="banner-text"><?php echo($subtitle); ?></h1>
        </div>
    </header>
        