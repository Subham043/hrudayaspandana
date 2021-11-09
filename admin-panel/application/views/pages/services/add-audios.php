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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/summernote/summernote-lite.css">
    <style type="text/css">
    .dash-list a .list-dashboard {
        transition: 0.5s
    }

    .dash-list a:hover .list-dashboard {
        transform: scale(1.1);
        background: #f3f3f3 !important
    }

    .img-container {
        position: relative;
        width: 100%;
    }

    .image {
        display: block;
        width: 100%;
        height: auto;
    }

    .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #ffaa49;
        overflow: hidden;
        width: 100%;
        height: 0;
        transition: .5s ease;
    }

    .img-container:hover .overlay {
        height: 100%;
        display: grid;
        place-items: center;
    }

    .text {
        color: white;
        font-size: 20px;
        text-align: center;
    }

    .text .deletebtn {
        background: red;
        color: white;
        font-size: 16px;
        padding: 16px 16px;
        border-radius: 5px;
        transition: all 0.3s ease-in-out;
        margin-top: 15px;
    }

    .text a:hover {
        box-shadow: 2px 2px 10px 1px #000;
    }

    .form-group {
        position: relative;
    }

    [type="radio"]:not(:checked),
    [type="radio"]:checked {
        position: relative !important;
        opacity: 1 !important;
        pointer-events: auto !important;
    }

    .form-check-inline {
        display: inline-block !important;
        margin-right: 10px !important;
    }

    .form-control.textarea {
        height: auto !important;
    }

    .select-wrapper input.select-dropdown {
        width: 100%;
        font-size: 12px;
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
                                <p class="h5-para black-text m0">Service Audio - Add</p>
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
                                <form action="<?php echo base_url('services/new/gallery/audio/'.$this->encryption_url->safe_b64encode($id).'/'.$type); ?>" method="post"
                                    enctype="multipart/form-data" id="bannerForm">
                                    <fieldset>
                                        <legend>Add <?php echo $pagetype; ?> Audio</legend>
                                        <div class="input-type-block">

                                            <div class="row">
                                                <div class="col s12 m6 l6" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">Title
                                                            <span>*</span></label>
                                                        <input type="text" class="form-control inner-pad" name="title"
                                                            id="title" value="<?php echo set_value('title'); ?>">
                                                        <div style="color:red;"><?php echo form_error('title'); ?>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col s12 m6 l6 img " style="margin-top:15px;">

                                                    <div class="endorsement file-field input-field">
                                                        <div class="btn btn-small black-text grey lighten-3">
                                                            <i class="far fa-image left  "></i>
                                                            <span class="">Choose File</span>
                                                            <input type="file" name="image"
                                                                accept=".mp3, .aac, .wav, audio/mp3, audio/aac, audio/wav">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text">
                                                        </div>
                                                        <h6 class=" m0">
                                                            <small> <i><b>Note</b>: Please upload service audio
                                                                    <br>
                                                                    <span class="bold">Max file size:</span> 512kb <span
                                                                        class="red-text">*</span></i>
                                                            </small>
                                                        </h6>
                                                    </div>
                                                </div>

                                                <div class="col s12 m6 l9" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">Description
                                                            <span>*</span></label>
                                                            <textarea name="description" id="description" rows="10"
                                                            class="form-control inner-pad textarea"><?php echo set_value('description'); ?></textarea>
                                                        <div style="color:red;"><?php echo form_error('title'); ?>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col s12 l3 m6 right-align" style="margin-top:15px;">
                                                    <button type="submit" class="btn btn-form btn-submit"
                                                        style="margin-top:20px;">Add</button>
                                                </div>

                                            </div>


                                        </div>
                                    </fieldset>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End right board -->
                </div>
            </div>
        </div>
    </section>
    <!-- end footer -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
    <script src="<?php echo base_url(); ?>assets/summernote/summernote-lite.js"></script>


    <script>
    <?php $this->load->view('include/message.php'); ?>
    $(document).ready(function() {
        $('.si-s >.collapsible-body').css({
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

        $('.category_input').on('change', function() {
            if ($(this).val() == 'PDF') {
                $('#pdf_div').show();
                $('#link_div').hide();
            } else {
                $('#pdf_div').hide();
                $('#link_div').show();
            }
        })


    });
    </script>


    <script>
    $("#bannerForm").validate({
        rules: {
            title: {
                required: true,
            },
            description: {
                required: true,
            },
        },
        messages: {
            title: {
                required: "Please provide a title",
            },
            description: {
                required: "Please provide a description",
            },
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
    </script>



</body>


</html>