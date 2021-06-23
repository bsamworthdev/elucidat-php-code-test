<?php

namespace App;

class BackStage
{
    public $sellIn;
    public $quality;
    public $name;

    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
        $this->name = 'Backstage passes to a TAFKAL80ETC concert';
    }

    public function __toString()
    {
        return "{$this->sellIn}, {$this->quality}";
    }

    public function updateQuality(){
        $this->quality += 1;

        if ($this->sellIn <= 0) {
            $this->quality = 0;
        }
        elseif ($this->sellIn <= 5) {
            $this->quality += 2;
        }
        elseif ($this->sellIn <= 10) {
            $this->quality += 1;
        }

        if ($this->quality > 50) {
            $this->quality = 50;
        }

        $this->sellIn -= 1;
    }
}
