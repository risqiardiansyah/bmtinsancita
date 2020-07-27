<?php
use Illuminate\Support\Facades\DB;
use App\Nav_model;
$site                 = DB::table('konfigurasi')->first();
// Produk
$myproduk             = new Nav_model();
$nav_kategori_produk  = $myproduk->nav_produk();
// Nav profil
$myprofil             = new Nav_model();
$nav_profil           = $myproduk->nav_profil();
?>
<section class="footer-widget-wrapper">
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">{!! $site->deskripsi!!}</p>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; {{date('Y')}} All Rights Reserved by
                        <a href="#"> {{$site->namaweb}}</a>.
                    </p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                      <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                      <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
                    </ul>
                  </div>
            </div>
        </div>
    </footer>
</section>
</div> <!-- .st-content-inner -->
</div> <!-- .st-content -->
</div> <!-- .st-pusher -->


<!-- ======== OFFCANVAS MENU ========= -->
<div class="offcanvas-menu offcanvas-effect visible-xs">
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;
    </button>
    <h3>Sidebar Menu</h3>
    <div>
        <div>

            <ul>
                <li class="<?php if($aktif == 'nameweb'){echo " active";} ?>"><a href="{{ asset('/') }}">Home</a>
                </li>
                <li class="dropdown <?php if($aktif == 'read'){echo " active";} ?>"><a href="#">Tentang Kami <b
                            class="caret"></b></a>
                    <!-- submenu-wrapper -->
                    <div class="submenu-wrapper submenu-wrapper-topbottom">
                        <div class="submenu-inner  submenu-inner-topbottom">
                            <ul class="dropdown-menu">
                                @foreach($nav_profil as $nav_profil)
                                <li><a
                                        href="{{ asset('berita/read/'.$nav_profil->slug_berita) }}"><?=$nav_profil->judul_berita ?></a>
                                </li>
                                @endforeach
                            </ul>
                        </div><!-- /.submenu-inner -->
                    </div> <!-- /.submenu-wrapper -->
                </li>

                <li class="dropdown <?php if($aktif == 'produk'){echo " active";} ?>"><a
                        href="{{ asset('produk') }}">Produk <b class="caret"></b></a>
                    <!-- submenu-wrapper -->
                    <div class="submenu-wrapper submenu-wrapper-topbottom">
                        <div class="submenu-inner  submenu-inner-topbottom">
                            <ul class="dropdown-menu">
                                @foreach($nav_kategori_produk as $nkp)
                                <li><a
                                        href="{{ asset('produk/kategori/'.$nkp->slug_kategori_produk) }}"><?=$nkp->nama_kategori_produk ?></a>
                                </li>
                                @endforeach
                                <li><a href="#">
                                        <hr style="margin: 0; padding: 0;"></a></li>
                                <li><a href="{{ asset('produk') }}">Semua Produk</a></li>
                            </ul>
                        </div><!-- /.submenu-inner -->
                    </div> <!-- /.submenu-wrapper -->
                </li>
                <li class="<?php if($aktif == 'video'){echo " active";} ?>"><a href="{{ asset('video') }}">Program</a>
                </li>
                <li class="<?php if($aktif == 'laporan'){echo " active";} ?>"><a
                        href="{{ asset('download') }}">Laporan</a></li>
                <li class="<?php if($aktif == 'kontak'){echo " active";} ?>"><a href="{{ asset('kontak') }}">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</div><!-- .offcanvas-menu -->
</div><!-- /st-container -->

