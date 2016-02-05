<?php

include("./models/entities/Text.php");

class IndexMapper {
	
	public function getText($data) {
		$text = new Text();
		$text->text = $data["texte"];
		return $text;
	}
	
}