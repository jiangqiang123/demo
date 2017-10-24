<?php
    $xml = <<<xml
<?xml  version= '1.0' encoding='utf-8'?> 
 <xml>
 <ToUserName><![CDATA[toUser]]></ToUserName>
 <FromUserName><![CDATA[fromUser]]></FromUserName>
 <CreateTime>1348831860</CreateTime>
 <MsgType><![CDATA[image]]></MsgType>
 <PicUrl><![CDATA[this is a url]]></PicUrl>
 <MediaId><![CDATA[media_id]]></MediaId>
 <MsgId>1234567890123456</MsgId>
 </xml>
xml;

$obj = simplexml_load_string($xml,'SimpleXMLElement',LIBXML_NOCDATA);
var_dump($obj);

?>