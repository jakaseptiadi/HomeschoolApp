<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tutor extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	
	function count_all($tabel){
		$q = mysql_query("SELECT * FROM $tabel");
		$nilai = mysql_num_rows($q);
		return $nilai;
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

	function select_one($tabel,$kolom,$nilai){
		$q = mysql_query("SELECT * FROM $tabel WHERE $kolom='$nilai'");
		$nilai = mysql_fetch_array($q);
		return $nilai;
	}

	function select_all($tabel){
		$this->db->select('*');
		$this->db->from($tabel);
		return $this->db->get();
	}

	function select_condition($tabel,$kolom,$nilai){
		$this->db->select('*');
		$this->db->from($tabel);
		$this->db->where($kolom,$nilai);
		return $this->db->get();
	}

	function select_condition_2tables($tabel1,$tabel2,$kolom,$nilai){
		$this->db->select('*');
		$this->db->from($tabel);
		$this->db->where($kolom,$nilai);
		return $this->db->get();
	}
	
	function select_2condition($tabel,$kolom,$nilai,$kolom2,$nilai2){
		$this->db->select('*');
		$this->db->from($tabel);
		$this->db->where($kolom,$nilai);
		$this->db->where($kolom2,$nilai2);
		return $this->db->get();
	}

	function insert_db($tabel,$data){
		$this->db->insert($tabel,$data);
	}

	function update_db($tabel,$kolom,$nilai,$data){
		$this->db->where($kolom,$nilai);
		$this->db->update($tabel,$data);
	}

	function delete_cond($tabel,$kolom,$nilai){
		
	}
}