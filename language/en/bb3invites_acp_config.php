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

	'BB3INVITES'				=> 'BB3Invites',
	'BB3INVITES_EXPLAIN'				=> '',

	'BB3INVITES_ENABLED'				=> 'Registration only for invites',
	'BB3INVITES_ENABLED_BUT'				=> 'Yes, but an invite is not required',
	'BB3INVITES_ENABLED_EXPLAIN'		=> '',

	'BB3INVITES_USER_ACTIVATE'				=> 'Activation of invites by users',
	'BB3INVITES_USER_ACTIVATE_EXPLAIN'		=> 'Allow activation of invites by users, otherwise it will only be possible to issue already activated invites',

	'BB3INVITES_AUTO_PERPOSTS'				=> 'Invitations for messages',
	'BB3INVITES_AUTO_PERPOSTS_EXPLAIN'		=> 'Give this number of invitations for specified number of messages, i.e for specified number of messages users will recieve specified number of invitations (accrual of invitations occurs once a day)',
	'BB3INVITES_AUTO_PERDAYS'				=> 'Invitations for days since registration',
	'BB3INVITES_AUTO_PERDAYS_EXPLAIN'		=> 'Give this number of invitations for specified number of days since registration (in days)',
	'BB3INVITES_AUTO_PERTORRENTS'				=> 'Invitations for torrents',
	'BB3INVITES_AUTO_PERTORRENTS_EXPLAIN'		=> 'Give this number of invitations for specified number of torrents (thiws option works only wher <strong>xbtBB3cker</strong> extension is installed)',
	'BB3INVITES_AUTO_PERUPLOAD'				=> 'Invitations for upload',
	'BB3INVITES_AUTO_PERUPLOAD_EXPLAIN'		=> 'Give this number of invitations for specified number of upload (in Gb)',

	'BB3INVITES_FOR' => 'for',
	'BB3INVITES_INVITES' => 'invitations',
	'BB3INVITES_POSTS' => 'messages',
	'BB3INVITES_DAYS' => 'days since registration',
	'BB3INVITES_TORRENTS' => 'torrents',
	'BB3INVITES_UPLOAD' => 'Gb of upload',

	'BB3INVITES_DELINVITES'				=> 'Delete invitations',
	'BB3INVITES_DELINVITES_EXPLAIN'		=> '',
	'BB3INVITES_LOG_INVITES'				=> 'Write invitations log',
	'BB3INVITES_LOG_INVITES_EXPLAIN'		=> 'Write all info about invitations to a log',
	'BB3INVITES_RESET_COUNTERS'				=> 'Reset counters',
	'BB3INVITES_RESET_COUNTERS_EXPLAIN'		=> 'Reset invitations counters, also you can delete all activated and unused invitations, otherwise they will be issued again',

	'BB3INVITES_DELACTIVE'				=> 'Activated',
	'BB3INVITES_DELVALID'				=> 'Not activated',
	'BB3INVITES_DELALL'				=> 'All',

	'BB3INVITES_NEW_VERSION' => 'A new version of the extension is available',

	'ACP_BB3INVITES_GIVE' => 'Give invitations',
	'BB3INVITES_SELECT_GROUPS' => 'Users of the groups',
	'BB3INVITES_SELECT_GROUPS_EXPLAIN' => 'Give invitations to users from the selected groups (group must be user default group)',
	'BB3INVITES_INVITES_COUNT' => 'Amount of invitations',
	'BB3INVITES_INVITES_COUNT_EXPLAIN' => 'Give specified number of invites',

	'BB3INVITES_SELECT_USERS' => 'Specified users',
	'BB3INVITES_SELECT_USERS_EXPLAIN' => 'Give invitations to specified users (each username from a new line)',
	'SELECT_USERS' => 'choose users',

));
