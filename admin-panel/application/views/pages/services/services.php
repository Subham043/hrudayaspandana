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

    .super {
        background-color: #827717;
        color: #fff;
        padding: 6px 7px;
    }

    .sub {
        background-color: #a1887f;
        color: #fff;
        padding: 6px 7px;
    }

    .notactive {
        background-color: #1565c0;
        color: #fff;
        padding: 6px 7px;
    }

    .isactive {
        background-color: #2e7d32;
        color: #fff;
        padding: 6px 11px;
    }

    .purple {
        background-color: #6d10dc !important;
    }

    .yellow {
        background-color: #1b09da !important;
    }

    table.dataTable tbody th,
    table.dataTable tbody td {
        padding: 8px 5px;
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
                        <br>
                        <div class="row">
                            <div class="col s12 m6 l6">
                                <p class="h5-para black-text m0">Services</p>
                            </div>
                            <div class="col s12 m6 l6 right-align">
                                <a href="<?php echo base_url('services/new/add/'); ?>" class="btn btn-form btn-submit">Add
                                    Service</a>
                            </div>

                        </div>


                        <!-- end dash -->


                        <!-- chart-table -->
                        <!-- shorting -->
                        <div class="shorting-table">
                            <div>
                                <div class="col l12 m12 s12">
                                    <div class="">
                                        <p class="h5-para-p2">Manage Services </p>
                                        <table id="dynamic" class="striped">
                                            <thead>
                                                <tr class="tt">
                                                    <th id="a" class="h5-para-p2" width="130px">Sl No.</th>
                                                    <th id="b" class="h5-para-p2" width="62px">Action</th>
                                                    <th id="b" class="h5-para-p2" width="62px">Page</th>
                                                    <th id="c" class="h5-para-p2" width="100px">Title 1</th>
                                                    <th id="d" class="h5-para-p2" width="100px">Heading 1</th>
                                                    <th id="c" class="h5-para-p2" width="100px">Title 2</th>
                                                    <th id="c" class="h5-para-p2" width="100px">Heading 2</th>

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
                                                        <a href="<?php echo base_url('services/view/'.$this->encryption_url->safe_b64encode($value->id).'/'.$type) ?>"
                                                            class="blue hoverable" title="view"><i class="far fa-eye "></i></i></a>
                                                            <a href="#!" onclick="myconfirmPromt('<?php echo $this->encryption_url->safe_b64encode($value->id) ?>','<?php echo $type ?>')" 
                                                            class="red hoverable" title="delete"><i class="fas fa-trash "></i></i></a>
                                                        <a href="<?php echo base_url('services/edit/'.$this->encryption_url->safe_b64encode($value->id).'') ?>"
                                                            class="yellow hoverable" title="edit"><i class="fas fa-pen "></i></i></a>
                                                        <a href="<?php echo base_url('services/gallery/'.$this->encryption_url->safe_b64encode($value->id).'/'.$type) ?>"
                                                            class="green hoverable" title="images"><i class="far fa-image"></i></i></a>
                                                        <a href="<?php echo base_url('services/audio/'.$this->encryption_url->safe_b64encode($value->id).'/'.$type) ?>"
                                                            class="green hoverable" style="margin-top: 8px" title="audios"><i class="fas fa-music"></i></i></a>
                                                        <a href="<?php echo base_url('services/videos/'.$this->encryption_url->safe_b64encode($value->id).'/'.$type) ?>"
                                                            class="green hoverable" style="margin-top: 8px" title="videos"><i class="fas fa-video"></i></i></a>
                                                        <!-- view user -->
                                                    </td>
                                                    <td><?php echo (!empty($value->page))?$value->page:'---' ; ?></td>
                                                    <td><?php echo (!empty($value->title1))?$value->title1:'---' ; ?></td>
                                                    <td><?php echo (!empty($value->heading1))?$value->heading1:'---' ; ?></td>
                                                    <td><?php echo (!empty($value->title2))?$value->title2:'---' ; ?></td>
                                                    <td><?php echo (!empty($value->heading2))?$value->heading2:'---' ; ?></td>
                                                </tr>
                                                <?php } } ?>
                                            </tbody>
                                        </table>
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
    <?php $this->load->view('include/message.php'); ?>
    </script>

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

    $(document).ready(function() {
        $('.si-s >.collapsible-body').css({
            display: 'block',
        });
    });
    </script>
    <script>
    function myconfirmPromt(id,type) {
        var ans = confirm("Are you sure you want to delete?");
        if (ans != false) {
            window.location.href = "<?php echo base_url('services/delete/'.'') ?>" + id + "/" + type;
        }
    }
    </script>

</body>

</html>