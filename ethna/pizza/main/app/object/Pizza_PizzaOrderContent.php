<?php
/**
 *  Pizza_PizzaOrderContent.php
 *
 *  @author     okonomi
 *  @package    Pizza
 *  @version    $Id$
 */

/**
 *  Pizza_PizzaOrderContentManager
 *
 *  @author     okonomi
 *  @access     public
 *  @package    Pizza
 */
class Pizza_PizzaOrderContentManager extends Ethna_AppManager
{
}

/**
 *  Pizza_PizzaOrderContent
 *
 *  @author     okonomi
 *  @access     public
 *  @package    Pizza
 */
class Pizza_PizzaOrderContent extends Ethna_AppObject
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
