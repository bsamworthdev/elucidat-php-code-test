<?php

namespace App;

class Conjured extends Item
{
    /**
     * Update quality value for Conjured items
     */
    public function updateQuality(){
        if ($this->quality > 0) {
            $this->quality -= 2;
        }
        if ($this->sellIn < 1 && $this->quality > 0) {
            $this->quality -= 2;
        }
    }

    /**
     * Update sellIn value for Conjured items
     */
    public function updateSellIn(){
        $this->sellIn -= 1;
    }
}
