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
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dataTable/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dataTable/button/css/buttons.dataTables.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/viewbox.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <!-- Captcha CSS -->
    <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />
    <style>
    .dt-buttons button {
        color: #fff;
        background-color: #ffaa49 !important;
        background-image: none !important;
        border-color: #ffaa49;
    }

    .table-bg {
        background-color: #ffaa49;
        color: #fff;
    }

    .btn-primary {
        color: #fff;
        background-color: #ffaa49;
        border-color: #ffaa49;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current,
    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
        background: #ffaa49;
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
                        <p class="upper-heading">Payment</p>
                        <h4 class="lower-heading">Donation</h4>
                    </div>
                    <div class="text">
                        <table id="dynamic" class="table table-striped table-hover">
                            <thead>
                                <tr class="table-bg">
                                    <th id="a" class="h5-para-p2" width="130px">Sl No.</th>
                                    <th id="b" class="h5-para-p2" width="62px">Action</th>
                                    <th id="f" class="h5-para-p2" width="100px">Trust</th>
                                    <th id="g" class="h5-para-p2" width="100px">Amount</th>
                                    <th id="h" class="h5-para-p2" width="100px">Timestamp</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    if (!empty($result)) {
                                        $count = 0;
                                      foreach ($result as $key => $value) { $count = $count+1;
                                      ?>
                                <tr>
                                    <td><?php echo (!empty($result))?$count:'---'  ?></td>
                                    <td class="action-btn  center-align">
                                        <!-- view user -->
                                        <a href="<?php echo base_url('payment-data/download/'.$this->encrypt->encode($value->id).'') ?>"
                                            class="btn btn-primary"><i class="fas fa-download"></i></i></a>
                                        <!-- view user -->
                                    </td>
                                    <td><?php echo (!empty($value->trust))?$value->trust:'---' ; ?></td>
                                    <td><?php echo (!empty($value->trust))?$value->amount:'---' ; ?></td>
                                    <td><?php echo (!empty($value->timestamp))?$value->timestamp:'---' ; ?></td>
                                </tr>
                                <?php } } ?>
                            </tbody>
                        </table>
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

<!-- data table -->
<script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/button/js/dataTables.buttons.min.js">
</script>
<script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/button/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/button/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/button/js/pdfmake.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/button/js/vfs_fonts.js"></script>

<script>
$(document).ready(function() {
    $('table').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf'
        ],
    });
    $('select').formSelect();
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


</html>