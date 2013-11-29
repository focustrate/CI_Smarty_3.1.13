<?php if (!defined('BASEPATH')) die();
class Smartytest extends Main_Controller {

   public function index()
	{
	    
      $this->load->library('sm');
     
      $this->sm->assign('hello', 'Hello World!');
      $this->sm->display('smarty.tpl');

	}
   
}

/* End of file smarty.php */
/* Location: ./application/controllers/smarty.php */
