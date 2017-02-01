<?php get_header();?>
	<section id="rav">
		<header>
			<h1 class="main-tt">Internet Corporativa – IP Direto</h1>
		</header>
		<div class="ccdc-wrapper">
			<div class="container">
				<div class="row">
					<nav class="col-sm-3 col-xs-12">
						<ul class="nav-tabs nav-rav" role="tablist">							
							<li role="presentation" class="active infos-pessoais">
								<a href="#infos-pessoais" aria-controls="infos-pessoais" role="tab" data-toggle="tab">
									Dados<strong>da Empresa</strong>
								</a>
							</li>
							<li role="presentation" class="dados-de-contato">
								<a href="#dados-de-contato" aria-controls="dados-de-contato" role="tab" data-toggle="tab">
									<strong>Dados</strong>de Contato
								</a>
							</li>
							<li role="presentation" class="sua-instalacao">
								<a href="#sua-instalacao" aria-controls="sua-instalacao" role="tab" data-toggle="tab">
									<strong>Sua</strong>Instalação
								</a>
							</li>
						</ul>
						<p>
							OBSERVAÇÕES:<br>
							Será verificada a viabilidade pela equipe de engenharia, para velocidades acima de 100 Mbps.
							Os dados informados são de responsabilidade do cliente. Informações incorretas poderão inviabilizar o atendimento. 
						</p>
					</nav>
					<article class="col-sm-9 col-xs-12">
						
						<div role="tabpanel" class="tab-pane active" id="infos-pessoais">
							<form action="#" id="form-dados-da-empresa" method="post">
								<fieldset>
									<legend class="ccdc-legend">Dados da Empresa (conforme cartão CNPJ da Receita Federal)*</legend>
									<div class="row"><label class="col-sm-4"><input type="text" name="cnpj" placeholder="CNPJ" class="mask-cnpj" required></label></div>
									<div class="row"><label class="col-sm-8"><input type="text" name="razao_social" placeholder="Razão Social" required></label></div>
									<div class="row"><label class="col-sm-4"><input type="text" name="insc_municipal" placeholder="Inscrição Municipal"></label></div>
									<div class="row"><label class="col-sm-4"><input type="text" name="insc_estadual" placeholder="Inscrição Estadual"></label></div>
									<div class="row"><label class="col-sm-4"><input type="text" name="tel_fixo" class="mask-tel" placeholder="Telefone Fixo"></label></div>
									<div class="row"><label class="col-sm-4"><input type="text" name="tel_cel" class="mask-tel" placeholder="Telefone Celular"></label></div>
									<div class="row"><label class="col-sm-8"><input type="text" name="correspondencia[email]" placeholder="Email" required></label></div>
								</fieldset>
								<fieldset>
									<legend class="ccdc-legend">Endereço para correspondência*</legend>
									<div class="row"><label><input type="text" name="correspondencia[endereco]" placeholder="Endereço/Bairro/Cep" required></label></div>
									<div class="row"><label><input type="text" name="correspondencia[cidade]" placeholder="Cidade/Estado" required></label></div>
								</fieldset>
								<button class="bt-o-b active">SEGUINTE</button>
							</form>
						</div>
					
						<div role="tabpanel" class="tab-pane" id="dados-de-contato">
							<form action="" id="form-dados-de-contato" method="post">
								<fieldset>
									<legend class="ccdc-legend">Contato financeiro*</legend>
									<div class="row"><label><input type="text" name="contato_financeiro[nome]" placeholder="Nome Completo/Cargo" required></label></div>
									<div class="row"><label class="col-sm-4"><input type="text" name="contato_financeiro[tel]" class="mask-tel" placeholder="Telefone Fixo" required></label></div>
									<div class="row"><label class="col-sm-4"><input type="text" name="contato_financeiro[cel]" class="mask-tel" placeholder="Telefone Celular" required></label></div>
									<div class="row"><label><input type="text" name="contato_financeiro[email]" placeholder="Email" required></label></div>
								</fieldset>
								<fieldset>
									<legend class="ccdc-legend">Contato técnico*</legend>
									<div class="row"><label><input type="text" name="contato_tecnico[nome]" placeholder="Nome Completo/Cargo" required></label></div>
									<div class="row"><label class="col-sm-4"><input type="text" name="contato_tecnico[tel]" class="mask-tel" placeholder="Telefone Fixo" required></label></div>
									<div class="row"><label class="col-sm-4"><input type="text" name="contato_tecnico[cel]" class="mask-tel" placeholder="Telefone Celular" required></label></div>
									<div class="row"><label><input type="text" name="contato_tecnico[email]" placeholder="Email" required></label></div>
								</fieldset>
								<button class="bt-o-b active">SEGUINTE</button>
							</form>
						</div>
					
						<div role="tabpanel" class="tab-pane" id="sua-instalacao">
							<form action="?step=sua-instalacao" id="form-sua-instalacao" method="post" class="form-ipdireto">
								<fieldset>
									<div class="row">
										<label class="col-sm-5 col-xs-12">
											<div class="dropdown dropdown-select">
												<input type="text" name="vencimento_fatura-text" placeholder="Data para Vencimento da Fatura" readonly required>
												<input type="hidden" name="vencimento_fatura" value="">
												<button type="button" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
												<ul class="dropdown-menu">
													<li><a href="#" data-value="1" data-text="1">1</a></li>
													<li><a href="#" data-value="5" data-text="5">5</a></li>
													<li><a href="#" data-value="10" data-text="10">10</a></li>
													<li><a href="#" data-value="15" data-text="15">15</a></li>
													<li><a href="#" data-value="20" data-text="20">20</a></li>
													<li><a href="#" data-value="25" data-text="25">25</a></li>
												</ul>
											</div>
										</label>

										<label class="col-sm-5 col-xs-12">
											<div class="dropdown dropdown-select">
												<input type="text" name="recebimento_fatura-text" placeholder="Opção de recebimento da fatura" readonly required>
												<input type="hidden" name="recebimento_fatura" value="">
												<button type="button" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
												<ul class="dropdown-menu">
													<li><a href="#" data-value="On line (via autoatendimento)" data-text="On line (via autoatendimento)">On line (via autoatendimento)</a></li>
													<li><a href="#" data-value="Papel (via Correios)" data-text="Papel (via Correios)">Papel (via Correios)</a></li>
												</ul>
											</div>
										</label>
										
									</div>
									<div class="row">
										<label class="col-sm-6 col-xs-12">
											<input type="text" name="id_dominio" placeholder="ID do registro.br ou domínio.br" >
											<small>sem estas informações o link não é ativo. Por exigência da ANATEL, estes dados devem ser informados. Domínios .com e .net não são válido</small>
										</label>
									</div>
									<div class="row">
										<label>
											<textarea name="observacoes" placeholder="Observações"></textarea>
										</label>
									</div>
								</fieldset>
								<fieldset>
									<legend class="ccdc-legend">Endereço de instalação*</legend>
									<div class="row"><label class="col-sm-5 col-xs-12"><input type="text" name="endereco[uc]" placeholder="Número da unidade consumidora" ></label></div>
									<div class="row"><label class="col-sm-8 col-xs-12"><input type="text" name="endereco[rua]" placeholder="Rua" required></label></div>
									<div class="row"><label><input type="text" name="endereco[complemento]" placeholder="Complemento (nº casa, apartamento, bloco, etc...)" ></label></div>
									<div class="row"><label><input type="text" name="endereco[bairro]" placeholder="Bairro" required></label></div>
									<div class="row"><label class="col-sm-3 col-xs-12"><input type="text" name="endereco[cep]" class="mask-cep" placeholder="CEP" required></label></div>
									<div class="row"><label><input type="text" name="endereco[local]" placeholder="Local de instalação do equipamento" required></label></div>
									<div class="row"><label class="col-sm-6 col-xs-12"><input type="text" name="endereco[coordenadas]" placeholder="Coordenadas geográficas (latitude e longitude)"  ><small>Caso não possua o Número da Unidade Consumidora</small></label></div>
								</fieldset>
								<fieldset>
									<legend class="ccdc-legend">Velocidade</legend>
									<div class="row">
										<label class="col-sm-10">
											<div class="dropdown dropdown-select">
												<input type="text" name="plano-text" value="5 Mbps" readonly>
												<input type="hidden" name="plano" value="5 Mbps">
												<button type="button" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
												<ul class="dropdown-menu">
													<li><a href="#" data-value="5 Mbps" data-text="5 Mbps">5 Mbps</a></li>
													<li><a href="#" data-value="10 Mbps" data-text="10 Mbps">10 Mbps</a></li>
													<li><a href="#" data-value="15 Mbps" data-text="15 Mbps">15 Mbps</a></li>
													<li><a href="#" data-value="20 Mbps" data-text="20 Mbps">20 Mbps</a></li>
													<li><a href="#" data-value="25 Mbps" data-text="25 Mbps">25 Mbps</a></li>
													<li><a href="#" data-value="30 Mbps" data-text="30 Mbps">30 Mbps</a></li>
													<li><a href="#" data-value="35 Mbps" data-text="35 Mbps">35 Mbps</a></li>
													<li><a href="#" data-value="40 Mbps" data-text="40 Mbps">40 Mbps</a></li>
													<li><a href="#" data-value="45 Mbps" data-text="45 Mbps">45 Mbps</a></li>
													<li><a href="#" data-value="50 Mbps" data-text="50 Mbps">50 Mbps</a></li>
													<li><a href="#" data-value="60 Mbps" data-text="60 Mbps">60 Mbps</a></li>
													<li><a href="#" data-value="70 Mbps" data-text="70 Mbps">70 Mbps</a></li>
													<li><a href="#" data-value="80 Mbps" data-text="80 Mbps">80 Mbps</a></li>
													<li><a href="#" data-value="90 Mbps" data-text="90 Mbps">90 Mbps</a></li>
													<li><a href="#" data-value="100 Mbps" data-text="100 Mbps">100 Mbps</a></li>
													<li><a href="#" data-value="Maior que 100 Mbps" data-text="Maior que 100 Mbps">Maior que 100 Mbps</a></li>
												</ul>
											</div>
										</label>
									</div>
								</fieldset>
								<div id="outro-endereco"></div>
								<div class="text-center"><button class="bt-o add-field-id" type="button">Adicionar outro endereço de instalação</button></div>
								<button class="bt-o-b active">SEGUINTE</button>
							</form>
						</div>

					</article>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="alert hide text-center" id="response"></div>
		</div>
	</section>
<?php get_footer(); ?>