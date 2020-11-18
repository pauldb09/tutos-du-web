<?php
    if(!$_GET['code']){
        header('location:index.php?lang=fr&device=computer');
      }
require('status.php')
?>
<!DOCTYPE html PUBLIC>
<html class="no-js" lang="fr">
<?php
$code = $_GET['code'];
if($code == '404'){
$tiltle = "Page non trouvée";
$grd = "404";
$des = "Cette page n'existe pas (ou plus)";
}
if($code == '403'){
   $tiltle = "Accès refusé";
   $grd = "403";
   $des = "Accès refusé";
   }
if($code == '500'){
   $tiltle = "Système saturé";
   $grd = "500";
   $des = "le système est actuellement saturé , merci de réessayer plus tard";
   } 
   if($code != 404 ){
  if($code != 403 ){
      
         if($code != 500 ){
   header('location:index.php?lang=fr');
         }
      }
   }
?>
<title>Tutos du web | <?php echo $tiltle ?></title>
<head>
<?php require('phpinclude/navbar.php') ?>
               <div class="container">
                <div class="section-tittle text-center mb-70">
                   
                <h1 class = "big"><?php echo $code ?></h1>
               <p><?php echo $des ?></p>
                </div>
                </div>
                <style>
                   .big{
font-size:130px;
                   }
                   </style>
                <?php
           //     require('phpinclude/leftnav.php');
       require('phpinclude/footer.php'); ?>