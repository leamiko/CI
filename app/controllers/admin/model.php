<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends Admin_Controller {
	function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->smarty->display('ajax/model.html');
	}
	public function add(){
		$array['form'] = $this->db->get('form')->result_array();
		$array['model'] = $this->db->select('id,comment,parent')->get('model')->result_array();
		$this->smarty->assign('array',$array);
		$this->smarty->display('ajax/add_model.html');
	}
	public function edit(){
		$this->smarty->display('ajax/edit_model.html');
	}
	public function save(){
		jump('admin/model');
		$ary = array('status'=>'20000','module'=>'model','jump'=>site_url(session('uri')));
		$post = $this->input->post();
		$post['time'] = date('Y-m-d H:i:s');
		$post['fields'] = serialize($post['fields']);
		if(isset($post['id'])){
			$id = intval($post['id']);
			unset($post['id']);
			if($this->db->update('model',$post,array('id'=>$id))){
				$ary['status'] = '10001';
			}else{
				$ary['status'] = '20001';
			}
		}else{
			if($this->db->select('id')->where(array('table'=>$post['table']))->get('model')->num_rows() === 0){
				if($this->db->insert('model',$post)){
					$ary['status'] = '10002';
				}else{
					$ary['status'] = '20002';
				}
			}else{
				$ary['status'] = '20003';
			}
		}
		die(json_encode($ary));
	}
}