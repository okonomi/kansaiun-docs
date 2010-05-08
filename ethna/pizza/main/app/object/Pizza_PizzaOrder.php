<?php
/**
 *  Pizza_PizzaOrder.php
 *
 *  @author     okonomi
 *  @package    Pizza
 *  @version    $Id$
 */

/**
 *  Pizza_PizzaOrderManager
 *
 *  @author     okonomi
 *  @access     public
 *  @package    Pizza
 */
class Pizza_PizzaOrderManager extends Ethna_AppManager
{
}

/**
 *  Pizza_PizzaOrder
 *
 *  @author     okonomi
 *  @access     public
 *  @package    Pizza
 */
class Pizza_PizzaOrder extends Ethna_AppObject
{
    /**
     *  property display name getter.
     *
     *  @access public
     */
    function getName($key)
    {
        return $this->get($key);
    }
}

?>
