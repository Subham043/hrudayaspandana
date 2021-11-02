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
</head>

<body>
<?php $this->load->view('includes/loader') ?>
    <?php $this->load->view('includes/header') ?>

    <?php $this->load->view('includes/hero') ?>

    <section class="hundi donation-page login-page">
        <div class="wrapper">
            <div class="hundi-row login-main-row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="heading">
                        <h4 class="lower-heading">Login</h4>
                    </div>
                    <form id="loginForm" action="<?php echo base_url('login'); ?>" method="post">
                    <input autocomplete="off" type="hidden"
                            name="<?php echo $this->security->get_csrf_token_name(); ?>"
                            value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <input type="email" autocomplete="off" id="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control form-hundi-input" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <input type="password" autocomplete="off" id="password" name="password" class="form-control form-hundi-input" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <?php  echo $captchaHtml;    ?>
                            <div style="color:red;"><?php echo form_error('captcha'); ?></div>
                            <input id="captcha" type="text" name="captcha" value=""
                                class="form-control form-hundi-input  mt-3" required
                                placeholder="Enter the text from above image" />
                        </div>
                        <div class="mb-3 login-row">
                            <a href="<?php echo base_url('forgot-password'); ?>" class="forgot-password-link">Forgot Password</a>
                            <a href="<?php echo base_url('register'); ?>" class="forgot-password-link">Register </a>
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary form-hundi-submit form-hundi-login">Login</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view('includes/footer') ?>
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

<script>
$("#loginForm").validate({
    rules: {
        email: {
            required: true,
            email: true
        },
        password: {
            required: true,
            minlength: 5
        },
        captcha: "required",
    },
    messages: {
        email: "Please enter a valid email address",
        password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
        },
        captcha: "Please enter the captcha",
    },
    submitHandler: function(form) {
        // alert("submitted!");
        form.submit();
    }
});
</script>


</html>