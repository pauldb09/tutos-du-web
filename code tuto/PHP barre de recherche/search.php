<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="bootstrap.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tutos du Web | barre de recherche</title>
</head>
<body>
   <?php
   //⚠ n'oubliez pas de changer les informations de connexion ⚠
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_NAME', 'tuto');
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($conn === false){
 die("ERREUR : Impossible de se connecter. <h4>⚠ n 'oubliez pas de changer les informations de connexion ⚠</h4> " . mysqli_connect_error());
 echo '<h1>⚠ n\'oubliez pas de changer les informations de connexion ⚠</h1>';
}else{
// la connexion est établie
}
  
if(isset($_GET['q'])){
      $q = htmlspecialchars($_GET['q']);   
      $search = "SELECT * FROM `tuto` WHERE CONCAT( `nom`,`description`) LIKE  '%".$q."%' ";
}else{
   $search = "SELECT * FROM `tuto`";
   $q = "";
}
   ?>
   <form action="" method="GET">
      <div class="row">
   <div class="col-md-3">
      <div class="form-group">
      <input type="search" class="form-control" name="q" value="<?php echo $q ?>">
    
   </div>
     </div>
     <input type="submit" class="btn" value="Recherche">
</div>
   </form>
   <?php
   $result = mysqli_query($conn , $search);
while($ligne = mysqli_fetch_assoc($result)){
   echo '<p--><a href="">'.$ligne['nom'].'</a><p>'.$ligne['description'].'</p><p></p>';
}
   $rows = mysqli_num_rows($result);
if($rows == 0){
   echo 'aucun résultat pour '.$q.'';
}
   ?>
</body>
</html>