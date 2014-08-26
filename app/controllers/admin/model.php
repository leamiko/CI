<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends Admin_Controller {
	function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->smarty->display('ajax/model.html');
	}
	public function add(){
		$this->smarty->display('ajax/add_model.html');
	}
	public function edit(){
		$this->smarty->display('ajax/edit_model.html');
	}
}