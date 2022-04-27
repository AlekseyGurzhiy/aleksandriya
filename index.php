<?php
require_once('app/config/encoding.php');
require_once('app/lib/Dev.php');
require_once('app/core/Router.php');

$router = new Router();
$router->run();
?>