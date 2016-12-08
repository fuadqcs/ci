<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Survey</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pure/0.6.0/pure-min.css">

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pure/menu/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pure/menu/side-menu.css">
    <!--<![endif]-->
</head>
<body>

<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="#">Company</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">About</a></li>

                <li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
                    <a href="#" class="pure-menu-link">Services</a>
                </li>

                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Contact</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <?php if($main)  echo $main;?>
    </div>
</div>


<script src="<?php echo base_url(); ?>assets/js/pure/menu/ui.js"></script>


</body>
</html>
