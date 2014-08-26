<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panel extends Admin_Controller {
	function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->smarty->display('ajax/form-elements.html');
		//$this->smarty->display('dummy.html');
	}
}