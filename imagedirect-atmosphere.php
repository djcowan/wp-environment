<?php

declare(strict_types=1);

namespace imageDirect\Atmosphere;

/**
 * Plugin Name:       imageDirect Atmosphere
 * Plugin URI:        <https://www.imagedirect.com.au/>
 * Description:       Get found in the noise.
 * Requires at least: 6.0
 * Requires PHP:      8.0
 * Version:           1.0.0
 * Author:            imageDirect
 * Author URI:        <https://www.imagedirect.com.au/>
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Contributors:      imageDirect WebTeam
 * Text Domain:       imagedirect-atmosphere
 */

defined('ABSPATH') || exit;

/**
 * Static
 * @since   1.0.0
 */
function plugin(): Plugin
{
    static $plugin;

    if (null !== $plugin) {
        return $plugin;
    }

    $plugin = new Plugin();
    return $plugin;
}

/**
 * Plugin
 * @since   1.0.0
 */
class Plugin
{
    public function load(): void
    {
    }
}

add_action(
    'plugins_loaded',
    function () {
        plugin()->load();
    },
    100
);
