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

	'BB3INVITES_REGLOG'				=> 'Registration log by invitations',
	'BB3INVITES_REGLOG_EXPLAIN'				=> '',

	'USER_DELETED' => 'Deleted user',
	'INVITE_OWNER' => 'Who gave invitation',
	'INVITE_OWNER_ALL' => 'Show all invitations for this user',
	'INVITE_TAKER' => 'Who got an invite',
	'INVITE_DTACTIVE' => 'Date and time',
	'INVITE_DELETE' => 'Delete',
	'NO_DATA' => 'No data',
	'TOTAL_REGLOG' => 'Items total: %d',

));
