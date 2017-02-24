<?php
	class M_web extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function insert_db($tabel,$data){
		$this->db->insert($tabel,$data);
	}

	function count_condition($tabel,$kolom,$nilai){
		$q = mysql_query("SELECT * FROM $tabel WHERE $kolom='$nilai'");
		$nilai = mysql_num_rows($q);
		return $nilai;
	}

	function count_2condition($tabel,$kolom,$nilai,$kolom2,$nilai2){
		$q = mysql_query("SELECT * FROM $tabel WHERE $kolom='$nilai' and $kolom='$nilai'");
		$nilai = mysql_num_rows($q);
		return $nilai;
	}
}

?>