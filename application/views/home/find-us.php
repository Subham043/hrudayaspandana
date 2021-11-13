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

    <section class="events contact-events" style="padding-bottom:30px">
        <div class="wrapper">
            <div class="heading">
                <!-- <p class="upper-heading">Blogs</p> -->
                <h4 class="lower-heading">Find Us</h4>
            </div>
            <div class="events-main">
                <div class="events-row">



                    <div class="event-row-image contact-event-one">
                        <!-- <img  onContextMenu="return false;"  src="<?php echo base_url(); ?>assets/images/pray.jpg" alt=""> -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.7898513320256!2d77.51846671482146!3d12.921224090888943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3f011f2bf73f%3A0xad514ba017f39891!2sJurysoft!5e0!3m2!1sen!2sin!4v1631520547292!5m2!1sen!2sin"
                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="event-row-line event-row-one">
                        <div class="line"></div>
                    </div>
                    <div class="event-row-text event-row-two contact-event-two">
                        <a href="#">
                            <h4 style="text-transform: capitalize">Sai Mayee Trust</h4>
                        </a>
                        <p>E601, Aishwarya Lake View Residency
                            6th Cross, Kaggadasapura,<br>
                            C V Raman Nagar,<br> Bangalore - 560093
                            India</p>
                        <a href="tel:+91 9663718977" class="mailtel_link"><i class="fas fa-phone-volume"></i>
                            +91 9663718977</a><br>
                        <a href="mailto:needhelp@yourdomain.com" class="mailtel_link"><i class="fas fa-envelope"></i>
                            needhelp @ yourdomain.com</a>
                    </div>



                    <div class="event-row-text event-row-four contact-event-four">
                        <a href="#">
                            <h4 style="text-transform: capitalize">Sai Meru Mathi Trust</h4>
                        </a>
                        <p>E601, Aishwarya Lake View Residency
                            6th Cross, Kaggadasapura,<br>
                            C V Raman Nagar,<br> Bangalore - 560093
                            India</p>
                        <a href="tel:+91 99452 79415" class="mailtel_link"><i class="fas fa-phone-volume"></i>
                            +91 99452 79415</a><br>
                        <a href="mailto:needhelp@yourdomain.com" class="mailtel_link"><i class="fas fa-envelope"></i>
                            needhelp @ yourdomain.com</a>
                    </div>
                    <div class="event-row-line event-row-three">
                        <div class="line"></div>
                    </div>
                    <div class="event-row-image contact-event-three">
                        <!-- <img  onContextMenu="return false;"  src="<?php echo base_url(); ?>assets/images/pray.jpg" alt=""> -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.7898513320256!2d77.51846671482146!3d12.921224090888943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3f011f2bf73f%3A0xad514ba017f39891!2sJurysoft!5e0!3m2!1sen!2sin!4v1631520547292!5m2!1sen!2sin"
                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view('includes/footer') ?>
    <?php $this->load->view('includes/scroll-top-button') ?>
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
$.validator.addMethod("selectNotEquals", function(value, element, arg) {
    return arg !== value;
}, "Value must not equal arg.");

$("#contactForm").validate({
    rules: {
        fname: {
            required: true,
            minlength: 2
        },
        lname: {
            required: true,
            minlength: 2
        },
        message: {
            required: true,
        },
        phone: {
            required: true,
            minlength: 10,
            maxlength: 10,
            number: true
        },
        email: {
            required: true,
            email: true
        },
        trust: {
            required: true,
            selectNotEquals: 'null'
        },
        captcha: "required",
        check: "required",
    },
    messages: {
        fname: {
            required: "Please provide a first name",
            minlength: "Your first name must be at least 2 characters long"
        },
        lname: {
            required: "Please provide a last name",
            minlength: "Your last name must be at least 2 characters long"
        },
        message: {
            required: "Please provide a message",
        },
        phone: {
            required: "Please provide a phone number",
            minlength: "Your phone number must be at least 10 characters long",
            maxlength: "Your phone number must be at most 10 characters long",
            number: "Your phone number must be numeric only",
        },
        trust: {
            required: "Please select a trust",
            selectNotEquals: "Please select a trust"
        },
        email: "Please enter a valid email address",
        captcha: "Please enter the captcha",
        check: "Please accept our policy",
    },
    submitHandler: function(form) {
        form.submit();
    }
});
</script>

<script>
$(document).ready(function() {
    $("body").on("contextmenu", function(e) {
        tata.error('Error', 'right-click is disabled!', {
            duration: 10000,
            animate: 'slide',
        })
        return false;
    });
});
</script>


</html>