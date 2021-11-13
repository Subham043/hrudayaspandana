<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $title; ?></title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/viewbox.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <!-- Captcha CSS -->
    <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />
    <style>
    @keyframes ldio-v1j3va1wc2g {
        0% {
            transform: rotate(0)
        }

        100% {
            transform: rotate(360deg)
        }
    }

    .ldio-v1j3va1wc2g div {
        box-sizing: border-box !important
    }

    .ldio-v1j3va1wc2g>div {
        position: absolute;
        width: 144px;
        height: 144px;
        top: 28px;
        left: 28px;
        border-radius: 50%;
        border: 16px solid #000;
        border-color: #e15b64 transparent #e15b64 transparent;
        animation: ldio-v1j3va1wc2g 1s linear infinite;
    }

    .ldio-v1j3va1wc2g>div:nth-child(2),
    .ldio-v1j3va1wc2g>div:nth-child(4) {
        width: 108px;
        height: 108px;
        top: 46px;
        left: 46px;
        animation: ldio-v1j3va1wc2g 1s linear infinite reverse;
    }

    .ldio-v1j3va1wc2g>div:nth-child(2) {
        border-color: transparent #f8b26a transparent #f8b26a
    }

    .ldio-v1j3va1wc2g>div:nth-child(3) {
        border-color: transparent
    }

    .ldio-v1j3va1wc2g>div:nth-child(3) div {
        position: absolute;
        width: 100%;
        height: 100%;
        transform: rotate(45deg);
    }

    .ldio-v1j3va1wc2g>div:nth-child(3) div:before,
    .ldio-v1j3va1wc2g>div:nth-child(3) div:after {
        content: "";
        display: block;
        position: absolute;
        width: 16px;
        height: 16px;
        top: -16px;
        left: 48px;
        background: #e15b64;
        border-radius: 50%;
        box-shadow: 0 128px 0 0 #e15b64;
    }

    .ldio-v1j3va1wc2g>div:nth-child(3) div:after {
        left: -16px;
        top: 48px;
        box-shadow: 128px 0 0 0 #e15b64;
    }

    .ldio-v1j3va1wc2g>div:nth-child(4) {
        border-color: transparent;
    }

    .ldio-v1j3va1wc2g>div:nth-child(4) div {
        position: absolute;
        width: 100%;
        height: 100%;
        transform: rotate(45deg);
    }

    .ldio-v1j3va1wc2g>div:nth-child(4) div:before,
    .ldio-v1j3va1wc2g>div:nth-child(4) div:after {
        content: "";
        display: block;
        position: absolute;
        width: 16px;
        height: 16px;
        top: -16px;
        left: 30px;
        background: #f8b26a;
        border-radius: 50%;
        box-shadow: 0 92px 0 0 #f8b26a;
    }

    .ldio-v1j3va1wc2g>div:nth-child(4) div:after {
        left: -16px;
        top: 30px;
        box-shadow: 92px 0 0 0 #f8b26a;
    }

    .loadingio-spinner-double-ring-fcuz651mtne {
        width: 200px;
        height: 200px;
        display: inline-block;
        overflow: hidden;
        background: #f4e5bc;
    }

    .ldio-v1j3va1wc2g {
        width: 100%;
        height: 100%;
        position: relative;
        transform: translateZ(0) scale(1);
        backface-visibility: hidden;
        transform-origin: 0 0;
        /* see note above */
    }

    .ldio-v1j3va1wc2g div {
        box-sizing: content-box;
    }

    .payment .main-div-payment .success-div img {
        width: 50%;
    }
    </style>
</head>

<body>

    <section class="payment">
        <div class="main-div-payment">
            <div class="img-div">
                <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" class="logo-img">
            </div>

            <div class="text-div" id="note_div" style="margin-top:10px;text-align:center;">
                <p><strong>Note:</strong> Please scan the qr code given below to make the payment.</p>
            </div> 

            <div class="success-div" id="success_div" style="">
                <img src="<?php echo base_url(); ?>assets/images/qr.jpg" alt=""><br>
                <a href="<?php echo base_url(); ?>">Continue to Home Page</a>
            </div>

        </div>

    </section>

</body>

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/tata.js"></script>
<script src="<?php echo base_url(); ?>assets/js/navbar.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>

<script>
<?php if($this->session->flashdata('success')) { ?>

tata.success('Success', '<?php echo $this->session->flashdata('success'); ?>', {
    duration: 10000,
    animate: 'slide',
})

<?php } ?>

<?php if($this->session->flashdata('error')) { ?>

tata.error('Error', '<?php echo $this->session->flashdata('error'); ?>', {
    duration: 10000,
    animate: 'slide',
})

<?php } ?>
</script>




</html>