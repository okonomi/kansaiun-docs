<?php
/**
 *  {$action_name}.php
 *
 *  @author     {$author}
 *  @package    Pizza
 *  @version    $Id$
 */
chdir(dirname(__FILE__));
require_once '{$dir_app}/Pizza_Controller.php';

ini_set('max_execution_time', 0);

Pizza_Controller::main_CLI('Pizza_Controller', '{$action_name}');
?>
