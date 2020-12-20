<?php
include_once("../models/database.php");
class m_lienhe extends database{

  function insertLH($hoten, $email, $noidung){
    $database = new database();
    $chuoisql = "INSERT INTO `lien_he` (`malh`, `ho_ten`, `email`, `noi_dung`) VALUES (NULL, ?, ?, ?)";
    $database->setQuery($chuoisql);
    $database->execute(array($hoten, $email, $noidung)); 
  }
}
?>