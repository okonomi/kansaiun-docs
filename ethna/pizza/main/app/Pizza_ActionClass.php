<?php
// vim: foldmethod=marker
/**
 *  Pizza_ActionClass.php
 *
 *  @author     okonomi
 *  @package    Pizza
 *  @version    $Id$
 */

// {{{ Pizza_ActionClass
/**
 *  action execution class
 *
 *  @author     okonomi
 *  @package    Pizza
 *  @access     public
 */
class Pizza_ActionClass extends Ethna_ActionClass
{
    /**
     *  authenticate before executing action.
     *
     *  @access public
     *  @return string  Forward name.
     *                  (null if no errors. false if we have something wrong.)
     */
    function authenticate()
    {
        return parent::authenticate();
    }

    /**
     *  Preparation for executing action. (Form input check, etc.)
     *
     *  @access public
     *  @return string  Forward name.
     *                  (null if no errors. false if we have something wrong.)
     */
    function prepare()
    {
        return parent::prepare();
    }

    /**
     *  execute action.
     *
     *  @access public
     *  @return string  Forward name.
     *                  (we does not forward if returns null.)
     */
    function perform()
    {
        return parent::perform();
    }
}
// }}}

?>
