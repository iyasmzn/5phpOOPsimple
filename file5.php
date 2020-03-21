<?php
/**
 *
 */
class Player {
	public $nama, $umur;
	public function __construct($nama) {
		$this->nama = $nama;
	}
	public function set_age($age) {
		$this->umur = $age;
	}
}

class Score extends Player {
	public $score;
	public function set_score($sc) {

	}
}
?>