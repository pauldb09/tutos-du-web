<?php
session_start();
if(!isset($_COOKIE['THEME'])){
  $nom = 'clair';
  $expiration = 0 ;
setcookie('THEME',$nom,$expiration);
}else{
}
$currentyear = date(Y);
echo ' 
<!--
## -------------------------FR------------------------------##
##  Tutos du web™ | site d\'apprentisage des technologies du web
##  =========================================================== 
##  Codé avec ❤ par 𝖕𝖆𝖚𝖑𝖉𝖇09 <pauldb09.fr> 
##  '.$currentyear.' © Tutos du web , Tutos du web™ est une marque déposée.
##  Ce code est protégé d\'un  copyright ,tout réutilisation est interdite est sanctionnable de poursuites juidiciaires (article 234 du code du commerçe);
##  si vous voulez réutiliser ce code , merci de contacter 𝖕𝖆𝖚𝖑𝖉𝖇09 <pauldb09.fr>.
##
##
## --------------------------AN---------------------------------##
##  Tutos du web™ | coding website
##  =========================================================== 
##  Coded whith ❤ by 𝖕𝖆𝖚𝖑𝖉𝖇09 <pauldb09.fr> 
##  '.$currentyear.' © Tutos du web  
##  this file is protected by a copyright, every reuse is forbiden and sanctionable by the law(article 234);
## if you want reuse this code , please  contact 𝖕𝖆𝖚𝖑𝖉𝖇09 <pauldb09.fr>.
## --------------------------------------------------------------##
---->
';
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'id13517709_x1');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($conn === false){
   // header('location:error.php?code=500');

}else{

//---------------------------------------------------------------------------
$query = "SELECT * FROM `site`";
$result = mysqli_query($conn ,$query);
if ($result){;
   $ligne = mysqli_fetch_assoc($result);
   $v = $ligne['version'];
   $statut = $ligne['etat'];
//---------------------------------------------------------------------------
   if(isset($_SESSION['id'])){
    $me = $_SESSION['id'];
    $select = "SELECT * FROM `users` WHERE `id` = '$me' ";
    $execute = mysqli_query($conn,$select);
    $info = mysqli_fetch_assoc($execute);
    $type = $info['type'];
    $_SESSION['username'] = $info['username'];

    }
  
if(isset($loginprotection)){

  if($loginprotection == 'normal'){
if(!isset($_SESSION['username'])){
  header('location:../index.php?lang=fr&device=computer');
}
  }
  if($loginprotection == 'admin'){
    if(!isset($_SESSION['username'])){
      header('location:../error.php?code=403');
    }else{
      if($type != 'admin'){
        header('location:../error.php?code=403');
      }
    }
  }
  if($loginprotection == 'no'){

    ?>
    <!-- cette page n'est pas protégée par loginprotection.php , le sript est installé -->
    <?php
  }
}else{
  echo '<!--le script loginprotection de status.php n\'est pas installé sur cette page . ID de la page : '.uniqid().' --->
  ';
}

//-----------------------------------------------------------------------------
   if ($statut == 'non') {;
 if (isset($type)) {
   if($type == 'admin'){
}
if($type == 'normal'){
  header('location:http://localhost/bloked.php');
}
   }else{
    header('location:http://localhost/bloked.php');
  }
 
}

  
   

   
}
}
?>
<meta name = "microsoft" content = "fuck you">
