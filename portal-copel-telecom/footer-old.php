	<footer id="footer-main" class="wow fadeIn">
		<div class="container">
			<aside class="col-md-3 col-sm-12 col-xs-12">
				<ul>					
					<li><a href="https://www.facebook.com/copeltelecom/?fref=ts" target="_blank"><i class="i-footer-facebook"></i></a></li>
					<li><a href="https://twitter.com/copeltelecom" target="_blank"><i class="i-footer-twitter"></i></a></li>
					<li><a href="https://www.linkedin.com/company/copel-telecom" target="_blank"><i class="i-footer-linkedin"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCWLv_uuedAttlRGCpDhI3fg" target="_blank"><i class="i-footer-youtube"></i></a></li>
				</ul>
				<div id="footer-logo">
<!-- 					<div>
						<a href="http://www.cidadao.pr.gov.br/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/_assets/old/images/footer-logo-parana.png" alt="Paraná" /></a>
					</div> -->
					<div>
						<img src="<?php bloginfo('template_url'); ?>/_assets/old/images/logo-ipv6.png" id="ipv6-logo" alt="IPV6" />
					</div>
				</div>
			</aside>
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="row">
					<article class="border-left col-md-3 col-sm-3 col-xs-6" data-mh="footer-group">
						<h6>internet fibra óptica</h6>
						<ul>
							<li><a href="<?php $p=get_page_by_title('Acessibilidade'); echo get_permalink($p->ID); ?>">Acessibilidade</a></li>
							<li><a href="<?php $p=get_page_by_title('Speedtest'); echo get_permalink($p->ID); ?>">Teste de Velocidade</a></li>
						</ul>
					</article>
					<article class="col-md-3 col-sm-3 col-xs-6" data-mh="footer-group">
						<h6>planos e preços</h6>
						<ul>
							<li><a href="<?php $p=get_page_by_title('Planos'); echo get_permalink($p->ID); ?>">Conheça</a></li>
							<li><a href="<?php echo LINK_WVT; ?>">Contrate agora</a></li>
						</ul>
					</article>
					<article class="col-md-3 col-sm-3 col-xs-6" data-mh="footer-group">
						<h6>atendimento</h6>
						<ul>
							<li><a href="http://www.copeltelecom.com/autoatendimento" target="_blank">Área do cliente</a></li>
							<li><a href="http://www.copeltelecom.com/autoatendimento" target="_blank">2ª via da fatura</a></li>
							<li><a href="<?php echo get_post_type_archive_link('faq'); ?>">Perguntas Frequentes</a></li>
							<li><a href="<?php $p=get_page_by_title('Atendimento e Suporte'); echo get_permalink($p->ID); ?>#as-documentos">Documentos</a></li>
						</ul>
					</article>
					<article class="col-md-3 col-sm-3 col-xs-6" data-mh="footer-group">
						<h6>institucional</h6>
						<ul>
							<li><a href="<?php $p=get_page_by_title('Copel Telecom'); echo get_permalink($p->ID); ?>">Sobre a Copel Telecom</a></li>
							<li><a href="http://www.copel.com/hpcopel/root/nivel2.jsp?endereco=%2Fhpcopel%2Fri%2Fpagcopel2.nsf%2Fdocs%2F8A85489DDD579DAD0325742400656466" target="_blank">Balanço</a></li>
							<li><a href="http://www.copel.com/hpcopel/acopel/mapaGovernanca.jsp" target="_blank">Governança</a></li>
						</ul>
					</article>
				</div>
				<div class="text-center">
					<div id="footer-bts">
						<a href="<?php $p=get_page_by_title('Blog'); echo get_permalink($p->ID); ?>">Blog Conecta</a>
						<a href="http://www.copel.com" target="_blank">COPEL</a>
						<a href="http://www.cidadao.pr.gov.br/" target="_blank">Governo do Paraná</a>
					</div>
					<a href="tel:0800 41 41 81" id="footer-phone"><i></i>0800 41 41 81</a>
				</div>
			</div>
		</div>
		<div id="footer-copy">
			<div class="container">
				<div class="row">
					<small class="col-md-7 col-sm-6 col-xs-12">Copyright 2016 &copy; Copel Telecomunicações S.A. CNPJ: 04.368.865/0001-66.</small>
					<small class="col-md-5 col-sm-6 col-xs-12">Rua José Izidoro Biazetto, 158 - bloco A - Mossunguê - CEP: 81200-240 - Curitiba - PR</small>
				</div>
			</div>
		</div>
	</footer>

</div><!-- sb-site -->

