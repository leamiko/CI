<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Smarty Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Smarty
 * @author		Kepler Gelotte
 * @link		http://www.coolphptools.com/codeigniter-smarty
 */
require_once( APPPATH.'third_party/smarty/libs/Smarty.class.php' );

class CI_Smarty extends Smarty {

	function CI_Smarty(){
		parent::Smarty();
	}

	function __construct(){
		parent::__construct();
	}

	function initialize($option=array()){
		if(empty($option)){
			exit('setting smarty dir config option');
		}
		extract($option);
		$this->cache_dir = $cache_dir;
		$this->compile_dir = $compile_dir;
		$this->template_dir = $template_dir;

		// Assign CodeIgniter object by reference to CI
		if ( method_exists( $this, 'assignByRef') ){
			$ci =& get_instance();
			$this->assignByRef("ci", $ci);
		}
	}

	/**
	 *  Parse a template using the Smarty engine
	 *
	 * This is a convenience method that combines assign() and
	 * display() into one step. 
	 *
	 * Values to assign are passed in an associative array of
	 * name => value pairs.
	 *
	 * If the output is to be returned as a string to the caller
	 * instead of being output, pass true as the third parameter.
	 *
	 * @access	public
	 * @param	string
	 * @param	array
	 * @param	bool
	 * @return	string
	 */
	function view($template, $data = array(), $return = FALSE){
		foreach ($data as $key => $val){
			$this->assign($key, $val);
		}
		
		if ($return == FALSE){
			$CI =& get_instance();
			if (method_exists( $CI->output, 'set_output' )){
				$CI->output->set_output( $this->fetch($template) );
			}else{
				$CI->output->final_output = $this->fetch($template);
			}
			return;
		}else{
			return $this->fetch($template);
		}
	}
}
// END Smarty Class
