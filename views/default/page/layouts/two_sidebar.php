<?php
/**
 * Elgg 2 sidebar layout
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['content'] The content string for the main column
 * @uses $vars['sidebar'] Optional content that is displayed in the sidebar
 * @uses $vars['sidebar_alt'] Optional content that is displayed in the alternate sidebar
 * @uses $vars['class']   Additional class to apply to layout
 */

$class = 'elgg-layout elgg-layout-two-sidebar clearfix';
if (isset($vars['class'])) {
	$class = "$class {$vars['class']}";
}
?>

<div class="<?php echo $class; ?>">
	<div class="elgg-sidebar">
		<?php echo elgg_view('page/elements/sidebar', $vars); ?>
	</div>
	<div class="elgg-body">
		<div class="elgg-head">
			<?php echo elgg_view('page/elements/title', $vars); ?>
		</div>
		<?php 
			// allow page handlers to override the default header
		?>
		<div class="elgg-sidebar-alt">
			<iframe src="//rcm-na.amazon-adsystem.com/e/cm?o=1&p=11&l=ez&f=ifr&linkID=ff55a2b1227ef801dff6ffa485b65a55&t=overridelabs-20&tracking_id=overridelabs-20" width="240" height="600" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
			<?php //echo elgg_view('page/elements/sidebar_alt', $vars); ?>
		</div>
		<div class="elgg-body elgg-main">
			<?php
				// @todo deprecated so remove in Elgg 2.0
				if (isset($vars['area1'])) {
					echo $vars['area1'];
				}
				if (isset($vars['content'])) {
					echo $vars['content'];
				}
			?>
		</div>
	</div>
</div>
