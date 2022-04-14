<?php

namespace ls\dantedev;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class ls extends main{
    
    public function onEnable() {
        $this->getLogger()->info("§aLobbyScoreboard has been enabled");
        $this->getLogger()->info("§1By DanteDev");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        switch($command->getName()){
            case "help":
                $sender->sendMessage("§4All Commands");
                $sender->sendMessage(" ");
                $sender->sendMessage("§cNone Commands are found!");
    
                return true;
            default:
                throw new \AssertionError("This line will never be executed");
        }
    }
