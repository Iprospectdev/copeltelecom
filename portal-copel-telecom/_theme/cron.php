<?php

function custom_times_cron( $schedules ) {
 
    $schedules['every_3m'] = array(
            'interval'  => 180,
            'display'   => "3 Minutos"
    );
     
    return $schedules;

}
add_filter( 'cron_schedules', 'custom_times_cron' );

if(!wp_next_scheduled('schedule_ligacoes')){
	wp_schedule_event(1460149200, 'daily', 'schedule_ligacoes'); // Noite
	wp_schedule_event(1460203200, 'daily', 'schedule_ligacoes'); // Manhã
}

add_action('schedule_ligacoes', 'schedule_ligacoes_contatos');

function schedule_ligacoes_contatos() {
	global $wpdb;
	$data = array(
		"nome" => "Teste ".date("j/m/Y H:i"),
		"motivo" => "TESTE DE CRON"
	);
	$wpdb->insert( 'contatos', $data );	
}