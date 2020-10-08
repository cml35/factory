<?php

require('Latte.php');
require('Cappuccino.php');
require('HotChocolate.php');

use Factory\Latte;
use Factory\Cappuccino;
use Factory\HotChocolate;

/**
 * Class DrinkFactory
 *
 * @author Claudynn Lee
 *
 * @since 27th September, 2020
 */
class DrinkFactory implements DrinkFactoryInterface
{
    /**
     * Creates the drink
     *
     * @param string $name
     * @param string $temperature
     *
     * @throws Exception
     *
     * @return DrinkInterface
     */
    public static function create(string $name, string $temperature)
    {
        switch ($name)
        {
            case 'Latte':
                return new Latte($name, $temperature);
            case 'Hot Chocolate':
                return new HotChocolate($name, $temperature);
            case 'Cappuccino':
                return new Cappuccino($name, $temperature);
            default:
                throw new Exception('I do not know how to make a ' . $name);
        }

    }
}
