<?php

namespace App;

class Normal extends Item
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

    public function __toString()
    {
        return "{$this->sellIn}, {$this->quality}";
    }

    public function updateQuality(){
        
        if ($this->quality > 0) {
            $this->quality -= 1;
        }
        $this->sellIn -= 1;
        if ($this->sellIn < 0 && $this->quality > 0) {
            $this->quality -= 1;
        }
    }
}
