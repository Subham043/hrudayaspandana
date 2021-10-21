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
    <?php $this->load->view('includes/header') ?>

    <?php $this->load->view('includes/hero') ?>

    <section class="hundi donation-page login-page">
        <div class="wrapper">
            <div class="hundi-row login-main-row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <form action="<?php echo base_url('otp/'.$id); ?>" id="otp_form" method="post">
                    <input autocomplete="off" type="hidden"
                            name="<?php echo $this->security->get_csrf_token_name(); ?>"
                            value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <div class="errorTxt"></div>
                                    <input type="text" name="otp" id="otp" autocomplete="off" class="form-control form-hundi-input"
                                        placeholder="OTP">
                                        <div style="color:red;"><?php echo form_error('otp'); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <?php  echo $captchaHtml;    ?>
                            <input id="captcha" type="text" name="captcha" value=""
                                class="form-control form-hundi-input  mt-3" required
                                placeholder="Enter the text from above image" />
                                <div style="color:red;"><?php echo form_error('captcha'); ?></div>
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit"
                                class="btn btn-primary form-hundi-submit form-hundi-login">Submit</button>
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
$("#otp_form").validate({
    rules: {
        otp: {
            required: true,
            minlength: 6,
            maxlength: 6,
            number: true
        },
        captcha: "required",
    },
    messages: {
        otp: {
            required: "Please provide a otp",
            minlength: "Your otp must be at least 6 characters long",
            maxlength: "Your otp must be at most 6 characters long",
            number: "Your otp must be numeric only",
        },
        captcha: "Please enter the captcha",
    },
    submitHandler: function(form) {
        form.submit();
    }
});
</script>


</html>