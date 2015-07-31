<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.0.0.309
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Alta Performance Profissional Form envio',
	'heading' => 'Envio de novo formulário',
	'success_redirect' => '../parabens.html',
	'resources' => array(
		'checkbox_checked' => 'Marcado',
		'checkbox_unchecked' => 'Desmarcado',
		'submitted_from' => 'Formulário enviado do site: %s',
		'submitted_by' => 'Endereço IP do visitante: %s',
		'too_many_submissions' => 'Muitos envios recentes deste IP',
		'failed_to_send_email' => 'Falha no envio do email',
		'invalid_reCAPTCHA_private_key' => 'Chave privada do reCAPTCHA inválida.',
		'invalid_field_type' => 'Tipo de campo desconhecido \"%s\".',
		'invalid_form_config' => 'O campo \"%s\" possui uma configuração inválida.',
		'unknown_method' => 'Método de solicitação de servidor desconhecido'
	),
	'email' => array(
		'from' => 'comite.marketing@metododerose.org',
		'to' => 'comite.marketing@metododerose.org'
	),
	'fields' => array(
		'custom_U21927' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Name\" é obrigatório.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Email\" é obrigatório.',
				'format' => 'O campo \"Email\" possui um email inválido.'
			)
		),
		'custom_U21931' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U21913' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Cell Phone',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Cell Phone\" é obrigatório.'
			)
		),
		'custom_U21918' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Message',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Message\" é obrigatório.'
			)
		)
	)
);

process_form($form);
?>
