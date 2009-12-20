<?php
// vim: foldmethod=marker
/**
 *  Sample250_ActionForm.php
 *
 *  @author     {$author}
 *  @package    Sample250
 *  @version    $Id$
 */

require_once 'projBop_ActionForm.php';

// {{{ Sample250_ActionForm
/**
 *  ActionForm class.
 *
 *  @author     {$author}
 *  @package    Sample250
 *  @access     public
 */
class Sample250_ActionForm extends projBop_ActionForm
{
    /**#@+
     *  @access private
     */

    /** @var    array   form definition (default) */
    var $form_template = array();

    /**#@-*/

    /**
     *  Error handling of form input validation.
     *
     *  @access public
     *  @param  string      $name   form item name.
     *  @param  int         $code   error code.
     */
    function handleError($name, $code)
    {
        return parent::handleError($name, $code);
    }

    /**
     *  setter method for form template.
     *
     *  @access protected
     *  @param  array   $form_template  form template
     *  @return array   form template after setting.
     */
    function _setFormTemplate($form_template)
    {
        return parent::_setFormTemplate($form_template);
    }

    /**
     *  setter method for form definition.
     *
     *  @access protected
     */
    function _setFormDef()
    {
        return parent::_setFormDef();
    }

}
// }}}

?>
