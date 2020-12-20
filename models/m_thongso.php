<?php
include_once("../models/database.php");
class m_thongso extends database{
 
  function docThongSoTheoIdXe($id){
    $database = new database();
    $chuoisql = "SELECT * FROM `thong_so` WHERE `id_xe` = ?";
    $database->setQuery($chuoisql);
    return $database->loadAllRows(array($id));
  }
}
?>