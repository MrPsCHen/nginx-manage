<?php
    include "../vendor/autoload.php";

    $nginx = new \Doit\NginxManage\nginx();
    var_dump($nginx->output());