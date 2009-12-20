<?php
/**
 *  Sample250_PizzaManager.php
 *
 *  @author     {$author}
 *  @package    Sample250
 *  @version    $Id$
 */

/**
 *  Sample250_PizzaManager
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Sample250
 */
class Sample250_PizzaManager extends Ethna_AppManager
{
    public function orderPizza($data)
    {
        $pizza = $this->backend->getObject('pizza');
        $pizza->set('type', $data['type']);
        $pizza->set('size', $data['size']);
        $pizza->set('count', $data['count']);
        return $pizza->replace();
    }
}
?>
