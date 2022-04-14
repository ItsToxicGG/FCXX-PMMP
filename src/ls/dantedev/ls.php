<?php

namespace ls\dantedev;

use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
// this is the other commands
class ls extends main{
    
    public function onEnable(): void{
        $this->getLogger()->info("§aSimpeCore has been enabled");
        $this->getLogger()->info("§1By DanteDev");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        switch($command->getName()){
            case "help":
                $sender->sendMessage("§4All Commands");
                $sender->sendMessage(" ");
                $sender->sendMessage("§cNone Commands are found!");
             break;
                
            case "":
                
    
                return true;
            default:
                throw new \AssertionError("This line will never be executed");
        }
    }
