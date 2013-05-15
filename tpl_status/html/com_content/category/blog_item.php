<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Create a shortcut for params.
$params = &$this->item->params;
$images = json_decode($this->item->images);
$canEdit = $this->item->params->get('access-edit');
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
$info = $this->item->params->get('info_block_position', 0);
JHtml::_('behavior.tooltip');
JHtml::_('behavior.framework');
?>
<div style="margin-top: 25px;"></div>
<div class="row-fluid">
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td>
					<div class="visible-desktop" style="min-width: 350px;"><i class="icon-calendar"></i> Investigated on <?php echo JHtml::_('date', $this->item->created, ('l, j. F Y | H:i')); ?></div>
					<div class="hidden-desktop"><i class="icon-calendar"></i> Investigated on <?php echo JHtml::_('date', $this->item->created, ('d.m.Y | H:i')); ?></div>
				</td>
				<td style="text-align: right;">
					<!-- title as issue !!! -->
					ISSUE: <?php if ($params->get('show_title')) : ?><?php echo $this->escape($this->item->title); ?><?php endif; ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<?php echo $this->item->introtext; ?>
				</td>
			</tr>
		</tbody>
	</table>
</div>