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
    #gallery li {
        text-align: center;
    }

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

    .img-thumbnail {
        position: relative;
        transition: all 0.3s ease-in-out;
    }

    .img-thumbnail:hover img {
        opacity: 0.1;
    }

    .img-thumbnail:hover .desc-cont {
        opacity: 1;
    }

    .desc-cont {
        width: 100%;
        padding: 5px;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }

    .wrapper {
        position: relative;
    }

    .searchCont {
        position: absolute;
        top: 0;
        right: 0;
        text-align: right !important;
    }

    .searchCont p {
        display: inline-block;
        margin: 0;
        text-align: right;
    }

    .searchCont p input {
        width: 160px;
        border-color: #ffaa49;
        border-radius: 5px;
        background: rgba(255, 170, 73, 0.5);
        color: black;
        margin-bottom: 10px;
        padding: 5px 10px;
        outline: none;
    }

    .searchCont p input::placeholder {
        color: black;
    }

    .searchCont p input:-ms-input-placeholder {
        color: black;
    }

    .searchCont p input::-ms-input-placeholder {
        color: black;
    }

    #gallery-search {
        display: none;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: center;
        width: 100%;
    }

    #gallery-search li {
        flex: 0 0 auto;
        width: 32%;
        margin-bottom: 20px;
        transition: all 0.3s ease-in-out;
        text-align: center;
    }

    #gallery-search li .img-thumbnail {
        display: inline-block;
        width: 75%;
        transition: all 0.3s ease-in-out;
    }

    #gallery-search li .img-thumbnail img {
        max-width: 100%;
        max-height: 300px;
        transition: all 0.3s ease-in-out;
    }

    #gallery-search li .img-thumbnail {
        background-color: white !important;
        border: 1px solid white !important;
        text-align: center;
        transition: all 0.3s ease-in-out;
    }

    #gallery-search li .img-thumbnail:hover {
        background-color: #ffaa49 !important;
        border: 1px solid #ffaa49 !important;
        text-align: center;
    }

    @media screen and (max-width: 1200px) {
        .searchCont {
            position: static;
            text-align:center !important;
        }

        .searchCont p {
            text-align: center;
        }
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

            <div class="heading searchCont" >
                <p>
                    <input type="text" placeholder="Search" id="inputSearch">
                </p>
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
                    <a href="<?php echo base_url(); ?>assets/images/home/gallery/<?php echo $value->image;?>"
                        class="thumbnail img-thumbnail" data-liquo="<?php echo $value->category;?>">
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
                </li>
                <?php }} ?>

            </ul>
            <ul id="gallery-search"></ul>
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

<script src="<?php echo base_url(); ?>assets/js/liquo.min.js"></script>
<script>
$("#gallery").liquo({
    menu: "#gallery-menu",
    random: true,
    start: "all"
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

<script>
$(document).ready(function() {
    let imageArr = [];
    let imageObj = {};

    <?php
                if (!empty($gallery)) {
                    foreach ($gallery as $key => $value) { 
                    ?>
    imageObj['image'] = '<?php echo $value->image;?>';
    imageObj['title'] = '<?php echo $value->title;?>';
    imageObj['description'] = '<?php echo $value->description;?>';
    imageObj['category'] = '<?php echo $value->category;?>';
    imageObj['date'] =
        '<?php echo date('d', strtotime($value->timestamp)); ?>-<?php echo date('M', strtotime($value->timestamp)); ?>-<?php echo date('Y', strtotime($value->timestamp)); ?>';
    imageArr.push(imageObj);
    imageObj = {};

    <?php }} ?>

    $("#inputSearch").on("input", function(e) {
        console.log($(this).val())
        if (($(this).val()).length > 0) {
            $('#gallery-menu').css('display', 'none')
            $('#gallery').css('display', 'none')
            $('#gallery-search').css('display', 'flex')
            let searchArr = imageArr.filter(item => {
                return (item.title).toLowerCase().includes(($(this).val()).toLowerCase()) || (
                    item.description).toLowerCase().includes(($(this).val())
                    .toLowerCase()) || (item.category).toLowerCase().includes(($(this)
                        .val())
                    .toLowerCase()) || (item.date).toLowerCase().includes(
                    ($(this).val()).toLowerCase());
            })
            $("#gallery-search").html('');
            let node = ``;
            for (let i = 0; i < searchArr.length; i++) {
                node += `<li>
            <a href="<?php echo base_url(); ?>assets/images/home/gallery/${searchArr[i]['image']}" class="thumbnail img-thumbnail" >
            <img src="<?php echo base_url(); ?>assets/images/home/gallery/${searchArr[i]['image']}" onContextMenu="return false;" alt=".." />
            <div class="desc-cont"><div class="audio-title">
            <p class="title">${searchArr[i]['title']}</p><p class="time-stamp">${searchArr[i]['date']}</p>
            </div>
            <div class="audio-description">
            <p class="description">${searchArr[i]['description']}</p>
            </div>
            </div>
            </a>
            </li>
            </li>`
            }
            $("#gallery-search").append(node);
        } else {
            $('#gallery-menu').css('display', 'block')
            $('#gallery').css('display', 'flex')
            $('#gallery-search').css('display', 'none')
            $("#gallery-search").html('');
        }

        return false;
    });
});
</script>

</html>