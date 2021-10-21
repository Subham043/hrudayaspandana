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
                                <p class="h5-para black-text m0">Event - Add</p>
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
                                <form action="<?php echo base_url('e-hundi/add'); ?>" method="post"
                                    enctype="multipart/form-data" id="bannerForm">
                                    <fieldset>
                                        <legend>Add E-hundi</legend>
                                        <div class="input-type-block">

                                            <div class="row">
                                                <div class="col s12 m6 l4" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">First Name
                                                            <span>*</span></label>
                                                        <input type="text" class="form-control inner-pad" name="fname"
                                                            id="fname" value="<?php echo set_value('fname'); ?>">
                                                        <div style="color:red;"><?php echo form_error('fname'); ?></div>

                                                    </div>
                                                </div>
                                                <div class="col s12 m6 l4" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">Last Name
                                                            <span>*</span></label>
                                                        <input type="text" class="form-control inner-pad" name="lname"
                                                            id="lname" value="<?php echo set_value('lname'); ?>">
                                                        <div style="color:red;"><?php echo form_error('lname'); ?></div>

                                                    </div>
                                                </div>
                                                <div class="col s12 m6 l4" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">Phone
                                                            <span>*</span></label>
                                                        <input type="text" class="form-control inner-pad" name="phone"
                                                            id="phone" value="<?php echo set_value('phone'); ?>">
                                                        <div style="color:red;"><?php echo form_error('phone'); ?></div>

                                                    </div>
                                                </div>
                                                <div class="col s12 m6 l4" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">Email
                                                            <span>*</span></label>
                                                        <input type="email" class="form-control inner-pad" name="email"
                                                            id="email" value="<?php echo set_value('email'); ?>">
                                                        <div style="color:red;"><?php echo form_error('email'); ?></div>

                                                    </div>
                                                </div>
                                                <div class="col s12 m6 l4" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">City
                                                            <span>*</span></label>
                                                        <input type="text" class="form-control inner-pad" name="city"
                                                            id="city" value="<?php echo set_value('city'); ?>">
                                                        <div style="color:red;"><?php echo form_error('city'); ?></div>

                                                    </div>
                                                </div>
                                                <div class="col s12 m6 l4" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">State
                                                            <span>*</span></label>
                                                        <input type="text" class="form-control inner-pad" name="state"
                                                            id="state" value="<?php echo set_value('state'); ?>">
                                                        <div style="color:red;"><?php echo form_error('state'); ?></div>

                                                    </div>
                                                </div>
                                                <div class="col s12 m6 l4" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">Amount
                                                            <span>*</span></label>
                                                        <input type="text" class="form-control inner-pad" name="amount"
                                                            id="amount" value="<?php echo set_value('amount'); ?>">
                                                        <div style="color:red;"><?php echo form_error('amount'); ?>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col s12 m6 l4" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">Trust
                                                            <span>*</span></label>
                                                        <select name="trust" id="trust" class="form-control inner-pad">
                                                            <option value="null"
                                                                <?php echo set_value('trust')=='null'?'selected':''; ?>>
                                                                Select a Trust</option>
                                                            <option value="Sai Mayee Trust"
                                                                <?php echo set_value('trust')=='Sai Mayee Trust'?'selected':''; ?>>
                                                                Sai Mayee Trust
                                                            </option>
                                                            <option value="Sri Sai Meru Mathi Trust"
                                                                <?php echo set_value('trust')=='Sri Sai Meru Mathi Trust'?'selected':''; ?>>
                                                                Sri Sai Meru Mathi Trust</option>
                                                        </select>
                                                        <div style="color:red;"><?php echo form_error('trust'); ?>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col s12 m6 l4" id="pan_div"
                                                    style="margin-top:15px;display:none;">
                                                    <div class="form-group">

                                                        <label class="input-label">PAN No.
                                                            <span>*</span></label>
                                                        <input type="text" class="form-control inner-pad" name="pan"
                                                            id="pan" value="<?php echo set_value('pan'); ?>">
                                                        <div style="color:red;"><?php echo form_error('pan'); ?></div>

                                                    </div>
                                                </div>

                                                <div class="col s12 l12 m12 center-align">
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
    // $(document).ready(function() {
    //     $('.si-e >.collapsible-body').css({
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
    $('#trust').on('change', function() {
        if ($(this).val() == 'Sai Mayee Trust') {
            $('#pan_div').css('display', 'block');
        } else if ($(this).val() == 'Sri Sai Meru Mathi Trust') {
            $('#pan_div').css('display', 'none');
        } else if ($(this).val() == 'null') {
            $('#pan_div').css('display', 'none');
        }
    })

    if ($('#trust').val() == 'Sai Mayee Trust') {
        $('#pan_div').css('display', 'block');
    } else if ($('#trust').val() == 'Sri Sai Meru Mathi Trust') {
        $('#pan_div').css('display', 'none');
    } else if ($('#trust').val() == 'null') {
        $('#pan_div').css('display', 'none');
    }
    </script>

    <script>
    $.validator.addMethod("selectNotEquals", function(value, element, arg) {
        return arg !== value;
    }, "Value must not equal arg.");
    $("#bannerForm").validate({
        rules: {
            fname: {
                required: true,
                minlength: 2
            },
            lname: {
                required: true,
                minlength: 2
            },
            city: {
                required: true,
                minlength: 2
            },
            state: {
                required: true,
                minlength: 2
            },
            phone: {
                required: true,
                minlength: 10,
                maxlength: 10,
                number: true
            },
            amount: {
                required: true,
                number: true
            },
            email: {
                required: true,
                email: true
            },
            trust: {
                required: true,
                selectNotEquals: 'null'
            },
        },
        messages: {
            fname: {
                required: "Please provide a first name",
                minlength: "Your first name must be at least 2 characters long"
            },
            lname: {
                required: "Please provide a last name",
                minlength: "Your last name must be at least 2 characters long"
            },
            city: {
                required: "Please provide a city",
                minlength: "Your city must be at least 2 characters long"
            },
            trust: {
                required: "Please select a trust",
                selectNotEquals: "Please select a trust"
            },
            state: {
                required: "Please provide a state",
                minlength: "Your state must be at least 2 characters long"
            },
            phone: {
                required: "Please provide a phone number",
                minlength: "Your phone number must be at least 10 characters long",
                maxlength: "Your phone number must be at most 10 characters long",
                number: "Your phone number must be numeric only",
            },
            amount: {
                required: "Please provide a amount",
                number: "Your amount must be numeric only",
            },
            email: "Please enter a valid email address",
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
    </script>



</body>


</html>