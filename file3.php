<?php
/**
 *
 */
class Nama {
	protected $nama;
	function __construct($nama) {
		$this->nama = $nama;
	}
}

class Artist extends Nama {
	private $artist;
	function set_artist($art) {
		$this->artist = $art;
	}
	function msg() {
		echo "The name of this song is <b><i>{$this->nama}</i></b> and the artist is <b><i>{$this->artist}</i></b>.";
	}
}

$song = new Artist("I'm so tired");
$song->set_artist('Lauv');
$song->msg();
?>