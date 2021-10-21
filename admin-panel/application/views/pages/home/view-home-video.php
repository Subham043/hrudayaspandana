<?php
$this->ci =& get_instance();
$this->load->library('encryption');
?>
<!DOCTYPE html>
<html lang="en">

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
    </style>
</head>

<body>

    <?php $this->load->view('include/header'); ?>

    <section class="sec-top">
        <div class="container-wrap">
            <div class="row m0 ">
                <?php $this->load->view('include/menu'); ?>
                <!-- End menu-->
                <div class="col s12 m12 l9 ">
                    <div class="main-bar">
                        <br>

                        <div class="row">
                            <div class="col 12 m12">
                                <p class="h5-para black-text m0">Home Page - Video</p>
                            </div>
                            <div class="col 12 m6 right-align">
                                <div class="card-title">

                                </div>
                            </div>
                        </div>
                        <!-- end dash -->
                        <!-- chart-table -->
                        <!-- shorting -->
                        <div class="card box-shadow form-card ">

                            <div class="ufg-job-application-wrapper">

                                <fieldset>
                                    <legend>Video Preview</legend>
                                    <div class="input-type-block">
                                        <div class="row">
                                            <div class="col s12 m12">
                                                <div class="form-group" style="position: relative;">

                                                    <img src="<?php echo $this->config->item('web_url')?>assets/images/home/video/<?php echo $result->thumbnail;?>"
                                                        alt="" style="width:100%;">
                                                    <a class="modal-trigger" href="#modal1" id="modalBtn"
                                                        video_url="<?php echo $result->url;?>">
                                                        <div class="play-btn-div">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </a>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <legend>Edit Video Details</legend>
                                    <div class="input-type-block">
                                        <form action="<?php echo base_url('home/video/1'); ?>" method="post"
                                            enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col s12 m12 l12" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label" style="color:red;">Copy the ID of the Youtube video and paste it in the text box. Kindly refer the image given below.
                                                            <span>*</span></label>
                                                        <div><img style="max-width:100%;"
                                                                src="<?php echo base_url(); ?>assets/images/youtube-guide.png" />
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col s6 m4">
                                                    <div class="form-group">

                                                        <label class="input-label">Youtube Video ID
                                                            <span>*</span></label>
                                                        <input autocomplete="off" type="text"
                                                            class="form-control inner-pad" name="url" id="url"
                                                            value="<?php echo $result->url;?>">

                                                    </div>
                                                </div>
                                                <div class=" col s12 l4 m6 img ">

                                                    <div class="endorsement file-field input-field">
                                                        <div class="btn btn-small black-text grey lighten-3">
                                                            <i class="far fa-image left  "></i>
                                                            <span class="">Choose File</span>
                                                            <input type="file" name="thumbnail"
                                                                accept=" application/pdf, image/*">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text">
                                                        </div>
                                                        <h6 class=" m0">
                                                            <small> <i><b>Note</b>: Please upload video thumbnail image
                                                                    <br>
                                                                    <span class="bold">Max file size:</span> 512kb <span
                                                                        class="red-text">*</span></i>
                                                            </small>
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="col s6 m4 right-align" style="margin-top:15px;">
                                                    <button type="submit"
                                                        class="btn btn-form btn-submit">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </fieldset>

                            </div>
                        </div>
                    </div>
                    <!-- End right board -->
                </div>
            </div>
        </div>
        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <iframe id="iframeVdo" src="https://www.youtube.com/embed/<?php echo $result->url;?>"
                    title="YouTube video player" frameborder="0"
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
    <script>
    <?php $this->load->view('include/message.php'); ?>
    $(document).ready(function() {
        $('.si-h >.collapsible-body').css({
            display: 'block',
        });
    });
    $(document).ready(function() {
        $('select').formSelect();
        $('input[name=reject_check]').on('change', function() {
            if ($(this).is(':checked')) {
                $('.reject_form').show();
            } else {
                $('.reject_form').hide();
            }
        });
        $('#status').on('change', function() {
            if ($(this).val() == 5) {
                $('.correction-field').show();
            } else {
                $('.correction-field').hide();
            }
            if ($(this).val() == 6) {

                $('.show-cause').show();
            } else {
                $('.show-cause').hide();
            }
            if ($(this).val() == 8) {
                $('.endorsement').show();
            } else {
                $('.endorsement').hide();
            }
        });
        $('#modalBtn').on('click', function() {
            $('#iframeVdo').attr('src', 'https://www.youtube.com/embed/' + $(this).attr("video_url"))
        })
        $('#closeBtnModal').on('click', function() {
            $('#iframeVdo').attr('src', '')
        })
    });
    </script>

</body>


</html>