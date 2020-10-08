<?php

interface DrinkFactoryInterface
{
    public static function create(string $name, string $temperature);
}
