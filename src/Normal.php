<?php

namespace App;

class Normal
{
    public $sellIn;
    public $quality;
    public $name;

    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
        $this->name = 'Normal';
    }

    public function updateQuality(){
        if ($this->quality > 0) {
            $this->quality -= 1;
        }
        if ($this->sellIn < 1 && $this->quality > 0) {
            $this->quality -= 1;
        }
    }

    public function updateSellIn(){
        $this->sellIn -= 1;
    }
}
