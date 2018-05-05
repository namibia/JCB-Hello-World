<?php
/*----------------------------------------------------------------------------------|  www.vdm.io  |----/
				VDM 
/-------------------------------------------------------------------------------------------------------/

	@version		1.0.0
	@build			25th April, 2018
	@created		20th September, 2017
	@package		Hello World
	@subpackage		hello_world.php
	@author			Llewellyn <https://www.vdm.io>	
	@copyright		Copyright (C) 2015. All Rights Reserved
	@license		GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html
  ____  _____  _____  __  __  __      __       ___  _____  __  __  ____  _____  _  _  ____  _  _  ____ 
 (_  _)(  _  )(  _  )(  \/  )(  )    /__\     / __)(  _  )(  \/  )(  _ \(  _  )( \( )( ___)( \( )(_  _)
.-_)(   )(_)(  )(_)(  )    (  )(__  /(__)\   ( (__  )(_)(  )    (  )___/ )(_)(  )  (  )__)  )  (   )(  
\____) (_____)(_____)(_/\/\_)(____)(__)(__)   \___)(_____)(_/\/\_)(__)  (_____)(_)\_)(____)(_)\_) (__) 

/------------------------------------------------------------------------------------------------------*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Set the component css/js
$document = JFactory::getDocument();
$document->addStyleSheet('components/com_hello_world/assets/css/site.css');
$document->addScript('components/com_hello_world/assets/js/site.js');

// Require helper files
JLoader::register('Hello_worldHelper', dirname(__FILE__) . '/helpers/hello_world.php'); 
JLoader::register('Hello_worldHelperRoute', dirname(__FILE__) . '/helpers/route.php'); 

// import joomla controller library
jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by Hello_world
$controller = JControllerLegacy::getInstance('Hello_world');

// Perform the request task
$jinput = JFactory::getApplication()->input;
$controller->execute($jinput->get('task', null, 'CMD'));

// Redirect if set by the controller
$controller->redirect();