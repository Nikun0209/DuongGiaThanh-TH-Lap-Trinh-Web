<?php
    class xe{
        public function danhSachXe(){
            $m_dsXe = new m_xe();
            $ds_Xe = $m_dsXe->doc_xe(); 
            return $ds_Xe;
        }
        public function dsXeTheoId($id_hang){
            $m_dsTheoId = new m_xe();
            $ds_XeTheoId = $m_dsTheoId->docXeTheoId($id_hang);
            return $ds_XeTheoId;
        }
        public function xeTheoId($id_xe){
            $m_dsTheoId = new m_xe();
            $ds_XeTheoId = $m_dsTheoId->docMotXeTheoId($id_xe);
            return $ds_XeTheoId;
        }
        public function timXe($text){
            $m_dsXe = new m_xe();
            $ds_Xe = $m_dsXe->searchXe($text);
            return $ds_Xe; 
        }
    }
?>