<?php

namespace App;

class Conjured extends Item
{
    /**
     * Update quality value for Conjured items
     */
    public function updateQuality() {

        if ($this->sellIn > 0) {
            //Not reached sellby date
            $this->quality -= 2;
        } else {
            //Passed sellby date, so decrease in quality twice as fast
            $this->quality -= 4;
        }

        //Quality cannot be less than zero
        if ($this->quality < 0){
            $this->quality = 0;
        }
    }

    /**
     * Update sellIn value for Conjured items
     */
    public function updateSellIn() {
        $this->sellIn -= 1;
    }
}
