<?php
if(isset($_GET['q'])){
    $q = $_GET['q'];
    header('location:../search/?q='.$q.'');
}else{
    if(!$_GET['lang']){
        header('location:?lang=fr&device=computer');
      }
     
}
$page = '../index.php';
require('status.php')
?>
<!DOCTYPE html PUBLIC>
<html lang="fr" dir = "ltr">
<head>
<meta  data-hid="robots" name="robots" content="index, follow">
<meta name="keywords" content="Web, php , mysql ,coding, coder, apprendre a programmer , pauldb09 , html , css , debuter , programmer , tuto php ,tuto web , tutos ,tuto ,comment ,sql"/>
<meta property="og:type" content="article">
<meta property="og:image" content="https://tutosduweb.fr/img/b.png">
<meta property="og:title" content="Tutos du web">
<meta property="og:description" content="Un site ou tous peuvent écrire des tutos pour partager leurs connaisances et rectifier les tutos des autres pour avoir le meilleur contenu possible pour que tous puissent apprendre facilement ;-)">
<meta property="og:site_name" content="Tutos du web">
<meta property="og:url" content="https://tutosduweb.fr/">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="https://tutosduweb.fr/img/b.png">
<meta name="twitter:title" content="Tutos du web">
<meta name="twitter:description" content="Un site ou tous peuvent écrire des tutos pour partager leurs connaisances et rectifier les tutos des autres pour avoir le meilleur contenu possible pour que tous puissent apprendre facilement ;-)">
<title>Tutos du web | le site tutos informatiques</title>
<?php require('phpinclude/navbar.php') ?>
 <section class="blog_area padding_top">
    <div class="container">
        <div class="section-tittle text-center mb-70">
           <h1>Dernières publications</h2>
            <p>voici les tutos les plus récents | <a href = "../tuto/">Voir tous les tutos</a></p>
        </div>
    <?php
        $requeteSQL = "SELECT * FROM `tuto` WHERE `statut` = 'valide' ORDER BY `date` DESC LIMIT 6 ";
        $res = mysqli_query($conn,$requeteSQL);
    if($res){
        require('phpinclude/tutoentity.php');
    } 
    ?>
    </div>
    </div><?php
        require('phpinclude/leftnavhome.php');
        require('phpinclude/footer.php'); ?>