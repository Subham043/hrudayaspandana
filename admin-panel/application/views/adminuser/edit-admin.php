<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url()?>assets/fonts/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/croppie.css">
    <!-- bar -->
    <style>
    .ck-editor__editable {
        min-height: 300px;
    }
    </style>
</head>

<body>
    <!-- headder -->
    <div id="header-include">
        <?php $this->load->view('include/header.php'); ?>
    </div>
    <!-- end headder -->
    <!-- first layout -->
    <section class="sec-top">
        <div class="container-wrap">
            <div class="col l12 m12 s12">
                <div class="row">
                    <div id="sidemenu-include">
                        <?php $this->load->view('include/menu.php'); ?>
                    </div>

                    <div class="col m12 s12 l9">
                        <p class="h5-para black-text ">Edit admin user</p>

                        <div class="card">
                            <div class="card-content">
                                <div class="form-container">
                                    <form action="<?php echo base_url() ?>adminuser/update" method="post"
                                        id="admin-form" enctype="multipart/form-data">
                                        <input type="hidden"
                                            name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                            value="<?php echo $this->security->get_csrf_hash(); ?>">
                                        <div class="row m0">
                                            <div class="input-field col s12 l6">
                                                <input type="text" id="name" name="name" class="validate" required
                                                    value="<?php echo (!empty($result->name))?$result->name:''; ?>">
                                                <label for="name">Name<span class="red-text">*</span></label>
                                                <p><span class="error"><?php echo form_error('name'); ?></span></p>
                                            </div>
                                            <div class="input-field col s12 l6">
                                                <input type="text" id="email" name="email" class="validate" required
                                                    value="<?php echo (!empty($result->email))?$result->email:''; ?>">
                                                <label for="email">Email<span class="red-text">*</span></label>
                                                <p><span class="error"><?php echo form_error('email'); ?></span></p>
                                            </div>
                                        </div>
                                        <div class="row m0">

                                        </div>
                                        <div class="row m0">
                                            <div class="input-field col s12 l6">
                                                <input type="text" id="phone" name="phone" class="validate"
                                                    value="<?php echo (!empty($result->phone))?$result->phone:''; ?>">
                                                <label for="phone">Phone</label>
                                                <p><span class="error"><?php echo form_error('phone'); ?></span></p>
                                            </div>
                                            <div class="input-field col s12 l6">

                                                <select name="sub_division_id[]" multiple required>
                                                    <option value="" disabled>Select Police Station</option>
                                                    <?php  if (!empty($division)) {  foreach ($division as $key => $value) { ?>
                                                    <option value="<?php echo $value->id; ?>" <?php foreach($result->subdivision as $sub){
                                                        if($sub->subdivision_id== $value->id){echo  'selected' ;}     
                                                    }  
                                                        
                                                        ; ?>><?php echo $value->sub_division_name; ?></option>
                                                    <?php } } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row m0">
                                            <div class="input-field col s12 l6">
                                                <p>Admin Type</p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" name="admintype" type="radio" value="3"
                                                            <?php echo ($result->admin_type == '3')?'checked':''; ?> />
                                                        <span>Officer</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" name="admintype" type="radio" value="2"
                                                            <?php echo ($result->admin_type == '2')?'checked':''; ?> />
                                                        <span>Co-worker</span>
                                                    </label>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row m0">
                                            <div class="input-field col s12 l6">
                                                <p>Admin Status</p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" name="active" type="radio" value="1"
                                                            <?php echo ($result->is_active == '1')?'checked':''; ?> />
                                                        <span>Active</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" name="active" type="radio" value=""
                                                            <?php echo ($result->is_active == '0')?'checked':''; ?> />
                                                        <span>Inactive</span>
                                                    </label>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <?php 
                                                   echo ($this->session->flashdata('formerror'))? '<span class="red-text">'.$this->session->flashdata('formerror').'</span>' : '' 
                                                   ?>
                                            <?php ?>
                                        </div>

                                        <input type="hidden" name="id"
                                            value="<?php echo (!empty($result->id))?$result->id:''; ?>">


                                        <div class="col s12 mtb20">
                                            <button
                                                class="btn waves-effect waves-light green darken-4 hoverable btn-large upload-result"
                                                type="submit">Submit
                                                <i class="fas fa-paper-plane right"></i>
                                            </button>
                                            <br>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- cad end -->
                </div>
            </div>
        </div>
        </div>
    </section>

    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/croppie.js"></script>

    <script>
    <?php $this->load->view('include/message.php'); ?>
    </script>
    <script>
    $(document).ready(function() {

        $("#admin-form").validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                },
            },




            messages: {

                name: "Please enter a name",
                email: "Please enter a email",
            }
        });

    });
    </script>

</body>

</html>