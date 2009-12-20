<?php
/**
 *  Pizza/Order/Done.php
 *
 *  @author     {$author}
 *  @package    Sample250
 *  @version    $Id$
 */

require_once dirname(__FILE__).'/Confirm.php';

/**
 *  pizza_order_done Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Sample250
 */
class Sample250_Form_PizzaOrderDone extends Sample250_Form_PizzaOrderConfirm
{
}

/**
 *  pizza_order_done action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Sample250
 */
class Sample250_Action_PizzaOrderDone extends Sample250_ActionClass
{
    /**
     *  preprocess of pizza_order_done Action.
     *
     *  @access public
     *  @return string    forward name(null: success.
     *                                false: in case you want to exit.)
     */
    function prepare()
    {
        return null;
    }

    /**
     *  pizza_order_done action implementation.
     *
     *  @access public
     *  @return string  forward name.
     */
    function perform()
    {
        if (!Ethna_Util::isDuplicatePost()) {
            $manager =& $this->backend->getManager('pizza');
            $ret = $manager->orderPizza($this->af->get('Pizza'));
            if (Ethna::isError($ret)) {
                $this->ae->addObject($ret);
                return 'pizza_order';
            }
        }

        return 'pizza_order_done';
    }
}

?>
