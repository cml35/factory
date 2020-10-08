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
class Latte implements DrinkInterface
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
     * Get drink description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return 'Made with 80% frothed milk';
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

