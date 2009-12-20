<?php
/**
 *  {$action_name}.php
 *
 *  @author     {$author}
 *  @package    Sample250
 *  @version    $Id$
 */
chdir(dirname(__FILE__));
require_once '{$dir_app}/Sample250_Controller.php';

ini_set('max_execution_time', 0);

Sample250_Controller::main_CLI('Sample250_Controller', '{$action_name}');
?>
