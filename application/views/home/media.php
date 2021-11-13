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
    .custom-row {
        display: flex;
        flex-wrap: wrap;
        padding: 0 4px;
    }

    /* Create four equal columns that sits next to each other */
    .custom-column {
        flex: 25%;
        max-width: 25%;
        padding: 0 4px;
    }

    .custom-column img {
        margin-top: 8px;
        vertical-align: middle;
        width: 100%;
    }

    /* Responsive layout - makes a two column-layout instead of four columns */
    @media screen and (max-width: 800px) {
        .custom-column {
            flex: 50%;
            max-width: 50%;
        }
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .custom-column {
            flex: 100%;
            max-width: 100%;
        }
    }
    </style>
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
                        <p class="upper-heading">Media</p>
                        <h4 class="lower-heading">Media</h4>
                    </div>
                    <div class="text">
                        <div class="custom-row">
                            <div class="custom-column">
                                <a href="<?php echo base_url(); ?>assets/images/media-page/wedding.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/wedding.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/rocks.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/rocks.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/falls2.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/falls2.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/paris.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/paris.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/nature.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/nature.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/mist.jpg" class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/mist.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/paris.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/paris.jpg">
                                </a>
                            </div>
                            <div class="custom-column">
                                <a href="<?php echo base_url(); ?>assets/images/media-page/underwater.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/underwater.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/ocean.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/ocean.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/wedding.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/wedding.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/mountainskies.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/mountainskies.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/rocks.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/rocks.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/underwater.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/underwater.jpg">
                                </a>
                            </div>
                            <div class="custom-column">
                                <a href="<?php echo base_url(); ?>assets/images/media-page/wedding.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/wedding.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/rocks.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/rocks.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/falls2.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/falls2.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/paris.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/paris.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/nature.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/nature.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/mist.jpg" class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/mist.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/paris.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/paris.jpg">
                                </a>
                            </div>
                            <div class="custom-column">
                                <a href="<?php echo base_url(); ?>assets/images/media-page/underwater.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/underwater.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/ocean.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/ocean.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/wedding.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/wedding.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/mountainskies.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/mountainskies.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/rocks.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/rocks.jpg">
                                </a>
                                <a href="<?php echo base_url(); ?>assets/images/media-page/underwater.jpg"
                                    class="image-link">
                                    <img src="<?php echo base_url(); ?>assets/images/media-page/underwater.jpg">
                                </a>
                            </div>
                        </div>
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
    // $("body").on("contextmenu", function(e) {
    //     tata.error('Error', 'right-click is disabled!', {
    //         duration: 10000,
    //         animate: 'slide',
    //     })
    //     return false;
    // });
});
</script>

<script src="<?php echo base_url(); ?>assets/js/jquery.viewbox.min.js"></script>
<script>
$('.image-link').viewbox({
    template: '<div class="viewbox-container"><div class="viewbox-body"><div class="viewbox-header"></div><div class="viewbox-content"></div><div class="viewbox-footer"></div></div></div>',
    loader: '<div class="loader"><div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div></div>',
    setTitle: true,
    margin: 20,
    resizeDuration: 300,
    openDuration: 200,
    closeDuration: 200,
    closeButton: true,
    navButtons: true,
    closeOnSideClick: true,
    nextOnContentClick: true,
    useGestures: true,
    imageExt: ['png', 'jpg', 'jpeg', 'webp', 'gif']
});
</script>

</html>