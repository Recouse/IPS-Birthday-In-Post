//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class hook111 extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'postContainer' => 
  array (
    0 => 
    array (
      'selector' => 'article > aside.ipsComment_author.cAuthorPane.ipsColumn.ipsColumn_medium.ipsResponsive_hidePhone > ul.cAuthorPane_info.ipsList_reset',
      'type' => 'add_after',
      'content' => '{{if \IPS\Settings::i()->birthdayInPost_area == "infoList"}}
{template="birthdayIndicator" group="plugins" location="global" app="core" params="$comment->author(), \'infoList\'"}
{{endif}}',
    ),
    1 => 
    array (
      'selector' => 'article > aside.ipsComment_author.cAuthorPane.ipsColumn.ipsColumn_medium.ipsResponsive_hidePhone > h3.ipsType_sectionHead.cAuthorPane_author.ipsType_blendLinks.ipsType_break',
      'type' => 'add_inside_end',
      'content' => '{{if \IPS\Settings::i()->birthdayInPost_area == "username"}}
{template="birthdayIndicator" group="plugins" location="global" app="core" params="$comment->author(), \'username\'"}
{{endif}}',
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */


}
