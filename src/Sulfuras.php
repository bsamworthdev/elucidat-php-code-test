<?php

namespace App;

class Sulfuras
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

    public function updateQuality(){
        //Do nothing
    }

    public function updateSellIn(){
        //Do nothing
    }
}
