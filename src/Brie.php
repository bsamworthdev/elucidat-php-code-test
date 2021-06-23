<?php

namespace App;

class Brie
{
    public $sellIn;
    public $quality;
    public $name;

    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
        $this->name = 'Aged Brie';
    }

    public function updateQuality(){
        $this->quality += 1;

        if ($this->sellIn < 1) {
            $this->quality += 1;
        }

        if ($this->quality > 50) {
            $this->quality = 50;
        }
    }
    public function updateSellIn(){
        $this->sellIn -= 1;
    }
}
