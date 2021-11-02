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
    <link rel="stylesheet" href="<?php echo base_url()?>assets/fancy-file-uploader/fancy_fileupload.css">
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

    .img-container {
        position: relative;
        width: 100%;
        background: #ffaa49;
    }

    .image {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
    }

    .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }

    .img-container:hover .image {
        opacity: 0.1;
    }

    .img-container:hover .middle {
        opacity: 1;
    }

    .text .editbtn {
        background: blue;
        color: white;
        font-size: 16px;
        padding: 16px 16px;
        border-radius: 5px;
        transition: all 0.3s ease-in-out;
    }

    .text .deletebtn {
        background: red;
        color: white;
        font-size: 16px;
        padding: 16px 16px;
        border-radius: 5px;
        transition: all 0.3s ease-in-out;
    }

    .text a:hover {
        box-shadow: 2px 2px 10px 1px #000;
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

    .tabs {
        background-color: #ffaa49;
    }

    .tabs .tab a {
        color: #FFF;
    }

    .tabs .tab a:hover,
    .tabs .tab a.active {
        background-color: #fff !important;
        color: #ffaa49;
        border-top: 1px solid #ffaa49;
        border-left: 1px solid #ffaa49;
        border-right: 1px solid #ffaa49;
    }

    .tabs .indicator {
        background-color: #ffaa49;
    }

    .tab-content-inner {
        /* border-bottom: 1px solid #ffaa49;
        border-left: 1px solid #ffaa49;
        border-right: 1px solid #ffaa49; */
        padding: 10px !important;
    }

    #row_image{
        display:flex;
        flex-wrap:wrap;
    }

    #row_image .col{
        flex:0 0 auto;
        margin-left:0 !important;
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
                                <p class="h5-para black-text m0">Gallery-Audios</p>
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
                                    <legend>Add Audio For <?php echo $type; ?></legend>
                                    <div class="input-type-block">
                                        <form
                                            action="<?php echo base_url('gallery-audios/upload/'.$pagetype); ?>"
                                            method="post" enctype="multipart/form-data">
                                            <input id="demo" type="file" name="files"
                                                accept=".mp3, .aac, .wav, audio/mp3, audio/aac, audio/wav">
                                        </form>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <legend>Audio Preview For <?php echo $type; ?></legend>
                                    <div class="input-type-block">

                                        <div class="row">
                                            <div class="col s12">
                                                <div class="row" id="row_image">
                                                   

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </fieldset>

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
    <script src="<?php echo base_url()?>assets/fancy-file-uploader/jquery.ui.widget.js"></script>
    <script src="<?php echo base_url()?>assets/fancy-file-uploader/jquery.fileupload.js"></script>
    <script src="<?php echo base_url()?>assets/fancy-file-uploader/jquery.iframe-transport.js"></script>
    <script src="<?php echo base_url()?>assets/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
    <script>
    <?php $this->load->view('include/message.php'); ?>
    $(document).ready(function() {
        $('.si-gm >.collapsible-body').css({
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
    });
    </script>

    <script>
    $(document).ready(function() {

        $('#demo').FancyFileUpload({
            params: {
                action: 'fileuploader'
            },
            maxfilesize: 10000000,
            'edit': false,
            'retries': 0,
            uploadcompleted: function(e, data) {
                data.ff_info.RemoveFile();
                getImage()
            }

        });

    });
    </script>

    <script>
        $(document).ready(function() {
            getImage()
        });

        function getImage() {
            $.ajax({
                type: "GET",
                url: "<?php echo base_url().'gallery-audios/view/'.$pagetype ;?>",
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                dataType: "json",
                success: function(response) {
                    
                    data = ``;
                    for(i=0;i<response.result.length;i++) {
                        data += `<div class="col s12 m6 l4" style="margin-top:15px;">
                        <p>Click on the button to delete the sound given below: <a href="<?php echo base_url(); ?>gallery-audios/delete/${response.result[i]['id']}/<?php echo $pagetype; ?>"
                                                                            class="deletebtn"><i
                                                                                class="fas fa-trash"></i></a></p>

<audio controls>
  <source src="<?php echo $this->config->item('web_url')?>assets/images/home/audio/${response.result[i]['audio']}" type="audio/${(response.result[i]['audio']).split('.')[1]}">
  Your browser does not support the audio element.
</audio>
                                                        
                                                    </div>`
                    }
                    $('#row_image').html(data)
                }
            });
        }
        
    </script>

</body>


</html>