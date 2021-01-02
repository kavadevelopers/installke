<!DOCTYPE HTML>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
        <title>Payment Success | <?= get_setting()['name'] ?></title>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>styles/bootstrap.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>fonts/css/fontawesome-all.min.css">
        <link rel="icon" href="<?= base_url() ?>assets/images/favicon.png" type="image/x-icon">
    </head>
    <body class="theme-light">
        <div id="preloader">
            <div class="spinner-border color-highlight" role="status"></div>
        </div>
        <div id="page">
            <div class="page-content">
                <div class="card card-style p-4 text-center" style="margin-top: 150px;">
                    <p class="font-600 color-highlight mb-0"><a href="#" class="icon icon-m mt-1 rounded-m gradient-green"><i class="fa fa-check"></i></a></p>
                    <h1>Payment Successful </h1>
                    <p>
                        Deposit credited to your account
                    </p>
                    <a href="<?= base_url('profile/deposit_records') ?>" class="btn btn-m btn-center-m font-700 gradient-highlight rounded-s mb-3">OK</a>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="<?= base_url('assets/') ?>scripts/jquery.js"></script>
        <script type="text/javascript" src="<?= base_url('assets/') ?>scripts/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets/') ?>scripts/custom.js"></script>
    </body>
</html>