<!-- Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- jQuery -->
<script src="{{ asset("public/frontend/html") }}/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset("public/frontend/html") }}/js/bootstrap.min.js"></script>
<!-- wow.min.js -->
<script src="{{ asset("public/frontend/html") }}/js/wow.min.js"></script>
<!-- owl-carousel -->
<script src="{{ asset("public/frontend/html") }}/owl-carousel/owl.carousel.min.js"></script>
<!-- smoothscroll -->
<script src="{{ asset("public/frontend/html") }}/js/smoothscroll.js"></script>
<!-- Offcanvas Menu -->
<script src="{{ asset("public/frontend/html") }}/js/hippo-offcanvas.js"></script>
<!-- easypiechart -->
<script src="{{ asset("public/frontend/html") }}/js/jquery.easypiechart.min.js"></script>
<!-- Scrolling Nav JavaScript -->
<script src="{{ asset("public/frontend/html") }}/js/jquery.easing.min.js"></script>
<!-- Magnific-popup -->
<script src="{{ asset("public/frontend/html") }}/js/jquery.magnific-popup.min.js"></script>
<!-- Shuffle.min js -->
<script src="{{ asset("public/frontend/html") }}/js/jquery.shuffle.min.js"></script>
<!-- Custom Script -->
<script src="{{ asset("public/frontend/html") }}/js/scripts.js"></script>
<script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>
<script>
    $(document).ready(function () {
        $('input[type="submit"]').attr('disabled', true);
        $('input[type="text"]').on('keyup', function () {
            var text_nama_lengkap = $('input[name="nama_lengkap"]').val();
            var text_no_ktp = $('input[name="no_ktp"]').val();
            var text_no_kk = $('input[name="no_kk"]').val();
            var text_no_whatsapp = $('input[name="no_whatsapp"]').val();
            var text_pekerjaan = $('input[name="pekerjaan"]').val();
            if (text_nama_lengkap != '' && text_no_ktp != '' && text_no_kk != '' &&
                text_no_whatsapp != '' && text_pekerjaan != ''
            ) {
                $('input[type="submit"]').attr('disabled', false);
            } else {
                $('input[type="submit"]').attr('disabled', true);
            }
        });
    });

</script>
<script type="text/javascript">
    //Rotating Menu Share Button DesainKode
    $(document).ready(function (ev) {
        var toggle = $('#ss_toggle');
        var menu = $('#ss_menu');
        var rot;

        $('#ss_toggle').on('click', function (ev) {
            rot = parseInt($(this).data('rot')) - 180;
            menu.css('transform', 'rotate(' + rot + 'deg)');
            menu.css('webkitTransform', 'rotate(' + rot + 'deg)');
            if ((rot / 180) % 2 == 0) {
                //Moving in
                toggle.parent().addClass('ss_active');
                toggle.addClass('close');
            } else {
                //Moving Out
                toggle.parent().removeClass('ss_active');
                toggle.removeClass('close');
            }
            $(this).data('rot', rot);
        });

        menu.on('transitionend webkitTransitionEnd oTransitionEnd', function () {
            if ((rot / 180) % 2 == 0) {
                $('#ss_menu div i').addClass('ss_animate');
            } else {
                $('#ss_menu div i').removeClass('ss_animate');
            }
        });

    });

</script>

<script>
    $(document).ready(function () {
        $('.customer-logos').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });

</script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'id',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            autoDisplay: false
        }, 'google_translate_element');
    }

</script>
<script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript">
</script>
<script>
    function translateLanguage(lang) {

        var $frame = $('.goog-te-menu-frame:first');
        if (!$frame.size()) {
            alert("Error: Could not find Google translate frame.");
            return false;
        }
        $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
        return false;
    }

</script>
<script>
    $(document).ready(function () {
        $("#testimonial-slider").owlCarousel({
            items: 2,
            itemsDesktop: [1000, 2],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [768, 1],
            pagination: false,
            navigation: true,
            navigationText: ["", ""],
            autoPlay: true
        });
    });

</script>
<script>
    $(document).ready(function () {
        $("#testimonial-slider").owlCarousel({
            items: 2,
            itemsDesktop: [1000, 2],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [768, 1],
            pagination: false,
            navigation: true,
            navigationText: ["", ""],
            autoPlay: true
        });
    });

</script>
<script>
    $(document).ready(function () {
        	/*
		variables
	*/

		var $imagesSlider = $(".gallery-slider .gallery-slider__images>div"),
			  $thumbnailsSlider = $(".gallery-slider__thumbnails>div");
	/*
		sliders
	*/
		// images options
		$imagesSlider.slick({
			speed:300,
			slidesToShow:1,
			slidesToScroll:1,
			cssEase:'linear',
			fade:true,
			draggable:false,
			asNavFor:".gallery-slider__thumbnails>div",
			prevArrow:'.gallery-slider__images .prev-arrow',
			nextArrow:'.gallery-slider__images .next-arrow'
		});

		// thumbnails options
		$thumbnailsSlider.slick({
			speed:300,
			slidesToShow:5,
			slidesToScroll:1,
			cssEase:'linear',
			centerMode:true,
			draggable:false,
			focusOnSelect:true,
			asNavFor:".gallery-slider .gallery-slider__images>div",
			prevArrow:'.gallery-slider__thumbnails .prev-arrow',
			nextArrow:'.gallery-slider__thumbnails .next-arrow',
			responsive: [
				{
					breakpoint: 720,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 4
					}
				},
				{
					breakpoint: 576,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3
					}
				},
				{
					breakpoint: 350,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				}
			]
		});

    });

