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
    @keyframes ldio-v1j3va1wc2g {
        0% {
            transform: rotate(0)
        }

        100% {
            transform: rotate(360deg)
        }
    }

    .ldio-v1j3va1wc2g div {
        box-sizing: border-box !important
    }

    .ldio-v1j3va1wc2g>div {
        position: absolute;
        width: 144px;
        height: 144px;
        top: 28px;
        left: 28px;
        border-radius: 50%;
        border: 16px solid #000;
        border-color: #e15b64 transparent #e15b64 transparent;
        animation: ldio-v1j3va1wc2g 1s linear infinite;
    }

    .ldio-v1j3va1wc2g>div:nth-child(2),
    .ldio-v1j3va1wc2g>div:nth-child(4) {
        width: 108px;
        height: 108px;
        top: 46px;
        left: 46px;
        animation: ldio-v1j3va1wc2g 1s linear infinite reverse;
    }

    .ldio-v1j3va1wc2g>div:nth-child(2) {
        border-color: transparent #f8b26a transparent #f8b26a
    }

    .ldio-v1j3va1wc2g>div:nth-child(3) {
        border-color: transparent
    }

    .ldio-v1j3va1wc2g>div:nth-child(3) div {
        position: absolute;
        width: 100%;
        height: 100%;
        transform: rotate(45deg);
    }

    .ldio-v1j3va1wc2g>div:nth-child(3) div:before,
    .ldio-v1j3va1wc2g>div:nth-child(3) div:after {
        content: "";
        display: block;
        position: absolute;
        width: 16px;
        height: 16px;
        top: -16px;
        left: 48px;
        background: #e15b64;
        border-radius: 50%;
        box-shadow: 0 128px 0 0 #e15b64;
    }

    .ldio-v1j3va1wc2g>div:nth-child(3) div:after {
        left: -16px;
        top: 48px;
        box-shadow: 128px 0 0 0 #e15b64;
    }

    .ldio-v1j3va1wc2g>div:nth-child(4) {
        border-color: transparent;
    }

    .ldio-v1j3va1wc2g>div:nth-child(4) div {
        position: absolute;
        width: 100%;
        height: 100%;
        transform: rotate(45deg);
    }

    .ldio-v1j3va1wc2g>div:nth-child(4) div:before,
    .ldio-v1j3va1wc2g>div:nth-child(4) div:after {
        content: "";
        display: block;
        position: absolute;
        width: 16px;
        height: 16px;
        top: -16px;
        left: 30px;
        background: #f8b26a;
        border-radius: 50%;
        box-shadow: 0 92px 0 0 #f8b26a;
    }

    .ldio-v1j3va1wc2g>div:nth-child(4) div:after {
        left: -16px;
        top: 30px;
        box-shadow: 92px 0 0 0 #f8b26a;
    }

    .loadingio-spinner-double-ring-fcuz651mtne {
        width: 200px;
        height: 200px;
        display: inline-block;
        overflow: hidden;
        background: #f4e5bc;
    }

    .ldio-v1j3va1wc2g {
        width: 100%;
        height: 100%;
        position: relative;
        transform: translateZ(0) scale(1);
        backface-visibility: hidden;
        transform-origin: 0 0;
        /* see note above */
    }

    .ldio-v1j3va1wc2g div {
        box-sizing: content-box;
    }
    </style>
</head>

<body onload="setPrice()">

    <section class="payment">
        <div class="main-div-payment">
            <div class="img-div">
                <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" class="logo-img">
            </div>


            <div class="loader" id="loader">
                <div class="loadingio-spinner-double-ring-fcuz651mtne">
                    <div class="ldio-v1j3va1wc2g">
                        <div></div>
                        <div></div>
                        <div>
                            <div>
                            </div>
                            <div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-div" id="note_div" style="display: none">
                <p><strong>Note:</strong> Please do not refresh the page while we are processing your payment.</p>
            </div>

            <div class="success-div" id="success_div" style="display: none">
                <img src="<?php echo base_url(); ?>assets/images/tick.gif" alt=""><br>
                <p>Payment Successfull!</p>
                <a href="<?php echo base_url(); ?>">Continue to Home Page</a>
            </div>
            <div class="cancel-div" id="cancel_div" style="display: none">
                <p>Payment Cancelled!</p>
                <button id="pay_again">Pay Again</button>
                <a href="<?php echo base_url(); ?>">Continue to Home Page</a>
            </div>

        </div>

    </section>

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

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options;

function setPrice(e) {
    options = {
        "key": "<?php echo $key_id; ?>", // Enter the Key ID generated from the Dashboard
        "amount": parseInt(<?php echo $paymentDetails->amount; ?>) *
            100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        "currency": "INR",
        "name": "Hrudayaspandana",
        "description": "Test Transaction",
        "image": "<?php echo base_url() ?>assets/images/logo.png",
        //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
        "handler": function(response) {
            pay_id = response.razorpay_payment_id;
            updatePayID(pay_id);
        },

        "prefill": {
            "name": "<?php echo $paymentDetails->fname; ?> <?php echo $paymentDetails->lname; ?>",
            "email": "<?php echo $paymentDetails->email; ?>",
            "contact": "+91<?php echo $paymentDetails->phone; ?>"
        },
        "notes": {
            "address": "Razorpay Corporate Office"
        },
        "theme": {
            "color": "#ffaa49"
        },
        "modal": {
            "ondismiss": function() {
                $('#loader').css("display",'none');
                $('#note_div').css("display",'none');
                $('#cancel_div').css("display",'block');
                
            }
        }
    };

    var rzp1 = new Razorpay(options);
    rzp1.on('payment.failed', function(response) {
        console.log(response);
    });
    rzp1.open();

}

const updatePayID = (pay_id) => {
    $('#loader').css("display",'grid');
    $('#note_div').css("display",'block');
    let formdata = new FormData();
    formdata.append('payment_id', pay_id);
    $.ajax({
        type: "POST",
        url: "<?php echo base_url().$payment_update_link;?>",
        data: formdata,
        processData: false,
        contentType: false,
        cache: false,
        async: true,
        dataType: "json",
        success: function(response) {

            if (response.status == 'success') {

                tata.success('Success',
                    response.msg, {
                        duration: 10000,
                        animate: 'slide',
                    })
            $('#loader').css("display",'none');
            $('#note_div').css("display",'none');
            $('#success_div').css("display",'block');
            } else {
                tata.error('Error',
                    response.msg, {
                        duration: 10000,
                        animate: 'slide',
                    })
            $('#loader').css("display",'none');
            $('#note_div').css("display",'none');
            $('#cancel_div').css("display",'block');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            tata.error('Error',
                response.msg, {
                    duration: 10000,
                    animate: 'slide',
                })
        }
    });
}

$('#pay_again').on('click', function () {
    setPrice();
    $('#loader').css("display",'grid');
    $('#note_div').css("display",'none');
    $('#cancel_div').css("display",'none');
    $('#success_div').css("display",'none');
})
</script>




</html>