<?php get_header();?>
	<section class="area-do-cliente" id="solicitar-gravacao">
		<header>
			<div class="breadcrumb">
				<ul>
					<li><a href="<?php $p = get_page_by_title("Atendimento e Suporte"); echo get_permalink($p->ID); ?>">Atendimento e Suporte</a></li>
				</ul>
			</div>
			<h1 class="main-tt">Solicitação de gravação</h1>
		</header>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<aside>
						<ul>
							<li>
								<div class="row">
									<div class="col-sm-7 col-xs-12">Para solicitar a gravação do atendimento realizado, <strong>preencha o formulário ao lado:</strong></div>
									<div class="col-sm-5 col-xs-12"><i class="i-as-mic"></i></div>
								</div>
							</li>
							<li class="link-faq active">
								<h6>Tem dúvidas sobre a banda extra larga da Copel?</h6>
								<a href="<?php echo get_post_type_archive_link('faq'); ?>"><small>Acesse aqui as Perguntas Frequentes</small></a>
							</li>
							<li>
								<h6 class="barra">E-mail</h6>
								<small>telecom@copel.com</small>
							</li>
							<li>
								<h6>Telefone</h6>
								<small>0800 41 41 81</small>
							</li>
						</ul>
					</aside>
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12">
					<article>
						
						<h2>Formulário</h2>
						<p>Para recuperarmos a gravação do seu atendimento são necessárias algumas informações. Por favor, escolha uma das formas para localização: </p>

					  	<ul class="nav nav-tabs forms-gravacao row" role="tablist">
							<li role="presentation" class="active col-sm-6 col-xs-12"><a href="#por-protocolo" aria-controls="por-protocolo" role="tab" data-toggle="tab">Localização por protocolo</a></li>
							<li role="presentation" class="col-sm-6 col-xs-12"><a href="#sem-protocolo" aria-controls="sem-protocolo" role="tab" data-toggle="tab">Localização sem protocolo</a></li>
					  	</ul>
						  <!-- Tab panes -->
					  	<div class="tab-content forms-gravacao">
						    <div role="tabpanel" class="tab-pane active" id="por-protocolo">
								<form action="" class="form" id="form-solicitar-gravacao">
									<input type="hidden" name="protocolo" value="sim">
									<fieldset>
										<legend class="legend">Dados da ligação</legend>
										<div class="row">
											<label class="col-sm-6"><input type="text" name="protocolo_num" placeholder="Protocolo" required></label>
										</div>
									</fieldset>
									<fieldset>
										<legend class="legend">Dados do solicitante:</legend>
										<div class="row">
											<label class="col-sm-8 col-xs-12"><input type="text" name="nome_solicitante" placeholder="Nome do solicitante" required></label>
										</div>
										<div class="row">
											<label class="col-sm-6 col-xs-12"><input type="text" name="telefone_solicitante" placeholder="Telefone" class="mask-tel"></label>
										</div>
										<div class="row">
											<label class="col-sm-8 col-xs-12"><input type="text" name="email_solicitante" placeholder="E-mail para enviar a gravação" required></label>
										</div>
									</fieldset>
									<fieldset>
										<div class="row check-required">
											<label class="col-sm-12 col-xs-12"><input type="checkbox" name="responsabilidade" required> <span>"Estou ciente que os dados informados são de responsabilidade do cliente".</span></label>
										</div>
										<div class="captcha">
											<label>Confirme este campo</label>
											<div id="RecaptchaField1" class="g-recaptcha"></div>
										</div>
									</fieldset>
									<div class="text-center">
										<button class="bt-o-b active btn_form_enviar">ENVIAR</button>
									</div>
								</form>
						    </div>

						    <div role="tabpanel" class="tab-pane" id="sem-protocolo">
								<form action="" class="form" id="form-solicitar-gravacao-sprotocolo">
									<input type="hidden" name="protocolo" value="nao">
									<fieldset>
										<legend class="legend">Dados da ligação</legend>
										<div class="row">
											<label class="col-sm-8 col-xs-12"><input type="text" name="nome_atendente" placeholder="Nome do atendente"></label>
										</div>
										<div class="row">
											<label class="col-md-4 col-sm-6 col-xs-12"><input type="text" name="data_ligacao" placeholder="Data da ligação" class="mask-data" required></label>
										</div>
										<div class="row">
											<label class="col-md-4 col-sm-6 col-xs-12"><input type="text" name="hora_ligacao" placeholder="Hora da ligação" class="mask-hora" required></label>
										</div>
										<div class="row">
											<label class="col-sm-6 col-xs-12"><input type="text" name="numero_ligacao" placeholder="Número de origem da ligação" class="mask-tel" required></label>
										</div>
										<div class="row">
											<label class="col-sm-6 col-xs-12"><input type="text" name="numero_contrato" placeholder="Número do contrato"></label>
										</div>
									</fieldset>
									<fieldset>
										<legend class="legend">Dados do solicitante:</legend>
										<div class="row">
											<label class="col-sm-8 col-xs-12"><input type="text" name="nome_solicitante" placeholder="Nome do solicitante" required></label>
										</div>
										<div class="row">
											<label class="col-sm-6 col-xs-12"><input type="text" name="telefone_solicitante" placeholder="Telefone" class="mask-tel" required></label>
										</div>
										<div class="row">
											<label class="col-sm-8 col-xs-12"><input type="text" name="email_solicitante" placeholder="E-mail para enviar a gravação" required></label>
										</div>
									</fieldset>
									<fieldset>
										<div class="row check-required">
											<label class="col-sm-12 col-xs-12"><input type="checkbox" name="responsabilidade" required> <span>"Estou ciente que os dados informados são de responsabilidade do cliente".</span></label>
										</div>
										<div class="captcha">
											<label>Confirme este campo</label>
											<div id="RecaptchaField2" class="g-recaptcha"></div>
										</div>
									</fieldset>
									<div class="text-center">
										<button class="bt-o-b active btn_form_enviar">ENVIAR</button>
									</div>
								</form>
						    </div>
					  	</div>

					  	<div class="alert hide text-center" id="response-form-solicitar-gravacao"></div>

					</article>
				</div>
			</div>
		</div>
		<script src="https://www.google.com/recaptcha/api.js?onload=multipleCaptcha&render=explicit&hl=pt-BR" async defer></script>
		<script>
			var com_protocolo = "",
				sem_protocolo = "";
			var multipleCaptcha = function() {
				com_protocolo = grecaptcha.render('RecaptchaField1', {'sitekey' : '6LewnxsTAAAAAEGDgjyFW5jHpjabze__DkiuFDzU'});
				sem_protocolo = grecaptcha.render('RecaptchaField2', {'sitekey' : '6LewnxsTAAAAAEGDgjyFW5jHpjabze__DkiuFDzU'});
			};
		</script>
		<footer>
			<?php get_template_part('template','nao-encontrou'); ?>
		</footer>
	</section>
<?php get_footer(); ?>