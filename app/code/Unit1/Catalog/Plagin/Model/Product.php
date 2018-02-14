<?php
namespace Unit1\Catalog\Plagin\Model;

class Product
{
    /**
     * Увеличиваем цену в 2 раза
     * 
     * @param \Magento\Catalog\Model\Product $product
     * @paran float $price
     * @return float
     */
    public function afterGetPrice(
        \Magento\Catalog\Model\Product $product,
        $price
    )
    {
        $price = $price * 2;
        return $price;
    }
}