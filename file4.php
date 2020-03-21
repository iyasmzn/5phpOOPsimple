<?php
/**
 *
 */
class Club {
	public $namaClub, $tempat;
	public function set_namaClub($nama) {
		$this->namaClub = $nama;
	}
	public function set_tempat($place) {
		$this->tempat = $place;
	}
}

class Top extends Club {
	private $nama;
	function set_nama($nama) {
		$this->nama = $nama;
	}
	private function word() {
		echo "<b>$this->nama</b> merupakan pemain terbaik di <b>$this->namaClub</b> yang bertempat di <b>{$this->tempat}</b>.";
	}
	public function echo_word() {
		$this->word();
	}
}
$play = new Top;
$play->set_namaClub('Barca');
$play->set_tempat('Spanyol');
$play->set_nama('Messi');
$play->echo_word();
?>