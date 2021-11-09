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
    .img-thumbnail {
        background-color: white !important;
        border: 1px solid white !important;
        text-align: center;
        transition: all 0.3s ease-in-out;
    }

    .img-thumbnail:hover {
        background-color: #ffaa49 !important;
        border: 1px solid #ffaa49 !important;
        text-align: center;
    }

    .audio-thumbnail {
        border: 1px solid transparent !important;
        text-align: center;
        background-image: linear-gradient(rgba(255, 170, 73, 0.5), rgba(255, 170, 73, 1)), url("<?php echo base_url(); ?>assets/images/logo.png");
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
    }

    .audio-description {
        height: 150px;
        max-height: 150px;
        overflow-y: auto;
        margin-bottom: 5px;
    }

    .audio-description::-webkit-scrollbar {
        width: 11px;
    }

    .audio-description {
        scrollbar-width: thin;
        scrollbar-color: var(--thumbBG) var(--scrollbarBG);
    }

    .audio-description::-webkit-scrollbar-track {
        background: var(--scrollbarBG);
    }

    .audio-description::-webkit-scrollbar-thumb {
        background-color: var(--thumbBG);
        border-radius: 6px;
        border: 3px solid var(--scrollbarBG);
    }

    .audio-description .description {
        text-align: left;
        color: #000;
        font-weight: bold;
        letter-spacing: 1.5px;
        font-size: 15px;
        line-height: 1.3;
    }

    .audio-title {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    .audio-title .title {
        font-size: 20px;
        font-weight: bold;
        color: #c53f93;
        text-transform: uppercase;
    }

    .audio-title .time-stamp {
        font-size: 17px;
        font-weight: bold;
        color: #747070;
    }

    .img-thumbnail{
        position: relative;
        transition: all 0.3s ease-in-out;
    }

    .img-thumbnail:hover img {
        opacity: 0.1;
    }

    .img-thumbnail:hover .desc-cont {
        opacity: 1;
    }

    .desc-cont{
        width: 100%;
        padding:5px;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }
    </style>
</head>

<body>
    <?php $this->load->view('includes/loader') ?>
    <?php $this->load->view('includes/header') ?>

    <?php $this->load->view('includes/hero') ?>

    <section class="about">
        <div class="wrapper">
            <div class="about-page-row service-page-row">

                <div
                    class="col-lg-6 col-md-12 col-sm-12 second-about-text-div about-page-col service-content-col service-content-col1">
                    <div class="heading">
                        <p class="upper-heading"><?php echo $services->title1 ; ?></p>
                        <h4 class="lower-heading"><?php echo $services->heading1 ; ?></h4>
                    </div>
                    <div class="text">
                        <?php echo $services->description1 ; ?>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-md-12 col-sm-12 first-about-img-div about-page-col service-content-col service-content-col2">
                    <img onContextMenu="return false;"
                        src="<?php echo base_url('assets/images/services/'.$services->image1); ?>" alt="">
                </div>
                <div
                    class="col-lg-12 col-md-12 col-sm-12 about-page-col first-about-text-div service-page-col service-content-col3">
                    <div class="text">
                        <?php echo $services->description2!=null ? $services->description2 : '' ; ?>
                    </div>
                </div>
                <?php if($services->title2!=null && $services->heading2!=null && $services->description3!=null){ ?>
                <div
                    class="col-lg-6 col-md-12 col-sm-12 second-about-img-div about-page-col service-content-col service-content-col5">
                    <img onContextMenu="return false;"
                        src="<?php echo base_url('assets/images/services/'.$services->image2); ?>" alt="">
                </div>
                <div
                    class="col-lg-6 col-md-12 col-sm-12 third-about-text-div about-page-col service-content-col service-content-col4">
                    <div class="heading">
                        <p class="upper-heading"><?php echo $services->title2 ; ?></p>
                        <h4 class="lower-heading"><?php echo $services->heading2 ; ?></h4>
                    </div>
                    <div class="text">
                        <?php echo $services->description3 ; ?>
                    </div>
                </div>
                <div
                    class="col-lg-12 col-md-12 col-sm-12 about-page-col first-about-text-div service-page-col service-content-col6">
                    <div class="text">
                        <?php echo $services->description4!=null ? $services->description4 : '' ; ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php
    if (!empty($gallery)) {
        $count = 0;
        ?>
    <section class="gallery service-gallery">
        <div class="wrapper">
            <div class="heading">
                <p class="upper-heading">Images</p>
                <h4 class="lower-heading">Latest From <?php echo $services->page; ?></h4>
            </div>
        </div>
        <div class="gallery-box">
            <?php foreach ($gallery as $key => $value) { $count = $count+1; ?>
            <a href="<?php echo base_url(); ?>assets/images/home/gallery/<?php echo $value->image;?>"
                class="thumbnail img-thumbnail">
                <img onContextMenu="return false;" alt=".."
                    src="<?php echo base_url(); ?>assets/images/home/gallery/<?php echo $value->image;?>" />
                <div class="desc-cont">
                    <div class="audio-title">
                        <p class="title"><?php echo $value->title;?></p>
                        <p class="time-stamp"><?php echo date('d', strtotime($value->timestamp)); ?>-
                            <?php echo date('M', strtotime($value->timestamp)); ?>-
                            <?php echo date('Y', strtotime($value->timestamp)); ?></p>
                    </div>
                    <div class="audio-description">
                        <p class="description"><?php echo $value->description;?></p>
                    </div>
                </div>
            </a>
            <?php } ?>

        </div>
        <div class="gallery-main-btn">
            <a href="<?php echo base_url('gallery/images'); ?>">View More Images</a>
        </div>

    </section>
    <?php } ?>

    <?php
    if (!empty($videos)) {
        $count = 0;
        ?>
    <section class="gallery service-gallery">
        <div class="wrapper">
            <div class="heading">
                <p class="upper-heading">Videos</p>
                <h4 class="lower-heading">Latest From <?php echo $services->page; ?></h4>
            </div>
        </div>
        <div class="gallery-box">
            <?php foreach ($videos as $key => $value) { $count = $count+1; ?>
            <a href="#!" style="height:350px;" class="thumbnail img-thumbnail">
                <iframe id="iframeVdo" src="https://www.youtube.com/embed/<?php echo $value->youtube;?>"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen style="width: 100%; height:100%"></iframe>
            </a>
            <?php } ?>

        </div>
        <div class="gallery-main-btn">
            <a href="<?php echo base_url('gallery/videos'); ?>">View More Videos</a>
        </div>

    </section>
    <?php } ?>

    <?php
    if (!empty($audios)) {
        $count = 0;
        ?>
    <section class="gallery service-gallery">
        <div class="wrapper">
            <div class="heading">
                <p class="upper-heading">Audios</p>
                <h4 class="lower-heading">Latest From <?php echo $services->page; ?></h4>
            </div>
        </div>
        <div class="gallery-box">
            <?php foreach ($audios as $key => $value) { $count = $count+1; ?>
            <a href="#!" class="thumbnail img-thumbnail audio-thumbnail" style="text-decoration:none;">
                <div class="audio-title">
                    <p class="title"><?php echo $value->title;?></p>
                    <p class="time-stamp"><?php echo date('d', strtotime($value->timestamp)); ?>-
                        <?php echo date('M', strtotime($value->timestamp)); ?>-
                        <?php echo date('Y', strtotime($value->timestamp)); ?></p>
                </div>
                <div class="audio-description">
                    <p class="description"><?php echo $value->description;?></p>
                </div>

                <audio controls style="width: 100%;">
                    <source src="<?php echo base_url('assets/images/home/audio/'.$value->audio); ?>"
                        type="audio/<?php echo substr($value->audio, strpos($value->audio, ".") + 1) ; ?>">
                    Your browser does not support the audio element.
                </audio>
            </a>
            <?php } ?>

        </div>
        <div class="gallery-main-btn">
            <a href="<?php echo base_url('gallery/audios'); ?>">View More Audios</a>
        </div>

    </section>
    <?php } ?>

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
<script src="<?php echo base_url(); ?>assets/js/jquery.viewbox.min.js"></script>
<script>
$('.thumbnail').viewbox({
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