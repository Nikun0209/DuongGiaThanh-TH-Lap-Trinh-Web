<?php
    include('../models/m_image.php');
    class image{
        
        public function dsTenAnhTheoIdXe($id_xe){
            $m_dsTheoId = new m_image();
            $ds_TenAnhTheoId = $m_dsTheoId->docAnhTheoTenXe($id_xe);
            return $ds_TenAnhTheoId;
        }
    }

?>