<?php

/**
 * @package:    highfive-wp-admin-pages
 * @author:     Harm Putman <harm@high-five.dev>
 * @copyright:  2020 - High Five
 *
 * Created:     2020-01-17, 02:46:00 pm
 * Modified:    2020-01-17, 02:50:57 pm
 * Modified By: Harm Putman <harm@high-five.dev>
 */

namespace HighFive\WPAdminPages;

defined('ABSPATH') or die('These are not the droids you are looking for...');

class Init
{
    protected $services = [];

    public function __construct()
    {
        $this->setServices();
    }

    protected function setServices()
    {
        $this->services = [
            Page::class
        ];
    }

    public function registerServices()
    {
        foreach ($this->services as $class) {
            $instance = $this->instantiate( $class );
            if (method_exists($instance, 'register')) {
                $instance->register();
            }
        }
    }

    private function instantiate($class)
    {
        $instance = new $class();

        return $instance;
    }
}
