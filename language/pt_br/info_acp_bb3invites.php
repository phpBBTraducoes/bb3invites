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

	'ACP_BB3INVITES_CONFIG'				=> 'Configurações',
	'ACP_BB3INVITES_REGLOG'				=> 'Logs de registro por convites',
	'ACP_BB3INVITES_INVITELOG'				=> 'Logs de convites',

	'LOG_CONFIG_BB3INVITES_CONFIG'	=> '<strong>As configurações do BB3Invites foram alteradas</strong>',
	'LOG_CONFIG_BB3INVITES_REGLOG'	=> '<strong>Os logs de registro por convites foram apagados</strong>',
	'LOG_CONFIG_BB3INVITES_INVITELOG'	=> '<strong>Os logs de convites foram apagados</strong>',

	'ACL_CAT_PPKEXT' => 'Extensões PPK',

	'ACL_U_CANGIVEINVITE'		=> '<span style="font-weight:bold;color:#FFFFFF;">BB3Invites</span>: Gerenciamneto de convites',
));
