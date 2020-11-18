<?php
  session_start();
  if(session_destroy())
  {
    if(isset($_GET['url'])){
      $url = $_GET['url'];
      if($url == 'singletuto'){
        $idtut = $_GET['id'];
       $url= '../tuto/?type=singletuto&id='.$idtut.'';
      }
      header("Location:$url");
    }else{
      header("Location:../index.php");
    }
   
  }
?>