<?php
/**
 * Sidebar (widgetized areas) HTML markup structure
 *
 * @package     Mich\Sample
 * @since       1.0.0
 * @author      michelVentura
 * @link        https://michelventura.com
 * @license     GNU General Public License 2.0+
 */
namespace Mich\Sample;

/**
 * Unregister sidebar callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_sidebar_callbacks() {
    unregister_sidebar( 'sidebar' );
    unregister_sidebar( 'sidebar-alt' );
}