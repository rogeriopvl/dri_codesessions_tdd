<?php
require_once('Player.php');
require_once('PHPUnit/Framework.php');

class PlayerTest extends PHPUnit_Framework_TestCase {
	
	public function testPlayerLifeIsInitially100() {
		$player = new Player('John Doe');
		$this->assertEquals(100, $player->getLife());
	}
	
	public function testLifeCannotBecomeNegative() {
		$player = new Player('John Doe');
		$player->loseLife(101);
		$this->assertEquals(0, $player->getLife());
		
		$player = new Player('John Doe');
		$initialLife = $player->getLife();
		$player->setLife(-1);
		$this->assertEquals($initialLife, $player->getLife());
	}
	
	public function testLifeCannotExceedMaxValue() {
		$player = new Player('John Doe');
		$player->gainLife(51);
		$this->assertEquals(Player::MAX_LIFE, $player->getLife());
		
		$player = new Player('John Doe');
		$player->setLife(151);
		$this->assertEquals(Player::MAX_LIFE, $player->getLife());
	}
	
}
?>