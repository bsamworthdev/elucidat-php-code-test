<?php

namespace App;

class Sulfuras extends traits\ItemTrait
{
    /**
    * Constructor for Sulfuras items
    */
    public function __construct($quality, $sellIn, $conjured = false)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
        $this->name = 'Sulfuras, Hand of Ragnaros';
        $this->conjured = $conjured;
    }
}
