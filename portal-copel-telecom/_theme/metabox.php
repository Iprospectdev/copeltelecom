<?php 
/*
 *
 * Metabox
 *
 */
add_filter( 'rwmb_meta_boxes', 'copeltelecom_mb' );
function copeltelecom_mb( $meta_boxes ) {

	$meta_boxes[] = array(
		'id'       => 'posts_meta',
		'title'    => 'Conteúdo',
		'pages'    => array( 'post'),
		'context'  => 'normal',
		'priority' => 'high',
		'fields' => array(
			array(
				'name'  => 'Gravata',
				'id'    => 'gravata',
				'type'  => 'textarea'
			)
		)
	);

    $meta_boxes[] = array(
        'title'      => "Arquivos",
        'post_types' => 'documentos',
        'fields'     => array(
            array(
                'id'   => 'files',
                'name' => "Arquivos",
                'type' => 'file_advanced'
            ),
        ),
    );

    $meta_boxes[] = array(
        'title'      => "Conteúdo",
        'post_types' => 'slider-home',
        'fields'     => array(
        	array(
				'name'    => "Local",
				'id'      => "slider_local",
				'type'    => 'checkbox_list',
				'options' => array(
					'F' => "Residencial",
					'J' => "Empresarial",
				),
			),
            array(
                'id'   				=> 'slider_image_desktop',
                'name' 				=> "Imagem Desktop",
                'type' 				=> 'image_advanced',
				'max_file_uploads' 	=> 1,
            ),

            array(
                'id'   				=> 'slider_image_mobile',
                'name' 				=> "Imagem Mobile",
                'type' 				=> 'image_advanced',
				'max_file_uploads' 	=> 1,
            ),

            array(
				'name' => "Texto Principal",
				'id'   => "slider_principal",
				'type' => 'textarea',
				'rows' => 3,
			),

            array(
				'name' => "Texto Principal",
				'id'   => "slider_principal_color",
				'type' => 'color',
			),

			array(
				'name' => "Texto Secundário",
				'id'   => "slider_secundario",
				'type' => 'textarea',
				'rows' => 3,
			),

            array(
				'name' => "Texto sem negrito",
				'id'   => "slider_sn",
				'type' => 'checkbox_list',
				'options' => array(
					1  => 'Sim',
				)
			),

            array(
				'name' => "Posição (margin-left)",
				'id'   => "slider_posicao_left",
				'type' => 'number',
				'desc' => 'Pixels'
			),

            array(
				'name' => "Posição (margin-top)",
				'id'   => "slider_posicao_top",
				'type' => 'number',
				'desc' => 'Pixels'
			),

            array(
				'name' => "Largura (max-width)",
				'id'   => "slider_width",
				'type' => 'number',
				'desc' => 'Pixels'
			),

            array(
				'name' => "Botão - link (Somente Residencial)",
				'id'   => "slider_botao_link",
				'type' => 'url',
				'desc' => 'Exemplo: http://www.google.com.br'
			),

            array(
				'name' => "Botão - texto (Somente Residencial)",
				'id'   => "slider_botao_text",
				'type' => 'text',
				'desc' => 'Exemplo: Veja como'
			),

            array(
				'name' => "Botão - style (Somente Residencial)",
				'id'   => "slider_botao_style",
				'type' => 'text',
				'desc' => 'Exemplo: color: #00000; border: 2px solid #000000;'
			),

            array(
				'name' => "Link (Somente Residencial)",
				'id'   => "slider_link",
				'type' => 'url',
				'desc' => 'Exemplo: http://www.google.com.br'
			),

            array(
				'name' => "Link botão saiba mais (Somente Residencial)",
				'id'   => "slider_link_saibamais",
				'type' => 'url',
				'desc' => 'Exemplo: http://www.google.com.br'
			),

        ),
    );


	return $meta_boxes;
	
}

?>