<?php

namespace DeletedUser522\ArmorEffect;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\scheduler\PluginTask;
use pocketmine\event\entity\EntityArmorChangeEvent;
use pocketmine\Player;
use pocketmine\entity\EffectInstance;
use pocketmine\entity\Effect;
use pocketmine\item\Item;
use pocketmine\inventory\PlayerInventory;
use pocketmine\inventory\ArmorInventory;

use DeletedUser522\Main;

class ChBoots implements Listener{

    public function onArmorChange(EntityArmorChangeEvent $event){

        $player = $event->getEntity();
        $Nid = $event->getNewItem()->getID();
        $Oid = $event->getOldItem()->getID();

        if($player instanceof Player){

            if($Nid === 305){

                $eff = new EffectInstance(Effect::getEffect(Effect::SPEED) , 1 * 9999999, 1,true);
                $player->addEffect($eff);

            } elseif ($Oid === 305) {

                $player->removeEffect(1);

            }

        }

    }

}