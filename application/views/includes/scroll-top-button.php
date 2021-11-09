<div style="position: relative;width:100%;">
    <button id="scrollTopBtn" onclick="topFunction()" style="display:none;"><i class="fas fa-chevron-up"></i></button>
</div>

<style>
#scrollTopBtn{
    position:fixed;
    font-size:30px;
    display:grid;
    place-items:center;
    color:#ffaa49;
    bottom:20px;
    right:20px;
    z-index:100000000;
    background:#3c3489;
    width:50px;
    height:50px;
    border-radius:25px;
    outline:none;
    border:none;
    box-shadow:1px 1px 1px 1px #818181;
    transition: 0.3s all linear;
}

#scrollTopBtn:hover{
    transform: scale(1.1, 1.1);
}
</style>

<script>
    //Get the button:
mybutton = document.getElementById("scrollTopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 550 || document.documentElement.scrollTop > 550) {
    mybutton.style.display = "grid";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>