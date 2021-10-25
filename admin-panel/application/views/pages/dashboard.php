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

    .collection.with-header .collection-item {
        padding-left: 0;
        padding: 5px 15px
    }

    .collection .collection-item {
        padding: 5px 9px;
    }

    .collection.with-header .collection-header {
        padding: 10px 15px;
    }

    .card .card-content {
        padding: 24px 0;
    }

    .pt-0 {
        padding-top: 0 !important;
    }

    .pb-0 {
        padding-bottom: 0 !important;
    }

    .pb-5 {
        padding-bottom: 5px !important;
    }

    .font-bold {
        font-weight: bold;
    }

    .text-white {
        color: #fff !important;
    }

    .card .card-action {
        border-top: none !important;
        padding-left: 5px !important;
        padding-right: 5px !important;
    }

    .list-title {
        font-size: 20px !important;
        padding: 10px;
        margin: 0 !important;
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
                                <div class="top-count">
                                    <div class="col s12 m3">
                                        <div class="card green hoverable">
                                            <div class="card-content white-text center-align pb-5">
                                                <span class="card-title center-align text-white"><i
                                                        class="fas fa-user"></i></span>
                                            </div>

                                            <div class="card-action pt-0 pb-0">
                                                <!-- <span class="white-text font-bold">Registration</span> -->
                                                <a href="<?php echo base_url('registration');?>"
                                                    class="collection-item text-white font-bold">
                                                    <div><span>Registration</span><span
                                                            class="secondary-content text-white"><?php echo $user_count;?></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m3">
                                        <div class="card orange hoverable">
                                            <div class="card-content white-text center-align pb-5">
                                                <span class="card-title center-align text-white"><i
                                                        class="fas fa-envelope"></i></span>
                                            </div>
                                            <div class="card-action  pt-0 pb-0">
                                                <a class="collection-item text-white font-bold"
                                                    href="<?php echo base_url('enquiries');?>">
                                                    <div><span>Enquiries</span><span
                                                            class="secondary-content text-white"><?php echo $contact_count;?></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m3">
                                        <div class="card blue darken-1 hoverable">
                                            <div class="card-content white-text center-align pb-5">
                                                <span class="card-title center-align text-white"><i
                                                        class="fas fa-book"></i></span>
                                            </div>
                                            <div class="card-action   pt-0 pb-0">
                                                <a class="collection-item text-white font-bold"
                                                    href="<?php echo base_url('literature');?>">
                                                    <div><span>Literatures</span><span
                                                            class="secondary-content text-white"><?php echo $literature_count;?></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col s12 m3">
                                        <div class="card green  darken-4 hoverable">
                                            <div class="card-content white-text center-align pb-5">
                                                <span class="card-title center-align text-white"><i
                                                        class="fas fa-address-card"></i></span>
                                            </div>
                                            <div class="card-action   pt-0 pb-0">
                                                <a class="collection-item text-white font-bold"
                                                    href="<?php echo base_url('subscription');?>">
                                                    <div><span>Subscription</span><span
                                                            class="secondary-content text-white"><?php echo $subscription_count;?></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="top-count">








                                </div>
                            </div>

                            <!-- <div class="row">
                                <div class="top-count">

                                
                                    
                                    <div class="col s12 m3">
                                        <div class="card lime  darken-4 hoverable">
                                            <div class="card-content white-text center-align pb-5">
                                                <span class="card-title center-align text-white"><i
                                                        class="fas fa-hand-holding-usd"></i></span>
                                            </div>
                                            <div class="card-action   pt-0 pb-0">
                                                <a class="collection-item text-white font-bold"
                                                    href="<?php echo base_url('donation/sai-meru-mathi-trust');?>">
                                                    <div><span>Sri Sai Meru Mathi Trust</span><span
                                                            class="secondary-content text-white"><?php echo $meru_count->amount;?></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <div class="row">

                                <div class="col m9 s12 l9">

                                    <div class="card  darken-1">
                                        <div class="card-content ">
                                            <div class="x_panel">

                                                <div class="x_title">

                                                    <h2 class="list-title ">Sai Meru Mathi Trust Donation By Month</h2>

                                                    <div class="clearfix"></div>

                                                </div>


                                                <div class="x_content das-chart chrt-width">

                                                    <canvas id="myChart"></canvas>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col s12 m3">
                                    <div class="card blue-grey hoverable">
                                        <div class="card-content white-text center-align pb-5">
                                            <span class="card-title center-align text-white"><i
                                                    class="fas fa-users"></i></span>
                                        </div>

                                        <div class="card-action pt-0 pb-0">
                                            <!-- <span class="white-text font-bold">Registration</span> -->
                                            <a class="collection-item text-white font-bold"
                                                href="<?php echo base_url('volunteer');?>">
                                                <div><span>Volunteers</span><span
                                                        class="secondary-content text-white font-bold"><?php echo $volunteer_count;?></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col s12 m3">
                                    <div class="card purple hoverable">
                                        <div class="card-content white-text center-align pb-5">
                                            <span class="card-title center-align text-white"><i
                                                    class="fas fa-calendar-alt"></i></span>
                                        </div>
                                        <div class="card-action  pt-0 pb-0">
                                            <a class="collection-item text-white font-bold"
                                                href="<?php echo base_url('events/manava-seva');?>">
                                                <div><span>Manava Seva Events</span><span
                                                        class="secondary-content text-white"><?php echo $manava_count;?></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col s12 m3">
                                    <div class="card indigo darken-4 hoverable">
                                        <div class="card-content white-text center-align pb-5">
                                            <span class="card-title center-align text-white"><i
                                                    class="fas fa-calendar-alt"></i></span>
                                        </div>
                                        <div class="card-action   pt-0 pb-0">
                                            <a class="collection-item text-white font-bold"
                                                href="<?php echo base_url('events/madhava-seva');?>">
                                                <div><span>Madhava Seva Events</span><span
                                                        class="secondary-content text-white"><?php echo $madhava_count;?></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>






                            </div>
                            <div class="row">

                                <div class="col m9 s12 l9">

                                    <div class="card  darken-1">
                                        <div class="card-content ">
                                            <div class="x_panel">

                                                <div class="x_title">

                                                    <h2 class="list-title ">Sai Mayee Trust Donation By Month</h2>

                                                    <div class="clearfix"></div>

                                                </div>


                                                <div class="x_content das-chart chrt-width">

                                                    <canvas id="myChart2"></canvas>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col s12 m3">
                                    <div class="card cyan  darken-4 hoverable">
                                        <div class="card-content white-text center-align pb-5">
                                            <span class="card-title center-align text-white"><i
                                                    class="fas fa-hand-holding-usd"></i></span>
                                        </div>
                                        <div class="card-action   pt-0 pb-0">
                                            <a class="collection-item text-white font-bold"
                                                href="<?php echo base_url('donation/sai-mayee-trust');?>">
                                                <div><span>Sai Mayee Trust</span><span
                                                        class="secondary-content text-white"><?php echo $mayee_count->amount;?></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col s12 m3">
                                    <div class="card lime  darken-4 hoverable">
                                        <div class="card-content white-text center-align pb-5">
                                            <span class="card-title center-align text-white"><i
                                                    class="fas fa-hand-holding-usd"></i></span>
                                        </div>
                                        <div class="card-action   pt-0 pb-0">
                                            <a class="collection-item text-white font-bold"
                                                href="<?php echo base_url('donation/sai-meru-mathi-trust');?>">
                                                <div><span>Sri Sai Meru Mathi Trust</span><span
                                                        class="secondary-content text-white"><?php echo $meru_count->amount;?></span>
                                                </div>
                                            </a>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js">
    < script >
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

    <script>
    // Line charts
    var label = [];
    <?php if(!empty($mathi_graph_label)){ ?>
    <?php for($i=0;$i<count($mathi_graph_label);$i++){ ?>
        label.push('<?php echo $mathi_graph_label[$i]; ?>')
   <?php } } ?>
    var data = [];
    <?php if(!empty($mathi_graph_data)){ ?>
    <?php for($i=0;$i<count($mathi_graph_data);$i++){ ?>
        data.push('<?php echo $mathi_graph_data[$i]; ?>')
   <?php } } ?>
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {

        type: 'line',
        data: {
            labels: label,
            datasets: [{
                label: 'Amount',
                fill: true,
                lineTension: 0.0,
                backgroundColor: 'rgba(75, 192, 192, 1)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: '#000',
                pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                pointBorderWidth: 3,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: 'rgba(75, 192, 192, 1)',
                pointHoverBorderColor: 'rgba(220, 220, 220, 1)',
                pointHoverBorderWidth: 5,
                pointRadius: 1,
                pointHitRadius: 10,
                data: data,
                spanGaps: false,
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    // Line charts
    var label = [];
    <?php if(!empty($mayee_graph_label)){ ?>
    <?php for($i=0;$i<count($mayee_graph_label);$i++){ ?>
        label.push('<?php echo $mayee_graph_label[$i]; ?>')
   <?php } } ?>
    var data = [];
    <?php if(!empty($mayee_graph_data)){ ?>
    <?php for($i=0;$i<count($mayee_graph_data);$i++){ ?>
        data.push('<?php echo $mayee_graph_data[$i]; ?>')
   <?php } } ?>
    var ctx = document.getElementById('myChart2');
    var myChart = new Chart(ctx, {

        type: 'line',
        data: {
            labels: label,
            datasets: [{
                label: 'Amount',
                fill: true,
                lineTension: 0.0,
                backgroundColor: 'rgba(75, 192, 192, 1)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: '#000',
                pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                pointBorderWidth: 3,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: 'rgba(75, 192, 192, 1)',
                pointHoverBorderColor: 'rgba(220, 220, 220, 1)',
                pointHoverBorderWidth: 5,
                pointRadius: 1,
                pointHitRadius: 10,
                data: data,
                spanGaps: false,
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    </script>

</body>

</html>