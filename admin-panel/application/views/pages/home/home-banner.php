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
        /* display: grid;
        place-items: center; */
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
        margin-top:15px;
    }

    .text a:hover {
        box-shadow: 2px 2px 10px 1px #000;
    }

    .form-group{position: relative;}
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
                                <p class="h5-para black-text m0">Home Page - Banner</p>
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
                                    <legend>Add Image</legend>
                                    <div class="input-type-block">
                                        <form action="<?php echo base_url('home/banner'); ?>" method="post"
                                            enctype="multipart/form-data" id="bannerForm">
                                            <div class="row">
                                                <div class="col s6 m6 l6">
                                                    <div class="form-group">

                                                        <label class="input-label">Quote Line One
                                                            <span>*</span></label>
                                                        <textarea class="form-control inner-pad" name="quoteline1" id="quoteline1 "rows="4"><?php echo set_value('quoteline1'); ?></textarea>
                                                        <div style="color:red;"><?php echo form_error('quoteline1'); ?></div>

                                                    </div>
                                                </div>
                                                <div class="col s6 m6 l6">
                                                    <div class="form-group">

                                                        <label class="input-label">Quote Line Two
                                                            <span>*</span></label>
                                                        <textarea class="form-control inner-pad" name="quoteline2" id="quoteline2 "rows="4"><?php echo set_value('quoteline2'); ?></textarea>
                                                        <div style="color:red;"><?php echo form_error('quoteline2'); ?></div>

                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                <div class=" col s12 l6 m6 img ">

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
                                                            <small> <i><b>Note</b>: Please upload banner image
                                                                    <br>
                                                                    <span class="bold">Max file size:</span> 512kb <span
                                                                        class="red-text">*</span></i>
                                                                    <br>
                                                                    <span class="bold">Preferred file dimension:</span> 1920 x 850<span
                                                                        class="red-text">*</span></i>
                                                            </small>
                                                        </h6>
                                                    </div>
                                                </div>

                                                <div class="col s12 l6 m6 right-align">
                                                    <button type="submit" class="btn btn-form btn-submit" style="margin-top:20px;">Add</button>
                                                </div>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <legend>Banner Preview</legend>
                                    <div class="input-type-block">
                                        <div class="row">
                                            <?php
                                    if (!empty($result)) {
                                       $count = 0;
                                      foreach ($result as $key => $value) { $count = $count+1;
                                      ?>
                                            
                                            <div class="col s12 m6 l4">
                                                <div class="form-group" style="position: relative;">

                                                    <div class="img-container">
                                                        <img src="<?php echo $this->config->item('web_url')?>assets/images/home/banner/<?php echo $value->image;?>"
                                                            alt="Avatar" class="image" style="width:100%">
                                                        <div class="overlay">
                                                            <div class="text">
                                                                <p><?php echo $value->quoteline1;?></p>
                                                                <p><?php echo $value->quoteline2;?></p>
                                                                <a href="<?php echo base_url('home/banner/delete/'.$this->encryption_url->safe_b64encode($value->id)); ?>"
                                                                                class="deletebtn"><i
                                                                                    class="fas fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <?php } } ?>

                                            

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
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
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
    });
    </script>
    <script>
$("#bannerForm").validate({
    rules: {
        quoteline1: {
            required: true,
            minlength: 10,
            maxlength: 40,
        },
        quoteline2: {
            minlength: 10,
            maxlength: 40,
        },
    },
    messages: {
        quoteline1: {
            required: "Please provide a quote line one",
            minlength: "Your quote line one must be at least 10 characters long",
            maxlength: "Your quote line one must be at most 31 characters long",
        },
        quoteline2: {
            minlength: "Your quote line two must be at least 10 characters long",
            maxlength: "Your quote line two must be at most 31 characters long",
        },
    },
    submitHandler: function(form) {
        form.submit();
    }
});
</script>

</body>


</html>