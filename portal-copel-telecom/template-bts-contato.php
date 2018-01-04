<?php 
	session_start();
	if ($_SESSION["copeltelecom"]) {
		$session = json_decode($_SESSION["copeltelecom"]);
	}
?>
<div class="bts-contato">
	<div class="text-center">
		<div class="bt bt-fone btn_fale_com_a_gente">
			<i class="i-p-fone"></i>
			<span>Ligue grátis</span>
			0800 41 41 81
		</div>
		<a href="<?php $p = get_page_by_title("Contato"); echo get_permalink($p->ID); ?>" class="bt btn_fale_com_a_gente">
			<i class="i-p-chat"></i>
			<span>Formulário</span>
			Fale conosco
		</a>
	</div>
</div>