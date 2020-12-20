<?php
   
    class Users{
        
        public function checkAccont($c_userName,$c_passWord){
            $m_dsTheoId = new m_users();
            $check = $m_dsTheoId->checkAccountDB($c_userName,$c_passWord);
            if (!$check)
            {
                return false;
            }else{
                 return true;
            }
        }
        public function getTenUser($c_userName,$c_passWord){
            $m_dsTheoId = new m_users();
            $check = $m_dsTheoId->checkAccountDB($c_userName,$c_passWord);
            foreach($check as $item)
            {
                $tenUser=$item['ten_kh'];
            }
            return $tenUser;
        }
        
        
    }

?>