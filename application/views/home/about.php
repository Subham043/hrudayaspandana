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

    <section class="about">
        <div class="wrapper">
            <div class="about-page-row">
                <div class="col-lg-12 col-md-12 col-sm-12 about-page-col first-about-text-div">
                    <div class="heading">
                        <p class="upper-heading">About</p>
                        <h4 class="lower-heading">Hrudayaspandana</h4>
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                            illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                            blandit.
                        </p>
                        <p class="icon-p"><a href=""><i class="fab fa-facebook-f"></i></a><a href=""><i
                                    class="fab fa-twitter"></i></a><a href=""><i class="fab fa-youtube"></i></a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 second-about-text-div about-page-col">
                    <div class="heading">
                        <p class="upper-heading">Trust</p>
                        <h4 class="lower-heading">Sai Mayee Trust</h4>
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci tation ullamcorper.</p>
                        <p>Suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor
                            in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat.</p>
                    </div>
                    <div class="button">
                        <a href="<?php echo base_url('about/sai-mayee-trust'); ?>">View More</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 first-about-img-div about-page-col">
                    <img  onContextMenu="return false;"  src="http://vihara.themerex.net/wp-content/uploads/2018/12/img-3-copyright.jpg" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 second-about-img-div about-page-col">
                    <img  onContextMenu="return false;"  src="http://vihara.themerex.net/wp-content/uploads/2018/12/img-4-copyright.jpg" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 third-about-text-div about-page-col">
                    <div class="heading">
                        <p class="upper-heading">Trust</p>
                        <h4 class="lower-heading">Sai Meru Mathi Trust</h4>
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci tation ullamcorper.</p>
                        <p>Suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor
                            in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat.</p>
                    </div>
                    <div class="button">
                        <a href="<?php echo base_url('about/sai-meru-mathi-trust'); ?>">View More</a>
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