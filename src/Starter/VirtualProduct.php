<?php

namespace Starter;

use Application\Http\Exception\QuantityCanNotBeNegative;

/**
 * @author    Jarosław Stańczyk <jaroslaw@stanczyk.co.uk>
 * @copyright 2017 Jarosław Stańczyk. All rights reserved.
 */
class VirtualProduct implements Product
{
    /**
     * @var
     */
    private $id;

    /**
     * @var
     */
    private $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function setQuantity($quantity)
    {
        if ($quantity < 0) {
            throw new QuantityCanNotBeNegative($quantity);
        }
    }
}
