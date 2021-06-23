<?php

namespace App;

class Sulfuras extends Item
{
    public $sellIn;
    public $quality;
    public $name;

    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
        $this->name = 'Sulfuras, Hand of Ragnaros';
    }

    public function __toString()
    {
        return "{$this->sellIn}, {$this->quality}";
    }

    public function updateQuality(){
        
    }
}
