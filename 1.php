<?php

    class Weixin{
        /*
         *  @param  integer $code
         *  return string
         */
        public static function json($code){
            if($code == 'hi'){
                echo "你好";
            }else if($code == 'sorry'){
                echo '对不起';
            }else{
                echo  '没有这个英文';
            }

        }
    }

?>