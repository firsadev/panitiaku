<?php

return [
	'fields' => [
		'about' => [
			'label' => 'About',
			'type' => 'Textarea',
			'rules' => 'required'
		],
		'occupation' => [
			'label' => 'What do you do for a living?',
			'type' => 'TextInput',
			'rules' => ''
		],
		'organizer' => [
			'label' => 'Nama Organizer',
			'type' => 'TextInput',
			'rules' => ''
		],
		'loggo_organizer' => [
			'label' => 'Loggo Organizer',
			'type' => 'FileUpload',
			'rules' => ''
		]
	],
];
