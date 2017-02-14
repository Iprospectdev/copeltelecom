<?php

	session_start();

	if ($_SESSION["copeltelecom"]) {
		$temp = json_decode($_SESSION["copeltelecom"]);
		if ($temp->tipo->name == "J") {
			get_template_part("templates/home", "empresas");
		} else {
			get_template_part("templates/home", "default");
		}
	} else {
		// get_template_part("templates/home", "bussola");
			get_template_part("templates/home", "default");
		
	}

?>