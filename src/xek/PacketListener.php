<?php

namespace xek;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use xek\Main;

class PacketListener implements Listener {
	
	public function __construct(Main $plugin) {
		$plugin->getServer()->getPluginManager()->registerEvents($this, $plugin);
	}

	public function customKnockback(EntityDamageByEntityEvent $event) {
		$player=$event->getEntity();
		if($player instanceof Player) {
			$event->setKnockBack(Main::getInstance()->getConfig()->get("KB"));
            $event->setAttackCooldown(9);
		}
	}
}