<?php
if(!$_GET['type']){
   header('location:index.php?lang=fr&type=tout');
 }

require('../status.php')
?>
<!DOCTYPE html PUBLIC>
<html class="no-js" lang="fr">
<head><?php
  
  $type = $_GET['type'];
  if($type != 'tout'){
      if($type != 'singletuto'){
        header('location:index.php?lang=fr&type=tout');
      }
  }

if($type == 'singletuto'){
                    if(!isset($_GET['id'])){
                        header('location:index.php?type=tout');
                    }else{
                        $id = $_GET['id'];
                        $select = "SELECT * FROM `tuto` WHERE `statut` = 'valide' AND `id` = '$id'";
                        $execute = mysqli_query($conn, $select);
                        $row = mysqli_num_rows($execute);
                        if($row == 0){
                            header('location:../error.php?code=404');
                        }
                        if($execute){
                        $page = 'singletuto&id='.$id.'';
                        
                            $ligne = mysqli_fetch_row($execute);
                            $catid = $ligne['7'];
                                    
                            if($catid == '1'){
                            $cat = 'Web';
                            }
                            if($catid == '2'){
                                $cat = 'Discord';
                                }
                                if($catid == '4'){
                                    $cat = 'C++';
                                    }
                                    if($catid == '4'){
                                        $cat = 'Windows';
                                        }  
                                          ?>
                                <meta name="keywords" content=" tuto <?php echo $ligne['2']?> ,<?php echo $ligne['2']?>,tutos du web , <?php echo $ligne['10']?>"/>
     
                                <meta property="og:title" content="<?php echo $ligne['1'] ?>">
                                <meta property="og:locale" content="fr_FR">
                                <meta property="og:site_name" content="Tutos du web">
                                <meta name="description" content="<?php echo $ligne['9'] ?>">
                                <meta property="og:description" content="<?php echo $ligne['9']?>">
                               
                                <meta property="og:url" content="https://www.tutosduweb.fr/tuto/?type=singletuto&id=<?php echo $id?>">
                                <meta property="og:image" content="https://www.tutosduweb.fr/<?php echo $ligne['3']?>">
                                <meta name="twitter:card" content="summary_large_image">
                                <meta property="fb:app_id" content="262368047485371">
                                <meta property="og:type" content="article">
                                               
                    </header>
                                                <?php
                                    
                                 
                                    $idcret = $ligne['5'];
                                    $requete = "SELECT * FROM `users` WHERE `id` = '$idcret'";
                                    $execute = mysqli_query($conn, $requete);
                                    $legna = mysqli_fetch_array($execute);
                                    $cret = $legna['username'];

                                    }else{
                                        header('location:index.php?type=tout');
                                    }

                                }
                                if(isset($_SESSION['id'])){
                                    if($idcret == $me){
                                        $vuesact = $ligne['11'];
                                    }else{
                                        $vuesact = $ligne['11'];
                                        $vuelfinal = $vuesact + 1 ;
                                        $newvue = "UPDATE `tuto` SET `vues` = '$vuelfinal' WHERE `id` = '$id'";
                                        $mekevue = mysqli_query($conn , $newvue);
                                    }
                                }else{
                                $vuesact = $ligne['11'];
                                $vuelfinal = $vuesact + 1 ;
                                $newvue = "UPDATE `tuto` SET `vues` = '$vuelfinal' WHERE `id` = '$id'";
                                $mekevue = mysqli_query($conn , $newvue);
                            }         
                            ?>
                            <meta name="author" content="<?php echo $cret ?>">
                            <?php require('../phpinclude/navbar.php') ?>
                            <?php
                                        $select = "SELECT * FROM `commentaires` WHERE `tuto` = '$id' ORDER BY `date` DESC";
                            
                                        $do = mysqli_query($conn ,$select);
                                    
                                        if($do){
                                $nbcomm = mysqli_num_rows($do);
                       }
                                        ?>
                            <title><?php echo $ligne['1'] ?> | tutos du web</title>
                            <section class="blog_area single-post-area padding_top">
                                <div class="container">
                                    <div class="row">
                                    <div class="col-lg-8 posts-list">
                                        <div class="single-post">
                                        <div class="feature-img">
                                            <img class="img-flud" src="<?php echo $ligne['3'] ?>" alt="">
                                            <style>
                                                .img-flud{
                                                    height:300px;
                                                    width:800px;
                                                }
                                                .a:hover{
                                                color:black;
                                                }
                                                </style>
                                        </div>
                                        <div class="blog_details">
                                        <p><a href = "../tuto/">Tutos </a>><a href = "../tuto/?type=tout&filtre=<?php echo $catid?>"> <?php echo $cat?> </a> > <a href = "../tuto/?type=tout&filtre=<?php echo $catid?>&sf="><?php echo $ligne['2']?></a></p>
                                            <h2>
                                            <?php echo $ligne['1'] ?>
                                            </h2>
                                           
                                            <ul class="blog-info-link mt-3 mb-4">
                                            <li>
                                              <?php         
                                           if(isset($_SESSION['username'])){
                                            if($idcret == $me){
                                                ?>
                                            <a href="../@me/?action=moodify&id=<?php echo $id?>"><i class="fa fa-book"></i>Modifier le tuto </a>
                                            <a href="../@me/?action=moodify&id=<?php echo $id?>">   <i class="fa fa-recycle bin"></i> Supprimer le tuto</a>
                                                <?php
                                            }else{
                                        echo '   <a href="../public/?action=rediger&id='.$id.'"><i class="fa fa-book"></i>Apporter des modification au contenu</a>';
                                            }
                                        }else{
                                       echo '   <a href="../public/?action=rediger&id='.$id.'"><i class="fa fa-book"></i>Apporter des modification au contenu</a>';
                                        }
                                                ?>
                                            </li>
                                            <li>
                                                <a href="<?php echo $ligne['4'] ?>"><i class="fa fa-code"></i>Code source</a>
                                            </li>
                                            </ul>
                                            <ul class="blog-info-link mt-3 mb-4">
                                            <li>
                                                <a href="#"><i class="far fa-user"></i><?php echo $cret?></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-eye     "></i><?php 
                                               if($vuesact == '0'){
                                                echo 'aucunne vue';
                                               } 
                                               if($vuesact == '1'){
                                                echo '1 vue';
                                                } 
                                                if($vuesact > '1'){
                                                    echo ''.$vuesact.' vues';
                                                    } 
                                                ?></a>
                                            </li>
                                          
                                            <li>
                                                <a href="#comments"><i class="far fa-comments"></i> <?php
                                                if($nbcomm == '1'){
                                            echo '1 commentaire';
                                        }
                                        if($nbcomm == '0'){
                                            echo 'aucun commentaire';
                                        } 
                                        if($nbcomm > '1'){
                                            echo ''.$nbcomm.' commentaires';
                                        } 
                                        ?></a>
                                            </li>
                                            
                                            </ul>
                                            <?php
                                            $selectcontent  ="SELECT * FROM `contenu` WHERE `tuto` = '$id' ORDER BY `id_affich`";
                                            $rescontent = mysqli_query($conn ,$selectcontent);
                                            while($content = mysqli_fetch_array($rescontent)){
                                            echo $content['contenu'];
                                            }
                                        ?>
                                        </div>
                                        </div>
                                        <div class="navigation-top">
                                        <div class="d-sm-flex justify-content-between text-center">
                                            <p class="like-info">
                                            <span class="align-middle"><i class="far fa-heart"></i></span>
                                        Jeanthek et 2 autres personnes ont aimé
                                            </p>
                                            <div class="col-sm-4 text-center my-2 my-sm-0">
                                            <p class="comment-count"><span class="align-middle"><i class="far fa-comment"></i></span><?php
                                                if($nbcomm == 1){
                                            echo '1 commentaire';
                                        }
                                        if($nbcomm == 0){
                                            echo 'aucun commentaire';
                                        } 
                                        if($nbcomm > 1){
                                            echo ''.$nbcomm.' commentaires';
                                        } 
                                        ?></p> 
                                            </div>
                                            <a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.primfx.com%2Fcreer-flou-arriere-plan-css" target="_blank" rel="noopener" aria-label="">
                <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/></svg>
                    </div>
                </div>
                </a>

                <!-- Sharing button Twitter -->
                <a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=Cr%C3%A9er+un+flou+d%27arri%C3%A8re+plan+en+CSS&amp;url=https%3A%2F%2Fwww.primfx.com%2Fcreer-flou-arriere-plan-css" target="_blank" rel="noopener" aria-label="">
                <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z"/></svg>
                    </div>
                </div>
                </a>

                <!-- Sharing button LinkedIn -->
                <a class="resp-sharing-button__link" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fwww.primfx.com%2Fcreer-flou-arriere-plan-css&amp;title=Cr%C3%A9er+un+flou+d%27arri%C3%A8re+plan+en+CSS&amp;summary=Cr%C3%A9er+un+flou+d%27arri%C3%A8re+plan+en+CSS&amp;source=https%3A%2F%2Fwww.primfx.com%2Fcreer-flou-arriere-plan-css" target="_blank" rel="noopener" aria-label="">
                <div class="resp-sharing-button resp-sharing-button--linkedin resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.5 21.5h-5v-13h5v13zM4 6.5C2.5 6.5 1.5 5.3 1.5 4s1-2.4 2.5-2.4c1.6 0 2.5 1 2.6 2.5 0 1.4-1 2.5-2.6 2.5zm11.5 6c-1 0-2 1-2 2v7h-5v-13h5V10s1.6-1.5 4-1.5c3 0 5 2.2 5 6.3v6.7h-5v-7c0-1-1-2-2-2z"/></svg>
                    </div>
                </div>
                </a>

                <!-- Sharing button Pinterest -->
                <a class="resp-sharing-button__link" href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fwww.primfx.com%2Fcreer-flou-arriere-plan-css&amp;media=https%3A%2F%2Fwww.primfx.com%2Fcreer-flou-arriere-plan-css&amp;description=Cr%C3%A9er+un+flou+d%27arri%C3%A8re+plan+en+CSS" target="_blank" rel="noopener" aria-label="">
                <div class="resp-sharing-button resp-sharing-button--pinterest resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.14.5C5.86.5 2.7 5 2.7 8.75c0 2.27.86 4.3 2.7 5.05.3.12.57 0 .66-.33l.27-1.06c.1-.32.06-.44-.2-.73-.52-.62-.86-1.44-.86-2.6 0-3.33 2.5-6.32 6.5-6.32 3.55 0 5.5 2.17 5.5 5.07 0 3.8-1.7 7.02-4.2 7.02-1.37 0-2.4-1.14-2.07-2.54.4-1.68 1.16-3.48 1.16-4.7 0-1.07-.58-1.98-1.78-1.98-1.4 0-2.55 1.47-2.55 3.42 0 1.25.43 2.1.43 2.1l-1.7 7.2c-.5 2.13-.08 4.75-.04 5 .02.17.22.2.3.1.14-.18 1.82-2.26 2.4-4.33.16-.58.93-3.63.93-3.63.45.88 1.8 1.65 3.22 1.65 4.25 0 7.13-3.87 7.13-9.05C20.5 4.15 17.18.5 12.14.5z"/></svg>
                    </div>
                </div>
                </a>

                <!-- Sharing button Reddit -->
                <a class="resp-sharing-button__link" href="https://reddit.com/submit/?url=https%3A%2F%2Fwww.primfx.com%2Fcreer-flou-arriere-plan-css&amp;resubmit=true&amp;title=Cr%C3%A9er+un+flou+d%27arri%C3%A8re+plan+en+CSS" target="_blank" rel="noopener" aria-label="">
                <div class="resp-sharing-button resp-sharing-button--reddit resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 11.5c0-1.65-1.35-3-3-3-.96 0-1.86.48-2.42 1.24-1.64-1-3.75-1.64-6.07-1.72.08-1.1.4-3.05 1.52-3.7.72-.4 1.73-.24 3 .5C17.2 6.3 18.46 7.5 20 7.5c1.65 0 3-1.35 3-3s-1.35-3-3-3c-1.38 0-2.54.94-2.88 2.22-1.43-.72-2.64-.8-3.6-.25-1.64.94-1.95 3.47-2 4.55-2.33.08-4.45.7-6.1 1.72C4.86 8.98 3.96 8.5 3 8.5c-1.65 0-3 1.35-3 3 0 1.32.84 2.44 2.05 2.84-.03.22-.05.44-.05.66 0 3.86 4.5 7 10 7s10-3.14 10-7c0-.22-.02-.44-.05-.66 1.2-.4 2.05-1.54 2.05-2.84zM2.3 13.37C1.5 13.07 1 12.35 1 11.5c0-1.1.9-2 2-2 .64 0 1.22.32 1.6.82-1.1.85-1.92 1.9-2.3 3.05zm3.7.13c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2zm9.8 4.8c-1.08.63-2.42.96-3.8.96-1.4 0-2.74-.34-3.8-.95-.24-.13-.32-.44-.2-.68.15-.24.46-.32.7-.18 1.83 1.06 4.76 1.06 6.6 0 .23-.13.53-.05.67.2.14.23.06.54-.18.67zm.2-2.8c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm5.7-2.13c-.38-1.16-1.2-2.2-2.3-3.05.38-.5.97-.82 1.6-.82 1.1 0 2 .9 2 2 0 .84-.53 1.57-1.3 1.87z"/></svg>
                    </div>
                </div>
                </a>

                <!-- Sharing button WhatsApp -->
                <a class="resp-sharing-button__link" href="whatsapp://send?text=Cr%C3%A9er+un+flou+d%27arri%C3%A8re+plan+en+CSS%20https%3A%2F%2Fwww.primfx.com%2Fcreer-flou-arriere-plan-css" target="_blank" rel="noopener" aria-label="">
                <div class="resp-sharing-button resp-sharing-button--whatsapp resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.1 3.9C17.9 1.7 15 .5 12 .5 5.8.5.7 5.6.7 11.9c0 2 .5 3.9 1.5 5.6L.6 23.4l6-1.6c1.6.9 3.5 1.3 5.4 1.3 6.3 0 11.4-5.1 11.4-11.4-.1-2.8-1.2-5.7-3.3-7.8zM12 21.4c-1.7 0-3.3-.5-4.8-1.3l-.4-.2-3.5 1 1-3.4L4 17c-1-1.5-1.4-3.2-1.4-5.1 0-5.2 4.2-9.4 9.4-9.4 2.5 0 4.9 1 6.7 2.8 1.8 1.8 2.8 4.2 2.8 6.7-.1 5.2-4.3 9.4-9.5 9.4zm5.1-7.1c-.3-.1-1.7-.9-1.9-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.1-.2.2-.3.2-.6.1s-1.2-.5-2.3-1.4c-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6s.3-.3.4-.5c.2-.1.3-.3.4-.5.1-.2 0-.4 0-.5C10 9 9.3 7.6 9 7c-.1-.4-.4-.3-.5-.3h-.6s-.4.1-.7.3c-.3.3-1 1-1 2.4s1 2.8 1.1 3c.1.2 2 3.1 4.9 4.3.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.6-.1 1.7-.7 1.9-1.3.2-.7.2-1.2.2-1.3-.1-.3-.3-.4-.6-.5z"/></svg>
                    </div>
                </div>
                </a>

                <!-- Sharing button E-Mail -->
                <a class="resp-sharing-button__link" href="mailto:?subject=Cr%C3%A9er+un+flou+d%27arri%C3%A8re+plan+en+CSS&amp;body=https%3A%2F%2Fwww.primfx.com%2Fcreer-flou-arriere-plan-css" target="_self" rel="noopener" aria-label="">
                <div class="resp-sharing-button resp-sharing-button--email resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22 4H2C.9 4 0 4.9 0 6v12c0 1.1.9 2 2 2h20c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM7.25 14.43l-3.5 2c-.08.05-.17.07-.25.07-.17 0-.34-.1-.43-.25-.14-.24-.06-.55.18-.68l3.5-2c.24-.14.55-.06.68.18.14.24.06.55-.18.68zm4.75.07c-.1 0-.2-.03-.27-.08l-8.5-5.5c-.23-.15-.3-.46-.15-.7.15-.22.46-.3.7-.14L12 13.4l8.23-5.32c.23-.15.54-.08.7.15.14.23.07.54-.16.7l-8.5 5.5c-.08.04-.17.07-.27.07zm8.93 1.75c-.1.16-.26.25-.43.25-.08 0-.17-.02-.25-.07l-3.5-2c-.24-.13-.32-.44-.18-.68s.44-.32.68-.18l3.5 2c.24.13.32.44.18.68z"/></svg>
                    </div>
                </div>
                </a>
                                            <ul class="social-icons">
                                            <li>
                                                <a href="https://facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.tutosduweb.fr%2Ftuto" target="_blank" rel="noopener" ><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-dribbble"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-behance"></i></a>
                                            </li>
                                            </ul>
                                        </div>
                                        <?php
                                                $next = "SELECT * FROM `tuto` WHERE `categorie` = '".$ligne['2']."' AND `id` != '$id' ORDER BY `date` DESC ";
                                                $faire = mysqli_query($conn , $next);
                                                $lagne = mysqli_fetch_array($faire);
                                                $theid = $lagne['id'] ;
                                                $nexte = "SELECT * FROM `tuto` WHERE `categorie` = '".$ligne['2']."' AND `id` != '$theid' ORDER BY `nom` ";
                                                $fairef = mysqli_query($conn , $nexte);
                                            
                                                $lugne = mysqli_fetch_array($fairef);
                                                ?>
                                        <div class="navigation-area">
                                            <div class="row">
                                                <style>
                                                    .grd{
                height:300px;
                width:733px;
                }
                                                    .img-fluid{
                height:70px;
                width:80px;
                }
                </style>
                                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                                <div class="thumb">
                                                <a href="?type=singletuto&id=<?php echo $lugne['id']?>">
                                                    <img class="img-fluid" src="<?php echo $lugne['image']?>" alt="">
                                                </a>
                                                </div>
                                                <div class="arrow">
                                                <a href="?type=singletuto&id=<?php echo $lugne['id']?>">
                                                    <span class="lnr text-white ti-arrow-left"></span>
                                                </a>
                                                </div>
                                            

                                                <div class="detials">
                                                <p>Article précedent</p>
                                                <a class="d-inline-block" href="?type=singletuto&id=<?php echo $lugne['id']?>">
                                                    <h4><?php echo $lugne['nom']?></h4>
                                                </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                                <div class="detials">
                                                <p>Article suivant</p>
                                                <a class="d-inline-block" href="?type=singletuto&id=<?php echo $lagne['id']?>">
                                                    <h4><?php echo $lagne['nom']?></h4>
                                                </a>
                                                </div>
                                                <div class="arrow">
                                                <a href="?type=singletuto&id=<?php echo $lagne['id']?>">
                                                    <span class="lnr text-white ti-arrow-right"></span>
                                                </a>
                                                </div>
                                                <div class="thumb">
                                                <a href="?type=singletuto&id=<?php echo $lagne['id']?>">
                                                    <img class="img-fluid" src="<?php echo $lagne['image']?>" alt="">
                                                </a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="blog-author">
                                        <div class="media align-items-center">
                                            <img src=" <?php
                                            echo $legna['avatar'];
                                            ?>" alt="">
                                            <div class="media-body" id = "comments">
                                                <p> <?php
                                            echo $legna['type'];
                                            ?></p>
                                            <a href="../profil/?id=<?php echo $legna['0']?>">
                                                <h4><?php echo $cret ?></h4>
                                            </a>
                                            <p>
                                            <?php
                                            echo $legna['description'];
                                            ?>
                                            </p>
                                            </div>
                                        </div>
                                        </div>
                                    
                                        <div class="comments-area" >
                                        <h4><?php
                                                if($nbcomm == 1){
                                            echo '1 commentaire';
                                        }
                                        if($nbcomm == 0){
                                            echo 'aucun commentaire';
                                        } 
                                        if($nbcomm > 1){
                                            echo ''.$nbcomm.' commentaires';
                                        } 
                                        
                                           if(isset($_SESSION['username'])){
                                            if($idcret == $me){
                                                ?>
                                            <p>Vous etes le créateur de ce tuto , vous pouvez donc modérer les commentaires.</p>
                                                <?php
                                            }
                                        }
                                        ?>
                                        </h4>
                                        <?php
                                     
                                    
                                           if(isset($_GET['deletetuto'])){
                                               $idtodelete = $_GET['ids'];
                                               $deltele = "DELETE FROM `commentaires` WHERE `id` = '$idtodelete'";
                                               $fait = mysqli_query($conn , $deltele);
                                               ?>
                                               <meta http-equiv="Refresh" content="0; url= index.php?type=singletuto&id=<?php echo $id?>#comments" />
                                                   <?php 
                                           }
                                                while($comm = mysqli_fetch_row($do)){
                                                    $idcr = $comm['1'];
                                                    if($idcr == 'anno'){
                            $sender = 'annonyme';
                            $avatar = '../img/ano.png';
                            $Sid = '000';
                                                    }else{
                                                        
                                                        $requetfe = "SELECT * FROM `users` WHERE `id` = '$idcr'";
                                                    $execut = mysqli_query($conn, $requetfe);
                                                    $le = mysqli_fetch_array($execut);
                                                    $sender = $le['username'];
                                                    $avatar = $le['avatar'];
                                                    $Sid = $le['id'];
                                                }
                            echo ' 
                                                
                                                    <div class="comment-list">
                                            <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                <img src="'.$avatar.'" alt="">
                                                </div>
                                                <div class="desc">
                                                <p class="comment">
                                                '.$comm['4'].'
                                                </p>
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                    <h5>
                                                        <a href="../profil/?id='.$Sid.'">'.$sender.'</a>
                                                    </h5>
                                                    <p class="date">'.$comm['3'].'</p>
                                                    </div>
                                                    <div class="reply-btn">
                                                    '; 
                                                    if(isset($_SESSION['username'])){
                                                      
                                                            if($idcret == $me){
                                                                ?>
                                                             <a href="../tuto/?type=singletuto&id=<?php echo $id ?>&deletetuto=&ids=<?php echo $comm['0']?>#comments" class="btn-reply text-uppercase">
                                                            Supprimer
                                                    </a>
                                                                <?php
                                                            }else{
                                                                
                                                        
                                                    if($idcr == $me){
                                                        ?>
                                                        <a href="../tuto/?type=singletuto&id=<?php echo $id ?>&deletetuto=&ids=<?php echo $comm['0']?>#comments" class="btn-reply text-uppercase">
                                                            Supprimer
                                                    </a>
                                                        <?php
                                                    }
                                                    
                                                }
                                                }
                                                    echo '
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        ';
                                    }
                                    if($nbcomm == 0){
                                        echo '<p>il n\'y a encore aucun commentaire pour ce tuto</p>';
                                    } 
                                    ?>
                                        </div>
                                                <?php
                        if(isset($_REQUEST['comment'])){
                            if(!empty($_REQUEST['comment']))
                    $comment = $nom = str_replace('\'','&#39;',$_REQUEST['comment']);
                    if(isset($_SESSION['id'])){
                        $de = $_SESSION['id'];
                    }else{
                        $de = 'anno';
                    }
                    $tuto = $id;
                    $insert = "INSERT INTO `commentaires` (`de`, `tuto`, `message`) VALUES ('$de' , '$tuto' , '$comment')";
                    $send = mysqli_query($conn , $insert);
                    if($send){
                        ?>
                        <meta http-equiv="Refresh" content="0; url= index.php?type=singletuto&id=<?php echo $id?>#comments" />
                            <?php 
                    }
                            }
                                                ?>
                                                
                                                    <div class="comment-form">
                                        <h4>Rediger un commentaire
                                        <?php
                                    if(!isset($_SESSION['id'])){
                                        echo '<p> vous n\'etes pas connecté ,vous ne recevrez donc pas de notification en cas de réponse a votre commentaire | <a href = "../login">connexion</a> </p>';
                                    }else{
                                        echo '<p>Vous êtes sur le point de poster un commentaire en tant que <i class="far fa-user"></i> '.$_SESSION['username'].'</p>';
                                    }
                                    ?>
                                        </h4>
                                   
                                        <form class="form-contact comment_form" action="#" id="commentForm" >
                                            <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                <textarea class="form-control w-100" name="comment" id="cVYUomment" cols="30" rows="9" placeholder="Votre commentaire..." required></textarea>
                                                </div>
                                            </div>
                                            <input type = "hidden" name = "type" value = "singletuto">
                                            <input type = "HIDDEN" name = "id" value = "<?php echo $id ?>">
                                            </div>
                                            <div class="form-group">
                                            <button type="submit" class="button btn_1 button-contactForm">
                                                Publier
                                            </button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                    <?php 
                                    require('../phpinclude/leftnav.php');
                                    ?>
                            <?PHP
}
if($type == 'tout'){
    $page = '../tuto/?type=tout'; 
        ?>
    <meta name="keywords" content="Web, php , mysql ,coding, coder, pauldb09 , html , css ,debuter en programation , debuter , programmer , tuto php ,tuto web , tutos ,tuto ,comment ,sql"/>
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://tutosduweb.fr/img/bg.jpg">
    <meta property="og:title" content="Tutos du web">
    <meta property="og:description" content="Le site de tutos informatiques">
    <meta property="og:site_name" content="Tutos du web">
    <meta property="og:url" content="https://tutosduweb.fr/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https://tutosduweb.fr/img/b.png">
    <meta name="twitter:title" content="Tutos du web">
    <meta name="twitter:description" content="Le site de tutos informatiques">
    <title>Tutos du web | Tous les tutos</title>
    <?php require('../phpinclude/navbar.php') ?>
    </header>
        <section class="blog_area padding_top">
                <div class="container">
                <div class="section-tittle text-center mb-70">
                    <?php
                    if(isset($_GET['filtre'])){
                        
        $filtre = $_GET['filtre'];
        if($filtre == '1'){
            if(isset($_GET['sf'])){
                $sf= $_GET['sf'];
                if($sf == '1'){
                    echo '<h1>HTML</h1>
                    <p>apprrenez HTML qui est le centre de tous les sites webs actuels</p>';
                    $requeteSQL = "SELECT * FROM `tuto` WHERE `statut` = 'valide' AND `cat` = '1' AND `categorie` = 'html'";
                }
                if($sf == '2'){
                    echo '<h1>PHP</h1>
                    <p>PHP permet d\'effectuer des connexions avec une base de donnee , d\'exploiter les resultats d\'un formulaire.....</p>';
                    $requeteSQL = "SELECT * FROM `tuto` WHERE `statut` = 'valide' AND `cat` = '1' AND `categorie` = 'php' ";
                }
                if($sf == '3'){
                    echo '<h1>CSS</h1>
                    <p>CSS permet de creer une multitude d\'effets sur vos pages web et d\'embellir vos pages</p>';
                    $requeteSQL = "SELECT * FROM `tuto` WHERE `statut` = 'valide' AND `cat` = '1' AND `categorie` = 'css' ";
                }
                if($sf == '4'){
                    echo '<h1>SQL</h1>
                    <p>SQL est le langage utilise pour les base de donnees ,il est asser simple a apprendre</p>';
                    $requeteSQL = "SELECT * FROM `tuto` WHERE `statut` = 'valide' AND `cat` = '1' AND `categorie` = 'sql' ";
                }
            }else{
                $requeteSQL = "SELECT * FROM `tuto` WHERE `statut` = 'valide' AND `cat` = '1'";
                echo '<h1>Web</h1>
                <p>apprenez a maitriser les technologies les plus utilises pour la création de sites  web</p>
                '; 
            }
           
        }
        if($filtre == '2'){
            $requeteSQL = "SELECT * FROM `tuto` WHERE `statut` = 'valide' AND `cat` = '2' ";
        echo '<h1>Discord</h1>
        <p>apprenez a faire un bot discord pour vos serveur</p>
        '; 
        }
        if($filtre == '3'){
            $requeteSQL = "SELECT * FROM `tuto` WHERE `statut` = 'valide' AND `cat` = '3' ";
        echo '<h1>C++</h1>
        <p>Le C++ est le langage de programation le plus utilisé :presque toutes les applications , systemes d\'exploiations ,base de donnees sont en C++</p>
        '; 
        }
        if($filtre == '4'){
            $requeteSQL = "SELECT * FROM `tuto` WHERE `statut` = 'valide' AND `cat` = '4' ";
        echo '<h1>Windows</h1>
        <p>apprenez a maitriser pleinement exel , l\'invite de commandes..</p>
        '; 
        }
      
                    }else{
                        $requeteSQL = "SELECT * FROM `tuto` WHERE `statut` = 'valide' ORDER BY `createur`";
                    
                    ?>
                <h1>Tous les tutos</h2>
            <p>Voici tous les tutos</p>
            <?php
                  
                    }
                    $res = mysqli_query($conn,$requeteSQL);
                  $rows = mysqli_num_rows($res);
                  echo ' '.$rows.' tutos correspondent à ce filtre';
            ?>
        </div>
    <?php
    if($res){
    require('../phpinclude/tutoentity.php');
    }
    ?>
                            </div>
                        </div>
        <?php     
            
require('../phpinclude/leftnav.php'); 
}
 require('../phpinclude/footer.php') ?>