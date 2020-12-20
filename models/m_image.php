<?php
include_once("../models/database.php");
class m_image extends database{
 
  function docAnhTheoTenXe($id){
    $database = new database();
    $chuoisql = "SELECT img FROM `image` WHERE `id_xe` = ?";
    $database->setQuery($chuoisql);
    return $database->loadAllRows(array($id));
  }
}
?>