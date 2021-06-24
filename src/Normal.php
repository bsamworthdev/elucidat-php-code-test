<?php

namespace App;

class Normal extends Item
{
    /**
     * Update quality value for Normal items
     */
    public function updateQuality(){
        if ($this->quality > 0) {
            $this->quality -= 1;
        }
        if ($this->sellIn < 1 && $this->quality > 0) {
            $this->quality -= 1;
        }
    }

    /**
     * Update sellIn value for Normal items
     */
    public function updateSellIn(){
        $this->sellIn -= 1;
    }
}
