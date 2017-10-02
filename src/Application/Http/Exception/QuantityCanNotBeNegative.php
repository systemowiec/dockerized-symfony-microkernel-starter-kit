<?php

namespace Application\Http\Exception;

/**
 * @author    Jarosław Stańczyk <jaroslaw@stanczyk.co.uk>
 * @copyright 2017 Jarosław Stańczyk. All rights reserved.
 */
class QuantityCanNotBeNegative extends \InvalidArgumentException
{
    const CODE = 400;
    const MESSAGE = "Quantity can not be negative, %s provided";

    /**
     * @param string $quantity
     */
    public function __construct(string $quantity)
    {
        $message = sprintf(static::MESSAGE, $quantity);
        parent::__construct($message, static::CODE);
    }
}
