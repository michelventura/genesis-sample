<?php
/**
 * Setup your child theme
 *
 * @package     Mich\Sample
 * @since       1.0.0
 * @author      michelVentura
 * @link        https://michelventura.com
 * @license     GNU General Public License 2.0+
 */

/**
 * Add attributes for site-inner element, since we're removing 'content'.
 *
 * @param array $attributes Existing attributes.
 * @return array Amended attributes.
 */
function custom_site_inner_attr( $attributes ) {

	// Add a class of 'inicio' for styling this .site-inner differently
	$attributes['class'] .= ' inicio';
	
	// Add the attributes from .entry, since this replaces the main entry
	$attributes = wp_parse_args( $attributes, genesis_attributes_entry( array() ) );

	return $attributes;
}
add_filter( 'genesis_attr_site-inner', 'custom_site_inner_attr' );

// Build the page
genesis();