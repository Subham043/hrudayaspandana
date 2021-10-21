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

    label.error {
        color: red !important;
        margin-bottom: 0 !important;
        /* position: relative !important; */
        font-size: 13px !important;
        left: 32px !important;
        text-align: left;
        position: absolute !important;
        transform: unset !important;
        bottom: 32px;
        top: unset;
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
                            <div class="col 12 m6">
                                <p class="h5-para black-text m0">Service - Videos</p>
                            </div>
                        </div>


                        <!-- end dash -->


                        <!-- chart-table -->
                        <!-- shorting -->
                        <div class="card box-shadow form-card ">
                            <div class="ufg-job-application-wrapper">
                                <form action="<?php echo base_url('services/videos/'.$id.'/'.$type); ?>" method="post"
                                    enctype="multipart/form-data" id="bannerForm">
                                    <fieldset>
                                        <legend>Add <?php //echo $pagetype; ?> Video</legend>
                                        <div class="input-type-block">

                                            <div class="row">
                                                <div class="col s12 m12 l12" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label" style="color:red;">Copy the ID of the
                                                            Youtube video and paste it in the text box. Kindly refer the
                                                            image given below.
                                                            <span>*</span></label>
                                                        <div><img style="max-width:100%;"
                                                                src="<?php echo base_url(); ?>assets/images/youtube-guide.png" />
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col s12 m6 l4" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">Youtube Video ID
                                                            <span>*</span></label>
                                                        <input type="text" class="form-control inner-pad" name="youtube"
                                                            id="youtube" value="<?php echo set_value('youtube'); ?>">
                                                        <div style="color:red;"><?php echo form_error('youtube'); ?>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col s12 l8 m6 right-align" style="margin-top:15px;">
                                                    <button type="submit" class="btn btn-form btn-submit"
                                                        style="margin-top:20px;">Add</button>
                                                </div>

                                            </div>


                                        </div>
                                    </fieldset>

                                </form>
                            </div>
                        </div>

                        <div class="shorting-table">
                            <div>
                                <div class="col l12 m12 s12">
                                    <div class="">
                                        <p class="h5-para-p2">Manage Service-Videos </p>
                                        <table id="dynamic" class="striped">
                                            <thead>
                                                <tr class="tt">
                                                    <th id="a" class="h5-para-p2" width="130px">Sl No.</th>
                                                    <th id="g" class="h5-para-p2" width="62px">Action</th>
                                                    <th id="b" class="h5-para-p2" width="100px">Youtube Video Id</th>
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
                                                        <a class="blue hoverable modal-trigger modalBtn" href="#modal1"
                                                             video_url="<?php echo $value->youtube;?>"><i
                                                                class="far fa-eye "></i></i></a>
                                                        <a href="#!"
                                                            onclick="myconfirmPromt('<?php echo $this->encryption_url->safe_b64encode($value->id) ?>','<?php echo $type; ?>')"
                                                            class="red hoverable"><i class="fas fa-trash "></i></i></a>
                                                    </td>
                                                    <td><?php echo (!empty($value->youtube))?$value->youtube:'---' ; ?>
                                                    </td>
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
        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <iframe id="iframeVdo" src="" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen style="width: 100%; height:500px"></iframe>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat" id="closeBtnModal">Close</a>
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
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
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
        $('.modalBtn').on('click', function() {
            $('#iframeVdo').attr('src', 'https://www.youtube.com/embed/' + $(this).attr("video_url"))
        })
        $('#closeBtnModal').on('click', function() {
            $('#iframeVdo').attr('src', '')
        })
    });
    </script>

    <script>
    function myconfirmPromt(id, type) {
        var ans = confirm("Are you sure you want to delete?");
        if (ans != false) {
            window.location.href = "<?php echo base_url('services/videos/delete/'.'') ?>" + id + "/" + type;
        }
    }
    </script>

    <script>
    $("#bannerForm").validate({
        rules: {
            youtube: {
                required: true,
            },
        },
        messages: {
            youtube: {
                required: "Please provide a youtube video id",
            },
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
    </script>

</body>

</html>