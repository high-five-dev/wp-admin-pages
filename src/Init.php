<?php

/**
 * @package:    highfive-wp-admin-pages
 * @author:     Harm Putman <harm@high-five.dev>
 * @copyright:  2020 - High Five
 *
 * Created:     2020-01-17, 02:46:00 pm
 * Modified:    2020-01-17, 04:17:43 pm
 * Modified By: Harm Putman <harm@high-five.dev>
 */

namespace HighFive\WPAdminPages;

defined('ABSPATH') or die('These are not the droids you are looking for...');

class Init
{
    public static function getServices()
    {
        $this->services = [
            Page::class
        ];
    }

    public static function registerServices()
    {
        foreach (self::getServices() as $class) {
            $instance = self::instantiate( $class );
            if (method_exists($instance, 'register')) {
                $instance->register();
            }
        }
    }

    public static function instantiate($class)
    {
        $instance = new $class();

        return $instance;
    }
}
