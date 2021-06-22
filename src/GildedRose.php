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
            if ($item->name == $brie){
                if ($item->quality < 50) {
                    $item->quality += 1;
                }
                $item->sellIn -= 1;
                if ($item->sellIn < 0 && $item->quality < 50) {
                    $item->quality += 1;
                }
            } elseif ($item->name == $backStage){
                if ($item->quality < 50) {
                    $item->quality += 1;
                    if ($item->sellIn < 11 && $item->quality < 50) {
                        $item->quality += 1;
                    }
                    if ($item->sellIn < 6 && $item->quality < 50) {
                        $item->quality += 1;
                    }
                }
                $item->sellIn = $item->sellIn - 1;
                if ($item->sellIn < 0) {
                    $item->quality = $item->quality - $item->quality;
                }
            } elseif ($item->name == $sulfuras){
                
            } else {
                if ($item->quality > 0) {
                    $item->quality -= 1;
                }
                $item->sellIn = $item->sellIn - 1;
                if ($item->sellIn < 0) {
                    if ($item->quality > 0) {
                        $item->quality = $item->quality - 1;
                    }
                }
            }
    
    
    



            // if ($item->name != $brie and $item->name != $backStage) {
            //     // if ($item->quality > 0) {
            //     //     if ($item->name != $sulfuras) {
            //     //         $item->quality = $item->quality - 1;
            //     //     }
            //     // }
            // } else {
            //     // if ($item->quality < 50) {
            //     //     $item->quality = $item->quality + 1;
            //     //     if ($item->name == $backStage) {
            //     //         if ($item->sellIn < 11) {
            //     //             if ($item->quality < 50) {
            //     //                 $item->quality = $item->quality + 1;
            //     //             }
            //     //         }
            //     //         if ($item->sellIn < 6) {
            //     //             if ($item->quality < 50) {
            //     //                 $item->quality = $item->quality + 1;
            //     //             }
            //     //         }
            //     //     }
            //     // }
            // }
            // if ($item->name != $sulfuras) {
            //     // $item->sellIn = $item->sellIn - 1;
            // }
            // if ($item->sellIn < 0) {
            //     // if ($item->name != $brie) {
            //     //     if ($item->name != $backStage) {
            //     //         if ($item->quality > 0) {
            //     //             if ($item->name != $sulfuras) {
            //     //                 $item->quality = $item->quality - 1;
            //     //             }
            //             }
            //         } else {
            //             // $item->quality = $item->quality - $item->quality;
            //         }
            //     } else {
            //         // if ($item->quality < 50) {
            //         //     $item->quality = $item->quality + 1;
            //         // }
            //     }
            // }
        }
    }
}
