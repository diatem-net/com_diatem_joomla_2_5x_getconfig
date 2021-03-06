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

jimport('joomla.application.component.controller');

class Diatem_joomla_2_5x_getconfigController extends JController {

    /**
     * Method to display a view.
     *
     * @param	boolean			$cachable	If true, the view output will be cached
     * @param	array			$urlparams	An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
     *
     * @return	JController		This object to support chaining.
     * @since	1.5
     */
    public function display($cachable = false, $urlparams = false) {
        require_once JPATH_COMPONENT . '/helpers/diatem_joomla_2_5x_getconfig.php';

        parent::display($cachable, $urlparams);

        return $this;
    }

}
