<!DOCTYPE html>
<html lang="en">

<head>
    <title>Beranda</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template_login/'); ?>vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template_login/'); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template_login/'); ?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template_login/'); ?>vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template_login/'); ?>vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template_login/'); ?>css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template_login/'); ?>css/main.css">
    <!--===============================================================================================-->
</head>

<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <span class="login100-form-title">
                Selamat Datang di Situs kami.
            </span>
            <div class="container-login100-form-btn">
                <div class="row">
                    <div class="col-6">
                        <a class="login100-form-btn" href="<?= base_url('login'); ?>">
                            Login
                        </a>
                    </div>
                    <div class="col-6">
                        <a class="login100-form-btn" href="<?= base_url('register'); ?>">
                            Register
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===============================================================================================-->
<script src="<?= base_url('assets/template_login/'); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="<?= base_url('assets/template_login/'); ?>vendor/bootstrap/js/popper.js"></script>
<script src="<?= base_url('assets/template_login/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<?= base_url('assets/template_login/'); ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?= base_url('assets/template_login/'); ?>vendor/tilt/tilt.jquery.min.js"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="<?= base_url('assets/template_login/'); ?>js/main.js"></script>

</body>

</html>