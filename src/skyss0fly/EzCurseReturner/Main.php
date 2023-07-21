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
if(str_contains("fuck"), $chat) {
$this->getServer()->broadcastMessage("Oi STFU " . $player . " u Fat Pig, Gronk, Spanner, Flogwogger jackass <3");
}
    if(str_contains("bitch"), $chat) {
$this->getServer()->broadcastMessage("yes, " . $player . " that is what you are<3");
      
}
if(str_contains("cunt"), $chat) {
$this->getServer()->broadcastMessage("yes a c*nt is delicious, shame you cant get any " . $player . " <3");
}
    if(str_contains("nigger"), $chat) {
$this->getServer()->broadcastMessage("wow. such strong words from such a puny kid <3");
}
    if(str_contains("nigga"), $chat) {
$this->getServer()->broadcastMessage("wow. such strong words from such a puny kid <3");
}
        if(str_contains("asshole"), $chat) {
$this->getServer()->broadcastMessage("yes, an a-hole is where you sh- from. glad you pointed out something everyone has <3");
}
        if(str_contains("ass"), $chat) {
$this->getServer()->broadcastMessage("yes, an a- is where you sh- from. glad you pointed out something everyone has <3");
}
     if(str_contains("wanker"), $chat) {
$this->getServer()->broadcastMessage("i see you call someone a wanker, its a shame you cant wank with that tic tac of yours <3");
}
     if(str_contains("fucktard"), $chat) {
$this->getServer()->broadcastMessage("are you talking about having intercourse with a retard, might aswell f- urself LOOOL <3");
}
     if(str_contains("retard"), $chat) {
$this->getServer()->broadcastMessage("i love how much you like describing yourself <3");
}
     if(str_contains("shit"), $chat) {
$this->getServer()->broadcastMessage("yes, sh- is excrement from an animal <3");
}
     if(str_contains("libtard"), $chat) {
$this->getServer()->broadcastMessage("are you righting a biography on your life? <3");
}
     if(str_contains("fucknuckle"), $chat) {
$this->getServer()->broadcastMessage("you wanna fu- knuckles the hedgehog, well i guess you do you, might as well call you mr hands 2.0. <3");
}
     if(str_contains("whore"), $chat) {
$this->getServer()->broadcastMessage("i believe that is an accurate description of your status <3");
}
  }

}
