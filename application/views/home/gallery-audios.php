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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/audio-player.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/viewbox.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <!-- Captcha CSS -->
    <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />
    <style>
    .liquo-gallery {
        margin: 0;
        padding: 0;
    }

    .liquo-gallery li {
        list-style-type: none;
        display: inline-block;
    }

    .liquo-active {
        font-weight: bold;
    }

    #gallery li:hover>a {
        background-color: transparent;
        background-image: linear-gradient(rgba(255, 170, 73, 0.5), rgba(255, 170, 73, 1)), url("<?php echo base_url(); ?>assets/images/logo.png") !important;
    }

    .img-thumbnail {
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

    </style>
</head>

<body>
    <?php $this->load->view('includes/loader') ?>
    <?php $this->load->view('includes/header') ?>

    <?php $this->load->view('includes/hero') ?>

    <section class="gallery-page">
        <div class="wrapper">
            <div class="heading">
                <p class="upper-heading">GALLERY</p>
                <h4 class="lower-heading">Latest From Gallery</h4>
            </div>

            <div id="gallery-menu">
                <a href="#" data-liquo="all">All</a>
                <?php
                if (!empty($category)) {
                    $count = 0;
                    foreach ($category as $key => $value) { 
                    ?>
                <a href="#" data-liquo="<?php echo $count; ?>"><?php echo $value->category; ?></a>
                <?php $count = $count+1; }} ?>
            </div>

        </div>
        <div class="gallery-box">
            <ul id="gallery">
                <?php
                if (!empty($gallery)) {
                    foreach ($gallery as $key => $value) { 
                    ?>
                <li data-liquo="<?php echo array_search($value->category, $category_name); ?>">
                    <a href="#!" class="thumbnail img-thumbnail" style="width:100%;text-decoration:none;"
                        data-liquo="<?php echo $value->category;?>">

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
                </li>
                <?php }} ?>

            </ul>
        </div>
    </section>

    <?php $this->load->view('includes/footer') ?>
    <?php $this->load->view('includes/scroll-top-button') ?>
</body>

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/tata.js"></script>
<script src="<?php echo base_url(); ?>assets/js/navbar.js"></script>
<script src="<?php echo base_url(); ?>assets/js/audio-player.js"></script>

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



<script src="<?php echo base_url(); ?>assets/js/liquo.min.js"></script>
<script>
$("#gallery").liquo({
    menu: "#gallery-menu",
    random: true,
    start: "all"
});
</script>

</html>