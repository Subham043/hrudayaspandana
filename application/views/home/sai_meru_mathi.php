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
                        <h4 class="lower-heading">Sri Sai Meru Mathi Trust</h4>
                    </div>
                    <div class="text">
                        <p>Temples in India were (and still are) not merely architectural marvels of breath-taking
                            beauty, but also specialized structures designed for very specific purposes like creating
                            the
                            needed ambience to realize the principle of Oneness running through the variegated
                            creation, awakening and balancing chakras (Centre’s of consciousness) for living a

                            wholesome life, getting protection from physical harm and natural calamities, healing
                            diseases. Gigantic temples were sometimes carved from a single piece of rock as blocks of
                            rocks were
                            pieced together at other times like a giant jigsaw puzzle to build the temples, often
                            defying
                            scientific logic besides establishing the supreme genius of the Indian temple architects.
                        </p>
                        <p>Obviously, temples are repositories of invaluable energy, the judicious and discerning use of
                            which can resolve almost all human predicaments and help in knowledge/skill acquisition,
                            thus helping in cultural development of the society. The team at Sri Sai Meru Mathi Trust
                            has taken the hallowed and useful service of
                            preserving our culture by doing Madhava Seva (for guiding mankind along the right path and
                            to help in the protection and prosperity of the entire world). Some of our main activities
                            include:
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
                                <p>Rudrabhishekam – for promoting peace and harmony</p>
                            </li>
                            <li>
                                <p>Devata Kalyanam – performing celestial weddings to achieve global harmony</p>
                            </li>
                            <li>
                                <p>Sarva Devata Homam – for sanctification of Prakruti and enhancing Her balance.
                                    These incantations generate protective, healing and pleasant vibrations that charge
                                    the environment with positive energy from which everybody can draw spiritual
                                    sustenance and the spirit to be more effective &amp; efficient.</p>
                            </li>
                            <li>
                                <p>Devalaya Punarodharanam – for protecting the society by re-establishing temples</p>
                            </li>
                            <li>
                                <p>Group Chanting - helps people sense the need of congregations thus develops
                                    mutual warmth, societal security and the responsibility for communal harmony in
                                    them and genuine Lok Kalyanam happens</p>
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

                        <p>Essence of scriptures is “madhava seva” – it is to guide mankind along the right path for
                            creating a protected and prosperous world. This seva inculcates dharmic values in the people,
                            their families and bring them together to further aim of unity – “Vasudeva kutumbam”. Team
                            Hrudaya Spandana is attempting to serve the world to protect, preserve and propagate
                            sanathana dharma, rising above caste, class and language barriers. It is believed that this
                            helps people to bring about an inner transformation.
                            Rudrabhishekam, homas and devatha kalyanams have a profound effect on the environment and
                            people attending it. These vibrations purify the surroundings and calming effect on the
                            people’s mind. These can be well compared to meditation/yoga. The experience of oneness of
                            the worshipper with the worshipped is realization of true nature of the self. These pujas,
                            celestial weddings, homas are carried out for the welfare of the world. These incantations
                            generate protective, healing and pleasant vibrations that charge the environment with
                            positive energy.
                            A true devotee never thinks of himself. He is so full of the thought of God that his own
                            self is forgotten. That is the best way to attain salvation.


                        </p>
                        <p>We are sure our spiritual, noble, lofty and socially useful mission must be resonating with
                            your heart, and as an enlightened Indian citizen you would like to contribute in some way or
                            the other to this resurrection of our ancient culture oriented on modern techniques and
                            tools.
                            Get in touch with us at… It is your Indian family. You can help in any way you want. Be

                            connected with us to measure the updated progress of our efforts to reinstate Sanaatana
                            dharma for universal good and positive progress.
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