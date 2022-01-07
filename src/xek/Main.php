<?php

namespace xek;

use xek\PacketListener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents(new PacketListener($this), $this);
    }
}
