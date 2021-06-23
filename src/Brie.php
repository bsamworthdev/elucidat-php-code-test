<?php

namespace App;

class Brie extends Item
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

    public function __toString()
    {
        return "{$this->sellIn}, {$this->quality}";
    }

    public function updateQuality(){
        $this->quality += 1;
        $this->sellIn -= 1;

        if ($this->sellIn < 0) {
            $this->quality += 1;
        }

        if ($this->quality > 50) {
            $this->quality = 50;
        }
    }
}
