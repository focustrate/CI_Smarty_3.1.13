<?php
/**
 * Smarty integration for CI . Build initially for v3.1.13.
 * Config file in application/config/sm.php
 * 
 * @author Michael Zaic <mike.zaic@gmail.com>
 * @version 1.0
 */

include APPPATH . 'third_party/smarty/libs/Smarty.class.php';
 
 
class Sm extends Smarty
{

	/**
	 * Create a new instance
	 */
	function __construct()
	{
        parent::__construct();

        $ci =& get_instance();
        $ci->config->load('sm');
        
        // Any Smarty config overrides here
        $this->setTemplateDir($ci->config->item('smarty_template_dir'));
        $this->setCompileDir($ci->config->item('smarty_compile_dir'));

	}

}
