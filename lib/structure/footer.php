<?php
/**
 * Footer HTML markup structure
 *
 * @package     Mich\Sample
 * @since       1.0.0
 * @author      michelVentura
 * @link        https://michelventura.com
 * @license     GNU General Public License 2.0+
 */
namespace Mich\Sample;

/**
 * Unregister footer callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_footer_callbacks() {

}

/* Change the footer text */
add_filter('genesis_footer_creds_text', __NAMESPACE__ . '\custom_footer_creds_filter');
function custom_footer_creds_filter( $creds ) {
			$creds = 'Copyright [footer_copyright] <a href="'.get_bloginfo( 'url' ).'">'.get_bloginfo( 'name' ).'</a>.';
			return $creds;
}