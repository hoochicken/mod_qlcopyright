<?php
/**
 * @package        mod_qlcopyright
 * @copyright      Copyright (C) 2022 ql.de All rights reserved.
 * @author         Mareike Riegel mareike.riegel@ql.de
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

/** @var $position1 */
/** @var $position2 */
/** @var $position3 */
/** @var \Joomla\Registry\Registry $params */

?>
<div class="qlcopyright">
    <?php if (!empty($position1)): ?>
        <span class="position1 <?php echo $params->get('position2', ''); ?>"><?php echo $position1; ?></span>
    <?php endif; ?>
    <?php if (!empty($position2)): ?>
        <span class="position2 <?php echo $params->get('position2', ''); ?>"><?php echo $position2; ?></span>
    <?php endif; ?>
    <?php if (!empty($position3)): ?>
        <span class="position3 <?php echo $params->get('position3', ''); ?>"><?php echo $position3; ?></span>
    <?php endif; ?>
</div>