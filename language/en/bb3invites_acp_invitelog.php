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

	'BB3INVITES_INVITELOG'				=> 'Invitations log',
	'BB3INVITES_INVITELOG_EXPLAIN'				=> '',

	'USER_DELETED' => 'Deleted user',
	'INVITE_OWNER' => 'Who gave invitation',
	'INVITE_OWNER_ALL' => 'Show all invitations for this user',
	'INVITE_TAKER' => 'Who got an invite',
	'INVITE_COUNT' => 'Invitations',
	'INVITE_DTACTIVE' => 'Date and time',
	'INVITE_DELETE' => 'Delete',
	'NO_DATA' => 'No data',
	'TOTAL_INVITELOG' => 'Items total: %d',

	'INVITE_DESCR_USERS' => 'Users: %s',
	'INVITE_DESCR_GROUPS' => 'Groups: %s',
	'INVITE_DESCR_UPLOAD' => 'Bot for %dGb of upload',
	'INVITE_DESCR_TORRENTS' => 'Bot for %d torrents',
	'INVITE_DESCR_DAYS' => 'Bot for %d days since registration',
	'INVITE_DESCR_POSTS' => 'Bot for %d messages',
));
