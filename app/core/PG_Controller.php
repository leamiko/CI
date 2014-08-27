<?php 
	abstract class PG_Controller extends CI_Controller{
		function __construct(){
			parent::__construct();
			session_start();
			$this->load->library('smarty');
		}
		function smarty_initialize($name){
			$smarty = array(
				'cache_dir'=>'theme/'.$name.'/cache',
				'compile_dir'=>'theme/'.$name.'/compile',
				'template_dir'=>'theme/'.$name.'/template'
			);
			$app = array(
				'host'=>array(
					'url'=>base_url(),
					'dir'=>realpath(FCPATH)
				),
				'root'=>array(
					'url'=>end(explode($_SERVER['SERVER_NAME'],base_url()))
				),
				'theme'=>array(
					'url'=>base_url().str_replace('cache','',$smarty['cache_dir']),
					'dir'=>realpath(FCPATH.str_replace('cache','',$smarty['cache_dir']))
				)
			);
			foreach($smarty as $key=>$value){
				$app['smarty'][$key] = realpath(FCPATH.$value);
			}
			$this->smarty->initialize($app['smarty']);
			return $app;
		}
	}
	abstract class Index_Controller extends PG_Controller{
		function __construct(){
			parent::__construct();
			$app = $this->smarty_initialize('default');
			$this->smarty->assign('app',$app);
		}
	}
	abstract class Admin_Controller extends PG_Controller{
		function __construct(){
			parent::__construct();
			$app = $this->smarty_initialize('admin');
			$this->smarty->assign('app',$app);
		}
	}
?>