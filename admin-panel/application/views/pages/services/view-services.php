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
    .form-control.textarea{
        height:auto !important;
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
                            <div class="col s12 m6 l6">
                                <p class="h5-para black-text m0">Service No: <?php echo $result->id;?></p>
                            </div>
                            <div class="col s12 m6 l6 right-align">
                                <a href="<?php echo base_url('services/delete/'.$this->encryption_url->safe_b64encode($result->id).'/'.$result->type); ?>"
                                    class="btn btn-form btn-submit">DELETE</a>
                            </div>
                        </div>
                        <!-- end dash -->
                        <!-- chart-table -->
                        <!-- shorting -->
                        <div class="card box-shadow form-card ">

                            <div class="ufg-job-application-wrapper">

                                <fieldset>
                                    <legend>Page Details</legend>
                                    <div class="input-type-block">
                                        <div class="row">
                                            <div class="col s12 m6 l6">
                                                <div class="form-group">
                                                    <label class="input-label" for="name">
                                                        Page Name<span>*</span></label>
                                                    <input autocomplete="off" readonly type="text"
                                                        class="form-control inner-pad" name="name" id="name"
                                                        value="<?php echo $result->page;?>">

                                                </div>
                                            </div>
                                            <div class="col s12 m6 l6">
                                                <div class="form-group">

                                                    <label class="input-label">Type
                                                        <span>*</span></label>
                                                    <input autocomplete="off" readonly type="text"
                                                        class="form-control inner-pad" name="sdate" id="sdate"
                                                        value="<?php echo $result->type;?>">

                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Section 1 - Heading</legend>
                                    <div class="input-type-block">
                                        <div class="row">
                                            <div class="col s12 m6 l6">
                                                <div class="form-group">
                                                    <label class="input-label" for="name">
                                                        Title of section 1<span>*</span></label>
                                                    <input autocomplete="off" readonly type="text"
                                                        class="form-control inner-pad" name="name" id="name"
                                                        value="<?php echo $result->title1;?>">

                                                </div>
                                            </div>
                                            <div class="col s12 m6 l6">
                                                <div class="form-group">

                                                    <label class="input-label">Heading of section 1
                                                        <span>*</span></label>
                                                    <input autocomplete="off" readonly type="text"
                                                        class="form-control inner-pad" name="sdate" id="sdate"
                                                        value="<?php echo $result->heading1;?>">

                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Section 1 - Description</legend>

                                    <div class="row">
                                        <div class="col s12 m12 l12">
                                            <div class="form-group">

                                                <label class="input-label">Description
                                                    <span>*</span></label><br>
                                                    <?php echo $result->description1; ?>

                                            </div>
                                        </div>

                                        <?php if($result->description2!=null){ ?>
                                            <div class="col s12 m12 l12">
                                            <div class="form-group">

                                                <label class="input-label">Description
                                                    <span>(Optional)</span></label><br>
                                                    <?php echo $result->description2 != null ? $result->description2 : ''; ?>

                                            </div>
                                        </div>
                                        <?php } ?>

                                    </div>

                                </fieldset>
                                <fieldset>
                                    <legend>Section 2 - Heading</legend>
                                    <div class="input-type-block">
                                        <div class="row">
                                            <div class="col s12 m6 l6">
                                                <div class="form-group">
                                                    <label class="input-label" for="name">
                                                        Title of section 2<span>*</span></label>
                                                    <input autocomplete="off" readonly type="text"
                                                        class="form-control inner-pad" name="name" id="name"
                                                        value="<?php echo $result->title2;?>">

                                                </div>
                                            </div>
                                            <div class="col s12 m6 l6">
                                                <div class="form-group">

                                                    <label class="input-label">Heading of section 2
                                                        <span>*</span></label>
                                                    <input autocomplete="off" readonly type="text"
                                                        class="form-control inner-pad" name="sdate" id="sdate"
                                                        value="<?php echo $result->heading2;?>">

                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Section 2 - Description</legend>

                                    <div class="row">
                                        <div class="col s12 m12 l12">
                                            <div class="form-group">

                                                <label class="input-label">Description
                                                    <span>*</span></label><br>
                                                    <?php echo $result->description3; ?>

                                            </div>
                                        </div>

                                        <?php if($result->description4!=null){ ?>
                                            <div class="col s12 m12 l12">
                                            <div class="form-group">

                                                <label class="input-label">Description
                                                    <span>(Optional)</span></label><br>
                                                    <?php echo $result->description4 != null ? $result->description4 : ''; ?>

                                            </div>
                                        </div>
                                        <?php } ?>

                                    </div>

                                </fieldset>
                                <fieldset>
                                    <legend>Additional Information</legend>

                                    <div class="row">
                                        <div class="col s6 m4">
                                            <div class="form-group">
                                                <label class="input-label" for="name">
                                                    Section 1 - Image<span>*</span></label>
                                                <img src="<?php echo $this->config->item('web_url').'assets/images/services/'.$result->image1;?>"
                                                    alt="" style="max-width:100%;">

                                            </div>
                                        </div>
                                        <div class="col s6 m4">
                                            <div class="form-group">
                                                <label class="input-label" for="name">
                                                Section 2 - Image<span>*</span></label>
                                                <img src="<?php echo $this->config->item('web_url').'assets/images/services/'.$result->image2;?>"
                                                    alt="" style="max-width:100%;">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col m12">
                                            <p>Download Documents</p>
                                        </div>
                                        <div class="col m3">
                                            <a target="_blank" download
                                                href="<?php echo $this->config->item('web_url').'assets/images/services/'.$result->image1;?>"
                                                class="mb10 dwnld">Section 1 - Image <i class="fas fa-download"></i></a>
                                        </div>
                                        <div class="col m3">
                                            <a target="_blank" download
                                                href="<?php echo $this->config->item('web_url').'assets/images/services/'.$result->image2;?>"
                                                class="mb10 dwnld">Section 2 - Image <i class="fas fa-download"></i></a>
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
    });
    </script>

</body>


</html>