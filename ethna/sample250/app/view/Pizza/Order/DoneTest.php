<?php
/**
 *  Pizza/Order/DoneTest.php
 *
 *  @author     {$author}
 *  @package    Sample250
 *  @version    $Id$
 */

/**
 *  pizza_order_done view implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Sample250
 */
class Sample250_View_PizzaOrderDone_TestCase extends Ethna_UnitTestCase
{
    /**
     *  @access private
     *  @var    string  view name.
     */
    var $forward_name = 'pizza_order_done';

    /**
     * initialize test.
     *
     * @access public
     */
    function setUp()
    {
        $this->createPlainActionForm(); // create ActionForm
        $this->createViewClass();       // create View.
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
     *  pizza_order_done preprocess sample testcase.
     *
     *  @access public
     */
    function test_viewSample()
    {
        /*
        // setting form input. 
        $this->af->set('id', 1);

        // pizza_order_done preprocess.
        $this->vc->preforward();
        $this->assertNull($this->af->get('data'));
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
