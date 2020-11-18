<div class="row">
              <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
<?php
while($ligne = mysqli_fetch_row($res)){;
                    $idcret = $ligne['5'];
                    $requete = "SELECT * FROM `users` WHERE `id` = '$idcret'";
                    $execute = mysqli_query($conn, $requete);
                    $legna = mysqli_fetch_array($execute);
                    $cret = $legna['username'];
                    $id = $ligne['0'];
                    $select = "SELECT * FROM `commentaires` WHERE `tuto` = '$id'";
                    $do = mysqli_query($conn ,$select);
                    if($do){
                    $nbcomm = mysqli_num_rows($do);
                    
                    if($nbcomm == 1){
               $kom = '1 commentaire';
           }
           if($nbcomm == 0){
            $kom = 'aucun commentaire';
           } 
           if($nbcomm > 1){
            $kom = ''.$nbcomm.' commentaires';
           } 
                 }
                   
                echo ' 
                                <article class="blog_item">
                                    <div class="blog_item_img">
                                    <a href = "../tuto/?type=singletuto&id='.$ligne['0'].'">
                                        <img class="imgtit" src="'.$ligne['3'].'" alt="">
                                        <a  class="blog_item_date">
                                            <h3>'.$ligne['2'].'</h3>
                                            
                                        </a>
                                    </div>

                                    <div class="blog_details">
                                        <a class="d-inline-block" href="../tuto/?type=singletuto&id='.$ligne['0'].'">
                                            <h2>'.$ligne['1'].'</h2>
                                        </a>
                                        <p>'.$ligne['9'].'</p>
                                        <ul class="blog-info-link">
                                            <li><a href="../profil/?id='.$legna['id'].'"><i class="far fa-user"></i> '.$cret.'</a></li>
                                            <li><a href="#"><i class="far fa-calendar"></i>'.$ligne['6'].'</a></li>
                                        </ul>
                                    </div>
                                </article>
                                ';
                            }
                            $row = mysqli_num_rows($res);
                            if($row == 0){
                              echo ' <div class="section-tittle text-center mb-70"><p>Il n\'y a encore aucun article dans cette categorie ,vous pouvez,si vous connaisez le sujet, en ajouter un <a href = "">ici</a></p></div>';
                  
                                      }