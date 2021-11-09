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

    <section class="events contact-events">
        <div class="wrapper">
            <div class="heading">
                <!-- <p class="upper-heading">Blogs</p> -->
                <h4 class="lower-heading">Reach Us</h4>
            </div>
            <div class="events-main">
                <div class="events-row">



                    <div class="event-row-image contact-event-one">
                        <!-- <img  onContextMenu="return false;"  src="<?php echo base_url(); ?>assets/images/pray.jpg" alt=""> -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.7898513320256!2d77.51846671482146!3d12.921224090888943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3f011f2bf73f%3A0xad514ba017f39891!2sJurysoft!5e0!3m2!1sen!2sin!4v1631520547292!5m2!1sen!2sin"
                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="event-row-line event-row-one">
                        <div class="line"></div>
                    </div>
                    <div class="event-row-text event-row-two contact-event-two">
                        <a href="#">
                            <h4 style="text-transform: capitalize">Sai Mayee Trust</h4>
                        </a>
                        <p>28 SMS Layout, 5th Phase, JP Nagar,<br> Bangalore, 560078, India</p>
                        <a href="tel:+123.456.7890" class="mailtel_link"><i class="fas fa-phone-volume"></i>
                            +123.456.7890</a><br>
                        <a href="mailto:needhelp@yourdomain.com" class="mailtel_link"><i class="fas fa-envelope"></i>
                            needhelp @ yourdomain.com</a>
                    </div>



                    <div class="event-row-text event-row-four contact-event-four">
                        <a href="#">
                            <h4 style="text-transform: capitalize">Sai Meru Mathi Trust</h4>
                        </a>
                        <p>28 SMS Layout, 5th Phase, JP Nagar,<br> Bangalore, 560078, India</p>
                        <a href="tel:+123.456.7890" class="mailtel_link"><i class="fas fa-phone-volume"></i>
                            +123.456.7890</a><br>
                        <a href="mailto:needhelp@yourdomain.com" class="mailtel_link"><i class="fas fa-envelope"></i>
                            needhelp @ yourdomain.com</a>
                    </div>
                    <div class="event-row-line event-row-three">
                        <div class="line"></div>
                    </div>
                    <div class="event-row-image contact-event-three">
                        <!-- <img  onContextMenu="return false;"  src="<?php echo base_url(); ?>assets/images/pray.jpg" alt=""> -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.7898513320256!2d77.51846671482146!3d12.921224090888943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3f011f2bf73f%3A0xad514ba017f39891!2sJurysoft!5e0!3m2!1sen!2sin!4v1631520547292!5m2!1sen!2sin"
                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>



                    <!-- <div class="event-row-image">
                        <img  onContextMenu="return false;"  src="<?php echo base_url(); ?>assets/images/pray.jpg" alt="">
                    </div>
                    <div class="event-row-line event-row-five">
                        <div class="line"></div>
                    </div>
                    <div class="event-row-text event-row-six">
                        <a href="#">
                            <h4 style="text-transform: capitalize">Church urges government to address poverty.</h4>
                        </a>
                        <p>Nerline Valery lived in a tent for four years after the Haiti
                            earthquake. Now she and her family have a a new home. We can start thinking that the
                            “best” corporate worship context is characterized by bright stage lights, fog, high
                            end
                            musical gear.</p>
                    </div> -->


                </div>
            </div>
            <!-- <div class="events-main-btn">
                <a href="">More Blogs</a>
            </div> -->
        </div>
    </section>

    <section class="hundi donation-page">
        <div class="wrapper">
            <!-- <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.7898513320256!2d77.51846671482146!3d12.921224090888943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3f011f2bf73f%3A0xad514ba017f39891!2sJurysoft!5e0!3m2!1sen!2sin!4v1631520547292!5m2!1sen!2sin"
                    width="1200" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="contact-details">
                <div class="contact-details-row">
                    <div class="col-lg-3 col-md-4 col-sm-12 col-icon first">
                        <div class="icon"><i class="fas fa-phone-volume"></i></div>
                        <div class="text"><a href="tel:+123.456.7890">+123.456.7890</a></div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-icon second">
                        <div class="icon"><i class="fas fa-envelope"></i></div>
                        <div class="text"><a href="mailto:needhelp@yourdomain.com">needhelp @ yourdomain.com</a></div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-icon third">
                        <div class="icon"><i class="fas fa-globe-asia"></i></div>
                        <div class="text"><a href="#">66 Broklyn Street USA</a></div>
                    </div>
                </div>
            </div> -->
            <div class="hundi-row">
                <div class="col-lg-7 col-md-8 col-sm-12">
                    <div class="heading">
                        <p class="upper-heading">MAIL US</p>
                        <h4 class="lower-heading">Have a Question?<br>Drop Us a Line!</h4>
                    </div>
                    <form id="contactForm" action="<?php echo base_url('contact'); ?>" method="post">
                        <input autocomplete="off" type="hidden"
                            name="<?php echo $this->security->get_csrf_token_name(); ?>"
                            value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" id="fname" name="fname" class="form-control form-hundi-input"
                                        placeholder="First Name" value="<?php echo $this->session->userdata('user_id') == '' ? set_value('fname') : $user->fname; ?>">
                                    <div style="color:red;"><?php echo form_error('fname'); ?></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" id="lname" name="lname" class="form-control form-hundi-input"
                                        placeholder="Last Name" value="<?php echo $this->session->userdata('user_id') == '' ? set_value('lname') : $user->lname; ?>">
                                    <div style="color:red;"><?php echo form_error('lname'); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" id="phone" name="phone" class="form-control form-hundi-input"
                                        placeholder="Phone Number" value="<?php echo $this->session->userdata('user_id') == '' ? set_value('phone') : $user->phone; ?>">
                                    <div style="color:red;"><?php echo form_error('phone'); ?></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="email" id="email" name="email" class="form-control form-hundi-input"
                                        placeholder="Email" value="<?php echo $this->session->userdata('user_id') == '' ? set_value('email') : $user->email; ?>">
                                    <div style="color:red;"><?php echo form_error('email'); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <select name="trust" id="trust" class="form-control form-hundi-input">
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
                        <div class="mb-3">
                            <textarea name="message" id="message" rows="7" class="form-control form-hundi-input"
                                placeholder="Message"><?php echo set_value('message'); ?></textarea>
                            <div style="color:red;"><?php echo form_error('message'); ?></div>
                        </div>
                        <div class="mb-3">
                            <?php  echo $captchaHtml;    ?>
                            <input id="captcha" type="text" name="captcha" value=""
                                class="form-control form-hundi-input  mt-3" required
                                placeholder="Enter the text from above image" />
                            <div style="color:red;"><?php echo form_error('captcha'); ?></div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input  form-hundi-checkbox" id="check"
                                name="check">
                            <label class="form-check-label" for="check">I agree that my submitted data is being
                                collected and stored.</label>
                            <div style="color:red;"><?php echo form_error('check'); ?></div>
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
$.validator.addMethod("selectNotEquals", function(value, element, arg) {
    return arg !== value;
}, "Value must not equal arg.");

$("#contactForm").validate({
    rules: {
        fname: {
            required: true,
            minlength: 2
        },
        lname: {
            required: true,
            minlength: 2
        },
        message: {
            required: true,
        },
        phone: {
            required: true,
            minlength: 10,
            maxlength: 10,
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
        message: {
            required: "Please provide a message",
        },
        phone: {
            required: "Please provide a phone number",
            minlength: "Your phone number must be at least 10 characters long",
            maxlength: "Your phone number must be at most 10 characters long",
            number: "Your phone number must be numeric only",
        },
        trust: {
            required: "Please select a trust",
            selectNotEquals: "Please select a trust"
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

<script>
$(document).ready(function() {
    $("body").on("contextmenu", function(e) {
        tata.error('Error', 'right-click is disabled!', {
            duration: 10000,
            animate: 'slide',
        })
        return false;
    });
});
</script>


</html>