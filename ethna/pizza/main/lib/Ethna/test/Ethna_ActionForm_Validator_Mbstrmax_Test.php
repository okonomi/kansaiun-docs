<?php
// vim: foldmethod=marker
/**
 *  Ethna_ActionForm_Validator_Mbstrmax_Test.php
 *
 *  @author     Yoshinari Takaoka <takaoka@beatcraft.com>
 *  @version    $Id$
 */

// {{{    Ethna_ActionForm_Validator_Mbstrmax_Test
/**
 *  Test Case For Ethna_ActionForm(Max Validator(Multibyte String))
 *
 *  @access public
 */
class Ethna_ActionForm_Validator_Mbstrmax_Test extends Ethna_UnitTestBase
{
    function setUp()
    {
        $this->af->use_validator_plugin = false;
        $this->af->clearFormVars();
        $this->af->form = array();
        $this->ae->clear();
    }

    // {{{ Validator Max Multibyte String. 
    function test_Validate_MbMax_String()
    {
        $form_def = array(
                          'type'          => VAR_TYPE_STRING,
                          'form_type'     => FORM_TYPE_TEXT,
                          'required'      => true,
                          'mbstrmax'      => '3',
                    );        
        $this->af->setDef('input', $form_def);
        
        //   in ascii.
        $this->af->set('input', 'abc'); 
        $this->af->validate();
        $this->assertFalse($this->ae->isError('input'));
        $this->ae->clear();

        $this->af->set('input', 'abcd');
        $this->af->validate();
        $this->assertTrue($this->ae->isError('input'));
        $this->ae->clear();

        $this->af->set('input', 'ab');
        $this->af->validate();
        $this->assertFalse($this->ae->isError('input'));
        $this->ae->clear();

        //   multibyte.
        $this->af->set('input', 'あいう');
        $this->af->validate();
        $this->assertFalse($this->ae->isError('input'));
        $this->ae->clear();

        $this->af->set('input', 'あいうえ');
        $this->af->validate();
        $this->assertTrue($this->ae->isError('input'));
        $this->ae->clear();

        $this->af->set('input', 'あい');
        $this->af->validate();
        $this->assertFalse($this->ae->isError('input'));

        //  TODO: Error Message Test.
    }
    // }}}
}
// }}}

?>
