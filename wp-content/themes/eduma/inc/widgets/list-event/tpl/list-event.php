<?php
/**
 * Template for displaying default element.
 *
 *
 * @author      ThimPress
 * @package     Thim_Builder/Templates
 * @version     1.0.0
 * @author      Thimpress, tuanta
 */

/**
 * Prevent loading this file directly
 */

defined( 'ABSPATH' ) || exit;
$args                 = array();
$args['before_title'] = '<h3 class="widget-title">';
$args['after_title']  = '</h3>';

$template_path = 'list-event/tpl/';
$layout        = ( isset( $instance['layout'] ) && ! empty( $instance['layout'] ) ) ? $instance['layout'] : 'base';
?>

<?php thim_builder_get_template(
	$layout, array(
	'instance' => $instance,
	'args'     => $args
), $template_path
); ?>
