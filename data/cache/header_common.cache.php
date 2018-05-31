<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$meta['title'];?></title>
    <link href="<?php echo $template->loadCSSFile('common.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo $template->loadCSSFile('contact.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo $template->loadCSSFile('mobile-menu.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo $template->loadCSSFile('mobile.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo $template->loadCSSFile('menu.css'); ?>" rel="stylesheet" type="text/css">
    <script src="<?php echo $template->loadJSFile('jquery.min.js'); ?>"></script>
    <script src="<?php echo $template->loadJSFile('menu.js'); ?>"></script>
    <meta name="description" content="<?=$meta['description'];?>">
    <meta name="author" content="NEHSCSA">
    <meta property="og:title" content="<?=$meta['title'];?>">
    <meta property="og:site_name" content="<?=$meta['title'];?>">
    <meta property="og:description" content="<?=$meta['description'];?>">
    <meta property="og:type" content="blog">
    <meta property="og:url" content="https://www.nehscsa.com/hackathon">
    <meta property="og:image" content="https://www.nehscsa.com/hackathon/static/image/hackathon1.jpg">
    <link rel="shortcut icon" sizes="256x256" href="https://www.nehscsa.com/static/icon/nehscsa.png" />
</head>

<body>
    <div class="page-bg"></div>
    <marquee bgcolor="green" height="30px" scrollamount="10">
        <a class="marquee"><span>【2018黑客松-預定測試】</span></a>
    </marquee>
    <div class="title">
        <a href="./">
            <img class="logo" src="./static/image/hackathon1.jpg" />
        </a>
    </div>
    <br />
    <div class="team">
        <span>黑客松140.128.243.3團隊</span>
    </div>
    <div id="cssmenu">
        <ul>
            <li>
                <a href="team.php">Team</a>
            </li>
            <li>
                <a href="about.php">About</a>
            </li>
            <li>
                <a href="contact.php">contact</a>
            </li>
        </ul>
    </div>