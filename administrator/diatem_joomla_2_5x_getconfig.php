<?php
/**
 * @version     0.0.1
 * @package     com_diatem_joomla_2_5x_getconfig
 * @copyright   Copyright (C) 2014. Tous droits réservés.
 * @license     GNU General Public License version 2 ou version ultérieure ; Voir LICENSE.txt
 * @author      Diatem <contact@diatem.net> - http://www.diatem.net/
 */


// no direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_diatem_joomla_2_5x_getconfig')) 
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

$controller	= JController::getInstance('Diatem_joomla_2_5x_getconfig');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
