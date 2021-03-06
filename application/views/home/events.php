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
            <div class="heading">
                <p class="upper-heading">Events</p>
                <h4 class="lower-heading"><?php echo $hero_head_type ?></h4>
            </div>
            <div class="events-page-main-div">
                <div class="events-page-inner-div">
                    <div style="text-align:right;">
                        <p style="display: inline-block;margin:0;text-align:right;">
                            <select id="table_filter"
                                style="border-color: #ffaa49;border-radius: 5px;background: rgba(255, 170, 73, 0.5);color: white; margin-bottom: 10px; padding: 5px 10px;outline:none;">
                                <!-- <option value="">Select Filter</option> -->
                                <option value="all" <?php echo $this->input->get('filter')=="all" ? "selected": "" ?> >All <?php echo $hero_head_type ?></option>
                                <option value="madhava-seva" <?php echo $this->input->get('filter')=="madhava-seva" ? "selected": "" ?> >Madhava Seva</option>
                                <option value="manava-seva" <?php echo $this->input->get('filter')=="manava-seva" ? "selected": "" ?> >Manava Seva</option>
                            </select>
                        </p>
                    </div>

                    <div class="time-div">
                        <!-- <h6>September 2021</h6> -->

                        <div class="line"></div>
                    </div>

                    <?php
                    if (!empty($events)) {
                        $count = 0;
                        foreach ($events as $key => $value) { $count = $count+1;
                        ?>
                    <div class="events-page-row">
                        <div class="date-col">
                            <p><?php echo date('D', strtotime($value->sdate)); ?></p>
                            <h6><?php echo date('d', strtotime($value->sdate)); ?></h6>
                        </div>
                        <div class="content-col">
                            <h6> <?php echo date('d', strtotime($value->sdate)); ?>
                                <?php echo date('M', strtotime($value->sdate)); ?>
                                <?php echo date('Y', strtotime($value->sdate)); ?> @
                                <?php echo date('h:i A', strtotime($value->stime)); ?> -
                                <?php echo date('d', strtotime($value->edate)); ?>
                                <?php echo date('M', strtotime($value->edate)); ?>
                                <?php echo date('Y', strtotime($value->edate)); ?> @
                                <?php echo date('h:i A', strtotime($value->etime)); ?> </h6>
                            <h4 style="text-transform: uppercase"><a
                                    href="<?php echo base_url('events/'.$type.'/'.$this->encrypt->encode($value->id)); ?>"><?php echo $value->name; ?></a>
                            </h4>
                            <p><?php echo substr($value->description1,0,300); ?>....</p>
                        </div>
                        <div class="img-col">
                            <img onContextMenu="return false;"
                                src="<?php echo base_url(); ?>assets/images/events/<?php echo $value->image; ?>" alt="">
                        </div>
                    </div>

                    <?php } } ?>

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
$('#table_filter').on('change', function() {
    if ($(this).val() != "") {
        window.location.replace('<?php echo base_url().'events/'.$type.'?filter='; ?>' + $(this)
            .val());
    }
});
</script>

</html>