<?php
use Illuminate\Support\Facades\DB;
$site       = DB::table('konfigurasi')->first();
?>
<section class="footer-widget-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="footer-widget">
                    <p class="subcsribe-text wow fadeInDown">{!! $site->deskripsi!!}</p>

                    <h3 class="wow fadeInDown">Subscribe to newsletter</h3>

                    <form class="wow fadeInDown">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>

                    <div class="social-link wow fadeInDown">
                        <ul>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="<?php echo $site->facebook ?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        </ul>
                    </div>
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-2 col-sm-4 col-xs-4">
                <div class="footer-widget">
                    <h3 class="wow fadeInDown">Customer Care</h3>
                    <ul class="wow fadeInDown">
                        <li><a href="{{'kontak'}}">Kontak</a></li>
                    </ul>
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-2 -->
            <div class="col-md-2 col-sm-4 col-xs-4">
                <div class="footer-widget">
                    <h3 class="wow fadeInDown">Information</h3>
                    <ul class="wow fadeInDown">
                        <li><a href="{{'/'}}">Beranda</a></li>
                        <li><a href="{{'produk'}}">Produk</a></li>
                        <li><a href="{{'berita/read/profil-bmtinsan-cita'}}">Tentang Kami</a></li>
                        <li><a href="#">Reviews</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Awards</a></li>
                        <li><a href="#">Video Clips</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-2 -->
            <div class="col-md-2 col-sm-4 col-xs-4">
                <div class="footer-widget">
                    <h3 class="wow fadeInDown">Solutions</h3>
                    <ul class="wow fadeInDown">
                        <li><a href="#">Contact Center</a></li>
                        <li><a href="#">Knowledge</a></li>
                        <li><a href="#">Management</a></li>
                        <li><a href="#">Web Self-Service</a></li>
                        <li><a href="#">Performance Metrics</a></li>
                    </ul>
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-2 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<footer class="footer-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright wow fadeInDown">
                    <p>Copyright &copy; {{date('Y')}}
                      <?= $site->namaweb ?>
                    </p>
                </div><!-- /.copyright -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</footer>
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
                <li><a href="{{ asset("/") }}">Home</a></li>
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
<script src='https://www.google.com/recaptcha/api.js'></script>

<script type="text/javascript">
  $(document).ready(function () {
      // Add
      $('.add_cart').click(function () {
          var product_id = $(this).data("productid");
          var product_name = $(this).data("productname");
          var product_price = $(this).data("productprice");
          var quantity = $('#' + product_id).val();
          var pengalihan = $('#' + product_id).val();
          $.ajax({
              asset: "{{ asset('/') }}keranjang/tambah",
              method: "POST",
              data: {
                  product_id: product_id,
                  product_name: product_name,
                  product_price: product_price,
                  quantity: quantity,
                  pengalihan: pengalihan
              },
              success: function (data) {
                  window.location.href = "{{ asset('/') }}keranjang";
              }
          });
      });
      // Remove
      $(document).on('click', '.romove_cart', function () {
          var row_id = $(this).attr("id");
          $.ajax({
              asset: "{{ asset('/') }}keranjang/hapus",
              method: "POST",
              data: {
                  row_id: row_id
              },
              success: function (data) {
                  window.location.href = "{{ asset('/') }}keranjang";
              }
          });
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
        $("#produk-kami-slider").owlCarousel({
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
      $("#team-kami-slider").owlCarousel({
          items: 4,
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
</body>
</html>
