<?php
/**
 * @version     1.0.7
 * @package     com_xivestatus
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      devXive - research and development <support@devxive.com> - http://devxive.com
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

// Execute the task.
$controller	= JControllerLegacy::getInstance('Xivestatus');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
