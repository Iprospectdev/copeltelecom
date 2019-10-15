<?php get_header(); ?>
	
	<script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>

	<section class="verificar-disponibilidade contato">
			
		<div class="question">
			<header class="vd-header">
				<h1>Contato</h1>
			</header>
			<article class="vd-question">
				<div class="container">
					<form action="#" id="form-contato" method="post">
						<fieldset>
							<legend>Entre em contato com a Copel Telecom através dos nossos canais de comunicação. Envie sugestões, reclamações ou solicite informações sobre nossos serviços.</legend>
							<label>
								<input type="text" name="nome" required>
								<small>*Nome</small>
							</label>
							<label>
								<input type="text" name="telefone" class="mask-tel" >
								<small>Telefone</small>
							</label>
							<label>
								<input type="text" name="email" required>
								<small>*Email</small>
							</label>

							<label class="radio">
								* 
								<input type="radio" name="tipo_documento" class="tipo_documento" value="cpf" checked>CPF
							</label>
							<label class="radio"><input type="radio" name="tipo_documento" class="tipo_documento" value="cnpj">CNPJ</label>
							<label>
								<input type="text" name="documento" class="documento mask-cpf" required>
							</label>

							<label>
								<input type="text" name="contrato" >
								<small>Contrato</small>
							</label>
							<label>
								<input type="text" name="cep" class="mask-cep" required>
								<small>*CEP</small>
							</label>
							<label>
								<input type="text" name="cidade" required>
								<small>*Cidade</small>
							</label>

							<label>
								<small>*Estado</small>
							</label>
							<div class="dropdown dropdown-select">
								<input type="text" name="estado-text" readonly required>
								<input type="hidden" name="estado" value="">
								<button type="button" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
								<ul class="dropdown-menu">
									<li><a href="#" data-value="Acre" data-text="Acre">Acre</a></li>
									<li><a href="#" data-value="Alagoas" data-text="Alagoas">Alagoas</a></li>
									<li><a href="#" data-value="Amazonas" data-text="Amazonas">Amazonas</a></li>
									<li><a href="#" data-value="Amapá" data-text="Amapá">Amapá</a></li>
									<li><a href="#" data-value="Bahia" data-text="Bahia">Bahia</a></li>
									<li><a href="#" data-value="Ceará" data-text="Ceará">Ceará</a></li>
									<li><a href="#" data-value="Distrito Federal" data-text="Distrito Federal">Distrito Federal</a></li>
									<li><a href="#" data-value="Espírito Santo" data-text="Espírito Santo">Espírito Santo</a></li>
									<li><a href="#" data-value="Goiás" data-text="Goiás">Goiás</a></li>
									<li><a href="#" data-value="Maranhão" data-text="Maranhão">Maranhão</a></li>
									<li><a href="#" data-value="Mato Grosso" data-text="Mato Grosso">Mato Grosso</a></li>
									<li><a href="#" data-value="Mato Grosso do Sul" data-text="Mato Grosso do Sul">Mato Grosso do Sul</a></li>
									<li><a href="#" data-value="Minas Gerais" data-text="Minas Gerais">Minas Gerais</a></li>
									<li><a href="#" data-value="Pará" data-text="Pará">Pará</a></li>
									<li><a href="#" data-value="Paraíba" data-text="Paraíba">Paraíba</a></li>
									<li><a href="#" data-value="Paraná" data-text="Paraná">Paraná</a></li>
									<li><a href="#" data-value="Pernambuco" data-text="Pernambuco">Pernambuco</a></li>
									<li><a href="#" data-value="Piauí" data-text="Piauí">Piauí</a></li>
									<li><a href="#" data-value="Rio de Janeiro" data-text="Rio de Janeiro">Rio de Janeiro</a></li>
									<li><a href="#" data-value="Rio Grande do Norte" data-text="Rio Grande do Norte">Rio Grande do Norte</a></li>
									<li><a href="#" data-value="Rondônia" data-text="Rondônia">Rondônia</a></li>
									<li><a href="#" data-value="Rio Grande do Sul" data-text="Rio Grande do Sul">Rio Grande do Sul</a></li>
									<li><a href="#" data-value="Roraima" data-text="Roraima">Roraima</a></li>
									<li><a href="#" data-value="Santa Catarina" data-text="Santa Catarina">Santa Catarina</a></li>
									<li><a href="#" data-value="Sergipe" data-text="Sergipe">Sergipe</a></li>
									<li><a href="#" data-value="São Paulo" data-text="São Paulo">São Paulo</a></li>
									<li><a href="#" data-value="Tocantins" data-text="Tocantins">Tocantins</a></li>
								</ul>
							</div>

							<label>
								<small>*Motivo do Contato</small>
							</label>
							<div class="dropdown dropdown-select">
								<input type="text" name="motivo-text" readonly required>
								<input type="hidden" name="motivo" value="">
								<button type="button" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
								<ul class="dropdown-menu">								
									<li><a href="#" data-text="Aquisição de Internet Residencial" data-value="Aquisição de Internet Residencial">Aquisição de Internet Residencial</a></li>
									<li><a href="#" data-text="Aquisição de Serviços Corporativos" data-value="Aquisição de Serviços Corporativos">Aquisição de Serviços Corporativos</a></li>
									<li><a href="#" data-text="Informações Produtos" data-value="Informações Produtos">Informações Produtos</a></li>
									<li><a href="#" data-text="Financeiro" data-value="Financeiro">Financeiro</a></li>
									<li><a href="#" data-text="Informações Comerciais" data-value="Informações Comerciais">Informações Comerciais</a></li>
									<li><a href="#" data-text="Informações Técnicas" data-value="Informações Técnicas">Informações Técnicas</a></li>
									<li><a href="#" data-text="Erro no cadastro Web Vendas" data-value="Erro no cadastro Web Vendas">Erro no cadastro Web Vendas</a></li>
									<li><a href="#" data-text="Reclamação" data-value="Reclamação">Reclamação</a></li>
									<li><a href="#" data-text="Sugestão" data-value="Sugestão">Sugestão</a></li>
								</ul>
							</div>
							
							<label>
								<input type="text" name="assunto" required>
								<small>*Assunto</small>
							</label>
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
<?php get_footer(); ?>