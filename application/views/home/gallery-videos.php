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
    </style>
</head>

<body>
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
                        <a href="#!"
                            class="thumbnail img-thumbnail" style="width:100%;height:350px;" data-liquo="<?php echo $value->category;?>">
                            <iframe id="iframeVdo" src="https://www.youtube.com/embed/<?php echo $value->youtube;?>" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen style="width: 100%; height:100%"></iframe>
                            
                        </a>
                    </li>
                    <?php }} ?>
                    
                </ul>
            </div>
    </section>

    <?php $this->load->view('includes/footer') ?>
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



<script src="<?php echo base_url(); ?>assets/js/liquo.min.js"></script>
<script>
$("#gallery").liquo({
    menu: "#gallery-menu",
    random: true,
    start: "all"
});
</script>

</html>