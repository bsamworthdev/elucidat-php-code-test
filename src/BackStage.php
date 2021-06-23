<?php

namespace App;

class BackStage extends traits\ItemTrait
{
    /**
    * Constructor for BackStage items
    */
    public function __construct($quality, $sellIn, $conjured = false)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
        $this->name = 'Backstage passes to a TAFKAL80ETC concert';
        $this->conjured = $conjured;
    }

    /**
     * Update quality value for BackStage items
     */
    public function updateQuality(){
        $this->quality += 1;

        if ($this->sellIn <= 0) {
            $this->quality = 0;
        }
        elseif ($this->sellIn <= 5) {
            $this->quality += $this->conjured ? 4 : 2;
        }
        elseif ($this->sellIn <= 10) {
            $this->quality += $this->conjured ? 2 : 1;
        }

        if ($this->quality > 50) {
            $this->quality = 50;
        }
    }

    /**
     * Update sellIn value for BackStage items
     */
    public function updateSellIn(){
        $this->sellIn -= 1;
    }
}
