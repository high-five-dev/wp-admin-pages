<?php

/**
 * @package:    highfive-wp-admin-pages
 * @author:     Harm Putman <harm@high-five.dev>
 * @copyright:  2020 - High Five
 *
 * Created:     2020-01-17, 02:34:05 pm
 * Modified:    2020-01-17, 02:51:37 pm
 * Modified By: Harm Putman <harm@high-five.dev>
 */

namespace HighFive\WPAdminPages;

defined('ABSPATH') or die('These are not the droids you are looking for...');

class Page
{
    public function register()
    {
        add_action( 'admin_init', [$this, 'init']);
    }

    public function init()
    {
        wp_die( 'Lets create some admin pages!' );
    }
}
