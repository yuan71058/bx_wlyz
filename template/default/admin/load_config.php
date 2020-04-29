<?php

if (!defined('BX_ROOT')) {
    exit();
}

use core\lib\Template;

$mod = isset($_GET['mod']) ? $_GET['mod'] : '';
require Template::load('header.php');
$view = array('agent', 'software', 'user', 'card', 'safe', 'template', 'plugin');
if (in_array($mod, $view)) {
    require Template::load("main_{$mod}.php");
} else {
    require Template::load('main.php');
}
require Template::load('footer.php');

?>