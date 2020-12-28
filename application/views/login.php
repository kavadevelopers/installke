<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
        <title><?= get_setting()['name'] ?></title>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>styles/bootstrap.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>fonts/css/fontawesome-all.min.css">
        <link rel="icon" href="<?= base_url() ?>assets/images/favicon.png" type="image/x-icon">
        <script type="text/javascript" src="<?= base_url('assets/') ?>scripts/jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/kava/') ?>style.css" />
    </head>
    <body class="theme-light">
        <?= preLoader(); ?>
        <div id="page">
            <div class="page-content header-clear-medium">
                <div class="card card-style">
                    <div class="content px-4">
                        <h1 class="font-30">Login</h1>
                        <div class="content">
                            <div class="alert alert-danger" id="errorMsg" style="display: none;">
                                
                            </div>
                            <?php if(!empty($this->session->flashdata('success'))){ ?>
                                <div class="alert alert-success">
                                    <?= $this->session->flashdata('success') ?>
                                </div>
                            <?php } ?>
                        </div>
                        <form method="post" action="" id="loginForm">
                            <div class="input-style has-icon input-style-1 input-required">
                                <i class="input-icon fa fa-user"></i>
                                <span>Mobile</span>
                                <input type="text" placeholder="Mobile" name="mobile" id="mobileNum" class="decimal-num" required>
                            </div>
                            <div class="input-style has-icon input-style-1 input-required">
                                <i class="input-icon fa fa-lock"></i>
                                <span>Password</span>
                                <input type="password" name="pass" autocomplete="off" id="passwordNum" placeholder="Password" required>
                            </div>
                            <button type="submit" id="loginBtn" class="btn has-icon btn-full btn-l font-600 font-13 gradient-highlight mt-4 rounded-s" style="width: 100%;">Login</button>
                        </form>
                        <div class="row pt-3 mb-3">
                            <div class="col-6 text-left">
                                <a class="" href="#">Forgot Password?</a>
                            </div>
                            <div class="col-6 text-right">
                                <a class="" href="<?= base_url('login/red_register') ?>">Create Account</a>
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
            $(function(){
                $('#loginForm').submit(function(event) {
                    event.preventDefault();
                    mobile  = $('#mobileNum').val();
                    pass    = $('#passwordNum').val();
                    $.ajax({
                        type: "POST",
                        url : "<?= base_url('login/check'); ?>",
                        dataType: "JSON",
                        data : {
                            mobile  : mobile,
                            pass    : pass 
                        },
                        cache : false,
                        beforeSend: function() {
                            loading();
                        },      
                        success: function(out)
                        {
                            if(out[0] == '0'){   
                                window.location = "<?= base_url('dashboard') ?>";
                            }else{
                                $('#errorMsg').html(out[1]);
                                $('#errorMsg').show();
                                $('#successMsg').hide();       
                                _loading();
                            }
                        }
                    });
                });
            })
        </script>
    </body>
</html>