<?php
if(!defined('BX_ROOT')) {exit();} use core\lib\Template; $mod = isset($_GET['mod'])?$_GET['mod']:''; require Template::load('header.php'); $view = array('agent','user','card','safe'); if(in_array($mod,$view)){ require Template::load("main_{$mod}.php"); }else{ require template::load('main.php'); } require Template::load('footer.php'); ?>