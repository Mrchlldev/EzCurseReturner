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
  if((strpos($chat, "!rankmenu") !== false) {
       $this->getServer()->broadcastMessage("==[ §l§bRank Menu§r ]==\n§l§b» §r§e/milk§r\n§l§b» §r§e/nick§r\n§l§b» §r§e/cw§r\n§l§b» §r§e/cskin§r\n§l§b» §r§e/vanish§r\n§l§b» §r§e/vs§r\n§l§b» §r§e/uvs§r\n§l§b» §r§e/pv 1,2,3,....10§r\n§l§b» §r§e/fly§r\n§l§b» §r§e/feed§r\n§l§b» §r§e/heal§r\n§l§b» §r§e/gmc§r\n§l§b» §r§e/gms§r\n§l§b» §r§e/size§r\n§l§b» §r§e/say§r\n§l§b» §r§elainnya cek di §b(/ranks)§e!!§r");
  }
  if((strpos($chat, "!settingmenu") !== false) {
       $this->getServer()->broadcastMessage("==[ §l§bSetting Menu§r ]==\n§l§b» §r§e/nick§r\n§l§b» §r§e/size§r\n§l§b» §r§e/sh on§r\n§l§b» §r§e/sh off§r");
     }
  if((strpos($chat, "!shopmenu") !== false) {
       $this->getServer()->broadcastMessage("==[ §l§bShop Menu§r ]==\n§l§b» §r§e/shop§r\n§l§b» §r§e/eshop§r\n§l§b» §r§e/market§r\n§l§b» §r§e/sell§r\n§l§b» §r§e/cs§r\n§l§b» §r§e/keyshop§r");
  }
  if((strpos($chat, "!infomenu") !== false) {
       $this->getServer()->broadcastMessage("==[ §l§bInfo Menu§r ]==\n§l§b» §r§e/ranks§r\n§l§b» §r§e/rules§r\n§l§b» §r§e/bank§r\n§l§b» §r§e/rui§r\n§l§b» §r§e/info§r");
     }
  if((strpos($chat, "!tpmenu") !== false) {
       $this->getServer()->broadcastMessage("==[ §l§bTeleport Menu§r ]==\n§l§b» §r§e/mine§r\n§l§b» §r§e/pvp§r\n§l§b» §r§e/survival§r\n§l§b» §r§e/nether§r\n§l§b» §r§e/theend§r\n§l§b» §r§e/warp§r\n§l§b» §r§e/tpa§r\n§l§b» §r§e/tpaaccept§r\n§l§b» §r§e/home§r\n§l§b» §r§e/tpadecline§r\n§l§b» §r§e/back§r\n§l§b» §r§e/pwarp§r");
  }
  if((strpos($chat, "!menu") !== false) {
       $this->getServer()->broadcastMessage("Hello §e@" . $player . "§f!\n\n§l§b» §r§!eshopmenu§r\n§l§b» §r§e!tpmenu§r") {
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
