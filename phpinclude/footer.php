    </div>
  <!--   Tout le Js  -->
  <script src="../asset/js/core/jquery.min.js"></script>
  <script src="../asset/js/core/popper.min.js"></script>
  <script src="../asset/js/core/bootstrap-material-design.min.js"></script>
  <script src="../asset/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="../asset/js/plugins/moment.min.js"></script>
  <script src="../asset/js/plugins/sweetalert2.js"></script>
  <!--Jquery validate (ne fonctionne pas) -->
  <script src="../asset/js/plugins/jquery.validate.min.js"></script>
  <script src="../asset/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	bootstrap select (moche) -->
  <script src="../asset/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Bootstrap datetimepicker (bien mais inutile) -->
  <script src="../asset/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <script src="../asset/js/plugins/bootstrap-tagsinput.js"></script>
  <script src="../asset/js/plugins/jasny-bootstrap.min.js"></script>
  <script src="../asset/js/plugins/jquery-jvectormap.js"></script>
  <script src="../asset/js/plugins/nouislider.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <script src="../asset/js/plugins/arrive.min.js"></script>
  <script src="../asset/js/plugins/chartist.min.js"></script>
  <script src="../asset/js/plugins/bootstrap-notify.js"></script>
  <script src="../asset/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <script src="../asset/demo/demo.js"></script>
  <!--- Splendide footer-->
  <footer class="footer-area">
            <div class="container">
              <div class="row justify-content-between">
                <div class="col-sm-6 col-md-3 col-xl-3">
                  <div class="single-footer-widget footer_1">
                    <a href="../index.php">
                      <img src="../img/favicon.png" class = "petite" alt="TUTOS DU WEB">
                      </a>
                      <p class="footer-description">Un site ou tous peuvent écrire des tutos pour partager leurs connaisances et rectifier les tutos des autres pour avoir le meilleur contenu possible pour que tous puissent apprendre facilement ;-)</p>
                  
             
                    <style>
                      .petite{
                        height:34px;
                      }
                      </style>
                    <ul>
                   
                    <div class="social_icon">
                      <a href="#"><i class="ti-facebook"></i></a>
                      <a href="#"><i class="ti-twitter-alt"></i></a>
                      <a href="#"><i class="ti-dribbble"></i></a>
                      <a href="#"><i class="ti-instagram"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-3">
                  <div class="single-footer-widget footer_2">
                    <h4>Tutos</h4>
                    <ul>
                    <li><a href="../tuto/?type=tout&filtre=1">tutos Web</a></li>
                      <li>
                        <a href="../tuto/?type=tout&filtre=3">tutos Windows</a>
                      </li>
                      <li>
                        <a href="../tuto/?type=tout&filtre=2">tutos Discord</a>
                      </li>
                    
                    </ul>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-3">
                  <div class="single-footer-widget footer_2">
                    <h4>Échange</h4>
                    <ul>
                      <li>
                        <a href="../forum">Forum</a>
                      </li>
                      <li>
                        <a href="#">chat(discord)</a>
                      </li>
                      <li>
                        <a href="../@me"> nouveau topic</a>
                      </li>
                    
                    </ul>
                  </div>
                </div>
              
                <div class="col-xl-3 col-sm-6 col-md-3">
                  <div class="single-footer-widget footer_2">
                    <h4>Resources</h4>
                    <ul>
                    <li><a href="../contact.php">Contact</a></li>
                      <li>
                        <a href="../newsletter/">Rejoindre la newsletter</a>
                      </li>
                      <li>
                        <a href="../licenses">Mentions légales &amp; CGU</a>
                      </li>
                    </ul>
                  </div>
                </div>
               
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="copyright_part_text text-center">
                    <div class="row">
                      <div class="col-lg-12">
                        <p class="footer-text m-0">
               
Copyright ©<script>document.write(new Date().getFullYear());</script> tutos du web | Touts droits reservés

                        </p>
                        
                      </div>
                      
                    </div>
                    
                  </div>
                  
                </div>
                
              </div>
              
            </div>
    
    </footer>
    <!-- magnifique sroll up -->
    <div id="back-top" >
        <a title="Retour en haut" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
    
    <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
        
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

         
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  

    <script src="../js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="../js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="../js/jquery.magnific-popup.js"></script>
    <!-- isotope js -->
    <script src="../js/isotope.pkgd.min.js"></script>
    <!-- particles js -->
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <!-- TDW js -->
    <script src="../js/custom.js"></script>
    <!-- selection, sticky -->
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/jquery.sticky.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>
</html>