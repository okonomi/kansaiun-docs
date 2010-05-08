<?php
/**
 *  Pizza_Shop.php
 *
 *  @author     okonomi
 *  @package    Pizza
 *  @version    $Id$
 */

/**
 *  Pizza_ShopManager
 *
 *  @author     okonomi
 *  @access     public
 *  @package    Pizza
 */
class Pizza_ShopManager extends Ethna_AppManager
{
}

/**
 *  Pizza_Shop
 *
 *  @author     okonomi
 *  @access     public
 *  @package    Pizza
 */
class Pizza_Shop extends Ethna_AppObject
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
