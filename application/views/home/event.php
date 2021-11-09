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

    <section class="events-page">
        <div class="wrapper">

            <div class="inner-event-page-main">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 head_div">
                        <div class="heading">
                            <!-- <p class="upper-heading">Event</p> -->
                            <h4 class="lower-heading"><?php echo $event->name ?></h4>
                        </div>
                        <div class="text__div">
                            <p><span><strong>Start Date :
                                    </strong></span><?php echo date('d', strtotime($event->sdate)); ?>
                                <?php echo date('M', strtotime($event->sdate)); ?>
                                <?php echo date('Y', strtotime($event->sdate)); ?></p>
                            <p><span><strong>End Date :
                                    </strong></span><?php echo date('d', strtotime($event->edate)); ?>
                                <?php echo date('M', strtotime($event->edate)); ?>
                                <?php echo date('Y', strtotime($event->edate)); ?></p>
                            <p><span><strong>Start Time :
                                    </strong></span><?php echo date('h:i A', strtotime($event->stime)); ?></p>
                            <p><span><strong>End Time :
                                    </strong></span><?php echo date('h:i A', strtotime($event->etime)); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 img_div">
                        <img  onContextMenu="return false;"  src="<?php echo base_url(); ?>assets/images/events/<?php echo $event->image; ?>" alt="">
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 paragraph_div">
                        <p><?php echo $event->description1; ?></p>
                        <?php if($event->description2 != null){ ?>
                        <p><?php echo $event->description2; ?></p>
                        <?php } ?>
                        <?php if($event->description3 != null){ ?>
                        <p><?php echo $event->description3; ?></p>
                        <?php } ?>
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