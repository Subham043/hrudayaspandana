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
    <link href="<?php echo base_url(); ?>assets/css/jquery.flowchart.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <!-- Captcha CSS -->
    <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />
    <style>
    .about .about-page-row {
        justify-content: center;
    }

    .about .about-page-row .about-page-col {
        margin-bottom: 0px;
    }

    .about-page-col {
        overflow-y: hidden;
    }

    .scroll-div::-webkit-scrollbar {
        width: 11px;
    }

    .scroll-div {
        scrollbar-width: thin;
        scrollbar-color: var(--thumbBG) var(--scrollbarBG);
    }

    .scroll-div::-webkit-scrollbar-track {
        background: var(--scrollbarBG);
    }

    .scroll-div::-webkit-scrollbar-thumb {
        background-color: var(--thumbBG);
        border-radius: 6px;
        border: 3px solid var(--scrollbarBG);
    }

    .testimonial-main-div {
        width: 100%;
        margin-top: 50px;
    }

    .testimonial-video-main-div {
        width: 100%;
    }

    .testimonial-video-hover-div {
        width: 95% !important;
        height: 300px;
        background: white;
        margin-left: auto;
        margin-right: auto;
        border: 3px solid #ffaa49;
        border-radius: 5px;
        border-top-right-radius: 30px;
        border-bottom-left-radius: 30px;
    }

    .testimonial-hover-div {
        width: 95% !important;
        background: white;
        margin-left: auto;
        margin-right: auto;
        border: 3px solid #ffaa49;
        border-radius: 5px;
        border-top-right-radius: 30px;
        border-bottom-left-radius: 30px;
        position: relative;
        padding: 10px;
    }

    .testimonial-div-image {
        width: 100px;
        height: 100px;
        border: 3px solid #ffaa49;
        border-radius: 50%;
        margin-top: -60px;
        margin-left: auto;
        margin-right: auto;
    }

    .testimonial-div-image img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }

    .testimonial-div-quote {
        width: 100%;
        height: 220px;
        overflow: hidden;
    }

    .testimonial-div-quote .scroll-div {
        overflow-y: auto;
        width: 100%;
        height: 100%;
    }

    .testimonial-div-quote h4 {
        text-align: center;
        margin-top: 15px;
        color: #c53f93;
    }

    .testimonial-div-quote p {
        text-align: center;
    }

    .owl-prev,
    .owl-next {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        color: #fff !important;
        background: #3c3489 !important;
        outline: none;
        border: none;
        box-shadow: 1px 1px 1px 1px #818181;
        transition: all 0.3s ease-in-out;
        opacity: 0.3;
    }

    .owl-prev:hover,
    .owl-next:hover {
        opacity: 1;
    }

    .owl-nav {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }


    .flow-scroll-div {
        width: 100%;
        height: 600px;
    }

    #flowchart {
        width: 100%;
        height: 100%;
        background-color: #fafafa;
        margin-top: 45px;
        box-shadow: 4px 4px 5px 0px #818181;
        border-radius: 5px;
    }

    .flowchart-operator {
        min-width: 147px !important;
        width: auto !important;
    }

    @media screen and (max-width:600px) {
        .team-col {
            width: 100%;
        }

        .flow-scroll-div {
            width: 100%;
            height: 650px;
            overflow-y: hidden;
            overflow-x: auto;
        }

        #flowchart {
            width: 1200px;
        }
    }
    </style>
</head>

