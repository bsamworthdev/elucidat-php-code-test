<?php

namespace App;

class Brie extends Item
{
    /**
     * Update quality value for Brie items (Note: Brie Increases in quality the older it gets)
     */
    public function updateQuality() {

        if ($this->sellIn > 0) {
            //Not reached sellby date
            $this->quality += 1;
        } else {
            //Passed sellby date, so decrease in quality twice as fast
            $this->quality += 2;
        }

        //Limit quality to 50
        if ($this->quality > 50) {
            $this->quality = 50;
        }
    }

    /**
     * Update sellIn value for Brie items
     */
    public function updateSellIn() {
        $this->sellIn -= 1;
    }
}
