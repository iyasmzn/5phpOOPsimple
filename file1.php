<?php
/**
 *
 */
class Biodata {
	public $nama,
		$kelas;
	private $beratBadan;
	public function __construct($nama, $kelas) {
		$this->nama = $nama;
		$this->kelas = $kelas;
	}
	public function set_beratBadan($berat) {
		$this->beratBadan = $berat;
	}
	protected function msg_parent() {
		echo "Parent : Nama : {$this->nama} dari kelas {$this->kelas},Berat badan : {$this->beratBadan}kg,...";
	}
}

class Program extends Biodata {
	public $program;
	public function set_program($prog) {
		$this->program = $prog;
	}
	protected function msg_child1() {
		echo "Child-1 : Nama : {$this->nama} dari kelas {$this->kelas},Berat badan : <i>privateClass</i>kg, dari program {$this->program},...";
	}
}

class Hobi extends Program {
	public $hobi;
	public function set_hobi($hob) {
		$this->hobi = $hob;
	}
	private function msg_child2() {
		echo "Child-2 : Nama : {$this->nama} dari kelas {$this->kelas},Berat badan : <i>privateClass</i>kg, dari program {$this->program}, hobinya {$this->hobi}.";
	}
	public function all_msg() {
		$this->msg_parent();
		echo "<br>";
		$this->msg_child1();
		echo "<br>";
		$this->msg_child2();
	}
}

$melvin = new Hobi('Melvin', 'IPA 2');
$melvin->set_beratBadan(43);
$melvin->set_program('Biologi');
$melvin->set_hobi('Jalan-jalan');
$melvin->all_msg();
?>