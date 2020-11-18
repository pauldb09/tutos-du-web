<?php
if(!$_GET['action']){
  header('location:index.php?action=wiew&device=computer');
}
  if(isset($_POST['type'])){
$type = $_POST['type'];
$id = $_POST['id'];
header('location:index.php?action=rediger&unteraction=add&type='.$type.'&id='.$id.'');
  
}
$loginprotection = 'normal';
require('../status.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" class = "tdwlogoo" href="../img/favicon.png">
  <link rel="icon" type="image/png" href="../img/icone.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
tutos du web | espace personnel
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
          <li class="nav-item active ">
            <a class="nav-link " href="./index.php">
       
              <p>tutos</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./profil.php">
       
              <p>profil</p>
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
   require('nav.php')
   ?>
    
      <?php
          if (isset($_GET['mess'])){;
                        $mess = $_GET['mess'];
                  if($mess == "1"){;
                    echo '<div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">Fermer</i>
                      
                    </button>
                    
                    <span>
                      <b> Succès - </b> Votre tuto a ete crée avec succès ,il sera validé par un administrateur puis publié</span>
                  </div>';
                  }
                  if($mess == "2"){;
                    echo '<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      Echec de la requete ,veuillez contacter un administrateur <b>(ERREUR 439)</b></span>
                  </div>';
                  }
                  if($mess == "3"){;
                    echo '<div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">Fermer</i>
                      
                    </button>
                    
                    <span>
                      <b> Succès - </b> Opération effectuée avec succès </span>
                  </div>';
                  }
                        }
                  ?>
<?php
$action = $_GET['action'];
if($action == 'rediger'){
  if(!isset($_GET['id'])){
    header('location:index.php?action=wiew');
  }else{
    $id = $_GET['id'];
    $requete = "SELECT * FROM `tuto` WHERE `id` = '$id'";
    $res = mysqli_query($conn , $requete);
    if($res){
        $rows = mysqli_fetch_array($res);
            }
          }

          //--------------REDIGER TUTO--------------------------\\
          
          if (isset($mess)){;

        if($mess == "10"){;
        echo '<div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="material-icons">Fermer</i>

        </button>

        <span>
        <b> Succes - </b> Action effectuee avec succes</span>
        </div>';
        }
        if($mess == "2"){;
        echo '<div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="material-icons">close</i>
        </button>
        <span>
        Echec de la creation du formulaire ,veuillez contacter un administrateur <b>(ERREUR 439)</b></span>
        </div>';
        }
          }

          if (isset($_GET['unteraction'])) {
            $unteraction = $_GET['unteraction'];
      if($unteraction == 'modify'){
                    $idtomod = $_GET['tomod'];
              $select = "SELECT * FROM `contenu` WHERE `id_affich` = '$idtomod'";
        
              $fait = mysqli_query($conn , $select);
              $cont = mysqli_fetch_row($fait);
              $typetx = $cont['3'];
              echo $typetx ;
              if($typetx == 'text'){
                $type = "1";
              }
              if($typetx == 'code'){
                $type = "2";
              }
              if($typetx == 'image'){
                        $type = "3";
              }
              if($type == '3'){
                if (isset($_REQUEST['nomf'])){
                          $contenu =  $_REQUEST['contenu'];
                $uniqid = uniqid();
                          $nom = str_replace('\'','&#39;',$_REQUEST['nomf']);
                      $type = $_REQUEST['typeel'];
                    if($type == '1'){
                $contenufinal = '<img src = "'.$contenu.'" class = "grd">';
                    }else{
                $contenufinal = '<img src = "'.$contenu.'" class = "pic">';
                    }
                  $query = "INSERT INTO `contenu`( `id_modif`,`nom`, `type`, `contenu`, `tuto`) VALUES ('$uniqid','$nom' , 'image' , '$contenufinal' , '$id')";
              
                    $result = mysqli_query($conn, $query);
                    if($result){
                        
                      
                      ?>
                  <meta http-equiv="Refresh" content="0; url= index.php?action=rediger&device=computer&mess=10&id=<?php echo $id?>" />
                      <?php 
                          }
                    }
                $nomtype = 'image';
                ?><div class="container-fluid">
                <div class="row">
                  <div class="col-md-8">
                    <div class="card">
                      <div class="card-header card-header-primary">
                        <h4 class="card-title">Modifier <?php echo $ligne['2']?> de <?php echo $rows['nom']?></h4>
                        <p class="card-category">Vous pouvez modifier ici un element</p>
        
                      </div>
                      <div class="card-body">
                      <form>
                      <input type = "hidden" name = "type" value = "3">
                            <input type = "hidden" name = "action" value = "rediger">
                            <input type = "hidden" name = "unteraction" value = "add">
                            <input type = "hidden" name = "id" value = "<?php echo $id ?>">
                            <div class="row">
                              <div class="col-md-5">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Nom</label>
                                  <input type="text" name = "nomf" class="form-control" required>
                                </div>
                              </div>
                            
                            
                              <div class="col-md-5">
                                <div class="form-group">
                                  <label>Type</label>
                                  <select class="form-control"  name = "typeel">
                            <option value = "1" selected>grande image</option>
                            <option value = "2" >petite image</option>
                          
                            </select>  
                                </div>
                              </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                  <label class="bmd-label-floating">contenu</label>
                                  <input type="text" name = "contenu" class="form-control" required>
                                </div>
                              </div>
                            </div>
                          <button type="submit" class="btn btn-primary pull-right">valider</button>
                          <div class="clearfix"></div>
                        </form>
                      </div>
                    </div>
                  </div>
                <?php
              }
            if($type == '1'){
              if (isset($_REQUEST['nom'])){
                        $contenufinal =  str_replace('\'','&#39;',$_REQUEST['contenu']);
              $uniqid = uniqid();
                        $nom =  str_replace('\'','&#39;',$_REQUEST['nom']);
                    $type = $_REQUEST['typeel'];
              
              
                $query = "UPDATE `contenu` SET `nom` = '$nom' , `contenu` = '$contenufinal' WHERE `id_affich` = '$idtomod'";
       
                  $result = mysqli_query($conn, $query);
                  if($result){
                      
                    
                    ?>
                <meta http-equiv="Refresh" content="0; url= index.php?action=rediger&device=computer&mess=10&id=<?php echo $id?>" />
                    <?php 
                        }
                  }
              $nomtype = 'texte';
              ?><div class="container-fluid">
              <div class="row">
                <div class="col-md-8">
                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title">Modifier <?php echo $cont['2']?> de <?php echo $rows['nom']?></h4>
                      <p class="card-category">Vous pouvez modifier ici un element</p>

                    </div>
                    <div class="card-body">
                    <form>
                    <input type = "hidden" name = "tomod" value = "<?php echo $idtomod ?>">
                          <input type = "hidden" name = "action" value = "rediger">
                          <input type = "hidden" name = "unteraction" value = "modify">
                          <input type = "hidden" name = "id" value = "<?php echo $id ?>">
                          <div class="row">
                            <div class="col-md-5">
                              <div class="form-group">
                                <label class="bmd-label-floating">Nom</label>
                                <input type="text" name = "nom" value = "<?php echo $cont['2']?>" class="form-control" required>
                              </div>
                            </div>
                          
                          
                            <div class="col-md-5">
                              <div class="form-group">
                                <label>Type</label>
                                <select class="form-control"  name = "typeel">
                          <option value = "1">texte normal</option>
                          <option value = "2">Remarque</option>
                        
                          </select>  
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>contenu</label>
                                <div class="form-group">
                                  
                                  <textarea class="form-control" name = "contenu" rows="9" ><?php echo $cont['4']?></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        <button type="submit" class="btn btn-primary pull-right">valider</button>
                        <div class="clearfix"></div>
                      </form>
                    </div>
                  </div>
                </div>
              <?php
            }
            if($type == '2'){
                        if (isset($_REQUEST['nomcode'])){
                          $contenu =  str_replace('\'','&#39;',$_REQUEST['contenu']);
                $unikid = uniqid();
                          $nomc =  str_replace('\'','&#39;',$_REQUEST['nomcode']);
                      $langage = $_REQUEST['code'];
                  
                $contenufinal = '<pre class="brush:'.$langage.'">'.$contenu.'</pre>';
                    
                    $query = "INSERT INTO `contenu`( `id_modif`,`nom`, `type`, `contenu`, `tuto`) VALUES ('$unikid','$nomc' , 'codelel' , '$contenufinal' , '$id')";
              
                      $result = mysqli_query($conn, $query);
                      if($result){
                          
                        
                        ?>
                    <meta http-equiv="Refresh" content="0; url= index.php?action=rediger&device=computer&mess=10&id=<?php echo $id?>" />
                        <?php 
                            }
                      }
                  $nomtype = 'texte';
                  ?><div class="container-fluid">
                  <div class="row">
                    <div class="col-md-8">
                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title">Modifier <?php echo $cont['2']?> de <?php echo $rows['nom']?></h4>
                      <p class="card-category">Vous pouvez rediger ici un element</p>

                    </div>
                    <div class="card-body">
                    <form>
                    <input type = "hidden" name = "type" value = "2">
                          <input type = "hidden" name = "action" value = "rediger">
                          <input type = "hidden" name = "unteraction" value = "add">
                          <input type = "hidden" name = "id" value = "<?php echo $id ?>">
                          <div class="row">
                            <div class="col-md-5">
                              <div class="form-group">
                                <label class="bmd-label-floating">Nom</label>
                                <input type="text" name = "nomcode" class="form-control" required>
                              </div>
                            </div>
                          
                          
                            <div class="col-md-5">
                              <div class="form-group">
                                <label>langage du code</label>
                                <select class="form-control"  name = "code">
                          <option value = "html">html</option>
                          <option value = "css">css</option>
                          <option value = "php">php</option>
                          <option value = "sql">sql</option>
                          <option value = "js">javascript</option>
                          </select>  
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>contenu</label>
                                <div class="form-group">
                                  
                                  <textarea class="form-control" name = "contenu" rows="9"></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        <button type="submit" class="btn btn-primary pull-right">valider</button>
                        <div class="clearfix"></div>
                      </form>
                    </div>
                  </div>
                </div>
              <?php
                    }
            
          
            }
            if($unteraction == 'add'){
                        
                          if(!isset($_GET['type'])){
                          
                          ?>
                          
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-md-8">
                                <div class="card">
                                  <div class="card-header card-header-primary">
                                    <h4 class="card-title">Ajouter un element pour <?php echo $rows['nom']?></h4>
                                    <p class="card-category">Commencez par choisir le type d'élement</p>
                    
                                  </div>
                                  <div class="card-body">
                                    <form method = "POST">
                                    <input type = "hidden" name ="unteraction" value = 'add'>
                                    <input type = "hidden" name ="action" value = 'rediger'>
                                    <input type = "hidden" name ="id" value = '<?php echo $id?>'>
                                      <div class="row">
                                      
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label>type</label>
                                            <select class="form-control"  name = "type">
                                      <option value = "1">Texte</option>
                                      <option value = "2">Code</option>
                                      <option value = "3">Image</option>
                                      <option value = "4">vidéo</option>
                                      </select>  
                                          </div>
                                        </div>
                                      </div>
                                      <button type="submit" class="btn btn-primary pull-right">Commencer a rediger</button>
                                      <div class="clearfix"></div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                              <?php
                                
                  }else{
                    $type = $_GET['type'];
                    if($type == '3'){
                      if (isset($_REQUEST['nomf'])){
                                $contenu =  $_REQUEST['contenu'];
                      $uniqid = uniqid();
                                $nom = str_replace('\'','&#39;',$_REQUEST['nomf']);
                            $type = $_REQUEST['typeel'];
                          if($type == '1'){
                      $contenufinal = '<img src = "'.$contenu.'" class = "grd">';
                          }else{
                      $contenufinal = '<img src = "'.$contenu.'" class = "pic">';
                          }
                        $query = "INSERT INTO `contenu`( `id_modif`,`nom`, `type`, `contenu`, `tuto`) VALUES ('$uniqid','$nom' , 'image' , '$contenufinal' , '$id')";
                    
                          $result = mysqli_query($conn, $query);
                          if($result){
                              
                            
                            ?>
                        <meta http-equiv="Refresh" content="0; url= index.php?action=rediger&device=computer&mess=10&id=<?php echo $id?>" />
                            <?php 
                                }
                          }
                      $nomtype = 'image';
                      ?><div class="container-fluid">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="card">
                            <div class="card-header card-header-primary">
                              <h4 class="card-title">Ajouter un element de type <?php echo $nomtype?> pour <?php echo $rows['nom']?></h4>
                              <p class="card-category">Vous pouvez rediger ici un element</p>
              
                            </div>
                            <div class="card-body">
                            <form>
                            <input type = "hidden" name = "type" value = "3">
                                  <input type = "hidden" name = "action" value = "rediger">
                                  <input type = "hidden" name = "unteraction" value = "add">
                                  <input type = "hidden" name = "id" value = "<?php echo $id ?>">
                                  <div class="row">
                                    <div class="col-md-5">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Nom</label>
                                        <input type="text" name = "nomf" class="form-control" required>
                                      </div>
                                    </div>
                                  
                                  
                                    <div class="col-md-5">
                                      <div class="form-group">
                                        <label>Type</label>
                                        <select class="form-control"  name = "typeel">
                                  <option value = "1" selected>grande image</option>
                                  <option value = "2" >petite image</option>
                                
                                  </select>  
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-5">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">contenu</label>
                                        <input type="text" name = "contenu" class="form-control" required>
                                      </div>
                                    </div>
                                  </div>
                                <button type="submit" class="btn btn-primary pull-right">valider</button>
                                <div class="clearfix"></div>
                              </form>
                            </div>
                          </div>
                        </div>
                      <?php
                    }
                  if($type == '1'){
                    if (isset($_REQUEST['nom'])){
                              $contenu =  str_replace('\'','&#39;',$_REQUEST['contenu']);
                    $uniqid = uniqid();
                              $nom =  str_replace('\'','&#39;',$_REQUEST['nom']);
                          $type = $_REQUEST['typeel'];
                        if($type == '1'){
                    $contenufinal = '<p class="excert">'.$contenu.'</p>';
                        }else{
                    $contenufinal = '<div class="quote-wrapper">
                    <div class="quotes">
                      '.$contenu.'
                    </div>
                    </div>';
                        }
                      $query = "INSERT INTO `contenu`( `id_modif`,`nom`, `type`, `contenu`, `tuto`) VALUES ('$uniqid','$nom' , 'text' , '$contenufinal' , '$id')";
                
                        $result = mysqli_query($conn, $query);
                        if($result){
                            
                          
                          ?>
                      <meta http-equiv="Refresh" content="0; url= index.php?action=rediger&device=computer&mess=10&id=<?php echo $id?>" />
                          <?php 
                              }
                        }
                    $nomtype = 'texte';
                    ?><div class="container-fluid">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="card">
                          <div class="card-header card-header-primary">
                            <h4 class="card-title">Ajouter un element de type <?php echo $nomtype?> pour <?php echo $rows['nom']?></h4>
                            <p class="card-category">Vous pouvez rediger ici un element</p>

                          </div>
                          <div class="card-body">
                          <form>
                          <input type = "hidden" name = "type" value = "1">
                                <input type = "hidden" name = "action" value = "rediger">
                                <input type = "hidden" name = "unteraction" value = "add">
                                <input type = "hidden" name = "id" value = "<?php echo $id ?>">
                                <div class="row">
                                  <div class="col-md-5">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Nom</label>
                                      <input type="text" name = "nom" class="form-control" required>
                                    </div>
                                  </div>
                                
                                
                                  <div class="col-md-5">
                                    <div class="form-group">
                                      <label>Type</label>
                                      <select class="form-control"  name = "typeel">
                                <option value = "1">texte normal</option>
                                <option value = "2">Remarque</option>
                              
                                </select>  
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>contenu</label>
                                      <div class="form-group">
                                        
                                        <textarea class="form-control" name = "contenu" rows="9"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              <button type="submit" class="btn btn-primary pull-right">valider</button>
                              <div class="clearfix"></div>
                            </form>
                          </div>
                        </div>
                      </div>
                    <?php
                  }
                  if($type == '2'){
                              if (isset($_REQUEST['nomcode'])){
                                $contenu =  str_replace('\'','&#39;',$_REQUEST['contenu']);
                      $unikid = uniqid();
                                $nomc =  str_replace('\'','&#39;',$_REQUEST['nomcode']);
                            $langage = $_REQUEST['code'];
                        
                      $contenufinal = '<pre class="brush:'.$langage.'">'.$contenu.'</pre>';
                          
                          $query = "INSERT INTO `contenu`( `id_modif`,`nom`, `type`, `contenu`, `tuto`) VALUES ('$unikid','$nomc' , 'codelel' , '$contenufinal' , '$id')";
                    
                            $result = mysqli_query($conn, $query);
                            if($result){
                                
                              
                              ?>
                          <meta http-equiv="Refresh" content="0; url= index.php?action=rediger&device=computer&mess=10&id=<?php echo $id?>" />
                              <?php 
                                  }
                            }
                        $nomtype = 'texte';
                        ?><div class="container-fluid">
                        <div class="row">
                          <div class="col-md-8">
                        <div class="card">
                          <div class="card-header card-header-primary">
                            <h4 class="card-title">Ajouter un element de type code pour <?php echo $rows['nom']?></h4>
                            <p class="card-category">Vous pouvez rediger ici un element</p>

                          </div>
                          <div class="card-body">
                          <form>
                          <input type = "hidden" name = "type" value = "2">
                                <input type = "hidden" name = "action" value = "rediger">
                                <input type = "hidden" name = "unteraction" value = "add">
                                <input type = "hidden" name = "id" value = "<?php echo $id ?>">
                                <div class="row">
                                  <div class="col-md-5">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Nom</label>
                                      <input type="text" name = "nomcode" class="form-control" required>
                                    </div>
                                  </div>
                                
                                
                                  <div class="col-md-5">
                                    <div class="form-group">
                                      <label>langage du code</label>
                                      <select class="form-control"  name = "code">
                                <option value = "html">html</option>
                                <option value = "css">css</option>
                                <option value = "php">php</option>
                                <option value = "sql">sql</option>
                                <option value = "js">javascript</option>
                                </select>  
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>contenu</label>
                                      <div class="form-group">
                                        
                                        <textarea class="form-control" name = "contenu" rows="9"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              <button type="submit" class="btn btn-primary pull-right">valider</button>
                              <div class="clearfix"></div>
                            </form>
                          </div>
                        </div>
                      </div>
                    <?php
                          }
                  
                
                  ?>
                    
                
                  <?php
                }
  }
     }
       
            ?>
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Organisation de <?php echo $rows['nom']?> </h4>
                  <p class="card-category"> Voici tous les élements de ce tuto,vous pouvez les modifier ou en ajouter d'autres </p>
                 
              <a href = "index.php?action=rediger&unteraction=add&id=<?php echo $id?>">    <button action = "addform.php" href = "addform.php" class="btn btn-primary pull-right">Nouvel élement</button></a>
                 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                      nom
                        </th>
                        <th>
                   type
                        </th>
                        <th>
               ordre d'affichage
                        </th>
                        <th>
                        Modifier
                        </th>
                       
                       
                        <th>
                        supprimer
                        </th>
                      </thead>
                      <tbody>
                      <?php
            
	
           
            if(isset($_POST['delete'])){
              $nom = $_POST['nom'];
              $query = "DELETE FROM `contenu` WHERE `id_modif` = '$nom' ";
              $resulte = mysqli_query($conn,$query);
           
             
           
            }
            $me = $_SESSION['id'];
            $requeteSQL = " SELECT * FROM `contenu` WHERE `tuto` = '$id' ";
     
            $res = mysqli_query($conn,$requeteSQL);
            if($res){
             
                  while($ligne = mysqli_fetch_row($res)){;
   
                echo '
                        <tr>
                       
                         
                          <td>
                            '.$ligne['2'].' 
                          </td>
                          <td>
                            '.$ligne['3'].'
                          </td>
                          <td>
                          '.$ligne['0'].'
                        </td>
                          <td>
                          <form>
                        <a href = "index.php?action=rediger&unteraction=modify&id='.$id.'&tomod='.$ligne['0'].'"> <input type = "button" value = "Modifier"></a>
                         </form>
                          </td>
                          
                          <td>
                         <form method = "POST">
                         <input type = "hidden" name = "nom" value = "'.$ligne['1'].'">
                         <input type = "submit" value = "supprimer" name = "delete">
                         </form>
                          </td>
                        </tr>';
                  }
                }
                $rows = mysqli_num_rows($res);
                if($rows == 0){
                  echo '<tr>
                  <td>
                  <p>Il n\'y a encore aucun element dans ce tuto mais n\'hésithez pas à en ajouter un  <a href = "index.php?action=rediger&unteraction=add&id=<?php echo $id?>">ici</a></p>
                  </td>
                  </tr>';
                }
                
     
   ?>
           </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      </div>
      
      </div>
      </div>
      
      </div>
<?php }  

if ($action == 'wiew') {
   
    ?>
        <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Vos tutos | <a href = "../public">voir tous les tutos ➡</a></h4>
                  <p class="card-category"> Voici la liste de tous vos tutos.</p>
                 
              <a href = "index.php?action=add">    <button action = "addform.php" href = "addform.php" class="btn btn-primary pull-right">Creer nouveau Tuto</button></a>
                 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                      nom
                        </th>
                        <th>
                     categories
                        </th>
                        <th>
                Statut
                        </th>
                        <th>
                        Modifier
                        </th>
                        <th>
                        Rediger
                        </th>
                       
                        <th>
                        supprimer
                        </th>
                      </thead>
                      <tbody>
                      <?php
            
	
           
            if(isset($_POST['delete'])){
              $nom = $_POST['nom'];
              $query = "DELETE FROM `tuto` WHERE `id` = '$nom' ";
              $resulte = mysqli_query($conn,$query);
           
              $champs = "DELETE FROM `contenu` WHERE `tuto` = '$nom' ";
              $result = mysqli_query($conn,$champs);
            if($resulte){
              ?>
              <meta http-equiv="Refresh" content="0; url= index.php?action=wiew&device=computer&mess=3" />
                  <?php 
                  
            }
            }
            $me = $_SESSION['id'];
            $requeteSQL = " SELECT * FROM `tuto` WHERE `createur` = '$me' ";
     
            $res = mysqli_query($conn,$requeteSQL);
            if($res){
             
                  while($ligne = mysqli_fetch_row($res)){;
   
                echo '
                        <tr>
                       
                         
                          <td>
                          <a href ="index.php?action=rediger&id='.$ligne['0'].'">     '.$ligne['1'].' </a>
                          </td>
                          <td>
                            '.$ligne['2'].'
                          </td>
                          <td>
                          '.$ligne['8'].'
                        </td>
                          <td>
                          <form>
                        <a href = "index.php?action=moodify&id='.$ligne['0'].'"> <input type = "button" value = "Modifier"></a>
                         </form>
                          </td>
                          <td>
                          <form>
                        <a href = "index.php?action=rediger&id='.$ligne['0'].'"> <input type = "button" value = "Rediger"></a>
                         </form>
                          </td>
                          <td>
                         <form method = "POST">
                         <input type = "hidden" name = "nom" value = "'.$ligne['0'].'">
                         <input type = "submit" value = "supprimer" name = "delete">
                         </form>
                          </td>
                        </tr>';
                  }
                }
                $rows = mysqli_num_rows($res);
                if($rows == 0){
                  echo '<tr>
                  <td>
                  <p>Vous n\'avez encore crée aucun tuto , vous pouvez en creer un <a href = "index.php?action=add">ici</a></p>
                  </td>
                  </tr>';
                }
   ?>
           </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      </div>
      
      </div>
      </div>
      
      </div>
<?php }  
if ($action == 'add') {
  if(!isset($_SESSION['username'])){
    
  }
        if (isset($_REQUEST['nom'])){
          $nom =  str_replace('\'','&#39;',$_REQUEST['nom']);
          $categorie = $_REQUEST['categorie'];
      $image = $_REQUEST['image'];
      $codecp = $_REQUEST['codecp'];
      $createur = $_SESSION['id'];
      $cat = $_REQUEST['cat'];
          $query = "INSERT INTO `tuto`( `nom`, `categorie`, `image`, `codecp`,`createur`,`cat`) VALUES ('$nom' , '$categorie' , '$image' , '$codecp' , '$createur' , '$cat')";
            $result = mysqli_query($conn, $query);
            if($result){
                
              
              ?>
          <meta http-equiv="Refresh" content="0; url= index.php?action=wiew&device=computer&mess=1" />
              <?php 
                  }else{
                    ?>
          <meta http-equiv="Refresh" content="0; url= index.php?action=wiew&device=computer&mess=2" />
              <?php 
                  } 
            }
        
        ?>
                            <?php
                        if (isset($mess)){;

                  if($mess == "2"){;
                    echo '<div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">Fermer</i>
                      
                    </button>
                    
                    <span>
                      <b> Succes - </b> Message envoye avec succes</span>
                  </div>';
                  }
                  if($mess == "1"){;
                    echo '<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      Echec de la creation du formulaire ,veuillez contacter un administrateur <b>(ERREUR 439)</b></span>
                  </div>';
                  }
                        }
                  ?>
             
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="card">
                        <div class="card-header card-header-primary">
                          <h4 class="card-title">Ajouter un tuto</h4>
                          <p class="card-category">Vous pouvez ajouter ici un tuto </p>
          
                        </div>
                        <div class="card-body">
                          <form>
                            <input type = "hidden" name = "action" value = "add">
                            <div class="row">
                              <div class="col-md-5">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Nom</label>
                                  <input type="text" name = "nom" class="form-control" required>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label class="bmd-label-floating"> sous Categorie</label>
                                  <input type="text" name = "categorie" class="form-control" required>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Image</label>
                                  <input type="text" name = "image" class="form-control" required>
                                </div>
                              </div>
                            </div>
                           
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="bmd-label-floating">code complet</label>
                                  <input type="text" name = "codecp" class="form-control">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>categorie</label>
                                  <select class="form-control"  name = "cat">
                            <option value = "1">Web</option>
                            <option value = "2">Discord</option>
                            <option value = "3">C++</option>
                            <option value = "4">Windows</option>
                            </select>  
                                </div>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Ajouter un formulaire</button>
                            <div class="clearfix"></div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <?php
}
if ($action == 'moodify') {
          $id = $_GET['id'];
          $select = "SELECT * FROM `tuto` WHERE `id` = '$id' ";
          $resultat = mysqli_query($conn ,$select);
          $ligne = mysqli_fetch_row($resultat);
            if (isset($_REQUEST['nom'])){
              $nom =  str_replace('\'','&#39;',$_REQUEST['nom']);
              $categorie = $_REQUEST['categorie'];
          $image = $_REQUEST['image'];
    
          $date = $_REQUEST['date'];
          $des =  str_replace('\'','&#39;',$_REQUEST['des']);
          $keys =  str_replace('\'','&#39;',$_REQUEST['keys']);
          $query = "UPDATE `tuto` SET `nom`='$nom',`categorie`='$categorie',`image`='$image',`date`='$date' , `description`='$des' , `keyword` = '$keys' WHERE `id` = '$id' ";

            $result = mysqli_query($conn, $query);
          if($result){
              
            
            ?>
        <meta http-equiv="Refresh" content="0; url= index.php" />
            <?php 
                }else{
                  ?>
                  <meta http-equiv="Refresh" content="0; url= index.php?action=wiew&device=computer&mess=2" />
                      <?php 
                } 
          }

        ?>
    
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Modifier <strong><?php echo $ligne['1'] ?></strong></h4>
                <p class="card-category">Vous pouvez modifier ici ce tuto </p>

              </div>
              <div class="card-body">
                <form>
                <input type = "hidden" name = "id" value = "<?php echo $id ?>">
                  <input type = "hidden" name = "action" value = "moodify">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label class="bmd-label-floating">Nom</label>
                        <input type="text" name = "nom" value = "<?php echo $ligne['1']?>" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating"> sous Categorie</label>
                        <input type="text" name = "categorie" value = "<?php echo $ligne['2']?>" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Image</label>
                        <input type="text" name = "image" value = "<?php echo $ligne['3']?>" class="form-control" required>
                      </div>
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Mots clés</label>
                        <input type="text" name = "keys" value = "<?php echo $ligne['10']?>" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Date</label>
                        <input type="date" name = "date" value = "<?php echo $ligne['6']?>" class="form-control" required>
                      </div>
                    </div>
        </div>
                    <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Description</label>
                      <div class="form-group">
                        
                        <textarea class="form-control" name = "des" rows="5"><?php echo $ligne['9']?></textarea>
                      </div>
                    </div>
                  </div>
                
                    </div>
                  <button type="submit" class="btn btn-primary pull-right">Modifier ce tuto</button>
                  <div class="clearfix"></div>
                </form>
              </div>
            </div>
          </div>
<?php
}
  ?>
   
  </div>
  </div>
     <?php
     require('report.php')
     ?> 
  
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