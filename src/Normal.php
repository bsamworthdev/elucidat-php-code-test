<?php

namespace App;

class Normal extends traits\ItemTrait
{
    /**
     * Constructor for normal items
     */
    public function __construct($quality, $sellIn, $conjured = false)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
        $this->name = 'Normal';
        $this->conjured = $conjured;
    }

    /**
     * Update quality value for Normal items
     */
    public function updateQuality(){
        if ($this->quality > 0) {
            $this->quality -= $this->conjured ? 2 : 1;
        }
        if ($this->sellIn < 1 && $this->quality > 0) {
            $this->quality -= $this->conjured ? 2 : 1;
        }
    }

    /**
     * Update sellIn value for Normal items
     */
    public function updateSellIn(){
        $this->sellIn -= 1;
    }
}
