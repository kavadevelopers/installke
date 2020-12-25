<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
        <title><?php if(isset($_title)){ echo $_title.' | '; } ?><?= get_setting()['name'] ?></title>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>styles/bootstrap.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>fonts/css/fontawesome-all.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/kava/') ?>style.css" />
        <link rel="icon" href="<?= base_url() ?>assets/images/favicon.png" type="image/x-icon">
        <script type="text/javascript" src="<?= base_url('assets/') ?>scripts/jquery.js"></script>
    </head>
    <body class="theme-light">
        <?= preLoader(); ?>
        <div id="page">
            <div class="header header-auto-show header-fixed header-logo-center">
                <a href="index.html" class="header-title"><?= get_setting()['name'] ?></a>
                <a href="#" data-menu="menu-main" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
                <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-dark"><i class="fas fa-sun"></i></a>
                <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-light"><i class="fas fa-moon"></i></a>
                <a href="#" data-menu="menu-share" class="header-icon header-icon-3"><i class="fas fa-share-alt"></i></a>
            </div>
            <div id="footer-bar" class="footer-bar-6">
                <a href="index-components.html"><i class="fa fa-layer-group"></i><span>Features</span></a>
                <a href="index-pages.html"><i class="fa fa-file"></i><span>Pages</span></a>
                <a href="index.html" class="circle-nav active-nav"><i class="fa fa-home"></i><span>Home</span></a>
                <a href="index-projects.html"><i class="fa fa-image"></i><span>Projects</span></a>
                <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>Menu</span></a>
            </div>
            <div class="page-title page-title-fixed">
                <h1><?= get_setting()['name'] ?></h1>
                <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-share"><i class="fa fa-share-alt"></i></a>
                <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
                <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
                <a href="https://tawk.to/chat/5fe59df6a8a254155ab63c90/1eqcf23d3" target="_blank" class="page-title-icon shadow-xl bg-theme color-theme"><i class="fa fa-comments"></i></a>
                <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
            </div>
            <div class="page-title-clear"></div>
            <div class="page-content">