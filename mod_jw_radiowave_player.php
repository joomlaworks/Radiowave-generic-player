<?php
/**
 * @version     1.0
 * @package     Radiowave Generic Player (module)
 * @author      JoomlaWorks - http://www.joomlaworks.net
 * @copyright   Copyright (c) 2006 - 2016 JoomlaWorks Ltd. All rights reserved.
 * @license     GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// JoomlaWorks reference parameters
$mod_name               = "mod_jw_radiowave_player";

// Conventions
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

// API
$mainframe	= JFactory::getApplication();
$document 	= JFactory::getDocument();

// Assign paths
$sitePath 	= JPATH_SITE;
$siteUrl  	= substr(JURI::base(), 0, -1);

// Module parameters
$moduleclass_sfx 	= $params->get('moduleclass_sfx','');
$stream_id 			= $params->get('stream_id','');
$template 			= $params->get('template','Default');

// Add the required behaviour.js file. The initialisation is done in the template.
$document->addScript($siteUrl.'/modules/mod_jw_radiowave_player/includes/scripts/behaviour.js');

// Output content with template
require(JModuleHelper::getLayoutPath($mod_name,$template.DS.'default'));

// END
