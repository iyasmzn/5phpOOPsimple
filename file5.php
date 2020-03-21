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
	private $score;
	public function set_score($sc) {
		$this->score = $sc;
	}
	public function msg_score() {
		echo "$this->nama made $this->score goals this season and he was {$this->umur}th years old.";
	}
}

class Assist extends Player {
	private $assist;
	public function set_assist($ass) {
		$this->assist = $ass;
	}
	public function msg_assist() {
		echo "$this->nama made $this->assist assists this season and he was {$this->umur}th years old.";
	}
}

$gol = new Score('Ronaldo');
$gol->set_age(37);
$gol->set_score(365);
$gol->msg_score();

echo "<br>";

$ass = new Assist('Kroos');
$ass->set_age(28);
$ass->set_assist(200);
$ass->msg_assist();
?>