<?php
	error_reporting(0);

	function url_json($cep){
		$url = 'https://viacep.com.br/ws/'.$cep.'/json/';
		$cep = json_decode(file_get_contents($url));
		return $cep;
	}

	function get_CEP(){
		if(isset($_POST["ask"])){
			$endereco = strip_tags(addslashes($_POST["cep"]));

			$cep = url_json($endereco);

			if($cep == false){
				echo '<small>Dados inválido, tente novamente.</small>';
			}elseif(isset($cep->erro) == true){
				echo "<small>CEP inválido, tente novamente.</small>";
			}else{
				echo '
					<small><a href="https://www.google.com.br/maps/place/'.$cep->cep.'" target="_blank"><i class="fas fa-map-marked-alt"></i>Visualizar no google maps</a></small>
					<ul>
						<li>
							<p class="first">CEP: </p>
							<p>'.$cep->cep.'</p>
						</li>
						<li>
							<p class="first">Logradouro: </p>
							<p>'.$cep->logradouro.'</p>
						</li>
						<li>
							<p class="first">Complemento: </p>
							<p>'.$cep->complemento.'</p>
						</li>
						<li>
							<p class="first">Bairro: </p>
							<p>'.$cep->bairro.'</p>
						</li>
						<li>
							<p class="first">Localidade: </p>
							<p>'.$cep->localidade.'</p>
						</li>
						<li>
							<p class="first">Unidade Federal: </p>
							<p>'.$cep->uf.'</p>
						</li>
					</ul>
				';
			}
		}
	}
