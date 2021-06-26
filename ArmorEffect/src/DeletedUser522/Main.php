<?php 

namespace DeletedUser522;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\Server;
use DalkerTM\event\PLayerInteract;
use pocketmine\utils\Config;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
use pocketmine\event\player\PlayerExhaustEvent;

use DeletedUser522\ArmorEffect\ChBoots;

class Main extends PluginBase implements Listener
{
       public function onEnable()
    {

        $this->getLogger()->info("§2Le core est fonctionnel");
        $this->getServer()->getPluginManager()->registerEvents(new ChBoots($this), $this);
    
	}

    public function onDisable()
    {
        $this->getLogger()->info("§4Le core est éteint");

    }
}
