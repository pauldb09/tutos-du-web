<?php
require('../status.php');
if(!isset($_SESSION['id'])){
 header('Location: ../login');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="robots" content="index , follow">
  <link rel="apple-touch-icon" sizes="76x76" class = "tdwlogoo" href="../img/favicon.png">
  <link rel="icon" type="image/png" href="../img/icone.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="keywords" content=" tuto tutos du web api  pauldb09  apprendre à coder"/>
     
     <meta property="og:title" content="Api  | Tutos du web">
     <meta property="og:locale" content="fr_FR">
     <meta property="og:site_name" content="Tutos du web">
     <meta name="description" content="Voici la documentation pour maitriser l'api de Tutos du Web.">
     <meta property="og:description" content="Voici la documentation pour maitriser l'api de Tutos du Web.">
     <meta name="theme-color" content="#5EB2DA">

     <meta property="og:url" content="https://tutos-du-web.com/api/doc.php">
   
     <meta name="twitter:card" content="summary_large_image">
     <meta property="og:type" content="article">
     <meta property="og:type" content="website">
<meta property="og:site_name" content="Tutos-Du-Web">
<meta property="og:title" content="Tutos-Du-Web">
<meta name="subject" content="Coding">
<meta name="copyright"content="tutos du web">
<meta name="language" content="FR">
<meta name="designer" content="Pauldb09">
<meta name="owner" content="Pauldb09">
<meta name="url" content="https://tutos-du-web.com/">
<meta name="identifier-URL" content="https://tutos-du-web.com/">
<meta name="category" content="coding">
  <title>
Api  | Tutos du web
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

  <link href="../asset/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
 <link href="../asset/demo/demo.css" rel="stylesheet" />

	<link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
  
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo"><a href="../index.php" class="simple-text logo-normal">
<img class = "tdwlogo" src = "../img/favicon.png">

        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link " href="../@me/index.php">
       
              <p>tutos</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../@me/profil.php">
       
              <p>profil</p>
            </a>
          </li>
          <li class="nav-item active">
          <a class="nav-link " href="../api/doc.php">
       
              <p>Api</p>
            </a>
          </li>
          <li class="nav-item active-pro ">
            <a class="nav-link" >
      
              <p><?php echo $_SESSION['username']?></p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <?php
   require('../@me/nav.php')
   ?>

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                <h4 class="card-title mt-0"> Api | Documentation</h4>
                  <p class="card-category"> Voici la documentation de l'<a href="./index.php">API</a> de Tutos du Web.</p>
                 
                </div>
                <div class="card-body">
                   
                     
                      <h3>Pour commencer : </h3>
                      <p>Premièrement , il vous faut l'url de base .</p>
                      
                      <code><a target = "_blank"href="https://tutos-du-web.com/api">https://tutos-du-web.com/api</a></code>
                      <p>Cette url ne requiert qu'un seul paramètre :                       <code>q</code>
                   <br>   exemple d'url correcte :
</p>                      <code><a target = "_blank" href="https://tutos-du-web.com/api?q=barre de recherche">https://tutos-du-web.com/api?q=barre de recherche</a></code>
<h3>Exemples : </h3>
<h4>Avec Nodejs : </h4>
<p>Dans cet exemple , nous allons faire un exemple en nodejs , pour un bot discord par exemple.</p>
<pre class="hljs" style="display: block; overflow-x: auto; padding: 0.5em; color: rgb(51, 51, 51); background: rgb(248, 248, 248);">const axios = <span class="hljs-built_in" style="color: rgb(0, 134, 179);">require</span>(<span class="hljs-string" style="color: rgb(221, 17, 68);">'axios'</span>) <span class="hljs-regexp" style="color: rgb(0, 153, 38);">//</span> <span class="hljs-built_in" style="color: rgb(0, 134, 179);">npm</span> i axios

const uri = `<span class="javascript">http:<span class="hljs-comment" style="color: rgb(153, 153, 136); font-style: italic;">//tutos-du-web.ml/api/?q=${encodeURIComponent(</span>
args.join(<span class="hljs-string" style="color: rgb(221, 17, 68);">" "</span>)
)}</span>`

axios
.get(uri)
.<span class="hljs-keyword" style="color: rgb(51, 51, 51); font-weight: 700;">then</span>(<span class="hljs-function"><span class="hljs-params">(req)</span> =&gt;</span> {
const { data } = req
<span class="hljs-keyword" style="color: rgb(51, 51, 51); font-weight: 700;">if</span> (data &amp;&amp; !data.error) {
    const embede = <span class="hljs-keyword" style="color: rgb(51, 51, 51); font-weight: 700;">new</span> Discord.MessageEmbed()
     .setColor(message.client.color)
     .setFooter(message.client.footer)
     .setTitle(`<span class="javascript">Résultats pour : \</span>`${args.join(<span class="hljs-string" style="color: rgb(221, 17, 68);">" "</span>)}\`<span class="javascript"></span>`)
     .setURL(uri)
     .addField(<span class="hljs-string" style="color: rgb(221, 17, 68);">'`🗒` Nom'</span>, data.nom)
     .addField(<span class="hljs-string" style="color: rgb(221, 17, 68);">'`⛺` Description'</span>, data.description)
     .addField(<span class="hljs-string" style="color: rgb(221, 17, 68);">'`👱🏼‍♂️` Auteur'</span>, data.autheur, <span class="hljs-literal" style="color: teal;">true</span>)
     .addField(<span class="hljs-string" style="color: rgb(221, 17, 68);">'`🥜` Catégorie'</span>, data.catégorie, <span class="hljs-literal" style="color: teal;">true</span>)
    message.channel.send(embede)
} <span class="hljs-keyword" style="color: rgb(51, 51, 51); font-weight: 700;">else</span> {
message.channel.send(`<span class="javascript"> - Je n<span class="hljs-string" style="color: rgb(221, 17, 68);">'ai trouvé aucun tuto sur Tutos du web pour : \</span></span>`${args.join(<span class="hljs-string" style="color: rgb(221, 17, 68);">" "</span>)}\`<span class="javascript"><span class="hljs-string" style="color: rgb(221, 17, 68);"></span></span>`)
}
})
.<span class="hljs-keyword" style="color: rgb(51, 51, 51); font-weight: 700;">catch</span>(<span class="hljs-function"><span class="hljs-params">(err)</span> =&gt;</span> {
message.channel.send(`<span class="javascript"><span class="hljs-string" style="color: rgb(221, 17, 68);">- Je n'</span>ai trouvé aucun tuto sur Tutos du web pour : \</span>`${args.join(<span class="hljs-string" style="color: rgb(221, 17, 68);">" "</span>)}\`<span class="javascript"></span>`)
})


</pre>  
<p>Ce code vous renverra un embed avec les informations du tuto. Mais regardons plutot les élements que nous renvoie l'api.</p>

              </div>
              </div>
           
           
          </div>
        </div>
      </div>
     
    </div>
  </div>
    
  
  <!--   Core JS Files   -->
  <script src="../asset/js/core/jquery.min.js"></script>
  <script src="../asset/js/core/popper.min.js"></script>
  <script src="../asset/js/core/bootstrap-material-design.min.js"></script>
  <script src="../asset/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../asset/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../asset/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../asset/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../asset/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../asset/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../asset/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../asset/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../asset/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../asset/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../asset/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../asset/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../asset/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../asset/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="/assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="/assets/demo/demo.js"></script>
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
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
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

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>