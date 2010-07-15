<?php

class Player {
	
	const MAX_LIFE = 150;
	
	private $_name;
	private $_life;
	
	public function __construct($name) {
		$this->_name = $name;
		$this->_life = 100;
	}
	
	public function setLife($value) {
		
		if (is_numeric($value) && $value >= 0) {
			$this->_life = $value;
			
			if ($this->_life > self::MAX_LIFE) {
				$this->_life = self::MAX_LIFE;
			}
		}
	}
	
	public function getLife() {
		return $this->_life;
	}
	
	public function gainLife($value) {
		if (is_numeric($value) && $value > 0) {
			$this->_life += $value;
			
			if ($this->_life > self::MAX_LIFE) {
				$this->_life = self::MAX_LIFE;
			}
		}
	}
	
	public function loseLife($value) {
		if (is_numeric($value) && $value > 0) {
			$this->_life = $this->_life >= $value ? $this->_life - $value : 0;
		}
	}	
}

?>