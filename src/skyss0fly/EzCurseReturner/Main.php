<?php

namespace skyss0fly\EzCurseReturner;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\player\Player;
class Main extends PluginBase implements Listener {

  public function onChat(PlayerChatEvent $event) {
        $player = $event->getPlayer();
        $chat = $event->getMessage();
  if((strpos($chat, "stfu") !== false) {
       $this->getServer()->broadcastMessage("Calm down  " . $player . " there's no need for this behavior <3");
  }
  if((strpos($chat, "fuck") !== false) {
       $this->getServer()->broadcastMessage("yes thats an act of intercourse " . $player . "<3");
  }
  if((strpos($chat, "bitch") !== false) {
       $this->getServer()->broadcastMessage("yes, " . $player . " that is what you are<3");
  }
  if(strpos($chat, "libtard") !== false) {
       $this->getServer()->broadcastMessage("yes a c*nt is delicious, shame you cant get any " . $player . " <3");
  }
  if(strpos($chat, "nigger") !== false) {
       $this->getServer()->broadcastMessage("wow. such strong words from such a puny kid <3");
  }
  if(strpos($chat, "nigga") !== false) {
       $this->getServer()->broadcastMessage("wow. such strong words from such a puny kid <3");
  }
  if(strpos($chat, "asshole") !== false) {
       $this->getServer()->broadcastMessage("yes, an a-hole is where you sh- from. glad you pointed out something everyone has <3");
  }
  if(strpos($chat, "ass") !== false) {
       $this->getServer()->broadcastMessage("yes, an a- is where you sh- from. glad you pointed out something everyone has <3")
  }
  if(strpos($chat, "wanker") !== false) {
       $this->getServer()->broadcastMessage("i see you call someone a wanker, its a shame you cant wank with that tic tac of yours <3")
  }
  if((strpos($chat, "fucktard") !== false) {
       $this->getServer()->broadcastMessage("are you talking about having intercourse with a retard, might aswell f- urself LOOOL <3");
  }
  if(strpos($chat, "retard") !== false) {
       $this->getServer()->broadcastMessage("i love how much you like describing yourself <3");
  }
  if(strpos($chat, "shit") !== false) {
       $this->getServer()->broadcastMessage("yes, sh- is excrement from an animal <3");
  }
  if (strpos($chat, "libtard") !== false) {
       $this->getServer()->broadcastMessage("Are you writing a biography on your life? <3");
  }
  if(strpos($chat, "fucknuckle") !== false) {
       $this->getServer()->broadcastMessage("you wanna fu- knuckles the hedgehog, well i guess you do you, might as well call you mr hands 2.0. <3");
  }
  if(strpos($chat, "libtard") !== false) {
       $this->getServer()->broadcastMessage("i believe that is an accurate description of your status <3");
  }
 }
}
