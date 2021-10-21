<?php  $this->ci =& get_instance();
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title ?></title>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url()?>assets/fonts/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dataTable/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dataTable/button/css/buttons.dataTables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">

    <style type="text/css">
    .dash-list a .list-dashboard {
        transition: 0.5s
    }

    .dash-list a:hover .list-dashboard {
        transform: scale(1.1);
        background: #f3f3f3 !important
    }

    ul:not(.browser-default) {
        border-radius: 10px;
    }

    .collection.with-header .collection-item{padding-left:0 ;padding: 5px 15px}
    .collection .collection-item {
        padding: 5px 9px;
    }

    .collection.with-header .collection-header {
        padding: 10px 15px;
    }
    </style>
</head>

<body>
    <!-- headder -->
    <div id="header-include">
        <?php $this->load->view('include/header.php'); ?>
    </div>
    <!-- end headder -->
    <!-- main layout -->
    <section class="sec-top">
        <div class="container-wrap">
            <div class="row">
                <!-- menu  -->

                <div id="sidemenu-include">
                    <?php $this->load->view('include/menu.php'); ?>
                </div>


                <div class="col m12 s12 l9">
                    <div class="main-bar">
                        <p class="h5-para black-text  mtb-20">Dashboard</p>
                        <div class="dash-list">

                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div class="col s12 m6 l4">
                                        <div class="dashboard-repord">
                                            <ul class="collection with-header">
                                                <li class="collection-header">
                                                    <h5>Registration<span
                                                            class="secondary-content"><i style="padding-right:0;color:white;" class="fas fa-user li-icon"></i></span></h5>
                                                </li>
                                                <a href="<?php echo base_url('registration');?>"
                                                    class="collection-item">
                                                    <div><span>Total Applications</span><span
                                                            class="secondary-content"><?php echo $user_count;?></span>
                                                    </div>
                                                </a>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l4">
                                        <div class="dashboard-repord">
                                            <ul class="collection with-header">
                                                <li class="collection-header">
                                                    <h5>Enquiries<span
                                                            class="secondary-content"><i style="padding-right:0;color:white;" class="fas fa-envelope li-icon"></i></span></h5>
                                                </li>
                                                <a class="collection-item" href="<?php echo base_url('enquiries');?>">
                                                    <div><span>Total Applications</span><span
                                                            class="secondary-content"><?php echo $contact_count;?></span>
                                                    </div>
                                                </a>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l4">
                                        <div class="dashboard-repord">
                                            <ul class="collection with-header">
                                                <li class="collection-header">
                                                    <h5>Literatures<span
                                                            class="secondary-content"><i style="padding-right:0;color:white;" class="fas fa-book li-icon"></i></span></h5>
                                                </li>
                                                <a class="collection-item" href="<?php echo base_url('literature');?>">
                                                    <div><span>Total Applications</span><span
                                                            class="secondary-content"><?php echo $literature_count;?></span>
                                                    </div>
                                                </a>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l4">
                                        <div class="dashboard-repord">
                                            <ul class="collection with-header">
                                                <li class="collection-header">
                                                    <h5>Subscription<span
                                                            class="secondary-content"><i style="padding-right:0;color:white;" class="fas fa-address-card li-icon"></i></span></h5>
                                                </li>
                                                <a class="collection-item" href="<?php echo base_url('subscription');?>">
                                                    <div><span>Total Applications</span><span
                                                            class="secondary-content"><?php echo $subscription_count;?></span>
                                                    </div>
                                                </a>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l4">
                                        <div class="dashboard-repord">
                                            <ul class="collection with-header">
                                                <li class="collection-header">
                                                    <h5>Volunteers<span
                                                            class="secondary-content"><i style="padding-right:0;color:white;" class="fas fa-users li-icon"></i></span></h5>
                                                </li>
                                                <a class="collection-item" href="<?php echo base_url('volunteer');?>">
                                                    <div><span>Total Applications</span><span
                                                            class="secondary-content"><?php echo $volunteer_count;?></span>
                                                    </div>
                                                </a>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l4">
                                        <div class="dashboard-repord">
                                            <ul class="collection with-header">
                                                <li class="collection-header">
                                                    <h5>Events<span
                                                            class="secondary-content"><i style="padding-right:0;color:white;" class="fas fa-calendar-alt li-icon"></i></span></h5>
                                                </li>
                                                <a class="collection-item" href="<?php echo base_url('events/manava-seva');?>">
                                                    <div><span>Manava Seva</span><span
                                                            class="secondary-content"><?php echo $manava_count;?></span>
                                                    </div>
                                                </a>
                                                <a class="collection-item" href="<?php echo base_url('events/madhava-seva');?>">
                                                    <div><span>Madhava Seva</span><span
                                                            class="secondary-content"><?php echo $madhava_count;?></span>
                                                    </div>
                                                </a>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l4">
                                        <div class="dashboard-repord">
                                            <ul class="collection with-header">
                                                <li class="collection-header">
                                                    <h5>Donations<span
                                                            class="secondary-content"><i style="padding-right:0;color:white;" class="fas fa-hand-holding-usd li-icon"></i></span></h5>
                                                </li>
                                                <a class="collection-item" href="<?php echo base_url('donation/sai-mayee-trust');?>">
                                                    <div><span>Sai Mayee Trust</span><span
                                                            class="secondary-content">Rs. <?php echo $mayee_count->amount;?></span>
                                                    </div>
                                                </a>
                                                <a class="collection-item" href="<?php echo base_url('donation/sai-meru-mathi-trust');?>">
                                                    <div><span>Sai Meru Mathi Trust</span><span
                                                            class="secondary-content">Rs. <?php echo $meru_count->amount;?></span>
                                                    </div>
                                                </a>

                                            </ul>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <!-- end footer -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/chart.min.js"></script>
    <!-- data table -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/button/js/dataTables.buttons.min.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/button/js/buttons.flash.min.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/button/js/buttons.html5.min.js">
    </script>
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

        $('#header-include').load('include/header.html');
        $('#sidemenu-include').load('include/menu.html');
    });
    </script>

    <script>
    <?php $this->load->view('include/message.php'); ?>
    </script>

</body>

</html>