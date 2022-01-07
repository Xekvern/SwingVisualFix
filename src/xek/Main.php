<?php

namespace xek;

use xek\PacketListener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    public function onEnable(): void {
        @mkdir($this->getDataFolder());
		$this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents(new PacketListener($this), $this);
    }

    public static function getInstance(): Main {
		return Server::getInstance()->getPluginManager()->getPlugin("SwingFix");
	}

}