<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
        <title>Register | <?= get_setting()['name'] ?></title>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>styles/bootstrap.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>fonts/css/fontawesome-all.min.css">
        <link rel="icon" href="<?= base_url() ?>assets/images/favicon.png" type="image/x-icon">
        <script type="text/javascript" src="<?= base_url('assets/') ?>scripts/jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/kava/') ?>style.css" />
        <script src="https://www.google.com/recaptcha/api.js"></script>
    </head>
    <body class="theme-light">
        <?= preLoader(); ?>
        <div id="page">
            <div class="page-content header-clear-medium">
                <div class="card card-style">
                    <div class="content px-4">
                        <p class="font-600 color-highlight mb-n1">Free Accounts</p>
                        <h1 class="font-30">Register</h1>
                        <p>
                            Create an account, it's free and gives you tones of benefits!
                        </p>
                        <div class="content">
                            <div class="alert alert-danger" id="errorMsg" style="display: none;">
                                
                            </div>
                        </div>
                        <form method="post" action="<?= base_url('register/save') ?>" id="registrationForm">
                            <div class="input-style has-icon input-style-1 input-required">
                                <i class="input-icon fa fa-user"></i>
                                <span>Mobile</span>
                                <input type="mobile" placeholder="Mobile" class="decimal-num" name="mobile" value="<?= set_value('mobile') ?>" required>
                                <?= form_error('mobile') ?>
                            </div>
                            <div class="input-style has-icon input-style-1 input-required">
                                <i class="input-icon fa fa-lock"></i>
                                <span>Choose a Password</span>
                                <input type="password" name="password" autocomplete="off" placeholder="Choose a Password" value="<?= set_value('password') ?>" required>
                                <?= form_error('password') ?>
                            </div>
                            <div class="input-style has-icon input-style-1 input-required">
                                <i class="input-icon fa fa-lock"></i>
                                <span>Confirm your Password</span>
                                <input type="password" name="cpassword" autocomplete="off" placeholder="Confirm your Password" value="<?= set_value('cpassword') ?>" required>
                                <?= form_error('cpassword') ?>
                            </div>
                            <div class="input-style has-icon input-style-1 input-required">
                                <i class="input-icon fa fa-bullhorn"></i>
                                <span>Invitation Code</span>
                                <input type="text" name="invitation" placeholder="Invitation Code" value="<?= set_value('invitation') ?>">
                            </div>
                            <div class="g-recaptcha" data-sitekey="<?= get_setting()['recatcha_key'] ?>" data-callback="getRecaptchaToken" data-expired-callback="expiredRecaptchaCallback"></div>
                            <button type="submit" id="loginBtn" class="btn has-icon btn-full btn-l font-600 font-13 gradient-highlight mt-4 rounded-s" style="width: 100%;">Create Account</button>
                        </form>
                        <div class="row pt-3 mb-3">
                            <div class="col-6 text-left">
                                
                            </div>
                            <div class="col-6 text-right">
                                <a href="<?= base_url('login') ?>">Login Here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script type="text/javascript" src="<?= base_url('assets/') ?>scripts/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets/') ?>scripts/custom.js"></script>
        <script type="text/javascript" src="<?= base_url('assets/kava/') ?>script.js"></script>
        <script type="text/javascript">
            var recaptchaOk = true;
            function getRecaptchaToken(token) {
                recaptchaOk = true;
            }
            function getRecaptchaTokenError(token) {
                recaptchaOk = false;   
            }

            $(function(){
                $('#registrationForm').submit(function(event) {
                    if(!recaptchaOk){
                        $('#errorMsg').html('Please Validate Captcha');
                        $('#errorMsg').show();
                        return false;
                    }else{
                        $('#errorMsg').hide();
                    }
                });
            })

            $(function(){
                  function rescaleCaptcha(){
                    var width = $('.g-recaptcha').parent().width();
                    var scale;
                    if (width < 302) {
                      scale = width / 302;
                    } else{
                      scale = 1.0; 
                    }

                    $('.g-recaptcha').css('transform', 'scale(' + scale + ')');
                    $('.g-recaptcha').css('-webkit-transform', 'scale(' + scale + ')');
                    $('.g-recaptcha').css('transform-origin', '0 0');
                    $('.g-recaptcha').css('-webkit-transform-origin', '0 0');
                  }

                  rescaleCaptcha();
                  $( window ).resize(function() { rescaleCaptcha(); });

                });
        </script>
    </body>
</html>