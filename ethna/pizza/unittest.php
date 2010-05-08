<?php
error_reporting(E_ALL);
require_once dirname(__FILE__) . '/main/app/Pizza_Controller.php';

Pizza_Controller::main('Pizza_Controller', array(
    '__ethna_unittest__',
    )
);
?>
