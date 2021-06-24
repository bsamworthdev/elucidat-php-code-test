<?php

namespace App;

class Sulfuras extends Item
{
    /**
     * Update quality value for Sulfuras items
     */
    public function updateQuality() {
        //Do nothing- Legendary item, never decreases in Quality
    }

    /**
     * Update sellIn value for Sulfuras items
     */
    public function updateSellIn() {
        //Do nothing- Legendary item, never has to be sold
    }
}