</script>
<script>
    // Startup Scripts
    $(document).ready(function () {
        $('.hero').css('height', ($(window).height() - $('header').outerHeight()) +
            'px'); // Set hero to fill page height

        $('#scroll-hero').click(function () {
            $('html,body').animate({
                scrollTop: $("#hero-bloc").height()
            }, 'slow');
        });
    });


    // Window resize 
    $(window).resize(function () {
        $('.hero').css('height', ($(window).height() - $('header').outerHeight()) +
            'px'); // Refresh hero height  	
    });

</script>
<script>
    $(document).ready(function () {
        $("#project-kami-slider").owlCarousel({
            items: 3,
            itemsDesktop: [1000, 2],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [768, 1],
            pagination: false,
            navigation: true,
            navigationText: ["", ""],
            autoPlay: false
        });
    });

</script>

<script>
    $(document).ready(function () {
        $('.tarkikComandSlider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            dots: true,
        });
    });

</script>
<script>
    $(document).ready(function (ev) {
        $('#custom_carousel').on('slide.bs.carousel', function (evt) {
            $('#custom_carousel .controls li.active').removeClass('active');
            $('#custom_carousel .controls li:eq(' + $(evt.relatedTarget).index() + ')').addClass(
                'active');
        })
    });

</script>
<script>
    $(document).ready(function (ev) {
        const height = (elem) => {

            return elem.getBoundingClientRect().height

        }

        const distance = (elemA, elemB, prop) => {

            const sizeA = elemA.getBoundingClientRect()[prop]
            const sizeB = elemB.getBoundingClientRect()[prop]

            return sizeB - sizeA

        }

        const factor = (elemA, elemB, prop) => {

            const sizeA = elemA.getBoundingClientRect()[prop]
            const sizeB = elemB.getBoundingClientRect()[prop]

            return sizeB / sizeA

        }

        document.querySelectorAll('.card').forEach((elem) => {

            const head = elem.querySelector('.card__head')
            const image = elem.querySelector('.card__image')
            const author = elem.querySelector('.card__author')
            const body = elem.querySelector('.card__body')
            const foot = elem.querySelector('.card__foot')

            elem.onmouseenter = () => {

                elem.classList.add('hover')

                const imageScale = 1 + factor(head, body, 'height')
                image.style.transform = `scale(${imageScale})`

                const bodyDistance = height(foot) * -1
                body.style.transform = `translateY(${bodyDistance}px)`

                const authorDistance = distance(head, author, 'height')
                author.style.transform = `translateY(${authorDistance}px)`

            }

            elem.onmouseleave = () => {

                elem.classList.remove('hover')

                image.style.transform = `none`
                body.style.transform = `none`
                author.style.transform = `none`

            }

        });
    });

</script>
<script type="text/javascript">
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

    function hanyaHuruf(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if ((charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && charCode > 32)
            return false;
        return true;
    }

</script>
<script type="text/javascript">
    //Rotating Menu Share Button DesainKode
    $(document).ready(function (ev) {
        var toggle = $('#ss_toggle');
        var menu = $('#ss_menu');
        var rot;

        $('#ss_toggle').on('click', function (ev) {
            rot = parseInt($(this).data('rot')) - 180;
            menu.css('transform', 'rotate(' + rot + 'deg)');
            menu.css('webkitTransform', 'rotate(' + rot + 'deg)');
            if ((rot / 180) % 2 == 0) {
                //Moving in
                toggle.parent().addClass('ss_active');
                toggle.addClass('close');
            } else {
                //Moving Out
                toggle.parent().removeClass('ss_active');
                toggle.removeClass('close');
            }
            $(this).data('rot', rot);
        });

        menu.on('transitionend webkitTransitionEnd oTransitionEnd', function () {
            if ((rot / 180) % 2 == 0) {
                $('#ss_menu div i').addClass('ss_animate');
            } else {
                $('#ss_menu div i').removeClass('ss_animate');
            }
        });

    });

</script>
<script>
    $(document).ready(function () {
        $(".language").on("click", function (e) {
            $("li.language").removeClass("active");
            $(this).addClass("active");
        });
    });

</script>
</body>

</html>