<body>
    <?php $this->load->view('includes/loader') ?>
    <?php $this->load->view('includes/header') ?>

    <?php $this->load->view('includes/hero') ?>

    <section class="about">
        <div class="wrapper">
            <div class="about-page-row">
                <div class="col-lg-12 col-md-12 col-sm-12 about-page-col team-col">
                    <div class="heading">
                        <p class="upper-heading">Team</p>
                        <h4 class="lower-heading">Leadership Team</h4>
                        <div class="flow-scroll-div">

                            <div class="demo" id="flowchart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 about-page-col">
                    <div class="text">
                        <div class="owl-carousel">
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/leader/leader1.jpg"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>Smt Saira Harishankar</h4>
                                            <div class="scroll-div">
                                                <p>Smt Saira Harishankar (a trustee, Sai Mayee Trust) has done BSc (PCM) and PG in HR. Presently a happy Homemaker and she is a Sai Counselor and Healer to many in need</p>
                                                <p></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/leader/leader2.jpg"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>PN Sreenivas</h4>
                                            <div class="scroll-div">
                                                <p>PN Sreenivas (a trustee, Sai Mayee Trust) has done his masters in tool design from CITD Hyderabad and has  25 years of work experience. Presently working in IBM as a Program Manager.
</p>
                                                <p></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/leader/leader3.png"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>Smt Gaytri Patil</h4>
                                            <div class="scroll-div">
                                                <p>Smt Gaytri Patil (an advisor, Hrudaya Spandana) did BSc in child Psychology and masters in Business Administration. She is an entrepreneur and setup preschools.
</p>
                                                <p></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/leader/leader4.jpg"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>Itta Raghunandan</h4>
                                            <div class="scroll-div">
                                                <p>Itta Raghunandan (a trustee, Sri Sai Meru Mathi Trust) studied in Satya Sai Institue of higher Learning, Prasanthi Nilayam. He is a practicing Chartered Accountant with 25+ years of experience.
</p>
                                                <p></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/leader/leader5.jpeg"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>Jagadeesh Kotturshettar</h4>
                                            <div class="scroll-div">
                                                <p>Jagadeesh Kotturshettar (a trustee, Sri Sai Meru Mathi Trust) did his post graduation in  digital Electronics and later completed LLB. Been in the semiconductor industry for 25+ years. 
</p>
                                                <p></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/leader/leader6.jpeg"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>Smitha Sailesh</h4>
                                            <div class="scroll-div">
                                                <p>Smitha Sailesh (an advisor, Hrudaya Spandana) is a Chartered accountant with 23 years of practice experience specialized in the field of audits and taxation
</p>
                                                <p></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/leader/leader7.png"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>Purnima Kurnool</h4>
                                            <div class="scroll-div">
                                                <p>Purnima Kurnool (Advisor, Hrudaya Spandana) done her MS in Molecular Biotechnology in the USA. She worked as a Research Associate in the University of Michigan. Currently, she is a practitioner of Sai Vibrionics.
</p>
                                                <p></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/leader/leader8.jpg"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>Dr Batchu Suresh</h4>
                                            <div class="scroll-div">
                                                <p>Dr Batchu Suresh (an advisor, Hrudaya Spandana) did his Phd in Gas Turbine thermal field. He  is currently working as a Group Director in GTRE, DRDO.
</p>
                                                <p></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/leader/leader9.jpg"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>M Venkateshwarlu</h4>
                                            <div class="scroll-div">
                                                <p>M Venkateshwarlu (an advisor, Hrudaya Spandana), holds master’s degree in mechanical engineering from NIT, Warangal. He is currently working as a senior scientist at GTRE, DRDO.
</p>
                                                <p></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/leader/leader10.jpg"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>Venu Madhav</h4>
                                            <div class="scroll-div">
                                                <p>Venu Madhav (an advisor, Hrudaya Spandana) did Bachelors of Science from Satya Sai Institue of higher Learning, Prasanthi Nilayam. Did MS from the USA. Currently working with “Nokia networks” as a Senior Production Manager. 
</p>
                                                <p></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/leader/leader11.jpg"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>AVSS Prasad</h4>
                                            <div class="scroll-div">
                                                <p>AVSS Prasad (a trustee, Sri Sai Meru Mathi Trust), completed his Masters in computer science. Been in the semiconductor industry for 30+ years.
</p>
                                                <p></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/leader/leader12.png"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>A Nagasree</h4>
                                            <div class="scroll-div">
                                                <p>A Nagasree (an advisor, Hrudaya Spandana) is a happy Home maker and a sincere believer in doing Seva. 
