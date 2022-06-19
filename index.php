<?php
        header("Content-Type: application/json");
        $arr = array('Client' => array(
                0 => array('host' => $_SERVER['REMOTE_ADDR']),
                1 => array('agent' => $_SERVER['HTTP_USER_AGENT'])
        ));


echo json_encode($arr);
?>
