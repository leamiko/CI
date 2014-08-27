<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('jump')){
	function jump($uri = ''){
		$CI =& get_instance();
		if($uri !== ''){
			session(array('uri'=>$uri));
		}else{
			redirect(session('uri'));
		}
	}
}
if (!function_exists('session')){
	function session($data = null){
		if(is_array($data)){
			foreach($data as $key=>$value){
				$_SESSION[$key] = $value;
			}
		}else{
			if(is_string($data)){
				return $_SESSION[$data];
			}
			foreach($_SESSION as $key=>$value){
				unset($_SESSION[$key]);
			}
		}
	}
}
?>