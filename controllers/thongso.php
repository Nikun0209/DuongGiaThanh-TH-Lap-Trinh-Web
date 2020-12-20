<?php
    include('../models/m_thongso.php');
    class ThongSo{
        
        public function dsThongSoTheoIdXe($id_xe){
            $m_dsTheoId = new m_thongso();
            $ds_ThongSoTheoId = $m_dsTheoId->docThongSoTheoIdXe($id_xe);
            return $ds_ThongSoTheoId;
        }
    }

?>  