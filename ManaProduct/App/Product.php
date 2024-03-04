<?php

namespace App;

/**
 * Represents a product.
 */
class Product
{
    private int $id;
    private string $name;
    private float $price;

    /**
     * Product constructor.
     *
     * @param int $id The product ID.
     * @param string $name The product name.
     * @param float $price The product price.
     */
    public function __construct(int $id, string $name, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * Get the product ID.
     *
     * @return int The product ID.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the product name.
     *
     * @return string The product name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the product price.
     *
     * @return float The product price.
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}
