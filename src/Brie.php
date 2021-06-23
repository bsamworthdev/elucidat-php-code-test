<?php

namespace App;

class Brie extends traits\ItemTrait
{
    /**
    * Constructor for Brie items
    */
    public function __construct($quality, $sellIn, $conjured = false)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
        $this->name = 'Aged Brie';
        $this->conjured = $conjured;
    }

    /**
     * Update quality value for Brie items
     */
    public function updateQuality(){
        $this->quality += 1;

        if ($this->sellIn < 1) {
            $this->quality += $this->conjured ? 2 : 1;
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
