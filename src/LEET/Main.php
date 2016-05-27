<?php

namespace LEET;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class LEET extends PluginBase {
  
  public function onEnable(){
     $this->getLogger()->info(TextFormat::AQUA . "LEETLOVE IS ACTIVATED");
  }
  
  public function onDisable(){
    $this->getLogger()->info(TextFormat::RED . "LEETLOVE IS DEACTIVATED");
  }
  public function onCommand(CommandSender $sender, Command $command, $label, array $args){
  	$cmd = strtolower($command->getName());
	switch($cmd){
		case "whatisleet":
			
			$sender->sendMessage(TextFormat::AQUA . "[LEET] LEETIsLove, follow LEET at @Twitter @LEET_CC!");
			return true;
			break;
        }
  }
}
