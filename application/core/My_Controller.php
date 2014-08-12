<?php 
	abstract class My_Controller extends CI_Controller{
		function __construct(){
			session_start();
			parent::__construct();
		}
	}
	abstract class Index_Controller extends My_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library('smarty');
		}
	}
	abstract class Admin_Controller extends My_Controller{
		function __construct(){
			parent::__construct();
		}
	}
?>