</p>
                                                <p></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/leader/leader13.jpeg"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>Sailesh K</h4>
                                            <div class="scroll-div">
                                                <p>Sailesh K (Chief Financial Advisor, Hrudaya Spandana) is a chartered Accountant in service with 25+ years of experience. Currently working as a branch manager in ICICI.
</p>
                                                <p></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/leader/leader14.png"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>PVB Sivakumar</h4>
                                            <div class="scroll-div">
                                                <p>PVB Sivakumar (Trust Development Specialist, Hrudaya Spandana) has done graduation in Arts and diploma in business management. He worked as a Zonal sales manager in a reputed company. 
</p>
                                                <p></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/leader/leader15.png"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>V Vijaya</h4>
                                            <div class="scroll-div">
                                                <p>V Vijaya (an advisor, Hrudaya Spandana) is a happy Home maker and a sincere believer in doing Seva. 
</p>
                                                <p></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-main-div">
                                    <div class="testimonial-hover-div">
                                        <div class="testimonial-div-image">
                                            <img onContextMenu="return false;"
                                                src="<?php echo base_url(); ?>assets/images/leader/leader16.png"
                                                alt="">
                                        </div>
                                        <div class="testimonial-div-quote">
                                            <h4>Srinivas Sureban</h4>
                                            <div class="scroll-div">
                                                <p>Srinivas Sureban (an advisor, Hrudaya Spandana) completed his masters in Electronics and is having 25 years of experience in the Semiconductor industry. Presently working as a senior manager in Broadcom. 
</p>
                                                <p></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php $this->load->view('includes/footer') ?>
    <?php $this->load->view('includes/scroll-top-button') ?>
</body>

<!-- <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
    integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/tata.js"></script>
