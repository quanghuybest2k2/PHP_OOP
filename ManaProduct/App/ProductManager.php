<?php

namespace App;

/**
 * Manages products.
 */
class ProductManager
{
    private array $products = [];

    /**
     * Add a product to the manager.
     *
     * @param Product $product The product to add.
     * @return void
     */
    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    /**
     * Get all products managed by the manager.
     *
     * @return array An array of Product objects.
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * Get a product by its ID.
     *
     * @param int $id The ID of the product to retrieve.
     * @return Product|null The product object if found, or null if not found.
     */
    public function getProductById(int $id): ?Product
    {
        foreach ($this->products as $product) {
            if ($product->getId() === $id) {
                return $product;
            }
        }
        return null;
    }

    /**
     * Delete a product by its ID.
     *
     * @param int $id The ID of the product to delete.
     * @return bool True if the product was successfully deleted, false otherwise.
     */
    public function deleteProduct(int $id): bool
    {
        foreach ($this->products as $key => $product) {
            if ($product->getId() === $id) {
                unset($this->products[$key]);
                return true;
            }
        }
        return false;
    }
}
