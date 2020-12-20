<?php
    include('../models/m_lienhe.php');
    class LienHe{
        public function themLienHe($hoten, $email, $noidung){
            $insert = new m_lienhe();
            $insert->insertLH($hoten, $email, $noidung);
            
        }
    }
?>  