<div class="modal fade" tabindex="-1" id="modal-planos" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" data-dismiss="modal" class="i-c-modal-close"></button>
			<div class="modal-body">
				<h6>Planos de Serviço</h6>
				<div class="list-files">
					<?php $doc = get_page_by_title( "Planos de Serviços", "", "documentos" ); ?>
					<?php if ($doc): ?>
						<ul>
							<?php if (rwmb_meta( "files", "type=file", $doc->ID )): ?>
								<?php foreach (rwmb_meta( "files", "type=file", $doc->ID ) as $file): ?>
								<li><a target="_blank" href="<?php echo $file["url"]; ?>"><i class="i-pdf"></i> <?php echo $file["title"]; ?></a></li>
								<?php endforeach ?>
							<?php endif ?>
						</ul>
					<?php endif ?>
				</div>
				
				<div class="text-center row modal-bts">
					<div class="col-sm-6 col-xs-12">
						<a href="<?php $p = get_page_by_title("Copel Telecom"); echo get_permalink($p->ID); ?>" class="bt-o">saiba mais sobre copel fibra</a>
					</div>
					<div class="col-sm-6 col-xs-12">
						<button type="button" class="bt-o" data-dismiss="modal">continue navegando</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


	<?php wp_reset_query(); if(is_home()): ?>
		<div class="modal" id="modal-popup" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<button type="button" data-dismiss="modal" class="i-c-modal-close"></button>
					<div class="modal-body">
						<a href="http://www.copeltelecom.com/site/faq/como-funciona-nova-fatura-da-copel-telecom/?utm_source=facebook&utm_medium=post&utm_term=financeiro&utm_content=fatura&utm_campaign=ct_call">
							<img src="<?php bloginfo('template_url'); ?>/_assets/old/images/home/barcode.png" alt="">
						</a>
						<h6>
							<a href="http://www.copeltelecom.com/site/faq/como-funciona-nova-fatura-da-copel-telecom/?utm_source=facebook&utm_medium=post&utm_term=financeiro&utm_content=fatura&utm_campaign=ct_call">
								Novidade <i class="fa fa-angle-right"></i> <span  style="color: #737c8f;">Nova Fatura Copel Telecom<small>|</small></span>
							</a>
						</h6>
						<br><br>
						<a href="http://www.copeltelecom.com/site/faq/como-funciona-nova-fatura-da-copel-telecom/?utm_source=facebook&utm_medium=post&utm_term=financeiro&utm_content=fatura&utm_campaign=ct_call" class="bt bt-orange">Clique e veja as vantagens</a>
					</div>
				</div>
			</div>
		</div>
		<script>
			// jQuery(document).ready(function($) {
			// 	$('#modal-popup').modal('show');
			// });
		</script>
	<?php endif; ?>



	<div class="modal" id="modal-cidades" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content" ng-controller="bussola">
				<button type="button" data-dismiss="modal" class="i-c-modal-close"></button>
				<div class="modal-body">
					<h4><strong>Em qual cidade do Paraná</strong> você precisa de uma internet banda larga 100% fibra óptica?</h4>
					<div class="call">
						<dl class="action">
							<dt><span><i class="icon-font-bussola-04"></i></span></dt>
							<dd><input type="text" id="cidade" > <button type="button" ng-click="select_cidade()">></button></dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal" id="modal-whats" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" data-dismiss="modal" class="i-c-modal-close"></button>
				<div class="modal-body">
					<h6>
						Você está saindo do site da<br>Copel Telecom para o WhatsApp
					</h6>
					<a href="javascript:void(0);" class="bt bt-orange whatsapp-button" target="_blank">PROSSEGUIR PARA WHATSAPP</a>
					<a href="#" data-toggle="modal" data-target="#modal-whats" class="bt-gray">FICAR NO SITE DA COPEL</a>
				</div>
				<div class="modal-footer">
					<small>
						Serviço compatível apenas com o navegador Google Chrome.<br>Outros navegadores: adicione o número +55 41 9202-4181 para falar conosco.<br>Aguardamos sua mensagem.
					</small>
				</div>
			</div>
		</div>
	</div>

	<?php wp_footer(); ?>

	<script src="<?php bloginfo('template_url');?>/_assets/old/js/all.min.js"></script>

	<?php if(!is_page('RAV') && !is_page('IP Direto')): ?>

		<!-- Init code pzw.io  //-->
		<script>
			var $_PowerZAP = { defaultCountry: '+55', widget_id: '1681', company: "5526" };
			(function(i,s,o,g,r,a,m){
				i[r]={context:{id:'8659e62744a37a52c5c1d594238d2d32'}};
				a=o;
				o=s.createElement(o);
				o.async=1;
				o.src=g;
				m=s.getElementsByTagName(a)[0];
				m.parentNode.insertBefore(o,m);
			})(window,document,'script','https://widget-omni.powerzap.com.br/js/widget.js?v=6.1.0.6','pwz');
		</script>
		<style>.display-none{display: none!important}</style>
		<!-- End code pzw.io  //-->
	<?php endif; ?>

	<script>
	    var chat;
	    $(document).ready(function(){
			  function openWhatsapp(whatsapp, msg) {
			      var paramString = 'phone=' + whatsapp + '&text=' + msg;
			      var url = window.encodeURI('whatsapp://send?' + paramString);
			      var fallbackUrl = window.encodeURI('https://web.whatsapp.com/send?' + paramString);

			      if (isMobile.any) {
			          fallbackUrl = 'https://www.whatsapp.com/download/';
			          window.location = url;
			      } else {
			          window.open(fallbackUrl);
			          return false;
			      }

			      // Mobile detection
			      var now = Date.now();
			      var localAppInstallTimeout = window.setTimeout(function() {
			          if (Date.now() - now > 1250) return;
			          window.open(fallbackUrl,'_blank');
			      }, 5000);

			      // Desktop detection
			      window.addEventListener('blur', function() {
			          window.clearTimeout(localAppInstallTimeout);
			      });
			  };

	        $('.whatsapp-button').click(function() {
	            openWhatsapp('41991194181', 'Oi');
	        });
	    });
	</script>
	<!-- <script src="//api.handtalk.me/plugin/latest/handtalk.min.js"></script>
	<script>
		 var ht = new HT({
		 token: "014d149f0021406ed5ff98218347296b"
		 });
	</script>  -->
</body>
</html>