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

// ------------------------------------------------------------------------


// We've already extended this library in the other app,
// so instead of maintaining the code in both, we'll just
// do an include and create a small meta class that
// CI can instantiate using the proper prefix.
	
require_once(EE_APPPATH.'core/EE_Lang'.EXT);

 
// ------------------------------------------------------------------------

/**
 * ExpressionEngine Language Class
 *
 * @package		ExpressionEngine
 * @subpackage	Core
 * @category	Core
 * @author		ExpressionEngine Dev Team
 * @link		http://
 */

class Installer_Lang Extends EE_Lang {
	// Yes, it's empty!
}

/* End of file Installer_Lang.php */
/* Location: ./system/expressionengine/installer/libraries/Installer_Lang.php */