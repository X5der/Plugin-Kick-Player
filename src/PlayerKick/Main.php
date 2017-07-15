  <?php
 namespace Playerkick;
 
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener
use pocketmine\event\player\PlayerKickEvent;
pocketmine\text\TextFormat as Color;

class Main extends PluginBase implements Listener{

public function onEnable(){
$this->getServer()->getPluginManager()->registerEvent($this, $this);
 }

public function onKick(PlayerkickEvent $event){
$player = $event->getPlayer();
$name = &event->getName();

$player->setKickMessage(Color::RED."لقد تم طردك من قبل الادمن لعدم تقبل اوامر السيرفر"):

 }
  }
