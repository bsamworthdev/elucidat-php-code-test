<?php

namespace App;

class GildedRose
{
    private $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function getItem($which = null)
    {
        return ($which === null
            ? $this->items
            : $this->items[$which]
        );
    }

    public function nextDay()
    {
        $backStage = 'Backstage passes to a TAFKAL80ETC concert';
        $sulfuras = 'Sulfuras, Hand of Ragnaros';
        $brie = 'Aged Brie';
        
        foreach ($this->items as $item) {
            switch ($item->name){
                case $brie:
                    $item->quality += 1;
                    $item->sellIn -= 1;

                    if ($item->sellIn < 0) {
                        $item->quality += 1;
                    }

                    if ($item->quality > 50) {
                        $item->quality = 50;
                    }

                    break;
                case $backStage:
                    $item->quality += 1;

                    if ($item->sellIn <= 5) {
                        $item->quality += 2;
                    }
                    elseif ($item->sellIn <= 10) {
                        $item->quality += 1;
                    }

                    if ($item->quality > 50) {
                        $item->quality = 50;
                    }

                    if ($item->sellIn <= 0) {
                        $item->quality = 0;
                    }
                    $item->sellIn -= 1;
                    break;
                case $sulfuras:
                    break; 
                default;
                    if ($item->quality > 0) {
                        $item->quality -= 1;
                    }
                    $item->sellIn -= 1;
                    if ($item->sellIn < 0 && $item->quality > 0) {
                        $item->quality -= 1;
                    }
                    break;
            }
        }

    }
}
