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
                                <p class="h5-para black-text m0">Volunteer No:   <?php echo $result->id;?></p>
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
                                        <legend>IDENTITY OF THE VOLUNTEER</legend>
                                        <div class="input-type-block">
                                            <div class="row">
                                                <div class="col s6 m6">
                                                    <div class="form-group">
                                                        <label class="input-label" for="name">
                                                            Name<span>*</span></label>
                                                        <input  autocomplete="off"  readonly type="text" class="form-control inner-pad"
                                                            name="name" id="name" value="<?php echo $result->fname.' '.$result->lname;?>">

                                                    </div>
                                                </div>
                                                <div class="col s6 m6">
                                                    <div class="form-group">

                                                        <label class="input-label">Email
                                                            <span>*</span></label>
                                                        <input  autocomplete="off"  readonly type="text" class="form-control inner-pad"
                                                            name="email" id="email"
                                                            value="<?php echo $result->email;?>">

                                                    </div>
                                                </div>
                                                <div class="col s6 m6">
                                                    <div class="form-group">

                                                        <label class="input-label">Phone
                                                            <span>*</span></label>
                                                        <input  autocomplete="off"  readonly type="text" class="form-control inner-pad"
                                                            name="phone" id="phone"
                                                            value="<?php echo $result->phone;?>">

                                                    </div>
                                                </div>
                                                <div class="col s6 m6">
                                                    <div class="form-group">

                                                        <label class="input-label">Aadhar
                                                            <span>*</span></label>
                                                        <input  autocomplete="off"  readonly type="text" class="form-control inner-pad"
                                                            name="aadhaar" id="aadhaar"
                                                            value="<?php echo $result->aadhaar;?>">

                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Address</legend>
                                        <div class="input-type-block">
                                            <div class="row">
                                                <div class="s12 col m12">
                                                    <div class="form-group">

                                                        <label class="input-label" for="address_present"> Address
                                                            <span>*</span></label>
                                                        <textarea readonly class="form-control inner-pad" style="height:90px !important"
                                                            name="address" id="address" row="5"
                                                            value=""><?php echo $result->address;?></textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </fieldset> 
                                    <fieldset>
                                        <legend>Seva Interest</legend>
                                        <div class="input-type-block">
                                            <div class="row">
                                                <div class="s12 col m12">
                                                    <div class="form-group">

                                                        <label class="input-label" for="address_present"> Describe your seva interests
                                                            <span>*</span></label>
                                                        <textarea readonly class="form-control inner-pad" style="height:90px !important"
                                                            name="interest" id="interest" row="5"
                                                            value=""><?php echo $result->interest;?></textarea>

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
    <script>
    <?php $this->load->view('include/message.php'); ?>
    // $(document).ready(function() {
    //     $('.si-m >.collapsible-body').css({
    //         display: 'block',
    //     });
    // });
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
            if ($(this).val()==5) {
                $('.correction-field').show();
            } else {
                $('.correction-field').hide();
            }
            if ($(this).val()==6) {
                
                $('.show-cause').show();
            } else {
                $('.show-cause').hide();
            }
            if ($(this).val()==8) {
                $('.endorsement').show();
            } else {
                $('.endorsement').hide();
            }
        });
    });
    </script>

</body>


</html>