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
                                <p class="h5-para black-text m0">Service - Edit</p>
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
                                <form
                                    action="<?php echo base_url('services/edit/'.$this->encryption_url->safe_b64encode($result->id)); ?>"
                                    method="post" enctype="multipart/form-data" id="bannerForm">
                                    <fieldset>
                                        <legend>Edit Page Details</legend>
                                        <div class="input-type-block">

                                            <div class="row">
                                                <div class="col s12 m6 l6" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">Page Name
                                                            <span>*</span></label>
                                                        <input type="text" class="form-control inner-pad" name="page"
                                                            id="page" value="<?php echo $result->page; ?>">
                                                        <div style="color:red;"><?php echo form_error('page'); ?></div>

                                                    </div>
                                                </div>
                                                
                                                <div class="col s12 m6 l6" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">Type
                                                            <span>*</span></label>
                                                        <select name="type" id="type"
                                                            class="form-control inner-pad">
                                                            <option value="sevas"
                                                                <?php echo $result->type == 'sevas' ? 'selected' : ''; ?>>
                                                                Sevas</option>
                                                            <option value="vedic-rituals"
                                                                <?php echo $result->type == 'vedic-rituals' ? 'selected' : ''; ?>>
                                                                Vedic Rituals</option>
                                                        </select>
                                                        <div style="color:red;"><?php echo form_error('type'); ?>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Edit Section 1 - heading</legend>
                                        <div class="input-type-block">

                                            <div class="row">
                                                <div class="col s12 m6 l6" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">Title of section 1
                                                            <span>*</span></label>
                                                        <input type="text" class="form-control inner-pad" name="title1"
                                                            id="title1" value="<?php echo $result->title1; ?>">
                                                        <div style="color:red;"><?php echo form_error('title1'); ?></div>

                                                    </div>
                                                </div>
                                                <div class="col s12 m6 l6" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">Heading of section 1
                                                            <span>*</span></label>
                                                        <input type="text" class="form-control inner-pad" name="heading1"
                                                            id="heading1" value="<?php echo $result->heading1; ?>">
                                                        <div style="color:red;"><?php echo form_error('heading1'); ?></div>

                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <legend>Edit Section 1 - Description</legend>
                                        <div class="input-type-block">

                                            <div class="row">
                                                <div class="col s12 m12 l12" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">Description
                                                            <span>*</span></label>
                                                        <textarea name="description1" id="description1" rows="10"
                                                            class="form-control inner-pad textarea"><?php echo $result->description1; ?></textarea>
                                                        <div style="color:red;">
                                                            <?php echo form_error('description1'); ?></div>

                                                    </div>
                                                </div>
                                                <div class="col s12 m12 l12" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">Description
                                                            <span>(optional)</span></label>
                                                        <textarea name="description2" id="description2" rows="10"
                                                            class="form-control inner-pad textarea"><?php echo $result->description2!=null ? $result->description2 : ''; ?></textarea>
                                                        <div style="color:red;">
                                                            <?php echo form_error('description2'); ?></div>

                                                    </div>
                                                </div>


                                            </div>


                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Edit Section 2 - heading (optional)</legend>
                                        <div class="input-type-block">

                                            <div class="row">
                                                <div class="col s12 m6 l6" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">Title of section 2
                                                            <span>(optional)</span></label>
                                                        <input type="text" class="form-control inner-pad" name="title2"
                                                            id="title2" value="<?php echo $result->title2; ?>">
                                                        <div style="color:red;"><?php echo form_error('title2'); ?></div>

                                                    </div>
                                                </div>
                                                <div class="col s12 m6 l6" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">Heading of section 2
                                                            <span>(optional)</span></label>
                                                        <input type="text" class="form-control inner-pad" name="heading2"
                                                            id="heading2" value="<?php echo $result->heading2; ?>">
                                                        <div style="color:red;"><?php echo form_error('heading2'); ?></div>

                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <legend>Edit Section 2 - Description (optional)</legend>
                                        <div class="input-type-block">

                                            <div class="row">
                                                <div class="col s12 m12 l12" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">Description
                                                            <span>(optional)</span></label>
                                                        <textarea name="description3" id="description3" rows="10"
                                                            class="form-control inner-pad textarea"><?php echo $result->description3; ?></textarea>
                                                        <div style="color:red;">
                                                            <?php echo form_error('description3'); ?></div>

                                                    </div>
                                                </div>
                                                <div class="col s12 m12 l12" style="margin-top:15px;">
                                                    <div class="form-group">

                                                        <label class="input-label">Description
                                                            <span>(optional)</span></label>
                                                        <textarea name="description4" id="description4" rows="10"
                                                            class="form-control inner-pad textarea"><?php echo $result->description4!=null ? $result->description4 : ''; ?></textarea>
                                                        <div style="color:red;">
                                                            <?php echo form_error('description4'); ?></div>

                                                    </div>
                                                </div>


                                            </div>


                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Additional Information</legend>

                                        <div class="row">
                                            <div class="col s6 m6 l6">
                                                <div class="form-group">
                                                    <label class="input-label" for="name">
                                                        Section 1 - Image<span>*</span></label>
                                                    <img src="<?php echo $this->config->item('web_url').'assets/images/services/'.$result->image1;?>"
                                                        alt="" style="max-width:100%;">

                                                </div>
                                            </div>
                                            <div class="col s12 m6 l6 img " style="margin-top:15px;">

                                                <div class="endorsement file-field input-field">
                                                    <div class="btn btn-small black-text grey lighten-3">
                                                        <i class="far fa-image left  "></i>
                                                        <span class="">Choose File</span>
                                                        <input type="file" name="image1"
                                                            accept=" application/pdf, image/*">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text">
                                                    </div>
                                                    <h6 class=" m0">
                                                        <small> <i><b>Note</b>: Please upload service 1 - image
                                                                <br>
                                                                <span class="bold">Max file size:</span> 512kb <span
                                                                    class="red-text">*</span></i>
                                                            <br>
                                                            <span class="bold">Preffered file dimension:</span> 520 x
                                                            424 <span class="red-text">*</span></i>
                                                        </small>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s6 m6 l6">
                                                <div class="form-group">
                                                    <label class="input-label" for="name">
                                                        Section 2 - Image<span>*</span></label>
                                                    <img src="<?php echo $this->config->item('web_url').'assets/images/services/'.$result->image2;?>"
                                                        alt="" style="max-width:100%;">

                                                </div>
                                            </div>
                                            <div class="col s12 m6 l6 img " style="margin-top:15px;">

                                                <div class="endorsement file-field input-field">
                                                    <div class="btn btn-small black-text grey lighten-3">
                                                        <i class="far fa-image left  "></i>
                                                        <span class="">Choose File</span>
                                                        <input type="file" name="image2"
                                                            accept=" application/pdf, image/*">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text">
                                                    </div>
                                                    <h6 class=" m0">
                                                        <small> <i><b>Note</b>: Please upload service 2 - image
                                                                <br>
                                                                <span class="bold">Max file size:</span> 512kb <span
                                                                    class="red-text">*</span></i>
                                                            <br>
                                                            <span class="bold">Preffered file dimension:</span> 520 x
                                                            424 <span class="red-text">*</span></i>
                                                        </small>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="col s12 l12 m12 center-align">
                                                <button type="submit" class="btn btn-form btn-submit"
                                                    style="margin-top:20px;">UPDATE</button>
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
            page: {
                required: true,
            },
            title1: {
                required: true,
            },
            heading1: {
                required: true,
            },
            description1: {
                required: true,
            },
        },
        messages: {
            page: {
                required: "Please provide a page name",
            },
            title1: {
                required: "Please provide a title",
            },
            heading1: {
                required: "Please provide a heading",
            },
            description1: {
                required: "Please provide a description",
            },
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#description1').summernote({
            placeholder: 'Description',
            tabsize: 2,
            height: 350,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                // ['para', ['ul', 'ol', 'paragraph']],
                // ['table', ['table']],
                //   ['insert', ['link', 'picture', 'video']],
                //   ['view', ['fullscreen', 'codeview', 'help']]
                ['view', ['codeview', 'help']]
            ]
        });

        $('#description2').summernote({
            placeholder: 'Description',
            tabsize: 2,
            height: 350,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                // ['para', ['ul', 'ol', 'paragraph']],
                // ['table', ['table']],
                //   ['insert', ['link', 'picture', 'video']],
                //   ['view', ['fullscreen', 'codeview', 'help']]
                ['view', ['codeview', 'help']]
            ]
        });

        $('#description3').summernote({
            placeholder: 'Description',
            tabsize: 2,
            height: 350,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                // ['para', ['ul', 'ol', 'paragraph']],
                // ['table', ['table']],
                //   ['insert', ['link', 'picture', 'video']],
                //   ['view', ['fullscreen', 'codeview', 'help']]
                ['view', ['codeview', 'help']]
            ]
        });

        $('#description4').summernote({
            placeholder: 'Description',
            tabsize: 2,
            height: 350,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                // ['para', ['ul', 'ol', 'paragraph']],
                // ['table', ['table']],
                //   ['insert', ['link', 'picture', 'video']],
                //   ['view', ['fullscreen', 'codeview', 'help']]
                ['view', ['codeview', 'help']]
            ]
        });
    });

    $(document).ready(function() {
        $('.si-s >.collapsible-body').css({
            display: 'block',
        });
    });
    </script>

</body>


</html>