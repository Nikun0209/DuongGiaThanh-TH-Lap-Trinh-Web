<?php
class m_xe extends database{
  function doc_xe()  {
    $database = new database();
    $chuoisql = "SELECT * FROM `xe`";
    $database->setQuery($chuoisql);
    return $database->loadAllRows();
  }
  function docXeTheoId($id){
    $database = new database();
    $chuoisql = "SELECT * FROM `xe` WHERE `id_hang` = ?";
    $database->setQuery($chuoisql);
    return $database->loadAllRows(array($id));
  }
  function docMotXeTheoId($id){
    $database = new database();
    $chuoisql = "SELECT * FROM `xe` WHERE `id_xe` = ?";
    $database->setQuery($chuoisql);
    return $database->loadAllRows(array($id));
  }
  function searchXe($text){
    $database = new database();
    $chuoisql = "SELECT * FROM `xe` WHERE ten_xe LIKE '%$text%' " ;
    $database->setQuery($chuoisql);
    return $database->loadAllRows();
  }
}
