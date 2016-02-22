<?php
class MainController {
	
	private $cssPaths = array();
	private $jsPaths = array();
	private $metaDescription = "";
	private $metaTitle = "";
	private $metaKeywords = "";
	
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
	
	public function addMetaDescription($description) {
		$this->metaDescription = $description;
	}
	
	public function getMetaDescription() {
		return $this->metaDescription;
	}
	
	public function addMetaTitle($title) {
		$this->metaTitle = $title;
	}
	
	public function getMetaTitle() {
		return $this->metaTitle;
	}

	public function addMetaKeywords($keywords) {
		$this->metaKeywords = $keywords;
	}
	
	public function getMetaKeywords() {
		return $this->metaKeywords;
	}
}