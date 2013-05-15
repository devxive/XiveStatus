<?php
/**
 * @version     1.0.7
 * @package     com_xivestatus
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      devXive - research and development <support@devxive.com> - http://devxive.com
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Service_log controller class.
 */
class XivestatusControllerService_log extends JControllerForm
{

    function __construct() {
        $this->view_list = 'service_logs';
        parent::__construct();
    }

}