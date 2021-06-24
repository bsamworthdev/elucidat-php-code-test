<?php

namespace App;

class Normal extends Item
{
    /**
     * Update quality value for Normal items
     */
    public function updateQuality() {

        if ($this->sellIn > 0) {
            //Not reached sellby date
            $this->quality -= 1;
        } else {
            //Passed sellby date, so decrease in quality twice as fast
            $this->quality -= 2;
        }

        //Quality cannot be less than zero
        if ($this->quality < 0) {
            $this->quality = 0;
        }
    }

    /**
     * Update sellIn value for Normal items
     */
    public function updateSellIn() {
        $this->sellIn -= 1;
    }
}
