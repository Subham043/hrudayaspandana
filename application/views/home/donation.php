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
    <style>
    .viewMoreBtn {
        background: transparent !important;
        border: none !important;
        outline: none !important;
        color: #ffaa49;
        font-weight: 700;
    }

    .viewMoreBtn:hover {
        text-decoration: underline;
    }

    #certification p {
        margin-left: 15px;
    }
    </style>
</head>

<body>
    <?php $this->load->view('includes/header') ?>

    <?php $this->load->view('includes/hero') ?>

    <section class="donation donation-page">
        <div class="wrapper">
            <div class="donation-row">
                <div class="col-2-donation">
                    <div class="heading">
                        <p class="upper-heading">donations</p>
                        <h4 class="lower-heading">Dakshina:
                            Yoga’s Practice of “Giving Back”</h4>
                    </div>
                    <div class="paragraph">
                        <p>Dakshina is an ancient tradition of those who practice yoga, and it is a display of
                            generosity – a private contribution to the financial support of the teacher and their
                            teachings.</p>
                        <p>When we experience a pure inner impulse caused by a higher purpose to help others, to express
                            our unconditional gratefulness, it is called Dakshina. We are being guided by our feelings,
                            and, in this case, the amount we give is irrelevant as long as we gain our own true Self.
                        </p>
                    </div>
                </div>
                <div class="col-2-donation">
                    <h4>Personal Information</h4>
                    <form id="donationForm" action="<?php echo base_url('donation'); ?>" method="post">
                        <input autocomplete="off" type="hidden"
                            name="<?php echo $this->security->get_csrf_token_name(); ?>"
                            value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" id="fname" name="fname" class="form-control form-donation-input"
                                        placeholder="First Name" value="<?php echo $this->session->userdata('user_id') == '' ? set_value('fname') : $user->fname; ?>">
                                    <div style="color:red;"><?php echo form_error('fname'); ?></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" id="lname" name="lname" class="form-control form-donation-input"
                                        placeholder="Last Name" value="<?php echo $this->session->userdata('user_id') == '' ? set_value('lname') : $user->lname; ?>">
                                    <div style="color:red;"><?php echo form_error('lname'); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" id="phone" name="phone" class="form-control form-donation-input"
                                        placeholder="Phone Number" value="<?php echo $this->session->userdata('user_id') == '' ? set_value('phone') : $user->phone; ?>">
                                    <div style="color:red;"><?php echo form_error('phone'); ?></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="email" id="email" name="email" class="form-control form-donation-input"
                                        placeholder="Email" value="<?php echo $this->session->userdata('user_id') == '' ? set_value('email') : $user->email; ?>">
                                    <div style="color:red;"><?php echo form_error('email'); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" id="city" name="city" class="form-control form-donation-input"
                                        placeholder="City" value="<?php echo set_value('city'); ?>">
                                    <div style="color:red;"><?php echo form_error('city'); ?></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" id="state" name="state" class="form-control form-donation-input"
                                        placeholder="State" value="<?php echo set_value('state'); ?>">
                                    <div style="color:red;"><?php echo form_error('state'); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <select name="trust" id="trust" class="form-control form-donation-input">
                                <option value="null" <?php echo set_value('trust')=='null'?'selected':''; ?>>Select a
                                    Trust</option>
                                <option value="Sai Mayee Trust"
                                    <?php echo set_value('trust')=='Sai Mayee Trust'?'selected':''; ?>>Sai Mayee Trust
                                </option>
                                <option value="Sri Sai Meru Mathi Trust"
                                    <?php echo set_value('trust')=='Sri Sai Meru Mathi Trust'?'selected':''; ?>>Sri Sai
                                    Meru Mathi Trust</option>
                            </select>
                            <div style="color:red;"><?php echo form_error('trust'); ?></div>
                        </div>
                        <div id="certification" class="mb-3" style="display: none;">
                            <p><strong><span>Note:</span></strong><span id="certification_text"
                                    style="color: #3c3489;"></span></p>
                        </div>
                        <div class="mb-3" id="pan_div" style="display: none;">
                            <input type="text" id="pan" name="pan" class="form-control form-donation-input"
                                placeholder="PAN No." value="<?php echo set_value('pan'); ?>">
                            <div style="color:red;"><?php echo form_error('pan'); ?></div>
                        </div>
                        <div class="mb-3">
                            <input type="text" id="amount" name="amount" class="form-control form-donation-input"
                                placeholder="Amount" value="<?php echo set_value('amount'); ?>">
                            <div style="color:red;"><?php echo form_error('amount'); ?></div>
                        </div>
                        <div class="mb-3">
                            <?php  echo $captchaHtml;    ?>
                            <div style="color:red;"><?php echo form_error('captcha'); ?></div>
                            <input id="captcha" type="text" name="captcha" value=""
                                class="form-control form-donation-input  mt-3" required
                                placeholder="Enter the text from above image" />
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" id="check" name="check"
                                class="form-check-input  form-donation-checkbox">
                            <label class="form-check-label" for="check">I agree that my submitted data is being
                                collected and stored.</label>
                            <div style="color:red;"><?php echo form_error('check'); ?></div>
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary  form-donation-submit">Donate Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal2 -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('includes/footer') ?>
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
$('#trust').on('change', function() {
    if ($(this).val() == 'Sai Mayee Trust') {
        $('#certification').css('display', 'block');
        $('#pan_div').css('display', 'block');
        $('#certification_text').html(` It includes 80G Certification. Click the button to know more. <button type="button" class="viewMoreBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
  View More
</button>`);
    } else if ($(this).val() == 'Sri Sai Meru Mathi Trust') {
        $('#certification').css('display', 'block');
        $('#pan_div').css('display', 'none');
        $('#certification_text').html(
            ` It does not include 80G Certification. Click the button to know more. <button type="button" class="viewMoreBtn" data-bs-toggle="modal" data-bs-target="#exampleModal1">View More
</button>`
        );
    } else if ($(this).val() == 'null') {
        $('#certification').css('display', 'none');
        $('#pan_div').css('display', 'none');
    }
})

if ($('#trust').val() == 'Sai Mayee Trust') {
    $('#certification').css('display', 'block');
    $('#pan_div').css('display', 'block');
    $('#certification_text').html(` It includes 80G Certification. Click the button to know more. <button type="button" class="viewMoreBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
  View More
</button>`);
} else if ($('#trust').val() == 'Sri Sai Meru Mathi Trust') {
    $('#certification').css('display', 'block');
    $('#pan_div').css('display', 'none');
    $('#certification_text').html(
        ` It does not include 80G Certification. Click the button to know more. <button type="button" class="viewMoreBtn" data-bs-toggle="modal" data-bs-target="#exampleModal1">View More
</button>`
    );
} else if ($('#trust').val() == 'null') {
    $('#certification').css('display', 'none');
    $('#pan_div').css('display', 'none');
}
</script>

<script>
$.validator.addMethod("selectNotEquals", function(value, element, arg) {
    return arg !== value;
}, "Value must not equal arg.");

$("#donationForm").validate({
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
        captcha: "Please enter the captcha",
        check: "Please accept our policy",
    },
    submitHandler: function(form) {
        form.submit();
    }
});
</script>

</html>