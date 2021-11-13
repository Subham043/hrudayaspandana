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
    .error {
        color: red !important;
    }

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

    .tata {
        z-index: 99999999 !important;
    }

    #certification p {
        margin-left: 15px;
    }
    </style>
</head>

<body>
    <?php $this->load->view('includes/loader') ?>
    <?php $this->load->view('includes/header') ?>

    <section class="banner">
        <div class="wrapper">
            <div class="slider-div-box">

                <div class="regular slider">

                    <?php
                if (!empty($banner)) {
                    $count = 0;
                    foreach ($banner as $key => $value) { $count = $count+1;
                    ?>
                    <div class="slider-hover-div">
                        <div class="slider-div-image">
                            <img onContextMenu="return false;"
                                src="<?php echo base_url(); ?>assets/images/home/banner/<?php echo $value->image; ?>"
                                alt="">
                            <div class="slider-image-overlay"></div>
                        </div>
                        <div class="slider-div-quote">
                            <h4><?php echo $value->quoteline1; ?></h4>
                            <?php if($value->quoteline2 != null){ ?>
                            <h4><?php echo $value->quoteline2; ?></h4>
                            <?php } ?>
                        </div>
                    </div>

                    <?php } } ?>

                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="wrapper">
            <div class="about-row about-row-bottom">
                <div class="col-2-about">
                    <div class="heading">
                        <p class="upper-heading">welcome</p>
                        <h4 class="lower-heading">Come to heal your hearts</h4>
                    </div>
                </div>
                <div class="col-2-about">
                    <p class="paragraph-text">We are happy to see newcomers at any of our yoga and meditation classes.
                        Join the community to
                        participate in the center`s life and the discussion club.</p>
                    <p class="paragraph-text">Stay at the Ashram and immerse yourself in our wonderful yogic lifestyle
                        program with other
                        like-minded members.</p>
                </div>
            </div>
            <div class="about-row">
                <div class="col-3-about">
                    <div class="about-card">
                        <img onContextMenu="return false;" src="<?php echo base_url(); ?>assets/images/about/about4.jpg"
                            alt="" class="about-card-img">
                        <h4>Hrudayaspandana</h4>
                        <p>A spiritual hermitage in green valleys of the mountains where you can see millions of stars
                            at night.</p>
                    </div>
                </div>
                <div class="col-3-about">
                    <div class="about-card">
                        <img onContextMenu="return false;" src="<?php echo base_url(); ?>assets/images/about/about6.jpg"
                            alt="" class="about-card-img">
                        <h4>Sai Mayee Trust</h4>
                        <p>We appreciate your contribution to the donation programs and will happily accept any help we
                            can get.</p>
                    </div>
                </div>
                <div class="col-3-about">
                    <div class="about-card">
                        <img onContextMenu="return false;" src="<?php echo base_url(); ?>assets/images/about/about5.jpg"
                            alt="" class="about-card-img">
                        <h4>Sri Sai Meru Mathi Trust</h4>
                        <p>Our community is actively involved in the life of locals that require humanitarian support on
                            a regular basis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="donation">
        <div class="wrapper">
            <div class="donation-row">
                <div class="col-2-donation">
                    <div class="heading">
                        <p class="upper-heading">donations</p>
                        <h4 class="lower-heading">We together can make a difference...</h4>
                    </div>
                    <div class="paragraph">
                        <p>We are sure our spiritual, noble, lofty and socially motivated mission must be resonating
                            with your heart, and as an enlightened individual you would like to contribute in some way
                            or the other to this noble cause. We need many of you to come and join us in this endeavor.
                        </p>
                    </div>
                </div>
                <div class="col-2-donation">
                    <h4>Personal Information</h4>
                    <form id="donationForm" method="post">
                        <input autocomplete="off" type="hidden"
                            name="<?php echo $this->security->get_csrf_token_name(); ?>"
                            value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" id="fname_donation" name="fname"
                                        class="form-control form-donation-input" placeholder="First Name"
                                        value="<?php echo $this->session->userdata('user_id') == '' ? set_value('fname') : $user->fname; ?>">
                                    <div id="donationFNameError" style="color:red;font-style:italic;"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" id="lname_donation" name="lname"
                                        class="form-control form-donation-input" placeholder="Last Name"
                                        value="<?php echo $this->session->userdata('user_id') == '' ? set_value('lname') : $user->lname; ?>">
                                    <div id="donationLNameError" style="color:red;font-style:italic;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" id="phone_donation" name="phone"
                                        class="form-control form-donation-input" placeholder="Phone Number"
                                        value="<?php echo $this->session->userdata('user_id') == '' ? set_value('phone') : $user->phone; ?>">
                                    <div id="donationPhoneError" style="color:red;font-style:italic;"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="email" id="email_donation" name="email"
                                        class="form-control form-donation-input" placeholder="Email"
                                        value="<?php echo $this->session->userdata('user_id') == '' ? set_value('email') : $user->email; ?>">
                                    <div id="donationEmailError" style="color:red;font-style:italic;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" id="city_donation" name="city"
                                        class="form-control form-donation-input" placeholder="City"
                                        value="<?php echo set_value('city'); ?>">
                                    <div id="donationCityError" style="color:red;font-style:italic;"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" id="state" name="state" class="form-control form-donation-input"
                                        placeholder="State" value="<?php echo set_value('state'); ?>">
                                    <div id="donationStateError" style="color:red;font-style:italic;"></div>
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
                            <div id="donationTrustError" style="color:red;font-style:italic;"></div>
                        </div>
                        <div id="certification" class="mb-3" style="display: none;">
                            <p><strong><span>Note:</span></strong><span id="certification_text"
                                    style="color: #3c3489;"></span></p>
                        </div>
                        <div class="mb-3" id="pan_div" style="display: none;">
                            <input type="text" id="pan" name="pan" class="form-control form-donation-input"
                                placeholder="PAN No." value="<?php echo set_value('pan'); ?>">
                            <div id="donationPanError" style="color:red;font-style:italic;"></div>
                        </div>
                        <div class="mb-3">
                            <input type="text" id="amount" name="amount" class="form-control form-donation-input"
                                placeholder="Amount" value="<?php echo set_value('amount'); ?>">
                            <div id="donationAmountError" style="color:red;font-style:italic;"></div>
                        </div>
                        <div class="mb-3">
                            <?php  echo $captchaHtml;    ?>
                            <input id="captcha" type="text" name="captcha" value=""
                                class="form-control form-donation-input  mt-2" required
                                placeholder="Enter the text from above image" />
                            <div id="donationCaptchaError" style="color:red;font-style:italic;"></div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" id="check_donation" name="check"
                                class="form-check-input  form-donation-checkbox">
                            <label class="form-check-label" for="check_donation">I agree that my submitted data is being
                                collected and stored.</label>
                            <div id="donationCheckError" style="color:red;font-style:italic;"></div>
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary  form-donation-submit"
                                id="donationSubmit">Donate Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="subscription">
        <div class="wrapper">
            <div class="heading">
                <h4>Subscribe For More Updates</h4>
                <p>Life is challenge, meet it! Life is a dream, realize it! Life is a game, Play it! Life is love,
                    spread it!</p>
                <form id="subscribeForm" method="post">
                    <div class="row mb-4">
                        <div class="col-lg-4">
                            <div>
                                <input type="text" class="form-control form-donation-input" id="subscribeName"
                                    name="name" placeholder="Name"
                                    value="<?php echo$this->session->userdata('user_id') == '' ? set_value('subscribeName') : $user->fname.' '.$user->lname ; ?>">
                                <div id="subscribeNameError" style="color:red;font-style:italic;"></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <input type="text" class="form-control form-donation-input" id="subscribePhone"
                                    name="phone" placeholder="Mobile"
                                    value="<?php echo$this->session->userdata('user_id') == '' ? set_value('subscribePhone') : $user->phone ; ?>">
                                <div id="subscribePhoneError" style="color:red;font-style:italic;"></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <input type="text" class="form-control form-donation-input" id="subscribeEmail"
                                    name="email" placeholder="Email"
                                    value="<?php echo$this->session->userdata('user_id') == '' ? set_value('subscribeEmail') : $user->email ; ?>">
                                <div id="subscribeEmailError" style="color:red;font-style:italic;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 text-center">
                        <input type="checkbox" class="form-check-input  form-donation-checkbox" value="ebook" id="ebook"
                            name="ebook">
                        <label class="form-check-label" for="ebook">E-book</label>
                        <input type="checkbox" class="form-check-input  form-donation-checkbox" value="event" id="event"
                            name="event">
                        <label class="form-check-label" for="event">Events</label>
                        <input type="checkbox" class="form-check-input  form-donation-checkbox" value="newsletter"
                            id="newsletter" name="newsletter">
                        <label class="form-check-label" for="newsletter">Newsletter</label>
                        <input type="checkbox" class="form-check-input  form-donation-checkbox" value="blog" id="blog"
                            name="blog">
                        <label class="form-check-label" for="blog">Blog</label>
                        <div id="subscribeSubscriptionError" style="color:red;font-style:italic;text-align:center;">
                        </div>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" id="subscribeSubmit"
                            class="btn btn-primary  form-donation-submit">Subscribe Now</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- <section class="events">
        <div class="wrapper">
            <div class="heading">
                <p class="upper-heading">Events</p>
                <h4 class="lower-heading">Upcoming Events</h4>
            </div>
            <div class="events-main">
                <div class="events-row">

                    <?php
                if (!empty($events)) {
                    ?>

                    <div class="event-row-image">
                        <img  onContextMenu="return false;"  src="<?php echo base_url(); ?>assets/images/events/<?php echo $events[0]->image; ?>"
                            alt="">
                    </div>
                    <div class="event-row-line event-row-one">
                        <div class="line"></div>
                    </div>
                    <div class="event-row-text event-row-two">
                        <a href="<?php echo base_url('events/'.$this->encrypt->encode($events[0]->id)); ?>">
                            <h4 style="text-transform: capitalize"><?php echo $events[0]->name; ?></h4>
                        </a>
                        <p><?php echo substr($events[0]->description1,0,200); ?>....</p>
                    </div>

                    <?php
                    if (count($events)>=2) {
                        ?>

                    <div class="event-row-text event-row-four">
                        <a href="<?php echo base_url('events/'.$this->encrypt->encode($events[1]->id)); ?>">
                            <h4 style="text-transform: capitalize"><?php echo $events[1]->name; ?></h4>
                        </a>
                        <p><?php echo substr($events[1]->description1,0,200); ?>....</p>
                    </div>
                    <div class="event-row-line event-row-three">
                        <div class="line"></div>
                    </div>
                    <div class="event-row-image">
                        <img  onContextMenu="return false;"  src="<?php echo base_url(); ?>assets/images/events/<?php echo $events[1]->image; ?>"
                            alt="">
                    </div>

                    <?php } ?>

                    <?php
                    if (count($events)==3) {
                        ?>

                    <div class="event-row-image">
                        <img  onContextMenu="return false;"  src="<?php echo base_url(); ?>assets/images/events/<?php echo $events[2]->image; ?>"
                            alt="">
                    </div>
                    <div class="event-row-line event-row-five">
                        <div class="line"></div>
                    </div>
                    <div class="event-row-text event-row-six">
                        <a href="<?php echo base_url('events/'.$this->encrypt->encode($events[2]->id)); ?>">
                            <h4 style="text-transform: capitalize"><?php echo $events[2]->name; ?></h4>
                        </a>
                        <p><?php echo substr($events[2]->description1,0,200); ?>....</p>
                    </div>

                    <?php } ?>

                    <?php } ?>
                </div>
            </div>
            <div class="events-main-btn">
                <a href="<?php echo base_url('events'); ?>">More Events</a>
            </div>
        </div>
    </section> -->

    <section class="blogs">
        <div class="wrapper">
            <div class="heading">
                <p class="upper-heading">Events</p>
                <h4 class="lower-heading">Events</h4>
            </div>
            <div class="blogs-main">
                <div class="blog-main-row">
                    <!-- <div class="col-lg-8 blog-main-double">
                        <div class="blog-inner-row">
                            <div class="col-blog-2 blog-left-text">
                                <p class="blog-time">Wednesday, March 25, 2015</p>
                                <h4 class="blog-heading">Church urges government to address poverty.</h4>
                                <p class="blog-text">Nerline Valery lived in a tent for four years after the Haiti
                                    earthquake. Now she and her family have a a new home. We can start thinking that the
                                    “best” corporate worship context is characterized by bright stage lights, fog, high
                                    end musical gear.</p>
                                <a href="#" class="blog-link">Read More</a>
                            </div>
                            <div class="col-blog-2 blog-right-image">
                                <img  onContextMenu="return false;"  src="assets/images/pray.jpg" alt="">
                            </div>
                            <div class="col-blog-2 blog-left-image">
                                <img  onContextMenu="return false;"  src="assets/images/pray.jpg" alt="">
                            </div>
                            <div class="col-blog-2 blog-right-text">
                                <p class="blog-time">Wednesday, March 25, 2015</p>
                                <h4 class="blog-heading">Church urges government to address poverty.</h4>
                                <p class="blog-text">Nerline Valery lived in a tent for four years after the Haiti
                                    earthquake. Now she and her family have a a new home. We can start thinking that the
                                    “best” corporate worship context is characterized by bright stage lights, fog, high
                                    end musical gear.</p>
                                <a href="#" class="blog-link">Read More</a>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-5 blog-main-single">
                        <a href="<?php echo base_url('events/past-events'); ?>" class="blog-link">
                            <div class="col-blog-2 blog-img-bottom">
                                <img onContextMenu="return false;"
                                    src="<?php echo base_url(); ?>assets/images/swamy2.jpg" alt="">
                            </div>
                            <div class="blog-single-inner-row">
                                <div class="col-blog-2 blog-text-top">
                                    <!-- <p class="blog-time">Wednesday, March 25, 2015</p> -->
                                    <h4 class="blog-heading">Past Events</h4>
                                    <!-- <p class="blog-text">Nerline Valery lived in a tent for four years after the Haiti
                                    earthquake. Now she and her family have a a new home. We can start thinking that the
                                    “best” corporate worship context is characterized by bright stage lights, fog, high
                                    end
                                    musical gear.</p> -->
                                    <a href="<?php echo base_url('events/past-events'); ?>" class="blog-link-read">View
                                        More</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-5 blog-main-single">
                        <div class="blog-single-inner-row">
                            <a href="<?php echo base_url('events/upcoming-events'); ?>" class="blog-link">
                                <div class="col-blog-2 blog-img-bottom">
                                    <img onContextMenu="return false;"
                                        src="<?php echo base_url(); ?>assets/images/swamy1.jpg" alt="">
                                </div>
                                <div class="col-blog-2 blog-text-top">
                                    <!-- <p class="blog-time">Wednesday, March 25, 2015</p> -->
                                    <h4 class="blog-heading">Upcoming Events
                                    </h4>
                                    <!-- <p class="blog-text">Nerline Valery lived in a tent for four years after the Haiti
                                    earthquake. Now she and her family have a a new home. We can start thinking that the
                                    “best” corporate worship context is characterized by bright stage lights, fog, high
                                    end
                                    musical gear.</p> -->
                                    <a href="<?php echo base_url('events/upcoming-events'); ?>"
                                        class="blog-link-read">View
                                        More</a>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="call-to-action-section">
        <div class="wrapper">
            <div class="row">
                <div class="call-to-action-text">
                    Every rupee makes a difference. Contribute today to create a better tommorow.
                </div>
                <div class="call-to-action-button">
                    <a href="<?php echo base_url('donation'); ?>" class="call-to-action-href">DONATE NOW</a>
                </div>
            </div>
        </div>
    </section>

    <?php
    if (!empty($gallery)) {
        $count = 0;
        ?>
    <section class="gallery">
        <div class="wrapper">
            <div class="heading">
                <p class="upper-heading">Gallery</p>
                <h4 class="lower-heading">Latest From Gallery</h4>
            </div>
        </div>
        <div class="gallery-box">
            <?php foreach ($gallery as $key => $value) { $count = $count+1; ?>
            <a href="<?php echo base_url(); ?>assets/images/home/gallery/<?php echo $value->image;?>"
                class="thumbnail img-thumbnail">
                <img onContextMenu="return false;" alt=".."
                    src="<?php echo base_url(); ?>assets/images/home/gallery/<?php echo $value->image;?>" />
            </a>
            <?php } ?>

        </div>
        <div class="gallery-main-btn">
            <a href="<?php echo base_url('gallery/images'); ?>">View More Images</a>
        </div>

    </section>
    <?php } ?>


    <?php
    if (!empty($video)) {
        ?>
    <section class="video-banner"
        style="background-image: url('<?php echo base_url(); ?>assets/images/home/video/<?php echo $video->thumbnail; ?>')">
        <div class="wrapper video-banner-wrapper">
            <div class="play-btn-div" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                video_url="<?php echo $video->url;?>" id="modalBtn">
                <i class="fas fa-play"></i>
            </div>
        </div>
    </section>
    <?php } ?>

    <!-- <section class="blogs">
        <div class="wrapper">
            <div class="heading">
                <p class="upper-heading">Blogs</p>
                <h4 class="lower-heading">Latest From Blogs</h4>
            </div>
            <div class="blogs-main">
                <div class="blog-main-row">
                    <div class="col-lg-8 blog-main-double">
                        <div class="blog-inner-row">
                            <div class="col-blog-2 blog-left-text">
                                <p class="blog-time">Wednesday, March 25, 2015</p>
                                <h4 class="blog-heading">Church urges government to address poverty.</h4>
                                <p class="blog-text">Nerline Valery lived in a tent for four years after the Haiti
                                    earthquake. Now she and her family have a a new home. We can start thinking that the
                                    “best” corporate worship context is characterized by bright stage lights, fog, high
                                    end musical gear.</p>
                                <a href="#" class="blog-link">Read More</a>
                            </div>
                            <div class="col-blog-2 blog-right-image">
                                <img  onContextMenu="return false;"  src="assets/images/pray.jpg" alt="">
                            </div>
                            <div class="col-blog-2 blog-left-image">
                                <img  onContextMenu="return false;"  src="assets/images/pray.jpg" alt="">
                            </div>
                            <div class="col-blog-2 blog-right-text">
                                <p class="blog-time">Wednesday, March 25, 2015</p>
                                <h4 class="blog-heading">Church urges government to address poverty.</h4>
                                <p class="blog-text">Nerline Valery lived in a tent for four years after the Haiti
                                    earthquake. Now she and her family have a a new home. We can start thinking that the
                                    “best” corporate worship context is characterized by bright stage lights, fog, high
                                    end musical gear.</p>
                                <a href="#" class="blog-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 blog-main-single">
                        <div class="blog-single-inner-row">
                            <div class="col-blog-2 blog-text-top">
                                <p class="blog-time">Wednesday, March 25, 2015</p>
                                <h4 class="blog-heading">Church urges government to address poverty.</h4>
                                <p class="blog-text">Nerline Valery lived in a tent for four years after the Haiti
                                    earthquake. Now she and her family have a a new home. We can start thinking that the
                                    “best” corporate worship context is characterized by bright stage lights, fog, high
                                    end
                                    musical gear.</p>
                                <a href="#" class="blog-link">Read More</a>
                            </div>
                            <div class="col-blog-2 blog-img-bottom">
                                <img  onContextMenu="return false;"  src="<?php echo base_url(); ?>assets/images/pray.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="events">
        <div class="wrapper">
            <div class="heading">
                <p class="upper-heading">Blogs</p>
                <h4 class="lower-heading">Latest From Blogs</h4>
            </div>
            <div class="events-main">
                <div class="events-row">



                    <div class="event-row-image">
                        <img onContextMenu="return false;" src="<?php echo base_url(); ?>assets/images/pray.jpg" alt="">
                    </div>
                    <div class="event-row-line event-row-one">
                        <div class="line"></div>
                    </div>
                    <div class="event-row-text event-row-two">
                        <a href="#">
                            <h4 style="text-transform: capitalize">Church urges government to address poverty.</h4>
                        </a>
                        <p>Nerline Valery lived in a tent for four years after the Haiti
                            earthquake. Now she and her family have a a new home. We can start thinking that the
                            “best” corporate worship context is characterized by bright stage lights, fog, high
                            end
                            musical gear.</p>
                    </div>



                    <div class="event-row-text event-row-four">
                        <a href="#">
                            <h4 style="text-transform: capitalize">Church urges government to address poverty.</h4>
                        </a>
                        <p>Nerline Valery lived in a tent for four years after the Haiti
                            earthquake. Now she and her family have a a new home. We can start thinking that the
                            “best” corporate worship context is characterized by bright stage lights, fog, high
                            end
                            musical gear.</p>
                    </div>
                    <div class="event-row-line event-row-three">
                        <div class="line"></div>
                    </div>
                    <div class="event-row-image">
                        <img onContextMenu="return false;" src="<?php echo base_url(); ?>assets/images/pray.jpg" alt="">
                    </div>



                    <div class="event-row-image">
                        <img onContextMenu="return false;" src="<?php echo base_url(); ?>assets/images/pray.jpg" alt="">
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
                    </div>


                </div>
            </div>
            <div class="events-main-btn">
                <a href="">More Blogs</a>
            </div>
        </div>
    </section>

    <!-- Modal Structure -->
    <?php
    if (!empty($video)) {
        ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered video-modal-dialog">
            <div class="modal-content video-modal-content">
                <div class="modal-header video-modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                    <button type="button" id="closeBtnModal" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body video-modal-body">
                    <iframe id="iframeVdo" src="https://www.youtube.com/embed/<?php echo $video->url;?>"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen style="width: 100%; height:500px"></iframe>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>
    <?php } ?>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
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
    <?php $this->load->view('includes/scroll-top-button') ?>
</body>

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/slick.js"></script>
<script src="<?php echo base_url(); ?>assets/js/tata.js"></script>
<script src="<?php echo base_url(); ?>assets/js/navbar.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>

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

<script type="text/javascript">
$(".regular").slick({
    dots: false,
    infinite: true,
    prevArrow: '<button type="button" data-role="none" class="slick-prev"><i class="fas fa-long-arrow-alt-left"></i></button>',
    nextArrow: '<button type="button" data-role="none" class="slick-next"><i class="fas fa-long-arrow-alt-right"></i></button>',
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false
            }
        },
    ]
});
</script>
<script src="<?php echo base_url(); ?>assets/js/jquery.viewbox.min.js"></script>
<script>
$('.thumbnail').viewbox({
    template: '<div class="viewbox-container"><div class="viewbox-body"><div class="viewbox-header"></div><div class="viewbox-content"></div><div class="viewbox-footer"></div></div></div>',
    loader: '<div class="loader"><div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div></div>',
    setTitle: true,
    margin: 20,
    resizeDuration: 300,
    openDuration: 200,
    closeDuration: 200,
    closeButton: true,
    navButtons: true,
    closeOnSideClick: true,
    nextOnContentClick: true,
    useGestures: true,
    imageExt: ['png', 'jpg', 'jpeg', 'webp', 'gif']
});
</script>

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
$("#subscribeForm").validate({
    rules: {
        name: {
            required: true,
            minlength: 2
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
    },
    messages: {
        name: {
            required: "Please provide a name",
            minlength: "Your name must be at least 2 characters long"
        },
        phone: {
            required: "Please provide a mobile",
            minlength: "Your mobile must be at least 10 characters long",
            maxlength: "Your mobile must be at most 10 characters long",
            number: "Your mobile must be numeric only",
        },
        email: "Please enter a valid email address",
    },
    submitHandler: function(form) {
        $("#subscribeSubmit").prop("disabled", true);
        $("#subscribeSubmit").text("Subscribing...");
        $("#subscribeNameError").html("");
        $("#subscribePhoneError").html("");
        $("#subscribeEmailError").html("");
        $("#subscribeSubscriptionError").html("");
        $.ajax({
            type: "POST",
            url: "<?php echo base_url().'subscribe';?>",
            data: new FormData(form),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            dataType: "json",
            success: function(response) {
                $("#subscribeSubmit").prop("disabled", false);
                $("#subscribeSubmit").text("Subscribe Now");

                if (response.status == 'success') {
                    $("#subscribeForm")[0].reset();
                    $("#subscribeNameError").html("");
                    $("#subscribePhoneError").html("");
                    $("#subscribeEmailError").html("");
                    $("#subscribeSubscriptionError").html("");

                    tata.success('Success',
                        response.msg, {
                            duration: 10000,
                            animate: 'slide',
                        })
                } else {
                    tata.error('Error',
                        response.msg, {
                            duration: 10000,
                            animate: 'slide',
                        })
                }
                if (response.form_errors == true) {
                    $("#subscribeNameError").html(response.name);
                    $("#subscribePhoneError").html(response.phone);
                    $("#subscribeEmailError").html(response.email);
                    $("#subscribeSubscriptionError").html(response.ebook);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                $("#subscribeSubmit").prop("disabled", false);
                $("#subscribeSubmit").text("Subscribe Now");
                if (response.form_errors == true) {
                    $("#subscribeNameError").html(response.name);
                    $("#subscribePhoneError").html(response.phone);
                    $("#subscribeEmailError").html(response.email);
                    $("#subscribeSubscriptionError").html(response.ebook);
                }
                tata.error('Error',
                    response.msg, {
                        duration: 10000,
                        animate: 'slide',
                    })
            }
        });
    }
});

$('input[name="subscribeName"]').on('input', function() {
    $("#subscribeNameError").html("");
})

$('input[name="subscribePhone"]').on('input', function() {
    $("#subscribePhoneError").html("");
})

$('input[name="subscribeEmail"]').on('input', function() {
    $("#subscribeEmailError").html("");
})

$('#modalBtn').on('click', function() {
    $('#iframeVdo').attr('src', 'https://www.youtube.com/embed/' + $(this).attr("video_url"))
})
$('#closeBtnModal').on('click', function() {
    $('#iframeVdo').attr('src', '')
})
</script>

<script>
$('#trust').on('change', function() {
    if ($(this).val() == 'Sai Mayee Trust') {
        $('#certification').css('display', 'block');
        $('#pan_div').css('display', 'block');
        $('#certification_text').html(` It includes 80G Certification. Click the button to know more. <button type="button" class="viewMoreBtn" data-bs-toggle="modal" data-bs-target="#exampleModal2">
  View More
