//<?php

<<<<<<< HEAD
$form->add(new \IPS\Helpers\Form\Select( 'birthdayInPost_area', \IPS\Settings::i()->birthdayInPost_area, false, array( 'options' => array(
	'infoList' => "birthdayInPost_infoList",
	'username' => "birthdayInPost_username"
) ) ) );
=======
	$form->add(new \IPS\Helpers\Form\Select( 'birthdayInPost_area', \IPS\Settings::i()->birthdayInPost_area, false, array( 'options' => array(
		'infoList' => "birthdayInPost_infoList",
		'username' => "birthdayInPost_username"
	) ) ) );
>>>>>>> 01fbfe311fa359128ae9e833adf331423f6615e2

if ( $values = $form->values() )
{
	$form->saveAsSettings();
	return TRUE;
}

return $form;