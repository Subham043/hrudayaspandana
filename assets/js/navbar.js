
$('#nav_menu_btn').click(function(){

    if($('#nav_menu_btn').attr("menu")=='close'){
        $('#nav_menu').css("display", "block");
        $("#nav_menu").animate({height: '100%'});
        $('#nav_menu_btn').attr("menu","open");
    }else{
        $('#nav_menu_btn').attr("menu","close");
        $("#nav_menu").animate({height: '0'});
        $('#nav_menu').css("display", "none");
    }

});

document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener('scroll', function() {
        if (window.scrollY > 550) {
            document.getElementById('navbar').classList.add('fixed-top');
            // add padding top to show content behind navbar
            navbar_height = document.querySelector('#navbar').offsetHeight;
            document.body.style.paddingTop = navbar_height + 'px';
        } else {
            document.getElementById('navbar').classList.remove('fixed-top');
            // remove padding top from body
            document.body.style.paddingTop = '0';
        }
    });
});