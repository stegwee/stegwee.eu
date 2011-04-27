<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2003 - 2010, EllisLab, Inc.
 * @since		Version 2.0
 * @filesource
 */

// --------------------------------------------------------------------

/**
 * ExpressionEngine Text Fieldtype Class
 *
 * @package		ExpressionEngine
 * @subpackage	Fieldtypes
 * @category	Fieldtypes
 * @author		ExpressionEngine Dev Team
 * @link		http://
 */
class Hidden_ft extends EE_Fieldtype {

	var $info = array(
		'name'		=> 'Hidden Field',
		'version'	=> '1.0'
	);

	// Parser Flag (preparse pairs?)
	var $has_array_data = FALSE;

	/**
	 * Constructor
	 *
	 * @access	public
	 */
	function __construct()
	{
		parent::EE_Fieldtype();
	}
	
	// --------------------------------------------------------------------
	
	function display_field($data)
	{
		$this->EE->javascript->set_global('publish.hidden_fields', array($this->field_id => $this->field_name));
		return form_hidden($this->field_name, $data);
	}
}

// END Hidden_Ft class

/* End of file ft.hidden.php */
/* Location: ./system/expressionengine/fieldtypes/ft.hidden.php */