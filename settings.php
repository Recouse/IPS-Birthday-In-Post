//<?php

$form->add(new \IPS\Helpers\Form\Select( 'birthdayInPost_area', \IPS\Settings::i()->birthdayInPost_area, false, array( 'options' => array(
	'infoList' => "birthdayInPost_infoList",
	'username' => "birthdayInPost_username"
) ) ) );

if ( $values = $form->values() )
{
	$form->saveAsSettings();
	return TRUE;
}

return $form;