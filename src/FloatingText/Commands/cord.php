<?php

namespace FloatingText\Commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\item\Item;
use FloatingText\Main;

class cord extends command {
	protected $usage = "/cords [args]";
	public function execute(CommandSender $sender, $command, array $args){
		if($sender instanceof Player) {
			$x = $sender->getX();
			$y = $sender->getY();
			$z = $sender->getZ();
		}
		if(count($args) == 1) {
			$player = $sender->getServer()->getPlayer($args[0]);
			if($player) {
$cx = $player->getX();
$cy = $player->getY();
$cz = $player->getZ();
				$sender->sendMessage(TextFormat::GREEN . "Cordinates of $player are: $cx / $cy / $cz");
			}
			else{
				$sender->sendMessage(TextFormat::RED . "Player not Online");
			}
		} elseif(count($args) == 0) {
		if($sender instanceof Player) {
			$sender->sendMessage(TextFormat::GREEN . "Your cordinates are: $x / $y / $z");

		}else{
			$sender->sendMessage(TextFormat::RED . "Use this command in game!");
		}


	}else{
		return false;
	}
	return true;
}
}