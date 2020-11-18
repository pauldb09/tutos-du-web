<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="../img/icone.png">
<meta name="subject" content="Coding">
<meta name="copyright"content="tutos du web">
<meta name="language" content="FR">
<meta name="designer" content="Pauldb09">
<meta name="owner" content="Pauldb09">
<meta name="url" content="https://tutosduweb.fr/">
<meta name="identifier-URL" content="https://tutosduweb.fr/">
<meta name="category" content="coding">

<!---------------------------------------------CSS--------------------------------------------------->
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="../assets/css/slicknav.css">
<link rel="stylesheet" href="../assets/css/flaticon.css">
<link rel="stylesheet" href="../assets/css/animate.min.css">
<link rel="stylesheet" href="../assets/css/tdw.css">
<link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
<link rel="stylesheet" href="../assets/css/themify-icons.css">
<link rel="stylesheet" href="../assets/css/slick.css">
<link rel="stylesheet" href="../assets/css/nice-select.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/normalize.min.css">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../syntax-highlighter/styles/shCore.css" media="all">
<link rel="stylesheet" type="text/css" href="../syntax-highlighter/styles/shThemeDefault.css" media="all">
<link rel="stylesheet" href="../css/animate.css">
<link rel="stylesheet" href="../css/themify-icons.css">
<link rel="stylesheet" href="../css/flaticon.css">
<link rel="stylesheet" href="../css/slick.css">
<link rel="stylesheet" href="../css/style.css">

<!---------------------------------------------JS--------------------------------------------------->
<script type="text/javascript" src="../js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="../js/jquery.nav.js"></script>
<script type="text/javascript" src="../syntax-highlighter/scripts/shCore.js"></script> 
<script type="text/javascript" src="../syntax-highlighter/scripts/shBrushXml.js"></script> 
<script type="text/javascript" src="../syntax-highlighter/scripts/shBrushCss.js"></script> 
<script type="text/javascript" src="../syntax-highlighter/scripts/shBrushJScript.js"></script> 
<script type="text/javascript" src="../syntax-highlighter/scripts/shBrushPhp.js"></script> 
<script type="text/javascript">
  SyntaxHighlighter.all()
</script>
<script type="text/javascript" src="../js/custom.js"></script>
</head>
<body>
<header> 
<?php
$themeac = $_COOKIE['theme'];
if($themeac == 'clair'){
$color = 'normal';
}else{

}
?>
  <div class = "fregrnavbar" background-color = "black">
      <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                      <div class="header-bottom header-sticky">
                      <!-- LOGO TUTOS DU WEB-->
                           <div class="logo">
                            <a href="../index.php"><img class = "tdwlgo d-none d-lg-block" src = "../img/favicon.png" alt = "TUTOS DU WEB"></a>
                           </div>
                     <div class="container">
                        <div class="menu-wrapper">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                                          
                                        <li><a href="../index.php">Accueil</a></li>
                                        <li><a href="../tuto/">Tutos</a>
                                            <ul class="submenu">
                                                <li><a href="../tuto/?type=tout&filtre=1">Web</a></li>
                                                <li><a href="../tuto/?type=tout&filtre=2">Discord</a></li>
                                                <li><a href="../tuto/?type=tout&filtre=3">C++</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="../public/">Espace public</a></li>
                                       <!--- <li><a href="../forum">Forum</a></li>--->
                                       </li>
                                      </ul>
                                </nav>
                            </div>
                            <form method="GET" action = "../search/" class="form-box f-right ">
                            <div class="header-search d-none d-lg-block">                 
                            <?php

     if(!isset($_SESSION['username'])){
         
   echo ' 
     <div class="header-info-right">
         <ul>    
             <li><a href="../login/?url='.$page.'"><i class="far fa-user"></i>Connexion</a></li>
             <li><a href="../register"><i class="ti-lock"></i>Inscription</a></li>
         </ul>
     </div>
    ';
       }else{
          echo '
           <div class="header-info-right">
         <ul>    
         <li class="nav-item dropdown">

                 <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><div  class = "jase">
                 <img src="'.$info['avatar'].'" class = "avatar" alt="">
                   '.$_SESSION['username'].'
                 </div>
      
           <p class="d-lg-none d-md-block">
             Account
           </p>
         </a>
         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
           <a class="dropdown-item" href="../@me/">Espace personnel</a>
           <a class="dropdown-item" href="../@me/profil.php">Mom compte</a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="../logout/?url='.$page.'">Deconnexion</a>
         </div>
       </li>
 
         </ul>
     </div>
   
 
      ';
       }
       
       ?>
         </div>
        
</form>
<!---<div class="header-info-right">
        <ul>    
        <li class="nav-item dropdown">

                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-flag"></i>fr
     
          <p class="d-lg-none d-md-block">
            Account
          </p>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
          <a class="dropdown-item" href="../an/">Anglais</a>
          <a class="dropdown-item" href="../de/">Allemand</a>
         
          <a class="dropdown-item" href="../it/">Italien</a>
        </div>
      </li>

        </ul>
  -->
<form method="GET" action = "../search/" class="form-box f-right ">
                            <div class="header-search d-none d-lg-block">
                                  
                                      <input type="text" name="q" placeholder="Rechercher dans tout le site.." >
                                    <button type = "submit"> <div class="search-icon">
                                          <i class="fas fa-search special-tag"></i>
                                      </div></button>
                                  </form>
                              </div>
                          </div>
  </form>
      </div>

    </header>
    
  <div class = "content">
<?php
$add = "SELECT * FROM `ann` WHERE `id` = 'salope'";
$exe = mysqli_query($conn,$add);
while($ann = mysqli_fetch_array($exe)){
echo '<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <i class="fa fa-close"></i>
</button>
<span>
  <b> Info - </b> '.$ann['texte'].'</span>
</div>';
}
if($statut == 'non'){
echo '<div class="alert alert-warning">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <i class="material-icons">close</i>
</button>
<span>
  <b> Atention - </b> le site est actuellement en maintenance mais vous y avez acces car vous etes un administrateur <a></span>
</div>
';
}else{
    if($v < 2){


        echo ' 
        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="fa fa-close"></i>
                            </button>
                            <span>
                              <b> Info - </b> Vous utilisez une version avant premiere du site qui ne reflete pas la qualite finale </span>
                          </div>';
        }
}


?>
  