</button>`);
    } else if ($(this).val() == 'Sri Sai Meru Mathi Trust') {
        $('#certification').css('display', 'block');
        $('#pan_div').css('display', 'none');
        $('#certification_text').html(
            ` It does not include 80G Certification. Click the button to know more. <button type="button" class="viewMoreBtn" data-bs-toggle="modal" data-bs-target="#exampleModal3">View More
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
    $('#certification_text').html(` It includes 80G Certification. Click the button to know more. <button type="button" class="viewMoreBtn" data-bs-toggle="modal" data-bs-target="#exampleModal2">
  View More
</button>`);
} else if ($('#trust').val() == 'Sri Sai Meru Mathi Trust') {
    $('#certification').css('display', 'block');
    $('#pan_div').css('display', 'none');
    $('#certification_text').html(
        ` It does not include 80G Certification. Click the button to know more. <button type="button" class="viewMoreBtn" data-bs-toggle="modal" data-bs-target="#exampleModal3">View More
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
        $("#donationSubmit").prop("disabled", true);
        $("#donationSubmit").text("Donating...");
        $("#donationFNameError").html("");
        $("#donationLNameError").html("");
        $("#donationPhoneError").html("");
        $("#donationEmailError").html("");
        $("#donationCityError").html("");
        $("#donationStateError").html("");
        $("#donationPanError").html("");
        $("#donationAmountError").html("");
        $("#donationTrustError").html("");
        $("#donationCheckError").html("");
        $("#donationCaptchaError").html("");
        $.ajax({
            type: "POST",
            url: "<?php echo base_url().'donation-api';?>",
            data: new FormData(form),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            dataType: "json",
            success: function(response) {
                $("#donationSubmit").prop("disabled", false);
                $("#donationSubmit").text("Donate Now");

                if (response.status == 'success') {
                    $("#donationForm")[0].reset();
                    $('#certification').css('display', 'none');
                    $('#pan_div').css('display', 'none');
                    $("#donationFNameError").html("");
                    $("#donationLNameError").html("");
                    $("#donationPhoneError").html("");
                    $("#donationEmailError").html("");
                    $("#donationCityError").html("");
                    $("#donationStateError").html("");
                    $("#donationPanError").html("");
                    $("#donationAmountError").html("");
                    $("#donationTrustError").html("");
                    $("#donationCheckError").html("");
                    $("#donationCaptchaError").html("");

                    tata.success('Success',
                        response.msg, {
                            duration: 10000,
                            animate: 'slide',
                        })
                    $('.BDC_ReloadIcon').click();
                    window.location.replace('<?php echo base_url(); ?>' + response.url);
                } else {
                    tata.error('Error',
                        response.msg, {
                            duration: 10000,
                            animate: 'slide',
                        })
                }
                if (response.form_errors == true) {
                    $('.BDC_ReloadIcon').click();
                    $("#donationNameError").html(response.name);
                    $("#donationPhoneError").html(response.phone);
                    $("#donationEmailError").html(response.email);
                    $("#donationCityError").html(response.city);
                    $("#donationStateError").html(response.state);
                    $("#donationPanError").html(response.pan);
                    $("#donationAmountError").html(response.amount);
                    $("#donationTrustError").html(response.trust);
                    $("#donationCheckError").html(response.check);
                    $("#donationCaptchaError").html(response.captcha);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                $("#donationSubmit").prop("disabled", false);
                $("#donationSubmit").text("Donate Now");
                $('.BDC_ReloadIcon').click();
                if (response.form_errors == true) {
                    $("#donationNameError").html(response.name);
                    $("#donationPhoneError").html(response.phone);
                    $("#donationEmailError").html(response.email);
                    $("#donationCityError").html(response.city);
                    $("#donationStateError").html(response.state);
                    $("#donationPanError").html(response.pan);
                    $("#donationAmountError").html(response.amount);
                    $("#donationTrustError").html(response.trust);
                    $("#donationCheckError").html(response.check);
                    $("#donationCaptchaError").html(response.captcha);
                }
                tata.error('Error',
                    response.msg, {
                        duration: 10000,
                        animate: 'slide',
                    })
            }
        });
    }
});
</script>

</html>