<script>
jQuery(document).ready(function($) {
	var headerHeight = $('header.site-header').height();
	$(window).scroll(function () {
        if ($(window).scrollTop() > headerHeight) {
            $('header.site-header').addClass('shrink');
        }
        else{
            $('header.site-header').removeClass('shrink');
        }
    });
});
</script>

<?php
}

add_action ('wp_footer', 'vr_shrink_nav', 1);
function vr_shrink_nav() {
?>

<script>
jQuery(document).ready(function($) {
    var headerHeight = $('header.site-header').height();
    $(window).scroll(function () {
        if ($(window).scrollTop() > headerHeight) {
            $('nav').addClass('shrink');
        }
        else{
            $('nav').removeClass('shrink');
        }
    });
});
</script>

<?php
}

add_action ('wp_footer', 'vr_shrink_body', 1);
function vr_shrink_body() {
?>

<script>
jQuery(document).ready(function($) {
    var headerHeight = $('header.site-header').height();
    $(window).scroll(function () {
        if ($(window).scrollTop() > headerHeight) {
            $('body').addClass('shrink');
        }
        else{
            $('body').removeClass('shrink');
        }
    });
});
</script>

<script>
header.site-header.shrink {
    display: none;
    -webkit-transform: none;
}
nav.shrink{
    top: 0px;
    transition: transform 0.15s ease-out;
    -webkit-transform: translate(0,-36px);
    -webkit-transition: -webkit-transform 0.15s ease-out;
}
body.shrink{
    transition: padding-top 0.15s ease-out;*/
    -webkit-transform: none;
}
</script>