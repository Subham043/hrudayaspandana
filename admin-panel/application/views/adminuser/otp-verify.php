<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="<?php echo base_url()?>assets/fonts/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
    <style>
    section {
        display: flex;
        vertical-align: middle;
        height: 100vh;
        align-items: center;
    }
    </style>
</head>

<body>

    <!-- login section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col s12 l6 m10 push-m1 push-l3">

                    <div class="card z-depth-2">
                        <div class="card-content">
                            <div>

                                <h4 class="center">Enter OTP</h4>
                                <form method="post"
                                    action="<?php echo base_url().'authentication/otp_verication/'.$id?>"
                                    style="overflow: hidden;" id="reset-form">
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                        value="<?php echo $this->security->get_csrf_hash(); ?>">
                                    <div class="input-field col s12">
                                        <input type="text" id="otp" class="validate" required name="otp">

                                        <label for="otp" >OTP</label>
                                        <p><span class="error"><?php echo form_error('remail'); ?></span></p>
                                    </div>

                                    <div class="col s12 center">
                                        <?php 
                                     echo ($this->session->flashdata('formerror'))? '<span class="red-text">'.$this->session->flashdata('formerror').'</span>' : '' 
                                     ?>
                                        <?php ?>
                                    </div>
                                    <div class="input-field col s12 l12">
                                        <button type="submit"
                                            class="waves-effect white-text waves-light btn green hoverable darken-4"
                                            style="width:100%">Submit</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>

    <script>
    $(document).ready(function() {
        $("#reset-form").validate({
            rules: {
                otp: {
                    required: true,
                    minlength: 6
                },
            },
            messages: {
                otp: {
                    required: "Please provide an otp",
                    minlength: "Your password must be at least 6 digits long"
                },

            }
        });
    });
    </script>

    <script>
    <?php $this->load->view('include/message'); ?>
    </script>

</body>

</html>