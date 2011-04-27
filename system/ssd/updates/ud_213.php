<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine - by EllisLab
 *
 * @package     ExpressionEngine
 * @author      ExpressionEngine Dev Team
 * @copyright   Copyright (c) 2003 - 2010, EllisLab, Inc.
 * @license     http:///user_guide/license.html
 * @link        http://
 * @since       Version 2.0
 * @filesource
 */
 
// ------------------------------------------------------------------------

/**
 * ExpressionEngine Update Class
 *
 * @package     ExpressionEngine
 * @subpackage  Core
 * @category    Core
 * @author      ExpressionEngine Dev Team
 * @link        http://
 */
class Updater {

	var $version_suffix = '';

    function Updater()
    {
        $this->EE =& get_instance();
    }

    function do_update()
    {
		$this->EE->load->library('layout');
		
		$layouts = $this->EE->db->get('layout_publish');
		
		if ($layouts->num_rows() === 0)
		{
			return TRUE;
		}
		
		$layouts = $layouts->result_array();

		foreach ($layouts as &$layout)
		{
			$old_layout = unserialize($layout['field_layout']);

			foreach ($old_layout as $tab => &$fields)
			{
				$field_keys = array_keys($fields);				

				foreach ($field_keys as &$key)
				{
					if ($key == 'channel')
					{
						$key = 'new_channel';
					}
				}

				$fields = array_combine($field_keys, $fields);
			}

			$layout['field_layout'] = serialize($old_layout);

		}
		
		$this->EE->db->update_batch('layout_publish', $layouts, 'layout_id');
		
		return TRUE;
	}
}   
/* END CLASS */

/* End of file ud_213.php */
/* Location: ./system/expressionengine/installer/updates/ud_213.php */