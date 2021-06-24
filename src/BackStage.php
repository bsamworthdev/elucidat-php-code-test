<?php

namespace App;

class BackStage extends Item
{
    /**
     * Update quality value for BackStage items (Note: Increases in quality the older it gets, until the concert)
     */
    public function updateQuality() {

        if ($this->sellIn <= 0) {
            //Quality drops to 0 after the concert
            $this->quality = 0;
        }
        elseif ($this->sellIn <= 5) {
            //Quality increases by 3 when there are 5 days or less left
            $this->quality += 3;
        }
        elseif ($this->sellIn <= 10) {
            //Quality increases by 2 when there are 10 days or less left
            $this->quality += 2;
        } else {
            //Quality increases by 1 when there more than 10 days left
            $this->quality += 1;
        }

        //Limit quality to 50
        if ($this->quality > 50) {
            $this->quality = 50;
        }
    }

    /**
     * Update sellIn value for BackStage items
     */
    public function updateSellIn() {
        $this->sellIn -= 1;
    }
}
