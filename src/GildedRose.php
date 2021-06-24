<?php

use App\Brie;
use App\BackStage;
use App\Sulfuras;
use App\Normal;

namespace App;

class GildedRose
{
    private $items;
    private $classes = [
        'normal' => Normal::class,
        'Aged Brie' => Brie::class,
        'Backstage passes to a TAFKAL80ETC concert' => BackStage::class,
        'Sulfuras, Hand of Ragnaros' => Sulfuras::class,
        'Conjured Mana Cake' => Conjured::class
    ];

    /**
    * Constructor for GildedRose
    */
    public function __construct(array $items){
        $this->items = $items;
    }

    /**
     * Returns items array or specific item from array
     */
    public function getItem($which = null) {
        return ($which === null
            ? $this->items
            : $this->items[$which]
        );
    }

    /**
     * Update quality and sellIn appropriately for each item in array
     */
    public function nextDay() {
        foreach ($this->items as &$item) {
            //Get instance of specific item class
            $class = $this->classes[$item->name];
            $instance = new $class($item->name, $item->quality, $item->sellIn);

            //Update item details
            $instance->updateQuality();
            $instance->updateSellIn();

            //Save details back to item object
            $item = $instance;
        }
    }
}