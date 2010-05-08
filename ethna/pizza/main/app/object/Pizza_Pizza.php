<?php
/**
 *  Pizza_Pizza.php
 *
 *  @author     okonomi
 *  @package    Pizza
 *  @version    $Id$
 */

/**
 *  Pizza_PizzaManager
 *
 *  @author     okonomi
 *  @access     public
 *  @package    Pizza
 */
class Pizza_PizzaManager extends Ethna_AppManager
{
}

/**
 *  Pizza_Pizza
 *
 *  @author     okonomi
 *  @access     public
 *  @package    Pizza
 */
class Pizza_Pizza extends Ethna_AppObject
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
