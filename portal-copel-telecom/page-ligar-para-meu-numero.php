<?php get_header('old'); ?>

	<script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>

	<section class="verificar-disponibilidade contato">
			
		<div class="question">
			<header class="vd-header">
				<h1>Ligar para meu número</h1>
			</header>
			<article class="vd-question">
				<div class="container">
					<form action="" id="form-ligar">
						<fieldset>
							<legend>Para sua comodidade preencha os campos abaixo, o mais breve possível a Copel Telecom entrará em contato.</legend>
							<label>
								<input type="text" name="nome" required >
								<small>Razão Social / Nome</small>
							</label>
							<label class="radio"><input type="radio" name="tipo_documento" class="tipo_documento" value="cpf" checked> *CPF</label>
							<label class="radio"><input type="radio" name="tipo_documento" class="tipo_documento" value="cnpj">CNPJ</label>
							<label>
								<input type="text" name="documento" class="documento mask-cpf" required>
							</label>
							<label>
								<input type="text" name="telefone" class="mask-tel" required >
								<small>*Telefone</small>
							</label>
							<label>
								<input type="text" name="email" required>
								<small>*Email</small>
							</label>
							<label>
								<input type="text" name="contrato">
								<small>Contrato</small>
							</label>
							<label>
								<small>*Motivo do Contato</small>
							</label>
							<div class="dropdown dropdown-select">
								<input type="text" name="motivo-text" readonly required>
								<input type="hidden" name="motivo" value="">
								<button type="button" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
								<ul class="dropdown-menu">
									<li><a href="" data-value="Informações Produtos" data-text="Informações Produtos">Informações Produtos</a></li>
						  			<li><a href="" data-value="Financeiro" data-text="Financeiro">Financeiro</a></li>
						  			<li><a href="" data-value="Informações Comerciais" data-text="Informações Comerciais">Informações Comerciais</a></li>
						  			<li><a href="" data-value="Informações Técnicas" data-text="Informações Técnicas">Informações Técnicas</a></li>
						  			<li><a href="" data-value="Reclamação" data-text="Reclamação">Reclamação</a></li>
						  			<li><a href="" data-value="Sugestão" data-text="Sugestão">Sugestão</a></li>
								</ul>
							</div>
							<label>
								<textarea name="mensagem" required></textarea>
								<small>*Mensagem</small>
							</label>
							<div class="captcha">
								<label>Confirme este campo</label>
								<div class="g-recaptcha" data-sitekey="6LewnxsTAAAAAEGDgjyFW5jHpjabze__DkiuFDzU"></div>
							</div>
						</fieldset>
						<div class="text-center">
							<button class="bt-o-b btn_form_enviar">enviar</button>
						</div>
					</form>
					<div class="alert hide text-center" id="response"></div>
				</div>
			</article>
		</div>

	</section>

<?php get_footer('old'); ?>