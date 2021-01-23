<?php
require('../status.php');
?>
<?php
if(!isset($_GET['q'])){
    echo '{"status":400,"error":"Bad Request","message":"Aucun ID de tuto spécifié."}';
   return;
}else{
    $id = str_replace('\'','&#39;',$_GET['q']);

    $select = "SELECT * FROM `tuto` WHERE  CONCAT(`nom`,`description`,`keyword`) LIKE '%".$id."%'  ORDER BY RAND() LIMIT 1 ";
    $execute = mysqli_query($conn, $select);
    $row = mysqli_num_rows($execute);
    if($execute){

    
    if($row == 0){
        echo '{"status":404,"error":"No found","message":"Aucun tuto trouvé."}';
   return;
    }else{
        $ligne = mysqli_fetch_row($execute);
             
        $idcret = $ligne['5'];
        $requete = "SELECT * FROM `users` WHERE `id` = '$idcret'";
        $execute = mysqli_query($conn, $requete);
        $legna = mysqli_fetch_array($execute);
        $image = 'http://tutos-du-web.ml/'.$ligne['3'].'';
          $des =   str_replace('&#39;','\'',$ligne['9']);
        echo '{"nom":"'. $ligne['1'] .'","description":"'. $des .'","catégorie":"'. $ligne['2'] .'","vues":"'. $ligne['11'] .'","image":"'.$image.'","autheur":"'. $legna['username'] .'","date":"'. $ligne['6'] .'"}';
        return;
    }
}else{
    echo '{"status":500,"error":"Internal server error","message":"Erreur système."}';
    return;
}
}
?>
