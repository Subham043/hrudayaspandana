<style>
#page_loader {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 9999999;
}

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
<section class="payment" id="page_loader">
    <div class="main-div-payment">
        <div class="img-div">
            <img  onContextMenu="return false;"  src="<?php echo base_url(); ?>assets/images/logo.png" alt="" class="logo-img">
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

    </div>

</section>

<script>

document.onreadystatechange = function() {
    if (document.readyState !== "complete") {
        document.querySelector("body").style.visibility = "hidden";
        document.querySelector("body").style.position = "relative";
        document.querySelector("body").style.top = 0;
        document.querySelector("body").style.left = 0;
        document.querySelector("#page_loader").style.visibility = "visible";
    } else {
        document.querySelector("#page_loader").style.display = "none";
        document.querySelector("body").style.visibility = "visible";
        document.querySelector("body").style.position = "static";
    }
};
</script>