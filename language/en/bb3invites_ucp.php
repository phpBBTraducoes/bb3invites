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

	'INVITES_DISABLED' => 'Invitations disabled or you does not have access rights.',

	'UCP_ACTIVEINVITES' => 'Amount of invitations',
	'UCP_ACTIVEINVITES_EXPLAIN' => '',

	'USER_INVITES_EXPLAIN' => 'invitations used: <strong>%d</strong>, invitations unused: <strong>%d</strong>',
	'DELETE_VALID_INVITES' => 'delete unused invitations (<span style="color:#FF0000;">non-recoverable</span>)',
	'ACTIVATE_INVITES' => 'activate specified amount of invitations',
	'ACTIVATE_DISABLED' => 'Invitations activation disabled',

	'SHOW_INVITES_TAKERS' => 'list of registered users for your invitations',
	'SHOW_INVITES_CODES' => 'list of unused invitations',

	'INVITES' => 'Invitations',
	'INVITES_EXPLAIN' => '',

	'USER_DELETED' => 'User does not exist',

	'VALID_INVITES_DELETED' => 'Unused invitations was deleted',
	'INVITES_ACTIVATED' => 'Invitations activated',
));
