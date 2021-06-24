<?php

namespace App;

class BackStage extends Item
{
    /**
     * Update quality value for BackStage items
     */
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
    }

    /**
     * Update sellIn value for BackStage items
     */
    public function updateSellIn(){
        $this->sellIn -= 1;
    }
}
