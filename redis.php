<?php
$redis = new redis();
$result = $redis->connect('127.0.0.1', 6379);
//var_dump($result); //结果：bool(true)

//$result = $redis->set('test',"11111111111");
//var_dump($result);    //结果：bool(true)

//$result = $redis->get('test');
//var_dump($result);

//$redis->set('test',"1111111111111");
//echo $redis->get('test');   //结果：1111111111111
//$redis->delete('test');
//var_dump($redis->get('test'));  //结果：bool(false)

//$redis->set('test',"1111111111111");
//$redis->setnx('test',"22222222");
//echo $redis->get('test');  //结果：1111111111111
//$redis->delete('test');
//$redis->setnx('test',"22222222");
//echo $redis->get('test');  //结果：22222222

//$redis->set('test1',"1");
//$redis->set('test2',"2");
//$result = $redis->getMultiple(array('test1','test2'));
//print_r($result);   //结果：Array ( [0] => 1 [1] => 2 )
//$redis->delete('test');
//var_dump($redis->lpush("test","87654321"));   //结果：int(1)
//var_dump($redis->lpush("test","222"));   //结果：int(2)
//var_dump($redis->lsize("test"));
//var_dump($redis->get('test'));


//                $redis = new \Redis();
//                $redis->connect('127.0.0.1',6379);
//                $password = '123456';
//                $redis->auth($password);
//                foreach ($res['sub_id'] as $v){
//                    $redis->rpush('order_lists',$v);           //排队
//                 }
//                $redis->rpush('order_lists',$res['order_id']);           //排队
//                $message = CodeError::CODEEOOR_COMMON_QUEUING_NAME; //正在排队
//                $code = CodeError::CODEEOOR_COMMON_QUEUING_CODE;




