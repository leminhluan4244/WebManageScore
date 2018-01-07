<?php
    class CheckTool{
        public function checkData($stringCheck){
            if(!isset($_POST[$stringCheck])){
                //thông báo không được rỗng
            }
            else return true;
        }
    }
?>