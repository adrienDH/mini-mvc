<?php

include("./models/DAOs/IndexDataAccessor.php");
include("./models/Mappers/IndexMapper.php");

class IndexController extends MainController {
	
	private $indexDAO;
	private $indexMapper;
	
	public function __construct() {
		$this->indexDAO = new IndexDataAccessor();
		$this->indexMapper = new IndexMapper();
	}
	
	public function homeAction() {
		
		$text = $this->indexMapper->getText($this->indexDAO->getText());
		
		return array(
			"text" => $text
		);
	}
	
}