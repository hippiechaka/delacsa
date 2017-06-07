<?php
  if(!empty($_SESSION['lang'])){
        if ($_SESSION['lang']=="es" || $_SESSION['lang']=="en"){
            $lang=$_SESSION['lang'];
        } else {
            $lang="es";
        }
    }

    if(!empty($_REQUEST['lang'])){
        if ($_REQUEST['lang']=="es" || $_REQUEST['lang']=="en"){
            $lang=$_SESSION['lang']=$_REQUEST['lang'];
        } else {
        }
    }

    if(empty($lang)){
        $lang="es";
        $_SESSION['lang']=$lang;
    } 
?>
<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
  <?php require_once "sections_".$lang."/head".".php"; ?>
  <body>
      <?php require_once "sections_".$lang."/content".".php"; ?>
      <?php require_once "sections_".$lang."/end".".php"; ?>
  </body>
</html>
