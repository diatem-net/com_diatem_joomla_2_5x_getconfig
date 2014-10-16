<?php

/**
 * @version     0.0.0
 * @package     com_diatem_joomla_2_5x_getconfig
 * @copyright   Copyright (C) 2014. Tous droits réservés.
 * @license     GNU General Public License version 2 ou version ultérieure ; Voir LICENSE.txt
 * @author      Diatem <contact@diatem.net> - http://www.diatem.net/
 */
// No direct access
defined('_JEXEC') or die;

/**
 * Diatem_joomla_2_5x_getconfig helper.
 */
class Diatem_joomla_2_5x_getconfigHelper {

    /**
     * Configure the Linkbar.
     */
    public static function addSubmenu($vName = '') {
        		JSubMenuHelper::addEntry(
			JText::_('COM_DIATEM_JOOMLA_2_5X_GETCONFIG_TITLE_APROPOS'),
			'index.php?option=com_diatem_joomla_2_5x_getconfig&view=apropos',
			$vName == 'apropos'
		);

    }

    /**
     * Gets a list of the actions that can be performed.
     *
     * @return	JObject
     * @since	1.6
     */
    public static function getActions() {
        $user = JFactory::getUser();
        $result = new JObject;

        $assetName = 'com_diatem_joomla_2_5x_getconfig';

        $actions = array(
            'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.own', 'core.edit.state', 'core.delete'
        );

        foreach ($actions as $action) {
            $result->set($action, $user->authorise($action, $assetName));
        }

        return $result;
    }


}
