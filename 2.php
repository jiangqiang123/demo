<?php
    require_once ('./1.php');

    $code = $_GET['code'];
    Weixin::json($code);


?>