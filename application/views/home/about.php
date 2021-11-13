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
                        <p>Hrudaya Spandana stands for Reverbarations of Love. (word Hrudaya means “Love” and Spandana
                            means “Reverberations”). The team of volunteers at Hrudaya Spandana operate from the space
                            of
                            love. All the activities, they are embarking on, are for spreading pure divine love. Goal of
                            this team is to share love and resources with our fellow human beings in a way that fulfils
                            their basic needs and makes them feel cared for. This helps all of us to taste the bliss of
                            societal
                            togetherness. This endeavour with the flame of philanthropy, kindled in our hearts, inspires
                            us to
                            carry the torch of service forward for universal good.
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
                        <p>For society to pulsate with joy and growth, all classes and ages of people, irrespective of religion,
profession, gender or personal preferences, must have a bond of connectivity and interdependence
that takes care of both material and emotional needs of everyone. In this light, we help orphanages
so that children without parents can experience love and have their needs met and can become
useful members of the society when they grow up. At the other end, we also provide succour to old
people who do not have anyone to take care of them. </p>
                        <!-- <p>Suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor
                            in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat.</p> -->
                    </div>
                    <div class="button">
                        <a href="<?php echo base_url('about/sai-mayee-trust'); ?>">View More</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 first-about-img-div about-page-col">
                    <img onContextMenu="return false;"
                        src="http://vihara.themerex.net/wp-content/uploads/2018/12/img-3-copyright.jpg" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 second-about-img-div about-page-col">
                    <img onContextMenu="return false;"
                        src="http://vihara.themerex.net/wp-content/uploads/2018/12/img-4-copyright.jpg" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 third-about-text-div about-page-col">
                    <div class="heading">
                        <p class="upper-heading">Trust</p>
                        <h4 class="lower-heading">Sai Meru Mathi Trust</h4>
                    </div>
                    <div class="text">
                        <p>The body is the temple of God and the temple is the body of societal consciousness of
                            Divinity.
                            Temples in India were (and still are) not merely architectural marvels of breath-taking
                            beauty, but also specialized structures designed for very specific purposes like creating
                            the
                            needed ambience to realize the principle of Oneness running through the variegated
                            creation, awakening and balancing chakras (Centre’s of consciousness) for living a

                            wholesome life, getting protection from physical harm and natural calamities, healing
                            diseases.</p>
                        <!-- <p>Suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor
                            in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat.</p> -->
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