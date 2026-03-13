<?php
/**
 * @package        mod_qlcopyright
 * @copyright    Copyright (C) 2026 ql.de All rights reserved.
 * @author        Mareike Riegel mareike.riegel@ql.de
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 */

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Registry\Registry;

// no direct access
defined('_JEXEC') or die;

/** @var Registry $params  */
if ('year0000' == $params->get('year', '')) $yearFormula = 'Y';
elseif ('year00' == $params->get('year', '')) $yearFormula = 'y';
else $yearFormula = false;
for ($i = 1; $i <= 3; $i++) {
    $get = $params->get('position' . $i, '');
    switch ($get) {
        case 'company':
            $value = $params->get('company', '');
            break;
        case 'copy':
            $value = '&copy;';
            break;
        case 'year':
            $value = date($yearFormula);
            break;
        default:
            $value = '';
    }
    unset($get);
    ${'position' . $i} = $value;
}

require ModuleHelper::getLayoutPath('mod_qlcopyright', $params->get('layout', 'default'));