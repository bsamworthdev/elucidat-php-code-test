<?php

namespace App;

class Brie extends traits\ItemTrait
{
    public $sellIn;
    public $quality;
    public $name;

    /**
    * Constructor for Brie items
    */
    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
        $this->name = 'Aged Brie';
    }

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
