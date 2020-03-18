<?php

namespace Aleondev;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase implements Listener{

public function onEnable(){
$this->getLogger()->info("Info Das plugin ist on")

public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool
    if ($cmd->getName() == "kickall") {
        if($sender instanceof Player) {
            if ($sender->hasPermission("kickall.command")) {
                foreach ($this->getServer()->getOnlinePlayers() as $player) {
                    if ($player !== $sender) {
                        $player->kick("§e[GG]§4Jeder wurde vom Server gekickt!");

                    }
                }
                $sender->sendMessage("§e[GG] §4Du hast jeden vom Server gekickt!")
            } else {
                $sender->sendMessage("§e[GG] §edu hast keine rechte für diesen command!");
            }
        } else {
            $sender->sendMessage("dieser kommando geht nur ingame");
            return true;
        }
    }
}