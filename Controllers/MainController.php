<?php
class MainController {
	
	private $cssPaths = array();
	private $jsPaths = array();
	
	// Inclusion des css dans la vue
	public function addCssPaths(array $cssPaths = array()) {
		$this->cssPaths = $cssPaths;
	}
	
	// Inclusion des css dans le header
	public function getCssPaths() {
		return $this->cssPaths;
	}
	
	// Inclusion des js dans la vue
	public function addJsPaths(array $jsPaths = array()) {
		$this->jsPaths = $jsPaths;
	}
	
	// Inclusion du js dans le footer
	public function getJsPaths() {
		return $this->jsPaths;
	}
}