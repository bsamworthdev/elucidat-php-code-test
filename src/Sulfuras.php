<?php

namespace App;

class Sulfuras extends traits\ItemTrait
{
    public $sellIn;
    public $quality;
    public $name;

    /**
    * Constructor for Sulfuras items
    */
    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
        $this->name = 'Sulfuras, Hand of Ragnaros';
    }
}
