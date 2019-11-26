<?php

session_start();

class Services {

	public function convertChars($string){
	    $return = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
	    return strtoupper($return);
	}		

	public function cidades($uf="pr",$q="") {

		$q = ($q) ? $this->convertChars($q) : '';

		$json = @file_get_contents(WEBSERVICE."/wvtweb/rest/portal/cidades/".$uf);		
		if (!$json) {
			$json = @file_get_contents(get_bloginfo("template_url") .  "/_theme/cidades.json");
		}
		$cidades = array();
		if ($json) {
			foreach (json_decode($json) as $city) {
				if($q!="") {
					if (strpos($city->nome, $q) !== false) {
					    $cidades[] = $city->nome;
					}
				}else {
					$cidades[] = $city->nome;	
				}
			}
		}
		return json_encode($cidades);
	}

	public function planos($tipo="F", $cidade="CURITIBA") {

		$cidade = preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($cidade)));
// echo $cidade;
		$url = WEBSERVICE."/wvtweb/rest/portal/produtos/".$tipo."/".str_replace(' ','%20', $cidade);
		$json = @file_get_contents($url);
		
		// if (!$json) {
		// 	//$json = @file_get_contents(get_bloginfo("template_url") .  "/_theme/curitiba_f.json");
		// 	if ($tipo == "F") {
		// 		$json = '{"bel":[{"id":38,"nomeProduto":"COPEL FIBRA 50 Mbps","precoProduto":139.9,"cidade":null,"tipoPessoa":"Fí­sica"},{"id":40,"nomeProduto":"COPEL FIBRA 75 Mbps","precoProduto":174.9,"cidade":null,"tipoPessoa":"Fí­sica"},{"id":42,"nomeProduto":"COPEL FIBRA 150 Mbps","precoProduto":249.9,"cidade":null,"tipoPessoa":"Fí­sica"}]}';
		// 	} else {
		// 		$json = '{"bel":[{"id":41,"nomeProduto":"COPEL FIBRA 150 Mbps","precoProduto":249.9,"cidade":null,"tipoPessoa":"Jurídica"}]}';
		// 	}
		// }

		return $json;
	}

	public function site($session) {
		$_SESSION["copeltelecom"] = json_encode($session);
		return json_encode($_SESSION["copeltelecom"]);
	}

	public function exit_session() {
		session_unset($_SESSION["copeltelecom"]);
		session_destroy();
	}

	public function profile() {
		$session = json_decode($_SESSION["copeltelecom"]);

		if ($session->planos->precoProduto) {
			$session->planos->price = $this->profile_price($session->planos->precoProduto);
			$session->planos->cents = $this->profile_cents($session->planos->precoProduto);
			$session->planos->velocidade = $this->profile_velocidade($session->planos->nomeProduto);
		}

		return $session;
	}

	public function profile_cents($precoProduto) {
		$cents = substr(strrchr($precoProduto,','),1);
		$cents = (strlen($cents)==1) ? $cents."0" : $cents;
		return $cents;
	}

	public function profile_price($precoProduto) {
		$price = strrev( strchr(strrev($precoProduto),",") );
		$price = str_replace(",", "", $price);
		return $price;
	}

	public function profile_velocidade($nomeProduto) {
		$velocidade = substr($nomeProduto, -8, -4);
		if ($velocidade == "O 1 ") {
			$velocidade = "01 ";
		}
		return str_replace(" ", "", $velocidade);
	}

	public function paranaconectado() {
		$cidades = array(
			array(
				"nome" => "Reserva do Iguaçu",
				"lat" => "-25.83486",
				"lng" => "-52.02597"
			),
			array(
				"nome" => "Ventania",
				"lat" => "-24.24662",
				"lng" => "-50.24514"
			),
			array(
				"nome" => "Rio Branco do Ivaí",
				"lat" => "-24.32493",
				"lng" => "-51.31917"
			),
			array(
				"nome" => "Pato Bragado",
				"lat" => "-24.62510",
				"lng" => "-54.22863"
			),
			array(
				"nome" => "Mercedes",
				"lat" => "-24.45426",
				"lng" => "-54.16234"
			),
			array(
				"nome" => "Nova Santa Rosa",
				"lat" => "-24.46977",
				"lng" => "-53.95576"
			),
			array(
				"nome" => "Floresta",
				"lat" => "-23.61638",
				"lng" => "-52.08406"
			),
			array(
				"nome" => "Doutor Camargo",
				"lat" => "-23.55863",
				"lng" => "-52.21830"
			),
			array(
				"nome" => "Sapopema",
				"lat" => "-23.90940",
				"lng" => "-50.57957"
			),
			array(
				"nome" => "Congoinhas",
				"lat" => "-23.40051",
				"lng" => "-51.89429"
			),
			array(
				"nome" => "Quatro Pontes",
				"lat" => "-24.57563",
				"lng" => "-53.97639"
			),
			array(
				"nome" => "Ouro Verde do Oeste",
				"lat" => "-24.77408",
				"lng" => "-53.90237"
			),
			array(
				"nome" => "Itambé",
				"lat" => "-23.65879",
				"lng" => "-51.99008"
			),
			array(
				"nome" => "Tupassi",
				"lat" => "-24.58836",
				"lng" => "-53.51102"
			),
			array(
				"nome" => "Quinta do Sol",
				"lat" => "-23.85375",
				"lng" => "-52.13140"
			),
			array(
				"nome" => "Fenix",
				"lat" => "-23.91689",
				"lng" => "-51.98189"
			),
			array(
				"nome" => "Francisco Alves",
				"lat" => "-24.06720",
				"lng" => "-53.84663"
			),
			array(
				"nome" => "Bom Sucesso",
				"lat" => "-23.70679",
				"lng" => "-51.76754"
			),
			array(
				"nome" => "São Jorge D'Oeste",
				"lat" => "-25.71057",
				"lng" => "-52.91930"
			),
			array(
				"nome" => "Verê",
				"lat" => "-25.87786",
				"lng" => "-52.90593"
			),
			array(
				"nome" => "Cambira",
				"lat" => "-23.58950",
				"lng" => "-51.57964"
			),
			array(
				"nome" => "Eneas Marques",
				"lat" => "-25.94352",
				"lng" => "-53.16375"
			),
			array(
				"nome" => "Douradina",
				"lat" => "-23.38519",
				"lng" => "-53.29429"
			),
			array(
				"nome" => "Figueira",
				"lat" => "-23.84871",
				"lng" => "-50.40604"
			),
			array(
				"nome" => "Santa Isabel do Ivaí",
				"lat" => "-23.00295",
				"lng" => "-53.19939"
			)
		);
		return $cidades;
	}

}
