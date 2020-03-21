<?php
/**
 *
 */
class Nama {
	protected $nama;
	public function __construct($nama) {
		$this->nama = $nama;
	}
	protected function msg_parent() {
		echo "Parent : Namanya adalah {$this->nama},...";
	}
}

class Grade extends Nama {
	public $grade1,
	$grade2,
	$grade3,
		$grade4;
	public function set_grade($grade1, $grade2, $grade3, $grade4) {
		$this->grade1 = $grade1;
		$this->grade2 = $grade2;
		$this->grade3 = $grade3;
		$this->grade4 = $grade4;
	}
	function msg_child() {
		echo "Child : Namanya adalah {$this->nama}, dia sudah lulus {$this->grade1}, {$this->grade2}, {$this->grade3}, {$this->grade4}.";
	}
	public function all_msg() {
		$this->msg_parent();
		echo "<br>";
		$this->msg_child();
	}
}

$nuraizha = new Grade('Fida');
$nuraizha->set_grade('TK', 'SD', 'SMP', 'SMA');
$nuraizha->all_msg();
?>