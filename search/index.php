<?php
   if(!isset($_GET['q'])){
header('location:../index.php');
   }
   $q = htmlspecialchars($_GET['q']);
   $page = '../search/?q='.$q.'';
require('../status.php')
?>
<!DOCTYPE html PUBLIC>
<html class="no-js" lang="fr">
<head>  
<title>Tutos du web | résultats de la recherche</title>
<?php require('../phpinclude/navbar.php');

$search = "SELECT * FROM `tuto` WHERE  CONCAT(`nom`,`description`,`keyword`) LIKE '%".$q."%' ORDER BY `date` DESC";
$res = mysqli_query($conn,$search);
$rows = mysqli_num_rows($res);
if($rows == '0'){
 
}
if($res){
?><section class="blog_area padding_top">
     <div class="container">
                 <h3>Résultats de la recherche dans les tutos pour "  <?php echo $q ?> "
                 <?php
                  $rows = mysqli_num_rows($res);
                  echo ' <p>'.$rows.' résultats trouvées</p>';    
            ?></h3>
                            <?php

require('../phpinclude/tutoentity.php');
                
                }
                ?>
           
                 <h3>Résultats de la recherche dans les utilisateurs pour "  <?php echo $q ?> "
                 <?php
                    $searchusers = "SELECT * FROM `users` WHERE CONCAT(`username`,`description`)  LIKE '%".$q."%'";
                    $resusers = mysqli_query($conn,$searchusers);
                  $rows = mysqli_num_rows($resusers);
                  echo ' <p>'.$rows.' résultats trouvées</p>';    
            ?></h3>
           
                
                  
<?php
while($ligne = mysqli_fetch_row($resusers)){;
                   
                   
                echo ' 
                                <article class="blog_item">
                                    <div class="blog_item_img">
                                    <a href = "../profil/?id='.$ligne['0'].'">
                                        <img class="imgtit" src="'.$ligne['3'].'" alt="">
                                        
                                    </div>

                                    <div class="blog_details">
                                        <a class="d-inline-block" href="../profil/?id='.$ligne['0'].'   ">
                                            <h2>'.$ligne['1'].'</h2>
                                        </a>
                                        <p>'.$ligne['8'].'</p>
                                        <ul class="blog-info-link">
                                            <li><i class="far fa-user"></i> '.$ligne['6'].'</a></li>
                                            <li></i>'.$ligne['10'].'</a></li>
                                        </ul>
                                    </div>
                                </article>
                                ';
                            }
                            $row = mysqli_num_rows($resusers);
                            if($row == 0){
                              echo ' <div class="section-tittle text-center mb-70"><h5>Aucun utilisateur trouvé</h5></div>';
                  
                                      }
                 ?>
                </div>
                </div>
                <?php
                require('../phpinclude/leftnav.php')
        ?>
            </div>
        </div>
        </div>
        </div>
        <?php require('../phpinclude/footer.php') ?>