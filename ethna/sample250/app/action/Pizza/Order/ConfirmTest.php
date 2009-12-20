<?php
/**
 *  Pizza/Order/ConfirmTest.php
 *
 *  @author     {$author}
 *  @package    Sample250
 *  @version    $Id$
 */

/**
 *  pizza_order_confirm Form testcase.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Sample250
 */
class Sample250_Form_PizzaOrderConfirm_TestCase extends Ethna_UnitTestCase
{
    /**
     *  @access private
     *  @var    string  Action name.
     */
    var $action_name = 'pizza_order_confirm';

    /**
     *  initialize test.
     *
     *  @access public
     */
    function setUp()
    {
        $this->createActionForm();  // create ActionForm.
    }

    /**
     *  clean up testcase.
     *
     *  @access public
     */
    function tearDown()
    {
    }

    /**
     *  pizza_order_confirm ActionForm sample testcase.
     *
     *  @access public
     */
    function test_formSample()
    {
        /*
        // setting form input.
        $this->af->set('id', 1);

        // pizza_order_confirm ActionForm input validation.
        $this->assertEqual($this->af->validate(), 0);
        */

        /**
         *  TODO: write test case! :)
         *  @see http://simpletest.org/en/first_test_tutorial.html
         *  @see http://simpletest.org/en/unit_test_documentation.html
         */
        $this->fail('No Test! write Test!');
    }
}

/**
 *  pizza_order_confirm Action testcase.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Sample250
 */
class Sample250_Action_PizzaOrderConfirm_TestCase extends Ethna_UnitTestCase
{
    /**
     *  @access private
     *  @var    string  Action name.
     */
    var $action_name = 'pizza_order_confirm';

    /**
     * initialize test.
     *
     * @access public
     */
    function setUp()
    {
        $this->createActionForm();  // create ActionForm.
        $this->createActionClass(); // create ActionClass.

        $this->session->start();    // start session.
    }

    /**
     *  clean up testcase.
     *
     *  @access public
     */
    function tearDown()
    {
        $this->session->destroy();   // destroy session.
    }

    /**
     *  pizza_order_confirm ActionClass sample testcase.
     *
     *  @access public
     */
    function test_actionSample()
    {
        /*
        // setting form input.
        $this->af->set('id', 1);

        // Authentication before processing pizza_order_confirm Action.
        $forward_name = $this->ac->authenticate();
        $this->assertNull($forward_name);

        // pizza_order_confirm Action preprocess.
        $forward_name = $this->ac->prepare();
        $this->assertNull($forward_name);

        // pizza_order_confirm Action implementation.
        $forward_name = $this->ac->perform();
        $this->assertEqual($forward_name, 'pizza_order_confirm');
        */

        /**
         *  TODO: write test case! :)
         *  @see http://simpletest.org/en/first_test_tutorial.html
         *  @see http://simpletest.org/en/unit_test_documentation.html
         */
        $this->fail('No Test! write Test!');
    }
}

?>
