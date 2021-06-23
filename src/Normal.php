<?php

namespace App;

class Normal extends traits\ItemTrait
{
    public $sellIn;
    public $quality;
    public $name;

    /**
     * Constructor for normal items
     */
    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
        $this->name = 'Normal';
    }

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
