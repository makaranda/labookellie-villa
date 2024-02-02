
@stack('js')
<script src="{{ URL::to('') }}/resources/vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="{{ URL::to('') }}/resources/vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="{{ URL::to('') }}/resources/vendors/magnefic-popup/jquery.magnific-popup.min.js"></script>
<script src="{{ URL::to('') }}/resources/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="{{ URL::to('') }}/resources/vendors/easing.min.js"></script>
<script src="{{ URL::to('') }}/resources/vendors/superfish.min.js"></script>
<script src="{{ URL::to('') }}/resources/vendors/nice-select/jquery.nice-select.min.js"></script>
<script src="{{ URL::to('') }}/resources/vendors/jquery.ajaxchimp.min.js"></script>
<script src="{{ URL::to('') }}/resources/vendors/mail-script.js"></script>
<script src="{{ URL::to('') }}/resources/js/main.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
$(document).ready(function(){
    $(window).scroll(function() {
        if ($(this).scrollTop()) {
            $('#toTop').fadeIn();
            $('body').css({'transform':'none'});
        } else {
            $('#toTop').fadeOut();
            $('body').css({'transform':'none'});
        }
    });

    $("#toTop").click(function () {
        $("html, body").animate({scrollTop: 0}, 3000);
    });

// var $div = $('<div />').appendTo('body');
// $div.attr('id', 'toTop').html('<i class="fa fa-arrow-up"></i>').css({'position':'fixed'});
 });
</script>


