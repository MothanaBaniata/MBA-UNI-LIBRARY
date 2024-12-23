<!-- Scripts -->

<!-- Bootstrap JS (for dropdown functionality) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('user-assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('user-assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('user-assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('user-assets/js/owl-carousel.js') }}"></script>
<script src="{{ asset('user-assets/js/lightbox.js') }}"></script>
<script src="{{ asset('user-assets/js/tabs.js') }}"></script>
<script src="{{ asset('user-assets/js/video.js') }}"></script>
<script src="{{ asset('user-assets/js/slick-slider.js') }}"></script>
<script src="{{ asset('user-assets/js/custom.js') }}"></script>
<script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
        var
            direction = section.replace(/#/, ''),
            reqSection = $('.section').filter('[data-section="' + direction + '"]'),
            reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
            $('body, html').animate({
                    scrollTop: reqSectionPos
                },
                800);
        } else {
            $('body, html').scrollTop(reqSectionPos);
        }

    };

    var checkSection = function checkSection() {
        $('.section').each(function() {
            var
                $this = $(this),
                topEdge = $this.offset().top - 80,
                bottomEdge = topEdge + $this.height(),
                wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
                var
                    currentId = $this.data('section'),
                    reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                reqLink.closest('li').addClass('active').
                siblings().removeClass('active');
            }
        });
    };

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
        e.preventDefault();
        showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
        checkSection();
    });
</script>

<!-- Scroll up button -->
<script>
    var scrollUpBtn = document.getElementById("scrollUpBtn");

    window.onscroll = function() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            scrollUpBtn.style.display = "block";
        } else {
            scrollUpBtn.style.display = "none";
        }
    };

    scrollUpBtn.onclick = function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    };
</script>
