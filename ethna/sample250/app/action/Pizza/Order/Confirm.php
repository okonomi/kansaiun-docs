<?php
/**
 *  Pizza/Order/Confirm.php
 *
 *  @author     {$author}
 *  @package    Sample250
 *  @version    $Id$
 */

/**
 *  pizza_order_confirm Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Sample250
 */
class Sample250_Form_PizzaOrderConfirm extends Sample250_ActionForm
{
    /**
     *  @access private
     *  @var    array   form definition.
     */
    var $form = array(
       /*
        *  TODO: Write form definition which this action uses.
        *  @see http://ethna.jp/ethna-document-dev_guide-form.html
        *
        *  Example(You can omit all elements except for "type" one) :
        *
        *  'sample' => array(
        *      // Form definition
        *      'type'        => VAR_TYPE_INT,    // Input type
        *      'form_type'   => FORM_TYPE_TEXT,  // Form type
        *      'name'        => 'Sample',        // Display name
        *  
        *      //  Validator (executes Validator by written order.)
        *      'required'    => true,            // Required Option(true/false)
        *      'min'         => null,            // Minimum value
        *      'max'         => null,            // Maximum value
        *      'regexp'      => null,            // String by Regexp
        *      'mbregexp'    => null,            // Multibype string by Regexp
        *      'mbregexp_encoding' => 'UTF-8',   // Matching encoding when using mbregexp 
        *
        *      //  Filter
        *      'filter'      => 'sample',        // Optional Input filter to convert input
        *      'custom'      => null,            // Optional method name which
        *                                        // is defined in this(parent) class.
        *  ),
        */
        'Pizza[type]' => array(
            'type'        => VAR_TYPE_INT,
            'form_type'   => FORM_TYPE_SELECT,
            'name'        => '種類',

            'required'    => true,
            'option' => array(
                1 => 'きのこチキンマヨネーズ',
                2 => 'ベーコンマッシュルーム',
                3 => 'カルボナーラ',
            ),
        ),
        'Pizza[size]' => array(
            'type'        => VAR_TYPE_INT,
            'form_type'   => FORM_TYPE_RADIO,
            'name'        => 'サイズ',

            'required'    => true,
            'option' => array(
                1 => 'S',
                2 => 'M',
                3 => 'L',
            ),
        ),
        'Pizza[count]' => array(
            'type'        => VAR_TYPE_INT,
            'form_type'   => FORM_TYPE_TEXT,
            'name'        => '数量',

            'required'    => true,
            'min'         => 1,
            'max'         => 5,
        ),
    );

    /**
     *  Form input value convert filter : sample
     *
     *  @access protected
     *  @param  mixed   $value  Form Input Value
     *  @return mixed           Converted result.
     */
    /*
    function _filter_sample($value)
    {
        //  convert to upper case.
        return strtoupper($value);
    }
    */
}

/**
 *  pizza_order_confirm action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Sample250
 */
class Sample250_Action_PizzaOrderConfirm extends Sample250_ActionClass
{
    /**
     *  preprocess of pizza_order_confirm Action.
     *
     *  @access public
     *  @return string    forward name(null: success.
     *                                false: in case you want to exit.)
     */
    function prepare()
    {
        if ($this->af->validate() > 0) {
            return 'pizza_order';
        }

        return null;
    }

    /**
     *  pizza_order_confirm action implementation.
     *
     *  @access public
     *  @return string  forward name.
     */
    function perform()
    {
        $this->af->freeze();
        $this->af->setAppNE('hidden_vars', $this->af->getHIddenVars());

        return 'pizza_order_confirm';
    }
}

?>
