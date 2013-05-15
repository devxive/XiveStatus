<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$created_origin_format = $item->created;
$created_desktop = date('l, j. F Y | H:i', strtotime($created_origin_format));
$created_phone = date('d.m.Y | H:i', strtotime($created_origin_format));
?>
<div style="margin-top: 25px;"></div>
<div class="row-fluid">
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td>
					<div class="visible-desktop" style="min-width: 350px;"><i class="icon-calendar"></i> Investigated on <?php echo $created_desktop; ?></div>
					<div class="hidden-desktop"><i class="icon-calendar"></i> Investigated on <?php echo $created_phone; ?></div>
				</td>
				<td style="text-align: right;">
					<!-- title as issue !!! -->
					ISSUE: <?php echo $item->title; ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<?php echo $item->introtext; ?>
				</td>
			</tr>
		</tbody>
	</table>
</div>