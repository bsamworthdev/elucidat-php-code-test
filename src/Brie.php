<?php

namespace App;

class Brie extends Item
{
    /**
     * Update quality value for Brie items
     */
    public function updateQuality(){
        $this->quality += 1;

        if ($this->sellIn < 1) {
            $this->quality += 1;
        }

        if ($this->quality > 50) {
            $this->quality = 50;
        }
    }

    /**
     * Update sellIn value for Brie items
     */
    public function updateSellIn(){
        $this->sellIn -= 1;
    }
}
