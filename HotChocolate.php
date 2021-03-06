<?php

namespace Factory;

use DrinkInterface;

/**
 * Class Drink
 *
 * @package Factory
 *
 * @author Claudynn Lee
 *
 * @since 27th September, 2020
 */
class HotChocolate implements DrinkInterface
{
    private $name;
    private $temperature;

    public function __construct($name, $temperature)
    {
        $this->name = $name;
        $this->temperature = $temperature;
    }

    /**
     * Gets the name of the drink
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Gets the description
     *
     * @return string
     */
    public function getDescription()
    {
        return 'Made with 100% New Zealand cocoa';
    }

    /**
     * Gets the temperature of the drink
     *
     * @return string
     */
    public function getTemperature(): string
    {
        return $this->temperature;
    }
}

