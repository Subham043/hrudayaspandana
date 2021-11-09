<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $title; ?></title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/viewbox.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <!-- Captcha CSS -->
    <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />
</head>

<body>
<?php $this->load->view('includes/loader') ?>
    <?php $this->load->view('includes/header') ?>

    <?php $this->load->view('includes/hero') ?>

    <section class="hundi donation-page">
        <div class="wrapper">
            <div class="hundi-row">
                <div class="col-lg-7 col-md-8 col-sm-12">
                    <div class="heading">
                        <h4 class="lower-heading">Volunteer</h4>
                    </div>
                    <form id="volunteerForm" action="<?php echo base_url('volunteer'); ?>" method="post">
                    <input autocomplete="off" type="hidden"
                            name="<?php echo $this->security->get_csrf_token_name(); ?>"
                            value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" id="fname" name="fname" class="form-control form-hundi-input" placeholder="First Name" value="<?php echo $this->session->userdata('user_id') == '' ? set_value('fname') : $user->fname; ?>">
                                    <div style="color:red;"><?php echo form_error('fname'); ?></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" id="lname" name="lname" class="form-control form-hundi-input" placeholder="Last Name" value="<?php echo $this->session->userdata('user_id') == '' ? set_value('lname') : $user->lname; ?>">
                                    <div style="color:red;"><?php echo form_error('lname'); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" id="phone" name="phone" class="form-control form-hundi-input" placeholder="Phone Number" value="<?php echo $this->session->userdata('user_id') == '' ? set_value('phone') : $user->phone; ?>">
                                    <div style="color:red;"><?php echo form_error('phone'); ?></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="email" id="email" name="email" class="form-control form-hundi-input" placeholder="Email" value="<?php echo $this->session->userdata('user_id') == '' ? set_value('email') : $user->email; ?>">
                                    <div style="color:red;"><?php echo form_error('email'); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" id="aadhaar" name="aadhaar" class="form-control form-hundi-input" placeholder="Aadhaar Number" value="<?php echo set_value('aadhaar'); ?>">
                            <div style="color:red;"><?php echo form_error('aadhaar'); ?></div>
                        </div>
                        <div class="mb-3">
                            <textarea type="text" id="address" name="address" class="form-control form-hundi-input" rows="7"  placeholder="Address"><?php echo set_value('address'); ?></textarea>
                            <div style="color:red;"><?php echo form_error('address'); ?></div>
                        </div>
                        <div class="mb-3">
                        <textarea type="text" id="interest" name="interest" class="form-control form-hundi-input" rows="7"  placeholder="Describe your seva interest."><?php echo set_value('interest'); ?></textarea>
                        <div style="color:red;"><?php echo form_error('interest'); ?></div>
                        </div>
                        <div class="mb-3">
                            <?php  echo $captchaHtml;    ?>
                            <div style="color:red;"><?php echo form_error('captcha'); ?></div>
                            <input id="captcha" type="text" name="captcha" value=""
                                class="form-control form-hundi-input  mt-3" required
                                placeholder="Enter the text from above image" />
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input  form-hundi-checkbox" id="check" name="check">
                            <label class="form-check-label" for="check">I agree that my submitted data is being
                                collected and stored.</label>
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary  form-hundi-submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view('includes/footer') ?>
    <?php $this->load->view('includes/scroll-top-button') ?>
</body>

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/tata.js"></script>
<script src="<?php echo base_url(); ?>assets/js/navbar.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>

<script>
<?php if($this->session->flashdata('success')) { ?>

tata.success('Success', '<?php echo $this->session->flashdata('success'); ?>', {
    duration: 10000,
    animate: 'slide',
})

<?php } ?>

<?php if($this->session->flashdata('error')) { ?>

tata.error('Error', '<?php echo $this->session->flashdata('error'); ?>', {
    duration: 10000,
    animate: 'slide',
})

<?php } ?>
</script>

<script>
$("#volunteerForm").validate({
    rules: {
        fname: {
            required: true,
            minlength: 2
        },
        lname: {
            required: true,
            minlength: 2
        },
        phone: {
            required: true,
            minlength: 10,
            maxlength: 10,
            number: true
        },
        aadhaar: {
            required: true,
            minlength: 12,
            maxlength: 12,
            number: true
        },
        email: {
            required: true,
            email: true
        },
        address: "required",
        interest: "required",
        captcha: "required",
        check: "required",
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
        phone: {
            required: "Please provide a phone number",
            minlength: "Your phone number must be at least 10 characters long",
            maxlength: "Your phone number must be at most 10 characters long",
            number: "Your phone number must be numeric only",
        },
        aadhaar: {
            required: "Please provide a aadhaar",
            minlength: "Your aadhaar must be at least 12 characters long",
            maxlength: "Your aadhaar must be at most 12 characters long",
            number: "Your aadhaar must be numeric only",
        },
        email: "Please enter a valid email address",
        address: "Please enter the address",
        interest: "Please enter the seva interest",
        captcha: "Please enter the captcha",
        check: "Please accept our policy",
    },
    submitHandler: function(form) {
        form.submit();
    }
});
</script>


</html>