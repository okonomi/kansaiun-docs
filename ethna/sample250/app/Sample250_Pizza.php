<?php
/**
 *  Sample250_Pizza.php
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
}

/**
 *  Sample250_Pizza
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Sample250
 */
class Sample250_Pizza extends Ethna_AppObject
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
