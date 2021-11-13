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
            <div class="about-page-row trust-page-row">
                <div
                    class="col-lg-6 col-md-12 col-sm-12 second-about-text-div about-page-col mission-col trust-page-col-one">
                    <div class="heading">
                        <p class="upper-heading">Vision</p>
                        <h4 class="lower-heading">Our Core Vision & Mission</h4>
                    </div>
                    <div class="text">
                        <h5 class="lower-heading">Vision</h5>
                        <p>Spread love and enhance human values through Selfless Service &amp; rejuvenate Sanatana
                            Dharma by
                            preserving our ancient Vedic Culture.</p>
                        <h5 class="lower-heading">Motto</h5>
                        <p>Serve to Live &amp; Live to Serve</p>
                    </div>
                    <!-- <div class="button">
                        <a href="">View More</a>
                    </div> -->
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 first-about-img-div about-page-col trust-page-col-two">
                    <img onContextMenu="return false;"
                        src="http://vihara.themerex.net/wp-content/uploads/2018/12/img-4-copyright.jpg" alt="">
                </div>
                <div
                    class="col-lg-12 col-md-12 col-sm-12 about-page-col first-about-text-div trust-no-bottom-col trust-page-col-three">
                    <div class="heading">
                        <p class="upper-heading">Trust</p>
                        <h4 class="lower-heading">Sai Mayee Trust</h4>
                    </div>
                    <div class="text">
                        <p>We at Sai Mayee Trust spearheaded a mission to prove
                            that all human beings are our brothers &amp; sisters and it’s our moral responsibility to
                            support each
                            other. Therefore, it is decided to reach out to people in all walks of life, help them
                            through
                            unconditional service, and improve their quality of life to spread love and positive vibes
                            with in the
                            community.
                        </p>
                        <p>For society to pulsate with joy and growth, all classes and ages of people, irrespective of
                            religion,
                            profession, gender or personal preferences, must have a bond of connectivity and
                            interdependence
                            that takes care of both material and emotional needs of everyone. In this light, we help
                            orphanages
                            so that children without parents can experience love and have their needs met and can become
                            useful members of the society when they grow up. At the other end, we also provide succour
                            to old
                            people who do not have anyone to take care of them. This way we are trying to revitalize the
                            community by connecting all its limbs to function together for universal good. Some of the
                            main
                            objectives include
                        </p>
                        <!-- <p class="icon-p"><a href=""><i class="fab fa-facebook-f"></i></a><a href=""><i
                                    class="fab fa-twitter"></i></a><a href=""><i class="fab fa-youtube"></i></a></p> -->
                    </div>
                </div>
                <div
                    class="col-lg-6 col-md-12 col-sm-12 second-about-text-div about-page-col trust-page-col trust-no-bottom-col trust-page-col-five">
                    <div class="text">
                        <ul>
                            <li>
                                <p>Supporting old age homes and orphanages with regular groceries, milk, medicines and
                                    cleaning agents etc.</p>
                            </li>
                            <li>
                                <p>Serving breakfast to school going children</p>
                            </li>
                            <li>
                                <p>Conducting medical camps in Government schools</p>
                            </li>
                            <li>
                                <p>Supporting people who are impacted by pandemic like situations with regular
                                    nutritious
                                    food, groceries, daily needs and medicines etc.</p>
                            </li>
                            <li>
                                <p>Helping the girl child get educated and become Self-dependent</p>
                            </li>
                            <li>
                                <p>Opening paathshaalaas for the rural and needy children and help them connect to
                                    mainstream life</p>
                            </li>
                            <li>
                                <p>Setting up goushaalaas</p>
                            </li>
                            <!-- <li>
                                <p>Suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                                    dolor
                                    in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
                                    feugiat.</p>
                            </li> -->
                        </ul>
                    </div>
                    <!-- <div class="button">
                        <a href="">View More</a>
                    </div> -->
                </div>
                <div
                    class="col-lg-6 col-md-12 col-sm-12 first-about-img-div about-page-col trust-no-bottom-col  trust-page-col-four">
                    <img onContextMenu="return false;"
                        src="http://vihara.themerex.net/wp-content/uploads/2018/12/img-3-copyright.jpg" alt="">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 about-page-col first-about-text-div trust-page-col-six">
                    <div class="text">
                        <p>There is only one language, the language of the Heart. There is only one religion, the
                            religion of Love. And best way to express Love is by doing service. 

                            Many great saints and avataars have proclaimed that for one’s spiritual growth “One must
                            indulge wholeheartedly in service, with sacred thoughts and without any desire for fruits of
                            the service”.

                        </p>
                        <p>We are sure your heart must be leaping out in love to our brothers and sisters needing a
                            helping
                            hand, and you must be eager to join hands with us to alleviate their agony to sanctify your
                            life and
                            revel in the joyful feeling of kinship. Also, we need many of you to come and join us in
                            this endeavor.
                            For sure, we together can make a difference.
                        </p>
                        <!-- <p class="icon-p"><a href=""><i class="fab fa-facebook-f"></i></a><a href=""><i
                                    class="fab fa-twitter"></i></a><a href=""><i class="fab fa-youtube"></i></a></p> -->
                    </div>
                </div>

                <!-- <div
                    class="col-lg-12 col-md-12 col-sm-12 about-page-col first-about-text-div trust-page-col trust-page-col-li trust-page-col-seven">
                    <div class="heading">
                        <h4 class="lower-heading">OUR SPIRITUAL ACTIVITIES:</h4>
                    </div>
                    <div class="text">
                        <ul>
                            <li>
                                <p>Suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                                    dolor
                                    in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
                                    feugiat.</p>
                            </li>
                            <li>
                                <p>Suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                                    dolor
                                    in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
                                    feugiat.</p>
                            </li>
                            <li>
                                <p>Suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                                    dolor
                                    in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
                                    feugiat.</p>
                            </li>
                            <li>
                                <p>Suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                                    dolor
                                    in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
                                    feugiat.</p>
                            </li>
                            <li>
                                <p>Suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                                    dolor
                                    in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
                                    feugiat.</p>
                            </li>
                        </ul>
                    </div>
                </div> -->

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