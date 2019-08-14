<?php

$services = new Services;
$profile = $services->profile();
$planos = json_decode($services->planos("J",$profile->cidade));

if(!$planos->bel){
	$planos = json_decode($services->planos("J","CURITIBA"));
	$profile->cidade = "Curitiba";
}

?>

<article id="planos" class="home-empresas-intena-planos">
	<div class="container">
		<?php if ($planos): foreach ($planos->bel as $plan): ?>
		<div class="row">
			<div class="col-sm-3">
				<h6 class="main-tt-barra">Planos</h6>
				<p>Planos Banda Extra Larga Copel Telecom *:</p>
			</div>
			<div class="col-sm-9">
				<div class="planos-detalhes">
					<dl>
						<dt class="col-sm-3 col-xs-12 plano-tt" data-mh="c-dt-group">
							<small>Copel Fibra</small>
							<strong><?php echo $plan->download; ?></strong>
						</dt>
						<dd class="col-sm-3 col-xs-6" data-mh="ct-pc-group">
							<i class="i-down"></i>
							<strong><?php echo $plan->download; ?></strong>
							Velocidade<br>de <small>Download</small>
						</dd>
						<dd class="col-sm-3 col-xs-6" data-mh="ct-pc-group">
							<i class="i-up"></i>
							<strong><?php echo $plan->upload; ?></strong>
							Velocidade<br>de <small>Upload</small>
						</dd>
						<dd class="col-sm-3 col-xs-12 plano-preco" data-mh="c-dt-group">
							<small>R$</small><?php echo $services->profile_price($plan->precoProduto); ?><small>,<?php echo $services->profile_cents($plan->precoProduto); ?>*</small>
							<a href="<?php echo LINK_WVT; ?>?s=<?php echo $plan->id; ?>&locate=<?php echo $profile->cidade; ?>&p=<?php echo $profile->tipo->name; ?>" class="bt-o bt-o-white">VEJA SE O SEU ENDEREÇO JÁ É ATENDIDO</a>
						</dd>
					</dl>
				</div>
			</div>
		</div>
		<?php endforeach; endif; ?>
		<footer>
			<p>
				*Pacotes de banda larga disponíveis somente para as cidades de Curitiba, Pinhais, Piraquara, Irati, Ponta Grossa, Telêmaco Borba, Maringá, Castro, Foz do Iguaçu, Tibagi, Curiúva, Marechal Cândido Rondon, Ortigueira, Reserva, Prudentópolis, Imbaú, Cândido de Abreu, Cornélio Procópio, São Jerônimo da Serra, Medianeira, Pinhão, Dois Vizinhos, Reserva do Iguaçu, Ventania, Rio Branco do Ivaí, Pato Bragado, Mercedes, Nova Santa Rosa, Floresta, Doutor Camargo, Sapopema, Congoinhas, Quatro Pontes, Ouro Verde do Oeste, Itambé, Tupassi, Quinta do Sol, Fenix, Francisco Alves, Bom Sucesso, São Jorge D'Oeste, Verê, Cambira, Enéas Marques, Douradina, Figueira. Santa Isabel do Ivaí, Colorado, Palotina, Paranaguá, União da Vitória e Porto União, atualmente atendidas pela internet da Copel Telecom.<br>
				Serviço de ativação e configuração do serviço de internet: R$ 99,00.<br>
				O prazo de entrega será informado após a conclusão do cadastro no sistema de adesão ao serviço de internet.<br>
				Prazo de remanejamento: 15 dias.<br>
				A Copel Telecom alerta: todos os serviços executados pela Copel Telecom são cobrados exclusivamente através da fatura. Nossos funcionários e contratados não recebem dinheiro do cliente. Se alguém, em nome da Copel Telecom, fizer algum serviço ou vender um equipamento e quiser receber por isso, não pague. Avise a Copel Telecom e chame a polícia.
			</p>
		</footer>
	</div>
</article>