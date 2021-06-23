<?php

use App\Brie;
use App\BackStage;
use App\Sulfuras;
use App\Normal;

namespace App;

class GildedRose
{
    private $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * Returns items array or specific item from array
     */
    public function getItem($which = null)
    {
        return ($which === null
            ? $this->items
            : $this->items[$which]
        );
    }

    /**
     * Update quality and sellIn appropriately for each item in array
     */
    public function nextDay()
    {
        foreach ($this->items as $item) {
            $item->updateQuality();
            $item->updateSellIn();
        }
    }
}

