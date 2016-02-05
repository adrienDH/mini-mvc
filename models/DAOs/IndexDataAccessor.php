<?php

class IndexDataAccessor {
	
	private $db;
	
	public function __construct() {
		$this->db = connexionSQL();
	}
	
	public function getText() {
		$query = "SELECT * FROM t_test";
		$reponse = $this->db->query($query);
		return $reponse->fetch(PDO::FETCH_ASSOC);
	}
	
}