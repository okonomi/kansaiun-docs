<?php
/**
 *  Pizza_Consumer.php
 *
 *  @author     okonomi
 *  @package    Pizza
 *  @version    $Id$
 */

/**
 *  Pizza_ConsumerManager
 *
 *  @author     okonomi
 *  @access     public
 *  @package    Pizza
 */
class Pizza_ConsumerManager extends Ethna_AppManager
{
}

/**
 *  Pizza_Consumer
 *
 *  @author     okonomi
 *  @access     public
 *  @package    Pizza
 */
class Pizza_Consumer extends Ethna_AppObject
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
