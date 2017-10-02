<?php

namespace Starter;

/**
 * @author    Jarosław Stańczyk <jaroslaw@stanczyk.co.uk>
 * @copyright 2017 Jarosław Stańczyk. All rights reserved.
 */
interface Product
{
    /**
     * @param $quantity
     *
     * @return mixed
     */
    public function setQuantity($quantity);
}