<script src="<?php echo base_url(); ?>assets/js/navbar.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.flowchart.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1024: {
                items: 3,
                nav: true,
                loop: true
            }
        }
    });

    $('.owl-prev').html('<i class="fas fa-long-arrow-alt-left"></i>')
    $('.owl-next').html('<i class="fas fa-long-arrow-alt-right"></i>')
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
$(document).ready(function() {
    // $("body").on("contextmenu", function(e) {
    //     tata.error('Error', 'right-click is disabled!', {
    //         duration: 10000,
    //         animate: 'slide',
    //     })
    //     return false;
    // });

    var data = {
        operators: {
            operator1: {
                top: 250,
                left: 20,
                properties: {
                    title: 'HrudayaSpandana',
                    inputs: {},
                    outputs: {
                        output_1: {
                            label: '',
                        },
                        output_2: {
                            label: '',
                        },
                        output_3: {
                            label: '',
                        },
                        output_4: {
                            label: '',
                        },
                        output_5: {
                            label: '',
                        },
                    }
                }
            },
            operator2: {
                top: 20,
                left: 300,
                properties: {
                    title: 'Trust Development Specialist',
                    inputs: {
                        input_1: {
                            label: '',
                        },
                    },
                    outputs: {
                        output_1: {
                            label: '',
                        },
                    }
                }
            },
            operator3: {
                top: 140,
                left: 360,
                properties: {
                    title: 'Chief Financial Advisor',
                    inputs: {
                        input_1: {
                            label: '',
                        },
                    },
                    outputs: {
                        output_1: {
                            label: '',
                        },
                    }
                }
            },
            operator4: {
                top: 240,
                left: 360,
                properties: {
                    title: 'Advisory Committee',
                    inputs: {
                        input_1: {
                            label: '',
                        },
                    },
                    outputs: {
                        output_1: {
                            label: '',
                        },
                    }
                }
            },
            operator5: {
                top: 360,
                left: 360,
                properties: {
                    title: 'Sai Mayee Trust',
                    inputs: {
                        input_1: {
                            label: '',
                        },
                    },
                    outputs: {
                        output_1: {
                            label: '',
                        },
                    }
                }
            },
            operator6: {
                top: 480,
                left: 300,
                properties: {
                    title: 'Sri Sai Meru Mathi Trust',
                    inputs: {
                        input_1: {
                            label: '',
                        },
                    },
                    outputs: {
                        output_1: {
                            label: '',
                        },
                    }
                }
            },
            operator7: {
                top: 20,
                left: 760,
                properties: {
                    title: 'Team',
                    inputs: {
                        input_1: {
                            label: 'Sivakumar',
                        },
                    },
                    outputs: {}
                }
            },
            operator8: {
                top: 120,
                left: 760,
                properties: {
                    title: 'Team',
                    inputs: {
                        input_1: {
                            label: 'Sailesh',
                        },
                    },
                    outputs: {}
                }
            },
            operator9: {
                top: 20,
                left: 960,
                properties: {
                    title: 'Team',
                    inputs: {
                        input_1: {
                            label: 'Gayatri D Patil',
                        },
                        input_2: {
                            label: 'M Venkateswarulu',
                        },
                        input_3: {
                            label: 'Batchu Suresh',
                        },
                        input_4: {
                            label: 'Smitha Sailesh',
                        },
                        input_5: {
                            label: 'Purnima Kurnool',
                        },
                        input_6: {
                            label: 'Vijaya V',
                        },
                        input_7: {
                            label: 'Shrinivas Sureban',
                        },
                        input_8: {
                            label: 'Venu Madhav P',
                        },
                        input_9: {
                            label: 'A Nagasree',
                        },
                    },
                    outputs: {}
                }
            },
            operator10: {
                top: 250,
                left: 760,
                properties: {
                    title: 'Team',
                    inputs: {
                        input_1: {
                            label: 'Saira H',
                        },
                        input_2: {
                            label: 'PNS Sreenivas',
                        },
                    },
                    outputs: {}
                }
            },
            operator11: {
                top: 420,
                left: 760,
                properties: {
                    title: 'Team',
                    inputs: {
                        input_1: {
                            label: 'Itta Raghunandan',
                        },
                        input_2: {
                            label: 'Jagadish K',
                        },
                        input_3: {
                            label: 'Prasad AVSS',
                        },
                    },
                    outputs: {}
                }
            },
        },
        links: {
            link_1: {
                fromOperator: 'operator1',
                fromConnector: 'output_1',
                toOperator: 'operator2',
                toConnector: 'input_1',
            },
            link_2: {
                fromOperator: 'operator1',
                fromConnector: 'output_2',
                toOperator: 'operator3',
                toConnector: 'input_1',
            },
            link_3: {
                fromOperator: 'operator1',
                fromConnector: 'output_3',
                toOperator: 'operator4',
                toConnector: 'input_1',
            },
            link_4: {
                fromOperator: 'operator1',
                fromConnector: 'output_4',
                toOperator: 'operator5',
                toConnector: 'input_1',
            },
            link_5: {
                fromOperator: 'operator2',
                fromConnector: 'output_1',
                toOperator: 'operator7',
                toConnector: 'input_1',
            },
            link_6: {
                fromOperator: 'operator3',
                fromConnector: 'output_1',
                toOperator: 'operator8',
                toConnector: 'input_1',
            },
            link_7: {
                fromOperator: 'operator4',
                fromConnector: 'output_1',
                toOperator: 'operator9',
                toConnector: 'input_5',
            },
            link_8: {
                fromOperator: 'operator5',
                fromConnector: 'output_1',
                toOperator: 'operator10',
                toConnector: 'input_1',
            },
            link_9: {
                fromOperator: 'operator6',
                fromConnector: 'output_1',
                toOperator: 'operator11',
                toConnector: 'input_1',
            },
            link_10: {
                fromOperator: 'operator1',
                fromConnector: 'output_5',
                toOperator: 'operator6',
                toConnector: 'input_1',
            },
        }
    };
    $('#flowchart').flowchart({
        data: data
    });
});
</script>

</html>