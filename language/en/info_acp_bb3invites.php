<?php

/**
*
* @package BB3Invites
* @copyright (c) 2016 PPK
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @translated Jim_Di
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_BB3INVITES'				=> 'BB3Invites',

	'ACP_BB3INVITES_CONFIG'				=> 'Settings',
	'ACP_BB3INVITES_REGLOG'				=> 'Registration log by invitations',
	'ACP_BB3INVITES_INVITELOG'				=> 'Invitations log',

	'LOG_CONFIG_BB3INVITES_CONFIG'	=> '<strong>Settings of BB3Invites was changed</strong>',
	'LOG_CONFIG_BB3INVITES_REGLOG'	=> '<strong>Registration log by invitations was cleared</strong>',
	'LOG_CONFIG_BB3INVITES_INVITELOG'	=> '<strong>Invitations log was cleared</strong>',

	'ACL_CAT_PPKEXT' => 'PPK Extensions',

	'ACL_U_CANGIVEINVITE'		=> '<span style="font-weight:bold;color:#FFFFFF;">BB3Invites</span>: Invitations management',
));
