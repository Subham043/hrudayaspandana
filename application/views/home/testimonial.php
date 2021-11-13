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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <!-- Captcha CSS -->
    <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />
    <style>
    .about .about-page-row {
        justify-content: center;
    }

    .about .about-page-row .about-page-col {
        margin-bottom: 0px;
    }

    .about-page-col {
        overflow-y: hidden;
    }

    .scroll-div::-webkit-scrollbar {
        width: 11px;
    }

    .scroll-div {
        scrollbar-width: thin;
        scrollbar-color: var(--thumbBG) var(--scrollbarBG);
    }

    .scroll-div::-webkit-scrollbar-track {
        background: var(--scrollbarBG);
    }

    .scroll-div::-webkit-scrollbar-thumb {
        background-color: var(--thumbBG);
        border-radius: 6px;
        border: 3px solid var(--scrollbarBG);
    }

    .testimonial-main-div {
        width: 100%;
        margin-top: 50px;
    }

    .testimonial-video-main-div {
        width: 100%;
    }

    .testimonial-video-hover-div {
        width: 95% !important;
        height: 300px;
        background: white;
        margin-left: auto;
        margin-right: auto;
        border: 3px solid #ffaa49;
        border-radius: 5px;
        border-top-right-radius: 30px;
        border-bottom-left-radius: 30px;
    }

    .testimonial-hover-div {
        width: 95% !important;
        background: white;
        margin-left: auto;
        margin-right: auto;
        border: 3px solid #ffaa49;
        border-radius: 5px;
        border-top-right-radius: 30px;
        border-bottom-left-radius: 30px;
        position: relative;
        padding: 10px;
    }

    .testimonial-div-image {
        width: 100px;
        height: 100px;
        border: 3px solid #ffaa49;
        border-radius: 50%;
        margin-top: -60px;
        margin-left: auto;
        margin-right: auto;
    }

    .testimonial-div-image img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }

    .testimonial-div-quote {
        width: 100%;
        height: 200px;
        overflow: hidden;
    }

    .testimonial-div-quote .scroll-div {
        overflow-y: auto;
        width: 100%;
        height: 100%;
    }

    .testimonial-div-quote h4 {
        text-align: center;
        margin-top: 15px;
        color: #c53f93;
    }

    .testimonial-div-quote p {
        text-align: center;
    }

    .owl-prev,
    .owl-next {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        color: #fff !important;
        background: #3c3489 !important;
        outline: none;
        border: none;
        box-shadow: 1px 1px 1px 1px #818181;
        transition: all 0.3s ease-in-out;
        opacity: 0.3;
    }

    .owl-prev:hover,
    .owl-next:hover {
        opacity: 1;
    }

    .owl-nav {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
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
                <div class="col-lg-12 col-md-12 col-sm-12 about-page-col">
                    <div class="heading">
                        <p class="upper-heading">Testimonial</p>
                        <h4 class="lower-heading">Testimonial</h4>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 about-page-col">
                    <div class="text">
                        <div class="owl-carousel">
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/testimonial-image.jpg"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>Sunil KM</h4>
                                            <div class="scroll-div">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                    nonummy nibh euismod
                                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                                    enim ad
                                                    minim veniam, quis
                                                    nostrud exerci tation ullamcorper.</p>
                                                <p>Suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem
                                                    vel eum iriure dolor
                                                    in hendrerit in vulputate velit esse molestie consequat, vel illum
                                                    dolore eu feugiat.</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/testimonial-image.jpg"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>Sunil KM</h4>
                                            <div class="scroll-div">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                    nonummy nibh euismod
                                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                                    enim ad
                                                    minim veniam, quis
                                                    nostrud exerci tation ullamcorper.</p>
                                                <p>Suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem
                                                    vel eum iriure dolor
                                                    in hendrerit in vulputate velit esse molestie consequat, vel illum
                                                    dolore eu feugiat.</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/testimonial-image.jpg"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>Sunil KM</h4>
                                            <div class="scroll-div">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                    nonummy nibh euismod
                                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                                    enim ad
                                                    minim veniam, quis
                                                    nostrud exerci tation ullamcorper.</p>
                                                <p>Suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem
                                                    vel eum iriure dolor
                                                    in hendrerit in vulputate velit esse molestie consequat, vel illum
                                                    dolore eu feugiat.</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/testimonial-image.jpg"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>Sunil KM</h4>
                                            <div class="scroll-div">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                    nonummy nibh euismod
                                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                                    enim ad
                                                    minim veniam, quis
                                                    nostrud exerci tation ullamcorper.</p>
                                                <p>Suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem
                                                    vel eum iriure dolor
                                                    in hendrerit in vulputate velit esse molestie consequat, vel illum
                                                    dolore eu feugiat.</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/testimonial-image.jpg"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>Sunil KM</h4>
                                            <div class="scroll-div">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                    nonummy nibh euismod
                                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                                    enim ad
                                                    minim veniam, quis
                                                    nostrud exerci tation ullamcorper.</p>
                                                <p>Suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem
                                                    vel eum iriure dolor
                                                    in hendrerit in vulputate velit esse molestie consequat, vel illum
                                                    dolore eu feugiat.</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 about-page-col">
                    <div class="heading">
                        <p class="upper-heading">Testimonial</p>
                        <h4 class="lower-heading">Video Testimonial</h4>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 about-page-col">
                    <div class="text">
                        <div class="owl-carousel">
                            <div>
                                <div class="testimonial-video-main-div">
                                    <div class="testimonial-video-hover-div">
                                        <iframe id="iframeVdo" src="https://www.youtube.com/embed/pFLu9n1StDM"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen style="width: 100%; height:100%;border-radius: 5px;border-top-right-radius: 30px;border-bottom-left-radius: 30px;"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-video-main-div">
                                    <div class="testimonial-video-hover-div">
                                        <iframe id="iframeVdo" src="https://www.youtube.com/embed/pFLu9n1StDM"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen style="width: 100%; height:100%;border-radius: 5px;border-top-right-radius: 30px;border-bottom-left-radius: 30px;"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-video-main-div">
                                    <div class="testimonial-video-hover-div">
                                        <iframe id="iframeVdo" src="https://www.youtube.com/embed/pFLu9n1StDM"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen style="width: 100%; height:100%;border-radius: 5px;border-top-right-radius: 30px;border-bottom-left-radius: 30px;"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-video-main-div">
                                    <div class="testimonial-video-hover-div">
                                        <iframe id="iframeVdo" src="https://www.youtube.com/embed/pFLu9n1StDM"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen style="width: 100%; height:100%;border-radius: 5px;border-top-right-radius: 30px;border-bottom-left-radius: 30px;"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-video-main-div">
                                    <div class="testimonial-video-hover-div">
                                        <iframe id="iframeVdo" src="https://www.youtube.com/embed/pFLu9n1StDM"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen style="width: 100%; height:100%;border-radius: 5px;border-top-right-radius: 30px;border-bottom-left-radius: 30px;"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-video-main-div">
                                    <div class="testimonial-video-hover-div">
                                        <iframe id="iframeVdo" src="https://www.youtube.com/embed/pFLu9n1StDM"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen style="width: 100%; height:100%;border-radius: 5px;border-top-right-radius: 30px;border-bottom-left-radius: 30px;"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-video-main-div">
                                    <div class="testimonial-video-hover-div">
                                        <iframe id="iframeVdo" src="https://www.youtube.com/embed/pFLu9n1StDM"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen style="width: 100%; height:100%;border-radius: 5px;border-top-right-radius: 30px;border-bottom-left-radius: 30px;"></iframe>
                                    </div>
                                </div>
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
<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/tata.js"></script>
<script src="<?php echo base_url(); ?>assets/js/navbar.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1024: {
                items: 3,
                nav: true,
                loop: true
            }
        }
    });

    $('.owl-prev').html('<i class="fas fa-long-arrow-alt-left"></i>')
    $('.owl-next').html('<i class="fas fa-long-arrow-alt-right"></i>')
});
</script>

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